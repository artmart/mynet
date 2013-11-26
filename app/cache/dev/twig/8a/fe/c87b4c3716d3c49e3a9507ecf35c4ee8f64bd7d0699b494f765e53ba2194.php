<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_8afec87b4c3716d3c49e3a9507ecf35c4ee8f64bd7d0699b494f765e53ba2194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  58 => 19,  90 => 27,  23 => 13,  263 => 104,  256 => 102,  249 => 98,  241 => 95,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 68,  155 => 66,  152 => 65,  146 => 63,  137 => 60,  126 => 51,  100 => 40,  97 => 39,  77 => 25,  34 => 4,  20 => 11,  53 => 23,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 162,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 141,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 112,  332 => 110,  324 => 108,  322 => 107,  319 => 106,  315 => 104,  308 => 100,  304 => 99,  295 => 98,  293 => 97,  288 => 95,  278 => 94,  274 => 93,  268 => 90,  262 => 89,  257 => 87,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  188 => 74,  177 => 65,  169 => 71,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 88,  219 => 76,  217 => 87,  208 => 73,  204 => 72,  179 => 73,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 41,  71 => 29,  67 => 25,  63 => 22,  59 => 14,  28 => 3,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 70,  163 => 69,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 47,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 38,  89 => 20,  85 => 32,  75 => 17,  68 => 22,  56 => 9,  38 => 6,  87 => 25,  31 => 17,  25 => 12,  21 => 2,  26 => 13,  24 => 3,  19 => 11,  93 => 28,  88 => 33,  78 => 21,  46 => 7,  44 => 21,  27 => 16,  79 => 31,  72 => 16,  69 => 25,  47 => 9,  40 => 19,  37 => 18,  22 => 11,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 37,  98 => 36,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 18,  52 => 17,  50 => 22,  43 => 6,  41 => 18,  35 => 22,  32 => 21,  29 => 16,  209 => 76,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 70,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 64,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 44,  106 => 36,  103 => 38,  99 => 30,  95 => 28,  92 => 21,  86 => 33,  82 => 22,  80 => 29,  73 => 24,  64 => 14,  60 => 26,  57 => 11,  54 => 14,  51 => 14,  48 => 8,  45 => 8,  42 => 13,  39 => 12,  36 => 17,  33 => 4,  30 => 17,);
    }
}
