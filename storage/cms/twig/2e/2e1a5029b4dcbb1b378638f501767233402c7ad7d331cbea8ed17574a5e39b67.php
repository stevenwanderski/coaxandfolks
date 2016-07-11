<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/band.htm */
class __TwigTemplate_ecfe4da615089674dcf0d21599c40283a23706725c9edf3c6efbf08cf0b478cb extends Twig_Template
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
        echo "<div class=\"container\">
  <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["bandDetails"]) ? $context["bandDetails"] : null), "record", array()), "name", array()), "html", null, true);
        echo "</h1>
</div>

<div class=\"container container__flex\">
  <main>
    <div class=\"main-block\">
      <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bandDetails"]) ? $context["bandDetails"] : null), "record", array()), "bodyPhoto", array()), "thumb", array(0 => 620, 1 => 500), "method"), "html", null, true);
        echo "\" class=\"main--image\" />
    </div>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["bandDetails"]) ? $context["bandDetails"] : null), "record", array()), "video", array())) {
            // line 12
            echo "    <div class=\"main-block\">
      <div class=\"video-container\">
        ";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["bandDetails"]) ? $context["bandDetails"] : null), "record", array()), "video", array());
            echo "
      </div>
    </div>
    ";
        }
        // line 18
        echo "
    <div class=\"main-block\">
      ";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["bandDetails"]) ? $context["bandDetails"] : null), "record", array()), "body", array());
        echo "
    </div>
  </main>

  <aside>
    <div class=\"aside-block\">
      ";
        // line 26
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("showList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        echo "    </div>

    <div class=\"aside-block\">
      ";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("photos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "    </div>
  </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/band.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  72 => 30,  67 => 27,  63 => 26,  54 => 20,  50 => 18,  43 => 14,  39 => 12,  37 => 11,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <div class="container">*/
/*   <h1>{{ bandDetails.record.name }}</h1>*/
/* </div>*/
/* */
/* <div class="container container__flex">*/
/*   <main>*/
/*     <div class="main-block">*/
/*       <img src="{{ bandDetails.record.bodyPhoto.thumb(620, 500) }}" class="main--image" />*/
/*     </div>*/
/* */
/*     {% if bandDetails.record.video %}*/
/*     <div class="main-block">*/
/*       <div class="video-container">*/
/*         {{ bandDetails.record.video | raw }}*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="main-block">*/
/*       {{ bandDetails.record.body | raw }}*/
/*     </div>*/
/*   </main>*/
/* */
/*   <aside>*/
/*     <div class="aside-block">*/
/*       {% component 'showList' %}*/
/*     </div>*/
/* */
/*     <div class="aside-block">*/
/*       {% component 'photos' %}*/
/*     </div>*/
/*   </aside>*/
/* </div>*/
