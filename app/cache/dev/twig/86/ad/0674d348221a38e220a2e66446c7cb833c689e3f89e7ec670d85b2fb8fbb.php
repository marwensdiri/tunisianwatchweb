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
        return array (  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  176 => 116,  144 => 90,  112 => 61,  104 => 56,  75 => 30,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  30 => 9,  20 => 1,  246 => 149,  237 => 143,  216 => 125,  192 => 103,  178 => 117,  172 => 92,  165 => 88,  158 => 85,  155 => 84,  152 => 83,  150 => 93,  145 => 80,  141 => 79,  136 => 76,  132 => 75,  91 => 36,  80 => 34,  76 => 33,  64 => 23,  53 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
