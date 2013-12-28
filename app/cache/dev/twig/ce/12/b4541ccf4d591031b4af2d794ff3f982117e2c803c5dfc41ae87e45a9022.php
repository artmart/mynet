<?php

/* MYMainBundle:Main:layout.html.twig */
class __TwigTemplate_ce12b4541ccf4d591031b4af2d794ff3f982117e2c803c5dfc41ae87e45a9022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'meta' => array($this, 'block_meta'),
            'main' => array($this, 'block_main'),
            'article' => array($this, 'block_article'),
            'rightmenu' => array($this, 'block_rightmenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"hy\">
  ";
        // line 3
        ob_start();
        // line 4
        echo "  <head>
    <meta charset=\"utf-8\"/> 
    <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
  ";
        // line 10
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    
\t\t";
        // line 18
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "\t\t

    ";
        // line 50
        echo "    
    
\t\t";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 69
        echo "    
   ";
        // line 70
        $this->displayBlock('meta', $context, $blocks);
        // line 71
        echo "  </head>
  <body>
<div class=\"block1\">
<div id=\"wrapper\">
    <div class=\"clearfix\" id=\"header\">
        
        ";
        // line 78
        echo "         ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "my_homepage")) {
            echo " 
          <img src=\"/bundles/mymain/images/logo.jpg\" class=\"logo_image\" alt=\"MyNet.am\" />
\t\t\t\t ";
        } else {
            // line 81
            echo "         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
          <img src=\"/bundles/mymain/images/logo1.png\" class=\"logo_image\" alt=\"MyNet.am\" />
         </a>
         ";
        }
        // line 85
        echo "       
    </div>    
        
       ";
        // line 88
        echo " 
       <div id='cssmenu'>
        ";
        // line 90
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:topMenu", array("currentAsLink" => true));
        echo "    
       </div>
      </div>
    </div>
   
<div id=\"wrapper\">
<div id=\"container\" class=\"clearfix\">
";
        // line 107
        echo "            
";
        // line 116
        echo "   
";
        // line 122
        echo "

 
<div id=\"content\" class=\"clearfix\">
   ";
        // line 126
        $this->displayBlock('main', $context, $blocks);
        // line 127
        echo "</div>
";
        // line 128
        $this->displayBlock('article', $context, $blocks);
        // line 129
        $this->displayBlock('rightmenu', $context, $blocks);
        echo "    
";
        // line 131
        echo "<div  class=\"clearfix\">
";
        // line 133
        echo "
";
        // line 135
        $this->env->loadTemplate("MYMainBundle:Main:socials.html.twig")->display($context);
        // line 136
        echo "</div>
</div>  
</div>

         
<div class=\"block1\"></div>
<div id=\"footer\">
  &COPY; 2013 - ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("texts.footertexts"), "html", null, true);
        echo "
  <br><br>
  <div id=\"circleBlock\">
    <!-- Circle.Am: DO NOT MODIFY THIS CODE: Start -->
   
  <!-- Circle.Am: End -->
  
</div>
</div>
</body>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 154
        echo "</html>";
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("meta.title"), "html", null, true);
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab95966_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_0") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.min_1.js");
            // line 33
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_1") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.fancybox-1.3.4_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_2") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.jcarousel.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_3") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.prettyPhoto_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_4") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_content_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_5") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_gallery_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_6") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_plugins_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_7") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_ready_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_8") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_sliderman.1.3.7_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_9") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_messages_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "ab95966"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966") : $this->env->getExtension('assets')->getAssetUrl("js/jquery.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "\t\t";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "06d49cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_1.css");
            // line 66
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_1") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_2") : $this->env->getExtension('assets')->getAssetUrl("css/main_prettyPhoto_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_3") : $this->env->getExtension('assets')->getAssetUrl("css/main_menu_4.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_4") : $this->env->getExtension('assets')->getAssetUrl("css/main_main_5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_5") : $this->env->getExtension('assets')->getAssetUrl("css/main_sliderman_6.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_6") : $this->env->getExtension('assets')->getAssetUrl("css/main_carousel_7.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // asset "06d49cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 68
        echo "\t\t";
    }

    // line 70
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 126
    public function block_main($context, array $blocks = array())
    {
    }

    // line 128
    public function block_article($context, array $blocks = array())
    {
    }

    // line 129
    public function block_rightmenu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 128,  207 => 98,  519 => 168,  495 => 158,  489 => 155,  482 => 152,  464 => 142,  448 => 138,  421 => 131,  393 => 121,  387 => 119,  381 => 117,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  806 => 360,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  770 => 334,  751 => 325,  746 => 323,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  714 => 304,  711 => 303,  678 => 286,  673 => 285,  670 => 284,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  617 => 250,  611 => 247,  598 => 238,  583 => 235,  578 => 234,  569 => 231,  554 => 223,  548 => 221,  545 => 220,  520 => 208,  503 => 200,  461 => 141,  411 => 144,  402 => 138,  385 => 118,  350 => 129,  330 => 104,  313 => 96,  270 => 77,  255 => 181,  206 => 81,  229 => 96,  212 => 72,  690 => 410,  676 => 401,  664 => 394,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  550 => 326,  531 => 215,  526 => 310,  518 => 207,  514 => 306,  509 => 304,  481 => 189,  466 => 280,  452 => 139,  443 => 162,  439 => 260,  429 => 154,  422 => 250,  420 => 150,  396 => 234,  383 => 224,  346 => 105,  331 => 68,  316 => 97,  284 => 128,  279 => 84,  253 => 112,  401 => 156,  390 => 134,  366 => 210,  364 => 109,  359 => 114,  328 => 230,  290 => 83,  283 => 81,  198 => 42,  195 => 92,  155 => 59,  318 => 221,  306 => 210,  303 => 90,  242 => 176,  170 => 99,  150 => 125,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 203,  504 => 302,  499 => 156,  487 => 192,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 129,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 113,  352 => 135,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  275 => 103,  226 => 106,  214 => 73,  186 => 89,  160 => 57,  267 => 120,  261 => 183,  256 => 96,  244 => 115,  237 => 81,  232 => 170,  205 => 55,  172 => 51,  167 => 136,  816 => 354,  813 => 353,  808 => 262,  801 => 258,  795 => 349,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 337,  769 => 245,  767 => 244,  764 => 332,  758 => 241,  756 => 327,  753 => 326,  747 => 237,  745 => 236,  742 => 322,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 305,  712 => 233,  709 => 232,  703 => 229,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 279,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 251,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 236,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 230,  558 => 224,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 169,  508 => 159,  501 => 199,  496 => 149,  493 => 157,  491 => 156,  488 => 146,  485 => 145,  478 => 188,  475 => 143,  472 => 142,  469 => 144,  460 => 132,  457 => 131,  444 => 137,  438 => 160,  435 => 258,  427 => 133,  424 => 132,  418 => 130,  410 => 96,  406 => 126,  386 => 95,  379 => 124,  373 => 114,  368 => 116,  348 => 104,  317 => 70,  298 => 173,  294 => 61,  276 => 53,  266 => 185,  258 => 70,  241 => 59,  231 => 93,  222 => 105,  216 => 74,  210 => 71,  194 => 74,  185 => 145,  180 => 56,  114 => 107,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 287,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 175,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 165,  528 => 167,  525 => 211,  516 => 155,  512 => 159,  510 => 164,  507 => 202,  505 => 163,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 134,  428 => 136,  425 => 152,  414 => 127,  409 => 127,  400 => 124,  398 => 123,  388 => 133,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 107,  349 => 133,  342 => 109,  339 => 100,  336 => 99,  329 => 75,  326 => 95,  311 => 93,  307 => 115,  297 => 86,  291 => 91,  286 => 89,  272 => 3,  263 => 72,  250 => 179,  247 => 83,  236 => 85,  233 => 54,  223 => 94,  200 => 79,  191 => 148,  175 => 65,  152 => 58,  146 => 135,  84 => 16,  76 => 23,  344 => 104,  340 => 126,  335 => 70,  321 => 99,  312 => 177,  292 => 134,  282 => 101,  280 => 80,  264 => 75,  259 => 182,  252 => 180,  249 => 70,  220 => 51,  215 => 160,  190 => 50,  184 => 48,  181 => 73,  178 => 18,  161 => 45,  137 => 37,  129 => 126,  97 => 32,  70 => 69,  118 => 51,  153 => 50,  124 => 76,  100 => 98,  65 => 17,  126 => 113,  110 => 37,  104 => 52,  81 => 27,  77 => 16,  58 => 16,  90 => 81,  23 => 17,  358 => 106,  343 => 132,  341 => 103,  338 => 107,  327 => 103,  323 => 125,  309 => 90,  305 => 115,  301 => 111,  299 => 112,  289 => 90,  285 => 82,  281 => 66,  277 => 99,  271 => 75,  265 => 99,  260 => 71,  248 => 117,  228 => 92,  225 => 79,  213 => 84,  211 => 59,  202 => 66,  197 => 151,  174 => 100,  165 => 47,  148 => 136,  134 => 128,  127 => 46,  113 => 31,  34 => 4,  20 => 1,  53 => 42,  490 => 171,  484 => 153,  479 => 151,  471 => 183,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 163,  440 => 153,  437 => 152,  433 => 135,  423 => 151,  419 => 98,  417 => 140,  412 => 128,  408 => 138,  403 => 125,  397 => 131,  394 => 136,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 115,  372 => 119,  370 => 113,  365 => 116,  351 => 106,  347 => 118,  332 => 98,  324 => 102,  322 => 72,  319 => 98,  315 => 92,  308 => 92,  304 => 96,  295 => 200,  293 => 109,  288 => 199,  278 => 191,  274 => 190,  268 => 2,  262 => 92,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 50,  192 => 64,  188 => 59,  177 => 6,  169 => 68,  140 => 131,  132 => 116,  128 => 60,  107 => 90,  61 => 16,  273 => 52,  269 => 35,  254 => 68,  243 => 89,  240 => 67,  238 => 112,  235 => 171,  230 => 53,  227 => 95,  224 => 102,  221 => 163,  219 => 129,  217 => 103,  208 => 45,  204 => 73,  179 => 142,  159 => 94,  143 => 133,  135 => 61,  119 => 487,  102 => 33,  71 => 28,  67 => 28,  63 => 45,  59 => 33,  28 => 1,  201 => 33,  196 => 19,  183 => 69,  171 => 62,  166 => 66,  163 => 65,  158 => 52,  156 => 128,  151 => 73,  142 => 34,  138 => 119,  136 => 129,  121 => 61,  117 => 107,  105 => 103,  91 => 64,  62 => 82,  49 => 10,  94 => 45,  89 => 30,  85 => 26,  75 => 71,  68 => 52,  56 => 16,  38 => 6,  87 => 188,  31 => 4,  25 => 1,  21 => 2,  26 => 2,  24 => 4,  19 => 15,  93 => 21,  88 => 36,  78 => 24,  46 => 10,  44 => 8,  27 => 17,  79 => 26,  72 => 47,  69 => 9,  47 => 20,  40 => 18,  37 => 5,  22 => 3,  246 => 177,  157 => 143,  145 => 70,  139 => 62,  131 => 127,  123 => 122,  120 => 116,  115 => 42,  111 => 47,  108 => 104,  101 => 24,  98 => 85,  96 => 38,  83 => 78,  74 => 11,  66 => 39,  55 => 13,  52 => 78,  50 => 29,  43 => 36,  41 => 8,  35 => 20,  32 => 3,  29 => 6,  209 => 157,  203 => 154,  199 => 34,  193 => 18,  189 => 76,  187 => 10,  182 => 7,  176 => 72,  173 => 154,  168 => 61,  164 => 78,  162 => 11,  154 => 40,  149 => 57,  147 => 65,  144 => 122,  141 => 51,  133 => 64,  130 => 9,  125 => 62,  122 => 488,  116 => 26,  112 => 40,  109 => 39,  106 => 26,  103 => 88,  99 => 32,  95 => 95,  92 => 70,  86 => 29,  82 => 34,  80 => 26,  73 => 70,  64 => 50,  60 => 35,  57 => 18,  54 => 12,  51 => 12,  48 => 8,  45 => 25,  42 => 7,  39 => 21,  36 => 16,  33 => 14,  30 => 13,);
    }
}
