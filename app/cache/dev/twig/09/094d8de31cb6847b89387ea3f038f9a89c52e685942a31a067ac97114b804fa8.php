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
        $__internal_8eb1017a6ede575a46df67f91a77fb20a1156c0a87ad766ec96a2cb1f74543e5 = $this->env->getExtension("native_profiler");
        $__internal_8eb1017a6ede575a46df67f91a77fb20a1156c0a87ad766ec96a2cb1f74543e5->enter($__internal_8eb1017a6ede575a46df67f91a77fb20a1156c0a87ad766ec96a2cb1f74543e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb1017a6ede575a46df67f91a77fb20a1156c0a87ad766ec96a2cb1f74543e5->leave($__internal_8eb1017a6ede575a46df67f91a77fb20a1156c0a87ad766ec96a2cb1f74543e5_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5763d919cfbe766767ca6e8111e95ecc87ab3ecba905ec468eee9f03bd49b0e = $this->env->getExtension("native_profiler");
        $__internal_e5763d919cfbe766767ca6e8111e95ecc87ab3ecba905ec468eee9f03bd49b0e->enter($__internal_e5763d919cfbe766767ca6e8111e95ecc87ab3ecba905ec468eee9f03bd49b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Person<br/><small>Show</small></h1>

    <table class=\"record_properties table\">
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
                <th>Email</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
            Back to the list
        </a>
    </div>
    <div>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Edit
        </a>
    </div>
    <div>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</div>
";
        
        $__internal_e5763d919cfbe766767ca6e8111e95ecc87ab3ecba905ec468eee9f03bd49b0e->leave($__internal_e5763d919cfbe766767ca6e8111e95ecc87ab3ecba905ec468eee9f03bd49b0e_prof);

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
        return array (  93 => 38,  86 => 34,  78 => 29,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/*     <h1>Person<br/><small>Show</small></h1>*/
/* */
/*     <table class="record_properties table">*/
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
/*                 <th>Email</th>*/
/*                 <td>{{ entity.email }}</td>*/
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
/*         <a href="{{ path('person_edit', { 'id': entity.id }) }}" class="btn btn-primary">*/
/*             Edit*/
/*         </a>*/
/*     </div>*/
/*     <div>{{ form(delete_form) }}</div>*/
/* {% endblock %}*/
/* */
