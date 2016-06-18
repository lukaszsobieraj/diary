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
        $__internal_fd0069d5b6de8dbe778ff2b175d13fccaa73bd0bbf4c5a6e63114dcef320bfb5 = $this->env->getExtension("native_profiler");
        $__internal_fd0069d5b6de8dbe778ff2b175d13fccaa73bd0bbf4c5a6e63114dcef320bfb5->enter($__internal_fd0069d5b6de8dbe778ff2b175d13fccaa73bd0bbf4c5a6e63114dcef320bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0069d5b6de8dbe778ff2b175d13fccaa73bd0bbf4c5a6e63114dcef320bfb5->leave($__internal_fd0069d5b6de8dbe778ff2b175d13fccaa73bd0bbf4c5a6e63114dcef320bfb5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf8e21a54b2083e3b77399b34ecd447e7a3fadf9b7deae82a9131ef2e102533d = $this->env->getExtension("native_profiler");
        $__internal_bf8e21a54b2083e3b77399b34ecd447e7a3fadf9b7deae82a9131ef2e102533d->enter($__internal_bf8e21a54b2083e3b77399b34ecd447e7a3fadf9b7deae82a9131ef2e102533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-2\"></div>
    <div class=\"col-md-5\">
        <h1>Person<br/><small>Edit</small></h1>
            ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"form-group\">Name: 
            <p>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo " </p>
        </div>
        <div class=\"form-group\">Description: 
            <p>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "</p> 
        </div> 
        <div class=\"form-group\">Event: 
            <p>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "event", array()), 'widget');
        echo "</p> 
        </div> 
        <div class=\"form-group\">Event: 
            <p>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</p> 
        </div> 
        <div>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
                Back to the list
            </a>
        </div>
        <div>";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</div>
    </div>

";
        
        $__internal_bf8e21a54b2083e3b77399b34ecd447e7a3fadf9b7deae82a9131ef2e102533d->leave($__internal_bf8e21a54b2083e3b77399b34ecd447e7a3fadf9b7deae82a9131ef2e102533d_prof);

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
        return array (  81 => 25,  74 => 21,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-2"></div>*/
/*     <div class="col-md-5">*/
/*         <h1>Person<br/><small>Edit</small></h1>*/
/*             {{ form_start(edit_form) }}*/
/*         <div class="form-group">Name: */
/*             <p>{{ form_widget(edit_form.name) }} </p>*/
/*         </div>*/
/*         <div class="form-group">Description: */
/*             <p>{{ form_widget(edit_form.description) }}</p> */
/*         </div> */
/*         <div class="form-group">Event: */
/*             <p>{{ form_widget(edit_form.event) }}</p> */
/*         </div> */
/*         <div class="form-group">Event: */
/*             <p>{{ form_widget(edit_form.email) }}</p> */
/*         </div> */
/*         <div>*/
/*             <a href="{{ path('person') }}" class="btn btn-default">*/
/*                 Back to the list*/
/*             </a>*/
/*         </div>*/
/*         <div>{{ form(delete_form) }}</div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
