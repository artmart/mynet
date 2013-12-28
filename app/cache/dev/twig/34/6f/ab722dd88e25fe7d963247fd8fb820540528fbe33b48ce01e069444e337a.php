<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_346fab722dd88e25fe7d963247fd8fb820540528fbe33b48ce01e069444e337a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 28
                echo "            <span class=\"x-editable\" data-type=\"";
                echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 73,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  205 => 54,  172 => 16,  167 => 79,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 153,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 139,  457 => 138,  444 => 134,  438 => 133,  435 => 132,  427 => 130,  424 => 129,  418 => 128,  410 => 165,  406 => 163,  386 => 123,  379 => 119,  373 => 118,  368 => 117,  348 => 80,  317 => 70,  298 => 63,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 37,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 181,  185 => 47,  180 => 124,  114 => 92,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  453 => 142,  451 => 141,  446 => 139,  430 => 131,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 117,  377 => 115,  374 => 114,  371 => 113,  361 => 107,  355 => 101,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 93,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  272 => 76,  263 => 71,  250 => 67,  247 => 67,  236 => 35,  233 => 62,  223 => 58,  200 => 55,  191 => 50,  175 => 122,  152 => 103,  146 => 34,  84 => 36,  76 => 19,  344 => 97,  340 => 95,  335 => 77,  321 => 91,  312 => 68,  292 => 87,  282 => 79,  280 => 59,  264 => 72,  259 => 70,  252 => 68,  249 => 67,  220 => 59,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 123,  161 => 46,  137 => 27,  129 => 24,  97 => 91,  70 => 25,  118 => 32,  153 => 43,  124 => 23,  100 => 43,  65 => 5,  126 => 55,  110 => 29,  104 => 23,  81 => 16,  77 => 13,  58 => 12,  90 => 18,  23 => 12,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 74,  323 => 125,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  289 => 81,  285 => 84,  281 => 110,  277 => 78,  271 => 108,  265 => 106,  260 => 104,  248 => 100,  228 => 59,  225 => 60,  213 => 82,  211 => 56,  202 => 77,  197 => 54,  174 => 67,  165 => 64,  148 => 41,  134 => 37,  127 => 54,  113 => 48,  34 => 13,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 140,  454 => 136,  450 => 157,  447 => 135,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 141,  417 => 140,  412 => 174,  408 => 138,  403 => 162,  397 => 131,  394 => 126,  391 => 125,  389 => 128,  384 => 116,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 102,  332 => 97,  324 => 92,  322 => 72,  319 => 90,  315 => 90,  308 => 67,  304 => 66,  295 => 88,  293 => 113,  288 => 60,  278 => 94,  274 => 77,  268 => 73,  262 => 51,  257 => 103,  251 => 101,  245 => 83,  239 => 97,  234 => 80,  218 => 77,  192 => 75,  188 => 48,  177 => 42,  169 => 69,  140 => 38,  132 => 43,  128 => 35,  107 => 46,  61 => 27,  273 => 75,  269 => 75,  254 => 68,  243 => 38,  240 => 86,  238 => 64,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 77,  219 => 29,  217 => 58,  208 => 55,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 17,  71 => 32,  67 => 30,  63 => 28,  59 => 27,  28 => 14,  201 => 186,  196 => 52,  183 => 125,  171 => 61,  166 => 114,  163 => 77,  158 => 37,  156 => 44,  151 => 42,  142 => 58,  138 => 97,  136 => 58,  121 => 33,  117 => 49,  105 => 26,  91 => 22,  62 => 28,  49 => 18,  94 => 40,  89 => 17,  85 => 87,  75 => 32,  68 => 29,  56 => 25,  38 => 7,  87 => 17,  31 => 19,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 28,  88 => 20,  78 => 84,  46 => 9,  44 => 24,  27 => 12,  79 => 34,  72 => 31,  69 => 31,  47 => 25,  40 => 6,  37 => 21,  22 => 12,  246 => 99,  157 => 41,  145 => 60,  139 => 31,  131 => 25,  123 => 52,  120 => 47,  115 => 27,  111 => 30,  108 => 42,  101 => 22,  98 => 21,  96 => 19,  83 => 35,  74 => 32,  66 => 30,  55 => 28,  52 => 27,  50 => 26,  43 => 15,  41 => 23,  35 => 20,  32 => 16,  29 => 13,  209 => 76,  203 => 275,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 116,  168 => 72,  164 => 113,  162 => 57,  154 => 58,  149 => 36,  147 => 46,  144 => 99,  141 => 98,  133 => 55,  130 => 57,  125 => 34,  122 => 43,  116 => 43,  112 => 30,  109 => 34,  106 => 35,  103 => 34,  99 => 23,  95 => 19,  92 => 19,  86 => 17,  82 => 10,  80 => 34,  73 => 7,  64 => 15,  60 => 3,  57 => 26,  54 => 154,  51 => 19,  48 => 67,  45 => 16,  42 => 16,  39 => 21,  36 => 18,  33 => 17,  30 => 15,);
    }
}
