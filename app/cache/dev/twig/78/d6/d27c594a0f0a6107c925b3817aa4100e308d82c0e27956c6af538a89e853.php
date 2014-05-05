<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_78d6d27c594a0f0a6107c925b3817aa4100e308d82c0e27956c6af538a89e853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  197 => 71,  113 => 48,  110 => 22,  239 => 126,  232 => 122,  207 => 75,  200 => 72,  194 => 70,  185 => 66,  181 => 65,  161 => 63,  153 => 56,  410 => 144,  406 => 136,  403 => 135,  382 => 146,  380 => 160,  371 => 137,  369 => 135,  348 => 140,  340 => 280,  336 => 279,  332 => 278,  328 => 277,  324 => 276,  320 => 127,  316 => 274,  308 => 272,  304 => 271,  300 => 121,  296 => 269,  292 => 268,  288 => 267,  180 => 118,  100 => 39,  134 => 54,  127 => 60,  81 => 23,  129 => 53,  90 => 27,  84 => 24,  225 => 158,  212 => 79,  191 => 67,  186 => 94,  174 => 122,  137 => 66,  124 => 93,  184 => 96,  175 => 65,  148 => 76,  65 => 22,  346 => 116,  339 => 237,  335 => 134,  331 => 235,  327 => 234,  323 => 128,  319 => 232,  315 => 125,  311 => 230,  307 => 229,  303 => 122,  299 => 227,  295 => 226,  291 => 225,  286 => 112,  20 => 1,  237 => 143,  216 => 79,  192 => 103,  178 => 66,  172 => 64,  165 => 60,  155 => 80,  152 => 83,  150 => 55,  76 => 25,  70 => 19,  104 => 39,  97 => 41,  34 => 7,  77 => 33,  58 => 17,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 110,  177 => 64,  169 => 62,  140 => 58,  132 => 98,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 160,  227 => 81,  224 => 117,  221 => 77,  219 => 84,  217 => 153,  208 => 68,  204 => 72,  179 => 90,  159 => 113,  143 => 56,  135 => 62,  119 => 40,  102 => 40,  71 => 24,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 34,  89 => 44,  85 => 32,  75 => 41,  68 => 39,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 45,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 68,  136 => 54,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 21,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 26,  72 => 40,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 59,  145 => 105,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 50,  111 => 47,  108 => 19,  101 => 43,  98 => 35,  96 => 37,  83 => 33,  74 => 27,  66 => 27,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 163,  176 => 63,  173 => 63,  168 => 61,  164 => 115,  162 => 59,  154 => 60,  149 => 57,  147 => 54,  144 => 70,  141 => 51,  133 => 67,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 61,  109 => 50,  106 => 45,  103 => 32,  99 => 31,  95 => 42,  92 => 41,  86 => 32,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 12,  54 => 15,  51 => 17,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
