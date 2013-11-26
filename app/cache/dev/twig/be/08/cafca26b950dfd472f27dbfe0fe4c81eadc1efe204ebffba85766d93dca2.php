<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_be08cafca26b950dfd472f27dbfe0fe4c81eadc1efe204ebffba85766d93dca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translationsForms_widget' => array($this, 'block_a2lix_translationsForms_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "default_locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "[Default]";
            }
            // line 10
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'errors');
            echo "
                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
";
    }

    // line 28
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  86 => 19,  71 => 13,  41 => 5,  26 => 28,  23 => 27,  21 => 1,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  469 => 144,  464 => 142,  452 => 139,  448 => 138,  444 => 137,  433 => 135,  430 => 134,  427 => 133,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  409 => 127,  406 => 126,  403 => 125,  400 => 124,  393 => 121,  387 => 119,  381 => 117,  375 => 115,  373 => 114,  370 => 113,  355 => 107,  351 => 106,  344 => 104,  341 => 103,  326 => 95,  318 => 94,  311 => 93,  308 => 92,  303 => 90,  295 => 85,  290 => 83,  285 => 82,  283 => 81,  271 => 75,  269 => 74,  261 => 71,  245 => 61,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  220 => 51,  218 => 50,  215 => 49,  208 => 45,  203 => 44,  198 => 42,  185 => 35,  182 => 34,  179 => 33,  177 => 32,  170 => 28,  169 => 27,  163 => 25,  157 => 23,  154 => 22,  152 => 21,  149 => 20,  132 => 10,  130 => 9,  120 => 4,  105 => 2,  90 => 161,  85 => 150,  83 => 18,  78 => 103,  75 => 102,  73 => 90,  68 => 80,  65 => 79,  63 => 10,  60 => 69,  58 => 60,  55 => 59,  53 => 8,  48 => 42,  43 => 20,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  461 => 141,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  423 => 151,  420 => 150,  411 => 144,  402 => 138,  398 => 123,  394 => 136,  390 => 134,  388 => 133,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  359 => 114,  357 => 113,  350 => 111,  346 => 105,  342 => 109,  338 => 107,  335 => 106,  332 => 98,  330 => 104,  327 => 103,  324 => 102,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  306 => 91,  304 => 96,  296 => 94,  291 => 91,  289 => 90,  286 => 89,  279 => 84,  263 => 72,  258 => 70,  255 => 68,  250 => 66,  247 => 62,  244 => 60,  241 => 59,  238 => 56,  235 => 55,  233 => 54,  230 => 53,  209 => 39,  201 => 43,  199 => 34,  196 => 33,  178 => 18,  171 => 29,  168 => 26,  162 => 11,  156 => 9,  144 => 4,  137 => 2,  129 => 667,  127 => 8,  122 => 488,  117 => 410,  109 => 364,  107 => 24,  99 => 317,  97 => 246,  94 => 20,  89 => 197,  87 => 188,  79 => 149,  77 => 132,  74 => 131,  72 => 89,  69 => 88,  62 => 33,  52 => 11,  49 => 10,  44 => 6,  284 => 128,  280 => 80,  274 => 80,  267 => 120,  260 => 71,  253 => 112,  246 => 108,  239 => 104,  227 => 95,  223 => 94,  210 => 84,  202 => 79,  194 => 74,  188 => 36,  173 => 30,  165 => 56,  158 => 52,  155 => 51,  153 => 50,  150 => 49,  139 => 3,  136 => 40,  134 => 1,  131 => 38,  116 => 29,  112 => 365,  102 => 1,  98 => 21,  95 => 167,  93 => 162,  91 => 14,  82 => 150,  59 => 32,  57 => 9,  54 => 12,  50 => 48,  47 => 7,  45 => 41,  40 => 19,  37 => 4,  35 => 7,  32 => 10,  27 => 8,  25 => 1,  138 => 12,  133 => 43,  124 => 655,  119 => 487,  114 => 409,  108 => 31,  104 => 346,  100 => 29,  96 => 28,  92 => 198,  88 => 151,  84 => 187,  80 => 17,  76 => 16,  70 => 89,  67 => 53,  64 => 52,  42 => 1,  38 => 8,  33 => 2,  30 => 1,);
    }
}
