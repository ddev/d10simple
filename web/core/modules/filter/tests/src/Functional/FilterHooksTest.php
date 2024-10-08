<?php

declare(strict_types=1);

namespace Drupal\Tests\filter\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\user\RoleInterface;

/**
 * Tests hooks for text formats insert/update/disable.
 *
 * @group filter
 */
class FilterHooksTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['node', 'filter_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests hooks on format management.
   *
   * Tests that hooks run correctly on creating, editing, and deleting a text
   * format.
   */
  public function testFilterHooks(): void {
    // Create content type, with underscores.
    $type_name = 'test_' . $this->randomMachineName();
    $type = $this->drupalCreateContentType(['name' => $type_name, 'type' => $type_name]);
    $node_permission = "create $type_name content";

    $admin_user = $this->drupalCreateUser([
      'administer filters',
      'administer nodes',
      $node_permission,
    ]);
    $this->drupalLogin($admin_user);

    // Add a text format.
    $name = $this->randomMachineName();
    $edit = [];
    $edit['format'] = $this->randomMachineName();
    $edit['name'] = $name;
    $edit['roles[' . RoleInterface::ANONYMOUS_ID . ']'] = 1;
    $this->drupalGet('admin/config/content/formats/add');
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains("Added text format {$name}.");
    $this->assertSession()->pageTextContains('hook_filter_format_insert invoked.');

    $format_id = $edit['format'];

    // Update text format.
    $edit = [];
    $edit['roles[' . RoleInterface::AUTHENTICATED_ID . ']'] = 1;
    $this->drupalGet('admin/config/content/formats/manage/' . $format_id);
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains("The text format {$name} has been updated.");
    $this->assertSession()->pageTextContains('hook_filter_format_update invoked.');

    // Use the format created.
    $title = $this->randomMachineName(8);
    $edit = [];
    $edit['title[0][value]'] = $title;
    $edit['body[0][value]'] = $this->randomMachineName(32);
    $edit['body[0][format]'] = $format_id;
    $this->drupalGet("node/add/{$type->id()}");
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains($type_name . ' ' . $title . ' has been created.');

    // Disable the text format.
    $this->drupalGet('admin/config/content/formats/manage/' . $format_id . '/disable');
    $this->submitForm([], 'Disable');
    $this->assertSession()->pageTextContains("Disabled text format {$name}.");
    $this->assertSession()->pageTextContains('hook_filter_format_disable invoked.');
  }

}
