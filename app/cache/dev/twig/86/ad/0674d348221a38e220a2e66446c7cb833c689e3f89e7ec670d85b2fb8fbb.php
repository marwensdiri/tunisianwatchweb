<?php

/* TWfrontOfficeBundle::layout.html.twig */
class __TwigTemplate_86ad0674d348221a38e220a2e66446c7cb833c689e3f89e7ec670d85b2fb8fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"Aviators - byaviators.com\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/chosen/chosen.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/bootstrap-fileupload/bootstrap-fileupload.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/realia-red.css"), "html", null, true);
        echo "\" type=\"text/css\" id=\"color-variant-default\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/mystyle.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"#\" type=\"text/css\" id=\"color-variant\">

        <title>TunisianWatch</title>
    </head>
    <body>
        <div id=\"wrapper-outer\" >
            <div id=\"wrapper\">
                <div id=\"wrapper-inner\">
                    <div class=\"breadcrumb-wrapper\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"span12\">
                                    <ul class=\"breadcrumb pull-left\">
                                        <li><a href=";
        // line 30
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo ">Home</a></li>
                                    </ul><!-- /.breadcrumb -->

                                    <div class=\"account pull-right\">
                                        <ul class=\"nav nav-pills\">
                                            <li><a href=\"\">Login</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.span12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.breadcrumb-wrapper -->

                    <!-- HEADER -->
                    <div id=\"header-wrapper\">
                        <div id=\"header\">
                            <div id=\"header-inner\">
                                <div class=\"container\">
                                    <div class=\"navbar\">
                                        <div class=\"navbar-inner\">
                                            <div class=\"row\">
                                                <div class=\"logo-wrapper span4\">
                                                    <a href=\"#nav\" class=\"hidden-desktop\" id=\"btn-nav\">Toggle navigation</a>

                                                    <div class=\"logo\">
                                                        <a href=\"index.html\" title=\"Home\">
                                                            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Home\">
                                                        </a>
                                                    </div><!-- /.logo -->

                                                    <div class=\"site-name\">
                                                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" title=\"Home\" class=\"brand\">TunisianWatch</a>
                                                    </div><!-- /.site-name -->


                                                </div><!-- /.logo-wrapper -->

                                                <div class=\"info\">
                                                    <div class=\"site-email\">
                                                        <a href=\"mailto:dev.gear@tunisianwatch.com\">dev.gear@tunisianwatch.com</a>
                                                    </div><!-- /.site-email -->
                                                </div><!-- /.info -->


                                            </div><!-- /.row -->
                                        </div><!-- /.navbar-inner -->
                                    </div><!-- /.navbar -->
                                </div><!-- /.container -->
                            </div><!-- /#header-inner -->
                        </div><!-- /#header -->
                    </div><!-- /#header-wrapper -->

                    <!-- NAVIGATION -->
                    <div id=\"navigation\">
                        <div class=\"container\">
                            <div class=\"navigation-wrapper\">
                                <div class=\"navigation clearfix-normal\">

                                    <ul class=\"nav\">
                                        <li>
                                            <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("Reclamation_new");
        echo "\" >Ajouter une réclamation</a>
                                        </li>
                                        <li>
                                            <a href=\"#alauneinternallink\" >Mes reclamations</a>
                                        </li>
                                        <li><a href=\"#footer-wrapper\">Contact Us</a></li>
                                    </ul><!-- /.nav -->



                                    <form method=\"get\" class=\"site-search\" action=\"?\">
                                        <div class=\"input-append\">
                                            <input title=\"Enter the terms you wish to search for.\" class=\"search-query span2 form-text\" placeholder=\"Search\" type=\"text\" name=\"\">
                                            <button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i></button>
                                        </div><!-- /.input-append -->
                                    </form><!-- /.site-search -->
                                </div><!-- /.navigation -->
                            </div><!-- /.navigation-wrapper -->
                        </div><!-- /.container -->
                    </div><!-- /.navigation -->

                    <!-- CONTENT -->
                    <div id=\"content\">
                        ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "                </div><!-- /#content -->
            </div><!-- /#wrapper-inner -->
          
            <div id=\"footer-wrapper\">
                <div id=\"footer-top\">
                    <div id=\"footer-top-inner\" class=\"container\">
                        <div class=\"row\" style=\"position:relative;height:auto\">
                            <div style=\"height:270px;\"><!--kgsdfhqsjlhfjqsdgklqshdglgkjhqgklhqsdkhgqklghjqgqdjhqjlgh-->
                                <div class=\"widget span3\" style=\"left:20%;position:absolute;height:auto;\">
                                    <div class=\"title\">
                                        <h2>Contacter nous !</h2>
                                    </div><!-- /.title -->

                                    <div class=\"content\">
                                        <table class=\"contact\">
                                            <tbody>
                                                <tr>
                                                    <th class=\"address\">Adresse:</th>
                                                    <td>Esprit</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"phone\">Tel:</th>
                                                    <td>+216 .. ... ...</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"email\">E-mail:</th>
                                                    <td><a href=\"mailto:Dev.Gear@tunisianwatch.com\">Dev.Gear@tunisianwatch.com</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.content -->
                                </div><!-- /.widget -->
                                <div class=\"widget span3\" style=\"right:20%;position:absolute;height:auto\">
                                    <div class=\"content\">
                                        <form method=\"post\">
                                            <div class=\"control-group\">
                                                <label class=\"control-label\" for=\"inputName\">
                                                    Nom
                                                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                                                </label>
                                                <div class=\"controls\">
                                                    <input type=\"text\" id=\"inputName\">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->

                                            <div class=\"control-group\">
                                                <label class=\"control-label\" for=\"inputEmail\">
                                                    Email
                                                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                                                </label>
                                                <div class=\"controls\">
                                                    <input type=\"text\" id=\"inputEmail\">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->

                                            <div class=\"control-group\">
                                                <label class=\"control-label\" for=\"inputMessage\">
                                                    Message
                                                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                                                </label>

                                                <div class=\"controls\">
                                                    <textarea id=\"inputMessage\"></textarea>
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->

                                            <div class=\"form-actions\">
                                                <input type=\"submit\" class=\"btn btn-primary arrow-right\" value=\"Envoyer\">
                                            </div><!-- /.form-actions -->
                                        </form>
                                    </div><!-- /.content -->
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.row -->
                    </div><!-- /#footer-top-inner -->
                </div><!-- /#footer-top -->

                <div id=\"footer\" class=\"footer container\">
                    <div id=\"footer-inner\">
                        <div class=\"row\">
                            <div class=\"span6 copyright\">
                                <p>© Copyright 2013 by <font color=\"red\"> Dev.Gear </font>. All rights reserved.</p>
                            </div><!-- /.copyright -->

                            <div class=\"span6 share\">
                                <div class=\"content\">
                                    <ul class=\"menu nav\">
                                        <li class=\"first leaf\"><a href=\"http://www.facebook.com\" class=\"facebook\">Facebook</a></li>
                                        <li class=\"leaf\"><a href=\"http://flickr.net\" class=\"flickr\">Flickr</a></li>
                                        <li class=\"leaf\"><a href=\"http://plus.google.com\" class=\"google\">Google+</a></li>
                                        <li class=\"leaf\"><a href=\"http://www.linkedin.com\" class=\"linkedin\">LinkedIn</a></li>
                                        <li class=\"leaf\"><a href=\"http://www.twitter.com\" class=\"twitter\">Twitter</a></li>
                                        <li class=\"last leaf\"><a href=\"http://www.vimeo.com\" class=\"vimeo\">Vimeo</a></li>
                                    </ul>
                                </div><!-- /.content -->
                            </div><!-- /.span6 -->
                        </div><!-- /.row -->
                    </div><!-- /#footer-inner -->
                </div><!-- /#footer -->
            </div><!-- /#footer-wrapper -->
        </div><!-- /#wrapper -->
    </div><!-- /#wrapper-outer -->



    <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
   
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ezmark.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.currency.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/retina.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/carousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gmap3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gmap3.infobox.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/iosslider/_src/jquery.iosslider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/bootstrap-fileupload/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/realia.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TWfrontOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 117,  172 => 92,  165 => 88,  155 => 84,  152 => 83,  150 => 93,  76 => 33,  70 => 25,  104 => 56,  97 => 37,  34 => 10,  77 => 33,  58 => 16,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 75,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 22,  63 => 25,  59 => 20,  38 => 11,  94 => 38,  89 => 36,  85 => 38,  75 => 30,  68 => 23,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 34,  46 => 13,  27 => 7,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 76,  121 => 46,  117 => 44,  105 => 40,  91 => 36,  62 => 20,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 149,  157 => 56,  145 => 80,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 38,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 18,  50 => 14,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 116,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 79,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 61,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 31,  80 => 34,  73 => 19,  64 => 23,  60 => 22,  57 => 18,  54 => 15,  51 => 17,  48 => 16,  45 => 16,  42 => 12,  39 => 10,  36 => 5,  33 => 6,  30 => 9,);
    }
}
