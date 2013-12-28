<?php

/* MYMainBundle:Main:index.html.twig */
class __TwigTemplate_8acb9fe539c6966a16ffa91b6007a821c8212ed86d49bb561e170dc31281a745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
            'article' => array($this, 'block_article'),
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
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("homepage.keywords"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("homepage.description"), "html", null, true);
    }

    // line 36
    public function block_main($context, array $blocks = array())
    {
        echo " 
<div class=\"happerning clearfix\">

     <div id=\"slider-container\" class=\"clearfix theme-default\">
     <div id=\"slider_container_2\">
        <div id=\"SliderName_2\" class=\"SliderName_2\">
          ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : $this->getContext($context, "sliders")));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 43
            echo "            ";
            if (($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"))))) {
                // line 44
                echo "              ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"), "list", array("alt" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name"), "title" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name")));
                // line 45
                echo "            ";
            }
            echo "\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
        
        <div id=\"SliderNameNavigation_2\"></div>
        <script type=\"text/javascript\">
        effectsDemo2 = 'rain,stairs,fade';
        var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 580, height: 300, effects: effectsDemo2,
                display: {
                        autoplay: 3000,
                        loading: {background: '#000000', opacity: 0.5, image: '/bundles/mymain/images/img/loading.gif'},
                        buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                        description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
                        navigation: {container: 'SliderNameNavigation_2', label: '<img src=\"/bundles/mymain/images/img/clear.gif\" />'}
                         }
                         });
          </script>
       </div>
  </div>  
  
";
        // line 70
        echo "  
  ";
        // line 95
        echo "    
 <div class=\"product\">
      <h3>Բաժիններ</h3>
      <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product1.gif\" alt=\"product\" />
          ";
        // line 103
        echo "      </a> 
\t\t  <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product2.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product3.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product4.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product5.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product6.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
      <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
          <div class=\"clear\"></div>
    </div>
    
    <div class=\"product\">
      <h3>Այլ</h3>
      <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product1.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product2.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product3.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product4.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product5.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product6.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
      <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
          <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 170
    public function block_article($context, array $blocks = array())
    {
        // line 171
        echo "<br /><br />
<article>
<ul class=\"about_list\">
    <h2 class=\"ind2\">Նորություններ</h2>
    
";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 177
            echo "  <li>
   
            ";
            // line 179
            if (($this->getAttribute((isset($context["new"]) ? $context["new"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image"))))) {
                // line 180
                echo "              <figure>
              <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "slug"))), "html", null, true);
                echo "\">
                ";
                // line 182
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image"), "home", array("alt" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "name"), "title" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "name")));
                // line 183
                echo "              </a>
              </figure>
            ";
            }
            // line 185
            echo "\t
 ";
            // line 187
            echo "           
<div>
<h6>
<a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "slug"))), "html", null, true);
            echo "\">
          ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title"), "html", null, true);
            echo "
        </a>

</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
            // line 199
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo " 
<!--Added by Me-->
<li>
<figure><img src=\"/bundles/mymain/images/img1.jpg\" alt=\"\"/></figure>
<div>
<h6>Aliquam congue fermentum</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 210
        echo "</li>
<!--  -->
 <h2 class=\"ind2\">Հետաքրքրաշարժ</h2>
<li>
<figure><img src=\"/bundles/mymain/images/img2.jpg\" alt=\"\"/></figure>
<div>
<h6>Aliquam erat</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 221
        echo "</li>
<li class=\"m_bottom_zero\">
<figure><img src=\"/bundles/mymain/images/img3.jpg\" alt=\"\"/></figure>
<div>
<h6>Donec dignissim</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 230
        echo "</li>
</ul>
</article>

";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 98,  519 => 168,  495 => 158,  489 => 155,  482 => 152,  464 => 142,  448 => 138,  421 => 131,  393 => 121,  387 => 119,  381 => 117,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  806 => 360,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  770 => 334,  751 => 325,  746 => 323,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  714 => 304,  711 => 303,  678 => 286,  673 => 285,  670 => 284,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  617 => 250,  611 => 247,  598 => 238,  583 => 235,  578 => 234,  569 => 231,  554 => 223,  548 => 221,  545 => 220,  520 => 208,  503 => 200,  461 => 141,  411 => 144,  402 => 138,  385 => 118,  350 => 111,  330 => 104,  313 => 96,  270 => 77,  255 => 181,  206 => 81,  229 => 96,  212 => 72,  690 => 410,  676 => 401,  664 => 394,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  550 => 326,  531 => 215,  526 => 310,  518 => 207,  514 => 306,  509 => 304,  481 => 189,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  429 => 154,  422 => 250,  420 => 150,  396 => 234,  383 => 224,  346 => 105,  331 => 187,  316 => 97,  284 => 128,  279 => 84,  253 => 112,  401 => 156,  390 => 134,  366 => 210,  364 => 109,  359 => 114,  328 => 230,  290 => 83,  283 => 81,  198 => 42,  195 => 92,  155 => 59,  318 => 221,  306 => 210,  303 => 90,  242 => 176,  170 => 99,  150 => 125,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 203,  504 => 302,  499 => 156,  487 => 192,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 113,  352 => 135,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  275 => 103,  226 => 106,  214 => 73,  186 => 89,  160 => 57,  267 => 120,  261 => 183,  256 => 96,  244 => 115,  237 => 81,  232 => 170,  205 => 55,  172 => 51,  167 => 136,  816 => 354,  813 => 353,  808 => 262,  801 => 258,  795 => 349,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 337,  769 => 245,  767 => 244,  764 => 332,  758 => 241,  756 => 327,  753 => 326,  747 => 237,  745 => 236,  742 => 322,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 305,  712 => 233,  709 => 232,  703 => 229,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 279,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 251,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 236,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 230,  558 => 224,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 169,  508 => 159,  501 => 199,  496 => 149,  493 => 157,  491 => 156,  488 => 146,  485 => 145,  478 => 188,  475 => 143,  472 => 142,  469 => 144,  460 => 132,  457 => 131,  444 => 137,  438 => 160,  435 => 258,  427 => 133,  424 => 132,  418 => 130,  410 => 96,  406 => 126,  386 => 95,  379 => 124,  373 => 114,  368 => 116,  348 => 104,  317 => 70,  298 => 173,  294 => 61,  276 => 57,  266 => 185,  258 => 70,  241 => 59,  231 => 93,  222 => 105,  216 => 74,  210 => 71,  194 => 74,  185 => 145,  180 => 56,  114 => 107,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 287,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 175,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 165,  528 => 167,  525 => 211,  516 => 155,  512 => 159,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 136,  425 => 152,  414 => 127,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 107,  349 => 133,  342 => 109,  339 => 100,  336 => 99,  329 => 75,  326 => 95,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  286 => 89,  272 => 3,  263 => 72,  250 => 179,  247 => 83,  236 => 85,  233 => 54,  223 => 94,  200 => 79,  191 => 148,  175 => 65,  152 => 58,  146 => 83,  84 => 16,  76 => 23,  344 => 104,  340 => 95,  335 => 106,  321 => 99,  312 => 177,  292 => 134,  282 => 101,  280 => 80,  264 => 75,  259 => 182,  252 => 180,  249 => 70,  220 => 51,  215 => 160,  190 => 50,  184 => 48,  181 => 73,  178 => 18,  161 => 45,  137 => 37,  129 => 63,  97 => 32,  70 => 20,  118 => 51,  153 => 50,  124 => 76,  100 => 98,  65 => 17,  126 => 113,  110 => 37,  104 => 52,  81 => 27,  77 => 16,  58 => 16,  90 => 20,  23 => 17,  358 => 106,  343 => 132,  341 => 103,  338 => 107,  327 => 103,  323 => 125,  309 => 90,  305 => 115,  301 => 111,  299 => 112,  289 => 90,  285 => 82,  281 => 105,  277 => 99,  271 => 75,  265 => 99,  260 => 71,  248 => 117,  228 => 92,  225 => 79,  213 => 84,  211 => 59,  202 => 66,  197 => 151,  174 => 100,  165 => 47,  148 => 69,  134 => 1,  127 => 46,  113 => 31,  34 => 26,  20 => 1,  53 => 42,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 163,  440 => 153,  437 => 152,  433 => 135,  423 => 151,  419 => 98,  417 => 140,  412 => 128,  408 => 138,  403 => 125,  397 => 131,  394 => 136,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 115,  372 => 119,  370 => 113,  365 => 116,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 72,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 200,  293 => 109,  288 => 199,  278 => 191,  274 => 190,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 50,  192 => 64,  188 => 59,  177 => 54,  169 => 68,  140 => 66,  132 => 116,  128 => 60,  107 => 36,  61 => 16,  273 => 78,  269 => 187,  254 => 68,  243 => 89,  240 => 67,  238 => 112,  235 => 171,  230 => 53,  227 => 95,  224 => 102,  221 => 163,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 142,  159 => 94,  143 => 50,  135 => 61,  119 => 487,  102 => 33,  71 => 28,  67 => 28,  63 => 45,  59 => 33,  28 => 9,  201 => 43,  196 => 63,  183 => 69,  171 => 62,  166 => 66,  163 => 65,  158 => 52,  156 => 128,  151 => 73,  142 => 34,  138 => 119,  136 => 37,  121 => 61,  117 => 34,  105 => 103,  91 => 64,  62 => 82,  49 => 10,  94 => 45,  89 => 30,  85 => 26,  75 => 32,  68 => 22,  56 => 16,  38 => 9,  87 => 188,  31 => 4,  25 => 1,  21 => 2,  26 => 2,  24 => 4,  19 => 15,  93 => 21,  88 => 36,  78 => 24,  46 => 13,  44 => 8,  27 => 17,  79 => 26,  72 => 47,  69 => 9,  47 => 20,  40 => 18,  37 => 5,  22 => 3,  246 => 177,  157 => 47,  145 => 70,  139 => 62,  131 => 43,  123 => 45,  120 => 110,  115 => 42,  111 => 47,  108 => 104,  101 => 24,  98 => 47,  96 => 38,  83 => 28,  74 => 11,  66 => 39,  55 => 13,  52 => 78,  50 => 29,  43 => 36,  41 => 8,  35 => 20,  32 => 7,  29 => 6,  209 => 157,  203 => 154,  199 => 34,  193 => 62,  189 => 76,  187 => 70,  182 => 57,  176 => 72,  173 => 139,  168 => 61,  164 => 78,  162 => 11,  154 => 40,  149 => 57,  147 => 65,  144 => 122,  141 => 51,  133 => 64,  130 => 9,  125 => 62,  122 => 488,  116 => 26,  112 => 40,  109 => 39,  106 => 26,  103 => 34,  99 => 32,  95 => 95,  92 => 70,  86 => 29,  82 => 34,  80 => 26,  73 => 22,  64 => 27,  60 => 44,  57 => 43,  54 => 12,  51 => 12,  48 => 8,  45 => 25,  42 => 19,  39 => 21,  36 => 16,  33 => 14,  30 => 13,);
    }
}
