<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_3fa7a27f8df2a68d0abd51ef018d8bac25940273a2da8e151ec9784a1ace1f2a extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  66 => 25,  26 => 3,  24 => 2,  23 => 17,  22 => 12,  19 => 1,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  192 => 64,  189 => 61,  180 => 56,  175 => 53,  172 => 51,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  154 => 40,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  93 => 21,  86 => 17,  84 => 16,  81 => 15,  74 => 11,  69 => 9,  65 => 83,  62 => 24,  55 => 79,  52 => 78,  50 => 15,  47 => 43,  45 => 28,  40 => 20,  35 => 15,  30 => 5,  27 => 8,  350 => 129,  345 => 128,  340 => 126,  335 => 70,  331 => 68,  276 => 53,  273 => 52,  269 => 35,  201 => 33,  196 => 65,  193 => 18,  187 => 60,  182 => 57,  177 => 54,  157 => 143,  148 => 136,  146 => 135,  143 => 133,  140 => 131,  136 => 129,  134 => 128,  131 => 127,  129 => 126,  123 => 122,  117 => 34,  107 => 90,  103 => 88,  98 => 85,  90 => 20,  83 => 30,  75 => 28,  73 => 70,  70 => 26,  68 => 52,  64 => 50,  46 => 14,  42 => 12,  38 => 6,  34 => 4,  32 => 6,  28 => 1,  281 => 66,  271 => 204,  259 => 193,  248 => 183,  235 => 171,  232 => 170,  221 => 79,  215 => 160,  209 => 157,  203 => 154,  197 => 151,  191 => 148,  185 => 59,  179 => 142,  173 => 154,  167 => 48,  156 => 41,  150 => 125,  144 => 122,  138 => 119,  132 => 116,  126 => 113,  120 => 36,  114 => 107,  108 => 28,  105 => 103,  100 => 23,  95 => 22,  92 => 70,  72 => 10,  63 => 45,  60 => 81,  57 => 80,  53 => 42,  43 => 36,  37 => 19,  31 => 4,);
    }
}
