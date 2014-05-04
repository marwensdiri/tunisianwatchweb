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
        return array (  88 => 37,  82 => 34,  69 => 24,  60 => 18,  53 => 14,  48 => 12,  44 => 11,  40 => 9,  34 => 7,  31 => 6,  28 => 5,);
    }
}
