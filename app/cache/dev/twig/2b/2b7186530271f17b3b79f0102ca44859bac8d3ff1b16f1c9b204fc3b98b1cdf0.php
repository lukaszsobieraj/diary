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
        $__internal_d73f0020e08097204f5166664945215fbf683b89512ebd0c55414a8c09109157 = $this->env->getExtension("native_profiler");
        $__internal_d73f0020e08097204f5166664945215fbf683b89512ebd0c55414a8c09109157->enter($__internal_d73f0020e08097204f5166664945215fbf683b89512ebd0c55414a8c09109157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73f0020e08097204f5166664945215fbf683b89512ebd0c55414a8c09109157->leave($__internal_d73f0020e08097204f5166664945215fbf683b89512ebd0c55414a8c09109157_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_784bfccf3a2f95a9f722610cdd3fefdf734b148be42a0c8805d644f6c1f07c14 = $this->env->getExtension("native_profiler");
        $__internal_784bfccf3a2f95a9f722610cdd3fefdf734b148be42a0c8805d644f6c1f07c14->enter($__internal_784bfccf3a2f95a9f722610cdd3fefdf734b148be42a0c8805d644f6c1f07c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_784bfccf3a2f95a9f722610cdd3fefdf734b148be42a0c8805d644f6c1f07c14->leave($__internal_784bfccf3a2f95a9f722610cdd3fefdf734b148be42a0c8805d644f6c1f07c14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59f0e1d2e697d68e5583fdf0f30b30f102845c3d24e2dfc5c7118bc870976aa = $this->env->getExtension("native_profiler");
        $__internal_c59f0e1d2e697d68e5583fdf0f30b30f102845c3d24e2dfc5c7118bc870976aa->enter($__internal_c59f0e1d2e697d68e5583fdf0f30b30f102845c3d24e2dfc5c7118bc870976aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c59f0e1d2e697d68e5583fdf0f30b30f102845c3d24e2dfc5c7118bc870976aa->leave($__internal_c59f0e1d2e697d68e5583fdf0f30b30f102845c3d24e2dfc5c7118bc870976aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc8bd94a844527f4ba997c14e3ddbb98a8a76cfd8ef58453f489f0891afcd37 = $this->env->getExtension("native_profiler");
        $__internal_ccc8bd94a844527f4ba997c14e3ddbb98a8a76cfd8ef58453f489f0891afcd37->enter($__internal_ccc8bd94a844527f4ba997c14e3ddbb98a8a76cfd8ef58453f489f0891afcd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ccc8bd94a844527f4ba997c14e3ddbb98a8a76cfd8ef58453f489f0891afcd37->leave($__internal_ccc8bd94a844527f4ba997c14e3ddbb98a8a76cfd8ef58453f489f0891afcd37_prof);

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
