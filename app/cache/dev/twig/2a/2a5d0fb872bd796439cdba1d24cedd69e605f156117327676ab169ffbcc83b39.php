<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_61fc9a0fc0c28aeeeb5d0494c0f824a8cb49f562ad5d359e7040699446495c1f extends Twig_Template
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
        $__internal_4e453ffa6d7e264a2903f360b83d8a97f2a194f33468c1b85a9dc8eb5161689f = $this->env->getExtension("native_profiler");
        $__internal_4e453ffa6d7e264a2903f360b83d8a97f2a194f33468c1b85a9dc8eb5161689f->enter($__internal_4e453ffa6d7e264a2903f360b83d8a97f2a194f33468c1b85a9dc8eb5161689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4e453ffa6d7e264a2903f360b83d8a97f2a194f33468c1b85a9dc8eb5161689f->leave($__internal_4e453ffa6d7e264a2903f360b83d8a97f2a194f33468c1b85a9dc8eb5161689f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
