<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7dfab18caafe5f13549c588d12e514b7fe38796f32c388a0e67e50ad95946583 extends Twig_Template
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
        $__internal_6fd5873ae5e73f7169fb82b2d3e74078b9480bacc24918d4e464eb1c42b0059b = $this->env->getExtension("native_profiler");
        $__internal_6fd5873ae5e73f7169fb82b2d3e74078b9480bacc24918d4e464eb1c42b0059b->enter($__internal_6fd5873ae5e73f7169fb82b2d3e74078b9480bacc24918d4e464eb1c42b0059b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6fd5873ae5e73f7169fb82b2d3e74078b9480bacc24918d4e464eb1c42b0059b->leave($__internal_6fd5873ae5e73f7169fb82b2d3e74078b9480bacc24918d4e464eb1c42b0059b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
