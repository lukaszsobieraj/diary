<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_db798df6bb5f397388904387afafbf68d73ad89ff68ab02134eef87ee3c63d71 extends Twig_Template
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
        $__internal_a3197f53b895795e2010e687a97052589945c983597a3606809f85db6dd98342 = $this->env->getExtension("native_profiler");
        $__internal_a3197f53b895795e2010e687a97052589945c983597a3606809f85db6dd98342->enter($__internal_a3197f53b895795e2010e687a97052589945c983597a3606809f85db6dd98342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a3197f53b895795e2010e687a97052589945c983597a3606809f85db6dd98342->leave($__internal_a3197f53b895795e2010e687a97052589945c983597a3606809f85db6dd98342_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
