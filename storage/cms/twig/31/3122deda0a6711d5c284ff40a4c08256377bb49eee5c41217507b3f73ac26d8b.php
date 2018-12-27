<?php

/* /var/www/html/mark4/themes/responsiv-flat/pages/blog/post.htm */
class __TwigTemplate_6e0a7dcfb2fab217e3f99423ba181daaf85787edd7ac2ed563f6878f79b2700b extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog Post</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post1.jpg");
        echo "\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <p>Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.</p>
                    <p>Mutley, you snickering, floppy eared hound. When courage is needed, you're never around. Those medals you wear on your moth-eaten chest should be there for bungling at which you are best. So, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon. Howwww! Nab him, jab him, tab him, grab him, stop that pigeon now.</p>
                </div>
            </div>

            <!-- Pagination -->
            <ul class=\"pager pull-right\">
                <li class=\"previous\">
                    <a href=\"#\">
                        <span class=\"fui-arrow-left\"></span>
                        Previous
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\">
                        Next
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/mark4/themes/responsiv-flat/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 46,  77 => 45,  45 => 18,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog Post</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"{{ 'blog/post'|page }}\"><img class=\"img-responsive\" src=\"{{ 'assets/images/blog/post1.jpg'|theme }}\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <p>Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.</p>
                    <p>Mutley, you snickering, floppy eared hound. When courage is needed, you're never around. Those medals you wear on your moth-eaten chest should be there for bungling at which you are best. So, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon. Howwww! Nab him, jab him, tab him, grab him, stop that pigeon now.</p>
                </div>
            </div>

            <!-- Pagination -->
            <ul class=\"pager pull-right\">
                <li class=\"previous\">
                    <a href=\"#\">
                        <span class=\"fui-arrow-left\"></span>
                        Previous
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\">
                        Next
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            {% partial 'blog/sidebar' %}

        </div>
    </div>
</div>", "/var/www/html/mark4/themes/responsiv-flat/pages/blog/post.htm", "");
    }
}
