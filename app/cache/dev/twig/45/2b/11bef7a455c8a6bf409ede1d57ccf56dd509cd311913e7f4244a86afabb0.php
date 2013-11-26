<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_452b11bef7a455c8a6bf409ede1d57ccf56dd509cd311913e7f4244a86afabb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 20,  33 => 16,  40 => 13,  24 => 12,  21 => 11,  166 => 62,  159 => 60,  152 => 58,  146 => 56,  144 => 55,  141 => 54,  137 => 53,  134 => 52,  127 => 48,  123 => 46,  121 => 45,  118 => 44,  114 => 43,  111 => 42,  108 => 41,  103 => 38,  97 => 36,  91 => 34,  83 => 32,  80 => 31,  74 => 29,  69 => 26,  61 => 24,  58 => 23,  55 => 22,  47 => 20,  44 => 19,  36 => 18,  34 => 12,  31 => 15,  28 => 14,);
    }
}
