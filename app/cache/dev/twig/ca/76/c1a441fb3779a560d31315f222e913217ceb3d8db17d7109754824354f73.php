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
        return array (  22 => 12,  19 => 11,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  165 => 47,  160 => 44,  137 => 37,  120 => 36,  117 => 34,  115 => 33,  113 => 31,  111 => 30,  100 => 23,  95 => 22,  93 => 21,  90 => 20,  84 => 16,  81 => 15,  72 => 10,  62 => 82,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  50 => 44,  45 => 28,  42 => 27,  37 => 19,  32 => 14,  30 => 9,  27 => 8,  417 => 119,  412 => 118,  407 => 116,  402 => 113,  397 => 62,  393 => 60,  325 => 58,  320 => 46,  317 => 45,  313 => 37,  221 => 79,  216 => 19,  213 => 18,  207 => 10,  197 => 6,  193 => 140,  167 => 48,  163 => 45,  159 => 118,  156 => 41,  154 => 40,  150 => 114,  148 => 113,  136 => 97,  125 => 91,  112 => 81,  108 => 28,  105 => 78,  97 => 74,  91 => 71,  85 => 70,  76 => 63,  71 => 61,  69 => 9,  65 => 83,  61 => 37,  47 => 43,  43 => 7,  39 => 6,  35 => 15,  33 => 3,  29 => 1,  248 => 150,  244 => 148,  241 => 147,  235 => 143,  231 => 141,  228 => 140,  222 => 136,  218 => 134,  215 => 133,  209 => 129,  205 => 127,  202 => 68,  195 => 123,  191 => 120,  186 => 119,  174 => 113,  171 => 123,  162 => 108,  157 => 104,  151 => 100,  147 => 99,  143 => 97,  139 => 106,  131 => 94,  128 => 71,  123 => 65,  101 => 46,  92 => 44,  89 => 43,  86 => 17,  82 => 41,  77 => 38,  74 => 11,  58 => 18,  54 => 9,  49 => 8,  46 => 7,  40 => 20,  34 => 4,);
    }
}
