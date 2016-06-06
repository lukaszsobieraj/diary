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
        $__internal_344a41aac218919d0f30e585a05356efe3dd12e0ce14c8159fd87cb293ba52f6 = $this->env->getExtension("native_profiler");
        $__internal_344a41aac218919d0f30e585a05356efe3dd12e0ce14c8159fd87cb293ba52f6->enter($__internal_344a41aac218919d0f30e585a05356efe3dd12e0ce14c8159fd87cb293ba52f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344a41aac218919d0f30e585a05356efe3dd12e0ce14c8159fd87cb293ba52f6->leave($__internal_344a41aac218919d0f30e585a05356efe3dd12e0ce14c8159fd87cb293ba52f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_884e5a4c756fb93b5dd7cbfb9c9aeda9fde9d08a7d241cf9e5184dbdd6222873 = $this->env->getExtension("native_profiler");
        $__internal_884e5a4c756fb93b5dd7cbfb9c9aeda9fde9d08a7d241cf9e5184dbdd6222873->enter($__internal_884e5a4c756fb93b5dd7cbfb9c9aeda9fde9d08a7d241cf9e5184dbdd6222873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_884e5a4c756fb93b5dd7cbfb9c9aeda9fde9d08a7d241cf9e5184dbdd6222873->leave($__internal_884e5a4c756fb93b5dd7cbfb9c9aeda9fde9d08a7d241cf9e5184dbdd6222873_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc4e3149a0bd055d6f100307943229f8cdef6dcbb61b95ff46cd8bf417f5e6b2 = $this->env->getExtension("native_profiler");
        $__internal_fc4e3149a0bd055d6f100307943229f8cdef6dcbb61b95ff46cd8bf417f5e6b2->enter($__internal_fc4e3149a0bd055d6f100307943229f8cdef6dcbb61b95ff46cd8bf417f5e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc4e3149a0bd055d6f100307943229f8cdef6dcbb61b95ff46cd8bf417f5e6b2->leave($__internal_fc4e3149a0bd055d6f100307943229f8cdef6dcbb61b95ff46cd8bf417f5e6b2_prof);

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
