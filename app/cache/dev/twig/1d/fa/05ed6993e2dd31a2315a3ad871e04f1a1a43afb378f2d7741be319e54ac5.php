<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_1dfa05ed6993e2dd31a2315a3ad871e04f1a1a43afb378f2d7741be319e54ac5 extends Twig_Template
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
        // line 1
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js")), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js")), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  25 => 4,  24 => 13,  22 => 12,  690 => 410,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  481 => 290,  474 => 285,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  407 => 242,  396 => 234,  383 => 224,  366 => 210,  346 => 196,  335 => 188,  331 => 187,  304 => 174,  298 => 173,  283 => 166,  257 => 149,  227 => 134,  213 => 126,  186 => 111,  166 => 100,  135 => 81,  127 => 76,  114 => 71,  109 => 69,  316 => 121,  309 => 117,  305 => 115,  299 => 112,  293 => 109,  288 => 107,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  253 => 148,  222 => 81,  215 => 78,  210 => 75,  204 => 73,  201 => 72,  179 => 107,  174 => 64,  171 => 102,  168 => 60,  150 => 55,  145 => 52,  131 => 48,  122 => 44,  119 => 43,  113 => 41,  108 => 39,  102 => 37,  100 => 36,  85 => 34,  82 => 33,  73 => 29,  61 => 25,  56 => 40,  50 => 22,  30 => 15,  26 => 20,  21 => 2,  19 => 1,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 273,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  423 => 128,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  398 => 119,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  361 => 208,  358 => 106,  355 => 105,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 185,  324 => 92,  321 => 183,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 169,  289 => 81,  282 => 79,  277 => 78,  272 => 158,  269 => 100,  254 => 68,  250 => 93,  243 => 89,  238 => 139,  233 => 62,  228 => 83,  223 => 58,  200 => 55,  191 => 69,  184 => 47,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 92,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  57 => 155,  52 => 113,  47 => 21,  44 => 74,  42 => 9,  39 => 61,  34 => 53,  318 => 122,  312 => 177,  306 => 140,  303 => 139,  300 => 138,  292 => 134,  286 => 80,  280 => 130,  274 => 77,  268 => 126,  265 => 99,  263 => 71,  260 => 98,  248 => 115,  242 => 140,  236 => 63,  224 => 102,  219 => 129,  216 => 99,  214 => 98,  209 => 95,  203 => 122,  197 => 119,  192 => 87,  187 => 86,  176 => 65,  170 => 78,  165 => 59,  160 => 58,  158 => 74,  147 => 90,  144 => 33,  141 => 66,  138 => 50,  136 => 60,  132 => 59,  123 => 30,  120 => 56,  104 => 67,  98 => 21,  92 => 61,  86 => 43,  78 => 53,  75 => 39,  70 => 33,  62 => 166,  59 => 165,  54 => 154,  51 => 12,  38 => 32,  273 => 75,  267 => 156,  264 => 72,  261 => 71,  256 => 96,  252 => 68,  247 => 66,  244 => 66,  237 => 86,  232 => 136,  230 => 105,  225 => 60,  220 => 80,  217 => 79,  211 => 56,  208 => 124,  205 => 54,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 68,  182 => 84,  177 => 42,  172 => 16,  167 => 79,  163 => 77,  161 => 46,  156 => 93,  153 => 56,  151 => 42,  148 => 41,  140 => 38,  134 => 37,  128 => 58,  125 => 45,  121 => 75,  118 => 28,  112 => 26,  110 => 40,  105 => 26,  99 => 24,  91 => 22,  89 => 35,  76 => 13,  72 => 199,  67 => 28,  64 => 184,  58 => 12,  53 => 10,  40 => 6,  37 => 8,  35 => 16,  32 => 6,  29 => 21,  23 => 18,  97 => 63,  94 => 36,  88 => 60,  83 => 20,  80 => 41,  77 => 27,  74 => 52,  71 => 25,  69 => 50,  66 => 23,  63 => 22,  55 => 14,  49 => 112,  46 => 10,  43 => 33,  12 => 34,  36 => 16,  31 => 22,  28 => 14,);
    }
}
