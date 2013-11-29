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
            'main' => array($this, 'block_main'),
            'article' => array($this, 'block_article'),
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

    // line 36
    public function block_main($context, array $blocks = array())
    {
        echo " 
<div class=\"happerning clearfix\">

     <div id=\"slider-container\" class=\"clearfix theme-default\">
     <div id=\"slider_container_2\">
        <div id=\"SliderName_2\" class=\"SliderName_2\">
          ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : $this->getContext($context, "sliders")));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 43
            echo "            ";
            if (($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"))))) {
                // line 44
                echo "              ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "image"), "list", array("alt" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name"), "title" => $this->getAttribute((isset($context["slider"]) ? $context["slider"] : $this->getContext($context, "slider")), "name")));
                // line 45
                echo "            ";
            }
            echo "\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 70
        echo "  
  ";
        // line 95
        echo "    
 <div class=\"product\">
      <h3>Բաժիններ</h3>
      <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product1.gif\" alt=\"product\" />
          ";
        // line 103
        echo "      </a> 
\t\t  <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product2.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product3.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product4.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product5.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product6.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
      <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
          <div class=\"clear\"></div>
    </div>
    
    <div class=\"product\">
      <h3>Այլ</h3>
      <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product1.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product2.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product3.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product4.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product5.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product6.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
      <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product7.gif\" alt=\"product\" />
      </a> 
\t\t  <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">
          <img src=\"/bundles/mymain/images/product8.gif\" alt=\"product\" />
      </a>
          <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 170
    public function block_article($context, array $blocks = array())
    {
        // line 171
        echo "<br /><br />
<article>
<ul class=\"about_list\">
    <h2 class=\"ind2\">Նորություններ</h2>
<li>
<figure><img src=\"/bundles/mymain/images/img1.jpg\" alt=\"\"/></figure>
<div>
<h6>Aliquam congue fermentum</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 183
        echo "</li>
<!--Added by Me-->
<li>
<figure><img src=\"/bundles/mymain/images/img1.jpg\" alt=\"\"/></figure>
<div>
<h6>Aliquam congue fermentum</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 193
        echo "</li>
<!--  -->
 <h2 class=\"ind2\">Հետաքրքրաշարժ</h2>
<li>
<figure><img src=\"/bundles/mymain/images/img2.jpg\" alt=\"\"/></figure>
<div>
<h6>Aliquam erat</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 204
        echo "</li>
<li class=\"m_bottom_zero\">
<figure><img src=\"/bundles/mymain/images/img3.jpg\" alt=\"\"/></figure>
<div>
<h6>Donec dignissim</h6>
Lorem ipsum dolor seceter adipiscing elit. Praesent sit hendreit mauris.<br>
<a href=\"#\" class=\"button\">Ավելին</a>
</div>
";
        // line 213
        echo "</li>
</ul>
</article>

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
        return array (  281 => 213,  271 => 204,  259 => 193,  248 => 183,  235 => 171,  232 => 170,  221 => 163,  215 => 160,  209 => 157,  203 => 154,  197 => 151,  191 => 148,  185 => 145,  179 => 142,  173 => 139,  167 => 136,  156 => 128,  150 => 125,  144 => 122,  138 => 119,  132 => 116,  126 => 113,  120 => 110,  114 => 107,  108 => 104,  105 => 103,  100 => 98,  95 => 95,  92 => 70,  72 => 47,  63 => 45,  60 => 44,  57 => 43,  53 => 42,  43 => 36,  37 => 5,  31 => 4,);
    }
}
