<?php

/* /var/www/html/mark4/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_a5d89693750d51f4cdc892885b1cd0f6cf4ee0c1c06b1673a47bdfff793124ea extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "    <link href=\"/themes/responsiv-flat/assets/depan/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">


    <link href=\"/themes/responsiv-flat/assets/depan/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/themes/responsiv-flat/assets/depan/css/animate.min.css\" rel=\"stylesheet\" media=\"all\">


    <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
    <link href=\"/themes/responsiv-flat/assets/depan/css/bootstrap-touch-slider.css\" rel=\"stylesheet\" media=\"all\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/themes/responsiv-flat/assets/depan/css/style.css\">
    
    <style type=\"text/css\">
    .down-caret {
          width: 0;
          height: 0;
          border-style: solid;
          border-width: 5px 5px 0 5px;
          border-color: #ffffff transparent transparent transparent;
          display: inline-block;
          margin-left: 6px;
          top: -3px;
          position: relative;
          transform: rotate(0deg);
          transition: all .25s ease-in;
        }
        .open-caret {
          transform: rotate(180deg);
          transition: all .25s ease-out;
        }
      </style>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 34
        echo "<section class=\"home-title\">
    ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ProductList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "    ini test
</section>

<section class=\"home-title\">
    <div id=\"app\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- kiri -->
                <div class=\"col-md-6\">
                    <div id=\"bootstrap-touch-slider\" class=\"carousel bs-slider fade slide control-round indicators-line\"
                         data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"false\">
        
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#bootstrap-touch-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#bootstrap-touch-slider\" data-slide-to=\"1\"></li>
                        </ol>
        
                        <!-- Wrapper For Slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
        
                            <!-- Third Slide -->
                            <div class=\"item active\">
        
                                <!-- Slide Background -->
                                <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                     alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>
                                <div class=\"bs-slider-overlay\"></div>
        
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <!-- Slide Text Layer -->
                                        <div class=\"slide-text slide_style_left\">
                                            <h1 data-animation=\"animated zoomInRight\">Bootstrap Carousel</h1>
                                            <p data-animation=\"animated fadeInLeft\">Bootstrap carousel now touch enable
                                                slide.</p>
                                            <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                               data-animation=\"animated fadeInRight\">select two</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
        
                            <!-- Second Slide -->
                            <div class=\"item\">
        
                                <!-- Slide Background -->
                                <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                     alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>
                                <div class=\"bs-slider-overlay\"></div>
                                <!-- Slide Text Layer -->
                                <div class=\"slide-text slide_style_center\">
                                    <h1 data-animation=\"animated flipInX\">Bootstrap touch </h1>
                                    <p data-animation=\"animated lightSpeedIn\">Make Bootstrap Better together.</p>
                                    <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                       data-animation=\"animated fadeInDown\">select two</a>
                                </div>
                            </div>
                            <!-- End of Slide -->
        
                        </div><!-- End of Wrapper For Slides -->
        
                        <!-- Left Control -->
                        <a class=\"left carousel-control\" href=\"#bootstrap-touch-slider\" role=\"button\" data-slide=\"prev\">
                            <span class=\"fa fa-arrow-left\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
        
                        <!-- Right Control -->
                        <a class=\"right carousel-control\" href=\"#bootstrap-touch-slider\" role=\"button\" data-slide=\"next\">
                            <span class=\"fa fa-arrow-right\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
        
                    </div> <!-- End  bootstrap-touch-slider Slider -->
        
        
                </div>
                <!-- kanan -->
                <div class=\"col-md-6\">
                    <div class=\"content-kanan\">
                        <div class=\"isi-kanan atas\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" alt=\"img\"
                                 class=\"\">
                        </div>
                        <div class=\"isi-kanan bawah baris\">
                            <img id=\"kiri\" src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"img\" style=\"width: 50%; height: 100%;\">
        
                            <img id=\"kanan\" src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"img\" style=\"width: 50%; height: 100%;\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/mashable.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/guardian.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/forbes.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/red-bull.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/ny-times.png");
        echo "\" alt=\"\"></div>
    </div>
</section>

<br />

<section id=\"our_products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">
                    <span>
                        Our Products
                    </span>
                </h3>
                <h4 class=\"text-center\">
                     <span>
                        --------------------------
                    </span>
                </h4>
                <!--
                <div id=\"\" class=\"text-center\">
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-default active\" href=\"\" data-toggle=\"tab\"
                               data-title=\"On Sale Products\">On Sale Product</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"\" data-toggle=\"tab\"
                               data-title=\"Featured Products\">Featured Products</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"\" data-toggle=\"tab\"
                               data-title=\"Top Rated Products\">Top Rated Products</a>
                        </li>
                    </ul>
                </div>
                -->
                <br>

                <div id=\"carousel2\" class=\"carousel bs-slider fade control-round multi-item-carousel\" data-ride=\"carousel\"
                     data-interval=\"false\" data-pause=\"hover\" style=\"background: transparent;\">

                    <!-- Wrapper for carousel items -->
                    <div class=\"carousel-inner carousel-bawah\" role=\"listbox\">

                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple iPad</h4>
                                            <p class=\"item-price\"><strike>\$400.00</strike> <span>\$369.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Sony Headphone</h4>
                                            <p class=\"item-price\"><strike>\$25.00</strike> <span>\$23.99</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"/themes/responsiv-flat/assets/depan/images/slide1.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Macbook Air</h4>
                                            <p class=\"item-price\"><strike>\$899.00</strike> <span>\$649.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-half-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"/themes/responsiv-flat/assets/depan/images/slide1.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Nikon DSLR</h4>
                                            <p class=\"item-price\"><strike>\$315.00</strike> <span>\$250.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Sony Play Station</h4>
                                            <p class=\"item-price\"><strike>\$289.00</strike> <span>\$269.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Macbook Pro</h4>
                                            <p class=\"item-price\"><strike>\$1099.00</strike> <span>\$869.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-half-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Bose Speaker</h4>
                                            <p class=\"item-price\"><strike>\$109.00</strike> <span>\$99.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Samsung Galaxy S8</h4>
                                            <p class=\"item-price\"><strike>\$599.00</strike> <span>\$569.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple iPhone</h4>
                                            <p class=\"item-price\"><strike>\$369.00</strike> <span>\$349.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Canon DSLR</h4>
                                            <p class=\"item-price\"><strike>\$315.00</strike> <span>\$250.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Google Pixel</h4>
                                            <p class=\"item-price\"><strike>\$450.00</strike> <span>\$418.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple Watch</h4>
                                            <p class=\"item-price\"><strike>\$350.00</strike> <span>\$330.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class=\"item active\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>

                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"slide-text slide_style_left\">
                                        <h1 data-animation=\"animated zoomInRight\">Bootstrap Carousel</h1>
                                        <p data-animation=\"animated fadeInLeft\">Bootstrap carousel now touch enable
                                            slide.</p>
                                        <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                           data-animation=\"animated fadeInRight\">select two</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>

                            <div class=\"slide-text slide_style_center\">
                                <h1 data-animation=\"animated flipInX\">Bootstrap touch </h1>
                                <p data-animation=\"animated lightSpeedIn\">Make Bootstrap Better together.</p>
                                <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                   data-animation=\"animated fadeInDown\">select two</a>
                            </div>
                        </div>
                        -->
                    </div>
                    <a class=\"kiri carousel-control\" href=\"#carousel2\" data-slide=\"prev\" style=\"top: 50%; left: 5%\">
                        <i class=\"fa fa-angle-left\"></i>
                    </a>
                    <a class=\"kanan carousel-control\" href=\"#carousel2\" data-slide=\"next\" style=\"top: 50%; left: 95%\">
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                    <!-- Carousel indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel2\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel2\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel2\" data-slide-to=\"2\"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 512
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 513
        echo "        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />
";
        // line 537
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 538
        echo "<!--
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap.min.js\" type=\"text/javascript\"></script>
-->
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.min.js\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap.min.js\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.touchSwipe.min.js\"></script>


<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap-touch-slider.js\"></script>

<script type=\"text/javascript\">
    \$('#bootstrap-touch-slider').bsTouchSlider();
    /*
    \$('.carousel').carousel({
      interval: 1000
    })
    */
</script>
";
        // line 537
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/mark4/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 537,  592 => 538,  590 => 537,  564 => 513,  560 => 512,  187 => 142,  183 => 141,  179 => 140,  175 => 139,  171 => 138,  67 => 36,  63 => 35,  60 => 34,  58 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put styles %}
    <link href=\"/themes/responsiv-flat/assets/depan/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">


    <link href=\"/themes/responsiv-flat/assets/depan/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/themes/responsiv-flat/assets/depan/css/animate.min.css\" rel=\"stylesheet\" media=\"all\">


    <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
    <link href=\"/themes/responsiv-flat/assets/depan/css/bootstrap-touch-slider.css\" rel=\"stylesheet\" media=\"all\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/themes/responsiv-flat/assets/depan/css/style.css\">
    
    <style type=\"text/css\">
    .down-caret {
          width: 0;
          height: 0;
          border-style: solid;
          border-width: 5px 5px 0 5px;
          border-color: #ffffff transparent transparent transparent;
          display: inline-block;
          margin-left: 6px;
          top: -3px;
          position: relative;
          transform: rotate(0deg);
          transition: all .25s ease-in;
        }
        .open-caret {
          transform: rotate(180deg);
          transition: all .25s ease-out;
        }
      </style>

{% endput %}
<section class=\"home-title\">
    {% component 'ProductList' %}
    ini test
</section>

<section class=\"home-title\">
    <div id=\"app\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- kiri -->
                <div class=\"col-md-6\">
                    <div id=\"bootstrap-touch-slider\" class=\"carousel bs-slider fade slide control-round indicators-line\"
                         data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"false\">
        
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#bootstrap-touch-slider\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#bootstrap-touch-slider\" data-slide-to=\"1\"></li>
                        </ol>
        
                        <!-- Wrapper For Slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
        
                            <!-- Third Slide -->
                            <div class=\"item active\">
        
                                <!-- Slide Background -->
                                <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                     alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>
                                <div class=\"bs-slider-overlay\"></div>
        
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <!-- Slide Text Layer -->
                                        <div class=\"slide-text slide_style_left\">
                                            <h1 data-animation=\"animated zoomInRight\">Bootstrap Carousel</h1>
                                            <p data-animation=\"animated fadeInLeft\">Bootstrap carousel now touch enable
                                                slide.</p>
                                            <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                               data-animation=\"animated fadeInRight\">select two</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
        
                            <!-- Second Slide -->
                            <div class=\"item\">
        
                                <!-- Slide Background -->
                                <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                     alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>
                                <div class=\"bs-slider-overlay\"></div>
                                <!-- Slide Text Layer -->
                                <div class=\"slide-text slide_style_center\">
                                    <h1 data-animation=\"animated flipInX\">Bootstrap touch </h1>
                                    <p data-animation=\"animated lightSpeedIn\">Make Bootstrap Better together.</p>
                                    <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                       data-animation=\"animated fadeInDown\">select two</a>
                                </div>
                            </div>
                            <!-- End of Slide -->
        
                        </div><!-- End of Wrapper For Slides -->
        
                        <!-- Left Control -->
                        <a class=\"left carousel-control\" href=\"#bootstrap-touch-slider\" role=\"button\" data-slide=\"prev\">
                            <span class=\"fa fa-arrow-left\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
        
                        <!-- Right Control -->
                        <a class=\"right carousel-control\" href=\"#bootstrap-touch-slider\" role=\"button\" data-slide=\"next\">
                            <span class=\"fa fa-arrow-right\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
        
                    </div> <!-- End  bootstrap-touch-slider Slider -->
        
        
                </div>
                <!-- kanan -->
                <div class=\"col-md-6\">
                    <div class=\"content-kanan\">
                        <div class=\"isi-kanan atas\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" alt=\"img\"
                                 class=\"\">
                        </div>
                        <div class=\"isi-kanan bawah baris\">
                            <img id=\"kiri\" src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"img\" style=\"width: 50%; height: 100%;\">
        
                            <img id=\"kanan\" src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"img\" style=\"width: 50%; height: 100%;\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"{{ 'assets/images/logos/mashable.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/guardian.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/forbes.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/red-bull.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/ny-times.png'|theme }}\" alt=\"\"></div>
    </div>
</section>

<br />

<section id=\"our_products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">
                    <span>
                        Our Products
                    </span>
                </h3>
                <h4 class=\"text-center\">
                     <span>
                        --------------------------
                    </span>
                </h4>
                <!--
                <div id=\"\" class=\"text-center\">
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-default active\" href=\"\" data-toggle=\"tab\"
                               data-title=\"On Sale Products\">On Sale Product</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"\" data-toggle=\"tab\"
                               data-title=\"Featured Products\">Featured Products</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"\" data-toggle=\"tab\"
                               data-title=\"Top Rated Products\">Top Rated Products</a>
                        </li>
                    </ul>
                </div>
                -->
                <br>

                <div id=\"carousel2\" class=\"carousel bs-slider fade control-round multi-item-carousel\" data-ride=\"carousel\"
                     data-interval=\"false\" data-pause=\"hover\" style=\"background: transparent;\">

                    <!-- Wrapper for carousel items -->
                    <div class=\"carousel-inner carousel-bawah\" role=\"listbox\">

                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple iPad</h4>
                                            <p class=\"item-price\"><strike>\$400.00</strike> <span>\$369.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Sony Headphone</h4>
                                            <p class=\"item-price\"><strike>\$25.00</strike> <span>\$23.99</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"/themes/responsiv-flat/assets/depan/images/slide1.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Macbook Air</h4>
                                            <p class=\"item-price\"><strike>\$899.00</strike> <span>\$649.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-half-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"/themes/responsiv-flat/assets/depan/images/slide1.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Nikon DSLR</h4>
                                            <p class=\"item-price\"><strike>\$315.00</strike> <span>\$250.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Sony Play Station</h4>
                                            <p class=\"item-price\"><strike>\$289.00</strike> <span>\$269.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Macbook Pro</h4>
                                            <p class=\"item-price\"><strike>\$1099.00</strike> <span>\$869.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-half-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Bose Speaker</h4>
                                            <p class=\"item-price\"><strike>\$109.00</strike> <span>\$99.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide2.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Samsung Galaxy S8</h4>
                                            <p class=\"item-price\"><strike>\$599.00</strike> <span>\$569.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple iPhone</h4>
                                            <p class=\"item-price\"><strike>\$369.00</strike> <span>\$349.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Canon DSLR</h4>
                                            <p class=\"item-price\"><strike>\$315.00</strike> <span>\$250.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Google Pixel</h4>
                                            <p class=\"item-price\"><strike>\$450.00</strike> <span>\$418.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"thumb-wrapper\">
                                        <div class=\"img-box\">
                                            <img src=\"images/slide3.jpeg\" class=\"img-responsive img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"thumb-content\">
                                            <h4>Apple Watch</h4>
                                            <p class=\"item-price\"><strike>\$350.00</strike> <span>\$330.00</span></p>
                                            <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div>
                                            <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class=\"item active\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>

                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"slide-text slide_style_left\">
                                        <h1 data-animation=\"animated zoomInRight\">Bootstrap Carousel</h1>
                                        <p data-animation=\"animated fadeInLeft\">Bootstrap carousel now touch enable
                                            slide.</p>
                                        <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                           data-animation=\"animated fadeInRight\">select two</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <img src=\"http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg\"
                                 alt=\"Bootstrap Touch Slider\" class=\"slide-image\"/>

                            <div class=\"slide-text slide_style_center\">
                                <h1 data-animation=\"animated flipInX\">Bootstrap touch </h1>
                                <p data-animation=\"animated lightSpeedIn\">Make Bootstrap Better together.</p>
                                <a href=\"http://bootstrapthemes.co/\" target=\"_blank\" class=\"btn btn-primary\"
                                   data-animation=\"animated fadeInDown\">select two</a>
                            </div>
                        </div>
                        -->
                    </div>
                    <a class=\"kiri carousel-control\" href=\"#carousel2\" data-slide=\"prev\" style=\"top: 50%; left: 5%\">
                        <i class=\"fa fa-angle-left\"></i>
                    </a>
                    <a class=\"kanan carousel-control\" href=\"#carousel2\" data-slide=\"next\" style=\"top: 50%; left: 95%\">
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                    <!-- Carousel indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel2\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel2\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel2\" data-slide-to=\"2\"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />
{% put scripts %}
<!--
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap.min.js\" type=\"text/javascript\"></script>
-->
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.min.js\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap.min.js\"></script>
<script src=\"/themes/responsiv-flat/assets/depan/js/jquery.touchSwipe.min.js\"></script>


<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
<script src=\"/themes/responsiv-flat/assets/depan/js/bootstrap-touch-slider.js\"></script>

<script type=\"text/javascript\">
    \$('#bootstrap-touch-slider').bsTouchSlider();
    /*
    \$('.carousel').carousel({
      interval: 1000
    })
    */
</script>
{% endput %}", "/var/www/html/mark4/themes/responsiv-flat/pages/home.htm", "");
    }
}
