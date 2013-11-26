<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_ec2ede64417d7cd15804eb68f9dca4b33762344dbdc29e845ea02cd152480d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig");

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        // line 16
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  31 => 15,  28 => 14,);
    }
}
