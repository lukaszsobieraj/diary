<?php

/* DiaryBundle:Person:edit.html.twig */
class __TwigTemplate_6fadf7876636f535c18737ca01f366bf389c328c2dce84e912815cf4eae1078a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiaryBundle:Person:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7577cfc97f1be3693d58c635637e2cfcd16cd53cc865b355b2b790a35882c0f4 = $this->env->getExtension("native_profiler");
        $__internal_7577cfc97f1be3693d58c635637e2cfcd16cd53cc865b355b2b790a35882c0f4->enter($__internal_7577cfc97f1be3693d58c635637e2cfcd16cd53cc865b355b2b790a35882c0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7577cfc97f1be3693d58c635637e2cfcd16cd53cc865b355b2b790a35882c0f4->leave($__internal_7577cfc97f1be3693d58c635637e2cfcd16cd53cc865b355b2b790a35882c0f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97c124700c4d42b969b689ee82b0ad8980ca7c309b772d3e23961ee581c324cc = $this->env->getExtension("native_profiler");
        $__internal_97c124700c4d42b969b689ee82b0ad8980ca7c309b772d3e23961ee581c324cc->enter($__internal_97c124700c4d42b969b689ee82b0ad8980ca7c309b772d3e23961ee581c324cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_97c124700c4d42b969b689ee82b0ad8980ca7c309b772d3e23961ee581c324cc->leave($__internal_97c124700c4d42b969b689ee82b0ad8980ca7c309b772d3e23961ee581c324cc_prof);

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
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
