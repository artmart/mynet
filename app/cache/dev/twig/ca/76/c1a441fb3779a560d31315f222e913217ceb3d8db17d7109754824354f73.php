<?php

/* SonataMediaBundle:Provider:thumbnail.html.twig */
class __TwigTemplate_ca76c1a441fb3779a560d31315f222e913217ceb3d8db17d7109754824354f73 extends Twig_Template
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
        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  248 => 150,  244 => 148,  241 => 147,  235 => 143,  231 => 141,  228 => 140,  222 => 136,  218 => 134,  215 => 133,  209 => 129,  205 => 127,  202 => 126,  195 => 123,  191 => 120,  186 => 119,  174 => 113,  171 => 112,  162 => 108,  157 => 104,  151 => 100,  147 => 99,  143 => 97,  139 => 96,  131 => 94,  128 => 71,  123 => 65,  101 => 46,  92 => 44,  89 => 43,  86 => 42,  82 => 41,  77 => 38,  74 => 37,  58 => 12,  54 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 4,);
    }
}
