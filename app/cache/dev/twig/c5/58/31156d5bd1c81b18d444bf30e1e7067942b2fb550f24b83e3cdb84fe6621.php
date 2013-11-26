<?php

/* SonataMediaBundle:Provider:view_youtube.html.twig */
class __TwigTemplate_c55831156d5bd1c81b18d444bf30e1e7067942b2fb550f24b83e3cdb84fe6621 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "html5")) {
            // line 13
            echo "    <iframe width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "height"), "html", null, true);
            echo "\" src=\"//www.youtube.com/embed/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_url_parameters"), "html", null, true);
            echo "\" frameborder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "border"), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "allowFullScreen")) {
                echo " allowfullscreen";
            }
            echo "></iframe>
";
        } else {
            // line 15
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "allowFullScreen")) {
                // line 16
                echo "        ";
                $context["allowFullScreen"] = "true";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["allowFullScreen"] = "false";
                // line 19
                echo "    ";
            }
            // line 20
            echo "    <object width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "height"), "html", null, true);
            echo "\">
        <param name=\"movie\" value=\"//www.youtube.com/v/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_url_parameters"), "html", null, true);
            echo "\"></param>
        <param name=\"allowFullScreen\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["allowFullScreen"]) ? $context["allowFullScreen"] : $this->getContext($context, "allowFullScreen")), "html", null, true);
            echo "\"></param>
        <param name=\"allowscriptaccess\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "allowScriptAccess"), "html", null, true);
            echo "\"></param>
        <param name=\"wmode\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "wmode"), "html", null, true);
            echo "\">
        
        <embed
            src=\"//www.youtube.com/v/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_url_parameters"), "html", null, true);
            echo "\"
            type=\"application/x-shockwave-flash\"
            allowscriptaccess=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "allowScriptAccess"), "html", null, true);
            echo "\"
            allowfullscreen=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["allowFullScreen"]) ? $context["allowFullScreen"] : $this->getContext($context, "allowFullScreen")), "html", null, true);
            echo "\"
            width=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "width"), "html", null, true);
            echo "\"
            height=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "height"), "html", null, true);
            echo "\"
            wmode=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "wmode"), "html", null, true);
            echo "\">
        </embed>
    </object>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  202 => 73,  318 => 122,  306 => 140,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 61,  165 => 59,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 75,  186 => 111,  174 => 64,  127 => 76,  267 => 156,  244 => 66,  237 => 86,  232 => 136,  211 => 56,  205 => 59,  172 => 52,  167 => 60,  134 => 58,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 71,  253 => 148,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 87,  185 => 68,  180 => 120,  148 => 53,  114 => 71,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 62,  228 => 83,  223 => 66,  200 => 55,  84 => 27,  76 => 57,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 80,  215 => 78,  190 => 49,  184 => 47,  181 => 79,  178 => 119,  161 => 70,  129 => 56,  70 => 22,  118 => 49,  153 => 56,  124 => 31,  65 => 29,  113 => 41,  110 => 77,  104 => 67,  81 => 25,  58 => 23,  90 => 34,  23 => 13,  263 => 124,  256 => 96,  249 => 89,  241 => 95,  236 => 108,  225 => 60,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 76,  160 => 58,  155 => 55,  152 => 92,  146 => 56,  137 => 58,  126 => 48,  100 => 36,  97 => 63,  77 => 27,  34 => 16,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 86,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  192 => 87,  188 => 68,  177 => 63,  169 => 73,  140 => 53,  132 => 57,  128 => 58,  107 => 33,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 28,  102 => 37,  71 => 28,  67 => 28,  63 => 24,  59 => 49,  28 => 15,  201 => 72,  196 => 71,  183 => 121,  171 => 102,  166 => 100,  163 => 60,  158 => 74,  156 => 93,  151 => 45,  142 => 50,  138 => 36,  136 => 48,  121 => 75,  117 => 41,  105 => 27,  91 => 29,  62 => 28,  49 => 22,  94 => 40,  89 => 35,  85 => 34,  75 => 28,  68 => 30,  56 => 40,  38 => 16,  87 => 38,  31 => 15,  25 => 13,  21 => 12,  26 => 14,  24 => 13,  19 => 11,  93 => 68,  88 => 60,  78 => 24,  46 => 35,  44 => 19,  27 => 14,  79 => 34,  72 => 25,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 69,  157 => 58,  145 => 52,  139 => 49,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 41,  108 => 39,  101 => 73,  98 => 43,  96 => 40,  83 => 32,  74 => 23,  66 => 25,  55 => 21,  52 => 20,  50 => 22,  43 => 33,  41 => 19,  35 => 17,  32 => 16,  29 => 15,  209 => 95,  203 => 122,  199 => 52,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 65,  173 => 62,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 90,  144 => 61,  141 => 66,  133 => 49,  130 => 46,  125 => 45,  122 => 44,  116 => 43,  112 => 48,  109 => 69,  106 => 40,  103 => 32,  99 => 31,  95 => 30,  92 => 61,  86 => 64,  82 => 33,  80 => 41,  73 => 29,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  45 => 16,  42 => 15,  39 => 18,  36 => 17,  33 => 15,  30 => 14,);
    }
}
