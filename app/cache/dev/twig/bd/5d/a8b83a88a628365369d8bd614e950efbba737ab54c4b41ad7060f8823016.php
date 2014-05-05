<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_bd5da8b83a88a628365369d8bd614e950efbba737ab54c4b41ad7060f8823016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  239 => 126,  232 => 122,  207 => 106,  200 => 102,  194 => 70,  185 => 66,  181 => 65,  161 => 60,  153 => 58,  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 144,  371 => 137,  369 => 135,  348 => 118,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 275,  316 => 274,  308 => 272,  304 => 271,  300 => 270,  296 => 269,  292 => 268,  288 => 267,  180 => 118,  100 => 43,  134 => 66,  127 => 28,  81 => 34,  129 => 53,  90 => 32,  84 => 29,  225 => 158,  212 => 79,  191 => 133,  186 => 94,  174 => 122,  137 => 66,  124 => 93,  184 => 96,  175 => 91,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 236,  331 => 235,  327 => 234,  323 => 233,  319 => 232,  315 => 231,  311 => 230,  307 => 229,  303 => 228,  299 => 227,  295 => 226,  291 => 225,  286 => 223,  20 => 1,  237 => 143,  216 => 125,  192 => 103,  178 => 92,  172 => 86,  165 => 82,  155 => 80,  152 => 83,  150 => 107,  76 => 17,  70 => 28,  104 => 39,  97 => 46,  34 => 7,  77 => 33,  58 => 17,  53 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 273,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 168,  229 => 73,  220 => 70,  214 => 110,  177 => 64,  169 => 62,  140 => 55,  132 => 98,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 117,  221 => 77,  219 => 84,  217 => 153,  208 => 68,  204 => 72,  179 => 90,  159 => 113,  143 => 56,  135 => 54,  119 => 51,  102 => 17,  71 => 24,  67 => 26,  63 => 25,  59 => 13,  38 => 6,  94 => 34,  89 => 44,  85 => 43,  75 => 41,  68 => 39,  56 => 11,  87 => 33,  21 => 2,  26 => 9,  93 => 45,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 59,  138 => 68,  136 => 54,  121 => 59,  117 => 19,  105 => 18,  91 => 36,  62 => 21,  49 => 13,  24 => 7,  25 => 35,  19 => 1,  79 => 26,  72 => 40,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 149,  157 => 59,  145 => 105,  139 => 55,  131 => 66,  123 => 58,  120 => 20,  115 => 50,  111 => 49,  108 => 19,  101 => 47,  98 => 35,  96 => 38,  83 => 25,  74 => 30,  66 => 27,  55 => 21,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 163,  176 => 116,  173 => 63,  168 => 72,  164 => 115,  162 => 84,  154 => 58,  149 => 57,  147 => 58,  144 => 70,  141 => 79,  133 => 67,  130 => 62,  125 => 52,  122 => 43,  116 => 54,  112 => 61,  109 => 50,  106 => 36,  103 => 32,  99 => 46,  95 => 42,  92 => 41,  86 => 32,  82 => 28,  80 => 37,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 15,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
