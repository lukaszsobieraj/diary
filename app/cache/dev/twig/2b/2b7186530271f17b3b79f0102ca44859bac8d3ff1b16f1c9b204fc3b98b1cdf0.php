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
        $__internal_8875cfb76d3ac458d7eb83281f94a6085564ac849f0221ba34ab423930781f2f = $this->env->getExtension("native_profiler");
        $__internal_8875cfb76d3ac458d7eb83281f94a6085564ac849f0221ba34ab423930781f2f->enter($__internal_8875cfb76d3ac458d7eb83281f94a6085564ac849f0221ba34ab423930781f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8875cfb76d3ac458d7eb83281f94a6085564ac849f0221ba34ab423930781f2f->leave($__internal_8875cfb76d3ac458d7eb83281f94a6085564ac849f0221ba34ab423930781f2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0692366cb0e361fe37d00f892fcad67434851423212fb88c46231b1943fb813 = $this->env->getExtension("native_profiler");
        $__internal_a0692366cb0e361fe37d00f892fcad67434851423212fb88c46231b1943fb813->enter($__internal_a0692366cb0e361fe37d00f892fcad67434851423212fb88c46231b1943fb813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a0692366cb0e361fe37d00f892fcad67434851423212fb88c46231b1943fb813->leave($__internal_a0692366cb0e361fe37d00f892fcad67434851423212fb88c46231b1943fb813_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e112d1980e5a22a9a263b1e9935b4224ec16d887128aab2e3ed9db30c606d4c = $this->env->getExtension("native_profiler");
        $__internal_0e112d1980e5a22a9a263b1e9935b4224ec16d887128aab2e3ed9db30c606d4c->enter($__internal_0e112d1980e5a22a9a263b1e9935b4224ec16d887128aab2e3ed9db30c606d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e112d1980e5a22a9a263b1e9935b4224ec16d887128aab2e3ed9db30c606d4c->leave($__internal_0e112d1980e5a22a9a263b1e9935b4224ec16d887128aab2e3ed9db30c606d4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c50770e53f09f7fba8d9bfd3c1feed1b0b90e1d341545a17c59aec7332e1934 = $this->env->getExtension("native_profiler");
        $__internal_7c50770e53f09f7fba8d9bfd3c1feed1b0b90e1d341545a17c59aec7332e1934->enter($__internal_7c50770e53f09f7fba8d9bfd3c1feed1b0b90e1d341545a17c59aec7332e1934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7c50770e53f09f7fba8d9bfd3c1feed1b0b90e1d341545a17c59aec7332e1934->leave($__internal_7c50770e53f09f7fba8d9bfd3c1feed1b0b90e1d341545a17c59aec7332e1934_prof);

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
