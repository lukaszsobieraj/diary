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
        $__internal_1ef6a1127f22c64d1d0c3c46980d653bde269d6c2cdd51de0bb5452c9c43f1fe = $this->env->getExtension("native_profiler");
        $__internal_1ef6a1127f22c64d1d0c3c46980d653bde269d6c2cdd51de0bb5452c9c43f1fe->enter($__internal_1ef6a1127f22c64d1d0c3c46980d653bde269d6c2cdd51de0bb5452c9c43f1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1ef6a1127f22c64d1d0c3c46980d653bde269d6c2cdd51de0bb5452c9c43f1fe->leave($__internal_1ef6a1127f22c64d1d0c3c46980d653bde269d6c2cdd51de0bb5452c9c43f1fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f89845a72ac3c639786a38f3ba9efb528674cefc358500123d0b7e9cd560b02a = $this->env->getExtension("native_profiler");
        $__internal_f89845a72ac3c639786a38f3ba9efb528674cefc358500123d0b7e9cd560b02a->enter($__internal_f89845a72ac3c639786a38f3ba9efb528674cefc358500123d0b7e9cd560b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f89845a72ac3c639786a38f3ba9efb528674cefc358500123d0b7e9cd560b02a->leave($__internal_f89845a72ac3c639786a38f3ba9efb528674cefc358500123d0b7e9cd560b02a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_910e42deb06a82e685783f0908f92e852622bda254dbe4712a22a2b578c5bb3e = $this->env->getExtension("native_profiler");
        $__internal_910e42deb06a82e685783f0908f92e852622bda254dbe4712a22a2b578c5bb3e->enter($__internal_910e42deb06a82e685783f0908f92e852622bda254dbe4712a22a2b578c5bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_910e42deb06a82e685783f0908f92e852622bda254dbe4712a22a2b578c5bb3e->leave($__internal_910e42deb06a82e685783f0908f92e852622bda254dbe4712a22a2b578c5bb3e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e945f5645654e3efb257e29c9572ce2fbc2bba78316b5124c4beeae46a23e5 = $this->env->getExtension("native_profiler");
        $__internal_c3e945f5645654e3efb257e29c9572ce2fbc2bba78316b5124c4beeae46a23e5->enter($__internal_c3e945f5645654e3efb257e29c9572ce2fbc2bba78316b5124c4beeae46a23e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3e945f5645654e3efb257e29c9572ce2fbc2bba78316b5124c4beeae46a23e5->leave($__internal_c3e945f5645654e3efb257e29c9572ce2fbc2bba78316b5124c4beeae46a23e5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_002a2ed840d3126686e0921585459ec955da4231c7d2b1e4688fd62bc6f1456d = $this->env->getExtension("native_profiler");
        $__internal_002a2ed840d3126686e0921585459ec955da4231c7d2b1e4688fd62bc6f1456d->enter($__internal_002a2ed840d3126686e0921585459ec955da4231c7d2b1e4688fd62bc6f1456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_002a2ed840d3126686e0921585459ec955da4231c7d2b1e4688fd62bc6f1456d->leave($__internal_002a2ed840d3126686e0921585459ec955da4231c7d2b1e4688fd62bc6f1456d_prof);

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
