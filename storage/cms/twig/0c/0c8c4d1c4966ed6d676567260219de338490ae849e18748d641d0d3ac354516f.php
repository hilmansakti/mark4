<?php

/* /var/www/html/mark4/themes/responsiv-flat/pages/404.htm */
class __TwigTemplate_1ded2cdd7202be16addcf7dadded067f57e03e35ed41e1de97b659ccf17e425f extends Twig_Template
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
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>You appear to be lost...</h1>
                <p>We're very sorry, but the page you requested <em>cannot be found</em> here.</p>
                <p>Try returning to where you started with this compass.</p>
                <p><small><em>Error code: 404</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/mark4/themes/responsiv-flat/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"{{ 'assets/images/icons/svg/compas.svg'|theme }}\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>You appear to be lost...</h1>
                <p>We're very sorry, but the page you requested <em>cannot be found</em> here.</p>
                <p>Try returning to where you started with this compass.</p>
                <p><small><em>Error code: 404</em></small>
            </div>
        </div>
    </div>
</div>", "/var/www/html/mark4/themes/responsiv-flat/pages/404.htm", "");
    }
}
