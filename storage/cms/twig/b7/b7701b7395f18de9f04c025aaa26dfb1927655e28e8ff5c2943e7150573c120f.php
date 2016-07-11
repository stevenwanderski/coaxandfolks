<?php

/* /Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/contactform/default.htm */
class __TwigTemplate_e65be2f9af61656331261792f4430c396331fc62222f29397f3146b0540a6d6a extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "showMessage", array())) {
            // line 2
            echo "<div class=\"messages\">
  Thanks for reaching out! We'll be in touch soon.
</div>
";
        }
        // line 6
        echo "
<form class=\"contact-form\">
  <div class=\"form-field\">
    <label for=\"name\" class=\"form-field--label\">Name</label>
    <input type=\"text\" name=\"name\" class=\"form-field--input\" />
  </div>

  <div class=\"form-field\">
    <label for=\"email\" class=\"form-field--label\">Email</label>
    <input type=\"text\" name=\"email\" class=\"form-field--input\" />
  </div>

  <div class=\"form-field\">
    <label for=\"message\" class=\"form-field--label\">Message</label>
    <textarea name=\"message\" class=\"form-field--input form-field--input__textarea\"></textarea>
  </div>

  <div class=\"form-field\">
    <label class=\"form-field--label\"></label>
    <div class=\"g-recaptcha\" data-sitekey=\"6LeCriQTAAAAAOSTKSjR3YcArDat_RJ7PRULthj5\"></div>
  </div>

  <div class=\"form-field form-field__controls\">
    <button class=\"form-field--button\">Submit</button>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/stevenwanderski/Desktop/dev/clients/coaxandfolks/plugins/stevenwanderski/coax/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if __SELF__.showMessage %}*/
/* <div class="messages">*/
/*   Thanks for reaching out! We'll be in touch soon.*/
/* </div>*/
/* {% endif %}*/
/* */
/* <form class="contact-form">*/
/*   <div class="form-field">*/
/*     <label for="name" class="form-field--label">Name</label>*/
/*     <input type="text" name="name" class="form-field--input" />*/
/*   </div>*/
/* */
/*   <div class="form-field">*/
/*     <label for="email" class="form-field--label">Email</label>*/
/*     <input type="text" name="email" class="form-field--input" />*/
/*   </div>*/
/* */
/*   <div class="form-field">*/
/*     <label for="message" class="form-field--label">Message</label>*/
/*     <textarea name="message" class="form-field--input form-field--input__textarea"></textarea>*/
/*   </div>*/
/* */
/*   <div class="form-field">*/
/*     <label class="form-field--label"></label>*/
/*     <div class="g-recaptcha" data-sitekey="6LeCriQTAAAAAOSTKSjR3YcArDat_RJ7PRULthj5"></div>*/
/*   </div>*/
/* */
/*   <div class="form-field form-field__controls">*/
/*     <button class="form-field--button">Submit</button>*/
/*   </div>*/
/* </form>*/
