<?php

/* DiaryBundle:Person:show.html.twig */
class __TwigTemplate_e4a5d15709e01381dd87e19e7b7b384d87b683f507934edaec4038e64f645683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DiaryBundle:Default:index.html.twig", "DiaryBundle:Person:show.html.twig", 1);
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
        $__internal_c2ca6aa7dc6ca8e1c6346c58cbf098bcc0e5c3cd941c5b7617e4f2c7dfa04d5b = $this->env->getExtension("native_profiler");
        $__internal_c2ca6aa7dc6ca8e1c6346c58cbf098bcc0e5c3cd941c5b7617e4f2c7dfa04d5b->enter($__internal_c2ca6aa7dc6ca8e1c6346c58cbf098bcc0e5c3cd941c5b7617e4f2c7dfa04d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ca6aa7dc6ca8e1c6346c58cbf098bcc0e5c3cd941c5b7617e4f2c7dfa04d5b->leave($__internal_c2ca6aa7dc6ca8e1c6346c58cbf098bcc0e5c3cd941c5b7617e4f2c7dfa04d5b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7be57f477aad85786ed867230a0cfe1b71e0d0a7a6b10aeb7fd6f60a9644ee7a = $this->env->getExtension("native_profiler");
        $__internal_7be57f477aad85786ed867230a0cfe1b71e0d0a7a6b10aeb7fd6f60a9644ee7a->enter($__internal_7be57f477aad85786ed867230a0cfe1b71e0d0a7a6b10aeb7fd6f60a9644ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Person<br/><small>Show</small></h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
            Back to the list
        </a>
    </div>
    <div>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            Edit
        </a>
    </div>
    <div>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</div>
    ";
        
        $__internal_7be57f477aad85786ed867230a0cfe1b71e0d0a7a6b10aeb7fd6f60a9644ee7a->leave($__internal_7be57f477aad85786ed867230a0cfe1b71e0d0a7a6b10aeb7fd6f60a9644ee7a_prof);

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
        return array (  86 => 34,  79 => 30,  71 => 25,  62 => 19,  55 => 15,  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/*     <h1>Person<br/><small>Show</small></h1>*/
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
/*     <div>*/
/*         <a href="{{ path('person') }}" class="btn btn-default">*/
/*             Back to the list*/
/*         </a>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path('person_edit', { 'id': entity.id }) }}" class="btn btn-default">*/
/*             Edit*/
/*         </a>*/
/*     </div>*/
/*     <div>{{ form(delete_form) }}</div>*/
/*     {% endblock %}*/
/* */
