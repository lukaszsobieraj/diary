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
        $__internal_14a7ddcd90567dd310646c5d620d003ed4869ce50346d7e52961a0cd338dfcfb = $this->env->getExtension("native_profiler");
        $__internal_14a7ddcd90567dd310646c5d620d003ed4869ce50346d7e52961a0cd338dfcfb->enter($__internal_14a7ddcd90567dd310646c5d620d003ed4869ce50346d7e52961a0cd338dfcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a7ddcd90567dd310646c5d620d003ed4869ce50346d7e52961a0cd338dfcfb->leave($__internal_14a7ddcd90567dd310646c5d620d003ed4869ce50346d7e52961a0cd338dfcfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5614732deb178fe7ea873802b356bcfdc08e2f934b261bdc02c10aa3204201ec = $this->env->getExtension("native_profiler");
        $__internal_5614732deb178fe7ea873802b356bcfdc08e2f934b261bdc02c10aa3204201ec->enter($__internal_5614732deb178fe7ea873802b356bcfdc08e2f934b261bdc02c10aa3204201ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5614732deb178fe7ea873802b356bcfdc08e2f934b261bdc02c10aa3204201ec->leave($__internal_5614732deb178fe7ea873802b356bcfdc08e2f934b261bdc02c10aa3204201ec_prof);

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
