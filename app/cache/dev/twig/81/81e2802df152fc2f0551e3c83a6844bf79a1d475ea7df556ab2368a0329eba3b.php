<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e33a8458076f73adceeb5cd17aa47774ebd05d6c2d13be22ef160f098bf2c829 extends Twig_Template
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
        $__internal_a8a1dca16c447f949ac2e92ad6550678898c84300d7dfc61ce124eaea5c74029 = $this->env->getExtension("native_profiler");
        $__internal_a8a1dca16c447f949ac2e92ad6550678898c84300d7dfc61ce124eaea5c74029->enter($__internal_a8a1dca16c447f949ac2e92ad6550678898c84300d7dfc61ce124eaea5c74029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a8a1dca16c447f949ac2e92ad6550678898c84300d7dfc61ce124eaea5c74029->leave($__internal_a8a1dca16c447f949ac2e92ad6550678898c84300d7dfc61ce124eaea5c74029_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
