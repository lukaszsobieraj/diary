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
        $__internal_1b96cec1dd80fdb468d44f47bef969c6b130fbc01d58f90d6c796a668aa1301e = $this->env->getExtension("native_profiler");
        $__internal_1b96cec1dd80fdb468d44f47bef969c6b130fbc01d58f90d6c796a668aa1301e->enter($__internal_1b96cec1dd80fdb468d44f47bef969c6b130fbc01d58f90d6c796a668aa1301e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b96cec1dd80fdb468d44f47bef969c6b130fbc01d58f90d6c796a668aa1301e->leave($__internal_1b96cec1dd80fdb468d44f47bef969c6b130fbc01d58f90d6c796a668aa1301e_prof);

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
