<?php

/* MYMainBundle:Interesting:interestings.html.twig */
class __TwigTemplate_ad783e66869046528f77ff5aec4d6e3c83894fd39cd5496f52b0cebc27d2ffac extends Twig_Template
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

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<h2 class=\"content-title-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menutop.news"), "html", null, true);
        echo "</h2>
<div class=\"category\">
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "    <div class=\"item-row clearfix\">
      ";
            // line 12
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image")) {
                // line 13
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_interesting_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
                echo "\" class=\"read-more\">
          <img src=\"";
                // line 14
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image"), "list");
                echo "\" class=\"news_pics\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                echo "\" />
        ";
                // line 18
                echo "        </a>
      ";
            }
            // line 20
            echo "
      <h4>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "_Date"), "d/m/Y"), "html", null, true);
            echo "</h4>
      <br />
      <h3 class=\"item-title\">
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_interesting_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
            echo "</a>
      </h3>
      <div class=\"intro\"> 
        ";
            // line 27
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "shortContent");
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_main_interesting_detailed", array("slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "slug"))), "html", null, true);
            echo "\" class=\"read-more\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("more"), "html", null, true);
            echo "</a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  ";
        // line 32
        echo "<div>";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        echo "</div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Interesting:interestings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  116 => 31,  102 => 27,  94 => 24,  88 => 21,  85 => 20,  81 => 18,  75 => 14,  70 => 13,  68 => 12,  65 => 11,  61 => 10,  53 => 8,  50 => 7,  44 => 6,  38 => 5,  31 => 4,);
    }
}
