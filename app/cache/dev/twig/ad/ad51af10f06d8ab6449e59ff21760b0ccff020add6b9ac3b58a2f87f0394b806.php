<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_00c9e276040b86b725d656cd0d9a9aaae3f402c19531df14d8220c29c549f57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17ba2584291c52835709626ef13501ea9bea1fbe10099c39e75b2562e7523cce = $this->env->getExtension("native_profiler");
        $__internal_17ba2584291c52835709626ef13501ea9bea1fbe10099c39e75b2562e7523cce->enter($__internal_17ba2584291c52835709626ef13501ea9bea1fbe10099c39e75b2562e7523cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17ba2584291c52835709626ef13501ea9bea1fbe10099c39e75b2562e7523cce->leave($__internal_17ba2584291c52835709626ef13501ea9bea1fbe10099c39e75b2562e7523cce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bf9c971754a24c50ce76c14d05b78eca3387a292aff9acbf44848c3d0044b6d = $this->env->getExtension("native_profiler");
        $__internal_9bf9c971754a24c50ce76c14d05b78eca3387a292aff9acbf44848c3d0044b6d->enter($__internal_9bf9c971754a24c50ce76c14d05b78eca3387a292aff9acbf44848c3d0044b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9bf9c971754a24c50ce76c14d05b78eca3387a292aff9acbf44848c3d0044b6d->leave($__internal_9bf9c971754a24c50ce76c14d05b78eca3387a292aff9acbf44848c3d0044b6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
