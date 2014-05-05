<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_32baae4b11625e0025e7d65e090059595f0919c3d087dc51d8bb19bcc795fd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 126,  232 => 122,  207 => 106,  200 => 102,  194 => 70,  185 => 66,  181 => 65,  161 => 60,  153 => 58,  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 144,  371 => 137,  369 => 135,  348 => 118,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 275,  316 => 274,  308 => 272,  304 => 271,  300 => 270,  296 => 269,  292 => 268,  288 => 267,  180 => 118,  100 => 43,  134 => 66,  127 => 62,  81 => 34,  129 => 53,  90 => 33,  84 => 39,  225 => 158,  212 => 79,  191 => 133,  186 => 94,  174 => 122,  137 => 66,  124 => 93,  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 86,  165 => 82,  155 => 80,  152 => 83,  150 => 107,  76 => 33,  70 => 28,  104 => 39,  97 => 46,  34 => 7,  77 => 33,  58 => 20,  53 => 18,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 273,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 168,  229 => 73,  220 => 70,  214 => 110,  177 => 64,  169 => 62,  140 => 55,  132 => 98,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 117,  221 => 77,  219 => 84,  217 => 153,  208 => 68,  204 => 72,  179 => 90,  159 => 113,  143 => 56,  135 => 54,  119 => 51,  102 => 46,  71 => 24,  67 => 26,  63 => 25,  59 => 20,  38 => 6,  94 => 42,  89 => 44,  85 => 43,  75 => 41,  68 => 39,  56 => 15,  87 => 33,  21 => 2,  26 => 12,  93 => 45,  88 => 38,  78 => 30,  46 => 14,  27 => 5,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 59,  138 => 68,  136 => 54,  121 => 59,  117 => 43,  105 => 48,  91 => 36,  62 => 21,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 26,  72 => 40,  69 => 24,  47 => 18,  40 => 9,  37 => 10,  22 => 3,  246 => 149,  157 => 59,  145 => 105,  139 => 55,  131 => 66,  123 => 58,  120 => 40,  115 => 50,  111 => 49,  108 => 49,  101 => 47,  98 => 35,  96 => 38,  83 => 25,  74 => 30,  66 => 27,  55 => 21,  52 => 10,  50 => 10,  43 => 7,  41 => 9,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 163,  176 => 116,  173 => 63,  168 => 72,  164 => 115,  162 => 84,  154 => 58,  149 => 57,  147 => 58,  144 => 70,  141 => 79,  133 => 67,  130 => 62,  125 => 52,  122 => 43,  116 => 54,  112 => 61,  109 => 50,  106 => 36,  103 => 32,  99 => 46,  95 => 42,  92 => 41,  86 => 32,  82 => 34,  80 => 37,  73 => 19,  64 => 26,  60 => 22,  57 => 12,  54 => 15,  51 => 17,  48 => 9,  45 => 16,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 2,);
    }
}
