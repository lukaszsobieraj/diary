<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0b2f3d5775f6ca15acefa5d766f224ce829a5afa1cd6de261934448bc81ca215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_104db82b1ad8610dcf4027a6d9d24da70f769cf86db08bebc35101eb537c3e54 = $this->env->getExtension("native_profiler");
        $__internal_104db82b1ad8610dcf4027a6d9d24da70f769cf86db08bebc35101eb537c3e54->enter($__internal_104db82b1ad8610dcf4027a6d9d24da70f769cf86db08bebc35101eb537c3e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_104db82b1ad8610dcf4027a6d9d24da70f769cf86db08bebc35101eb537c3e54->leave($__internal_104db82b1ad8610dcf4027a6d9d24da70f769cf86db08bebc35101eb537c3e54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
