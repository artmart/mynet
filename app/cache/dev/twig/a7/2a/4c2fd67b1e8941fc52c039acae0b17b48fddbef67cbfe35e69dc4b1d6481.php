<?php

/* MYMainBundle:Contact:index.html.twig */
class __TwigTemplate_a72a4c2fd67b1e8941fc52c039acae0b17b48fddbef67cbfe35e69dc4b1d6481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'rightmenu' => array($this, 'block_rightmenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MYMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb5de_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de_0") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion_list_1.css");
            // line 10
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
            // asset "76eb5de_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de_1") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion_suggestion_2.css");
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "76eb5de"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion.css");
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "<br />
<h2 class=\"for_centering\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.text"), "html", null, true);
        echo "</h2>
<br />
<div id=\"sug-form-holder\">
    ";
        // line 23
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")));
        echo "
        <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("contact_form");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
        <label for=\"contactform_subject\" class=\"required\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.subject"), "html", null, true);
        echo "</label> 
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "subject"), 'widget');
        echo "
         <label for=\"contactform_email\" class=\"required\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.email"), "html", null, true);
        echo "</label> 
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email"), 'widget');
        echo "
         <label for=\"contactform_message\" class=\"required\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.message"), "html", null, true);
        echo "</label>        
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "message"), 'widget');
        echo "

                <br />
             ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "recaptcha"), 'widget');
        echo "

        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "
                <br />
<input class=\"button-glossy medium-grey\" type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.send"), "html", null, true);
        echo "\" />
            </form>
        </div>

";
    }

    // line 43
    public function block_rightmenu($context, array $blocks = array())
    {
        echo "   
";
        // line 44
        $this->env->loadTemplate("MYMainBundle:Main:rightmenu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  133 => 43,  124 => 38,  119 => 36,  114 => 34,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  70 => 20,  67 => 19,  64 => 18,  42 => 10,  38 => 6,  33 => 5,  30 => 4,);
    }
}
