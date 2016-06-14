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
        $__internal_cc163073eeaad4f5b84f2953b68457bc18cecc108f82c8462a52e070db5b1c1c = $this->env->getExtension("native_profiler");
        $__internal_cc163073eeaad4f5b84f2953b68457bc18cecc108f82c8462a52e070db5b1c1c->enter($__internal_cc163073eeaad4f5b84f2953b68457bc18cecc108f82c8462a52e070db5b1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc163073eeaad4f5b84f2953b68457bc18cecc108f82c8462a52e070db5b1c1c->leave($__internal_cc163073eeaad4f5b84f2953b68457bc18cecc108f82c8462a52e070db5b1c1c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_711458399c9b9ccc42e0fb04b67e67ee8765212b8869c63a9dc4d056194197a4 = $this->env->getExtension("native_profiler");
        $__internal_711458399c9b9ccc42e0fb04b67e67ee8765212b8869c63a9dc4d056194197a4->enter($__internal_711458399c9b9ccc42e0fb04b67e67ee8765212b8869c63a9dc4d056194197a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-2\"></div>
    <div class=\"col-md-5\">
        <span><h1>Person<br/><small>List</small></h1></span>
        <table class=\"records_list table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                    <tr>
                        <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <div>
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Show</a>
                                </div>
                                <div>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                                </divs>
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
            <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("person_new");
        echo "\">
                Create a new entry
            </a>
        </div>

    </div>

";
        
        $__internal_711458399c9b9ccc42e0fb04b67e67ee8765212b8869c63a9dc4d056194197a4->leave($__internal_711458399c9b9ccc42e0fb04b67e67ee8765212b8869c63a9dc4d056194197a4_prof);

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
        return array (  102 => 37,  97 => 34,  85 => 28,  79 => 25,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-2"></div>*/
/*     <div class="col-md-5">*/
/*         <span><h1>Person<br/><small>List</small></h1></span>*/
/*         <table class="records_list table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Name</th>*/
/*                     <th>Description</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('person_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{{ entity.name }}</td>*/
/*                         <td>{{ entity.description }}</td>*/
/*                         <td>*/
/*                             <div>*/
/*                                 <div>*/
/*                                     <a href="{{ path('person_show', { 'id': entity.id }) }}" class="btn btn-default">Show</a>*/
/*                                 </div>*/
/*                                 <div>*/
/*                                     <a href="{{ path('person_edit', { 'id': entity.id }) }}" class="btn btn-default">Edit</a>*/
/*                                 </divs>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <div>*/
/*             <a class="btn btn-default" href="{{ path('person_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
