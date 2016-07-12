<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/trackplayer/default.htm */
class __TwigTemplate_f04921ab8518c1cf6e71df0b6c6d838d7aa1f1874adb8001166dfcda9a1cd5c7 extends Twig_Template
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
  <div class=\"aside-block--title\">Music</div>
</div>

<div id=\"jquery_jplayer_1\" class=\"jp-jplayer\" data-track=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["track"]) ? $context["track"] : null), "html", null, true);
        echo "\"></div>
<div id=\"jp_container_1\" class=\"jp-audio clearfix\">
  <div class=\"jp-type-single\">
    <div class=\"jp-gui jp-interface\">

      <div class=\"jp-section\">
        <ul class=\"jp-controls\">
          <li>
            <a href=\"javascript:;\" class=\"jp-play\" tabindex=\"1\">
              <img src=\"/themes/coax/assets/svg/play.svg\" />
            </a>
          </li>
          <li>
            <a href=\"javascript:;\" class=\"jp-pause\" tabindex=\"1\">
              <img src=\"/themes/coax/assets/svg/pause.svg\" />
            </a>
          </li>
        </ul>
      </div>

      <div class=\"jp-section jp-section__progress\">
        <div class=\"jp-progress\">
          <div class=\"jp-seek-bar\">
            <div class=\"jp-play-bar\"></div>
          </div>
        </div>

        <div class=\"jp-time-holder\">
          <div class=\"jp-current-time\"></div>
          <div class=\"jp-duration\"></div>
        </div>
      </div>

    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/trackplayer/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <div class="aside-block--header">*/
/*   <div class="aside-block--title">Music</div>*/
/* </div>*/
/* */
/* <div id="jquery_jplayer_1" class="jp-jplayer" data-track="{{ track }}"></div>*/
/* <div id="jp_container_1" class="jp-audio clearfix">*/
/*   <div class="jp-type-single">*/
/*     <div class="jp-gui jp-interface">*/
/* */
/*       <div class="jp-section">*/
/*         <ul class="jp-controls">*/
/*           <li>*/
/*             <a href="javascript:;" class="jp-play" tabindex="1">*/
/*               <img src="/themes/coax/assets/svg/play.svg" />*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="javascript:;" class="jp-pause" tabindex="1">*/
/*               <img src="/themes/coax/assets/svg/pause.svg" />*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/* */
/*       <div class="jp-section jp-section__progress">*/
/*         <div class="jp-progress">*/
/*           <div class="jp-seek-bar">*/
/*             <div class="jp-play-bar"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="jp-time-holder">*/
/*           <div class="jp-current-time"></div>*/
/*           <div class="jp-duration"></div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
