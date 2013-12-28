<?php

/* MYMainBundle:Interesting:detailed.html.twig */
class __TwigTemplate_fc64ed4268313a456f2848e835cc74bdcce8cc22b3545a55f0bdea2740a84b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "MYNET | ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 16
    public function block_description($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d54cd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9_0") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2_jquery.prettyPhoto_1.js");
            // line 28
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
            // asset "5d54cd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9_1") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2_news_prettyphoto_on_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
        } else {
            // asset "5d54cd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        unset($context["asset_url"]);
    }

    // line 32
    public function block_main($context, array $blocks = array())
    {
        // line 33
        echo "
<div>
  ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
        foreach ($context['_seq'] as $context["_key"] => $context["detaile"]) {
            // line 36
            echo "    <div class=\"item-detailed clearfix\">
        
        ";
            // line 38
            if (($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "image"))))) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "image"), "list", array("alt" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "title" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "width" => "190px", "height" => "130px"));
                // line 40
                echo "       ";
            }
            // line 41
            echo "       
        
      <h4>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "_Date"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <h2 class=\"content-title-";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "html", null, true);
            echo "</h2>
      <div class=\"intro\"> ";
            // line 45
            echo $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "content");
            echo "</div>
      ";
            // line 46
            if ($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "gallery")) {
                // line 47
                echo "        <div class=\"sonata-media-gallery-media-list\">
          ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "gallery"), "galleryHasMedias"));
                foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
                    // line 49
                    echo "            <div class=\"news_gallery\">
\t      <a class=\"sonata-media-gallery-media-item-link\" rel=\"prettyPhoto[gallery2]\" href=\"";
                    // line 50
                    echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "reference");
                    echo "\">
\t        ";
                    // line 51
                    echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "list", array("title" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "alt" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "height" => "173"));
                    // line 52
                    echo "              </a>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        </div>
      ";
            }
            // line 57
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detaile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    

      <!-- AddThis Button BEGIN -->
      <div class=\"addthis_toolbox addthis_default_style \">
        <a class=\"addthis_button_facebook_like\"></a>
        <a class=\"addthis_button_tweet\"></a>
        <a class=\"addthis_button_pinterest_pinit\"></a>
        <a class=\"addthis_counter addthis_pill_style\"></a>
      </div>
      <script type=\"text/javascript\" src=\"http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f50664b6e50a39a\"></script>
      <!-- AddThis Button END -->

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Interesting:detailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 126,  345 => 128,  207 => 98,  519 => 168,  495 => 158,  489 => 155,  482 => 152,  464 => 142,  448 => 138,  421 => 131,  393 => 121,  387 => 119,  381 => 117,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  806 => 360,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  770 => 334,  751 => 325,  746 => 323,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  714 => 304,  711 => 303,  678 => 286,  673 => 285,  670 => 284,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  617 => 250,  611 => 247,  598 => 238,  583 => 235,  578 => 234,  569 => 231,  554 => 223,  548 => 221,  545 => 220,  520 => 208,  503 => 200,  461 => 141,  411 => 144,  402 => 138,  385 => 118,  350 => 129,  330 => 104,  313 => 96,  270 => 98,  255 => 93,  206 => 81,  229 => 96,  212 => 73,  690 => 410,  676 => 401,  664 => 394,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  550 => 326,  531 => 215,  526 => 310,  518 => 207,  514 => 306,  509 => 304,  481 => 189,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  429 => 154,  422 => 250,  420 => 150,  396 => 234,  383 => 224,  346 => 137,  331 => 68,  316 => 97,  284 => 128,  279 => 101,  253 => 92,  401 => 156,  390 => 134,  366 => 210,  364 => 109,  359 => 114,  328 => 230,  290 => 83,  283 => 81,  198 => 42,  195 => 92,  155 => 43,  318 => 221,  306 => 117,  303 => 116,  242 => 176,  170 => 99,  150 => 125,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 203,  504 => 302,  499 => 156,  487 => 192,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 113,  352 => 135,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  275 => 103,  226 => 106,  214 => 73,  186 => 89,  160 => 57,  267 => 120,  261 => 95,  256 => 96,  244 => 115,  237 => 81,  232 => 170,  205 => 55,  172 => 59,  167 => 136,  816 => 354,  813 => 353,  808 => 262,  801 => 258,  795 => 349,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 337,  769 => 245,  767 => 244,  764 => 332,  758 => 241,  756 => 327,  753 => 326,  747 => 237,  745 => 236,  742 => 322,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 305,  712 => 233,  709 => 232,  703 => 229,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 279,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 251,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 236,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 230,  558 => 224,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 169,  508 => 159,  501 => 199,  496 => 149,  493 => 157,  491 => 156,  488 => 146,  485 => 145,  478 => 188,  475 => 143,  472 => 142,  469 => 144,  460 => 132,  457 => 131,  444 => 137,  438 => 160,  435 => 258,  427 => 133,  424 => 132,  418 => 130,  410 => 96,  406 => 126,  386 => 95,  379 => 124,  373 => 114,  368 => 116,  348 => 104,  317 => 70,  298 => 173,  294 => 61,  276 => 53,  266 => 185,  258 => 70,  241 => 59,  231 => 93,  222 => 105,  216 => 74,  210 => 72,  194 => 74,  185 => 59,  180 => 56,  114 => 40,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 287,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 175,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 165,  528 => 167,  525 => 211,  516 => 155,  512 => 159,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 136,  425 => 152,  414 => 127,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 107,  349 => 133,  342 => 109,  339 => 100,  336 => 99,  329 => 75,  326 => 130,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  286 => 106,  272 => 3,  263 => 72,  250 => 179,  247 => 83,  236 => 81,  233 => 54,  223 => 94,  200 => 79,  191 => 148,  175 => 55,  152 => 43,  146 => 40,  84 => 32,  76 => 30,  344 => 104,  340 => 126,  335 => 70,  321 => 99,  312 => 121,  292 => 134,  282 => 101,  280 => 80,  264 => 96,  259 => 182,  252 => 180,  249 => 70,  220 => 51,  215 => 160,  190 => 50,  184 => 48,  181 => 73,  178 => 57,  161 => 55,  137 => 47,  129 => 40,  97 => 33,  70 => 14,  118 => 37,  153 => 52,  124 => 38,  100 => 29,  65 => 12,  126 => 113,  110 => 31,  104 => 40,  81 => 19,  77 => 16,  58 => 15,  90 => 24,  23 => 3,  358 => 106,  343 => 132,  341 => 103,  338 => 135,  327 => 103,  323 => 125,  309 => 90,  305 => 115,  301 => 111,  299 => 112,  289 => 107,  285 => 82,  281 => 66,  277 => 99,  271 => 75,  265 => 99,  260 => 71,  248 => 117,  228 => 92,  225 => 79,  213 => 84,  211 => 59,  202 => 66,  197 => 64,  174 => 100,  165 => 57,  148 => 40,  134 => 128,  127 => 39,  113 => 27,  34 => 10,  20 => 1,  53 => 9,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 163,  440 => 153,  437 => 152,  433 => 135,  423 => 151,  419 => 98,  417 => 140,  412 => 128,  408 => 138,  403 => 125,  397 => 131,  394 => 136,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 115,  372 => 119,  370 => 113,  365 => 154,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 72,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 111,  293 => 109,  288 => 199,  278 => 191,  274 => 190,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 75,  192 => 62,  188 => 60,  177 => 56,  169 => 54,  140 => 48,  132 => 41,  128 => 37,  107 => 90,  61 => 11,  273 => 99,  269 => 35,  254 => 68,  243 => 86,  240 => 67,  238 => 112,  235 => 171,  230 => 79,  227 => 78,  224 => 102,  221 => 76,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 142,  159 => 94,  143 => 133,  135 => 46,  119 => 36,  102 => 33,  71 => 17,  67 => 19,  63 => 23,  59 => 15,  28 => 8,  201 => 66,  196 => 19,  183 => 53,  171 => 54,  166 => 66,  163 => 65,  158 => 44,  156 => 128,  151 => 51,  142 => 44,  138 => 44,  136 => 38,  121 => 43,  117 => 41,  105 => 36,  91 => 23,  62 => 14,  49 => 9,  94 => 32,  89 => 19,  85 => 19,  75 => 15,  68 => 24,  56 => 25,  38 => 5,  87 => 23,  31 => 4,  25 => 1,  21 => 2,  26 => 6,  24 => 3,  19 => 1,  93 => 20,  88 => 33,  78 => 17,  46 => 9,  44 => 6,  27 => 17,  79 => 21,  72 => 28,  69 => 16,  47 => 11,  40 => 28,  37 => 8,  22 => 2,  246 => 87,  157 => 49,  145 => 45,  139 => 40,  131 => 45,  123 => 38,  120 => 36,  115 => 33,  111 => 39,  108 => 31,  101 => 35,  98 => 85,  96 => 28,  83 => 21,  74 => 19,  66 => 15,  55 => 16,  52 => 12,  50 => 10,  43 => 29,  41 => 7,  35 => 5,  32 => 4,  29 => 4,  209 => 157,  203 => 67,  199 => 34,  193 => 18,  189 => 62,  187 => 61,  182 => 7,  176 => 51,  173 => 55,  168 => 53,  164 => 52,  162 => 45,  154 => 48,  149 => 57,  147 => 50,  144 => 49,  141 => 51,  133 => 43,  130 => 32,  125 => 44,  122 => 30,  116 => 28,  112 => 27,  109 => 38,  106 => 32,  103 => 33,  99 => 38,  95 => 24,  92 => 27,  86 => 22,  82 => 20,  80 => 31,  73 => 17,  64 => 27,  60 => 22,  57 => 12,  54 => 12,  51 => 12,  48 => 11,  45 => 20,  42 => 19,  39 => 6,  36 => 6,  33 => 5,  30 => 4,);
    }
}
