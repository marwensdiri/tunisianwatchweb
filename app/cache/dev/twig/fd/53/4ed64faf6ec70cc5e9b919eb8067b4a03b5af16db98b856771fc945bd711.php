<?php

/* TWfrontOfficeBundle::index.html.twig */
class __TwigTemplate_fd534ed64faf6ec70cc5e9b919eb8067b4a03b5af16db98b856771fc945bd711 extends Twig_Template
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
        echo "    <div class=\"map-wrapper\">
        <div class=\"map\">
            <div id=\"map\" class=\"map-inner\"></div><!-- /.map-inner -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span3\">
                        <div class=\"property-filter pull-right\">
                            <div class=\"content\">
                                <form method=\"get\" action=\"?\">
                                    <div class=\"location control-group\">
                                        <label class=\"control-label\" for=\"inputLocation\">
                                            Lieu
                                        </label>
                                        <div class=\"controls\">
                                            <select id=\"inputLocation\">
                                                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Lieux"]) ? $context["Lieux"] : $this->getContext($context, "Lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 21
            echo "                                                    <option id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "id"), "html", null, true);
            echo "}\">";
            echo twig_escape_filter($this->env, (isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                            </select>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->

                                    <div class=\"type control-group\">
                                        <label class=\"control-label\" for=\"inputType\">
                                            Domaine
                                        </label>
                                        <div class=\"controls\">
                                            <select id=\"inputType\">
                                                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Domaines"]) ? $context["Domaines"] : $this->getContext($context, "Domaines")));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 34
            echo "                                                    <option id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "id"), "html", null, true);
            echo "}\">";
            echo twig_escape_filter($this->env, (isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                            </select>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->


                                    <div class=\"rent control-group\">
                                        <div class=\"controls\">
                                            <label class=\"checkbox\" for=\"inputRent\">
                                                <input type=\"checkbox\" id=\"inputRent\"> Réglé
                                            </label>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->

                                    <div class=\"sale control-group\">
                                        <div class=\"controls\">
                                            <label class=\"checkbox\" for=\"inputSale\">
                                                <input type=\"checkbox\" id=\"inputSale\"> Non réglé
                                            </label>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                    <div class=\"form-actions\">
                                        <input type=\"submit\" value=\"Filtrer les resultats !\" class=\"btn btn-primary btn-large\">
                                    </div><!-- /.form-actions -->
                                </form>
                            </div><!-- /.content -->
                        </div><!-- /.property-filter -->
                    </div><!-- /.span3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.map -->
    </div><!-- /.map-wrapper -->
    <div id=\"alauneinternallink\" class=\"container\">
        <div id=\"main\">
            <div class=\"row\">
                <div class=\"span9\">
                    <h1 class=\"page-header\">Reclamations</h1>

                    <div class=\"properties-grid\">
                        <div class=\"row\">
                            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) ? $context["Reclamations"] : $this->getContext($context, "Reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 76
            echo "                                <div class=\"property span3\">
                                    <div class=\"image\">
                                        <div class=\"content\">
                                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Reclamation_show", array("id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id"))), "html", null, true);
            echo "\"></a>
                                            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/tmp/property-small-1.png"), "html", null, true);
            echo "\" alt=\"\">
                                        </div><!-- /.content -->
                                        ";
            // line 82
            if (($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat") == 0)) {
                // line 83
                echo "                                       ";
                $context["etat"] = "non reglée";
                // line 84
                echo "                                        ";
            }
            // line 85
            echo "                                        <div class=\"reduced\">";
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</div><!-- /.reduced -->
                                    </div><!-- /.image -->
                                    <div class=\"title\">
                                        <h2>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "titre"), "html", null, true);
            echo "</h2>
                                    </div><!-- /.title -->


                                    <div class=\"location\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idlieu"), "html", null, true);
            echo "</div><!-- /.location -->
                                    <div class=\"area\">
                                        <span class=\"key\">Auteur:</span><!-- /.key -->
                                        <span class=\"value\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idcitoyen"), "html", null, true);
            echo "</span><!-- /.value -->
                                    </div><!-- /.area -->


                                    <div class=\"bedrooms\"><div class=\"content\"></div></div><!-- /.bedrooms -->
                                    <div class=\"bathrooms\"><div class=\"content\"></div></div><!-- /.bathrooms -->
                                </div><!-- /.property -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                        </div><!-- /.row -->
                    </div><!-- /.properties-grid -->
                    <div class=\"pagination pagination-centered\">
                        <ul>
                            <li><a href=\"#\">1</a></li>
                            <li><a href=\"#\">2</a></li>
                            <li class=\"active\"><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">next</a></li>
                            <li><a href=\"#\">last</a></li>
                        </ul>
                    </div><!-- /.pagination -->            </div>
                <div class=\"sidebar span3\">
                    <div class=\"widget our-agents\">
                        <div class=\"title\">
                            <h2>Responsables</h2>
                        </div><!-- /.title -->

                        <div class=\"content\">
                            <div class=\"agent\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/photos/emma-small.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div><!-- /.image -->
                                <div class=\"name\">Victoria Summer</div><!-- /.name -->
                                <div class=\"phone\">333-666-777</div><!-- /.phone -->
                                <div class=\"email\"><a href=\"mailto:victoria@example.com\">victoria@example.com</a></div><!-- /.email -->
                            </div><!-- /.agent -->
                        </div><!-- /.content -->
                    </div><!-- /.our-agents -->
                    <div class=\"hidden-tablet\">
                        <div class=\"widget properties last\">
                            <div class=\"title\">
                                <h2>Mes Réclamations</h2>
                            </div><!-- /.title -->

                            <div class=\"content\">
                                <div class=\"property\">
                                    <div class=\"image\">
                                        <a href=\"detail.html\"></a>
                                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/tmp/property-small-4.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div><!-- /.image -->

                                    <div class=\"wrapper\">
                                        <div class=\"title\">
                                            <h3>
                                                <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("detail.html"), "html", null, true);
        echo "\">27523 Pacific Coast</a>
                                            </h3>
                                        </div><!-- /.title -->
                                        <div class=\"location\">Palo Alto CA</div><!-- /.location -->
                                        <div class=\"price\">€2 300 000</div><!-- /.price -->
                                    </div><!-- /.wrapper -->
                                </div><!-- /.property -->
                            </div><!-- /.content -->
                        </div><!-- /.properties -->
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TWfrontOfficeBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 149,  237 => 143,  216 => 125,  192 => 103,  178 => 95,  172 => 92,  165 => 88,  158 => 85,  155 => 84,  152 => 83,  150 => 82,  145 => 80,  141 => 79,  136 => 76,  132 => 75,  91 => 36,  80 => 34,  76 => 33,  64 => 23,  53 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
