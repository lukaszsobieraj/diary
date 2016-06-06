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
        $__internal_e4a2263694a9f23170557d724dfa51696d4b90d970309b034217f3df5ec0914a = $this->env->getExtension("native_profiler");
        $__internal_e4a2263694a9f23170557d724dfa51696d4b90d970309b034217f3df5ec0914a->enter($__internal_e4a2263694a9f23170557d724dfa51696d4b90d970309b034217f3df5ec0914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e4a2263694a9f23170557d724dfa51696d4b90d970309b034217f3df5ec0914a->leave($__internal_e4a2263694a9f23170557d724dfa51696d4b90d970309b034217f3df5ec0914a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23437a0c669d770d425cc159bb8ba3a0bf54a5eefe7ab0829c8946b668fbf6f4 = $this->env->getExtension("native_profiler");
        $__internal_23437a0c669d770d425cc159bb8ba3a0bf54a5eefe7ab0829c8946b668fbf6f4->enter($__internal_23437a0c669d770d425cc159bb8ba3a0bf54a5eefe7ab0829c8946b668fbf6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_23437a0c669d770d425cc159bb8ba3a0bf54a5eefe7ab0829c8946b668fbf6f4->leave($__internal_23437a0c669d770d425cc159bb8ba3a0bf54a5eefe7ab0829c8946b668fbf6f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_505314fcfdfd12aa12662eb1e4ee0622d23fd3e397eec547a8ca332dc650ac80 = $this->env->getExtension("native_profiler");
        $__internal_505314fcfdfd12aa12662eb1e4ee0622d23fd3e397eec547a8ca332dc650ac80->enter($__internal_505314fcfdfd12aa12662eb1e4ee0622d23fd3e397eec547a8ca332dc650ac80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_505314fcfdfd12aa12662eb1e4ee0622d23fd3e397eec547a8ca332dc650ac80->leave($__internal_505314fcfdfd12aa12662eb1e4ee0622d23fd3e397eec547a8ca332dc650ac80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9043147bd01cb12cc086ec7817fd8a271fc29473416a32f9121ff0812f94bad = $this->env->getExtension("native_profiler");
        $__internal_f9043147bd01cb12cc086ec7817fd8a271fc29473416a32f9121ff0812f94bad->enter($__internal_f9043147bd01cb12cc086ec7817fd8a271fc29473416a32f9121ff0812f94bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9043147bd01cb12cc086ec7817fd8a271fc29473416a32f9121ff0812f94bad->leave($__internal_f9043147bd01cb12cc086ec7817fd8a271fc29473416a32f9121ff0812f94bad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8e31102282f038fa01fe6303cca1ec70e8a7a7c948faf96d73526266f705b11 = $this->env->getExtension("native_profiler");
        $__internal_f8e31102282f038fa01fe6303cca1ec70e8a7a7c948faf96d73526266f705b11->enter($__internal_f8e31102282f038fa01fe6303cca1ec70e8a7a7c948faf96d73526266f705b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f8e31102282f038fa01fe6303cca1ec70e8a7a7c948faf96d73526266f705b11->leave($__internal_f8e31102282f038fa01fe6303cca1ec70e8a7a7c948faf96d73526266f705b11_prof);

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
