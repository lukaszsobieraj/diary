<?php

/* DiaryBundle:Person:index.html.twig */
class __TwigTemplate_d2cede4d07f0e1434d9444d4bfba37ef36beeb642d43a3fdda969e7cbd2d4d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DiaryBundle:Default:index.html.twig", "DiaryBundle:Person:index.html.twig", 1);
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
        $__internal_9cc752112b8954fe13ca78439d9d73551943b71fe6ce0c0c75df975f6c819fa4 = $this->env->getExtension("native_profiler");
        $__internal_9cc752112b8954fe13ca78439d9d73551943b71fe6ce0c0c75df975f6c819fa4->enter($__internal_9cc752112b8954fe13ca78439d9d73551943b71fe6ce0c0c75df975f6c819fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc752112b8954fe13ca78439d9d73551943b71fe6ce0c0c75df975f6c819fa4->leave($__internal_9cc752112b8954fe13ca78439d9d73551943b71fe6ce0c0c75df975f6c819fa4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_235662a9bc3cf10827f9ff27c97bbada7c9ad1d45723fe755a5ca3088562cdb2 = $this->env->getExtension("native_profiler");
        $__internal_235662a9bc3cf10827f9ff27c97bbada7c9ad1d45723fe755a5ca3088562cdb2->enter($__internal_235662a9bc3cf10827f9ff27c97bbada7c9ad1d45723fe755a5ca3088562cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-2\"></div>
    <div class=\"col-md-5\">
        <span><h1>Person Diary<br/><small>List</small></h1></span>
        <table class=\"records_list table table-records\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                    <tr>
                        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <div>
                                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Show</a>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
        <div>
            <a class=\"btn btn-primary create-button\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("person_new");
        echo "\">
                Create a new entry
            </a>
        </div>

    </div>

";
        
        $__internal_235662a9bc3cf10827f9ff27c97bbada7c9ad1d45723fe755a5ca3088562cdb2->leave($__internal_235662a9bc3cf10827f9ff27c97bbada7c9ad1d45723fe755a5ca3088562cdb2_prof);

    }

    public function getTemplateName()
    {
        return "DiaryBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 34,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-2"></div>*/
/*     <div class="col-md-5">*/
/*         <span><h1>Person Diary<br/><small>List</small></h1></span>*/
/*         <table class="records_list table table-records">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Name</th>*/
/*                     <th>Email</th>*/
/*                     <th>Description</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('person_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{{ entity.name }}</td>*/
/*                         <td>{{ entity.email }}</td>*/
/*                         <td>{{ entity.description }}</td>*/
/*                         <td>*/
/*                             <div>*/
/*                                 <div>*/
/*                                     <a href="{{ path('person_show', { 'id': entity.id }) }}" class="btn btn-default">Show</a>*/
/*                                     <a href="{{ path('person_edit', { 'id': entity.id }) }}" class="btn btn-default">Edit</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <div>*/
/*             <a class="btn btn-primary create-button" href="{{ path('person_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
