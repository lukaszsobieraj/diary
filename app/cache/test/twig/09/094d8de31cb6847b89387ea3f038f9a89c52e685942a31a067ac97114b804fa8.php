<?php

/* DiaryBundle:Person:show.html.twig */
class __TwigTemplate_e4a5d15709e01381dd87e19e7b7b384d87b683f507934edaec4038e64f645683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiaryBundle:Person:show.html.twig", 1);
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
        $__internal_21d223a23d8a6da649d519c9efbf658ce8ed8698ad013dba03ac0833b6f9c96a = $this->env->getExtension("native_profiler");
        $__internal_21d223a23d8a6da649d519c9efbf658ce8ed8698ad013dba03ac0833b6f9c96a->enter($__internal_21d223a23d8a6da649d519c9efbf658ce8ed8698ad013dba03ac0833b6f9c96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d223a23d8a6da649d519c9efbf658ce8ed8698ad013dba03ac0833b6f9c96a->leave($__internal_21d223a23d8a6da649d519c9efbf658ce8ed8698ad013dba03ac0833b6f9c96a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b117ee951c4b16ea6a7e7ae7efd5b80436cd2b3ec53d2c9523deec934d586291 = $this->env->getExtension("native_profiler");
        $__internal_b117ee951c4b16ea6a7e7ae7efd5b80436cd2b3ec53d2c9523deec934d586291->enter($__internal_b117ee951c4b16ea6a7e7ae7efd5b80436cd2b3ec53d2c9523deec934d586291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b117ee951c4b16ea6a7e7ae7efd5b80436cd2b3ec53d2c9523deec934d586291->leave($__internal_b117ee951c4b16ea6a7e7ae7efd5b80436cd2b3ec53d2c9523deec934d586291_prof);

    }

    public function getTemplateName()
    {
        return "DiaryBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('person_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
