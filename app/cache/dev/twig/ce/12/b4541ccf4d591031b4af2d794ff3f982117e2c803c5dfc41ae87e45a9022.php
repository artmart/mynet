<?php

/* MYMainBundle:Main:layout.html.twig */
class __TwigTemplate_ce12b4541ccf4d591031b4af2d794ff3f982117e2c803c5dfc41ae87e45a9022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'meta' => array($this, 'block_meta'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
            'rightmenu' => array($this, 'block_rightmenu'),
            'carucell' => array($this, 'block_carucell'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"hy\">
  ";
        // line 3
        ob_start();
        // line 4
        echo "  <head>
    <meta charset=\"utf-8\"/> 
    <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
  ";
        // line 10
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    
\t\t";
        // line 18
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "\t\t

    ";
        // line 43
        echo "    
    
\t\t";
        // line 45
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 61
        echo "
   ";
        // line 62
        $this->displayBlock('meta', $context, $blocks);
        // line 63
        echo "  </head>
  <body>

<div id=\"wrapper\">
      <div class=\"clearfix\" id=\"header\">
         
        <div id=\"top-bar\">
             <div class=\"login\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.new"), "html", null, true);
        echo "</a></div> 
         ";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "my_homepage")) {
            echo " 
          <img src=\"/bundles/mymain/images/logo.jpg\" class=\"logo_image\" alt=\"MyNet.am\" />
\t\t\t\t ";
        } else {
            // line 74
            echo "         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
          <img src=\"/bundles/mymain/images/logo1.png\" class=\"logo_image\" alt=\"MyNet.am\" />
         </a>
         ";
        }
        // line 78
        echo "        </div>
       ";
        // line 79
        echo "      
       <div id='cssmenu'>
        ";
        // line 81
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:topMenu", array("currentAsLink" => true));
        echo "    
       </div>
     </div>
        

<div id=\"container\" class=\"clearfix\">

<div id=\"sidebar\" class=\"clearfix\">
    <div class=\"sidebar-block\">
     <div id=\"left-sidebar\" class=\"sidebar-menu\">
     ";
        // line 91
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:leftMenu1", array("currentAsLink" => true));
        echo " 
     </div>
     <div id=\"left-sidebar\" class=\"sidebar-menu\">
     ";
        // line 94
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:leftMenu2", array("currentAsLink" => true));
        echo " 
     </div> 
";
        // line 97
        echo "              
";
        // line 106
        echo "   
<br />           
            
            
    </div>      
</div>
<div>
";
        // line 113
        $this->displayBlock('slider', $context, $blocks);
        // line 114
        echo " 
<div id=\"content\" class=\"clearfix\">
   ";
        // line 116
        $this->displayBlock('main', $context, $blocks);
        // line 117
        echo "</div>
";
        // line 118
        $this->displayBlock('rightmenu', $context, $blocks);
        echo "    
";
        // line 119
        $this->displayBlock('carucell', $context, $blocks);
        echo "    
";
        // line 121
        echo "<div id=\"footer\">

  &COPY; 2013 - ";
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("texts.footertexts"), "html", null, true);
        echo "

  <br><br>
  <div id=\"circleBlock\">
    <!-- Circle.Am: DO NOT MODIFY THIS CODE: Start -->
   
  <!-- Circle.Am: End -->
  
</div>
</div>
</div>
</div>  
        
</div>

</body>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 140
        echo "</html>";
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("meta.title"), "html", null, true);
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "379f80c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_0") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.min_1.js");
            // line 35
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_1") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.fancybox-1.3.4_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_2") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.jcarousel.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_3") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.prettyPhoto_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_4") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_content_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_5") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_gallery_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_6") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_plugins_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_7") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_ready_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_8") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_sliderman.1.3.7_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_9") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_messages_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_10") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_widgets_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_11") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_topcontroll_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_12") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_AC_RunActiveContent_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "379f80c_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c_13") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_lightbox_me_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "379f80c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_379f80c") : $this->env->getExtension('assets')->getAssetUrl("js/jquery.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 37
        echo "\t\t";
    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1dc9e55_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_1.css");
            // line 58
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_1") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_2") : $this->env->getExtension('assets')->getAssetUrl("css/main_prettyPhoto_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_3") : $this->env->getExtension('assets')->getAssetUrl("css/main_reset_4.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_4") : $this->env->getExtension('assets')->getAssetUrl("css/main_widgets_5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_5") : $this->env->getExtension('assets')->getAssetUrl("css/main_main_6.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_6") : $this->env->getExtension('assets')->getAssetUrl("css/main_menu_7.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_7") : $this->env->getExtension('assets')->getAssetUrl("css/main_sliderman_8.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_8") : $this->env->getExtension('assets')->getAssetUrl("css/main_jquery.fancybox-1.3.4_9.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "1dc9e55_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55_9") : $this->env->getExtension('assets')->getAssetUrl("css/main_suggestion_10.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // asset "1dc9e55"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1dc9e55") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 60
        echo "\t\t";
    }

    // line 62
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 113
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 116
    public function block_main($context, array $blocks = array())
    {
    }

    // line 118
    public function block_rightmenu($context, array $blocks = array())
    {
    }

    // line 119
    public function block_carucell($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 119,  412 => 118,  407 => 116,  402 => 113,  397 => 62,  393 => 60,  325 => 58,  320 => 46,  317 => 45,  313 => 37,  221 => 35,  216 => 19,  213 => 18,  207 => 10,  197 => 6,  193 => 140,  167 => 121,  163 => 119,  159 => 118,  156 => 117,  154 => 116,  150 => 114,  148 => 113,  136 => 97,  125 => 91,  112 => 81,  108 => 79,  105 => 78,  97 => 74,  91 => 71,  85 => 70,  76 => 63,  71 => 61,  69 => 45,  65 => 43,  61 => 37,  47 => 10,  43 => 7,  39 => 6,  35 => 4,  33 => 3,  29 => 1,  248 => 150,  244 => 148,  241 => 147,  235 => 143,  231 => 141,  228 => 140,  222 => 136,  218 => 134,  215 => 133,  209 => 129,  205 => 127,  202 => 7,  195 => 123,  191 => 120,  186 => 119,  174 => 113,  171 => 123,  162 => 108,  157 => 104,  151 => 100,  147 => 99,  143 => 97,  139 => 106,  131 => 94,  128 => 71,  123 => 65,  101 => 46,  92 => 44,  89 => 43,  86 => 42,  82 => 41,  77 => 38,  74 => 62,  58 => 18,  54 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 4,);
    }
}
