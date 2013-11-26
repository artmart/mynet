<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_7e0432c58c07a2f188661580e679a94f706902efc63a00e296ab1132af6ae68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<h4>";
        // line 12
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h4>

<div class=\"sonata-user-show\">

    <div class=\"span2 well\" style=\"padding: 8px 0;\">
        ";
        // line 17
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 20
        echo "    </div>

    <div class=\"span10\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "fos_user_success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "            <div class=\"alert alert-success\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "sonata_user_success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "            <div class=\"alert alert-success\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "SonataUserBundle"), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 36
        echo "    </div>

</div>
";
    }

    // line 12
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 17
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
        ";
    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 35
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  202 => 73,  318 => 122,  306 => 140,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 22,  165 => 59,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 75,  186 => 111,  174 => 23,  127 => 76,  267 => 156,  244 => 66,  237 => 86,  232 => 136,  211 => 56,  205 => 84,  172 => 52,  167 => 60,  134 => 55,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 71,  253 => 148,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 79,  185 => 68,  180 => 120,  148 => 53,  114 => 102,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 98,  228 => 83,  223 => 66,  200 => 55,  84 => 35,  76 => 34,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 80,  215 => 78,  190 => 49,  184 => 74,  181 => 79,  178 => 119,  161 => 70,  129 => 46,  70 => 22,  118 => 103,  153 => 63,  124 => 51,  65 => 28,  113 => 41,  110 => 46,  104 => 35,  81 => 25,  58 => 25,  90 => 38,  23 => 13,  263 => 124,  256 => 96,  249 => 89,  241 => 101,  236 => 108,  225 => 95,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 76,  160 => 18,  155 => 55,  152 => 92,  146 => 56,  137 => 48,  126 => 45,  100 => 94,  97 => 63,  77 => 33,  34 => 16,  20 => 11,  53 => 22,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 86,  234 => 84,  218 => 91,  192 => 87,  188 => 68,  177 => 72,  169 => 73,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 29,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 43,  102 => 39,  71 => 29,  67 => 30,  63 => 27,  59 => 14,  28 => 14,  201 => 72,  196 => 71,  183 => 121,  171 => 102,  166 => 100,  163 => 66,  158 => 64,  156 => 93,  151 => 51,  142 => 50,  138 => 36,  136 => 109,  121 => 75,  117 => 41,  105 => 27,  91 => 17,  62 => 24,  49 => 22,  94 => 18,  89 => 35,  85 => 12,  75 => 28,  68 => 25,  56 => 28,  38 => 17,  87 => 38,  31 => 15,  25 => 12,  21 => 12,  26 => 2,  24 => 14,  19 => 11,  93 => 35,  88 => 33,  78 => 36,  46 => 19,  44 => 24,  27 => 16,  79 => 31,  72 => 25,  69 => 30,  47 => 25,  40 => 23,  37 => 16,  22 => 11,  246 => 69,  157 => 17,  145 => 60,  139 => 49,  131 => 45,  123 => 44,  120 => 50,  115 => 43,  111 => 41,  108 => 99,  101 => 34,  98 => 36,  96 => 40,  83 => 34,  74 => 19,  66 => 24,  55 => 24,  52 => 23,  50 => 11,  43 => 20,  41 => 18,  35 => 20,  32 => 15,  29 => 25,  209 => 95,  203 => 122,  199 => 52,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 65,  173 => 71,  168 => 69,  164 => 19,  162 => 57,  154 => 16,  149 => 36,  147 => 61,  144 => 61,  141 => 66,  133 => 49,  130 => 54,  125 => 45,  122 => 104,  116 => 43,  112 => 48,  109 => 39,  106 => 40,  103 => 39,  99 => 31,  95 => 36,  92 => 61,  86 => 31,  82 => 33,  80 => 34,  73 => 33,  64 => 30,  60 => 26,  57 => 24,  54 => 22,  51 => 21,  48 => 23,  45 => 19,  42 => 9,  39 => 19,  36 => 6,  33 => 17,  30 => 16,);
    }
}
