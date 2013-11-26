<?php

/* A2lixTranslationFormBundle::form.html.twig */
class __TwigTemplate_91bee527cc43aebc09e576aa11f75018b407bec7ad9c78e11719db8cccd534c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
    }

    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["locales"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "locales");
        // line 3
        echo "    ";
        if (array_key_exists("fields", $context)) {
            // line 4
            echo "        ";
            $context["locales"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "default_locale"), (isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    <div id=\"tabs\">
        <ul>
          ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 10
            echo "              <li><a href=\"#tab-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\" data-translation-locale=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
        
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 15
            echo "        <div id=\"tab-";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">
            ";
            // line 17
            echo "            ";
            if ((array_key_exists("fields", $context) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "default_locale"), 0, array(), "array") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 19
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'row');
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "
            ";
                // line 23
                echo "            ";
            } else {
                // line 24
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["translationsLocale"]) {
                    if (($this->getAttribute($this->getAttribute((isset($context["translationsLocale"]) ? $context["translationsLocale"] : $this->getContext($context, "translationsLocale")), "vars"), "name") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        // line 25
                        echo "                      ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["translationsLocale"]) ? $context["translationsLocale"] : $this->getContext($context, "translationsLocale")), "getChildren"));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 26
                            echo "                        <div class=\"control-group\">
                          ";
                            // line 27
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'label');
                            echo "

                          <div class=\"controls sonata-ba-field sonata-ba-field-standard-natural \">
                            ";
                            // line 30
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'widget');
                            echo "
                          </div>
                        </div>
                          
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "                     ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsLocale"]) ? $context["translationsLocale"] : $this->getContext($context, "translationsLocale")), 'rest');
                        echo "
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            ";
            }
            // line 38
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

    <script>
    \$(function() {
        \$( \"#tabs\" ).tabs();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  140 => 38,  110 => 27,  81 => 19,  29 => 3,  28 => 3,  348 => 104,  336 => 99,  333 => 98,  315 => 92,  309 => 90,  300 => 87,  297 => 86,  288 => 83,  282 => 81,  273 => 78,  270 => 77,  264 => 75,  252 => 71,  240 => 67,  237 => 66,  225 => 62,  222 => 61,  216 => 59,  205 => 55,  193 => 51,  190 => 50,  184 => 48,  175 => 45,  160 => 40,  151 => 37,  145 => 35,  142 => 34,  118 => 26,  111 => 24,  56 => 16,  51 => 13,  31 => 4,  22 => 2,  20 => 1,  113 => 28,  86 => 19,  71 => 13,  41 => 5,  26 => 2,  23 => 27,  21 => 1,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  469 => 144,  464 => 142,  452 => 139,  448 => 138,  444 => 137,  433 => 135,  430 => 134,  427 => 133,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  409 => 127,  406 => 126,  403 => 125,  400 => 124,  393 => 121,  387 => 119,  381 => 117,  375 => 115,  373 => 114,  370 => 113,  355 => 107,  351 => 106,  344 => 104,  341 => 103,  326 => 95,  318 => 93,  311 => 93,  308 => 92,  303 => 90,  295 => 85,  290 => 83,  285 => 82,  283 => 81,  271 => 75,  269 => 74,  261 => 74,  245 => 61,  242 => 60,  234 => 56,  231 => 64,  228 => 54,  226 => 53,  220 => 51,  218 => 50,  215 => 49,  208 => 56,  203 => 44,  198 => 42,  185 => 35,  182 => 34,  179 => 33,  177 => 32,  170 => 28,  169 => 43,  163 => 41,  157 => 23,  154 => 38,  152 => 21,  149 => 20,  132 => 10,  130 => 9,  120 => 4,  105 => 2,  90 => 21,  85 => 150,  83 => 18,  78 => 103,  75 => 102,  73 => 17,  68 => 15,  65 => 79,  63 => 14,  60 => 12,  58 => 60,  55 => 59,  53 => 8,  48 => 42,  43 => 9,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  461 => 141,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  423 => 151,  420 => 150,  411 => 144,  402 => 138,  398 => 123,  394 => 136,  390 => 134,  388 => 133,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  359 => 114,  357 => 113,  350 => 111,  346 => 105,  342 => 101,  338 => 107,  335 => 106,  332 => 98,  330 => 104,  327 => 96,  324 => 95,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  306 => 89,  304 => 96,  296 => 94,  291 => 84,  289 => 90,  286 => 89,  279 => 80,  263 => 72,  258 => 70,  255 => 72,  250 => 66,  247 => 62,  244 => 60,  241 => 59,  238 => 56,  235 => 55,  233 => 54,  230 => 53,  209 => 39,  201 => 43,  199 => 53,  196 => 33,  178 => 46,  171 => 29,  168 => 26,  162 => 11,  156 => 9,  144 => 4,  137 => 37,  129 => 667,  127 => 35,  122 => 488,  117 => 410,  109 => 364,  107 => 26,  99 => 317,  97 => 23,  94 => 22,  89 => 197,  87 => 188,  79 => 149,  77 => 18,  74 => 131,  72 => 89,  69 => 88,  62 => 33,  52 => 11,  49 => 10,  44 => 6,  284 => 128,  280 => 80,  274 => 80,  267 => 120,  260 => 71,  253 => 112,  246 => 69,  239 => 104,  227 => 95,  223 => 94,  210 => 57,  202 => 79,  194 => 74,  188 => 36,  173 => 30,  165 => 56,  158 => 52,  155 => 51,  153 => 50,  150 => 49,  139 => 3,  136 => 32,  134 => 1,  131 => 38,  116 => 30,  112 => 365,  102 => 25,  98 => 21,  95 => 167,  93 => 23,  91 => 21,  82 => 150,  59 => 17,  57 => 9,  54 => 12,  50 => 11,  47 => 10,  45 => 9,  40 => 7,  37 => 4,  35 => 5,  32 => 4,  27 => 8,  25 => 3,  138 => 12,  133 => 31,  124 => 28,  119 => 487,  114 => 409,  108 => 31,  104 => 346,  100 => 29,  96 => 24,  92 => 198,  88 => 20,  84 => 187,  80 => 17,  76 => 18,  70 => 89,  67 => 53,  64 => 14,  42 => 8,  38 => 6,  33 => 5,  30 => 1,);
    }
}
