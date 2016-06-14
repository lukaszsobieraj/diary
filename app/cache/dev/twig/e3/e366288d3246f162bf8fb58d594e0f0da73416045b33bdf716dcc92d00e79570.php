<?php

/* DiaryBundle:Person:edit.html.twig */
class __TwigTemplate_6fadf7876636f535c18737ca01f366bf389c328c2dce84e912815cf4eae1078a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DiaryBundle:Default:index.html.twig", "DiaryBundle:Person:edit.html.twig", 1);
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
        $__internal_72c6e15b086489ea96f37554e78cc151165a0a5fd936fec0564d35d1c5b4c441 = $this->env->getExtension("native_profiler");
        $__internal_72c6e15b086489ea96f37554e78cc151165a0a5fd936fec0564d35d1c5b4c441->enter($__internal_72c6e15b086489ea96f37554e78cc151165a0a5fd936fec0564d35d1c5b4c441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c6e15b086489ea96f37554e78cc151165a0a5fd936fec0564d35d1c5b4c441->leave($__internal_72c6e15b086489ea96f37554e78cc151165a0a5fd936fec0564d35d1c5b4c441_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d345ef02144d905a6550f36d32e73fcf5c32359a519a6f5191467479b1fbd8a = $this->env->getExtension("native_profiler");
        $__internal_4d345ef02144d905a6550f36d32e73fcf5c32359a519a6f5191467479b1fbd8a->enter($__internal_4d345ef02144d905a6550f36d32e73fcf5c32359a519a6f5191467479b1fbd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "     <h1>Person<br/><small>Edit</small></h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <div>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
            Back to the list
        </a>
    </div>
    <div>";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</div>

";
        
        $__internal_4d345ef02144d905a6550f36d32e73fcf5c32359a519a6f5191467479b1fbd8a->leave($__internal_4d345ef02144d905a6550f36d32e73fcf5c32359a519a6f5191467479b1fbd8a_prof);

    }

    public function getTemplateName()
    {
        return "DiaryBundle:Person:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* {% block content %}*/
/*      <h1>Person<br/><small>Edit</small></h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*     <div>*/
/*         <a href="{{ path('person') }}" class="btn btn-default">*/
/*             Back to the list*/
/*         </a>*/
/*     </div>*/
/*     <div>{{ form(delete_form) }}</div>*/
/* */
/* {% endblock %}*/
/* */
