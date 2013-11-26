<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_0523bd025e34ddbdc2afb94a0ee7a2c5ef63b5ca76e1ecf3eb9ef3b130510574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions");
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "results")) > 0)) {
            // line 25
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 26
                echo "        <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\" />
        ";
            }
            // line 29
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 30
            $this->displayBlock('table_header', $context, $blocks);
            // line 64
            echo "
                ";
            // line 65
            $this->displayBlock('table_body', $context, $blocks);
            // line 74
            echo "
                ";
            // line 75
            $this->displayBlock('table_footer', $context, $blocks);
            // line 138
            echo "            </table>
        ";
            // line 139
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 140
                echo "        </form>
        ";
            }
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "        <p class=\"notice\">
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 30
    public function block_table_header($context, array $blocks = array())
    {
        // line 31
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 35
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
                // line 41
                echo "                                        ";
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["sortable"] = false;
                // line 44
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "sortable"))) {
                    // line 45
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 46
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid")), "method");
                    // line 47
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter"), "_sort_by")));
                    // line 48
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 49
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "_sort_order")));
                    // line 50
                    echo "                                    ";
                }
                // line 51
                echo "
                                    ";
                // line 52
                ob_start();
                // line 53
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                            ";
                // line 54
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "method"), "html", null, true);
                echo "
                                            ";
                // line 56
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 57
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 65
    public function block_table_body($context, array $blocks = array())
    {
        // line 66
        echo "                    <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                            <tr>
                                ";
            // line 69
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 70
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                ";
    }

    // line 75
    public function block_table_footer($context, array $blocks = array())
    {
        // line 76
        echo "                    <tr>
                        <th colspan=\"";
        // line 77
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 79
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
            // line 80
            echo "                                    ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 81
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 108
                echo "
                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 111
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 113
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                        echo ",";
                    }
                    // line 117
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 121
            echo "
                                        ";
            // line 122
            $this->displayBlock('pager_results', $context, $blocks);
            // line 125
            echo "                                    </div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 131
        $this->displayBlock('pager_links', $context, $blocks);
        // line 136
        echo "
                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                            <script type=\"text/javascript\">
                                                ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                            </script>

                                            ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 107
        echo "                                        ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                </select>
                                            ";
    }

    // line 122
    public function block_pager_results($context, array $blocks = array())
    {
        // line 123
        echo "                                            ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 124
        echo "                                        ";
    }

    // line 131
    public function block_pager_links($context, array $blocks = array())
    {
        // line 132
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 133
            echo "                            ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 134
            echo "                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 149
    public function block_list_filters($context, array $blocks = array())
    {
        // line 150
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "filters")) {
            // line 151
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 153
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 155
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 157
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 158
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 161
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 168
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 177
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : $this->getContext($context, "paramKey")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : $this->getContext($context, "paramValue")), "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 158,  500 => 157,  488 => 153,  477 => 150,  474 => 149,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 125,  352 => 121,  333 => 117,  302 => 114,  300 => 113,  296 => 111,  226 => 67,  214 => 61,  186 => 54,  174 => 53,  127 => 34,  267 => 73,  244 => 66,  237 => 64,  232 => 63,  211 => 56,  205 => 59,  172 => 52,  167 => 79,  134 => 37,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 177,  548 => 165,  526 => 164,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 143,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 127,  402 => 170,  396 => 159,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  299 => 64,  283 => 58,  275 => 77,  271 => 55,  261 => 71,  253 => 47,  231 => 33,  222 => 30,  216 => 28,  210 => 22,  194 => 177,  185 => 47,  180 => 120,  148 => 44,  114 => 88,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 132,  486 => 145,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 143,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 127,  358 => 113,  355 => 122,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 59,  286 => 80,  272 => 76,  250 => 67,  247 => 67,  233 => 62,  228 => 59,  223 => 66,  200 => 55,  84 => 36,  76 => 19,  344 => 97,  340 => 95,  338 => 76,  335 => 93,  321 => 91,  312 => 68,  292 => 87,  285 => 81,  282 => 80,  280 => 79,  277 => 78,  264 => 72,  259 => 70,  252 => 68,  220 => 65,  215 => 54,  190 => 49,  184 => 47,  181 => 47,  178 => 119,  161 => 46,  129 => 24,  70 => 25,  118 => 32,  153 => 43,  124 => 23,  65 => 25,  113 => 48,  110 => 29,  104 => 23,  81 => 30,  58 => 12,  90 => 18,  23 => 12,  263 => 71,  256 => 69,  249 => 70,  241 => 95,  236 => 35,  225 => 60,  213 => 86,  207 => 83,  197 => 56,  191 => 50,  175 => 118,  160 => 48,  155 => 66,  152 => 99,  146 => 34,  137 => 27,  126 => 55,  100 => 43,  97 => 87,  77 => 13,  34 => 16,  20 => 11,  53 => 24,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 155,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 118,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 116,  322 => 107,  319 => 71,  315 => 90,  308 => 100,  304 => 99,  295 => 88,  293 => 61,  288 => 108,  278 => 94,  274 => 77,  268 => 54,  262 => 89,  257 => 49,  251 => 86,  245 => 97,  239 => 94,  234 => 80,  218 => 77,  192 => 55,  188 => 48,  177 => 42,  169 => 51,  140 => 41,  132 => 43,  128 => 35,  107 => 46,  61 => 27,  273 => 75,  269 => 75,  254 => 68,  243 => 68,  240 => 86,  238 => 36,  235 => 83,  230 => 62,  227 => 32,  224 => 78,  221 => 88,  219 => 29,  217 => 58,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 31,  102 => 142,  71 => 32,  67 => 33,  63 => 28,  59 => 23,  28 => 14,  201 => 57,  196 => 52,  183 => 121,  171 => 61,  166 => 50,  163 => 49,  158 => 37,  156 => 44,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 33,  117 => 49,  105 => 143,  91 => 75,  62 => 24,  49 => 18,  94 => 40,  89 => 17,  85 => 83,  75 => 32,  68 => 26,  56 => 22,  38 => 7,  87 => 17,  31 => 15,  25 => 12,  21 => 11,  26 => 14,  24 => 13,  19 => 11,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  44 => 21,  27 => 12,  79 => 34,  72 => 31,  69 => 34,  47 => 25,  40 => 15,  37 => 14,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 31,  131 => 25,  123 => 33,  120 => 47,  115 => 27,  111 => 30,  108 => 144,  101 => 22,  98 => 140,  96 => 139,  83 => 64,  74 => 78,  66 => 30,  55 => 24,  52 => 23,  50 => 20,  43 => 16,  41 => 23,  35 => 20,  32 => 16,  29 => 13,  209 => 76,  203 => 278,  199 => 52,  193 => 50,  189 => 71,  187 => 49,  182 => 46,  176 => 45,  173 => 112,  168 => 72,  164 => 109,  162 => 57,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 55,  130 => 35,  125 => 34,  122 => 43,  116 => 30,  112 => 30,  109 => 44,  106 => 35,  103 => 34,  99 => 23,  95 => 19,  92 => 19,  86 => 65,  82 => 10,  80 => 14,  73 => 27,  64 => 31,  60 => 3,  57 => 26,  54 => 26,  51 => 19,  48 => 67,  45 => 17,  42 => 16,  39 => 18,  36 => 17,  33 => 17,  30 => 15,);
    }
}
