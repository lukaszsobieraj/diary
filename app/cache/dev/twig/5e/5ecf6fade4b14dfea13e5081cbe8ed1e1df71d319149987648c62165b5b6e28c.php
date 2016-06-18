<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cd50f7585d4503f995699d6537d968f247c2408f6705380a92dc4096b9036648 extends Twig_Template
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
        $__internal_cc36f6efa5886d7e63be63601cc42903a274da1125eb8a8a08bfad7cbf7e74b3 = $this->env->getExtension("native_profiler");
        $__internal_cc36f6efa5886d7e63be63601cc42903a274da1125eb8a8a08bfad7cbf7e74b3->enter($__internal_cc36f6efa5886d7e63be63601cc42903a274da1125eb8a8a08bfad7cbf7e74b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cc36f6efa5886d7e63be63601cc42903a274da1125eb8a8a08bfad7cbf7e74b3->leave($__internal_cc36f6efa5886d7e63be63601cc42903a274da1125eb8a8a08bfad7cbf7e74b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
