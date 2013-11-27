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
            'main' => array($this, 'block_main'),
            'rightmenu' => array($this, 'block_rightmenu'),
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
        // line 35
        echo "\t\t

    ";
        // line 50
        echo "    
    
\t\t";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 69
        echo "    
   ";
        // line 70
        $this->displayBlock('meta', $context, $blocks);
        // line 71
        echo "  </head>
  <body>
<div class=\"block1\">
<div id=\"wrapper\">
    <div class=\"clearfix\" id=\"header\">
        
        ";
        // line 78
        echo "         ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "my_homepage")) {
            echo " 
          <img src=\"/bundles/mymain/images/logo.jpg\" class=\"logo_image\" alt=\"MyNet.am\" />
\t\t\t\t ";
        } else {
            // line 81
            echo "         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">
          <img src=\"/bundles/mymain/images/logo1.png\" class=\"logo_image\" alt=\"MyNet.am\" />
         </a>
         ";
        }
        // line 85
        echo "       
    </div>    
        
       ";
        // line 88
        echo " 
       <div id='cssmenu'>
        ";
        // line 90
        echo $this->env->getExtension('knp_menu')->render("MYMainBundle:Builder:topMenu", array("currentAsLink" => true));
        echo "    
       </div>
      </div>
    </div>
   
<div id=\"wrapper\">
<div id=\"container\" class=\"clearfix\">
";
        // line 107
        echo "            
";
        // line 116
        echo "   
";
        // line 122
        echo "

 
<div id=\"content\" class=\"clearfix\">
   ";
        // line 126
        $this->displayBlock('main', $context, $blocks);
        // line 127
        echo "</div>
";
        // line 128
        $this->displayBlock('rightmenu', $context, $blocks);
        echo "    
";
        // line 130
        echo "<div  class=\"clearfix\">
";
        // line 132
        echo "
";
        // line 134
        $this->env->loadTemplate("MYMainBundle:Main:socials.html.twig")->display($context);
        // line 135
        echo "</div>
</div>  
</div>

         
<div class=\"block1\"></div>
<div id=\"footer\">
  &COPY; 2013 - ";
        // line 142
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
</body>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 153
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
            // asset "ab95966_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_0") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.min_1.js");
            // line 33
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_1") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.fancybox-1.3.4_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_2") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.jcarousel.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_3") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_jquery.prettyPhoto_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_4") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_content_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_5") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_gallery_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_6") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_plugins_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_7") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_ready_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_8") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_sliderman.1.3.7_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "ab95966_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966_9") : $this->env->getExtension('assets')->getAssetUrl("js/jquery_messages_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "ab95966"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab95966") : $this->env->getExtension('assets')->getAssetUrl("js/jquery.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "\t\t";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "06d49cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_0") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_1.css");
            // line 66
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_1") : $this->env->getExtension('assets')->getAssetUrl("css/main_skin_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_2") : $this->env->getExtension('assets')->getAssetUrl("css/main_prettyPhoto_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_3") : $this->env->getExtension('assets')->getAssetUrl("css/main_menu_4.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_4") : $this->env->getExtension('assets')->getAssetUrl("css/main_main_5.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_5") : $this->env->getExtension('assets')->getAssetUrl("css/main_sliderman_6.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
            // asset "06d49cc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc_6") : $this->env->getExtension('assets')->getAssetUrl("css/main_carousel_7.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        } else {
            // asset "06d49cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06d49cc") : $this->env->getExtension('assets')->getAssetUrl("css/main.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 68
        echo "\t\t";
    }

    // line 70
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 126
    public function block_main($context, array $blocks = array())
    {
    }

    // line 128
    public function block_rightmenu($context, array $blocks = array())
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
        return array (  342 => 128,  337 => 126,  332 => 70,  328 => 68,  278 => 66,  273 => 53,  270 => 52,  266 => 35,  198 => 33,  193 => 19,  190 => 18,  184 => 10,  179 => 7,  174 => 6,  170 => 153,  154 => 142,  145 => 135,  143 => 134,  140 => 132,  137 => 130,  133 => 128,  130 => 127,  128 => 126,  122 => 122,  119 => 116,  116 => 107,  106 => 90,  102 => 88,  97 => 85,  89 => 81,  82 => 78,  74 => 71,  72 => 70,  69 => 69,  67 => 52,  63 => 50,  59 => 35,  56 => 18,  45 => 10,  41 => 7,  37 => 6,  33 => 4,  31 => 3,  27 => 1,);
    }
}
