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
        $tags = array("if" => 41);
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

    <section class=\"navigation\">
        <div class=\"fluid\">
            ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        </div>
    </section>

    <section class=\"banner\">
        <div class=\"fluid\">
            ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "baner", array()), "html", null, true));
        echo "
        </div>
    </section>

    <section class=\"filter\">
        <div class=\"fluid\">
            ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_filter", array()), "html", null, true));
        echo "
        </div>
    </section>
    
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        <div class=\"layout-content-first-second\">
            <section class=\"featured-first\">
                <div class=\"fluid\">
                    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_first", array()), "html", null, true));
        echo "
                </div>
            </section>
            ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_second", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 41
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 42
            echo "            <aside class=\"layout-sidebar-first\" role=\"complementary\">
                ";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 48
            echo "            <aside class=\"layout-sidebar-second\" role=\"complementary\">
                ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
        ";
        }
        // line 52
        echo "
    </main>

    <footer role=\"contentinfo\">
        ";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 57
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
        ";
        }
        // line 59
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 60
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 62
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 63
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
        ";
        }
        // line 65
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
        return array (  163 => 65,  157 => 63,  154 => 62,  148 => 60,  145 => 59,  139 => 57,  137 => 56,  131 => 52,  125 => 49,  122 => 48,  120 => 47,  117 => 46,  111 => 43,  108 => 42,  106 => 41,  101 => 39,  95 => 36,  87 => 31,  76 => 23,  67 => 17,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"layout-container\">

    <header role=\"banner\">
        <div class=\"fluid\">
            {{ page.header }}
        </div>
    </header>

    <section class=\"navigation\">
        <div class=\"fluid\">
            {{ page.navigation }}
        </div>
    </section>

    <section class=\"banner\">
        <div class=\"fluid\">
            {{ page.baner }}
        </div>
    </section>

    <section class=\"filter\">
        <div class=\"fluid\">
            {{ page.search_filter }}
        </div>
    </section>
    
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            {{ page.content }}
        </div>
        <div class=\"layout-content-first-second\">
            <section class=\"featured-first\">
                <div class=\"fluid\">
                    {{ page.featured_first }}
                </div>
            </section>
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
