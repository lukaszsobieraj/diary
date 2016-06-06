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
        $__internal_e9005618ce781e83ffcf0983f702249adf27419c1a2ae188354bc56ad4589ed9 = $this->env->getExtension("native_profiler");
        $__internal_e9005618ce781e83ffcf0983f702249adf27419c1a2ae188354bc56ad4589ed9->enter($__internal_e9005618ce781e83ffcf0983f702249adf27419c1a2ae188354bc56ad4589ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e9005618ce781e83ffcf0983f702249adf27419c1a2ae188354bc56ad4589ed9->leave($__internal_e9005618ce781e83ffcf0983f702249adf27419c1a2ae188354bc56ad4589ed9_prof);

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
