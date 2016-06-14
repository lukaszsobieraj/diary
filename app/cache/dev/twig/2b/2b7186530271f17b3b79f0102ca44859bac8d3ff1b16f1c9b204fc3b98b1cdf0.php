<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5646de640073b9a1f8a0db77a92752d028447ef5d2d0bb494acd08684656c2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d1564d84ced4df8c0e5829ea1ed57a2819179742d960e6d920cbc93152e7cf9 = $this->env->getExtension("native_profiler");
        $__internal_1d1564d84ced4df8c0e5829ea1ed57a2819179742d960e6d920cbc93152e7cf9->enter($__internal_1d1564d84ced4df8c0e5829ea1ed57a2819179742d960e6d920cbc93152e7cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1564d84ced4df8c0e5829ea1ed57a2819179742d960e6d920cbc93152e7cf9->leave($__internal_1d1564d84ced4df8c0e5829ea1ed57a2819179742d960e6d920cbc93152e7cf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e257121132fc6ab0added2af95c7e39eae318be7c0b5e53f58ce2d1b03ba387 = $this->env->getExtension("native_profiler");
        $__internal_7e257121132fc6ab0added2af95c7e39eae318be7c0b5e53f58ce2d1b03ba387->enter($__internal_7e257121132fc6ab0added2af95c7e39eae318be7c0b5e53f58ce2d1b03ba387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e257121132fc6ab0added2af95c7e39eae318be7c0b5e53f58ce2d1b03ba387->leave($__internal_7e257121132fc6ab0added2af95c7e39eae318be7c0b5e53f58ce2d1b03ba387_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e698d6fb43d5705e3f78f0a9679bf5550188b47006ddaab4bd800c1d3717df7 = $this->env->getExtension("native_profiler");
        $__internal_3e698d6fb43d5705e3f78f0a9679bf5550188b47006ddaab4bd800c1d3717df7->enter($__internal_3e698d6fb43d5705e3f78f0a9679bf5550188b47006ddaab4bd800c1d3717df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e698d6fb43d5705e3f78f0a9679bf5550188b47006ddaab4bd800c1d3717df7->leave($__internal_3e698d6fb43d5705e3f78f0a9679bf5550188b47006ddaab4bd800c1d3717df7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d924b02af398d2ac93b548a2a6c26a5be59e171b109bc46c6d607d635fece5e = $this->env->getExtension("native_profiler");
        $__internal_7d924b02af398d2ac93b548a2a6c26a5be59e171b109bc46c6d607d635fece5e->enter($__internal_7d924b02af398d2ac93b548a2a6c26a5be59e171b109bc46c6d607d635fece5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7d924b02af398d2ac93b548a2a6c26a5be59e171b109bc46c6d607d635fece5e->leave($__internal_7d924b02af398d2ac93b548a2a6c26a5be59e171b109bc46c6d607d635fece5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
