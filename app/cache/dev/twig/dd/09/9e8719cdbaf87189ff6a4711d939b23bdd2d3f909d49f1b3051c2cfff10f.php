<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_dd099e8719cdbaf87189ff6a4711d939b23bdd2d3f909d49f1b3051c2cfff10f extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  50 => 25,  27 => 14,  24 => 13,  22 => 12,  690 => 410,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  481 => 290,  474 => 285,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  407 => 242,  396 => 234,  383 => 224,  366 => 210,  346 => 196,  335 => 188,  331 => 187,  304 => 174,  298 => 173,  283 => 166,  257 => 149,  253 => 148,  227 => 134,  213 => 126,  186 => 111,  179 => 107,  171 => 102,  166 => 100,  135 => 81,  127 => 76,  114 => 71,  109 => 69,  56 => 40,  26 => 20,  19 => 11,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 273,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  423 => 128,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  398 => 119,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  361 => 208,  358 => 106,  355 => 105,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 185,  324 => 92,  321 => 183,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 169,  289 => 81,  282 => 79,  277 => 78,  272 => 158,  269 => 75,  254 => 68,  250 => 67,  243 => 65,  238 => 139,  233 => 62,  228 => 59,  223 => 58,  200 => 55,  191 => 50,  184 => 47,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 92,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  57 => 27,  42 => 62,  39 => 61,  34 => 53,  318 => 144,  312 => 177,  306 => 140,  303 => 139,  300 => 138,  292 => 134,  286 => 80,  280 => 130,  274 => 77,  268 => 126,  265 => 125,  263 => 71,  260 => 123,  248 => 115,  242 => 140,  236 => 63,  224 => 102,  219 => 129,  216 => 99,  214 => 98,  209 => 95,  203 => 122,  197 => 119,  192 => 87,  187 => 86,  176 => 81,  170 => 78,  165 => 76,  160 => 75,  158 => 74,  147 => 90,  144 => 33,  141 => 66,  138 => 61,  136 => 60,  132 => 59,  123 => 30,  120 => 56,  104 => 67,  98 => 21,  92 => 61,  86 => 43,  78 => 53,  75 => 39,  70 => 33,  62 => 166,  59 => 165,  54 => 26,  51 => 38,  273 => 75,  267 => 156,  264 => 72,  261 => 71,  256 => 120,  252 => 68,  247 => 66,  244 => 66,  237 => 64,  232 => 136,  230 => 105,  225 => 60,  220 => 59,  217 => 58,  211 => 56,  208 => 124,  205 => 54,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 85,  182 => 84,  177 => 42,  172 => 16,  167 => 79,  163 => 77,  161 => 46,  156 => 93,  153 => 71,  151 => 42,  148 => 41,  140 => 38,  134 => 37,  128 => 58,  125 => 34,  121 => 75,  118 => 28,  112 => 26,  110 => 25,  105 => 26,  99 => 24,  91 => 22,  89 => 21,  76 => 13,  72 => 199,  67 => 185,  64 => 184,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 21,  23 => 18,  97 => 63,  94 => 36,  88 => 60,  83 => 20,  80 => 41,  77 => 27,  74 => 52,  71 => 25,  69 => 50,  66 => 23,  55 => 11,  49 => 112,  46 => 21,  43 => 21,  12 => 34,  36 => 16,  31 => 22,  28 => 14,  63 => 22,  61 => 16,  58 => 12,  52 => 113,  47 => 75,  44 => 74,  38 => 18,  33 => 16,  30 => 15,);
    }
}
