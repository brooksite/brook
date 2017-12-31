<?php

/* themes/mbase/templates/content/node.html.twig */
class __TwigTemplate_072529e06c2b26cdf1408b9e62e27c4ddbeb6f1662d60776e97c4e6db7b34c4e extends Twig_Template
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
        $tags = array("set" => 69, "if" => 85, "trans" => 103);
        $filters = array("clean_class" => 74, "without" => 92);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 69
        $context["classes"] = array(0 => "node", 1 => "clearfix", 2 => "panel", 3 => "panel-default", 4 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 74
($context["node"] ?? null), "bundle", array()))), 5 => (($this->getAttribute(        // line 75
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 6 => (($this->getAttribute(        // line 76
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 7 => (( !$this->getAttribute(        // line 77
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 8 => ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 81
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  <div class = \"panel-body\">
    ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 85
        if ( !($context["page"] ?? null)) {
            // line 86
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">
    <a href=\"";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
    </h2>
    ";
        }
        // line 90
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    <div";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links", "comment", "comment_forum"), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 96
        if ((($context["display_submitted"] ?? null) || $this->getAttribute(($context["content"] ?? null), "links", array()))) {
            // line 97
            echo "  <footer class=\"node__meta panel-footer\">
    <div class=\"submitted row\">

    <div";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted col-xs-12 col-sm-9 col-md-10"), "method"), "html", null, true));
            echo ">
      ";
            // line 101
            if (($context["display_submitted"] ?? null)) {
                // line 102
                echo "      <div class = \"clearfix\">
        ";
                // line 103
                echo t("Submitted by <strong>@author_name</strong> on <strong>@date</strong>", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 104
                echo "      </div>
      ";
            }
            // line 106
            echo "      ";
            if ($this->getAttribute(($context["content"] ?? null), "links", array())) {
                // line 107
                echo "        <div class = \"clearfix margin-sm-top\">
          ";
                // line 108
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 111
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
    </div>

    ";
            // line 114
            if (($context["author_picture"] ?? null)) {
                // line 115
                echo "      <div class = \"col-xs-12 col-sm-3 col-md-2 text-right meta-data-user-picture\">
        ";
                // line 116
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 119
            echo "    </div>
  </footer>
  ";
        }
        // line 122
        echo "
</article>
";
        // line 124
        if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
            // line 125
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
            echo "
";
        }
        // line 127
        echo "
";
        // line 128
        if ($this->getAttribute(($context["content"] ?? null), "comment_forum", array())) {
            // line 129
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment_forum", array()), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 129,  164 => 128,  161 => 127,  155 => 125,  153 => 124,  149 => 122,  144 => 119,  138 => 116,  135 => 115,  133 => 114,  126 => 111,  120 => 108,  117 => 107,  114 => 106,  110 => 104,  108 => 103,  105 => 102,  103 => 101,  99 => 100,  94 => 97,  92 => 96,  85 => 92,  81 => 91,  76 => 90,  68 => 87,  63 => 86,  61 => 85,  57 => 84,  50 => 81,  48 => 78,  47 => 77,  46 => 76,  45 => 75,  44 => 74,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mbase/templates/content/node.html.twig", "/app/drupal/themes/mbase/templates/content/node.html.twig");
    }
}
