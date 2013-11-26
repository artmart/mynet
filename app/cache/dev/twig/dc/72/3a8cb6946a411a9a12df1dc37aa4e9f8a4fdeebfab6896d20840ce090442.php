<?php

/* BCCCronManagerBundle::layout.html.twig */
class __TwigTemplate_dc723a8cb6946a411a9a12df1dc37aa4e9f8a4fdeebfab6896d20840ce090442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bcccronmanager/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <style type=\"text/css\">
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }

        .control-group.error label{
            color: #B94A48;
        }

        label.span1 {
            margin-left: 0px;
            width: 100px;
        }

        .time-input,
        .command-input label,
        .command-input input,
        .command-input span,
        .command-input .add-on,
        .time-menu span
        {
            font-size: 20px;
            height: 26px;
            line-height: 26px;
        }

        .command-input .icon-pencil, .time-menu .icon-pencil{
            vertical-align: baseline;
        }

        .time-menu .caret {
            margin-top: 10px;
        }

        .tooltip {
            font-size: 20px;
            line-height: 26px;
        }
    </style>

</head>

<body>

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>

<div class=\"container\">
    ";
        // line 70
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "hasFlash", array(0 => "message"), "method")) {
            // line 71
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "message"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 72
                echo "            <div class=\"alert alert-info\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "    ";
        }
        // line 75
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 76
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 77
                echo "            <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    ";
        }
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "</div>

<div class=\"modal hide\" id=\"modal\">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\" href=\"#\">×</a>
        <h3></h3>
    </div>
    <div class=\"modal-body\">
        <pre style=\"height: 200px; overflow: auto;\">test</pre>
    </div>
    <div class=\"modal-footer\">
        <a class=\"btn btn-primary\" data-dismiss=\"modal\" href=\"#\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modal.close", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a>
    </div>
</div>

<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bcccronmanager/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bcccronmanager/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bcccronmanager/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 93,  522 => 169,  519 => 168,  493 => 157,  489 => 155,  482 => 152,  469 => 144,  464 => 142,  448 => 138,  427 => 133,  421 => 131,  418 => 130,  406 => 126,  373 => 114,  341 => 103,  290 => 83,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  687 => 288,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  617 => 250,  598 => 238,  586 => 236,  583 => 235,  558 => 224,  554 => 223,  520 => 208,  511 => 203,  503 => 200,  501 => 199,  487 => 192,  461 => 141,  438 => 160,  411 => 144,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  350 => 111,  330 => 104,  313 => 96,  258 => 70,  327 => 103,  255 => 68,  206 => 58,  229 => 96,  212 => 88,  198 => 42,  676 => 401,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  567 => 230,  550 => 326,  538 => 319,  531 => 215,  518 => 207,  514 => 306,  509 => 304,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  435 => 258,  429 => 154,  424 => 132,  422 => 250,  346 => 105,  331 => 187,  298 => 173,  316 => 97,  309 => 90,  305 => 115,  284 => 128,  281 => 105,  279 => 84,  399 => 158,  387 => 119,  383 => 224,  366 => 210,  362 => 141,  359 => 114,  348 => 104,  294 => 111,  276 => 102,  270 => 77,  202 => 79,  318 => 94,  306 => 91,  265 => 99,  260 => 71,  248 => 115,  242 => 60,  170 => 99,  165 => 56,  150 => 49,  12 => 34,  553 => 176,  545 => 220,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 113,  352 => 138,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  226 => 78,  214 => 60,  186 => 69,  174 => 100,  127 => 34,  267 => 120,  244 => 60,  237 => 66,  232 => 136,  211 => 59,  205 => 55,  172 => 52,  167 => 50,  134 => 1,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 360,  800 => 252,  798 => 251,  795 => 349,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 290,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 258,  627 => 208,  621 => 251,  611 => 247,  587 => 200,  584 => 199,  582 => 198,  578 => 234,  576 => 195,  572 => 193,  569 => 231,  566 => 182,  561 => 174,  557 => 330,  548 => 221,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 158,  491 => 156,  481 => 189,  478 => 188,  475 => 141,  468 => 140,  459 => 137,  444 => 137,  434 => 130,  420 => 150,  402 => 138,  396 => 234,  393 => 121,  390 => 134,  381 => 117,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 90,  299 => 112,  283 => 81,  275 => 103,  271 => 75,  261 => 71,  253 => 112,  231 => 55,  222 => 61,  216 => 59,  210 => 71,  194 => 74,  185 => 82,  180 => 66,  148 => 69,  114 => 409,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 287,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 179,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 158,  528 => 167,  525 => 211,  516 => 161,  512 => 152,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 129,  425 => 152,  414 => 125,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 107,  349 => 103,  342 => 109,  339 => 100,  336 => 99,  329 => 126,  326 => 95,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  289 => 90,  286 => 89,  272 => 158,  250 => 66,  247 => 62,  233 => 54,  228 => 54,  223 => 94,  200 => 64,  84 => 18,  76 => 9,  344 => 104,  340 => 95,  338 => 107,  335 => 106,  321 => 99,  312 => 177,  292 => 134,  285 => 82,  282 => 101,  280 => 80,  277 => 99,  264 => 75,  259 => 70,  252 => 87,  220 => 51,  215 => 73,  190 => 50,  184 => 48,  181 => 81,  178 => 18,  161 => 45,  129 => 77,  70 => 12,  118 => 74,  153 => 50,  124 => 76,  65 => 79,  113 => 55,  110 => 41,  104 => 71,  81 => 47,  58 => 60,  90 => 161,  23 => 27,  263 => 72,  256 => 96,  249 => 89,  241 => 59,  236 => 85,  225 => 62,  213 => 126,  207 => 83,  197 => 54,  191 => 53,  175 => 45,  160 => 48,  155 => 51,  152 => 44,  146 => 83,  137 => 2,  126 => 63,  100 => 33,  97 => 23,  77 => 16,  34 => 26,  20 => 1,  53 => 49,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 163,  440 => 153,  437 => 131,  433 => 135,  423 => 151,  419 => 98,  417 => 126,  412 => 128,  408 => 124,  403 => 125,  397 => 131,  394 => 136,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 115,  372 => 119,  370 => 113,  365 => 115,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 107,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 85,  293 => 109,  288 => 83,  278 => 94,  274 => 80,  268 => 94,  262 => 92,  257 => 90,  251 => 105,  245 => 61,  239 => 104,  234 => 56,  218 => 50,  192 => 87,  188 => 59,  177 => 54,  169 => 27,  140 => 66,  132 => 10,  128 => 60,  107 => 3,  61 => 11,  273 => 78,  269 => 74,  254 => 91,  243 => 89,  240 => 67,  238 => 56,  235 => 55,  230 => 53,  227 => 95,  224 => 102,  221 => 76,  219 => 129,  217 => 61,  208 => 45,  204 => 73,  179 => 33,  159 => 94,  143 => 39,  135 => 81,  119 => 487,  102 => 70,  71 => 13,  67 => 53,  63 => 23,  59 => 32,  28 => 3,  201 => 43,  196 => 63,  183 => 50,  171 => 29,  166 => 98,  163 => 49,  158 => 52,  156 => 9,  151 => 37,  142 => 34,  138 => 79,  136 => 37,  121 => 75,  117 => 410,  105 => 2,  91 => 64,  62 => 33,  49 => 10,  94 => 245,  89 => 197,  85 => 150,  75 => 102,  68 => 80,  56 => 16,  38 => 8,  87 => 188,  31 => 4,  25 => 1,  21 => 2,  26 => 5,  24 => 3,  19 => 1,  93 => 162,  88 => 151,  78 => 103,  46 => 12,  44 => 11,  27 => 8,  79 => 149,  72 => 13,  69 => 88,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 108,  157 => 47,  145 => 35,  139 => 3,  131 => 35,  123 => 58,  120 => 4,  115 => 29,  111 => 28,  108 => 27,  101 => 24,  98 => 168,  96 => 48,  83 => 113,  74 => 131,  66 => 39,  55 => 17,  52 => 11,  50 => 48,  43 => 20,  41 => 25,  35 => 6,  32 => 10,  29 => 24,  209 => 39,  203 => 44,  199 => 34,  193 => 62,  189 => 71,  187 => 84,  182 => 81,  176 => 65,  173 => 30,  168 => 26,  164 => 46,  162 => 11,  154 => 22,  149 => 20,  147 => 41,  144 => 81,  141 => 80,  133 => 31,  130 => 9,  125 => 59,  122 => 488,  116 => 26,  112 => 365,  109 => 72,  106 => 26,  103 => 34,  99 => 317,  95 => 167,  92 => 198,  86 => 19,  82 => 150,  80 => 112,  73 => 90,  64 => 52,  60 => 69,  57 => 9,  54 => 12,  51 => 13,  48 => 42,  45 => 41,  42 => 1,  39 => 15,  36 => 2,  33 => 7,  30 => 5,);
    }
}
