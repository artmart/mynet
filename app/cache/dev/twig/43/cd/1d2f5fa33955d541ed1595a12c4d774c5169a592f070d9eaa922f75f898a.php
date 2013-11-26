<?php

/* MYMainBundle:Concurs:concurs.html.twig */
class __TwigTemplate_43cd1d2f5fa33955d541ed1595a12c4d774c5169a592f070d9eaa922f75f898a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MYMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | News";
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.keywords"), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.description"), "html", null, true);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<h2 class=\"content-title-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.news"), "html", null, true);
        echo "</h2>
<div class=\"category\">
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "    <div class=\"item-row clearfix\">
      ";
            // line 13
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image")) {
                // line 14
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_concurs_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
                echo "\" class=\"read-more\">
          <img src=\"";
                // line 15
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image"), "list");
                echo "\" class=\"news_pics\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                echo "\" />
        ";
                // line 19
                echo "        
        
        </a>
      ";
            }
            // line 23
            echo "
      <h4>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "concursDate"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <br />

      <h3 class=\"item-title\">
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_concurs_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
            echo "</a>
      </h3>

      <div class=\"intro\"> 
        ";
            // line 32
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "shortContent");
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_concurs_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
            echo "\" class=\"read-more\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("more"), "html", null, true);
            echo "</a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
  ";
        // line 38
        echo "    <div>";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        echo "</div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Concurs:concurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 126,  195 => 123,  266 => 93,  522 => 169,  519 => 168,  493 => 157,  489 => 155,  482 => 152,  469 => 144,  464 => 142,  448 => 138,  427 => 133,  421 => 131,  418 => 130,  406 => 126,  373 => 114,  341 => 103,  290 => 83,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  687 => 288,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  617 => 250,  598 => 238,  586 => 236,  583 => 235,  558 => 224,  554 => 223,  520 => 208,  511 => 203,  503 => 200,  501 => 199,  487 => 192,  461 => 141,  438 => 160,  411 => 144,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  350 => 111,  330 => 104,  313 => 37,  258 => 70,  327 => 103,  255 => 93,  206 => 81,  229 => 96,  212 => 73,  198 => 42,  676 => 401,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  567 => 230,  550 => 326,  538 => 319,  531 => 215,  518 => 207,  514 => 306,  509 => 304,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  435 => 258,  429 => 154,  424 => 132,  422 => 250,  346 => 137,  331 => 187,  298 => 173,  316 => 97,  309 => 90,  305 => 115,  284 => 128,  281 => 105,  279 => 101,  399 => 158,  387 => 119,  383 => 224,  366 => 210,  362 => 141,  359 => 114,  348 => 104,  294 => 111,  276 => 102,  270 => 98,  202 => 7,  318 => 94,  306 => 117,  265 => 99,  260 => 71,  248 => 150,  242 => 60,  170 => 99,  165 => 57,  150 => 114,  12 => 34,  553 => 176,  545 => 220,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  410 => 96,  407 => 116,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 113,  352 => 138,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  226 => 106,  214 => 73,  186 => 119,  174 => 113,  127 => 39,  267 => 120,  244 => 148,  237 => 81,  232 => 136,  211 => 59,  205 => 127,  172 => 59,  167 => 121,  134 => 1,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 360,  800 => 252,  798 => 251,  795 => 349,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 290,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 258,  627 => 208,  621 => 251,  611 => 247,  587 => 200,  584 => 199,  582 => 198,  578 => 234,  576 => 195,  572 => 193,  569 => 231,  566 => 182,  561 => 174,  557 => 330,  548 => 221,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 158,  491 => 156,  481 => 189,  478 => 188,  475 => 141,  468 => 140,  459 => 137,  444 => 137,  434 => 130,  420 => 150,  402 => 113,  396 => 234,  393 => 60,  390 => 134,  381 => 117,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 58,  317 => 45,  303 => 116,  299 => 112,  283 => 81,  275 => 103,  271 => 75,  261 => 95,  253 => 92,  231 => 141,  222 => 136,  216 => 19,  210 => 72,  194 => 74,  185 => 59,  180 => 56,  148 => 40,  114 => 40,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 287,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 179,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 158,  528 => 167,  525 => 211,  516 => 161,  512 => 152,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 129,  425 => 152,  414 => 125,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 107,  349 => 103,  342 => 109,  339 => 100,  336 => 99,  329 => 126,  326 => 130,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  289 => 107,  286 => 106,  272 => 3,  250 => 66,  247 => 83,  233 => 54,  228 => 140,  223 => 94,  200 => 79,  84 => 25,  76 => 23,  344 => 104,  340 => 95,  338 => 135,  335 => 106,  321 => 99,  312 => 121,  292 => 134,  285 => 82,  282 => 101,  280 => 80,  277 => 99,  264 => 96,  259 => 70,  252 => 87,  220 => 51,  215 => 133,  190 => 50,  184 => 48,  181 => 73,  178 => 57,  161 => 55,  129 => 40,  70 => 14,  118 => 37,  153 => 52,  124 => 38,  65 => 12,  113 => 27,  110 => 31,  104 => 30,  81 => 19,  58 => 15,  90 => 24,  23 => 3,  263 => 72,  256 => 96,  249 => 89,  241 => 147,  236 => 81,  225 => 79,  213 => 18,  207 => 10,  197 => 64,  191 => 120,  175 => 55,  160 => 57,  155 => 43,  152 => 43,  146 => 40,  137 => 47,  126 => 57,  100 => 29,  97 => 28,  77 => 16,  34 => 10,  20 => 1,  53 => 9,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 163,  440 => 153,  437 => 131,  433 => 135,  423 => 151,  419 => 98,  417 => 119,  412 => 118,  408 => 124,  403 => 125,  397 => 62,  394 => 136,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 115,  372 => 119,  370 => 113,  365 => 154,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 107,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 111,  293 => 109,  288 => 83,  278 => 94,  274 => 4,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 75,  192 => 62,  188 => 60,  177 => 56,  169 => 54,  140 => 48,  132 => 41,  128 => 37,  107 => 36,  61 => 11,  273 => 99,  269 => 74,  254 => 91,  243 => 86,  240 => 67,  238 => 112,  235 => 143,  230 => 79,  227 => 78,  224 => 102,  221 => 76,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 33,  159 => 118,  143 => 97,  135 => 46,  119 => 36,  102 => 27,  71 => 17,  67 => 19,  63 => 23,  59 => 15,  28 => 8,  201 => 66,  196 => 63,  183 => 53,  171 => 54,  166 => 66,  163 => 119,  158 => 44,  156 => 117,  151 => 51,  142 => 44,  138 => 44,  136 => 38,  121 => 43,  117 => 41,  105 => 36,  91 => 23,  62 => 14,  49 => 9,  94 => 32,  89 => 19,  85 => 70,  75 => 15,  68 => 13,  56 => 11,  38 => 5,  87 => 23,  31 => 4,  25 => 1,  21 => 2,  26 => 6,  24 => 3,  19 => 1,  93 => 20,  88 => 26,  78 => 17,  46 => 9,  44 => 6,  27 => 11,  79 => 21,  72 => 28,  69 => 16,  47 => 11,  40 => 28,  37 => 8,  22 => 2,  246 => 87,  157 => 49,  145 => 45,  139 => 40,  131 => 45,  123 => 38,  120 => 36,  115 => 33,  111 => 39,  108 => 31,  101 => 35,  98 => 47,  96 => 28,  83 => 21,  74 => 19,  66 => 15,  55 => 16,  52 => 12,  50 => 8,  43 => 29,  41 => 7,  35 => 5,  32 => 4,  29 => 23,  209 => 129,  203 => 67,  199 => 34,  193 => 140,  189 => 62,  187 => 61,  182 => 57,  176 => 51,  173 => 55,  168 => 53,  164 => 52,  162 => 45,  154 => 48,  149 => 57,  147 => 50,  144 => 49,  141 => 51,  133 => 43,  130 => 32,  125 => 44,  122 => 30,  116 => 31,  112 => 27,  109 => 38,  106 => 32,  103 => 33,  99 => 32,  95 => 22,  92 => 27,  86 => 22,  82 => 20,  80 => 24,  73 => 17,  64 => 18,  60 => 22,  57 => 12,  54 => 9,  51 => 12,  48 => 11,  45 => 8,  42 => 10,  39 => 6,  36 => 6,  33 => 5,  30 => 4,);
    }
}
