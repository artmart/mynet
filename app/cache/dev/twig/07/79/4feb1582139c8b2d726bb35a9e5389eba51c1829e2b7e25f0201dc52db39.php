<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_07794feb1582139c8b2d726bb35a9e5389eba51c1829e2b7e25f0201dc52db39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 21
        echo "
    <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
        <div class=\"control-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_gender"));
        echo "
            <div class=\"controls\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_firstname"));
        echo "
            <div class=\"controls\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_lastname"));
        echo "
            <div class=\"controls\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'errors');
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_website"));
        echo "
            <div class=\"controls\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth"), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_dob"));
        echo "
            <div class=\"controls\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_biography"));
        echo "
            <div class=\"controls\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale"), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_locale"));
        echo "
            <div class=\"controls\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone"), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_timezone"));
        echo "
            <div class=\"controls\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_phone"));
        echo "
            <div class=\"controls\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "</div>
        </div>

        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" name=\"submit\"  class=\"btn btn-primary\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 117,  305 => 115,  284 => 106,  281 => 105,  279 => 104,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 136,  294 => 111,  276 => 102,  270 => 100,  202 => 73,  318 => 122,  306 => 140,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 22,  165 => 59,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 75,  186 => 69,  174 => 23,  127 => 76,  267 => 156,  244 => 66,  237 => 86,  232 => 136,  211 => 56,  205 => 84,  172 => 64,  167 => 60,  134 => 50,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 71,  253 => 148,  231 => 33,  222 => 81,  216 => 99,  210 => 75,  194 => 79,  185 => 68,  180 => 66,  148 => 55,  114 => 102,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 84,  291 => 169,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 98,  228 => 83,  223 => 66,  200 => 55,  84 => 35,  76 => 34,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 80,  215 => 78,  190 => 70,  184 => 74,  181 => 79,  178 => 119,  161 => 70,  129 => 46,  70 => 22,  118 => 103,  153 => 63,  124 => 46,  65 => 28,  113 => 41,  110 => 41,  104 => 35,  81 => 25,  58 => 25,  90 => 38,  23 => 13,  263 => 124,  256 => 96,  249 => 89,  241 => 101,  236 => 108,  225 => 95,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 76,  160 => 18,  155 => 55,  152 => 56,  146 => 56,  137 => 48,  126 => 45,  100 => 94,  97 => 63,  77 => 33,  34 => 16,  20 => 11,  53 => 22,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 107,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 86,  234 => 84,  218 => 91,  192 => 87,  188 => 68,  177 => 72,  169 => 73,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 29,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 83,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 43,  102 => 39,  71 => 29,  67 => 30,  63 => 27,  59 => 14,  28 => 14,  201 => 72,  196 => 71,  183 => 121,  171 => 102,  166 => 61,  163 => 66,  158 => 59,  156 => 93,  151 => 51,  142 => 50,  138 => 51,  136 => 109,  121 => 75,  117 => 41,  105 => 27,  91 => 17,  62 => 24,  49 => 22,  94 => 18,  89 => 35,  85 => 12,  75 => 28,  68 => 26,  56 => 28,  38 => 17,  87 => 38,  31 => 15,  25 => 12,  21 => 12,  26 => 2,  24 => 14,  19 => 11,  93 => 35,  88 => 34,  78 => 30,  46 => 19,  44 => 18,  27 => 16,  79 => 31,  72 => 25,  69 => 30,  47 => 25,  40 => 23,  37 => 16,  22 => 11,  246 => 69,  157 => 17,  145 => 60,  139 => 49,  131 => 45,  123 => 44,  120 => 45,  115 => 43,  111 => 41,  108 => 99,  101 => 34,  98 => 36,  96 => 36,  83 => 34,  74 => 29,  66 => 24,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 17,  35 => 20,  32 => 15,  29 => 14,  209 => 95,  203 => 122,  199 => 52,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 65,  173 => 71,  168 => 69,  164 => 19,  162 => 60,  154 => 16,  149 => 36,  147 => 61,  144 => 54,  141 => 66,  133 => 49,  130 => 49,  125 => 45,  122 => 104,  116 => 44,  112 => 48,  109 => 39,  106 => 40,  103 => 39,  99 => 31,  95 => 36,  92 => 35,  86 => 31,  82 => 31,  80 => 34,  73 => 33,  64 => 25,  60 => 24,  57 => 24,  54 => 22,  51 => 21,  48 => 23,  45 => 19,  42 => 9,  39 => 19,  36 => 6,  33 => 17,  30 => 16,);
    }
}
