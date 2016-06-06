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
        $__internal_da4b8b5f112ec6c0212bc0d5931da2e51555a95028a3137e30b2296428a02606 = $this->env->getExtension("native_profiler");
        $__internal_da4b8b5f112ec6c0212bc0d5931da2e51555a95028a3137e30b2296428a02606->enter($__internal_da4b8b5f112ec6c0212bc0d5931da2e51555a95028a3137e30b2296428a02606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_da4b8b5f112ec6c0212bc0d5931da2e51555a95028a3137e30b2296428a02606->leave($__internal_da4b8b5f112ec6c0212bc0d5931da2e51555a95028a3137e30b2296428a02606_prof);

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
