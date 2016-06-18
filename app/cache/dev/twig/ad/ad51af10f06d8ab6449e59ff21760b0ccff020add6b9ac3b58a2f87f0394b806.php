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
        $__internal_6dd82f599a86bbbefb2a41139b2525aa2b62affdb510fc8de322f861b81df350 = $this->env->getExtension("native_profiler");
        $__internal_6dd82f599a86bbbefb2a41139b2525aa2b62affdb510fc8de322f861b81df350->enter($__internal_6dd82f599a86bbbefb2a41139b2525aa2b62affdb510fc8de322f861b81df350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6dd82f599a86bbbefb2a41139b2525aa2b62affdb510fc8de322f861b81df350->leave($__internal_6dd82f599a86bbbefb2a41139b2525aa2b62affdb510fc8de322f861b81df350_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b161d24f9a5a75a2112582e6f59968f35b6129aa5058fc8829800e35de5805b = $this->env->getExtension("native_profiler");
        $__internal_6b161d24f9a5a75a2112582e6f59968f35b6129aa5058fc8829800e35de5805b->enter($__internal_6b161d24f9a5a75a2112582e6f59968f35b6129aa5058fc8829800e35de5805b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b161d24f9a5a75a2112582e6f59968f35b6129aa5058fc8829800e35de5805b->leave($__internal_6b161d24f9a5a75a2112582e6f59968f35b6129aa5058fc8829800e35de5805b_prof);

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
