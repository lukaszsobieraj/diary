<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6b922db23a84c8a35bdc4018ba51044ddfb63a49054e5bb1772d35aeacdf37b3 extends Twig_Template
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
        $__internal_4d65d6f850d5d9b5090751edc3f2540ae14a4c71eebb984455cc1095e385f3c2 = $this->env->getExtension("native_profiler");
        $__internal_4d65d6f850d5d9b5090751edc3f2540ae14a4c71eebb984455cc1095e385f3c2->enter($__internal_4d65d6f850d5d9b5090751edc3f2540ae14a4c71eebb984455cc1095e385f3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4d65d6f850d5d9b5090751edc3f2540ae14a4c71eebb984455cc1095e385f3c2->leave($__internal_4d65d6f850d5d9b5090751edc3f2540ae14a4c71eebb984455cc1095e385f3c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
