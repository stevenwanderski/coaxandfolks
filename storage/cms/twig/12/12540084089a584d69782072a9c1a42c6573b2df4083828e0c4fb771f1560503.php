<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/photos/default.htm */
class __TwigTemplate_eb148d3a4342b145ab59e83c34114d50938e0825cca8b9cd95e269413c7da304 extends Twig_Template
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
        echo "<div class=\"aside-block--header\">
  <div class=\"aside-block--title\">Photos</div>
</div>

<div class=\"photos\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["photos"]) ? $context["photos"] : null), "photos", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 7
            echo "    <div class=\"photo\">
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "thumb", array(0 => 1000, 1 => 500), "method"), "html", null, true);
            echo "\">
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "thumb", array(0 => 200, 1 => 200, 2 => array("mode" => "crop")), "method"), "html", null, true);
            echo "\" />
      </a>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/photos/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="aside-block--header">*/
/*   <div class="aside-block--title">Photos</div>*/
/* </div>*/
/* */
/* <div class="photos">*/
/*   {% for photo in photos.photos() %}*/
/*     <div class="photo">*/
/*       <a href="{{photo.thumb(1000, 500)}}">*/
/*         <img src="{{photo.thumb(200, 200, {'mode':'crop'})}}" />*/
/*       </a>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
