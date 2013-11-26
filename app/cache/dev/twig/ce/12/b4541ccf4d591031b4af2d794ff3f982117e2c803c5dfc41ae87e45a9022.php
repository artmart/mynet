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
        // line 44
        echo "    
    
\t\t";
        // line 46
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "    
   ";
        // line 63
        $this->displayBlock('meta', $context, $blocks);
        // line 64
        echo "  </head>
  <body>

<div id=\"wrapper\">
      <div class=\"clearfix\" id=\"header\">
         
        <div id=\"top-bar\">
             <div class=\"login\"><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("my_main_concurs_concurs");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.new"), "html", null, true);
        echo "</a></div> 
         ";
        // line 72
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "my_homepage")) {
            echo " 
          <img src=\"/bundles/mymain/images/logo.jpg\" class=\"logo_image\" alt=\"MyNet.am\" />
\t\t\t\t ";
        } else {
            // line 75
            echo "         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
          <img src=\"/bundles/mymain/images/logo1.png\" class=\"logo_image\" alt=\"MyNet.am\" />
         </a>
         ";
        }
        // line 79
        echo "        </div>
       ";
        // line 80
        echo "      
       <div id='cssmenu'>
        ";
        // line 82
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:topMenu", array("currentAsLink" => true));
        echo "    
       </div>
     </div>
        

<div id=\"container\" class=\"clearfix\">

<div id=\"sidebar\" class=\"clearfix\">
    <div class=\"sidebar-block\">
     <div id=\"left-sidebar\" class=\"sidebar-menu\">
     ";
        // line 92
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:leftMenu1", array("currentAsLink" => true));
        echo " 
     </div>
     <div id=\"left-sidebar\" class=\"sidebar-menu\">
     ";
        // line 95
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:leftMenu2", array("currentAsLink" => true));
        echo " 
     </div> 
";
        // line 98
        echo "              
";
        // line 107
        echo "   
<br />           
            
            
    </div>      
</div>
<div>
";
        // line 114
        $this->displayBlock('slider', $context, $blocks);
        // line 115
        echo " 
<div id=\"content\" class=\"clearfix\">
   ";
        // line 117
        $this->displayBlock('main', $context, $blocks);
        // line 118
        echo "</div>
";
        // line 119
        $this->displayBlock('rightmenu', $context, $blocks);
        echo "    
";
        // line 120
        $this->displayBlock('carucell', $context, $blocks);
        echo "    
";
        // line 122
        echo "<div id=\"footer\">

  &COPY; 2013 - ";
        // line 124
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
        // line 141
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

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e2bca63_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_1.css");
            // line 59
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_1") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_2") : $this->env->getExtension('assets')->getAssetUrl("css/main_prettyPhoto_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_3") : $this->env->getExtension('assets')->getAssetUrl("css/main_reset_4.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_4") : $this->env->getExtension('assets')->getAssetUrl("css/main_widgets_5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_5") : $this->env->getExtension('assets')->getAssetUrl("css/main_main_6.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_6") : $this->env->getExtension('assets')->getAssetUrl("css/main_menu_7.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_7") : $this->env->getExtension('assets')->getAssetUrl("css/main_sliderman_8.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "e2bca63_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63_8") : $this->env->getExtension('assets')->getAssetUrl("css/main_jquery.fancybox-1.3.4_9.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // asset "e2bca63"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2bca63") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 61
        echo "\t\t";
    }

    // line 63
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 114
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 117
    public function block_main($context, array $blocks = array())
    {
    }

    // line 119
    public function block_rightmenu($context, array $blocks = array())
    {
    }

    // line 120
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
        return array (  411 => 120,  406 => 119,  401 => 117,  396 => 114,  391 => 63,  387 => 61,  325 => 59,  320 => 47,  317 => 46,  313 => 37,  221 => 35,  216 => 19,  213 => 18,  207 => 10,  202 => 7,  197 => 6,  193 => 141,  171 => 124,  167 => 122,  163 => 120,  159 => 119,  156 => 118,  154 => 117,  150 => 115,  148 => 114,  139 => 107,  136 => 98,  131 => 95,  125 => 92,  112 => 82,  108 => 80,  105 => 79,  97 => 75,  91 => 72,  85 => 71,  76 => 64,  74 => 63,  71 => 62,  69 => 46,  65 => 44,  61 => 37,  58 => 18,  47 => 10,  43 => 7,  39 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }
}
