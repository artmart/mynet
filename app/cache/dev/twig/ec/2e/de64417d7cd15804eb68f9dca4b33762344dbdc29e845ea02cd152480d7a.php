<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_ec2ede64417d7cd15804eb68f9dca4b33762344dbdc29e845ea02cd152480d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig");

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        // line 16
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 158,  500 => 157,  488 => 153,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 125,  352 => 121,  333 => 117,  302 => 114,  300 => 113,  296 => 111,  226 => 67,  214 => 61,  186 => 54,  174 => 53,  127 => 34,  267 => 73,  244 => 66,  237 => 64,  232 => 63,  211 => 56,  205 => 59,  172 => 52,  167 => 79,  134 => 37,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 177,  548 => 165,  526 => 164,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  283 => 58,  275 => 77,  271 => 55,  261 => 71,  253 => 47,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 177,  185 => 47,  180 => 120,  148 => 44,  114 => 50,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 127,  358 => 113,  355 => 122,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 59,  286 => 80,  272 => 76,  250 => 67,  247 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  84 => 36,  76 => 35,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  285 => 81,  282 => 80,  280 => 79,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 65,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 119,  161 => 46,  129 => 56,  70 => 25,  118 => 32,  153 => 43,  124 => 23,  65 => 25,  113 => 48,  110 => 29,  104 => 23,  81 => 30,  58 => 12,  90 => 18,  23 => 12,  263 => 71,  256 => 69,  249 => 70,  241 => 95,  236 => 35,  225 => 60,  213 => 86,  207 => 83,  197 => 56,  191 => 50,  175 => 118,  160 => 48,  155 => 66,  152 => 99,  146 => 34,  137 => 27,  126 => 55,  100 => 43,  97 => 87,  77 => 13,  34 => 18,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 108,  278 => 94,  274 => 77,  268 => 54,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 55,  188 => 48,  177 => 42,  169 => 51,  140 => 41,  132 => 57,  128 => 35,  107 => 48,  61 => 27,  273 => 75,  269 => 75,  254 => 68,  243 => 68,  240 => 86,  238 => 36,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 88,  219 => 29,  217 => 58,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 31,  102 => 142,  71 => 32,  67 => 33,  63 => 31,  59 => 23,  28 => 14,  201 => 57,  196 => 52,  183 => 121,  171 => 61,  166 => 50,  163 => 49,  158 => 37,  156 => 44,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 52,  117 => 49,  105 => 143,  91 => 75,  62 => 24,  49 => 23,  94 => 40,  89 => 42,  85 => 83,  75 => 32,  68 => 26,  56 => 27,  38 => 7,  87 => 17,  31 => 15,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 138,  88 => 74,  78 => 36,  46 => 9,  44 => 21,  27 => 12,  79 => 34,  72 => 31,  69 => 33,  47 => 25,  40 => 15,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 31,  131 => 25,  123 => 33,  120 => 47,  115 => 27,  111 => 30,  108 => 144,  101 => 46,  98 => 140,  96 => 44,  83 => 64,  74 => 78,  66 => 32,  55 => 24,  52 => 23,  50 => 20,  43 => 16,  41 => 23,  35 => 20,  32 => 14,  29 => 15,  209 => 76,  203 => 278,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 55,  130 => 35,  125 => 34,  122 => 43,  116 => 30,  112 => 30,  109 => 44,  106 => 35,  103 => 34,  99 => 45,  95 => 19,  92 => 43,  86 => 65,  82 => 38,  80 => 14,  73 => 34,  64 => 31,  60 => 3,  57 => 26,  54 => 26,  51 => 19,  48 => 67,  45 => 21,  42 => 20,  39 => 18,  36 => 16,  33 => 17,  30 => 15,);
    }
}
