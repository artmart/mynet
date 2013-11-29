<?php

/* MYMainBundle:Admin:edit_i18n.html.twig */
class __TwigTemplate_4eb79547580230df0c09567f8839afabc709fc241dff38435e13dd37a70ca71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <!--<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mymain/css/a2lix_translation.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />-->
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <!--<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mymain/js/a2lix_translation.js "), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        // line 17
        echo "    <script>
        \$('textarea').attr('class', 'tinymce');
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "MYMainBundle:Admin:edit_i18n.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  61 => 16,  58 => 15,  52 => 12,  47 => 11,  44 => 10,  38 => 7,  33 => 6,  30 => 5,);
    }
}
