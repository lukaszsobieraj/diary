<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_68aab79c9df03481d0138b61fdbe4c7a28a979f36436ff2445e614dd8a980e33 extends Twig_Template
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
        $__internal_a3bf467764972a351dec52781371c2bc0cea6fd3b5e6c2dab1728ebf44d6defd = $this->env->getExtension("native_profiler");
        $__internal_a3bf467764972a351dec52781371c2bc0cea6fd3b5e6c2dab1728ebf44d6defd->enter($__internal_a3bf467764972a351dec52781371c2bc0cea6fd3b5e6c2dab1728ebf44d6defd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a3bf467764972a351dec52781371c2bc0cea6fd3b5e6c2dab1728ebf44d6defd->leave($__internal_a3bf467764972a351dec52781371c2bc0cea6fd3b5e6c2dab1728ebf44d6defd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
