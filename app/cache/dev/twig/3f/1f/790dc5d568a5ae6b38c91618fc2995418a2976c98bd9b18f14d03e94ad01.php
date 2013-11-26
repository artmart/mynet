<?php

/* MYMainBundle:Main:rightmenu.html.twig */
class __TwigTemplate_3f1f790dc5d568a5ae6b38c91618fc2995418a2976c98bd9b18f14d03e94ad01 extends Twig_Template
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
        echo "<div class=\"clearfix\" id=\"right-sidebar\">
<div class=\"mayor\">
";
        // line 3
        echo "      
";
        // line 6
        echo "
";
        // line 23
        echo "

";
        // line 26
        echo "<h2>Գովազդ</h2>             
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rightads"]) ? $context["rightads"] : $this->getContext($context, "rightads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 28
            echo "<br />
  ";
            // line 29
            if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image"))))) {
                // line 30
                echo "       <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "link"), "html", null, true);
                echo "\" target=\"_blank\">
         ";
                // line 31
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image"), "right", array("alt" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "title"), "title" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "title")));
                // line 32
                echo "       </a>
  ";
            }
            // line 34
            echo "<br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "   
<br />
<h2>Սոցիալական ցանցեր</h2>  
";
        // line 38
        echo "       
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=277653518918970\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<div class=\"fb-like-box\" data-href=\"https://www.facebook.com/pages/Mynetam/117740095102442\" data-width=\"150\" data-height=\"405\" data-show-faces=\"true\" data-stream=\"false\" data-header=\"true\">
</div> 
<br /><br />            
            
</div> 
</div>       


";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:rightmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  63 => 35,  56 => 34,  36 => 27,  26 => 6,  23 => 3,  22 => 12,  19 => 1,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  165 => 47,  160 => 44,  137 => 37,  120 => 36,  117 => 34,  115 => 33,  113 => 31,  111 => 30,  100 => 23,  95 => 22,  93 => 21,  90 => 20,  84 => 16,  81 => 15,  72 => 10,  62 => 82,  60 => 81,  57 => 80,  55 => 79,  52 => 32,  50 => 31,  45 => 30,  42 => 27,  37 => 19,  32 => 14,  30 => 9,  27 => 8,  417 => 119,  412 => 118,  407 => 116,  402 => 113,  397 => 62,  393 => 60,  325 => 58,  320 => 46,  317 => 45,  313 => 37,  221 => 79,  216 => 19,  213 => 18,  207 => 10,  197 => 6,  193 => 140,  167 => 48,  163 => 45,  159 => 118,  156 => 41,  154 => 40,  150 => 114,  148 => 113,  136 => 97,  125 => 91,  112 => 81,  108 => 28,  105 => 78,  97 => 74,  91 => 71,  85 => 70,  76 => 63,  71 => 61,  69 => 9,  65 => 83,  61 => 37,  47 => 43,  43 => 29,  39 => 6,  35 => 15,  33 => 26,  29 => 23,  248 => 150,  244 => 148,  241 => 147,  235 => 143,  231 => 141,  228 => 140,  222 => 136,  218 => 134,  215 => 133,  209 => 129,  205 => 127,  202 => 68,  195 => 123,  191 => 120,  186 => 119,  174 => 113,  171 => 123,  162 => 108,  157 => 104,  151 => 100,  147 => 99,  143 => 97,  139 => 106,  131 => 94,  128 => 71,  123 => 65,  101 => 46,  92 => 44,  89 => 43,  86 => 17,  82 => 41,  77 => 38,  74 => 11,  58 => 18,  54 => 9,  49 => 8,  46 => 7,  40 => 28,  34 => 4,);
    }
}
