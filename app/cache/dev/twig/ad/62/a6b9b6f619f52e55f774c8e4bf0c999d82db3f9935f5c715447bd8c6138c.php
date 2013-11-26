<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_ad62a6b9b6f619f52e55f774c8e4bf0c999d82db3f9935f5c715447bd8c6138c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu_before' => array($this, 'block_sonata_nav_menu_before'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_nav_menu_after' => array($this, 'block_sonata_nav_menu_after'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
        <title>
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 82
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 83
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 85
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 86
                echo "                    -
                    ";
                // line 87
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 88
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 89
                        echo "                            &gt;
                        ";
                    }
                    // line 91
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                ";
            }
            // line 94
            echo "            ";
        }
        // line 95
        echo "        </title>
    </head>
    <body ";
        // line 97
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 99
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 109
        if (array_key_exists("admin_pool", $context)) {
            // line 110
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 112
            $this->displayBlock('logo', $context, $blocks);
            // line 118
            echo "
                        ";
            // line 119
            $this->displayBlock('sonata_nav_menu_before', $context, $blocks);
            // line 120
            echo "
                        ";
            // line 121
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 173
            echo "                        
                        ";
            // line 174
            $this->displayBlock('sonata_nav_menu_after', $context, $blocks);
            // line 175
            echo "                        
                    ";
        }
        // line 177
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 182
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 278
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            ";
        // line 35
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 47
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 57
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 58
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 59
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 61
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            ";
        // line 70
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        // line 73
        echo "
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 75
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 76
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 97
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc ";
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\"";
    }

    // line 112
    public function block_logo($context, array $blocks = array())
    {
        // line 113
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 119
    public function block_sonata_nav_menu_before($context, array $blocks = array())
    {
    }

    // line 121
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 122
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 124
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 125
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 158
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 159
        echo "                                </ul>

                                ";
        // line 161
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 170
        echo "
                            </div>
                        ";
    }

    // line 124
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 125
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 126
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 127
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 128
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 129
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 130
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 131
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "
                                                ";
                // line 134
                echo "                                                ";
                $context["item_count"] = 0;
                // line 135
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 136
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 137
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 138
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 139
                                echo "                                                        ";
                            }
                            // line 140
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                ";
                }
                // line 142
                echo "
                                                ";
                // line 143
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 144
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 147
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 148
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 149
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 151
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 155
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                        ";
        }
        // line 157
        echo "                                    ";
    }

    // line 158
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 161
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 162
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 163
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"/>
                                            </div>
                                        </form>
                                    ";
        }
        // line 169
        echo "                                ";
    }

    // line 174
    public function block_sonata_nav_menu_after($context, array $blocks = array())
    {
    }

    // line 182
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 183
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 193
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 195
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 196
            echo "                        <div class=\"span6\">
                            <ul class=\"breadcrumb\">
                                ";
            // line 198
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 199
                echo "                                    ";
                if (array_key_exists("action", $context)) {
                    // line 200
                    echo "                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 201
                        echo "                                            ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 202
                            echo "                                                <li>
                                                    ";
                            // line 203
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 204
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "</a>
                                                    ";
                            } else {
                                // line 206
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                    ";
                            }
                            // line 208
                            echo "                                                    <span class=\"divider\">/</span>
                                                </li>
                                            ";
                        } else {
                            // line 211
                            echo "                                                <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</li>
                                            ";
                        }
                        // line 213
                        echo "                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                    ";
                }
                // line 215
                echo "                                ";
            } else {
                // line 216
                echo "                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                ";
            }
            // line 218
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 221
        echo "
                    ";
        // line 222
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 223
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 224
            echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
            echo "
                        </div>
                    ";
        }
        // line 227
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 230
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) {
            // line 231
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 232
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "</div>
                        </div>
                    ";
        }
        // line 235
        echo "
                    <div class=\"content ";
        // line 236
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 237
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 267
        echo "                    </div>
                </div>

                ";
        // line 270
        $this->displayBlock('footer', $context, $blocks);
        // line 277
        echo "            ";
    }

    // line 183
    public function block_notice($context, array $blocks = array())
    {
        // line 184
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 185
            echo "                        ";
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level")));
            // line 186
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 187
                echo "                            <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level"))), "html", null, true);
                echo "\">
                                ";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                ";
    }

    // line 237
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 238
        echo "
                            ";
        // line 239
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 240
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 242
        echo "
                            ";
        // line 243
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 244
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 246
        echo "
                            ";
        // line 247
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 248
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 250
        echo "
                            ";
        // line 251
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 252
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 254
        echo "
                            ";
        // line 255
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 256
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list span10\">
                                        ";
            // line 258
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                    </div>
                                    <div class=\"sonata-ba-filter span2\">
                                        ";
            // line 261
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 265
        echo "
                        ";
    }

    // line 270
    public function block_footer($context, array $blocks = array())
    {
        // line 271
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span2 offset10 pull-right\">
                            <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 169,  548 => 165,  526 => 157,  523 => 156,  517 => 155,  506 => 151,  495 => 148,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 115,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  283 => 58,  275 => 57,  271 => 55,  261 => 50,  253 => 47,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 177,  185 => 173,  180 => 120,  148 => 97,  114 => 88,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 128,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 136,  451 => 141,  446 => 139,  430 => 137,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 124,  377 => 115,  374 => 114,  371 => 113,  361 => 107,  358 => 113,  355 => 112,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 66,  297 => 84,  291 => 82,  289 => 59,  286 => 80,  272 => 76,  250 => 67,  247 => 66,  233 => 62,  228 => 59,  223 => 58,  200 => 55,  84 => 16,  76 => 32,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  285 => 84,  282 => 79,  280 => 82,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 56,  215 => 54,  190 => 175,  184 => 47,  181 => 47,  178 => 119,  161 => 38,  129 => 24,  70 => 25,  118 => 28,  153 => 35,  124 => 23,  65 => 5,  113 => 37,  110 => 25,  104 => 23,  81 => 16,  58 => 22,  90 => 18,  23 => 13,  263 => 71,  256 => 102,  249 => 67,  241 => 95,  236 => 35,  225 => 89,  213 => 86,  207 => 83,  197 => 54,  191 => 50,  175 => 118,  160 => 68,  155 => 66,  152 => 99,  146 => 34,  137 => 27,  126 => 55,  100 => 41,  97 => 87,  77 => 8,  34 => 53,  20 => 1,  53 => 20,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 148,  463 => 160,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 141,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 102,  332 => 75,  324 => 92,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 85,  278 => 94,  274 => 77,  268 => 54,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 75,  188 => 174,  177 => 65,  169 => 69,  140 => 28,  132 => 43,  128 => 49,  107 => 24,  61 => 23,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 36,  235 => 83,  230 => 79,  227 => 32,  224 => 78,  221 => 88,  219 => 29,  217 => 87,  208 => 57,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 17,  71 => 32,  67 => 28,  63 => 4,  59 => 165,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 61,  166 => 110,  163 => 68,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 93,  136 => 58,  121 => 91,  117 => 89,  105 => 40,  91 => 85,  62 => 24,  49 => 18,  94 => 86,  89 => 37,  85 => 83,  75 => 34,  68 => 6,  56 => 21,  38 => 7,  87 => 17,  31 => 17,  25 => 12,  21 => 2,  26 => 14,  24 => 11,  19 => 1,  93 => 28,  88 => 12,  78 => 80,  46 => 19,  44 => 17,  27 => 12,  79 => 14,  72 => 54,  69 => 53,  47 => 17,  40 => 44,  37 => 12,  22 => 2,  246 => 90,  157 => 41,  145 => 60,  139 => 31,  131 => 25,  123 => 30,  120 => 47,  115 => 27,  111 => 43,  108 => 42,  101 => 22,  98 => 21,  96 => 19,  83 => 82,  74 => 78,  66 => 30,  55 => 21,  52 => 113,  50 => 19,  43 => 15,  41 => 14,  35 => 11,  32 => 5,  29 => 11,  209 => 76,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 70,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 58,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 55,  130 => 57,  125 => 40,  122 => 43,  116 => 43,  112 => 26,  109 => 44,  106 => 35,  103 => 34,  99 => 30,  95 => 20,  92 => 19,  86 => 17,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 16,  42 => 16,  39 => 13,  36 => 14,  33 => 13,  30 => 15,);
    }
}
