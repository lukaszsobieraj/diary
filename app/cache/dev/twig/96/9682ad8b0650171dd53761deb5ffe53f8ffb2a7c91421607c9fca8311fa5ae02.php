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
        $__internal_a6a7f35df579b515d01d9658c9bf005286e701e8123809f611940b8021e71811 = $this->env->getExtension("native_profiler");
        $__internal_a6a7f35df579b515d01d9658c9bf005286e701e8123809f611940b8021e71811->enter($__internal_a6a7f35df579b515d01d9658c9bf005286e701e8123809f611940b8021e71811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a6a7f35df579b515d01d9658c9bf005286e701e8123809f611940b8021e71811->leave($__internal_a6a7f35df579b515d01d9658c9bf005286e701e8123809f611940b8021e71811_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_301d472311290d863c0b49e7f76de69adba4503465ed43e1c121f0ca206442aa = $this->env->getExtension("native_profiler");
        $__internal_301d472311290d863c0b49e7f76de69adba4503465ed43e1c121f0ca206442aa->enter($__internal_301d472311290d863c0b49e7f76de69adba4503465ed43e1c121f0ca206442aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_301d472311290d863c0b49e7f76de69adba4503465ed43e1c121f0ca206442aa->leave($__internal_301d472311290d863c0b49e7f76de69adba4503465ed43e1c121f0ca206442aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bab63305a9d34be33664a621c986f91ce7679ec4736b9c904d23b4dfd15516ac = $this->env->getExtension("native_profiler");
        $__internal_bab63305a9d34be33664a621c986f91ce7679ec4736b9c904d23b4dfd15516ac->enter($__internal_bab63305a9d34be33664a621c986f91ce7679ec4736b9c904d23b4dfd15516ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bab63305a9d34be33664a621c986f91ce7679ec4736b9c904d23b4dfd15516ac->leave($__internal_bab63305a9d34be33664a621c986f91ce7679ec4736b9c904d23b4dfd15516ac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2c0e4d6498e14ec1993877b6c5da8c8bdcc3440eacafd9d0f8d6f2709ebb09 = $this->env->getExtension("native_profiler");
        $__internal_4c2c0e4d6498e14ec1993877b6c5da8c8bdcc3440eacafd9d0f8d6f2709ebb09->enter($__internal_4c2c0e4d6498e14ec1993877b6c5da8c8bdcc3440eacafd9d0f8d6f2709ebb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c2c0e4d6498e14ec1993877b6c5da8c8bdcc3440eacafd9d0f8d6f2709ebb09->leave($__internal_4c2c0e4d6498e14ec1993877b6c5da8c8bdcc3440eacafd9d0f8d6f2709ebb09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41a59b23c34b393afee9fefd20ed889b893de38b340bad10680fd586ea4289bc = $this->env->getExtension("native_profiler");
        $__internal_41a59b23c34b393afee9fefd20ed889b893de38b340bad10680fd586ea4289bc->enter($__internal_41a59b23c34b393afee9fefd20ed889b893de38b340bad10680fd586ea4289bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_41a59b23c34b393afee9fefd20ed889b893de38b340bad10680fd586ea4289bc->leave($__internal_41a59b23c34b393afee9fefd20ed889b893de38b340bad10680fd586ea4289bc_prof);

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
