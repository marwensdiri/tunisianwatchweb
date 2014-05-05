<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c1930c00f49e25a693913fcaa1a04574e4f69578adffd1661ff33ce8e1645f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "

    <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"control-group\">
            <label for=\"username\" class=\"control-label\" for=\"inputLoginLogin\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "
                <span class=\"form-required\" title=\"This field is required.\">*</span>
            </label>
            <div class=\"controls\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>
        </div>


        <div class=\"control-group\">
            <label for=\"password\" class=\"control-label\" for=\"inputLoginPassword\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "
                <span class=\"form-required\" title=\"This field is required.\">*</span>
            </label>
            <div class=\"controls\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
        </div>


        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <div class=\"form-actions\">
            <input class= \"btn btn-primary arrow-right\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 144,  371 => 137,  369 => 135,  348 => 118,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 275,  316 => 274,  308 => 272,  304 => 271,  300 => 270,  296 => 269,  292 => 268,  288 => 267,  180 => 118,  100 => 43,  134 => 66,  127 => 62,  81 => 34,  129 => 49,  90 => 33,  84 => 39,  225 => 158,  212 => 151,  191 => 133,  186 => 131,  174 => 122,  137 => 100,  124 => 93,  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 92,  165 => 88,  155 => 80,  152 => 83,  150 => 107,  76 => 33,  70 => 28,  104 => 39,  97 => 37,  34 => 7,  77 => 33,  58 => 20,  53 => 14,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 273,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 168,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 98,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 69,  159 => 113,  143 => 56,  135 => 53,  119 => 57,  102 => 46,  71 => 24,  67 => 26,  63 => 25,  59 => 20,  38 => 8,  94 => 42,  89 => 36,  85 => 38,  75 => 25,  68 => 23,  56 => 15,  87 => 33,  21 => 2,  26 => 12,  93 => 28,  88 => 37,  78 => 30,  46 => 14,  27 => 5,  44 => 11,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 68,  136 => 54,  121 => 59,  117 => 43,  105 => 40,  91 => 36,  62 => 21,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 24,  47 => 18,  40 => 9,  37 => 10,  22 => 3,  246 => 149,  157 => 56,  145 => 105,  139 => 45,  131 => 66,  123 => 64,  120 => 40,  115 => 43,  111 => 40,  108 => 49,  101 => 45,  98 => 35,  96 => 38,  83 => 25,  74 => 30,  66 => 27,  55 => 21,  52 => 14,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 9,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 163,  176 => 116,  173 => 65,  168 => 72,  164 => 115,  162 => 84,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 79,  133 => 67,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 61,  109 => 50,  106 => 36,  103 => 32,  99 => 46,  95 => 42,  92 => 41,  86 => 32,  82 => 34,  80 => 37,  73 => 19,  64 => 26,  60 => 18,  57 => 25,  54 => 15,  51 => 17,  48 => 12,  45 => 16,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
