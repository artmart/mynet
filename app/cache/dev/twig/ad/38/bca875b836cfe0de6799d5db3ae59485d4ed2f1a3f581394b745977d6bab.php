<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_ad38bca875b836cfe0de6799d5db3ae59485d4ed2f1a3f581394b745977d6bab extends Twig_Template
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
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  124 => 52,  65 => 26,  113 => 42,  110 => 46,  104 => 40,  81 => 26,  58 => 19,  90 => 27,  23 => 13,  263 => 104,  256 => 102,  249 => 98,  241 => 95,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 68,  155 => 66,  152 => 65,  146 => 63,  137 => 60,  126 => 45,  100 => 41,  97 => 39,  77 => 25,  34 => 18,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 162,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 141,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 112,  332 => 110,  324 => 108,  322 => 107,  319 => 106,  315 => 104,  308 => 100,  304 => 99,  295 => 98,  293 => 97,  288 => 95,  278 => 94,  274 => 93,  268 => 90,  262 => 89,  257 => 87,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  188 => 74,  177 => 65,  169 => 69,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 88,  219 => 76,  217 => 87,  208 => 73,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 42,  71 => 29,  67 => 31,  63 => 22,  59 => 14,  28 => 3,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 70,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 56,  121 => 51,  117 => 50,  105 => 40,  91 => 38,  62 => 25,  49 => 19,  94 => 39,  89 => 37,  85 => 35,  75 => 30,  68 => 30,  56 => 9,  38 => 18,  87 => 25,  31 => 17,  25 => 12,  21 => 2,  26 => 14,  24 => 13,  19 => 11,  93 => 28,  88 => 36,  78 => 31,  46 => 7,  44 => 21,  27 => 14,  79 => 31,  72 => 16,  69 => 32,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 52,  123 => 50,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 37,  98 => 38,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 25,  52 => 17,  50 => 25,  43 => 21,  41 => 20,  35 => 22,  32 => 21,  29 => 15,  209 => 76,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 70,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 64,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 44,  106 => 44,  103 => 38,  99 => 30,  95 => 28,  92 => 21,  86 => 33,  82 => 33,  80 => 29,  73 => 24,  64 => 14,  60 => 24,  57 => 27,  54 => 26,  51 => 14,  48 => 8,  45 => 8,  42 => 13,  39 => 12,  36 => 19,  33 => 16,  30 => 15,);
    }
}
