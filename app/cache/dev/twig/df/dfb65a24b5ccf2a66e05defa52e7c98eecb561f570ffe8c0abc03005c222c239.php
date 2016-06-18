<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_62b8ac32c230046cf58f3942236ce5c0f48c90ea76cc766c9396ea9ac9f2fbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c9d4fb29fc2a1d8110dc018a8a0dae281241bee028428123275bd1d84840f13 = $this->env->getExtension("native_profiler");
        $__internal_3c9d4fb29fc2a1d8110dc018a8a0dae281241bee028428123275bd1d84840f13->enter($__internal_3c9d4fb29fc2a1d8110dc018a8a0dae281241bee028428123275bd1d84840f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9d4fb29fc2a1d8110dc018a8a0dae281241bee028428123275bd1d84840f13->leave($__internal_3c9d4fb29fc2a1d8110dc018a8a0dae281241bee028428123275bd1d84840f13_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a6e9b2b73a55cd3e31f04728445684214130a7a84fe0d12124c7f9373b66666 = $this->env->getExtension("native_profiler");
        $__internal_1a6e9b2b73a55cd3e31f04728445684214130a7a84fe0d12124c7f9373b66666->enter($__internal_1a6e9b2b73a55cd3e31f04728445684214130a7a84fe0d12124c7f9373b66666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1a6e9b2b73a55cd3e31f04728445684214130a7a84fe0d12124c7f9373b66666->leave($__internal_1a6e9b2b73a55cd3e31f04728445684214130a7a84fe0d12124c7f9373b66666_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b2a58110c82b46f952970dce9ae38b7ea6bbce8efb57e825fdecdde64dfc85 = $this->env->getExtension("native_profiler");
        $__internal_d7b2a58110c82b46f952970dce9ae38b7ea6bbce8efb57e825fdecdde64dfc85->enter($__internal_d7b2a58110c82b46f952970dce9ae38b7ea6bbce8efb57e825fdecdde64dfc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d7b2a58110c82b46f952970dce9ae38b7ea6bbce8efb57e825fdecdde64dfc85->leave($__internal_d7b2a58110c82b46f952970dce9ae38b7ea6bbce8efb57e825fdecdde64dfc85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
