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
        return array (  241 => 168,  230 => 160,  225 => 158,  217 => 153,  212 => 151,  191 => 133,  186 => 131,  174 => 122,  164 => 115,  159 => 113,  150 => 107,  145 => 105,  137 => 100,  132 => 98,  124 => 93,  31 => 4,  28 => 3,);
    }
}
