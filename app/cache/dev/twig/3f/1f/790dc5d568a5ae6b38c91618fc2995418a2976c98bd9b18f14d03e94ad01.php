<?php

/* MYMainBundle:Main:rightmenu.html.twig */
class __TwigTemplate_3f1f790dc5d568a5ae6b38c91618fc2995418a2976c98bd9b18f14d03e94ad01 extends Twig_Template
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
        echo "<div class=\"clearfix\" id=\"right-sidebar\">
<div class=\"mayor\">
";
        // line 3
        echo "      
";
        // line 6
        echo "
";
        // line 23
        echo "

";
        // line 26
        echo "<h2>Գովազդ</h2>             
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rightads"]) ? $context["rightads"] : $this->getContext($context, "rightads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 28
            echo "<br />
  ";
            // line 29
            if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image"))))) {
                // line 30
                echo "       <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "link"), "html", null, true);
                echo "\" target=\"_blank\">
         ";
                // line 31
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image"), "right", array("alt" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "title"), "title" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "title")));
                // line 32
                echo "       </a>
  ";
            }
            // line 34
            echo "<br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "   
<br />
";
        // line 51
        echo "           
</div> 
</div>       


";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:rightmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 51,  63 => 35,  56 => 34,  52 => 32,  50 => 31,  45 => 30,  43 => 29,  40 => 28,  36 => 27,  33 => 26,  29 => 23,  26 => 6,  23 => 3,  19 => 1,);
    }
}
