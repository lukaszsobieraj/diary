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
        $__internal_39a5bad4244ee5875bc12e0984c8c882eaadf3c56c2115341308a02f84e936be = $this->env->getExtension("native_profiler");
        $__internal_39a5bad4244ee5875bc12e0984c8c882eaadf3c56c2115341308a02f84e936be->enter($__internal_39a5bad4244ee5875bc12e0984c8c882eaadf3c56c2115341308a02f84e936be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_39a5bad4244ee5875bc12e0984c8c882eaadf3c56c2115341308a02f84e936be->leave($__internal_39a5bad4244ee5875bc12e0984c8c882eaadf3c56c2115341308a02f84e936be_prof);

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
