<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/contact.htm */
class __TwigTemplate_451a052b8f28068421c08822ab1f9a2d6708db40e9e931f52a8c488eeb8dfc8c extends Twig_Template
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
        // line 1
        echo "<h1>Contact</h1>

<div class=\"container\">
  ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <h1>Contact</h1>*/
/* */
/* <div class="container">*/
/*   {% component 'contactForm' %}*/
/* </div>*/
