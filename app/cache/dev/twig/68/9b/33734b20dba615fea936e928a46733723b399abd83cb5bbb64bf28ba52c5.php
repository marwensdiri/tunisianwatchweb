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
        return array (  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 144,  371 => 137,  369 => 135,  348 => 118,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 275,  316 => 274,  312 => 273,  308 => 272,  304 => 271,  300 => 270,  296 => 269,  292 => 268,  288 => 267,  182 => 163,  180 => 118,  123 => 64,  100 => 43,  94 => 42,  92 => 41,  84 => 39,  80 => 37,  56 => 15,  52 => 14,  36 => 10,  32 => 9,  22 => 1,  88 => 37,  82 => 38,  69 => 24,  60 => 18,  53 => 14,  48 => 13,  44 => 12,  40 => 11,  34 => 7,  31 => 6,  28 => 5,);
    }
}
