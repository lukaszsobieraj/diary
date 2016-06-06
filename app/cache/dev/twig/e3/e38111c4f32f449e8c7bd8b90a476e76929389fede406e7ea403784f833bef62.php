<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d8c2442b62493cdd9f68348d08245a2d6ffd013d307fbb627b3b6e07d0d8d592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bee998d98018811e220428215f67f30e6bdb407bd09c6a6a6b66ae42d4fa2816 = $this->env->getExtension("native_profiler");
        $__internal_bee998d98018811e220428215f67f30e6bdb407bd09c6a6a6b66ae42d4fa2816->enter($__internal_bee998d98018811e220428215f67f30e6bdb407bd09c6a6a6b66ae42d4fa2816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bee998d98018811e220428215f67f30e6bdb407bd09c6a6a6b66ae42d4fa2816->leave($__internal_bee998d98018811e220428215f67f30e6bdb407bd09c6a6a6b66ae42d4fa2816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
