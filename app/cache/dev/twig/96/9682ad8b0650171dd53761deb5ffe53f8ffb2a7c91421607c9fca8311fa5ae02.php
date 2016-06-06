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
        $__internal_7e5dc73882386dfbd76ca524925165f14da91df1985b182b9c191f595dcb3588 = $this->env->getExtension("native_profiler");
        $__internal_7e5dc73882386dfbd76ca524925165f14da91df1985b182b9c191f595dcb3588->enter($__internal_7e5dc73882386dfbd76ca524925165f14da91df1985b182b9c191f595dcb3588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7e5dc73882386dfbd76ca524925165f14da91df1985b182b9c191f595dcb3588->leave($__internal_7e5dc73882386dfbd76ca524925165f14da91df1985b182b9c191f595dcb3588_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f378f8d52d59d308005b5adfd5c70acf1bc220cfbb56a7c1536b1cb96d1eee3 = $this->env->getExtension("native_profiler");
        $__internal_4f378f8d52d59d308005b5adfd5c70acf1bc220cfbb56a7c1536b1cb96d1eee3->enter($__internal_4f378f8d52d59d308005b5adfd5c70acf1bc220cfbb56a7c1536b1cb96d1eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f378f8d52d59d308005b5adfd5c70acf1bc220cfbb56a7c1536b1cb96d1eee3->leave($__internal_4f378f8d52d59d308005b5adfd5c70acf1bc220cfbb56a7c1536b1cb96d1eee3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e0a48f991ae816f191ae193d2109b930cd74a8600eb09bdc823aae73748a118 = $this->env->getExtension("native_profiler");
        $__internal_9e0a48f991ae816f191ae193d2109b930cd74a8600eb09bdc823aae73748a118->enter($__internal_9e0a48f991ae816f191ae193d2109b930cd74a8600eb09bdc823aae73748a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e0a48f991ae816f191ae193d2109b930cd74a8600eb09bdc823aae73748a118->leave($__internal_9e0a48f991ae816f191ae193d2109b930cd74a8600eb09bdc823aae73748a118_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2b9d40de58a5f77b25e9c0c0af57c201c85271f04d42ebb78ee6bd97c9fc08 = $this->env->getExtension("native_profiler");
        $__internal_bd2b9d40de58a5f77b25e9c0c0af57c201c85271f04d42ebb78ee6bd97c9fc08->enter($__internal_bd2b9d40de58a5f77b25e9c0c0af57c201c85271f04d42ebb78ee6bd97c9fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd2b9d40de58a5f77b25e9c0c0af57c201c85271f04d42ebb78ee6bd97c9fc08->leave($__internal_bd2b9d40de58a5f77b25e9c0c0af57c201c85271f04d42ebb78ee6bd97c9fc08_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecd9a3056fb434ae6741c002886ed5252d4b5b124541bbaccad40868cc8223f1 = $this->env->getExtension("native_profiler");
        $__internal_ecd9a3056fb434ae6741c002886ed5252d4b5b124541bbaccad40868cc8223f1->enter($__internal_ecd9a3056fb434ae6741c002886ed5252d4b5b124541bbaccad40868cc8223f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecd9a3056fb434ae6741c002886ed5252d4b5b124541bbaccad40868cc8223f1->leave($__internal_ecd9a3056fb434ae6741c002886ed5252d4b5b124541bbaccad40868cc8223f1_prof);

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
