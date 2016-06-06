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
        $__internal_d0e09efb72996f59d1affc3b29460df66558357fad95072bb75231560ab714ff = $this->env->getExtension("native_profiler");
        $__internal_d0e09efb72996f59d1affc3b29460df66558357fad95072bb75231560ab714ff->enter($__internal_d0e09efb72996f59d1affc3b29460df66558357fad95072bb75231560ab714ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d0e09efb72996f59d1affc3b29460df66558357fad95072bb75231560ab714ff->leave($__internal_d0e09efb72996f59d1affc3b29460df66558357fad95072bb75231560ab714ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94a6f70468c7bf6269ad842a52287659c5fbda83f1563c27175acdac0c10f9d5 = $this->env->getExtension("native_profiler");
        $__internal_94a6f70468c7bf6269ad842a52287659c5fbda83f1563c27175acdac0c10f9d5->enter($__internal_94a6f70468c7bf6269ad842a52287659c5fbda83f1563c27175acdac0c10f9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94a6f70468c7bf6269ad842a52287659c5fbda83f1563c27175acdac0c10f9d5->leave($__internal_94a6f70468c7bf6269ad842a52287659c5fbda83f1563c27175acdac0c10f9d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b38fca07921b6acdfb13e60e3278c2da63c59118a02fcd60ab90b2c20030444 = $this->env->getExtension("native_profiler");
        $__internal_1b38fca07921b6acdfb13e60e3278c2da63c59118a02fcd60ab90b2c20030444->enter($__internal_1b38fca07921b6acdfb13e60e3278c2da63c59118a02fcd60ab90b2c20030444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b38fca07921b6acdfb13e60e3278c2da63c59118a02fcd60ab90b2c20030444->leave($__internal_1b38fca07921b6acdfb13e60e3278c2da63c59118a02fcd60ab90b2c20030444_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e6ce5408cda38022cb4484f289e8d5ab6f5f68f9516381b0f1f0c2a69f559a6 = $this->env->getExtension("native_profiler");
        $__internal_6e6ce5408cda38022cb4484f289e8d5ab6f5f68f9516381b0f1f0c2a69f559a6->enter($__internal_6e6ce5408cda38022cb4484f289e8d5ab6f5f68f9516381b0f1f0c2a69f559a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e6ce5408cda38022cb4484f289e8d5ab6f5f68f9516381b0f1f0c2a69f559a6->leave($__internal_6e6ce5408cda38022cb4484f289e8d5ab6f5f68f9516381b0f1f0c2a69f559a6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c824c2fc55c762c4f427802eb911374e043578b0648262a3cfb45730604ab82a = $this->env->getExtension("native_profiler");
        $__internal_c824c2fc55c762c4f427802eb911374e043578b0648262a3cfb45730604ab82a->enter($__internal_c824c2fc55c762c4f427802eb911374e043578b0648262a3cfb45730604ab82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c824c2fc55c762c4f427802eb911374e043578b0648262a3cfb45730604ab82a->leave($__internal_c824c2fc55c762c4f427802eb911374e043578b0648262a3cfb45730604ab82a_prof);

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
