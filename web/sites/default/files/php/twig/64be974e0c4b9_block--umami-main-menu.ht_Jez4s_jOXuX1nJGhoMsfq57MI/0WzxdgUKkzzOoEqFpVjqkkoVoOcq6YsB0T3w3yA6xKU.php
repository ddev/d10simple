<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig */
class __TwigTemplate_89bfb33ddeae7a3c3cf1e1d994c3a8ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = [0 => "block", 1 => "block-menu", 2 => "navigation", 3 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 40
($context["derivative_plugin_id"] ?? null), 40, $this->source))) . "__wrapper")];
        // line 43
        echo "
<div class=\"menu-main-togglewrap\">
  <button type=\"button\" name=\"menu_toggle\" class=\"menu-main-toggle\" data-drupal-selector=\"menu-main-toggle\" aria-label=\"Toggle the menu\">";
        // line 45
        $this->loadTemplate(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/images/svg/menu-icon.svg"), "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig", 45)->display($context);
        echo "</button>
</div>

";
        // line 48
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 49
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 49, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 51
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 51)) {
            // line 52
            echo "    ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 52);
            // line 53
            echo "  ";
        }
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 54, $this->source), "html", null, true);
        echo "
  <h2";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</h2>
  ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 56, $this->source), "html", null, true);
        echo "

  ";
        // line 59
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "</nav>
";
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 60, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 60,  95 => 59,  90 => 62,  87 => 59,  82 => 56,  76 => 55,  71 => 54,  68 => 53,  65 => 52,  62 => 51,  55 => 49,  53 => 48,  47 => 45,  43 => 43,  41 => 40,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "include" => 45, "if" => 51, "block" => 59);
        static $filters = array("clean_class" => 40, "clean_id" => 48, "escape" => 49, "without" => 49);
        static $functions = array("active_theme_path" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
