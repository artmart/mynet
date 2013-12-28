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
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 6
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 7
            echo "
            <li ";
            // line 8
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">
                   ";
            // line 10
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "default_locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "[Default]";
            }
            // line 11
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 18
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 19
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'errors');
            echo "
                ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
";
    }

    // line 29
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        // line 30
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
        return array (  229 => 96,  212 => 88,  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  346 => 196,  331 => 187,  316 => 121,  284 => 106,  279 => 104,  253 => 148,  401 => 156,  390 => 150,  366 => 210,  364 => 139,  359 => 138,  328 => 124,  290 => 106,  283 => 166,  198 => 80,  195 => 68,  155 => 58,  318 => 122,  306 => 140,  303 => 139,  242 => 140,  170 => 22,  150 => 55,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 160,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 125,  352 => 135,  333 => 117,  302 => 114,  300 => 138,  296 => 109,  275 => 103,  226 => 67,  214 => 98,  186 => 111,  160 => 18,  267 => 156,  261 => 91,  256 => 96,  244 => 85,  237 => 86,  232 => 136,  205 => 84,  172 => 52,  167 => 79,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 159,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 132,  457 => 131,  444 => 134,  438 => 133,  435 => 258,  427 => 130,  424 => 254,  418 => 128,  410 => 96,  406 => 158,  386 => 95,  379 => 119,  373 => 142,  368 => 117,  348 => 80,  317 => 70,  298 => 173,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 101,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 79,  185 => 68,  180 => 62,  114 => 39,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 169,  533 => 160,  530 => 165,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 136,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 75,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  286 => 132,  272 => 158,  263 => 124,  250 => 93,  247 => 67,  236 => 108,  233 => 98,  223 => 66,  200 => 70,  191 => 69,  175 => 76,  152 => 92,  146 => 49,  84 => 42,  76 => 34,  344 => 97,  340 => 95,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  282 => 80,  280 => 101,  264 => 72,  259 => 70,  252 => 88,  249 => 70,  220 => 80,  215 => 78,  190 => 49,  184 => 74,  181 => 79,  178 => 123,  161 => 70,  137 => 52,  129 => 46,  97 => 21,  70 => 31,  118 => 103,  153 => 63,  124 => 42,  100 => 94,  65 => 29,  126 => 45,  110 => 25,  104 => 35,  81 => 32,  77 => 27,  58 => 25,  90 => 38,  23 => 28,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 74,  323 => 125,  309 => 117,  305 => 115,  301 => 111,  299 => 112,  289 => 81,  285 => 81,  281 => 105,  277 => 100,  271 => 108,  265 => 99,  260 => 98,  248 => 115,  228 => 83,  225 => 95,  213 => 126,  211 => 56,  202 => 77,  197 => 73,  174 => 23,  165 => 62,  148 => 48,  134 => 55,  127 => 43,  113 => 43,  34 => 5,  20 => 1,  53 => 23,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 267,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 98,  417 => 140,  412 => 174,  408 => 138,  403 => 157,  397 => 131,  394 => 152,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 118,  332 => 125,  324 => 116,  322 => 72,  319 => 90,  315 => 118,  308 => 67,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 98,  268 => 126,  262 => 51,  257 => 149,  251 => 105,  245 => 83,  239 => 83,  234 => 80,  218 => 91,  192 => 65,  188 => 48,  177 => 72,  169 => 63,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 29,  273 => 75,  269 => 100,  254 => 68,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 67,  159 => 59,  143 => 48,  135 => 44,  119 => 30,  102 => 37,  71 => 28,  67 => 27,  63 => 14,  59 => 24,  28 => 3,  201 => 72,  196 => 52,  183 => 68,  171 => 102,  166 => 100,  163 => 66,  158 => 64,  156 => 93,  151 => 57,  142 => 46,  138 => 47,  136 => 109,  121 => 75,  117 => 44,  105 => 36,  91 => 17,  62 => 23,  49 => 20,  94 => 18,  89 => 20,  85 => 33,  75 => 36,  68 => 22,  56 => 9,  38 => 6,  87 => 31,  31 => 4,  25 => 3,  21 => 1,  26 => 29,  24 => 6,  19 => 1,  93 => 46,  88 => 33,  78 => 36,  46 => 9,  44 => 6,  27 => 4,  79 => 17,  72 => 25,  69 => 30,  47 => 7,  40 => 5,  37 => 6,  22 => 1,  246 => 86,  157 => 17,  145 => 54,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 49,  111 => 41,  108 => 37,  101 => 22,  98 => 34,  96 => 33,  83 => 18,  74 => 14,  66 => 11,  55 => 21,  52 => 21,  50 => 8,  43 => 19,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 73,  203 => 122,  199 => 52,  193 => 72,  189 => 64,  187 => 69,  182 => 79,  176 => 65,  173 => 64,  168 => 69,  164 => 19,  162 => 55,  154 => 49,  149 => 50,  147 => 61,  144 => 48,  141 => 53,  133 => 49,  130 => 54,  125 => 45,  122 => 104,  116 => 29,  112 => 41,  109 => 42,  106 => 35,  103 => 39,  99 => 38,  95 => 37,  92 => 31,  86 => 19,  82 => 33,  80 => 28,  73 => 26,  64 => 30,  60 => 10,  57 => 24,  54 => 12,  51 => 21,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 2,  30 => 1,);
    }
}
