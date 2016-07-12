<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/home.htm */
class __TwigTemplate_32e00edb0ad603172663e847248b9caf913223b0098a8d673433d0b817cceb03 extends Twig_Template
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
  <h1><em>Chicago</em> Event Musicians</h1>
</div>

<div class=\"container container__flex\">

  <main>
    <div class=\"main-block\">
      <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), "record", array()), "photo", array()), "thumb", array(0 => 620, 1 => 500), "method"), "html", null, true);
        echo "\" class=\"main--image\" />
    </div>

    ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), "record", array()), "video", array())) {
            // line 13
            echo "    <div class=\"main-block\">
      <div class=\"video-container\">
        ";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), "record", array()), "video", array());
            echo "
      </div>
    </div>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), "record", array()), "body", array());
        echo "
  </main>

  <aside>
    <div class=\"aside-block\">
      ";
        // line 25
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['track'] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), "record", array()), "track", array()), "path", array())        ;
        echo $this->env->getExtension('CMS')->componentFunction("trackPlayer"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "    </div>

    <div class=\"aside-block\">
      ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("showList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "    </div>

    <div class=\"aside-block\">
      ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("social"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "    </div>
  </aside>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  78 => 33,  73 => 30,  69 => 29,  64 => 26,  59 => 25,  51 => 20,  48 => 19,  41 => 15,  37 => 13,  35 => 12,  29 => 9,  19 => 1,);
    }
}
/* <div class="container">*/
/*   <h1><em>Chicago</em> Event Musicians</h1>*/
/* </div>*/
/* */
/* <div class="container container__flex">*/
/* */
/*   <main>*/
/*     <div class="main-block">*/
/*       <img src="{{ homePage.record.photo.thumb(620, 500) }}" class="main--image" />*/
/*     </div>*/
/* */
/*     {% if homePage.record.video %}*/
/*     <div class="main-block">*/
/*       <div class="video-container">*/
/*         {{ homePage.record.video | raw }}*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {{ homePage.record.body | raw }}*/
/*   </main>*/
/* */
/*   <aside>*/
/*     <div class="aside-block">*/
/*       {% component 'trackPlayer' track=homePage.record.track.path %}*/
/*     </div>*/
/* */
/*     <div class="aside-block">*/
/*       {% component 'showList' %}*/
/*     </div>*/
/* */
/*     <div class="aside-block">*/
/*       {% component 'social' %}*/
/*     </div>*/
/*   </aside>*/
/* */
/* </div>*/
