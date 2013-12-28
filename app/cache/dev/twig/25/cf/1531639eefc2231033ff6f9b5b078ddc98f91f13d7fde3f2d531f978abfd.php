<?php

/* WebProfilerBundle:Profiler:toolbar.css.twig */
class __TwigTemplate_25cf1531639eefc2231033ff6f9b5b078ddc98f91f13d7fde3f2d531f978abfd extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    font-weight: normal;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
    content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 286
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 287
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 327
        echo "
";
        // line 328
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 329
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)); !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8); !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
    }
";
        }
        // line 339
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none;
        visibility: hidden;
    }
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 141,  672 => 345,  651 => 337,  647 => 336,  640 => 334,  626 => 325,  609 => 319,  593 => 310,  591 => 309,  563 => 298,  559 => 296,  541 => 290,  515 => 276,  497 => 267,  459 => 246,  436 => 235,  376 => 205,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  677 => 465,  660 => 340,  634 => 456,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  532 => 410,  529 => 409,  431 => 189,  325 => 129,  363 => 153,  353 => 328,  320 => 127,  345 => 147,  207 => 75,  519 => 278,  495 => 158,  489 => 262,  482 => 152,  464 => 142,  448 => 240,  421 => 131,  393 => 211,  387 => 164,  381 => 117,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  806 => 360,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  770 => 334,  751 => 325,  746 => 478,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  714 => 304,  711 => 303,  678 => 286,  673 => 285,  670 => 284,  657 => 277,  649 => 462,  644 => 335,  632 => 258,  630 => 257,  617 => 250,  611 => 247,  598 => 238,  583 => 235,  578 => 234,  569 => 300,  554 => 223,  548 => 292,  545 => 291,  520 => 208,  503 => 200,  461 => 141,  411 => 144,  402 => 215,  385 => 118,  350 => 327,  330 => 104,  313 => 183,  270 => 102,  255 => 101,  206 => 81,  229 => 87,  212 => 78,  690 => 469,  676 => 401,  664 => 342,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 326,  595 => 354,  581 => 305,  577 => 303,  575 => 233,  573 => 340,  550 => 326,  531 => 283,  526 => 310,  518 => 207,  514 => 306,  509 => 272,  481 => 189,  466 => 280,  452 => 139,  443 => 162,  439 => 195,  429 => 188,  422 => 226,  420 => 150,  396 => 234,  383 => 207,  346 => 137,  331 => 140,  316 => 97,  284 => 128,  279 => 101,  253 => 100,  401 => 172,  390 => 134,  366 => 210,  364 => 109,  359 => 114,  328 => 139,  290 => 119,  283 => 115,  198 => 42,  195 => 92,  155 => 47,  318 => 111,  306 => 286,  303 => 122,  242 => 176,  170 => 56,  150 => 55,  12 => 34,  572 => 180,  561 => 178,  557 => 295,  544 => 172,  538 => 319,  521 => 162,  517 => 404,  511 => 203,  504 => 302,  499 => 268,  487 => 192,  477 => 150,  474 => 285,  470 => 135,  449 => 198,  441 => 196,  426 => 102,  415 => 180,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 158,  369 => 141,  367 => 339,  357 => 123,  352 => 135,  333 => 98,  302 => 125,  300 => 180,  296 => 121,  275 => 105,  226 => 84,  214 => 73,  186 => 89,  160 => 57,  267 => 101,  261 => 95,  256 => 96,  244 => 115,  237 => 81,  232 => 88,  205 => 108,  172 => 57,  167 => 136,  816 => 354,  813 => 353,  808 => 262,  801 => 258,  795 => 349,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 485,  769 => 245,  767 => 244,  764 => 332,  758 => 241,  756 => 327,  753 => 326,  747 => 237,  745 => 236,  742 => 322,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 305,  712 => 233,  709 => 232,  703 => 229,  700 => 294,  698 => 471,  693 => 290,  687 => 288,  684 => 220,  682 => 467,  679 => 466,  674 => 397,  668 => 344,  665 => 212,  662 => 279,  648 => 210,  642 => 208,  637 => 205,  631 => 327,  623 => 373,  621 => 251,  615 => 198,  597 => 197,  594 => 196,  588 => 308,  586 => 236,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 414,  558 => 224,  552 => 293,  549 => 411,  546 => 165,  540 => 162,  527 => 281,  522 => 279,  508 => 159,  501 => 199,  496 => 149,  493 => 157,  491 => 156,  488 => 146,  485 => 145,  478 => 188,  475 => 143,  472 => 142,  469 => 144,  460 => 132,  457 => 245,  444 => 238,  438 => 236,  435 => 258,  427 => 133,  424 => 132,  418 => 224,  410 => 221,  406 => 126,  386 => 159,  379 => 124,  373 => 156,  368 => 116,  348 => 140,  317 => 185,  298 => 120,  294 => 61,  276 => 111,  266 => 185,  258 => 94,  241 => 93,  231 => 83,  222 => 83,  216 => 79,  210 => 77,  194 => 68,  185 => 66,  180 => 56,  114 => 40,  713 => 214,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 287,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 320,  608 => 246,  605 => 361,  602 => 317,  596 => 181,  592 => 237,  590 => 178,  585 => 307,  568 => 175,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 284,  530 => 165,  528 => 167,  525 => 280,  516 => 155,  512 => 159,  510 => 164,  507 => 202,  505 => 270,  502 => 162,  498 => 198,  492 => 295,  486 => 292,  483 => 258,  480 => 151,  473 => 254,  465 => 249,  462 => 202,  456 => 273,  453 => 199,  451 => 141,  446 => 197,  430 => 134,  428 => 230,  425 => 152,  414 => 127,  409 => 127,  400 => 214,  398 => 123,  388 => 133,  377 => 82,  374 => 81,  371 => 156,  361 => 152,  355 => 329,  349 => 133,  342 => 137,  339 => 100,  336 => 99,  329 => 188,  326 => 138,  311 => 93,  307 => 128,  297 => 179,  291 => 102,  286 => 112,  272 => 3,  263 => 95,  250 => 179,  247 => 83,  236 => 81,  233 => 87,  223 => 94,  200 => 72,  191 => 67,  175 => 58,  152 => 46,  146 => 40,  84 => 27,  76 => 27,  344 => 119,  340 => 145,  335 => 134,  321 => 135,  312 => 130,  292 => 134,  282 => 101,  280 => 80,  264 => 96,  259 => 103,  252 => 180,  249 => 70,  220 => 81,  215 => 160,  190 => 76,  184 => 63,  181 => 65,  178 => 59,  161 => 63,  137 => 47,  129 => 40,  97 => 41,  70 => 24,  118 => 49,  153 => 77,  124 => 38,  100 => 36,  65 => 22,  126 => 113,  110 => 22,  104 => 37,  81 => 23,  77 => 25,  58 => 18,  90 => 37,  23 => 3,  358 => 151,  343 => 146,  341 => 189,  338 => 135,  327 => 114,  323 => 128,  309 => 129,  305 => 115,  301 => 111,  299 => 112,  289 => 113,  285 => 175,  281 => 114,  277 => 99,  271 => 75,  265 => 105,  260 => 71,  248 => 97,  228 => 92,  225 => 79,  213 => 78,  211 => 59,  202 => 94,  197 => 69,  174 => 65,  165 => 83,  148 => 40,  134 => 39,  127 => 35,  113 => 40,  34 => 5,  20 => 1,  53 => 15,  490 => 171,  484 => 153,  479 => 256,  471 => 253,  467 => 134,  463 => 248,  454 => 244,  450 => 157,  447 => 135,  445 => 163,  440 => 153,  437 => 152,  433 => 135,  423 => 151,  419 => 98,  417 => 140,  412 => 222,  408 => 176,  403 => 125,  397 => 213,  394 => 168,  391 => 125,  389 => 160,  384 => 147,  378 => 157,  375 => 115,  372 => 119,  370 => 113,  365 => 197,  351 => 192,  347 => 191,  332 => 116,  324 => 113,  322 => 72,  319 => 98,  315 => 131,  308 => 287,  304 => 181,  295 => 178,  293 => 120,  288 => 118,  278 => 106,  274 => 110,  268 => 2,  262 => 98,  257 => 1,  251 => 105,  245 => 61,  239 => 104,  234 => 111,  218 => 75,  192 => 62,  188 => 102,  177 => 56,  169 => 54,  140 => 58,  132 => 41,  128 => 37,  107 => 90,  61 => 23,  273 => 174,  269 => 107,  254 => 68,  243 => 92,  240 => 67,  238 => 112,  235 => 89,  230 => 79,  227 => 86,  224 => 81,  221 => 76,  219 => 129,  217 => 103,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  28 => 3,  201 => 106,  196 => 92,  183 => 53,  171 => 54,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 59,  142 => 44,  138 => 44,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 30,  56 => 16,  38 => 12,  87 => 32,  31 => 8,  25 => 35,  21 => 2,  26 => 6,  24 => 3,  19 => 1,  93 => 38,  88 => 32,  78 => 26,  46 => 12,  44 => 9,  27 => 3,  79 => 18,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 33,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 31,  74 => 27,  66 => 15,  55 => 9,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 9,  32 => 7,  29 => 3,  209 => 157,  203 => 73,  199 => 93,  193 => 18,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 52,  162 => 59,  154 => 60,  149 => 57,  147 => 43,  144 => 42,  141 => 73,  133 => 43,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 27,  106 => 51,  103 => 33,  99 => 23,  95 => 39,  92 => 43,  86 => 22,  82 => 19,  80 => 29,  73 => 23,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 9,  45 => 14,  42 => 13,  39 => 10,  36 => 8,  33 => 6,  30 => 7,);
    }
}
