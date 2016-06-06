<?php

/* DiaryBundle:Person:new.html.twig */
class __TwigTemplate_469a512c80b4db60bc99d7ecb7dc1a2585f0823019e849641ae54dbadccd74bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiaryBundle:Person:new.html.twig", 1);
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
        $__internal_2d8980597e2918d8e2fb47ebffe171e55c21a82711c231460dfea8fdf3e1755d = $this->env->getExtension("native_profiler");
        $__internal_2d8980597e2918d8e2fb47ebffe171e55c21a82711c231460dfea8fdf3e1755d->enter($__internal_2d8980597e2918d8e2fb47ebffe171e55c21a82711c231460dfea8fdf3e1755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8980597e2918d8e2fb47ebffe171e55c21a82711c231460dfea8fdf3e1755d->leave($__internal_2d8980597e2918d8e2fb47ebffe171e55c21a82711c231460dfea8fdf3e1755d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cb771cab8c8525c1954504c40ecce8e205b4ddbd82d5f09c0903a5f2921b331 = $this->env->getExtension("native_profiler");
        $__internal_2cb771cab8c8525c1954504c40ecce8e205b4ddbd82d5f09c0903a5f2921b331->enter($__internal_2cb771cab8c8525c1954504c40ecce8e205b4ddbd82d5f09c0903a5f2921b331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_2cb771cab8c8525c1954504c40ecce8e205b4ddbd82d5f09c0903a5f2921b331->leave($__internal_2cb771cab8c8525c1954504c40ecce8e205b4ddbd82d5f09c0903a5f2921b331_prof);

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
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
