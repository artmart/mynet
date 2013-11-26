<?php

/* SonataUserBundle:Security:login.html.twig */
class __TwigTemplate_9dfca91133a0d5b22f5a4d7bb8b6d9651c165b1e7c6167f08c07e5436de57b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"control-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></div>
        </div>


        <div class=\"control-group\">
            <label for=\"password\" class=\"control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\"><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /></div>
        </div>

        <div class=\"control-group\">
            <label for=\"remember_me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </label>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            </div>
        </div>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  202 => 73,  318 => 122,  306 => 140,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 22,  165 => 59,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 75,  186 => 69,  174 => 23,  127 => 76,  267 => 156,  244 => 66,  237 => 86,  232 => 136,  211 => 56,  205 => 84,  172 => 64,  167 => 60,  134 => 50,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 71,  253 => 148,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 79,  185 => 68,  180 => 66,  148 => 47,  114 => 38,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 98,  228 => 83,  223 => 66,  200 => 55,  84 => 42,  76 => 34,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 80,  215 => 78,  190 => 70,  184 => 74,  181 => 79,  178 => 119,  161 => 70,  129 => 42,  70 => 22,  118 => 40,  153 => 63,  124 => 46,  65 => 29,  113 => 41,  110 => 41,  104 => 35,  81 => 32,  58 => 25,  90 => 31,  23 => 13,  263 => 124,  256 => 96,  249 => 89,  241 => 101,  236 => 108,  225 => 95,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 76,  160 => 18,  155 => 55,  152 => 56,  146 => 56,  137 => 48,  126 => 45,  100 => 94,  97 => 63,  77 => 33,  34 => 16,  20 => 1,  53 => 23,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 86,  234 => 84,  218 => 91,  192 => 87,  188 => 68,  177 => 72,  169 => 73,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 29,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 43,  102 => 35,  71 => 25,  67 => 24,  63 => 27,  59 => 23,  28 => 14,  201 => 72,  196 => 71,  183 => 121,  171 => 102,  166 => 61,  163 => 66,  158 => 59,  156 => 93,  151 => 51,  142 => 46,  138 => 51,  136 => 44,  121 => 41,  117 => 41,  105 => 27,  91 => 17,  62 => 23,  49 => 20,  94 => 18,  89 => 37,  85 => 12,  75 => 36,  68 => 22,  56 => 22,  38 => 25,  87 => 38,  31 => 15,  25 => 12,  21 => 12,  26 => 2,  24 => 14,  19 => 11,  93 => 46,  88 => 34,  78 => 30,  46 => 9,  44 => 20,  27 => 16,  79 => 31,  72 => 25,  69 => 30,  47 => 20,  40 => 18,  37 => 6,  22 => 11,  246 => 69,  157 => 17,  145 => 60,  139 => 49,  131 => 45,  123 => 44,  120 => 45,  115 => 43,  111 => 41,  108 => 37,  101 => 34,  98 => 36,  96 => 36,  83 => 34,  74 => 26,  66 => 24,  55 => 21,  52 => 23,  50 => 30,  43 => 19,  41 => 17,  35 => 5,  32 => 5,  29 => 3,  209 => 95,  203 => 122,  199 => 52,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 65,  173 => 71,  168 => 69,  164 => 19,  162 => 60,  154 => 16,  149 => 36,  147 => 61,  144 => 54,  141 => 66,  133 => 43,  130 => 49,  125 => 45,  122 => 104,  116 => 44,  112 => 48,  109 => 39,  106 => 40,  103 => 39,  99 => 34,  95 => 33,  92 => 32,  86 => 29,  82 => 31,  80 => 28,  73 => 33,  64 => 29,  60 => 17,  57 => 24,  54 => 14,  51 => 21,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 17,  33 => 17,  30 => 16,);
    }
}
