<?php

/* TWfrontOfficeBundle:Reclamation:new.html.twig */
class __TwigTemplate_a3644de747508c421ae00cd8369dd1831cbcf8c5e7153130e6c8c3bea82a7b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TWfrontOfficeBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TWfrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
            var \$container = \$('div#tw_frontofficebundle_reclamation_documents');
            // On ajoute un lien pour ajouter une nouvelle catégorie
            var \$lienAjout = \$('<div class=\"control-group\"><div class=\"controls\"><a href=\"#\" id=\"ajout_document\" class=\"btn btn-danger\">Ajouter un document</a></div></div>');
            \$container.append(\$lienAjout);
            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
            \$lienAjout.click(function(e) {
                ajouterCategorie(\$container);
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
            var index = \$container.find(':input').length;
            // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
            if (index == 0) {
               // ajouterCategorie(\$container);
            } else {
                // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                \$container.children('div').each(function() {
                    ajouterLienSuppression(\$(this));
                });
            }
            // La fonction qui ajoute un formulaire Categorie
            function ajouterCategorie(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Document n°' + (index + 1))
                        .replace(/__name__/g, index));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
            }
            // La fonction qui ajoute un lien de suppression d'une catégorie
            function ajouterLienSuppression(\$prototype) {
                // Création du lien
                \$lienSuppression = \$('<div class=\"control-group\"><div class=\"controls\"><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div></div>');
                // Ajout du lien
                \$prototype.append(\$lienSuppression);
                // Ajout du listener sur le clic du lien
                \$lienSuppression.click(function(e) {
                    \$prototype.remove();
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
            }
        });

        function initialize() {
            var myLatlng = new google.maps.LatLng(-25.363882, 131.044922);
            var mapOptions = {
                zoom: 4,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

            var myMarker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                draggable: true,
                title: 'Hello World!'
            });

            google.maps.event.addListener(myMarker, 'dragend', function(evt) {
                document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
            });

            google.maps.event.addListener(myMarker, 'dragstart', function(evt) {
                document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
            });
        }



        google.maps.event.addDomListener(window, 'load', initialize);



    </script>
    <div class=\"container\">
        <div class=\"main\">
            <div class=\"content\">
                ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"span6\">
                        <h3><strong>1.</strong> <span>Reclamation</span></h3>
                        <div class=\"control-group\">
                            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->

                        <div class=\"control-group\">
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->


                        <div class=\"control-group\">
                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iddomaine"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iddomaine"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->

                    </div>

                    <div class=\"span4\">
                        <h3><strong>2.</strong> <span>Lieu de la Reclamation</span></h3>
                        <div class=\"control-group\">
                            ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idlieu"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idlieu"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->
                        <div class=\"control-group\">
                        </div>
                        <div class=\"control-group\" style=\"position:absolute\">
                            Lieu par Map:
                            <div class=\"controls\" style=\"right: 0px\">
                                <div id=\"googleMap\" style=\"width:500px;height:360px;\"></div>
                            </div><!-- /.controls -->
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"span7\">
                        <h3><strong>3.</strong> <span>Date</span></h3>

                        <div class=\"control-group\">
                            ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->

                        <div class=\"control-group\">
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure"), 'label');
        echo "
                            <div class=\"controls\">
                                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heure"), 'widget');
        echo "
                            </div><!-- /.controls -->
                        </div><!-- /.control-group -->
                    </div>
                </div><!-- /.row -->
                <div class=\"row\">
                    <div class=\"control-group\">
                        <div class=\"controls\">
                            <center>";
        // line 168
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TWfrontOfficeBundle:Reclamation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 158,  212 => 151,  191 => 133,  186 => 131,  174 => 122,  137 => 100,  124 => 93,  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 92,  165 => 88,  155 => 80,  152 => 83,  150 => 107,  76 => 33,  70 => 25,  104 => 39,  97 => 37,  34 => 10,  77 => 33,  58 => 20,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 168,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 98,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 69,  159 => 113,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 23,  63 => 25,  59 => 20,  38 => 9,  94 => 41,  89 => 36,  85 => 38,  75 => 25,  68 => 23,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 34,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 68,  136 => 76,  121 => 59,  117 => 44,  105 => 40,  91 => 36,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 24,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 149,  157 => 56,  145 => 105,  139 => 45,  131 => 66,  123 => 47,  120 => 40,  115 => 43,  111 => 44,  108 => 49,  101 => 45,  98 => 31,  96 => 38,  83 => 25,  74 => 25,  66 => 15,  55 => 21,  52 => 20,  50 => 14,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 116,  173 => 65,  168 => 72,  164 => 115,  162 => 84,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 79,  133 => 67,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 61,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 33,  86 => 30,  82 => 31,  80 => 34,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 15,  51 => 17,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 9,);
    }
}
