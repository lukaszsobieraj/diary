<?php

/* DiaryBundle:Mail:mail.html.twig */
class __TwigTemplate_abcf8357b2036f32858e7c270ad47ba305e281ad7278fdfe64480711f5865192 extends Twig_Template
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
        $__internal_0d9a80e7de8344fb5dec3441c16cca3793be9808e6a757f69ecc687edf0b1316 = $this->env->getExtension("native_profiler");
        $__internal_0d9a80e7de8344fb5dec3441c16cca3793be9808e6a757f69ecc687edf0b1316->enter($__internal_0d9a80e7de8344fb5dec3441c16cca3793be9808e6a757f69ecc687edf0b1316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiaryBundle:Mail:mail.html.twig"));

        // line 1
        echo "<html>
    <head></head>
    <body>
        <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("diary_send");
        echo "\" method=\"POST\">
            <h2>Email message create: </h2>
            <div>
                <h2>Subject: </h2>
                <input type=\"text\" name=\"subject\"/>
            </div>
            <div>
                <h2>Email: </h2>
                <input type=\"email\" name=\"email\"/>
            </div>
            <div>
                <h2>Message: </h2>
                <textarea name=\"message\"></textarea>
            </div>
            <div>
                <input type=\"submit\" value=\"Send\" />
            </div>
        </form>
    </body>
</html>";
        
        $__internal_0d9a80e7de8344fb5dec3441c16cca3793be9808e6a757f69ecc687edf0b1316->leave($__internal_0d9a80e7de8344fb5dec3441c16cca3793be9808e6a757f69ecc687edf0b1316_prof);

    }

    public function getTemplateName()
    {
        return "DiaryBundle:Mail:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <html>*/
/*     <head></head>*/
/*     <body>*/
/*         <form action="{{ path('diary_send') }}" method="POST">*/
/*             <h2>Email message create: </h2>*/
/*             <div>*/
/*                 <h2>Subject: </h2>*/
/*                 <input type="text" name="subject"/>*/
/*             </div>*/
/*             <div>*/
/*                 <h2>Email: </h2>*/
/*                 <input type="email" name="email"/>*/
/*             </div>*/
/*             <div>*/
/*                 <h2>Message: </h2>*/
/*                 <textarea name="message"></textarea>*/
/*             </div>*/
/*             <div>*/
/*                 <input type="submit" value="Send" />*/
/*             </div>*/
/*         </form>*/
/*     </body>*/
/* </html>*/
