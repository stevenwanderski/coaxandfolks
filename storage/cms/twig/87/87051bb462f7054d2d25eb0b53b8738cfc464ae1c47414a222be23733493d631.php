<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/social/default.htm */
class __TwigTemplate_af4a4a922e63f077041d195ecb07419132815e721b32af419b8b5f776200139f extends Twig_Template
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
  <div class=\"aside-block--title\">Social</div>
</div>

<!-- Start Facebook Plugin -->
<div class=\"share-block share-block__facebook\">
  <div id=\"fb-root\"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1681955938724666\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
</div>
<!-- End Facebook Plugin -->

<!-- Start Twitter Plugin -->
<div class=\"share-block share-block__twitter\">
  <a href=\"https://twitter.com/coaxandfolks\" class=\"twitter-follow-button\" data-show-count=\"false\" data-size=\"large\">Follow @coaxandfolks</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
<!-- End Twitter Plugin -->";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/social/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="aside-block--header">*/
/*   <div class="aside-block--title">Social</div>*/
/* </div>*/
/* */
/* <!-- Start Facebook Plugin -->*/
/* <div class="share-block share-block__facebook">*/
/*   <div id="fb-root"></div>*/
/*   <script>(function(d, s, id) {*/
/*     var js, fjs = d.getElementsByTagName(s)[0];*/
/*     if (d.getElementById(id)) return;*/
/*     js = d.createElement(s); js.id = id;*/
/*     js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1681955938724666";*/
/*     fjs.parentNode.insertBefore(js, fjs);*/
/*   }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/*   <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>*/
/* </div>*/
/* <!-- End Facebook Plugin -->*/
/* */
/* <!-- Start Twitter Plugin -->*/
/* <div class="share-block share-block__twitter">*/
/*   <a href="https://twitter.com/coaxandfolks" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @coaxandfolks</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>*/
/* </div>*/
/* <!-- End Twitter Plugin -->*/
