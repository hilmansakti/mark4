<?php

/* /var/www/html/mark4/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_7a6f6a497768e697dc5a802b0cbac236384a33792fb94b88e486374efe5c0fd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "pages" => array("name" => "Pages", "sublinks" => array("about" => array(0 => "samples/about", 1 => "About Us"), "contact" => array(0 => "samples/contact", 1 => "Contact Us"), "pricing-table" => array(0 => "samples/pricing-table", 1 => "Pricing Table"), "services" => array(0 => "samples/services", 1 => "Services"), "signin" => array(0 => "samples/signin", 1 => "Sign In"), "register" => array(0 => "samples/register", 1 => "Register"), "error" => array(0 => "error", 1 => "Error Page"), "404" => array(0 => "404", 1 => "404 Page"))), "portfolio" => array("name" => "Portfolio", "sublinks" => array("portfolio" => array(0 => "portfolio/portfolio", 1 => "Portfolio"), "project" => array(0 => "portfolio/project", 1 => "Project"))), "blog" => array("name" => "Blog", "sublinks" => array("blog" => array(0 => "blog/blog", 1 => "Blog"), "post" => array(0 => "blog/post", 1 => "Blog Post"))), "shop" => array("name" => "Shop", "sublinks" => array("shop" => array(0 => "shop/shop", 1 => "Shop"), "product" => array(0 => "shop/product", 1 => "Product"), "cart" => array(0 => "shop/cart", 1 => "Cart"))), "ui-elements" => array(0 => "ui-elements", 1 => "UI Elements"));
        // line 44
        echo "
";
        // line 67
        echo "
";
        // line 68
        $context["nav"] = $this;
        // line 69
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"row\">
        <!--
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"fa fa-bars\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Flat</a>
            </div>
            <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                    ";
        // line 83
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                    <li>
                        <button
                            onclick=\"window.location='";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/signin");
        echo "'\"
                            class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                            Sign in
                        </button>
                    </li>
                </ul>
            </div>
            -->
            <div class=\"col-md-2\">
                <a class=\"navbar-brand\" href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Flat</a>
            </div>
            <div class=\"col-md-8\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                    <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                        ";
        // line 100
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                    <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                        <li>
                            <a href=\"\">
                                <span class=\"fa fa-search\"></span>
                            </a>
                        </li>
                        <li>
                            <a href=\"\">
                                <i class=\"fa fa-shopping-cart\">
                              <!-- <i class=\"fa fa-circle fa-stack-2x\"></i> -->
                                  <!--<span class=\"badge badge-danger\">11</span>-->
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
";
        // line 126
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 127
        echo "    <style type=\"text/css\">
          .fa-stack[data-count]:after{
          position:absolute;
          left:60%;
          top:1%;
          content: attr(data-count);
          font-size:30%;
          padding:.6em;
          border-radius:999px;
          line-height:.75em;
          color: white;
          background:rgba(255,0,0,.85);
          text-align:center;
          min-width:2em;
          font-weight:bold;
          
          .caret {
            transform: rotate(180deg);
            transition: all .25s ease-out;
          }
        }
    </style>
";
        // line 126
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 150
        echo "
";
        // line 151
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 152
        echo "<script type=\"text/javascript\">
    
    \$(document).ready(function(){
        \$('ul.nav li.dropdown').hover(function() {
            \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            \$(this).find('.caret').css({\"transform\": \"rotate(180deg)\", \"transition\": \"all .25s ease-out\"});
        }, function() {
            \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            \$(this).find('.caret').css({\"transform\": \"rotate(0deg)\", \"transition\": \"all .25s ease-out\"});
        });
    })
</script>
";
        // line 151
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    // line 45
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "    ";
            $context["subnav"] = $this;
            // line 47
            echo "
    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 49
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 51
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) : ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["link"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))))));
                echo "\"
                ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 53
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 55
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) : ((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["link"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret .down-caret\"></span>";
                }
                // line 57
                echo "            </a>
            ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    // line 59
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 61
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array()));
                    echo "
                </ul>
            ";
                }
                // line 64
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/mark4/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 64,  219 => 61,  215 => 59,  213 => 58,  210 => 57,  206 => 56,  202 => 55,  196 => 53,  192 => 52,  188 => 51,  180 => 49,  176 => 48,  173 => 47,  170 => 46,  158 => 45,  154 => 151,  140 => 152,  138 => 151,  135 => 150,  133 => 126,  109 => 127,  107 => 126,  78 => 100,  70 => 95,  58 => 86,  52 => 83,  45 => 79,  33 => 69,  31 => 68,  28 => 67,  25 => 44,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],
        'pages': {
            name: 'Pages',
            sublinks: {
                'about':         ['samples/about', 'About Us'],
                'contact':       ['samples/contact', 'Contact Us'],
                'pricing-table': ['samples/pricing-table', 'Pricing Table'],
                'services':      ['samples/services', 'Services'],
                'signin':        ['samples/signin', 'Sign In'],
                'register':      ['samples/register', 'Register'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'portfolio': {
            name: 'Portfolio',
            sublinks: {
                'portfolio': ['portfolio/portfolio', 'Portfolio'],
                'project': ['portfolio/project', 'Project'],
            },
        },
        'blog': {
            name: 'Blog',
            sublinks: {
                'blog': ['blog/blog', 'Blog'],
                'post': ['blog/post', 'Blog Post'],
            },
        },
        'shop': {
            name: 'Shop',
            sublinks: {
                'shop': ['shop/shop', 'Shop'],
                'product': ['shop/product', 'Product'],
                'cart': ['shop/cart', 'Cart'],
            },
        },
        'ui-elements': ['ui-elements', 'UI Elements'],

    }
%}

{% macro render_menu(links) %}
    {% import _self as subnav %}

    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret .down-caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ subnav.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav id=\"layout-nav\" class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"row\">
        <!--
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"fa fa-bars\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Flat</a>
            </div>
            <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                    {{ nav.render_menu(links) }}
                    <li>
                        <button
                            onclick=\"window.location='{{ 'samples/signin'|page }}'\"
                            class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                            Sign in
                        </button>
                    </li>
                </ul>
            </div>
            -->
            <div class=\"col-md-2\">
                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Flat</a>
            </div>
            <div class=\"col-md-8\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                    <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                        {{ nav.render_menu(links) }}
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\" style=\"text-align: center\">
                    <ul class=\"nav navbar-nav\" style=\"display: inline-block;float: none;vertical-align: top;\">
                        <li>
                            <a href=\"\">
                                <span class=\"fa fa-search\"></span>
                            </a>
                        </li>
                        <li>
                            <a href=\"\">
                                <i class=\"fa fa-shopping-cart\">
                              <!-- <i class=\"fa fa-circle fa-stack-2x\"></i> -->
                                  <!--<span class=\"badge badge-danger\">11</span>-->
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
{% put styles %}
    <style type=\"text/css\">
          .fa-stack[data-count]:after{
          position:absolute;
          left:60%;
          top:1%;
          content: attr(data-count);
          font-size:30%;
          padding:.6em;
          border-radius:999px;
          line-height:.75em;
          color: white;
          background:rgba(255,0,0,.85);
          text-align:center;
          min-width:2em;
          font-weight:bold;
          
          .caret {
            transform: rotate(180deg);
            transition: all .25s ease-out;
          }
        }
    </style>
{% endput %}

{% put scripts %}
<script type=\"text/javascript\">
    
    \$(document).ready(function(){
        \$('ul.nav li.dropdown').hover(function() {
            \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            \$(this).find('.caret').css({\"transform\": \"rotate(180deg)\", \"transition\": \"all .25s ease-out\"});
        }, function() {
            \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            \$(this).find('.caret').css({\"transform\": \"rotate(0deg)\", \"transition\": \"all .25s ease-out\"});
        });
    })
</script>
{% endput %}", "/var/www/html/mark4/themes/responsiv-flat/partials/nav.htm", "");
    }
}
