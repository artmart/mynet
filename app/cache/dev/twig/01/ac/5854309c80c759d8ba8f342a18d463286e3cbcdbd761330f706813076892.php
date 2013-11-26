<?php

/* MYMainBundle:Main:newsDetailed.html.twig */
class __TwigTemplate_01ac5854309c80c759d8ba8f342a18d463286e3cbcdbd761330f706813076892 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "MYYerevan | ";
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
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "metaKw"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 16
    public function block_description($context, array $blocks = array())
    {
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "metaDesc"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["id"] => $context["page"]) {
            // line 36
            echo "    <div class=\"item-detailed clearfix\">
      <h4>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "newsDate"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <h2 class=\"content-title-";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title"), "html", null, true);
            echo "</h2>
      <div class=\"intro\"> ";
            // line 39
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content");
            echo "</div>
      ";
            // line 40
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "gallery")) {
                // line 41
                echo "        <div class=\"sonata-media-gallery-media-list\">
          ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "gallery"), "galleryHasMedias"));
                foreach ($context['_seq'] as $context["i"] => $context["galleryHasMedia"]) {
                    // line 43
                    echo "            <div class=\"news_gallery\">
\t      <a class=\"sonata-media-gallery-media-item-link\" rel=\"prettyPhoto[gallery2]\" href=\"";
                    // line 44
                    echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "reference");
                    echo "\">
\t        ";
                    // line 45
                    echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["galleryHasMedia"]) ? $context["galleryHasMedia"] : $this->getContext($context, "galleryHasMedia")), "media"), "list", array("title" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title"), "alt" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title"), "height" => "173"));
                    // line 46
                    echo "              </a>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </div>
      ";
            }
            // line 51
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "MYMainBundle:Main:newsDetailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 53,  176 => 51,  172 => 49,  164 => 46,  162 => 45,  158 => 44,  155 => 43,  151 => 42,  148 => 41,  146 => 40,  142 => 39,  136 => 38,  132 => 37,  129 => 36,  125 => 35,  121 => 33,  118 => 32,  96 => 28,  92 => 24,  87 => 23,  84 => 22,  74 => 18,  70 => 17,  67 => 16,  57 => 12,  53 => 11,  50 => 10,  39 => 6,  35 => 5,  32 => 4,);
    }
}
