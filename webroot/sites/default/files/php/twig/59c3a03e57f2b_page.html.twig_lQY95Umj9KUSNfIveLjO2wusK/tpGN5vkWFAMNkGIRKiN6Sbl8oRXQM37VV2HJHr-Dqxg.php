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
        $tags = array("if" => 29);
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
        <div class=\"fluid\">
        ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        </div>
    </header>
    <div class=\"fluid\">
    ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
    </div>
    <div class=\"fluid\">
    ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "baner", array()), "html", null, true));
        echo "
    </div>
    <div class=\"fluid\">
    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_filter", array()), "html", null, true));
        echo "
    </div>
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        <div class=\"layout-content-first-second\">
            <div class=\"fluid\">
            ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_first", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_second", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 30
            echo "            <aside class=\"layout-sidebar-first\" role=\"complementary\">
                ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 36
            echo "            <aside class=\"layout-sidebar-second\" role=\"complementary\">
                ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 40
        echo "
    </main>

    <footer role=\"contentinfo\">
        ";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
        ";
        }
        // line 47
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 48
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 50
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 51
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
        ";
        }
        // line 53
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
        return array (  151 => 53,  145 => 51,  142 => 50,  136 => 48,  133 => 47,  127 => 45,  125 => 44,  119 => 40,  113 => 37,  110 => 36,  108 => 35,  105 => 34,  99 => 31,  96 => 30,  94 => 29,  89 => 27,  84 => 25,  77 => 21,  68 => 15,  62 => 12,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"layout-container\">

    <header role=\"banner\">
        <div class=\"fluid\">
        {{ page.header }}
        </div>
    </header>
    <div class=\"fluid\">
    {{ page.navigation }}
    </div>
    <div class=\"fluid\">
    {{ page.baner }}
    </div>
    <div class=\"fluid\">
    {{ page.search_filter }}
    </div>
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            {{ page.content }}
        </div>
        <div class=\"layout-content-first-second\">
            <div class=\"fluid\">
            {{ page.featured_first }}
            </div>
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
