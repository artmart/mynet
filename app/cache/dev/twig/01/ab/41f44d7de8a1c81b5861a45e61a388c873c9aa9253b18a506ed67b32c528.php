<?php

/* MYMainBundle:Realty:detailed.html.twig */
class __TwigTemplate_01ab41f44d7de8a1c81b5861a45e61a388c873c9aa9253b18a506ed67b32c528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "MYNET | ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 16
    public function block_description($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d54cd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9_0") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2_jquery.prettyPhoto_1.js");
            // line 28
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
            // asset "5d54cd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9_1") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2_news_prettyphoto_on_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
        } else {
            // asset "5d54cd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d54cd9") : $this->env->getExtension('assets')->getAssetUrl("js/slideandlight2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        unset($context["asset_url"]);
    }

    // line 32
    public function block_main($context, array $blocks = array())
    {
        // line 33
        echo "
<div>
  ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
        foreach ($context['_seq'] as $context["_key"] => $context["detaile"]) {
            // line 36
            echo "    <div class=\"item-detailed clearfix\">
        
        ";
            // line 38
            if (($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : null), "image", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "image"))))) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "image"), "list", array("alt" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "title" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "width" => "190px", "height" => "130px"));
                // line 40
                echo "       ";
            }
            // line 41
            echo "       
        
      <h4>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "_Date"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <h2 class=\"content-title-";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "html", null, true);
            echo "</h2>
      <div class=\"intro\"> ";
            // line 45
            echo $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "content");
            echo "</div>
      ";
            // line 46
            if ($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "gallery")) {
                // line 47
                echo "        <div class=\"sonata-media-gallery-media-list\">
          ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "gallery"), "galleryHasMedias"));
                foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
                    // line 49
                    echo "            <div class=\"news_gallery\">
\t      <a class=\"sonata-media-gallery-media-item-link\" rel=\"prettyPhoto[gallery2]\" href=\"";
                    // line 50
                    echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "reference");
                    echo "\">
\t        ";
                    // line 51
                    echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "list", array("title" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "alt" => $this->getAttribute((isset($context["detaile"]) ? $context["detaile"] : $this->getContext($context, "detaile")), "title"), "height" => "173"));
                    // line 52
                    echo "              </a>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        </div>
      ";
            }
            // line 57
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detaile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    

      <!-- AddThis Button BEGIN -->
      <div class=\"addthis_toolbox addthis_default_style \">
        <a class=\"addthis_button_facebook_like\"></a>
        <a class=\"addthis_button_tweet\"></a>
        <a class=\"addthis_button_pinterest_pinit\"></a>
        <a class=\"addthis_counter addthis_pill_style\"></a>
      </div>
      <script type=\"text/javascript\" src=\"http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f50664b6e50a39a\"></script>
      <!-- AddThis Button END -->

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Realty:detailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  165 => 57,  161 => 55,  153 => 52,  151 => 51,  147 => 50,  144 => 49,  140 => 48,  137 => 47,  135 => 46,  131 => 45,  125 => 44,  121 => 43,  117 => 41,  114 => 40,  111 => 39,  109 => 38,  105 => 36,  101 => 35,  97 => 33,  94 => 32,  72 => 28,  68 => 24,  63 => 23,  60 => 22,  55 => 16,  50 => 10,  39 => 6,  35 => 5,  32 => 4,);
    }
}
