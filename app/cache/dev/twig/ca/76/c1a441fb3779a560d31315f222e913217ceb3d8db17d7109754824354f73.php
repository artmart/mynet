<?php

/* SonataMediaBundle:Provider:thumbnail.html.twig */
class __TwigTemplate_ca76c1a441fb3779a560d31315f222e913217ceb3d8db17d7109754824354f73 extends Twig_Template
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
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  346 => 196,  331 => 187,  316 => 121,  284 => 106,  279 => 104,  253 => 148,  401 => 156,  390 => 150,  366 => 210,  364 => 139,  359 => 138,  328 => 124,  290 => 106,  283 => 166,  198 => 69,  195 => 68,  155 => 53,  318 => 122,  306 => 140,  303 => 139,  242 => 140,  170 => 73,  150 => 55,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 160,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 125,  352 => 135,  333 => 117,  302 => 114,  300 => 138,  296 => 109,  275 => 103,  226 => 67,  214 => 98,  186 => 111,  160 => 58,  267 => 156,  261 => 91,  256 => 96,  244 => 85,  237 => 86,  232 => 136,  205 => 59,  172 => 52,  167 => 79,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 159,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 132,  457 => 131,  444 => 134,  438 => 133,  435 => 258,  427 => 130,  424 => 254,  418 => 128,  410 => 96,  406 => 158,  386 => 95,  379 => 119,  373 => 142,  368 => 117,  348 => 80,  317 => 70,  298 => 173,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 84,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 87,  185 => 68,  180 => 62,  114 => 71,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 169,  533 => 160,  530 => 165,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 136,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 75,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  286 => 132,  272 => 158,  263 => 124,  250 => 93,  247 => 67,  236 => 108,  233 => 62,  223 => 66,  200 => 70,  191 => 69,  175 => 76,  152 => 92,  146 => 49,  84 => 27,  76 => 57,  344 => 97,  340 => 95,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  282 => 80,  280 => 101,  264 => 72,  259 => 70,  252 => 88,  249 => 70,  220 => 80,  215 => 78,  190 => 49,  184 => 63,  181 => 79,  178 => 123,  161 => 70,  137 => 46,  129 => 56,  97 => 63,  70 => 22,  118 => 49,  153 => 56,  124 => 31,  100 => 36,  65 => 29,  126 => 42,  110 => 77,  104 => 67,  81 => 25,  77 => 27,  58 => 23,  90 => 38,  23 => 13,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 74,  323 => 125,  309 => 117,  305 => 115,  301 => 111,  299 => 112,  289 => 81,  285 => 81,  281 => 105,  277 => 100,  271 => 108,  265 => 99,  260 => 98,  248 => 115,  228 => 83,  225 => 77,  213 => 126,  211 => 56,  202 => 77,  197 => 119,  174 => 64,  165 => 59,  148 => 63,  134 => 45,  127 => 76,  113 => 41,  34 => 14,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 267,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 98,  417 => 140,  412 => 174,  408 => 138,  403 => 157,  397 => 131,  394 => 152,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 118,  332 => 125,  324 => 116,  322 => 72,  319 => 90,  315 => 118,  308 => 67,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 98,  268 => 126,  262 => 51,  257 => 149,  251 => 101,  245 => 83,  239 => 83,  234 => 80,  218 => 77,  192 => 65,  188 => 48,  177 => 61,  169 => 57,  140 => 53,  132 => 44,  128 => 58,  107 => 33,  61 => 25,  273 => 75,  269 => 100,  254 => 68,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 48,  135 => 81,  119 => 28,  102 => 37,  71 => 28,  67 => 28,  63 => 23,  59 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 125,  171 => 102,  166 => 100,  163 => 60,  158 => 74,  156 => 93,  151 => 45,  142 => 60,  138 => 36,  136 => 60,  121 => 75,  117 => 50,  105 => 27,  91 => 29,  62 => 28,  49 => 20,  94 => 40,  89 => 35,  85 => 34,  75 => 28,  68 => 30,  56 => 24,  38 => 15,  87 => 33,  31 => 15,  25 => 13,  21 => 12,  26 => 13,  24 => 14,  19 => 11,  93 => 68,  88 => 60,  78 => 24,  46 => 20,  44 => 19,  27 => 14,  79 => 34,  72 => 25,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 86,  157 => 58,  145 => 52,  139 => 59,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 41,  108 => 39,  101 => 73,  98 => 37,  96 => 40,  83 => 32,  74 => 23,  66 => 25,  55 => 21,  52 => 20,  50 => 22,  43 => 33,  41 => 18,  35 => 17,  32 => 16,  29 => 14,  209 => 73,  203 => 122,  199 => 52,  193 => 50,  189 => 64,  187 => 86,  182 => 79,  176 => 65,  173 => 116,  168 => 60,  164 => 71,  162 => 55,  154 => 66,  149 => 50,  147 => 90,  144 => 61,  141 => 66,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 43,  112 => 48,  109 => 69,  106 => 35,  103 => 32,  99 => 31,  95 => 30,  92 => 61,  86 => 64,  82 => 33,  80 => 41,  73 => 29,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 20,  48 => 17,  45 => 19,  42 => 18,  39 => 18,  36 => 17,  33 => 15,  30 => 14,);
    }
}
