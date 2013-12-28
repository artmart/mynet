<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_28d1a1da9c24eeeaf04d524fa3cca7339aa9de836575442f2e88fa121c8ce5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 14
        echo "    ";
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row-fluid\">
            <div class=\"sonata-ba-list span10\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>

            <div class=\"sonata-ba-filter span2\">
                ";
            // line 28
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
            </div>
        </div>
    ";
        }
        // line 32
        echo "
";
    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 120,  398 => 119,  388 => 117,  377 => 115,  374 => 114,  371 => 113,  361 => 107,  355 => 105,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  272 => 76,  263 => 71,  250 => 67,  247 => 66,  236 => 63,  233 => 62,  223 => 58,  200 => 55,  191 => 50,  175 => 43,  152 => 38,  146 => 34,  84 => 16,  76 => 32,  344 => 97,  340 => 95,  335 => 93,  321 => 91,  312 => 89,  292 => 87,  282 => 79,  280 => 82,  264 => 72,  259 => 70,  252 => 68,  249 => 67,  220 => 56,  215 => 54,  190 => 50,  184 => 47,  181 => 47,  178 => 45,  161 => 38,  137 => 27,  129 => 24,  97 => 31,  70 => 25,  118 => 28,  153 => 35,  124 => 23,  100 => 41,  65 => 5,  126 => 55,  110 => 25,  104 => 23,  81 => 16,  77 => 8,  58 => 22,  90 => 18,  23 => 13,  358 => 106,  343 => 132,  341 => 131,  338 => 94,  327 => 126,  323 => 125,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  289 => 81,  285 => 84,  281 => 110,  277 => 78,  271 => 108,  265 => 106,  260 => 104,  248 => 100,  228 => 59,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  197 => 54,  174 => 67,  165 => 64,  148 => 60,  134 => 56,  127 => 54,  113 => 37,  34 => 53,  20 => 1,  53 => 20,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 141,  417 => 140,  412 => 139,  408 => 138,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 116,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 141,  351 => 135,  347 => 102,  332 => 97,  324 => 92,  322 => 107,  319 => 90,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 113,  288 => 85,  278 => 94,  274 => 77,  268 => 73,  262 => 105,  257 => 103,  251 => 101,  245 => 83,  239 => 97,  234 => 80,  218 => 77,  192 => 75,  188 => 74,  177 => 65,  169 => 69,  140 => 28,  132 => 43,  128 => 49,  107 => 24,  61 => 23,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 83,  230 => 79,  227 => 60,  224 => 78,  221 => 77,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 17,  71 => 32,  67 => 185,  63 => 4,  59 => 165,  28 => 14,  201 => 92,  196 => 52,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 29,  117 => 50,  105 => 39,  91 => 18,  62 => 24,  49 => 112,  94 => 39,  89 => 37,  85 => 28,  75 => 34,  68 => 6,  56 => 21,  38 => 7,  87 => 17,  31 => 17,  25 => 12,  21 => 2,  26 => 14,  24 => 11,  19 => 1,  93 => 28,  88 => 12,  78 => 26,  46 => 19,  44 => 17,  27 => 12,  79 => 14,  72 => 199,  69 => 28,  47 => 18,  40 => 44,  37 => 54,  22 => 2,  246 => 99,  157 => 41,  145 => 60,  139 => 31,  131 => 25,  123 => 30,  120 => 47,  115 => 27,  111 => 43,  108 => 42,  101 => 22,  98 => 21,  96 => 19,  83 => 25,  74 => 23,  66 => 30,  55 => 21,  52 => 113,  50 => 19,  43 => 21,  41 => 20,  35 => 22,  32 => 5,  29 => 11,  209 => 76,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 42,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 46,  144 => 33,  141 => 48,  133 => 55,  130 => 57,  125 => 40,  122 => 43,  116 => 43,  112 => 26,  109 => 34,  106 => 35,  103 => 34,  99 => 30,  95 => 20,  92 => 19,  86 => 17,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 21,  48 => 67,  45 => 66,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
