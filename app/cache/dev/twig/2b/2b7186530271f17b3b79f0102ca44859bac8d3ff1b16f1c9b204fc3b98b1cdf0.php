<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5646de640073b9a1f8a0db77a92752d028447ef5d2d0bb494acd08684656c2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c23eda234af764bf914294be9ebf2e06f6fbcea21c111922ad80398a35beaf = $this->env->getExtension("native_profiler");
        $__internal_55c23eda234af764bf914294be9ebf2e06f6fbcea21c111922ad80398a35beaf->enter($__internal_55c23eda234af764bf914294be9ebf2e06f6fbcea21c111922ad80398a35beaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55c23eda234af764bf914294be9ebf2e06f6fbcea21c111922ad80398a35beaf->leave($__internal_55c23eda234af764bf914294be9ebf2e06f6fbcea21c111922ad80398a35beaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66ccd11a229aec2e58fed7a39e2a2ffc9b38f4d02126171fc7ef8edf78ede534 = $this->env->getExtension("native_profiler");
        $__internal_66ccd11a229aec2e58fed7a39e2a2ffc9b38f4d02126171fc7ef8edf78ede534->enter($__internal_66ccd11a229aec2e58fed7a39e2a2ffc9b38f4d02126171fc7ef8edf78ede534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66ccd11a229aec2e58fed7a39e2a2ffc9b38f4d02126171fc7ef8edf78ede534->leave($__internal_66ccd11a229aec2e58fed7a39e2a2ffc9b38f4d02126171fc7ef8edf78ede534_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a2236be405194beb932ff243b3bfb224ea50e555abb8d4eeecdf354f50b01c = $this->env->getExtension("native_profiler");
        $__internal_b5a2236be405194beb932ff243b3bfb224ea50e555abb8d4eeecdf354f50b01c->enter($__internal_b5a2236be405194beb932ff243b3bfb224ea50e555abb8d4eeecdf354f50b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5a2236be405194beb932ff243b3bfb224ea50e555abb8d4eeecdf354f50b01c->leave($__internal_b5a2236be405194beb932ff243b3bfb224ea50e555abb8d4eeecdf354f50b01c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9628822d5b1796841b4d14ac5c8c1bc6016b3078edb615539c52be62f4af2a6 = $this->env->getExtension("native_profiler");
        $__internal_b9628822d5b1796841b4d14ac5c8c1bc6016b3078edb615539c52be62f4af2a6->enter($__internal_b9628822d5b1796841b4d14ac5c8c1bc6016b3078edb615539c52be62f4af2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b9628822d5b1796841b4d14ac5c8c1bc6016b3078edb615539c52be62f4af2a6->leave($__internal_b9628822d5b1796841b4d14ac5c8c1bc6016b3078edb615539c52be62f4af2a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
