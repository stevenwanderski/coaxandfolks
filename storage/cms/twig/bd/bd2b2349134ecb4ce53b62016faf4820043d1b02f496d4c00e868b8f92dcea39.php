<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/showlist/default.htm */
class __TwigTemplate_c9571c0618c91b17b935ddad6dec447ff48c0c6e4a6583a8e49d0dd5450495e6 extends Twig_Template
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
  <div class=\"aside-block--title\">Shows</div>
  <a href=\"/calendar\" class=\"aside-block--link\">View Calendar</a>
</div>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "shows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["show"]) {
            // line 7
            echo "  <div class=\"show\">
    <div class=\"show--date-time\">
      <div class=\"show--date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["show"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</div>
      <div class=\"show--time\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["show"], "time", array()), "html", null, true);
            echo "</div>
    </div>

    <div class=\"show--info\">
      <div class=\"show--venue\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["show"], "venue", array()), "name", array()), "html", null, true);
            echo "</div>
      <div class=\"show--band\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["show"], "band", array()), "name", array()), "html", null, true);
            echo "</div>
      <div class=\"show--band-type\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["show"], "type", array()), "html", null, true);
            echo "</div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['show'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/showlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  45 => 14,  38 => 10,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="aside-block--header">*/
/*   <div class="aside-block--title">Shows</div>*/
/*   <a href="/calendar" class="aside-block--link">View Calendar</a>*/
/* </div>*/
/* */
/* {% for show in __SELF__.shows %}*/
/*   <div class="show">*/
/*     <div class="show--date-time">*/
/*       <div class="show--date">{{show.date | date('m/d/Y')}}</div>*/
/*       <div class="show--time">{{show.time}}</div>*/
/*     </div>*/
/* */
/*     <div class="show--info">*/
/*       <div class="show--venue">{{show.venue.name}}</div>*/
/*       <div class="show--band">{{show.band.name}}</div>*/
/*       <div class="show--band-type">{{show.type}}</div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
