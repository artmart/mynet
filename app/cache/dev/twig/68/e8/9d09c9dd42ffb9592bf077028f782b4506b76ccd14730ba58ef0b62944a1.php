<?php

/* MYMainBundle:Suggestion:blockMin.html.twig */
class __TwigTemplate_68e89d09c9dd42ffb9592bf077028f782b4506b76ccd14730ba58ef0b62944a1 extends Twig_Template
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
        // line 1
        echo "<div class=\"mini-item-block\">
  ";
        // line 3
        echo "  ";
        $context["show_iamge"] = (!twig_test_empty($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "image")));
        echo "   
  ";
        // line 4
        $context["user_uploaded"] = (!twig_test_empty($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "path")));
        // line 5
        echo "
    <div class=\"thumb\">
  ";
        // line 7
        if ((isset($context["show_iamge"]) ? $context["show_iamge"] : $this->getContext($context, "show_iamge"))) {
            // line 8
            echo "      ";
            // line 9
            echo "      ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "image"), "list", array("alt" => "picture", "title" => $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "title")));
            // line 10
            echo "  ";
        } elseif (((isset($context["user_uploaded"]) ? $context["user_uploaded"] : $this->getContext($context, "user_uploaded")) && ($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "useruploaded") == "1"))) {
            // line 11
            echo "      <img src=\"/uploads/rawimage/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "path"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "path"), "html", null, true);
            echo "\" title=\"object.title\" width=\"260\" />
  ";
        } else {
            // line 13
            echo "      <div class=\"list-thumb-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
            echo "\">
      </div>
  ";
        }
        // line 16
        echo "</div>
    <div class=\"suggestion ";
        // line 17
        if ((twig_test_empty($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "image")) && twig_test_empty($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "path")))) {
            echo "widder";
        }
        echo "\">
      ";
        // line 19
        echo "      ";
        if ((!twig_test_empty($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user")))) {
            // line 20
            echo "
        ";
            // line 22
            echo "        <div class=\"header\">
          ";
            // line 23
            if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "facebookUid")))) {
                // line 24
                echo "            <div>
              <a href=\"http://www.facebook.com/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "facebookUid"), "html", null, true);
                echo "\" target=\"_blank\">
                <img src=\"http://graph.facebook.com/";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "facebookUid"), "html", null, true);
                echo "/picture?type=square\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "lastname"), "html", null, true);
                echo "\" />
              </a>
            </div>
          ";
            }
            // line 30
            echo "
          ";
            // line 32
            echo "          <div>
            <span class=\"date\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "createdAt"), "d.m.Y"), "html", null, true);
            echo "</span> <br/>
            <span class=\"title\">
              ";
            // line 36
            echo "              ";
            if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "facebookUid")))) {
                // line 37
                echo "                <a href=\"http://www.facebook.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "facebookUid"), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "lastname"), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 41
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "user"), "lastname"), "html", null, true);
                echo "
              ";
            }
            // line 43
            echo "            </span>
            <br />
            <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("common.suggests"), "html", null, true);
            echo "</span><br />
          </div>
          <br class=\"fcl\" />
        </div>
        <div>
           <br /><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suggestion", array("slug" => $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "title"), "html", null, true);
            echo "</a>
        </div>
        
      ";
        }
        // line 54
        echo "
      <div>
        ";
        // line 56
        echo $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "intro");
        echo "
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suggestion", array("slug" => $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("common.more"), "html", null, true);
        echo "</a>
      </div>
        
      ";
        // line 61
        echo "      ";
        $context["facebook_url"] = ((isset($context["facebook_server_url"]) ? $context["facebook_server_url"] : $this->getContext($context, "facebook_server_url")) . $this->env->getExtension('routing')->getPath("suggestion", array("slug" => $this->getAttribute((isset($context["suggestion"]) ? $context["suggestion"] : $this->getContext($context, "suggestion")), "slug"), "_locale" => "am")));
        // line 62
        echo "
      <br />
      ";
        // line 65
        echo "      <div class=\"fb-like\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : $this->getContext($context, "facebook_url")), "html", null, true);
        echo "\" data-send=\"false\" data-layout=\"button_count\" data-width=\"75\" data-show-faces=\"true\"></div>

  </div>
    <div class=\"clear\"></div>
  ";
        // line 69
        if ((isset($context["show_iamge"]) ? $context["show_iamge"] : $this->getContext($context, "show_iamge"))) {
            echo "<br class=\"fcl\" />";
        }
        // line 70
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Suggestion:blockMin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 92,  266 => 93,  522 => 169,  519 => 168,  493 => 157,  489 => 155,  482 => 152,  469 => 144,  464 => 142,  448 => 138,  427 => 133,  421 => 131,  418 => 130,  406 => 126,  373 => 114,  341 => 103,  290 => 83,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  687 => 288,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  617 => 250,  598 => 238,  586 => 236,  583 => 235,  558 => 224,  554 => 223,  520 => 208,  511 => 203,  503 => 200,  501 => 199,  487 => 192,  461 => 141,  438 => 160,  411 => 144,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  350 => 111,  330 => 104,  313 => 96,  258 => 70,  327 => 103,  255 => 121,  206 => 68,  229 => 96,  212 => 72,  198 => 42,  676 => 401,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  567 => 230,  550 => 326,  538 => 319,  531 => 215,  518 => 207,  514 => 306,  509 => 304,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  435 => 258,  429 => 154,  424 => 132,  422 => 250,  346 => 105,  331 => 187,  298 => 173,  316 => 97,  309 => 90,  305 => 115,  284 => 128,  281 => 105,  279 => 84,  399 => 158,  387 => 119,  383 => 224,  366 => 210,  362 => 141,  359 => 114,  348 => 104,  294 => 111,  276 => 102,  270 => 77,  202 => 66,  318 => 94,  306 => 91,  265 => 99,  260 => 71,  248 => 117,  242 => 60,  170 => 99,  165 => 47,  150 => 49,  12 => 34,  553 => 176,  545 => 220,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 113,  352 => 138,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  226 => 106,  214 => 73,  186 => 89,  174 => 100,  127 => 34,  267 => 120,  244 => 115,  237 => 81,  232 => 136,  211 => 59,  205 => 55,  172 => 51,  167 => 48,  134 => 1,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 360,  800 => 252,  798 => 251,  795 => 349,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 290,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 258,  627 => 208,  621 => 251,  611 => 247,  587 => 200,  584 => 199,  582 => 198,  578 => 234,  576 => 195,  572 => 193,  569 => 231,  566 => 182,  561 => 174,  557 => 330,  548 => 221,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 158,  491 => 156,  481 => 189,  478 => 188,  475 => 141,  468 => 140,  459 => 137,  444 => 137,  434 => 130,  420 => 150,  402 => 138,  396 => 234,  393 => 121,  390 => 134,  381 => 117,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 90,  299 => 112,  283 => 81,  275 => 103,  271 => 75,  261 => 71,  253 => 112,  231 => 55,  222 => 105,  216 => 74,  210 => 71,  194 => 74,  185 => 59,  180 => 56,  148 => 69,  114 => 409,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 287,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 179,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 158,  528 => 167,  525 => 211,  516 => 161,  512 => 152,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 129,  425 => 152,  414 => 125,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 107,  349 => 103,  342 => 109,  339 => 100,  336 => 99,  329 => 126,  326 => 95,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  289 => 90,  286 => 89,  272 => 3,  250 => 66,  247 => 83,  233 => 54,  228 => 54,  223 => 94,  200 => 65,  84 => 16,  76 => 23,  344 => 104,  340 => 95,  338 => 107,  335 => 106,  321 => 99,  312 => 177,  292 => 134,  285 => 82,  282 => 101,  280 => 80,  277 => 99,  264 => 75,  259 => 70,  252 => 87,  220 => 51,  215 => 73,  190 => 50,  184 => 48,  181 => 81,  178 => 18,  161 => 45,  129 => 63,  70 => 20,  118 => 74,  153 => 50,  124 => 76,  65 => 83,  113 => 31,  110 => 37,  104 => 52,  81 => 25,  58 => 16,  90 => 20,  23 => 27,  263 => 72,  256 => 96,  249 => 89,  241 => 59,  236 => 85,  225 => 79,  213 => 101,  207 => 98,  197 => 54,  191 => 91,  175 => 65,  160 => 57,  155 => 75,  152 => 54,  146 => 83,  137 => 37,  126 => 63,  100 => 23,  97 => 23,  77 => 16,  34 => 26,  20 => 1,  53 => 49,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 163,  440 => 153,  437 => 131,  433 => 135,  423 => 151,  419 => 98,  417 => 126,  412 => 128,  408 => 124,  403 => 125,  397 => 131,  394 => 136,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 115,  372 => 119,  370 => 113,  365 => 115,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 107,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 85,  293 => 109,  288 => 83,  278 => 94,  274 => 4,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 50,  192 => 64,  188 => 59,  177 => 54,  169 => 49,  140 => 66,  132 => 10,  128 => 60,  107 => 36,  61 => 17,  273 => 78,  269 => 74,  254 => 91,  243 => 89,  240 => 67,  238 => 112,  235 => 55,  230 => 53,  227 => 95,  224 => 102,  221 => 76,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 33,  159 => 94,  143 => 50,  135 => 45,  119 => 487,  102 => 33,  71 => 13,  67 => 19,  63 => 23,  59 => 32,  28 => 3,  201 => 43,  196 => 63,  183 => 69,  171 => 62,  166 => 98,  163 => 45,  158 => 52,  156 => 56,  151 => 73,  142 => 34,  138 => 79,  136 => 37,  121 => 61,  117 => 34,  105 => 2,  91 => 64,  62 => 82,  49 => 10,  94 => 45,  89 => 197,  85 => 26,  75 => 102,  68 => 26,  56 => 16,  38 => 8,  87 => 188,  31 => 4,  25 => 1,  21 => 2,  26 => 2,  24 => 3,  19 => 1,  93 => 21,  88 => 40,  78 => 24,  46 => 12,  44 => 11,  27 => 4,  79 => 149,  72 => 10,  69 => 9,  47 => 43,  40 => 10,  37 => 9,  22 => 3,  246 => 108,  157 => 47,  145 => 70,  139 => 3,  131 => 43,  123 => 41,  120 => 36,  115 => 38,  111 => 30,  108 => 28,  101 => 24,  98 => 47,  96 => 30,  83 => 113,  74 => 11,  66 => 39,  55 => 79,  52 => 78,  50 => 44,  43 => 11,  41 => 9,  35 => 8,  32 => 14,  29 => 5,  209 => 39,  203 => 97,  199 => 34,  193 => 62,  189 => 61,  187 => 70,  182 => 57,  176 => 84,  173 => 30,  168 => 61,  164 => 78,  162 => 11,  154 => 40,  149 => 20,  147 => 41,  144 => 81,  141 => 69,  133 => 64,  130 => 9,  125 => 62,  122 => 488,  116 => 26,  112 => 365,  109 => 72,  106 => 26,  103 => 34,  99 => 32,  95 => 22,  92 => 41,  86 => 17,  82 => 34,  80 => 112,  73 => 22,  64 => 24,  60 => 81,  57 => 80,  54 => 12,  51 => 13,  48 => 8,  45 => 28,  42 => 27,  39 => 6,  36 => 2,  33 => 7,  30 => 9,);
    }
}
