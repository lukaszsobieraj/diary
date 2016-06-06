<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e6133f5fffffa267ab39b226a56374631a09fe53c330cbc188dd4e9de15d20eb extends Twig_Template
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
        $__internal_f6b1fe10217ddd675a4a9daa7ae23e8e49a191c23aaf401d1253718b998f3ad9 = $this->env->getExtension("native_profiler");
        $__internal_f6b1fe10217ddd675a4a9daa7ae23e8e49a191c23aaf401d1253718b998f3ad9->enter($__internal_f6b1fe10217ddd675a4a9daa7ae23e8e49a191c23aaf401d1253718b998f3ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f6b1fe10217ddd675a4a9daa7ae23e8e49a191c23aaf401d1253718b998f3ad9->leave($__internal_f6b1fe10217ddd675a4a9daa7ae23e8e49a191c23aaf401d1253718b998f3ad9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
