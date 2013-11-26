<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_f4bcdaf8450ff9ca00f64c9e776d7119351c3ff790182b0692cdf9f6882ba085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 73,  244 => 66,  237 => 64,  232 => 63,  211 => 56,  205 => 54,  172 => 16,  167 => 79,  134 => 37,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 169,  548 => 165,  526 => 157,  523 => 156,  517 => 155,  506 => 151,  495 => 148,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 115,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  283 => 58,  275 => 57,  271 => 55,  261 => 71,  253 => 47,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 177,  185 => 47,  180 => 120,  148 => 41,  114 => 88,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 128,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 136,  451 => 141,  446 => 139,  430 => 137,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 124,  377 => 115,  374 => 114,  371 => 113,  361 => 107,  358 => 113,  355 => 112,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 66,  297 => 84,  291 => 82,  289 => 59,  286 => 80,  272 => 76,  250 => 67,  247 => 67,  233 => 62,  228 => 59,  223 => 58,  200 => 55,  84 => 36,  76 => 19,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  285 => 84,  282 => 79,  280 => 82,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 59,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 119,  161 => 46,  129 => 24,  70 => 25,  118 => 32,  153 => 43,  124 => 23,  65 => 5,  113 => 48,  110 => 29,  104 => 23,  81 => 16,  58 => 12,  90 => 18,  23 => 12,  263 => 71,  256 => 69,  249 => 67,  241 => 95,  236 => 35,  225 => 60,  213 => 86,  207 => 83,  197 => 54,  191 => 50,  175 => 118,  160 => 68,  155 => 66,  152 => 99,  146 => 34,  137 => 27,  126 => 55,  100 => 43,  97 => 87,  77 => 13,  34 => 13,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 160,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 141,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 102,  332 => 75,  324 => 92,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 85,  278 => 94,  274 => 77,  268 => 54,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  188 => 48,  177 => 42,  169 => 69,  140 => 38,  132 => 43,  128 => 35,  107 => 46,  61 => 27,  273 => 75,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 36,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 88,  219 => 29,  217 => 58,  208 => 55,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 17,  71 => 32,  67 => 33,  63 => 28,  59 => 29,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 61,  166 => 110,  163 => 77,  158 => 37,  156 => 44,  151 => 42,  142 => 58,  138 => 93,  136 => 58,  121 => 33,  117 => 49,  105 => 26,  91 => 22,  62 => 30,  49 => 18,  94 => 40,  89 => 17,  85 => 83,  75 => 32,  68 => 6,  56 => 25,  38 => 7,  87 => 17,  31 => 19,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 28,  88 => 37,  78 => 80,  46 => 9,  44 => 21,  27 => 12,  79 => 34,  72 => 31,  69 => 34,  47 => 25,  40 => 6,  37 => 21,  22 => 12,  246 => 90,  157 => 41,  145 => 60,  139 => 31,  131 => 25,  123 => 52,  120 => 47,  115 => 27,  111 => 30,  108 => 42,  101 => 22,  98 => 21,  96 => 19,  83 => 15,  74 => 78,  66 => 30,  55 => 25,  52 => 20,  50 => 23,  43 => 21,  41 => 23,  35 => 20,  32 => 16,  29 => 13,  209 => 76,  203 => 278,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 58,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 55,  130 => 57,  125 => 34,  122 => 43,  116 => 43,  112 => 30,  109 => 44,  106 => 35,  103 => 34,  99 => 23,  95 => 19,  92 => 19,  86 => 17,  82 => 10,  80 => 14,  73 => 7,  64 => 31,  60 => 3,  57 => 26,  54 => 26,  51 => 19,  48 => 67,  45 => 16,  42 => 16,  39 => 21,  36 => 18,  33 => 17,  30 => 15,);
    }
}