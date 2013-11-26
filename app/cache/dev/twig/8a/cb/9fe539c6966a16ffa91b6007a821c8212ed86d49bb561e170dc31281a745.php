<?php

/* MYMainBundle:Main:index.html.twig */
class __TwigTemplate_8acb9fe539c6966a16ffa91b6007a821c8212ed86d49bb561e170dc31281a745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
            'rightmenu' => array($this, 'block_rightmenu'),
            'carucell' => array($this, 'block_carucell'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MYMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("homepage.keywords"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("homepage.description"), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cbdb74a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cbdb74a_0") : $this->env->getExtension('assets')->getAssetUrl("css/carousel_carousel_1.css");
            // line 12
            echo "   <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "cbdb74a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cbdb74a") : $this->env->getExtension('assets')->getAssetUrl("css/carousel.css");
            echo "   <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
    }

    // line 37
    public function block_slider($context, array $blocks = array())
    {
        // line 38
        echo "     <div id=\"slider-container\" class=\"clearfix theme-default\">
     <div id=\"slider_container_2\">
        <div id=\"SliderName_2\" class=\"SliderName_2\">
          ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : $this->getContext($context, "sliders")));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 42
            echo "            ";
            if (($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"))))) {
                // line 43
                echo "              ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"), "list", array("alt" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name"), "title" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name")));
                // line 44
                echo "            ";
            }
            echo "\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
        
        <div id=\"SliderNameNavigation_2\"></div>
        <script type=\"text/javascript\">
        effectsDemo2 = 'rain,stairs,fade';
        var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 690, height: 300, effects: effectsDemo2,
                display: {
                        autoplay: 3000,
                        loading: {background: '#000000', opacity: 0.5, image: '/bundles/mymain/images/img/loading.gif'},
                        buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                        description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
                        navigation: {container: 'SliderNameNavigation_2', label: '<img src=\"/bundles/mymain/images/img/clear.gif\" />'}
                         }
                         });
          </script>
          
       </div>
  </div>  
";
    }

    // line 65
    public function block_main($context, array $blocks = array())
    {
        echo "   
";
        // line 71
        echo "  <div class=\"happerning clearfix\">
  ";
        // line 94
        echo "  <h2 class=\"title\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_main_main_news");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.news"), "html", null, true);
        echo "</a></h2>
 <ul id=\"events-list2\" class=\"jcarousel-skin-events\">
\t\t";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 97
            echo "        <li>
          <div class=\"section\">
            <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "slug"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 100
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image"), "list");
            echo "\" class=\"event_pics1\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title"), "html", null, true);
            echo "\" />
              ";
            // line 104
            echo "              <div class=\"title_home\">";
            echo $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title");
            echo "</div>
               ";
            // line 108
            echo "              </a>
            </div>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </ul>
 <h2 class=\"title\"><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.new"), "html", null, true);
        echo "</a></h2>     
     
 
  
 </div>
";
    }

    // line 119
    public function block_rightmenu($context, array $blocks = array())
    {
        echo "   
";
        // line 120
        $this->env->loadTemplate("MYMainBundle:Main:rightmenu.html.twig")->display($context);
    }

    // line 123
    public function block_carucell($context, array $blocks = array())
    {
        echo "   
<ul id=\"bottom-menu\" class=\"jcarousel-skin-tango\">
  <li>
    <a href=\"";
        // line 126
        echo "\">
      <h2 class=\"baletc\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menubottom.balet"), "html", null, true);
        echo "</h2>
        ";
        // line 129
        echo "    <div class=\"jc_item1\"></div>
    </a>
  </li>
  <li>
    <a href=\"";
        // line 133
        echo "\">
      <h2 class=\"theaterc\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menubottom.theater"), "html", null, true);
        echo "</h2>
        ";
        // line 136
        echo "     <div class=\"jc_item2\"></div>
    </a>
  </li>
  <li>
    <a href=\"";
        // line 140
        echo "\">
      <h2 class=\"galleriesc\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menubottom.gallery"), "html", null, true);
        echo "</h2>
        ";
        // line 143
        echo "      <div class=\"jc_item3\"></div>
    </a>
  </li>
  <li>
    <a href=\"";
        // line 147
        echo "\">
      <h2 class=\"matenadaranc\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menubottom.matenadaran"), "html", null, true);
        echo "</h2>
        ";
        // line 150
        echo "    <div class=\"jc_item4\"></div>
    </a>
  </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 150,  244 => 148,  241 => 147,  235 => 143,  231 => 141,  228 => 140,  222 => 136,  218 => 134,  215 => 133,  209 => 129,  205 => 127,  202 => 126,  195 => 123,  191 => 120,  186 => 119,  174 => 113,  171 => 112,  162 => 108,  157 => 104,  151 => 100,  147 => 99,  143 => 97,  139 => 96,  131 => 94,  128 => 71,  123 => 65,  101 => 46,  92 => 44,  89 => 43,  86 => 42,  82 => 41,  77 => 38,  74 => 37,  58 => 12,  54 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 4,);
    }
}
