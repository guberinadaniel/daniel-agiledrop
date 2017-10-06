<?php

/* core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig */
class __TwigTemplate_39b8482d31c93aa5246575fc7abab563ebb922b875ac9a1758a48441aaa422d8 extends Twig_Template
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
        $tags = array("set" => 14, "if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 14
        $context["classes"] = array(0 => "layout", 1 => "layout--twocol");
        // line 19
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 20
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 21
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array())) {
                // line 22
                echo "      <div class=\"layout__region layout__region--top\">
        ";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array())) {
                // line 28
                echo "      <div class=\"layout__region layout__region--first\">
        ";
                // line 29
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second", array())) {
                // line 34
                echo "      <div class=\"layout__region layout__region--second\">
        ";
                // line 35
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "second", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array())) {
                // line 40
                echo "      <div class=\"layout__region layout__region--bottom\">
        ";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 44
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol/layout--twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  99 => 41,  96 => 40,  94 => 39,  91 => 38,  85 => 35,  82 => 34,  80 => 33,  77 => 32,  71 => 29,  68 => 28,  66 => 27,  63 => 26,  57 => 23,  54 => 22,  52 => 21,  47 => 20,  45 => 19,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a two-column layout.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--twocol',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div class=\"layout__region layout__region--top\">
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first %}
      <div class=\"layout__region layout__region--first\">
        {{ content.first }}
      </div>
    {% endif %}

    {% if content.second %}
      <div class=\"layout__region layout__region--second\">
        {{ content.second }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div class=\"layout__region layout__region--bottom\">
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
";
    }
}
