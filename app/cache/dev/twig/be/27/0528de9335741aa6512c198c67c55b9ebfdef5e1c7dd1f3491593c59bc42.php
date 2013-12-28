<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_be270528de9335741aa6512c198c67c55b9ebfdef5e1c7dd1f3491593c59bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " method=\"POST\">
            ";
            // line 10
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
                // line 11
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 19
                echo "                <fieldset ";
                if ($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "collapsed")) {
                    echo "class=\"sonata-ba-fieldset-collapsed\"";
                }
                echo ">
                    <legend";
                // line 20
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description") != false)) {
                    echo " class=\"sonata-ba-fieldset-collapsed-description\"";
                }
                echo ">
                        ";
                // line 21
                if ($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "collapsed")) {
                    // line 22
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_expand", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 24
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 26
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 29
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description") != false)) {
                    // line 30
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description");
                    echo "</p>
                        ";
                }
                // line 32
                echo "
                        ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 34
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                        // line 35
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 37
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
            ";
            // line 42
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 43
            echo "
            ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 46
            $this->displayBlock('formactions', $context, $blocks);
            // line 77
            echo "        </form>
    ";
        }
        // line 79
        echo "
";
    }

    // line 16
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 42
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 46
    public function block_formactions($context, array $blocks = array())
    {
        // line 47
        echo "                <div class=\"well form-actions\">
                    ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isxmlhttprequest")) {
            // line 49
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) {
                // line 50
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 52
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 54
            echo "                    ";
        } else {
            // line 55
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode")) {
                // line 56
                echo "                            <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 58
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) {
                // line 59
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 62
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 63
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 66
                echo "                        ";
            } else {
                // line 67
                echo "                            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                            ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "watermark"), "method")) {
            // line 73
            echo "                            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "watermark", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Add watermark</a>
                            ";
        }
        // line 75
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 73,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  205 => 54,  172 => 16,  167 => 79,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 153,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 139,  457 => 138,  444 => 134,  438 => 133,  435 => 132,  427 => 130,  424 => 129,  418 => 128,  410 => 165,  406 => 163,  386 => 123,  379 => 119,  373 => 118,  368 => 117,  348 => 80,  317 => 70,  298 => 63,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 37,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 181,  185 => 47,  180 => 124,  114 => 92,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  453 => 142,  451 => 141,  446 => 139,  430 => 131,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 117,  377 => 115,  374 => 114,  371 => 113,  361 => 107,  355 => 101,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 93,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  286 => 80,  272 => 76,  263 => 71,  250 => 67,  247 => 67,  236 => 35,  233 => 62,  223 => 58,  200 => 55,  191 => 50,  175 => 122,  152 => 103,  146 => 34,  84 => 16,  76 => 19,  344 => 97,  340 => 95,  335 => 77,  321 => 91,  312 => 68,  292 => 87,  282 => 79,  280 => 59,  264 => 72,  259 => 70,  252 => 68,  249 => 67,  220 => 59,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 123,  161 => 46,  137 => 27,  129 => 24,  97 => 91,  70 => 25,  118 => 32,  153 => 43,  124 => 23,  100 => 41,  65 => 5,  126 => 55,  110 => 29,  104 => 23,  81 => 16,  77 => 8,  58 => 12,  90 => 18,  23 => 1,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 74,  323 => 125,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  289 => 81,  285 => 84,  281 => 110,  277 => 78,  271 => 108,  265 => 106,  260 => 104,  248 => 100,  228 => 59,  225 => 60,  213 => 82,  211 => 56,  202 => 77,  197 => 54,  174 => 67,  165 => 64,  148 => 41,  134 => 37,  127 => 54,  113 => 37,  34 => 12,  20 => 1,  53 => 10,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 140,  454 => 136,  450 => 157,  447 => 135,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 141,  417 => 140,  412 => 174,  408 => 138,  403 => 162,  397 => 131,  394 => 126,  391 => 125,  389 => 128,  384 => 116,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 102,  332 => 97,  324 => 92,  322 => 72,  319 => 90,  315 => 90,  308 => 67,  304 => 66,  295 => 88,  293 => 113,  288 => 60,  278 => 94,  274 => 77,  268 => 73,  262 => 51,  257 => 103,  251 => 101,  245 => 83,  239 => 97,  234 => 80,  218 => 77,  192 => 75,  188 => 48,  177 => 42,  169 => 69,  140 => 38,  132 => 43,  128 => 35,  107 => 24,  61 => 23,  273 => 75,  269 => 75,  254 => 68,  243 => 38,  240 => 86,  238 => 64,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 77,  219 => 29,  217 => 58,  208 => 55,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 17,  71 => 32,  67 => 16,  63 => 4,  59 => 165,  28 => 13,  201 => 186,  196 => 52,  183 => 125,  171 => 61,  166 => 114,  163 => 77,  158 => 37,  156 => 44,  151 => 42,  142 => 58,  138 => 97,  136 => 58,  121 => 33,  117 => 93,  105 => 26,  91 => 22,  62 => 24,  49 => 18,  94 => 90,  89 => 21,  85 => 87,  75 => 34,  68 => 6,  56 => 21,  38 => 7,  87 => 17,  31 => 15,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 28,  88 => 12,  78 => 84,  46 => 9,  44 => 17,  27 => 12,  79 => 14,  72 => 18,  69 => 17,  47 => 17,  40 => 6,  37 => 5,  22 => 12,  246 => 99,  157 => 41,  145 => 60,  139 => 31,  131 => 25,  123 => 30,  120 => 47,  115 => 27,  111 => 43,  108 => 42,  101 => 22,  98 => 21,  96 => 19,  83 => 20,  74 => 82,  66 => 30,  55 => 11,  52 => 113,  50 => 19,  43 => 15,  41 => 14,  35 => 4,  32 => 3,  29 => 2,  209 => 76,  203 => 275,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 116,  168 => 72,  164 => 113,  162 => 57,  154 => 58,  149 => 36,  147 => 46,  144 => 99,  141 => 98,  133 => 55,  130 => 57,  125 => 34,  122 => 43,  116 => 43,  112 => 30,  109 => 34,  106 => 35,  103 => 34,  99 => 24,  95 => 20,  92 => 19,  86 => 17,  82 => 10,  80 => 9,  73 => 7,  64 => 15,  60 => 3,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 16,  42 => 16,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
