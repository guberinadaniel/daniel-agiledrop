<?php

/* themes/custom/agiledrop_kick/templates/core/page.html.twig */
class __TwigTemplate_930f09557c552322bbe6afbfac06efab7019f74e4af4cef9ecdee44708811e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"layout-container\">

    <header role=\"banner\">
        ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </header>

    ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "baner", array()), "html", null, true));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_filter", array()), "html", null, true));
        echo "

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        <div class=\"layout-content-first-second\">
            ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_first", array()), "html", null, true));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_second", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 21
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 22
            echo "            <aside class=\"layout-sidebar-first\" role=\"complementary\">
                ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 28
            echo "            <aside class=\"layout-sidebar-second\" role=\"complementary\">
                ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 32
        echo "
    </main>

    <footer role=\"contentinfo\">
        ";
        // line 36
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
        ";
        }
        // line 39
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 40
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 42
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 43
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
        ";
        }
        // line 45
        echo "    </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agiledrop_kick/templates/core/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  137 => 43,  134 => 42,  128 => 40,  125 => 39,  119 => 37,  117 => 36,  111 => 32,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  91 => 23,  88 => 22,  86 => 21,  81 => 19,  77 => 18,  71 => 15,  62 => 9,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"layout-container\">

    <header role=\"banner\">
        {{ page.header }}
    </header>

    {{ page.navigation }}
    {{ page.baner }}
    {{ page.search_filter }}

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            {{ page.content }}
        </div>
        <div class=\"layout-content-first-second\">
            {{ page.featured_first }}
            {{ page.featured_second }}
        </div>
        {% if page.sidebar_first %}
            <aside class=\"layout-sidebar-first\" role=\"complementary\">
                {{ page.sidebar_first }}
            </aside>
        {% endif %}

        {% if page.sidebar_second %}
            <aside class=\"layout-sidebar-second\" role=\"complementary\">
                {{ page.sidebar_second }}
            </aside>
        {% endif %}

    </main>

    <footer role=\"contentinfo\">
        {% if page.footer_top %}
            {{ page.footer_top }}
        {% endif %}
        {% if page.footer_menu %}
            {{ page.footer_menu }}
        {% endif %}
        {% if page.footer_bottom %}
            {{ page.footer_bottom }}
        {% endif %}
    </footer>

</div>";
    }
}
