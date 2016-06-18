<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_436d16ab3946a00880961a8b446a718ae79035eb2ed9fe8df7eee9fe422f115b extends Twig_Template
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
        $__internal_2ff9f37e998f0ab373b2fb94b3d3aa570df611156d2cdcedc27e68c6b5e33695 = $this->env->getExtension("native_profiler");
        $__internal_2ff9f37e998f0ab373b2fb94b3d3aa570df611156d2cdcedc27e68c6b5e33695->enter($__internal_2ff9f37e998f0ab373b2fb94b3d3aa570df611156d2cdcedc27e68c6b5e33695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2ff9f37e998f0ab373b2fb94b3d3aa570df611156d2cdcedc27e68c6b5e33695->leave($__internal_2ff9f37e998f0ab373b2fb94b3d3aa570df611156d2cdcedc27e68c6b5e33695_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
