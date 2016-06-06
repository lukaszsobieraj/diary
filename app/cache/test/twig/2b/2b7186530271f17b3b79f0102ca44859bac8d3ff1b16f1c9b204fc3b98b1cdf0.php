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
        $__internal_889d0910ad259cf7d9c464e96861e1f8cbaf952740c3e2c665c3e378ab4cff3b = $this->env->getExtension("native_profiler");
        $__internal_889d0910ad259cf7d9c464e96861e1f8cbaf952740c3e2c665c3e378ab4cff3b->enter($__internal_889d0910ad259cf7d9c464e96861e1f8cbaf952740c3e2c665c3e378ab4cff3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889d0910ad259cf7d9c464e96861e1f8cbaf952740c3e2c665c3e378ab4cff3b->leave($__internal_889d0910ad259cf7d9c464e96861e1f8cbaf952740c3e2c665c3e378ab4cff3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75635dd1952df9641f8e07d25a636cc10c556bdfd44d197cefc822f51a7a40f6 = $this->env->getExtension("native_profiler");
        $__internal_75635dd1952df9641f8e07d25a636cc10c556bdfd44d197cefc822f51a7a40f6->enter($__internal_75635dd1952df9641f8e07d25a636cc10c556bdfd44d197cefc822f51a7a40f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75635dd1952df9641f8e07d25a636cc10c556bdfd44d197cefc822f51a7a40f6->leave($__internal_75635dd1952df9641f8e07d25a636cc10c556bdfd44d197cefc822f51a7a40f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b8484b456e219590c000c90e402c06a76aea921ffb9213badcb1d423639f0c6 = $this->env->getExtension("native_profiler");
        $__internal_7b8484b456e219590c000c90e402c06a76aea921ffb9213badcb1d423639f0c6->enter($__internal_7b8484b456e219590c000c90e402c06a76aea921ffb9213badcb1d423639f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b8484b456e219590c000c90e402c06a76aea921ffb9213badcb1d423639f0c6->leave($__internal_7b8484b456e219590c000c90e402c06a76aea921ffb9213badcb1d423639f0c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f19e612666535f64bc0ac4e05ccc77acecb24e41c1bd8490da4c320fdb9ccfc = $this->env->getExtension("native_profiler");
        $__internal_5f19e612666535f64bc0ac4e05ccc77acecb24e41c1bd8490da4c320fdb9ccfc->enter($__internal_5f19e612666535f64bc0ac4e05ccc77acecb24e41c1bd8490da4c320fdb9ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5f19e612666535f64bc0ac4e05ccc77acecb24e41c1bd8490da4c320fdb9ccfc->leave($__internal_5f19e612666535f64bc0ac4e05ccc77acecb24e41c1bd8490da4c320fdb9ccfc_prof);

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
