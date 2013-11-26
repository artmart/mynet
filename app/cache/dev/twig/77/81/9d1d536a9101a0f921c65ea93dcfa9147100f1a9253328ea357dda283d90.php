<?php

/* A2lixTranslationFormBundle::macros.html.twig */
class __TwigTemplate_77819d1d536a9101a0f921c65ea93dcfa9147100f1a9253328ea357dda283d90 extends Twig_Template
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
        // line 9
        echo "
";
        // line 37
        echo "
";
    }

    // line 10
    public function getpartialTranslations($_form = null, $_fieldsNames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $_form,
            "fieldsNames" => $_fieldsNames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 14
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                // line 15
                echo "
            <li ";
                // line 16
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo "\">
                   ";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 26
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                // line 27
                echo "
            <div class=\"a2lix_translationsFields-";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "active";
                }
                echo "\">
            ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")));
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["translationsField"]) ? $context["translationsField"] : $this->getContext($context, "translationsField")), "vars"), "name"), (isset($context["fieldsNames"]) ? $context["fieldsNames"] : $this->getContext($context, "fieldsNames")))) {
                        // line 30
                        echo "                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsField"]) ? $context["translationsField"] : $this->getContext($context, "translationsField")), 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getpartialTranslationsGedmo($_form = null, $_fieldsNames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $_form,
            "fieldsNames" => $_fieldsNames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 42
                echo "            ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")), "vars"), "name"));
                // line 43
                echo "
            ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")));
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 45
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                    // line 46
                    echo "
                <li ";
                    // line 47
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                    <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 48
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo "\">
                        ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                    echo " ";
                    if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                        echo "[Default]";
                    }
                    // line 50
                    echo "                    </a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 58
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")));
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 59
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                    // line 60
                    echo "
                <div class=\"a2lix_translationsFields-";
                    // line 61
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "active";
                    }
                    echo "\">
                ";
                    // line 62
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")));
                    foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["translationsField"]) ? $context["translationsField"] : $this->getContext($context, "translationsField")), "vars"), "name"), (isset($context["fieldsNames"]) ? $context["fieldsNames"] : $this->getContext($context, "fieldsNames")))) {
                            // line 63
                            echo "                    ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsField"]) ? $context["translationsField"] : $this->getContext($context, "translationsField")), 'widget');
                            echo "
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  202 => 57,  318 => 122,  306 => 140,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 22,  165 => 59,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 60,  186 => 69,  174 => 23,  127 => 76,  267 => 156,  244 => 66,  237 => 86,  232 => 136,  211 => 59,  205 => 84,  172 => 64,  167 => 47,  134 => 50,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 71,  253 => 68,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 79,  185 => 68,  180 => 66,  148 => 47,  114 => 38,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 98,  228 => 83,  223 => 66,  200 => 55,  84 => 42,  76 => 16,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 80,  215 => 78,  190 => 70,  184 => 74,  181 => 79,  178 => 119,  161 => 45,  129 => 42,  70 => 22,  118 => 34,  153 => 63,  124 => 46,  65 => 29,  113 => 28,  110 => 41,  104 => 35,  81 => 32,  58 => 25,  90 => 31,  23 => 27,  263 => 124,  256 => 96,  249 => 89,  241 => 101,  236 => 108,  225 => 62,  213 => 126,  207 => 83,  197 => 54,  191 => 53,  175 => 76,  160 => 18,  155 => 55,  152 => 56,  146 => 56,  137 => 48,  126 => 45,  100 => 94,  97 => 63,  77 => 33,  34 => 5,  20 => 1,  53 => 16,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 86,  234 => 84,  218 => 91,  192 => 87,  188 => 68,  177 => 49,  169 => 73,  140 => 58,  132 => 108,  128 => 107,  107 => 24,  61 => 29,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 65,  238 => 139,  235 => 83,  230 => 63,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 61,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 39,  135 => 81,  119 => 43,  102 => 35,  71 => 13,  67 => 24,  63 => 18,  59 => 17,  28 => 3,  201 => 72,  196 => 71,  183 => 50,  171 => 102,  166 => 61,  163 => 66,  158 => 59,  156 => 93,  151 => 42,  142 => 46,  138 => 51,  136 => 44,  121 => 41,  117 => 41,  105 => 27,  91 => 17,  62 => 23,  49 => 20,  94 => 20,  89 => 37,  85 => 27,  75 => 36,  68 => 22,  56 => 22,  38 => 6,  87 => 38,  31 => 4,  25 => 3,  21 => 1,  26 => 28,  24 => 6,  19 => 9,  93 => 46,  88 => 28,  78 => 25,  46 => 9,  44 => 6,  27 => 10,  79 => 31,  72 => 25,  69 => 30,  47 => 14,  40 => 7,  37 => 4,  22 => 37,  246 => 69,  157 => 44,  145 => 60,  139 => 49,  131 => 38,  123 => 44,  120 => 45,  115 => 43,  111 => 32,  108 => 37,  101 => 30,  98 => 21,  96 => 29,  83 => 18,  74 => 26,  66 => 24,  55 => 21,  52 => 23,  50 => 15,  43 => 13,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 95,  203 => 122,  199 => 52,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 65,  173 => 48,  168 => 69,  164 => 46,  162 => 60,  154 => 43,  149 => 36,  147 => 41,  144 => 54,  141 => 66,  133 => 43,  130 => 49,  125 => 45,  122 => 104,  116 => 29,  112 => 48,  109 => 39,  106 => 40,  103 => 39,  99 => 34,  95 => 33,  92 => 32,  86 => 19,  82 => 26,  80 => 17,  73 => 22,  64 => 29,  60 => 17,  57 => 9,  54 => 12,  51 => 21,  48 => 11,  45 => 9,  42 => 8,  39 => 11,  36 => 5,  33 => 2,  30 => 1,);
    }
}
