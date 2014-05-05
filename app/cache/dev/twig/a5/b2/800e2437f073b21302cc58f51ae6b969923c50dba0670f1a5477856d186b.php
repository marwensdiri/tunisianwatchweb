<?php

/* TWfrontOfficeBundle:Reclamation:detail.html.twig */
class __TwigTemplate_a5b2800e2437f073b21302cc58f51ae6b969923c50dba0670f1a5477856d186b extends Twig_Template
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
        echo "
    <div class=\"container\">
        <div id=\"main\">
            <div class=\"row\">
                <div class=\"span12\">
                    <h1 class=\"page-header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "titre"), "html", null, true);
        echo "</h1>
                    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents"))) > 0)) {
            // line 11
            echo "                        <div class=\"carousel property\">
                            <div class=\"preview\">
                                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/tmp/property-large-1.jpg"), "html", null, true);
            echo "\" alt=\"\">
                            </div><!-- /.preview -->

                            <div class=\"content\">
                                <a class=\"carousel-prev\" href=\"#\">Previous</a>
                                <a class=\"carousel-next\" href=\"#\">Next</a>
                                <ul>
                                    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 21
                echo "                                    <li>
                                        <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "url")), "html", null, true);
                echo "\" alt=\"\">
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                                </ul>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.carousel -->
                    ";
        }
        // line 31
        echo "
                    <div class=\"property-detail\">
                        <div class=\"pull-left overview\">
                            <div class=\"row\">
                                <div class=\"span3\">
                                    <h2>Detail</h2>

                                    <table>
                                        <tr>
                                            <th>Auteur:</th>
                                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idcitoyen"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Domaine:</th>
                                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "iddomaine"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Lieu:</th>
                                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idlieu"), "html", null, true);
        echo "</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- /.span2 -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <p><strong>
                                ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "description"), "html", null, true);
        echo "
                            </strong>
                        </p>

                        <div id=\"property-map\"></div><!-- /#property-map -->
                        <br>
                        <div class=\"commentaire\">
                            ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 67
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 68
                echo "                                    <div class=\"pull overview\">
                                        <div class=\"row\">
                                            <div class=\"span3\">


                                                <table>
                                                    <tr>
                                                        <th>Auteur:</th>
                                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "idutilisateur"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date:</th>
                                                        <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "texte"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                            ";
        }
        // line 92
        echo "                            </div>
                            <div class=\"pull overview\">
                                <div class=\"row\">
                                    <div class=\"span9\">
                                        ";
        // line 96
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TWfrontOfficeBundle:Commentaire:new", array("reclamation_id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id"))));
        echo "
                                        </script>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /#content -->
";
    }

    public function getTemplateName()
    {
        return "TWfrontOfficeBundle:Reclamation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 92,  165 => 88,  155 => 80,  152 => 83,  150 => 93,  76 => 33,  70 => 25,  104 => 56,  97 => 37,  34 => 10,  77 => 33,  58 => 20,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 75,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 22,  63 => 25,  59 => 20,  38 => 9,  94 => 41,  89 => 36,  85 => 38,  75 => 30,  68 => 23,  56 => 21,  87 => 33,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 34,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 68,  136 => 76,  121 => 59,  117 => 44,  105 => 40,  91 => 36,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 149,  157 => 56,  145 => 80,  139 => 45,  131 => 66,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 49,  101 => 45,  98 => 31,  96 => 38,  83 => 25,  74 => 25,  66 => 15,  55 => 15,  52 => 18,  50 => 14,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 116,  173 => 65,  168 => 72,  164 => 59,  162 => 84,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 79,  133 => 67,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 61,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 31,  80 => 34,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 15,  51 => 17,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 9,);
    }
}
