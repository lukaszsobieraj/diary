<?php

/* DiaryBundle:Person:new.html.twig */
class __TwigTemplate_469a512c80b4db60bc99d7ecb7dc1a2585f0823019e849641ae54dbadccd74bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DiaryBundle:Default:index.html.twig", "DiaryBundle:Person:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiaryBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd4ee71e3ff560a905ca07f2054dcadcfca6b107e6c875c8fc95e3b95fa4fa06 = $this->env->getExtension("native_profiler");
        $__internal_dd4ee71e3ff560a905ca07f2054dcadcfca6b107e6c875c8fc95e3b95fa4fa06->enter($__internal_dd4ee71e3ff560a905ca07f2054dcadcfca6b107e6c875c8fc95e3b95fa4fa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd4ee71e3ff560a905ca07f2054dcadcfca6b107e6c875c8fc95e3b95fa4fa06->leave($__internal_dd4ee71e3ff560a905ca07f2054dcadcfca6b107e6c875c8fc95e3b95fa4fa06_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_487ed4addb887bd9aa27fbea33b135e25f3efb61c2a97d0af6b4794cbb6651e9 = $this->env->getExtension("native_profiler");
        $__internal_487ed4addb887bd9aa27fbea33b135e25f3efb61c2a97d0af6b4794cbb6651e9->enter($__internal_487ed4addb887bd9aa27fbea33b135e25f3efb61c2a97d0af6b4794cbb6651e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "     <h1>Person<br/><small>Create</small></h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <div>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
            Back to the list
        </a>
    </div>
";
        
        $__internal_487ed4addb887bd9aa27fbea33b135e25f3efb61c2a97d0af6b4794cbb6651e9->leave($__internal_487ed4addb887bd9aa27fbea33b135e25f3efb61c2a97d0af6b4794cbb6651e9_prof);

    }

    public function getTemplateName()
    {
        return "DiaryBundle:Person:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* {% block content %}*/
/*      <h1>Person<br/><small>Create</small></h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*     <div>*/
/*         <a href="{{ path('person') }}" class="btn btn-default">*/
/*             Back to the list*/
/*         </a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
