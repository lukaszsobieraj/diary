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
        $__internal_701f0e1ce383c4a735f8790e8ad452011b1c7efefd541f70dbfcec9871dae2e3 = $this->env->getExtension("native_profiler");
        $__internal_701f0e1ce383c4a735f8790e8ad452011b1c7efefd541f70dbfcec9871dae2e3->enter($__internal_701f0e1ce383c4a735f8790e8ad452011b1c7efefd541f70dbfcec9871dae2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701f0e1ce383c4a735f8790e8ad452011b1c7efefd541f70dbfcec9871dae2e3->leave($__internal_701f0e1ce383c4a735f8790e8ad452011b1c7efefd541f70dbfcec9871dae2e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5022e080e2f82fe2d44e94c92d9868cffb5eaf93793f3c1f5a665eb67ed66738 = $this->env->getExtension("native_profiler");
        $__internal_5022e080e2f82fe2d44e94c92d9868cffb5eaf93793f3c1f5a665eb67ed66738->enter($__internal_5022e080e2f82fe2d44e94c92d9868cffb5eaf93793f3c1f5a665eb67ed66738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5022e080e2f82fe2d44e94c92d9868cffb5eaf93793f3c1f5a665eb67ed66738->leave($__internal_5022e080e2f82fe2d44e94c92d9868cffb5eaf93793f3c1f5a665eb67ed66738_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8fcd9bf508964806f83d383a70e2659fc5b8792ef182ca6d1b3ca5e2895fc13 = $this->env->getExtension("native_profiler");
        $__internal_b8fcd9bf508964806f83d383a70e2659fc5b8792ef182ca6d1b3ca5e2895fc13->enter($__internal_b8fcd9bf508964806f83d383a70e2659fc5b8792ef182ca6d1b3ca5e2895fc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b8fcd9bf508964806f83d383a70e2659fc5b8792ef182ca6d1b3ca5e2895fc13->leave($__internal_b8fcd9bf508964806f83d383a70e2659fc5b8792ef182ca6d1b3ca5e2895fc13_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_33855eef1d12ab6d1f0def7b303a7127ed55837be04406d6646b539a8f70ee48 = $this->env->getExtension("native_profiler");
        $__internal_33855eef1d12ab6d1f0def7b303a7127ed55837be04406d6646b539a8f70ee48->enter($__internal_33855eef1d12ab6d1f0def7b303a7127ed55837be04406d6646b539a8f70ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_33855eef1d12ab6d1f0def7b303a7127ed55837be04406d6646b539a8f70ee48->leave($__internal_33855eef1d12ab6d1f0def7b303a7127ed55837be04406d6646b539a8f70ee48_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e50c6f7fb32c6aeb0f40e3402e635bdc8202c5399102e4e02241ed871ea71c7 = $this->env->getExtension("native_profiler");
        $__internal_0e50c6f7fb32c6aeb0f40e3402e635bdc8202c5399102e4e02241ed871ea71c7->enter($__internal_0e50c6f7fb32c6aeb0f40e3402e635bdc8202c5399102e4e02241ed871ea71c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0e50c6f7fb32c6aeb0f40e3402e635bdc8202c5399102e4e02241ed871ea71c7->leave($__internal_0e50c6f7fb32c6aeb0f40e3402e635bdc8202c5399102e4e02241ed871ea71c7_prof);

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
