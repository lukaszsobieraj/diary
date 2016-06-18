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
        $__internal_2c426cc7eafa46fb2e7ffe4aab240be1c6f2902ddf3ce3ca138ac1ee2568bded = $this->env->getExtension("native_profiler");
        $__internal_2c426cc7eafa46fb2e7ffe4aab240be1c6f2902ddf3ce3ca138ac1ee2568bded->enter($__internal_2c426cc7eafa46fb2e7ffe4aab240be1c6f2902ddf3ce3ca138ac1ee2568bded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c426cc7eafa46fb2e7ffe4aab240be1c6f2902ddf3ce3ca138ac1ee2568bded->leave($__internal_2c426cc7eafa46fb2e7ffe4aab240be1c6f2902ddf3ce3ca138ac1ee2568bded_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_704e6e7c75892c1577780e34f6cca784472124f6b07968d6d00d47206ae76ce3 = $this->env->getExtension("native_profiler");
        $__internal_704e6e7c75892c1577780e34f6cca784472124f6b07968d6d00d47206ae76ce3->enter($__internal_704e6e7c75892c1577780e34f6cca784472124f6b07968d6d00d47206ae76ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-md-2\"></div>
    <div class=\"col-md-5\">
        <h1>Diary<br/><small>Create</small></h1>
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">Name: 
            <p name=\"name\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo " </p>
        </div>
        <div class=\"form-group\">Description: 
            <p name=\"description\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "</p> 
        </div> 
        <div class=\"form-group\">Email: 
            <p name=\"email\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</p> 
        </div> 
        <div class=\"form-group\">Event: 
            <p name=\"event\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "event", array()), 'widget');
        echo "</p> 
        </div> 
        <div>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\" class=\"btn btn-default\">
                Back to the list
            </a>
        </div>
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_704e6e7c75892c1577780e34f6cca784472124f6b07968d6d00d47206ae76ce3->leave($__internal_704e6e7c75892c1577780e34f6cca784472124f6b07968d6d00d47206ae76ce3_prof);

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
        return array (  81 => 24,  74 => 20,  68 => 17,  62 => 14,  56 => 11,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'DiaryBundle:Default:index.html.twig' %}*/
/* {% block content %}*/
/*     <div class="col-md-2"></div>*/
/*     <div class="col-md-5">*/
/*         <h1>Diary<br/><small>Create</small></h1>*/
/*             {{ form_start(form) }}*/
/*         <div class="form-group">Name: */
/*             <p name="name">{{ form_widget(form.name) }} </p>*/
/*         </div>*/
/*         <div class="form-group">Description: */
/*             <p name="description">{{ form_widget(form.description) }}</p> */
/*         </div> */
/*         <div class="form-group">Email: */
/*             <p name="email">{{ form_widget(form.email) }}</p> */
/*         </div> */
/*         <div class="form-group">Event: */
/*             <p name="event">{{ form_widget(form.event) }}</p> */
/*         </div> */
/*         <div>*/
/*             <a href="{{ path('person') }}" class="btn btn-default">*/
/*                 Back to the list*/
/*             </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
