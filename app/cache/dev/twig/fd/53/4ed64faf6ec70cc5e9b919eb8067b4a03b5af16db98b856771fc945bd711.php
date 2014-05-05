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
        return array (  237 => 143,  216 => 125,  192 => 103,  178 => 95,  172 => 92,  165 => 88,  155 => 84,  152 => 83,  150 => 82,  76 => 33,  70 => 25,  104 => 42,  97 => 37,  34 => 11,  77 => 33,  58 => 19,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 75,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 22,  63 => 25,  59 => 20,  38 => 13,  94 => 38,  89 => 36,  85 => 38,  75 => 27,  68 => 23,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 34,  46 => 14,  27 => 7,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 76,  121 => 46,  117 => 44,  105 => 40,  91 => 36,  62 => 20,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 149,  157 => 56,  145 => 80,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 38,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 18,  50 => 18,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 79,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 31,  80 => 34,  73 => 19,  64 => 23,  60 => 22,  57 => 18,  54 => 20,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
