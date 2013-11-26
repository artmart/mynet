<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_f49e99683285fbef326dba3f9f98bf91c1ec5dac6edb87d0b33810e18a9e7119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  153 => 62,  124 => 52,  65 => 26,  113 => 42,  110 => 46,  104 => 40,  81 => 26,  58 => 19,  90 => 27,  23 => 13,  263 => 104,  256 => 102,  249 => 98,  241 => 95,  236 => 93,  225 => 89,  213 => 86,  207 => 83,  197 => 79,  191 => 76,  175 => 72,  160 => 68,  155 => 66,  152 => 65,  146 => 63,  137 => 60,  126 => 55,  100 => 41,  97 => 39,  77 => 25,  34 => 15,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 162,  463 => 160,  454 => 158,  450 => 157,  447 => 156,  445 => 155,  440 => 153,  437 => 152,  433 => 151,  423 => 143,  419 => 141,  417 => 140,  412 => 139,  408 => 138,  403 => 135,  397 => 131,  394 => 130,  391 => 129,  389 => 128,  384 => 125,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 112,  332 => 110,  324 => 108,  322 => 107,  319 => 106,  315 => 104,  308 => 100,  304 => 99,  295 => 98,  293 => 97,  288 => 95,  278 => 94,  274 => 93,  268 => 90,  262 => 89,  257 => 87,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  188 => 74,  177 => 65,  169 => 69,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 79,  227 => 81,  224 => 78,  221 => 88,  219 => 76,  217 => 87,  208 => 73,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 42,  71 => 32,  67 => 31,  63 => 22,  59 => 14,  28 => 14,  201 => 92,  196 => 90,  183 => 74,  171 => 61,  166 => 70,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 51,  117 => 50,  105 => 40,  91 => 38,  62 => 25,  49 => 19,  94 => 39,  89 => 37,  85 => 35,  75 => 34,  68 => 31,  56 => 9,  38 => 18,  87 => 25,  31 => 17,  25 => 12,  21 => 2,  26 => 14,  24 => 13,  19 => 11,  93 => 28,  88 => 37,  78 => 31,  46 => 19,  44 => 21,  27 => 14,  79 => 35,  72 => 16,  69 => 32,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 64,  145 => 60,  139 => 59,  131 => 52,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 31,  83 => 25,  74 => 14,  66 => 30,  55 => 25,  52 => 17,  50 => 25,  43 => 21,  41 => 20,  35 => 22,  32 => 21,  29 => 15,  209 => 76,  203 => 82,  199 => 80,  193 => 73,  189 => 71,  187 => 75,  182 => 70,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 62,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 44,  106 => 44,  103 => 41,  99 => 30,  95 => 28,  92 => 21,  86 => 33,  82 => 36,  80 => 29,  73 => 24,  64 => 14,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 8,  45 => 8,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
