<?php

/* ::base.html.twig */
class __TwigTemplate_24869790f5847097a3d3e0ed671676bf3d1442ccf2822913ac17bf00b1465094 extends Twig_Template
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
        $__internal_f7e61dc221bda3450ed8ba4f84c0913299a087934c007da4b4f45a002ca2b6e3 = $this->env->getExtension("native_profiler");
        $__internal_f7e61dc221bda3450ed8ba4f84c0913299a087934c007da4b4f45a002ca2b6e3->enter($__internal_f7e61dc221bda3450ed8ba4f84c0913299a087934c007da4b4f45a002ca2b6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f7e61dc221bda3450ed8ba4f84c0913299a087934c007da4b4f45a002ca2b6e3->leave($__internal_f7e61dc221bda3450ed8ba4f84c0913299a087934c007da4b4f45a002ca2b6e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b25b237acddc30b68cd9eb06b3d459f1901a0410a05acd59b4b827d39a4dfd9 = $this->env->getExtension("native_profiler");
        $__internal_0b25b237acddc30b68cd9eb06b3d459f1901a0410a05acd59b4b827d39a4dfd9->enter($__internal_0b25b237acddc30b68cd9eb06b3d459f1901a0410a05acd59b4b827d39a4dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0b25b237acddc30b68cd9eb06b3d459f1901a0410a05acd59b4b827d39a4dfd9->leave($__internal_0b25b237acddc30b68cd9eb06b3d459f1901a0410a05acd59b4b827d39a4dfd9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4680ee160115bbce31026050d1806a868544429cb875732953ea4bb758424ff2 = $this->env->getExtension("native_profiler");
        $__internal_4680ee160115bbce31026050d1806a868544429cb875732953ea4bb758424ff2->enter($__internal_4680ee160115bbce31026050d1806a868544429cb875732953ea4bb758424ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4680ee160115bbce31026050d1806a868544429cb875732953ea4bb758424ff2->leave($__internal_4680ee160115bbce31026050d1806a868544429cb875732953ea4bb758424ff2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6bbd776b72d6bb7a46c5e232c3e7d837de61f211566a71c2dff0ca536ea7e6 = $this->env->getExtension("native_profiler");
        $__internal_7b6bbd776b72d6bb7a46c5e232c3e7d837de61f211566a71c2dff0ca536ea7e6->enter($__internal_7b6bbd776b72d6bb7a46c5e232c3e7d837de61f211566a71c2dff0ca536ea7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b6bbd776b72d6bb7a46c5e232c3e7d837de61f211566a71c2dff0ca536ea7e6->leave($__internal_7b6bbd776b72d6bb7a46c5e232c3e7d837de61f211566a71c2dff0ca536ea7e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_474a570d732f5223b9a0a8aebb941318b7be764d49f6fff761009b0279801a64 = $this->env->getExtension("native_profiler");
        $__internal_474a570d732f5223b9a0a8aebb941318b7be764d49f6fff761009b0279801a64->enter($__internal_474a570d732f5223b9a0a8aebb941318b7be764d49f6fff761009b0279801a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_474a570d732f5223b9a0a8aebb941318b7be764d49f6fff761009b0279801a64->leave($__internal_474a570d732f5223b9a0a8aebb941318b7be764d49f6fff761009b0279801a64_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
