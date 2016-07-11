<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/layouts/main.htm */
class __TwigTemplate_cfdae1127cff71cf5b08826f6d149720787fd90d7049147342368f8360f574b7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Coax &amp; Folks</title>
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:300,400,600,700,700italic,400,400italic\">
  <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.css\">
  <link rel=\"stylesheet\" href=\"/themes/coax/assets/css/app.css\">

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  ";
        // line 14
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 15
        echo "  <script src=\"/themes/coax/assets/js/moment.min.js\"></script>
  <script src=\"//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.js\"></script>
  <script src=\"/themes/coax/assets/js/jquery.jplayer.min.js\"></script>
  <script src=\"/themes/coax/assets/js/magnific.popup.min.js\"></script>
  <script src=\"/themes/coax/assets/js/app.js\"></script>
  ";
        // line 20
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 21
        echo "</head>
<body>
  <header class=\"header header__full\">
    <div class=\"container container__flex container__align-items\">
      <div class=\"header--logo header--logo__full\">
        <a href=\"/\">
          <img src=\"/themes/coax/assets/svg/logo_white.svg\" />
        </a>
      </div>

      <div class=\"header--contact\">
        <a href=\"/contact\" class=\"header--button\">Contact</a>
      </div>
    </div>
  </header>

  <header class=\"header header__small container\">
    <div class=\"header--logo header--logo__small\">
      Coax<em>&amp;</em>Folks
    </div>

    <div class=\"header--control\"></div>
  </header>

  <nav>
    <div class=\"container\">
      <a href=\"/contact\" class=\"nav--contact\">Contact</a>
      ";
        // line 48
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("bandList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 49
        echo "    </div>
  </nav>

  <div class=\"page\">
    ";
        // line 53
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 54
        echo "  </div>

  <footer class=\"footer\">
    <div class=\"container\">
      ";
        // line 58
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("bandList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 59
        echo "    </div>
  </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/themes/coax/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 59,  98 => 58,  92 => 54,  90 => 53,  84 => 49,  80 => 48,  51 => 21,  48 => 20,  41 => 15,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>Coax &amp; Folks</title>*/
/*   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:300,400,600,700,700italic,400,400italic">*/
/*   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.css">*/
/*   <link rel="stylesheet" href="/themes/coax/assets/css/app.css">*/
/* */
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>*/
/*   <script src='https://www.google.com/recaptcha/api.js'></script>*/
/*   {% framework extras %}*/
/*   <script src="/themes/coax/assets/js/moment.min.js"></script>*/
/*   <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.js"></script>*/
/*   <script src="/themes/coax/assets/js/jquery.jplayer.min.js"></script>*/
/*   <script src="/themes/coax/assets/js/magnific.popup.min.js"></script>*/
/*   <script src="/themes/coax/assets/js/app.js"></script>*/
/*   {% scripts %}*/
/* </head>*/
/* <body>*/
/*   <header class="header header__full">*/
/*     <div class="container container__flex container__align-items">*/
/*       <div class="header--logo header--logo__full">*/
/*         <a href="/">*/
/*           <img src="/themes/coax/assets/svg/logo_white.svg" />*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="header--contact">*/
/*         <a href="/contact" class="header--button">Contact</a>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/* */
/*   <header class="header header__small container">*/
/*     <div class="header--logo header--logo__small">*/
/*       Coax<em>&amp;</em>Folks*/
/*     </div>*/
/* */
/*     <div class="header--control"></div>*/
/*   </header>*/
/* */
/*   <nav>*/
/*     <div class="container">*/
/*       <a href="/contact" class="nav--contact">Contact</a>*/
/*       {% component 'bandList' %}*/
/*     </div>*/
/*   </nav>*/
/* */
/*   <div class="page">*/
/*     {% page %}*/
/*   </div>*/
/* */
/*   <footer class="footer">*/
/*     <div class="container">*/
/*       {% component 'bandList' %}*/
/*     </div>*/
/*   </footer>*/
/* </body>*/
/* </html>*/
