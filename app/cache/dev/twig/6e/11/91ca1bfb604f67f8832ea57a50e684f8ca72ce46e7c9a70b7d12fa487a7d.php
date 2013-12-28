<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_6e1191ca1bfb604f67f8832ea57a50e684f8ca72ce46e7c9a70b7d12fa487a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 34
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 24
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 25
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 26
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 27
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 28
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 29
        echo "    </div>
";
    }

    // line 32
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 36
    public function block_form($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 34,  572 => 180,  561 => 178,  557 => 177,  544 => 172,  538 => 170,  521 => 162,  517 => 161,  511 => 160,  504 => 158,  499 => 156,  487 => 152,  477 => 150,  474 => 149,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 97,  407 => 95,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 136,  367 => 131,  357 => 125,  352 => 121,  333 => 117,  302 => 114,  300 => 113,  296 => 111,  275 => 77,  226 => 67,  214 => 61,  186 => 54,  160 => 48,  267 => 73,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  205 => 59,  172 => 52,  167 => 79,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 159,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 132,  457 => 131,  444 => 134,  438 => 133,  435 => 132,  427 => 130,  424 => 129,  418 => 128,  410 => 96,  406 => 163,  386 => 95,  379 => 119,  373 => 118,  368 => 117,  348 => 80,  317 => 70,  298 => 63,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 37,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 181,  185 => 47,  180 => 124,  114 => 50,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 169,  533 => 160,  530 => 165,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 154,  486 => 130,  483 => 129,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 127,  355 => 122,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 93,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  286 => 80,  272 => 76,  263 => 71,  250 => 67,  247 => 67,  236 => 35,  233 => 62,  223 => 66,  200 => 55,  191 => 50,  175 => 122,  152 => 103,  146 => 34,  84 => 28,  76 => 35,  344 => 97,  340 => 95,  335 => 77,  321 => 91,  312 => 68,  292 => 87,  282 => 80,  280 => 79,  264 => 72,  259 => 70,  252 => 68,  249 => 70,  220 => 65,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 123,  161 => 46,  137 => 27,  129 => 56,  97 => 91,  70 => 23,  118 => 32,  153 => 43,  124 => 23,  100 => 43,  65 => 25,  126 => 55,  110 => 29,  104 => 23,  81 => 27,  77 => 13,  58 => 12,  90 => 18,  23 => 12,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 74,  323 => 125,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  289 => 81,  285 => 81,  281 => 110,  277 => 78,  271 => 108,  265 => 106,  260 => 104,  248 => 100,  228 => 59,  225 => 60,  213 => 82,  211 => 56,  202 => 77,  197 => 56,  174 => 53,  165 => 64,  148 => 44,  134 => 37,  127 => 34,  113 => 48,  34 => 18,  20 => 11,  53 => 16,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 98,  417 => 140,  412 => 174,  408 => 138,  403 => 162,  397 => 131,  394 => 126,  391 => 125,  389 => 128,  384 => 116,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 118,  332 => 97,  324 => 116,  322 => 72,  319 => 90,  315 => 90,  308 => 67,  304 => 66,  295 => 88,  293 => 113,  288 => 108,  278 => 94,  274 => 77,  268 => 73,  262 => 51,  257 => 103,  251 => 101,  245 => 83,  239 => 97,  234 => 80,  218 => 77,  192 => 55,  188 => 48,  177 => 42,  169 => 51,  140 => 41,  132 => 57,  128 => 35,  107 => 48,  61 => 27,  273 => 75,  269 => 75,  254 => 68,  243 => 68,  240 => 86,  238 => 64,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 77,  219 => 29,  217 => 58,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 31,  102 => 142,  71 => 32,  67 => 22,  63 => 31,  59 => 18,  28 => 14,  201 => 57,  196 => 52,  183 => 125,  171 => 61,  166 => 50,  163 => 49,  158 => 37,  156 => 44,  151 => 45,  142 => 42,  138 => 97,  136 => 39,  121 => 52,  117 => 49,  105 => 143,  91 => 75,  62 => 24,  49 => 23,  94 => 40,  89 => 42,  85 => 87,  75 => 25,  68 => 26,  56 => 27,  38 => 7,  87 => 29,  31 => 15,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 138,  88 => 74,  78 => 26,  46 => 9,  44 => 21,  27 => 12,  79 => 34,  72 => 31,  69 => 33,  47 => 14,  40 => 15,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 31,  131 => 25,  123 => 33,  120 => 47,  115 => 27,  111 => 30,  108 => 144,  101 => 37,  98 => 36,  96 => 44,  83 => 64,  74 => 32,  66 => 32,  55 => 24,  52 => 23,  50 => 15,  43 => 16,  41 => 23,  35 => 20,  32 => 14,  29 => 15,  209 => 76,  203 => 275,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 116,  168 => 72,  164 => 113,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 99,  141 => 98,  133 => 55,  130 => 35,  125 => 34,  122 => 43,  116 => 30,  112 => 30,  109 => 34,  106 => 35,  103 => 34,  99 => 45,  95 => 19,  92 => 32,  86 => 65,  82 => 38,  80 => 34,  73 => 24,  64 => 15,  60 => 3,  57 => 26,  54 => 154,  51 => 19,  48 => 67,  45 => 21,  42 => 20,  39 => 18,  36 => 16,  33 => 17,  30 => 15,);
    }
}
