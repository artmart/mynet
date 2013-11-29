<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_74ea975fe7f343464c55398852f2eb14535ae8152b55f78c15d2d532bb6c417a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  90 => 27,  81 => 26,  77 => 25,  73 => 24,  66 => 23,  63 => 22,  58 => 19,  55 => 18,  52 => 17,  42 => 13,  39 => 12,  35 => 22,  30 => 17,  27 => 16,  25 => 12,  24 => 13,  22 => 11,  19 => 11,  67 => 19,  53 => 18,  49 => 17,  32 => 21,  29 => 15,  26 => 14,);
    }
}
