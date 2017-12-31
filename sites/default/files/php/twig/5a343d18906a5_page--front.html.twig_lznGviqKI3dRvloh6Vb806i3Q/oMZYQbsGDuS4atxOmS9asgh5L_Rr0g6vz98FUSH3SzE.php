<?php

/* themes/brook_family_site/templates/layout/page--front.html.twig */
class __TwigTemplate_5908ea4b7b9261987f39ccbdfc17206e62354d18e07561f4b44bc94604030f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 65, "block" => 66);
        $filters = array("t" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('t'),
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

        // line 65
        if (((($this->getAttribute(($context["page"] ?? null), "branding", array()) || $this->getAttribute(($context["page"] ?? null), "navigation", array())) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 66
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "home_welcome", array())) {
            // line 100
            echo "  <section class = \"header-brown-content\">
    <div class = \"";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " main-block\">
      ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_welcome", array()), "html", null, true));
            echo "
    </div>
  </section>
";
        } elseif ($this->getAttribute(        // line 105
($context["snippet"] ?? null), "home_welcome", array())) {
            // line 106
            echo "  <section class = \"header-brown-content\">
    <div class = \"";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " main-block\">
      ";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "home_welcome", array()), "html", null, true));
            echo "
    </div>
  </section>
";
        }
        // line 112
        echo "
    ";
        // line 113
        if ($this->getAttribute(($context["page"] ?? null), "content_light_orange", array())) {
            // line 114
            echo "      <section  id=\"content-light-orange\" class = \"content-light-orange plugin-content\">
         <div class = \"";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_light_orange", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 119
($context["snippet"] ?? null), "content_light_orange", array())) {
            // line 120
            echo "      <section  id=\"content-light-orange\" class = \"content-light-orange plugin-content\">
         <div class = \"";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "content_light_orange", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "content_dark_pink", array())) {
            // line 128
            echo "      <section id=\"content-dark-pink\" class = \"content-dark-pink plugin-content\">
         <div class = \"";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_dark_pink", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 133
($context["snippet"] ?? null), "content_dark_pink", array())) {
            // line 134
            echo "      <section id=\"content-dark-pink\" class = \"content-dark-pink plugin-content\">
         <div class = \"";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 136
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "content_dark_pink", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        }
        // line 140
        echo "
<div class=\"main-container ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">

  <header role=\"banner\" id=\"page-header\">
    ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  </header> <!-- /#page-header -->

  <div class=\"row\">

    ";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 150
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>  <!-- End first aside. -->
    ";
        }
        // line 154
        echo "
    <section";
        // line 155
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_column_attributes"] ?? null), "html", null, true));
        echo ">
      ";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 157
            echo "        <div class=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 159
        echo "      <a id=\"main-content\"></a>
      ";
        // line 160
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 161
        if (($context["title"] ?? null)) {
            // line 162
            echo "        <h1 class=\"page-header\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
      ";
        }
        // line 164
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
        echo "
      ";
        // line 167
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
        echo "
      ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

      ";
        // line 170
        if (($context["action_links"] ?? null)) {
            // line 171
            echo "        <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
      ";
        }
        // line 173
        echo "
      ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </section>

    ";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 178
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside> <!-- End second aside. -->
    ";
        }
        // line 182
        echo "
  </div>
</div>
<footer id = \"footer-wrap\" class = \"footer-section section footer-wrap text-center\">

  ";
        // line 187
        if ($this->getAttribute(($context["page"] ?? null), "footer_signup", array())) {
            // line 188
            echo "  <div class = \"footer-subscribe\">
    <div class = \"";
            // line 189
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
    ";
            // line 190
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_signup", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        } elseif ($this->getAttribute(        // line 193
($context["snippet"] ?? null), "footer_signup", array())) {
            // line 194
            echo "  <div class = \"footer-subscribe\">
    <div class = \"";
            // line 195
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
    ";
            // line 196
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_signup", array()), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 200
        echo "        
  <div class = \"footer-copyright-social\">
    <div class = \"";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
      <div class = \"row\">
        ";
        // line 204
        if ($this->getAttribute(($context["page"] ?? null), "footer_copyright", array())) {
            // line 205
            echo "        <div class = \"col-sm-8 footer-copyright text-left\">
          ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_copyright", array()), "html", null, true));
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 208
($context["snippet"] ?? null), "footer_copyright", array())) {
            // line 209
            echo "        <div class = \"col-sm-8 footer-copyright text-left\">
          ";
            // line 210
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_copyright", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 212
        echo "      

        ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "footer_social", array())) {
            // line 215
            echo "        <div class = \"footer-social col-sm-4 text-right\">
          ";
            // line 216
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_social", array()), "html", null, true));
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 218
($context["snippet"] ?? null), "footer_social", array())) {
            // line 219
            echo "        <div class = \"footer-social col-sm-4 text-right\">
          ";
            // line 220
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_social", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 223
        echo "      </div>
    </div>
  </div>
</footer>

";
    }

    // line 66
    public function block_navbar($context, array $blocks = array())
    {
        // line 67
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => "header-wrap header-navyblue-slider-menu"), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\" data-spy=\"affix\"  data-offset-top=\"70\">
    ";
        // line 68
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 69
            echo "      <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
    ";
        }
        // line 71
        echo "      <div class=\"navbar-header\">
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", array()), "html", null, true));
        echo "
        ";
        // line 74
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
        echo "</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>

      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", array()) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 84
            echo "        <div class=\"navbar-collapse collapse\">
          <nav role=\"navigation\">
          ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
          ";
            // line 87
            if (($context["secondary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 88
            echo "          ";
            if (($context["primary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 89
            echo "          </nav>
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    public function getTemplateName()
    {
        return "themes/brook_family_site/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 95,  427 => 93,  424 => 92,  419 => 89,  412 => 88,  406 => 87,  402 => 86,  398 => 84,  395 => 83,  385 => 75,  382 => 74,  378 => 72,  375 => 71,  369 => 69,  367 => 68,  362 => 67,  359 => 66,  350 => 223,  344 => 220,  341 => 219,  339 => 218,  334 => 216,  331 => 215,  329 => 214,  325 => 212,  319 => 210,  316 => 209,  314 => 208,  309 => 206,  306 => 205,  304 => 204,  299 => 202,  295 => 200,  288 => 196,  284 => 195,  281 => 194,  279 => 193,  273 => 190,  269 => 189,  266 => 188,  264 => 187,  257 => 182,  251 => 179,  248 => 178,  246 => 177,  240 => 174,  237 => 173,  231 => 171,  229 => 170,  224 => 168,  220 => 167,  216 => 166,  210 => 164,  204 => 162,  202 => 161,  198 => 160,  195 => 159,  189 => 157,  187 => 156,  183 => 155,  180 => 154,  174 => 151,  171 => 150,  169 => 149,  161 => 144,  155 => 141,  152 => 140,  145 => 136,  141 => 135,  138 => 134,  136 => 133,  130 => 130,  126 => 129,  123 => 128,  121 => 127,  118 => 126,  111 => 122,  107 => 121,  104 => 120,  102 => 119,  96 => 116,  92 => 115,  89 => 114,  87 => 113,  84 => 112,  77 => 108,  73 => 107,  70 => 106,  68 => 105,  62 => 102,  58 => 101,  55 => 100,  53 => 99,  50 => 98,  46 => 66,  44 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/brook_family_site/templates/layout/page--front.html.twig", "/app/drupal/themes/brook_family_site/templates/layout/page--front.html.twig");
    }
}
