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
        $__internal_36551a632cc5419a9bd68c7254fc7a49b97bb96b4c5351a9ad01a0712d0a9a9a = $this->env->getExtension("native_profiler");
        $__internal_36551a632cc5419a9bd68c7254fc7a49b97bb96b4c5351a9ad01a0712d0a9a9a->enter($__internal_36551a632cc5419a9bd68c7254fc7a49b97bb96b4c5351a9ad01a0712d0a9a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_36551a632cc5419a9bd68c7254fc7a49b97bb96b4c5351a9ad01a0712d0a9a9a->leave($__internal_36551a632cc5419a9bd68c7254fc7a49b97bb96b4c5351a9ad01a0712d0a9a9a_prof);

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
