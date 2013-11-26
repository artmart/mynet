<?php

/* SonataAdminBundle:CRUD:show_choice.html.twig */
class __TwigTemplate_058e22d7057ce3eed80235418a215c1d07d72a3762bbda0dcca6dee351919012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "multiple") == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 28
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue")));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")));
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 38
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices")))) {
                // line 40
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue"));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            // line 49
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 158,  500 => 157,  488 => 153,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 125,  352 => 121,  333 => 117,  302 => 114,  300 => 113,  296 => 111,  226 => 67,  214 => 61,  186 => 54,  174 => 53,  127 => 48,  267 => 73,  244 => 66,  237 => 64,  232 => 63,  211 => 56,  205 => 59,  172 => 52,  167 => 79,  134 => 52,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 177,  548 => 165,  526 => 164,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  283 => 58,  275 => 77,  271 => 55,  261 => 71,  253 => 47,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 177,  185 => 47,  180 => 120,  148 => 44,  114 => 43,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 127,  358 => 113,  355 => 122,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 59,  286 => 80,  272 => 76,  250 => 67,  247 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  84 => 34,  76 => 34,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  285 => 81,  282 => 80,  280 => 79,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 65,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 119,  161 => 46,  129 => 49,  70 => 29,  118 => 49,  153 => 43,  124 => 49,  65 => 29,  113 => 42,  110 => 41,  104 => 43,  81 => 36,  58 => 23,  90 => 38,  23 => 12,  263 => 71,  256 => 69,  249 => 70,  241 => 95,  236 => 35,  225 => 60,  213 => 86,  207 => 83,  197 => 56,  191 => 50,  175 => 118,  160 => 59,  155 => 66,  152 => 58,  146 => 56,  137 => 53,  126 => 48,  100 => 43,  97 => 36,  77 => 30,  34 => 16,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 108,  278 => 94,  274 => 77,  268 => 54,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 55,  188 => 48,  177 => 42,  169 => 51,  140 => 53,  132 => 44,  128 => 47,  107 => 40,  61 => 24,  273 => 75,  269 => 75,  254 => 68,  243 => 68,  240 => 86,  238 => 36,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 88,  219 => 29,  217 => 58,  208 => 60,  204 => 72,  179 => 72,  159 => 60,  143 => 29,  135 => 55,  119 => 44,  102 => 39,  71 => 28,  67 => 31,  63 => 25,  59 => 29,  28 => 13,  201 => 57,  196 => 52,  183 => 121,  171 => 61,  166 => 62,  163 => 60,  158 => 37,  156 => 44,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 51,  117 => 45,  105 => 44,  91 => 34,  62 => 28,  49 => 28,  94 => 40,  89 => 34,  85 => 37,  75 => 21,  68 => 27,  56 => 25,  38 => 14,  87 => 38,  31 => 14,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 40,  88 => 37,  78 => 21,  46 => 19,  44 => 19,  27 => 14,  79 => 34,  72 => 19,  69 => 26,  47 => 20,  40 => 24,  37 => 16,  22 => 12,  246 => 69,  157 => 58,  145 => 53,  139 => 51,  131 => 48,  123 => 46,  120 => 46,  115 => 47,  111 => 41,  108 => 41,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 22,  52 => 24,  50 => 21,  43 => 25,  41 => 19,  35 => 17,  32 => 15,  29 => 15,  209 => 76,  203 => 278,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 55,  141 => 54,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 30,  109 => 45,  106 => 35,  103 => 38,  99 => 41,  95 => 37,  92 => 35,  86 => 33,  82 => 23,  80 => 31,  73 => 32,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 29,  48 => 22,  45 => 26,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
