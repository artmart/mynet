<?php

/* MYMainBundle:Contact:index.html.twig */
class __TwigTemplate_a72a4c2fd67b1e8941fc52c039acae0b17b48fddbef67cbfe35e69dc4b1d6481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'rightmenu' => array($this, 'block_rightmenu'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb5de_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de_0") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion_list_1.css");
            // line 10
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
            // asset "76eb5de_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de_1") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion_suggestion_2.css");
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "76eb5de"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb5de") : $this->env->getExtension('assets')->getAssetUrl("css/suggestion.css");
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "<br />
<h2 class=\"for_centering\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.text"), "html", null, true);
        echo "</h2>
<br />
<div id=\"sug-form-holder\">
    ";
        // line 23
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")));
        echo "
        <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("contact_form");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
        <label for=\"contactform_subject\" class=\"required\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.subject"), "html", null, true);
        echo "</label> 
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "subject"), 'widget');
        echo "
         <label for=\"contactform_email\" class=\"required\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.email"), "html", null, true);
        echo "</label> 
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email"), 'widget');
        echo "
         <label for=\"contactform_message\" class=\"required\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.message"), "html", null, true);
        echo "</label>        
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "message"), 'widget');
        echo "

                <br />
             ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "recaptcha"), 'widget');
        echo "

        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "
                <br />
<input class=\"button-glossy medium-grey\" type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.form.send"), "html", null, true);
        echo "\" />
            </form>
        </div>

";
    }

    // line 43
    public function block_rightmenu($context, array $blocks = array())
    {
        echo "   
";
        // line 44
        $this->env->loadTemplate("MYMainBundle:Main:rightmenu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 126,  345 => 128,  207 => 98,  519 => 168,  495 => 158,  489 => 155,  482 => 152,  464 => 142,  448 => 138,  421 => 131,  393 => 121,  387 => 119,  381 => 117,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  806 => 360,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  770 => 334,  751 => 325,  746 => 323,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  714 => 304,  711 => 303,  678 => 286,  673 => 285,  670 => 284,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  617 => 250,  611 => 247,  598 => 238,  583 => 235,  578 => 234,  569 => 231,  554 => 223,  548 => 221,  545 => 220,  520 => 208,  503 => 200,  461 => 141,  411 => 144,  402 => 138,  385 => 118,  350 => 129,  330 => 104,  313 => 96,  270 => 98,  255 => 93,  206 => 81,  229 => 96,  212 => 73,  690 => 410,  676 => 401,  664 => 394,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  550 => 326,  531 => 215,  526 => 310,  518 => 207,  514 => 306,  509 => 304,  481 => 189,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  429 => 154,  422 => 250,  420 => 150,  396 => 234,  383 => 224,  346 => 137,  331 => 68,  316 => 97,  284 => 128,  279 => 101,  253 => 92,  401 => 156,  390 => 134,  366 => 210,  364 => 109,  359 => 114,  328 => 230,  290 => 83,  283 => 81,  198 => 42,  195 => 92,  155 => 43,  318 => 221,  306 => 117,  303 => 116,  242 => 176,  170 => 99,  150 => 125,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 203,  504 => 302,  499 => 156,  487 => 192,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 113,  352 => 135,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  275 => 103,  226 => 106,  214 => 73,  186 => 89,  160 => 57,  267 => 120,  261 => 95,  256 => 96,  244 => 115,  237 => 81,  232 => 170,  205 => 55,  172 => 49,  167 => 136,  816 => 354,  813 => 353,  808 => 262,  801 => 258,  795 => 349,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 337,  769 => 245,  767 => 244,  764 => 332,  758 => 241,  756 => 327,  753 => 326,  747 => 237,  745 => 236,  742 => 322,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 305,  712 => 233,  709 => 232,  703 => 229,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 279,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 251,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 236,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 230,  558 => 224,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 169,  508 => 159,  501 => 199,  496 => 149,  493 => 157,  491 => 156,  488 => 146,  485 => 145,  478 => 188,  475 => 143,  472 => 142,  469 => 144,  460 => 132,  457 => 131,  444 => 137,  438 => 160,  435 => 258,  427 => 133,  424 => 132,  418 => 130,  410 => 96,  406 => 126,  386 => 95,  379 => 124,  373 => 114,  368 => 116,  348 => 104,  317 => 70,  298 => 173,  294 => 61,  276 => 53,  266 => 185,  258 => 70,  241 => 59,  231 => 93,  222 => 105,  216 => 74,  210 => 72,  194 => 74,  185 => 59,  180 => 56,  114 => 34,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 287,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 175,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 165,  528 => 167,  525 => 211,  516 => 155,  512 => 159,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 136,  425 => 152,  414 => 127,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 107,  349 => 133,  342 => 109,  339 => 100,  336 => 99,  329 => 75,  326 => 130,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  286 => 106,  272 => 3,  263 => 72,  250 => 179,  247 => 83,  236 => 81,  233 => 54,  223 => 94,  200 => 79,  191 => 148,  175 => 55,  152 => 43,  146 => 40,  84 => 25,  76 => 23,  344 => 104,  340 => 126,  335 => 70,  321 => 99,  312 => 121,  292 => 134,  282 => 101,  280 => 80,  264 => 96,  259 => 182,  252 => 180,  249 => 70,  220 => 51,  215 => 160,  190 => 50,  184 => 48,  181 => 73,  178 => 57,  161 => 51,  137 => 40,  129 => 40,  97 => 27,  70 => 20,  118 => 37,  153 => 50,  124 => 38,  100 => 29,  65 => 15,  126 => 113,  110 => 31,  104 => 30,  81 => 17,  77 => 16,  58 => 15,  90 => 81,  23 => 3,  358 => 106,  343 => 132,  341 => 103,  338 => 135,  327 => 103,  323 => 125,  309 => 90,  305 => 115,  301 => 111,  299 => 112,  289 => 107,  285 => 82,  281 => 66,  277 => 99,  271 => 75,  265 => 99,  260 => 71,  248 => 117,  228 => 92,  225 => 79,  213 => 84,  211 => 59,  202 => 66,  197 => 64,  174 => 100,  165 => 52,  148 => 40,  134 => 128,  127 => 39,  113 => 27,  34 => 5,  20 => 1,  53 => 12,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 163,  440 => 153,  437 => 152,  433 => 135,  423 => 151,  419 => 98,  417 => 140,  412 => 128,  408 => 138,  403 => 125,  397 => 131,  394 => 136,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 115,  372 => 119,  370 => 113,  365 => 154,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 72,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 111,  293 => 109,  288 => 199,  278 => 191,  274 => 190,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 75,  192 => 62,  188 => 60,  177 => 56,  169 => 54,  140 => 131,  132 => 41,  128 => 37,  107 => 90,  61 => 16,  273 => 99,  269 => 35,  254 => 68,  243 => 86,  240 => 67,  238 => 112,  235 => 171,  230 => 79,  227 => 78,  224 => 102,  221 => 76,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 142,  159 => 94,  143 => 133,  135 => 42,  119 => 36,  102 => 33,  71 => 17,  67 => 19,  63 => 17,  59 => 15,  28 => 3,  201 => 66,  196 => 19,  183 => 53,  171 => 54,  166 => 66,  163 => 65,  158 => 44,  156 => 128,  151 => 42,  142 => 44,  138 => 44,  136 => 38,  121 => 38,  117 => 28,  105 => 26,  91 => 23,  62 => 14,  49 => 9,  94 => 24,  89 => 19,  85 => 19,  75 => 15,  68 => 13,  56 => 11,  38 => 6,  87 => 21,  31 => 4,  25 => 1,  21 => 2,  26 => 6,  24 => 3,  19 => 1,  93 => 20,  88 => 26,  78 => 17,  46 => 9,  44 => 10,  27 => 17,  79 => 21,  72 => 47,  69 => 16,  47 => 11,  40 => 28,  37 => 8,  22 => 2,  246 => 87,  157 => 49,  145 => 45,  139 => 40,  131 => 127,  123 => 33,  120 => 29,  115 => 33,  111 => 30,  108 => 31,  101 => 26,  98 => 85,  96 => 28,  83 => 21,  74 => 19,  66 => 15,  55 => 9,  52 => 12,  50 => 8,  43 => 29,  41 => 7,  35 => 5,  32 => 4,  29 => 23,  209 => 157,  203 => 67,  199 => 34,  193 => 18,  189 => 62,  187 => 61,  182 => 7,  176 => 51,  173 => 55,  168 => 53,  164 => 52,  162 => 45,  154 => 48,  149 => 57,  147 => 65,  144 => 122,  141 => 51,  133 => 43,  130 => 32,  125 => 35,  122 => 30,  116 => 28,  112 => 27,  109 => 34,  106 => 30,  103 => 33,  99 => 32,  95 => 24,  92 => 27,  86 => 22,  82 => 20,  80 => 24,  73 => 17,  64 => 18,  60 => 35,  57 => 12,  54 => 12,  51 => 12,  48 => 11,  45 => 8,  42 => 10,  39 => 7,  36 => 6,  33 => 5,  30 => 4,);
    }
}
