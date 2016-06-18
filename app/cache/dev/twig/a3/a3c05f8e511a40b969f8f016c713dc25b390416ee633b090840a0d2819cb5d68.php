<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4d3f0a023b462d2294c43c10194741d2b869460c5a5a9163c7fcc4e583f07bdc extends Twig_Template
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
        $__internal_bb6bfb9397ae48b2fa91eb422dc325c9ed065d6c1a0da29510099eae1be23bca = $this->env->getExtension("native_profiler");
        $__internal_bb6bfb9397ae48b2fa91eb422dc325c9ed065d6c1a0da29510099eae1be23bca->enter($__internal_bb6bfb9397ae48b2fa91eb422dc325c9ed065d6c1a0da29510099eae1be23bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bb6bfb9397ae48b2fa91eb422dc325c9ed065d6c1a0da29510099eae1be23bca->leave($__internal_bb6bfb9397ae48b2fa91eb422dc325c9ed065d6c1a0da29510099eae1be23bca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
