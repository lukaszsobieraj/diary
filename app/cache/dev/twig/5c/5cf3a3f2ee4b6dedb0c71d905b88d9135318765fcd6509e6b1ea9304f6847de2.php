<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b15741c2864280d42f69bfd9fbb87bf8f8573bc86fbda01aa751239b0fe0d239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae1b39c307ea2d429552d77a9a5c34e6426e671df32de1ace7c73193c68043f4 = $this->env->getExtension("native_profiler");
        $__internal_ae1b39c307ea2d429552d77a9a5c34e6426e671df32de1ace7c73193c68043f4->enter($__internal_ae1b39c307ea2d429552d77a9a5c34e6426e671df32de1ace7c73193c68043f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1b39c307ea2d429552d77a9a5c34e6426e671df32de1ace7c73193c68043f4->leave($__internal_ae1b39c307ea2d429552d77a9a5c34e6426e671df32de1ace7c73193c68043f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_226c3ab8dfea78cd4e0deaca339afc209d135610077ef54289402abe87ba2255 = $this->env->getExtension("native_profiler");
        $__internal_226c3ab8dfea78cd4e0deaca339afc209d135610077ef54289402abe87ba2255->enter($__internal_226c3ab8dfea78cd4e0deaca339afc209d135610077ef54289402abe87ba2255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_226c3ab8dfea78cd4e0deaca339afc209d135610077ef54289402abe87ba2255->leave($__internal_226c3ab8dfea78cd4e0deaca339afc209d135610077ef54289402abe87ba2255_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_abfb5875c0ccca0973f83cc8de2206ccf74adf6e9b3f5926420834f3ed438ee5 = $this->env->getExtension("native_profiler");
        $__internal_abfb5875c0ccca0973f83cc8de2206ccf74adf6e9b3f5926420834f3ed438ee5->enter($__internal_abfb5875c0ccca0973f83cc8de2206ccf74adf6e9b3f5926420834f3ed438ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_abfb5875c0ccca0973f83cc8de2206ccf74adf6e9b3f5926420834f3ed438ee5->leave($__internal_abfb5875c0ccca0973f83cc8de2206ccf74adf6e9b3f5926420834f3ed438ee5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc85f5fb146fd033bf552f8d075161fb81bb1c790e7fc4d15b1ee878270c71d0 = $this->env->getExtension("native_profiler");
        $__internal_dc85f5fb146fd033bf552f8d075161fb81bb1c790e7fc4d15b1ee878270c71d0->enter($__internal_dc85f5fb146fd033bf552f8d075161fb81bb1c790e7fc4d15b1ee878270c71d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_dc85f5fb146fd033bf552f8d075161fb81bb1c790e7fc4d15b1ee878270c71d0->leave($__internal_dc85f5fb146fd033bf552f8d075161fb81bb1c790e7fc4d15b1ee878270c71d0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fb09d1f6c9277586ef2d97e2ce287c6a44a4dea86cd7761e0e665a54105013b5 = $this->env->getExtension("native_profiler");
        $__internal_fb09d1f6c9277586ef2d97e2ce287c6a44a4dea86cd7761e0e665a54105013b5->enter($__internal_fb09d1f6c9277586ef2d97e2ce287c6a44a4dea86cd7761e0e665a54105013b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fb09d1f6c9277586ef2d97e2ce287c6a44a4dea86cd7761e0e665a54105013b5->leave($__internal_fb09d1f6c9277586ef2d97e2ce287c6a44a4dea86cd7761e0e665a54105013b5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
