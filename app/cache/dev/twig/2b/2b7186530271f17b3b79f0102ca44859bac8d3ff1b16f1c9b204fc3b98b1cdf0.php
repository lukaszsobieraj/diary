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
        $__internal_8356998c3c542b9a4932a4a7a9f5cdcc0d9dee4537a296698f255056dbaa21fe = $this->env->getExtension("native_profiler");
        $__internal_8356998c3c542b9a4932a4a7a9f5cdcc0d9dee4537a296698f255056dbaa21fe->enter($__internal_8356998c3c542b9a4932a4a7a9f5cdcc0d9dee4537a296698f255056dbaa21fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8356998c3c542b9a4932a4a7a9f5cdcc0d9dee4537a296698f255056dbaa21fe->leave($__internal_8356998c3c542b9a4932a4a7a9f5cdcc0d9dee4537a296698f255056dbaa21fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e9a51fb862b4831be4385280300b18659d6b6b31f47501d9c5e2b8bca5a43f7 = $this->env->getExtension("native_profiler");
        $__internal_1e9a51fb862b4831be4385280300b18659d6b6b31f47501d9c5e2b8bca5a43f7->enter($__internal_1e9a51fb862b4831be4385280300b18659d6b6b31f47501d9c5e2b8bca5a43f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e9a51fb862b4831be4385280300b18659d6b6b31f47501d9c5e2b8bca5a43f7->leave($__internal_1e9a51fb862b4831be4385280300b18659d6b6b31f47501d9c5e2b8bca5a43f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_762816e961be1c5ba7057434f9059e602476c797ce1265677186cc29fb20f088 = $this->env->getExtension("native_profiler");
        $__internal_762816e961be1c5ba7057434f9059e602476c797ce1265677186cc29fb20f088->enter($__internal_762816e961be1c5ba7057434f9059e602476c797ce1265677186cc29fb20f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_762816e961be1c5ba7057434f9059e602476c797ce1265677186cc29fb20f088->leave($__internal_762816e961be1c5ba7057434f9059e602476c797ce1265677186cc29fb20f088_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d29ddaf146fe59134f278ccc12e9b41c18fe7f5a10b254325d8bfe5a7b84adad = $this->env->getExtension("native_profiler");
        $__internal_d29ddaf146fe59134f278ccc12e9b41c18fe7f5a10b254325d8bfe5a7b84adad->enter($__internal_d29ddaf146fe59134f278ccc12e9b41c18fe7f5a10b254325d8bfe5a7b84adad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d29ddaf146fe59134f278ccc12e9b41c18fe7f5a10b254325d8bfe5a7b84adad->leave($__internal_d29ddaf146fe59134f278ccc12e9b41c18fe7f5a10b254325d8bfe5a7b84adad_prof);

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
