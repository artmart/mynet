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
        return array (  22 => 12,  19 => 11,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  192 => 64,  189 => 61,  180 => 56,  175 => 53,  172 => 51,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  154 => 40,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  93 => 21,  86 => 17,  84 => 16,  81 => 15,  74 => 11,  69 => 9,  65 => 83,  62 => 82,  55 => 79,  52 => 78,  50 => 44,  47 => 43,  45 => 28,  40 => 20,  35 => 15,  30 => 9,  27 => 8,  350 => 129,  345 => 128,  340 => 126,  335 => 70,  331 => 68,  276 => 53,  273 => 52,  269 => 35,  201 => 33,  196 => 65,  193 => 18,  187 => 60,  182 => 57,  177 => 54,  157 => 143,  148 => 136,  146 => 135,  143 => 133,  140 => 131,  136 => 129,  134 => 128,  131 => 127,  129 => 126,  123 => 122,  117 => 34,  107 => 90,  103 => 88,  98 => 85,  90 => 20,  83 => 78,  75 => 71,  73 => 70,  70 => 69,  68 => 52,  64 => 50,  46 => 10,  42 => 27,  38 => 6,  34 => 4,  32 => 14,  28 => 1,  281 => 66,  271 => 204,  259 => 193,  248 => 183,  235 => 171,  232 => 170,  221 => 79,  215 => 160,  209 => 157,  203 => 154,  197 => 151,  191 => 148,  185 => 59,  179 => 142,  173 => 154,  167 => 48,  156 => 41,  150 => 125,  144 => 122,  138 => 119,  132 => 116,  126 => 113,  120 => 36,  114 => 107,  108 => 28,  105 => 103,  100 => 23,  95 => 22,  92 => 70,  72 => 10,  63 => 45,  60 => 81,  57 => 80,  53 => 42,  43 => 36,  37 => 19,  31 => 4,);
    }
}
