<?php

/* base.html.twig */
class __TwigTemplate_4add346bf4ce924c79f736c238576bef592d4667b68f7faab361f73a3b891c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9cc6e8a2172b10418bbd7b983a2f66b42adf501eac8bfe22155434176f803e9 = $this->env->getExtension("native_profiler");
        $__internal_d9cc6e8a2172b10418bbd7b983a2f66b42adf501eac8bfe22155434176f803e9->enter($__internal_d9cc6e8a2172b10418bbd7b983a2f66b42adf501eac8bfe22155434176f803e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d9cc6e8a2172b10418bbd7b983a2f66b42adf501eac8bfe22155434176f803e9->leave($__internal_d9cc6e8a2172b10418bbd7b983a2f66b42adf501eac8bfe22155434176f803e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae8b0d613f0363a237d2808d8f9871d91725a51886de1cb12af160c767821db = $this->env->getExtension("native_profiler");
        $__internal_fae8b0d613f0363a237d2808d8f9871d91725a51886de1cb12af160c767821db->enter($__internal_fae8b0d613f0363a237d2808d8f9871d91725a51886de1cb12af160c767821db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fae8b0d613f0363a237d2808d8f9871d91725a51886de1cb12af160c767821db->leave($__internal_fae8b0d613f0363a237d2808d8f9871d91725a51886de1cb12af160c767821db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4877a5dd9395cbc7287a8699afc4d0aab0e5b2e108d3a093e8cc44cc94232ed4 = $this->env->getExtension("native_profiler");
        $__internal_4877a5dd9395cbc7287a8699afc4d0aab0e5b2e108d3a093e8cc44cc94232ed4->enter($__internal_4877a5dd9395cbc7287a8699afc4d0aab0e5b2e108d3a093e8cc44cc94232ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4877a5dd9395cbc7287a8699afc4d0aab0e5b2e108d3a093e8cc44cc94232ed4->leave($__internal_4877a5dd9395cbc7287a8699afc4d0aab0e5b2e108d3a093e8cc44cc94232ed4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a361e6bb4044b802a7ad776d2813e5fc98d42ddf69e9c1db5bbba0fece0bc7a = $this->env->getExtension("native_profiler");
        $__internal_2a361e6bb4044b802a7ad776d2813e5fc98d42ddf69e9c1db5bbba0fece0bc7a->enter($__internal_2a361e6bb4044b802a7ad776d2813e5fc98d42ddf69e9c1db5bbba0fece0bc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a361e6bb4044b802a7ad776d2813e5fc98d42ddf69e9c1db5bbba0fece0bc7a->leave($__internal_2a361e6bb4044b802a7ad776d2813e5fc98d42ddf69e9c1db5bbba0fece0bc7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c26b21fa12ac5252fccc6e34a4b62c428676f00486bb829102bd2bd11d886f60 = $this->env->getExtension("native_profiler");
        $__internal_c26b21fa12ac5252fccc6e34a4b62c428676f00486bb829102bd2bd11d886f60->enter($__internal_c26b21fa12ac5252fccc6e34a4b62c428676f00486bb829102bd2bd11d886f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c26b21fa12ac5252fccc6e34a4b62c428676f00486bb829102bd2bd11d886f60->leave($__internal_c26b21fa12ac5252fccc6e34a4b62c428676f00486bb829102bd2bd11d886f60_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
