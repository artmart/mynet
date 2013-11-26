<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_33bc155563ccbb3b24b1191330466ea921316b968a5a8242365b5def6ce8eeb3 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 28
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
                    // line 29
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 33
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 38
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            }
            // line 42
            echo "
        <span id=\"field_actions_";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 45
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
                // line 46
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 57
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 66
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 69
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
                // line 70
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 79
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 87
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 144,  306 => 140,  265 => 125,  260 => 123,  248 => 115,  242 => 112,  170 => 73,  165 => 71,  150 => 64,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 158,  500 => 157,  488 => 153,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 125,  352 => 121,  333 => 117,  302 => 114,  300 => 138,  296 => 111,  226 => 67,  214 => 98,  186 => 82,  174 => 53,  127 => 55,  267 => 73,  244 => 66,  237 => 64,  232 => 63,  211 => 56,  205 => 59,  172 => 52,  167 => 79,  134 => 58,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 177,  548 => 165,  526 => 164,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 139,  299 => 64,  283 => 58,  275 => 77,  271 => 55,  261 => 71,  253 => 47,  231 => 33,  222 => 30,  216 => 99,  210 => 22,  194 => 87,  185 => 85,  180 => 120,  148 => 63,  114 => 43,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 127,  358 => 113,  355 => 122,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 59,  286 => 132,  272 => 76,  250 => 67,  247 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  84 => 38,  76 => 34,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 142,  292 => 134,  285 => 81,  282 => 80,  280 => 130,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 65,  215 => 54,  190 => 49,  184 => 47,  181 => 79,  178 => 119,  161 => 70,  129 => 56,  70 => 33,  118 => 49,  153 => 71,  124 => 49,  65 => 29,  113 => 42,  110 => 47,  104 => 49,  81 => 36,  58 => 23,  90 => 38,  23 => 12,  263 => 124,  256 => 120,  249 => 70,  241 => 95,  236 => 108,  225 => 60,  213 => 86,  207 => 83,  197 => 89,  191 => 50,  175 => 76,  160 => 69,  155 => 66,  152 => 58,  146 => 56,  137 => 58,  126 => 48,  100 => 43,  97 => 36,  77 => 27,  34 => 18,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 108,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 87,  188 => 48,  177 => 42,  169 => 73,  140 => 53,  132 => 57,  128 => 58,  107 => 40,  61 => 24,  273 => 75,  269 => 75,  254 => 68,  243 => 68,  240 => 86,  238 => 36,  235 => 83,  230 => 105,  227 => 32,  224 => 102,  221 => 88,  219 => 100,  217 => 58,  208 => 60,  204 => 72,  179 => 72,  159 => 69,  143 => 29,  135 => 55,  119 => 44,  102 => 39,  71 => 28,  67 => 32,  63 => 25,  59 => 23,  28 => 13,  201 => 57,  196 => 52,  183 => 121,  171 => 61,  166 => 62,  163 => 60,  158 => 74,  156 => 67,  151 => 45,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 50,  105 => 46,  91 => 34,  62 => 28,  49 => 21,  94 => 40,  89 => 39,  85 => 30,  75 => 39,  68 => 30,  56 => 25,  38 => 17,  87 => 38,  31 => 14,  25 => 13,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 40,  88 => 37,  78 => 35,  46 => 21,  44 => 19,  27 => 14,  79 => 34,  72 => 37,  69 => 26,  47 => 22,  40 => 24,  37 => 18,  22 => 12,  246 => 69,  157 => 58,  145 => 53,  139 => 59,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 41,  108 => 47,  101 => 37,  98 => 43,  96 => 40,  83 => 32,  74 => 33,  66 => 26,  55 => 22,  52 => 21,  50 => 20,  43 => 19,  41 => 19,  35 => 16,  32 => 16,  29 => 15,  209 => 95,  203 => 92,  199 => 52,  193 => 50,  189 => 71,  187 => 86,  182 => 79,  176 => 76,  173 => 112,  168 => 72,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 61,  141 => 66,  133 => 49,  130 => 56,  125 => 46,  122 => 45,  116 => 43,  112 => 48,  109 => 45,  106 => 35,  103 => 45,  99 => 41,  95 => 42,  92 => 45,  86 => 43,  82 => 23,  80 => 41,  73 => 32,  64 => 27,  60 => 19,  57 => 22,  54 => 25,  51 => 24,  48 => 22,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
