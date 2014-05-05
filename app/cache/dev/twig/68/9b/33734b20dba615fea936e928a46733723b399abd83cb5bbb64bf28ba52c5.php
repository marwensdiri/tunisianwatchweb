<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_689b33734b20dba615fea936e928a46733723b399abd83cb5bbb64bf28ba52c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_profile' => array($this, 'block_fos_user_profile'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_register' => array($this, 'block_fos_user_register'),
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
        <link rel=\"stylesheet\" href=\"#\" type=\"text/css\" id=\"color-variant\">

        <title>Login | Inscription</title>
    </head>
    <body>
        <div id=\"wrapper-outer\" >
            <div id=\"wrapper\">
                <div id=\"wrapper-inner\">
                    <!-- BREADCRUMB -->
                    <div class=\"breadcrumb-wrapper\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"span12\">
                                    <ul class=\"breadcrumb pull-left\">
                                        <li><a href=\"/TunisianWatch/web/app_dev.php/\">Home</a></li>
                                    </ul><!-- /.breadcrumb -->

                                    <div class=\"account pull-right\">
                                        <ul class=\"nav nav-pills\">
                                            <li>                    
";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "    ";
            // line 39
            echo "    <p style=\"color: white\"> Logged in as <b> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " </b> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> </p>
";
        } else {
            // line 41
            echo "    ";
            // line 42
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
";
        }
        // line 43
        echo "</li>
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
                                                        <a href=\"/TunisianWatch/web/app_dev.php/\" title=\"Home\">
                                                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Home\">
                                                        </a>
                                                    </div><!-- /.logo -->

                                                    <div class=\"site-name\">
                                                        <a href=\"/TunisianWatch/web/app_dev.php/\" title=\"Home\" class=\"brand\">TunisianWatch</a>
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
                                            <a href=\"/TunisianWatch/web/app_dev.php/\">Homepage</a>
                                        </li>
                                        <li><a href=\"#footer-wrapper\">Contact Us</a></li>
                                        <li><a href=\"/TunisianWatch/web/app_dev.php/profile\">Mon profile</a></li>
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
                    
        ";
        // line 118
        $this->displayBlock('fos_user_profile', $context, $blocks);
        // line 163
        echo "            
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
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ezmark.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.currency.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/retina.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/carousel.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gmap3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gmap3.infobox.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/iosslider/_src/jquery.iosslider.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libraries/bootstrap-fileupload/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/realia.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 118
    public function block_fos_user_profile($context, array $blocks = array())
    {
        echo "            
                    <div id=\"content\">
                        <div class=\"container\">
                            <div>
                                <div id=\"main\">

                                    <div class=\"login-register\" style=\"margin-left:37%;margin-right:37%\">
                                        <div class=\"row\" > 
                                            <div class=\"span4\" >
                                                <ul class=\"tabs nav nav-tabs\">
                                                    <li class=\"active\"><a href=\"#login\">Login</a></li>
                                                    <li><a href=\"#register\">S'inscrire</a></li>
                                                </ul>
                                                <!-- /.nav -->

                                                <div class=\"tab-content\">                                                    
                                                    <div class=\"tab-pane active\" id=\"login\">
                                                            ";
        // line 135
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 137
        echo "                                                      
                                                    </div>
                                                    <!-- /.tab-pane -->

                                                    <div class=\"tab-pane\" id=\"register\">
                                                        <form method=\"post\" action=\"?\">
                                                                                                                                                                                   
                                                            ";
        // line 144
        $this->displayBlock('fos_user_register', $context, $blocks);
        // line 146
        echo "                                                            
                                                            <!-- /.form-actions -->
                                                        </form>
                                                    </div>
                                                    <!-- /.tab-pane -->
                                                </div>
                                                <!-- /.tab-content -->
                                            </div>
                                            <!-- /.span4-->
                                        </div>
                                        <!-- /.row -->
                                    </div><!-- /.login-register -->        </div>
                            </div>
                        </div>

                    </div><!-- /#content -->
                    
        ";
    }

    // line 135
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 136
        echo "                                                            ";
    }

    // line 144
    public function block_fos_user_register($context, array $blocks = array())
    {
        echo " 
                                                            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 144,  371 => 137,  369 => 135,  348 => 118,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 275,  316 => 274,  308 => 272,  304 => 271,  300 => 270,  296 => 269,  292 => 268,  288 => 267,  180 => 118,  100 => 43,  134 => 66,  127 => 62,  81 => 34,  129 => 49,  90 => 33,  84 => 39,  225 => 158,  212 => 151,  191 => 133,  186 => 131,  174 => 122,  137 => 100,  124 => 93,  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 92,  165 => 88,  155 => 80,  152 => 83,  150 => 107,  76 => 33,  70 => 28,  104 => 39,  97 => 37,  34 => 10,  77 => 33,  58 => 20,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 273,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 168,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 98,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 69,  159 => 113,  143 => 56,  135 => 53,  119 => 57,  102 => 46,  71 => 24,  67 => 26,  63 => 25,  59 => 20,  38 => 9,  94 => 42,  89 => 36,  85 => 38,  75 => 25,  68 => 23,  56 => 15,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 30,  46 => 14,  27 => 7,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 68,  136 => 54,  121 => 59,  117 => 43,  105 => 40,  91 => 36,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 24,  69 => 24,  47 => 18,  40 => 11,  37 => 10,  22 => 1,  246 => 149,  157 => 56,  145 => 105,  139 => 45,  131 => 66,  123 => 64,  120 => 40,  115 => 43,  111 => 40,  108 => 49,  101 => 45,  98 => 35,  96 => 38,  83 => 25,  74 => 30,  66 => 27,  55 => 21,  52 => 14,  50 => 14,  43 => 8,  41 => 15,  35 => 6,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 163,  176 => 116,  173 => 65,  168 => 72,  164 => 115,  162 => 84,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 79,  133 => 67,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 61,  109 => 50,  106 => 36,  103 => 32,  99 => 46,  95 => 42,  92 => 41,  86 => 32,  82 => 38,  80 => 37,  73 => 19,  64 => 26,  60 => 22,  57 => 25,  54 => 15,  51 => 17,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 10,  33 => 6,  30 => 9,);
    }
}
