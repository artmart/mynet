<?php

/* MYMainBundle:Main:news.html.twig */
class __TwigTemplate_940f258e2736616b365e470cab2044b1e50412d26fff4fdb141cb3dae079c47d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MYMainBundle:Main:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " | News";
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.keywords"), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("news.description"), "html", null, true);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<h2 class=\"content-title-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.news"), "html", null, true);
        echo "</h2>
<div class=\"category\">
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 12
            echo "    <div class=\"item-row clearfix\">
      ";
            // line 13
            if ($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "image")) {
                // line 14
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug"))), "html", null, true);
                echo "\" class=\"read-more\">
          <img src=\"";
                // line 15
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "image"), "list");
                echo "\" class=\"news_pics\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title"), "html", null, true);
                echo "\" />
        </a>
      ";
            }
            // line 18
            echo "
      <h4>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "newsDate"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <br />

      <h3 class=\"item-title\">
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title"), "html", null, true);
            echo "</a>
      </h3>

      <div class=\"intro\"> 
        ";
            // line 27
            echo $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "shortContent");
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_news_detailed", array("slug" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug"))), "html", null, true);
            echo "\" class=\"read-more\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("more"), "html", null, true);
            echo "</a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    
  ";
        // line 33
        echo "    <div>";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Main:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  116 => 31,  102 => 27,  93 => 23,  86 => 19,  83 => 18,  75 => 15,  70 => 14,  68 => 13,  65 => 12,  61 => 11,  53 => 9,  50 => 8,  44 => 6,  38 => 5,  31 => 4,);
    }
}
