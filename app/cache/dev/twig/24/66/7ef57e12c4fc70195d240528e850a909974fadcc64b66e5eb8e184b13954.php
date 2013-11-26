<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_24667ef57e12c4fc70195d240528e850a909974fadcc64b66e5eb8e184b13954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
    ";
        // line 9
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath") . "/") . (isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path"))), "js", null, true);
        echo "';
    ";
        // line 11
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")) . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 16
        echo "        ";
        $context["plugins"] = "";
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_plugins"]) ? $context["external_plugins"] : $this->getContext($context, "external_plugins")));
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
        foreach ($context['_seq'] as $context["name"] => $context["external_plugin"]) {
            // line 18
            echo "            CKEDITOR.plugins.addExternal('";
            echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
            echo "', '";
            echo ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basePath") . $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : $this->getContext($context, "external_plugin")), "path"));
            echo "', '";
            echo $this->getAttribute((isset($context["external_plugin"]) ? $context["external_plugin"] : $this->getContext($context, "external_plugin")), "file");
            echo "');
            ";
            // line 19
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                // line 20
                echo "                ";
                $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")) . ",");
                // line 21
                echo "            ";
            }
            // line 22
            echo "            ";
            $context["plugins"] = ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")) . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 23
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['external_plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        CKEDITOR.replace(\"";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\",{
            ";
        // line 25
        if ((!(null === (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"))))) {
            // line 26
            echo "                width: '";
            echo (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"));
            echo "',
            ";
        }
        // line 28
        echo "            ";
        if ((!(null === (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"))))) {
            // line 29
            echo "                height: '";
            echo (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"));
            echo "',
            ";
        }
        // line 31
        echo "            ";
        if ((!(null === (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language"))))) {
            // line 32
            echo "                language: '";
            echo (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language"));
            echo "',
            ";
        }
        // line 34
        echo "            ";
        if ((!(null === (isset($context["ui_color"]) ? $context["ui_color"] : $this->getContext($context, "ui_color"))))) {
            // line 35
            echo "                uiColor: \"";
            echo (isset($context["ui_color"]) ? $context["ui_color"] : $this->getContext($context, "ui_color"));
            echo "\",
            ";
        }
        // line 37
        echo "            ";
        if (((isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : $this->getContext($context, "startup_outline_blocks")) == true)) {
            // line 38
            echo "                startupOutlineBlocks: ";
            echo (isset($context["startup_outline_blocks"]) ? $context["startup_outline_blocks"] : $this->getContext($context, "startup_outline_blocks"));
            echo ",
            ";
        }
        // line 40
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route"))))) {
            // line 41
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route"), $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "url"))))) {
            // line 43
            echo "                filebrowserBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_browse_url"]) ? $context["filebrowser_browse_url"] : $this->getContext($context, "filebrowser_browse_url")), "url");
            echo "',
            ";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route"))))) {
            // line 46
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route"), $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "url"))))) {
            // line 48
            echo "                filebrowserUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_upload_url"]) ? $context["filebrowser_upload_url"] : $this->getContext($context, "filebrowser_upload_url")), "url");
            echo "',
            ";
        }
        // line 50
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route"))))) {
            // line 51
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route"), $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "url"))))) {
            // line 53
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_browse_url"]) ? $context["filebrowser_image_browse_url"] : $this->getContext($context, "filebrowser_image_browse_url")), "url");
            echo "',
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route"))))) {
            // line 57
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route"), $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "url"))))) {
            // line 59
            echo "                filebrowserImageUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_image_upload_url"]) ? $context["filebrowser_image_upload_url"] : $this->getContext($context, "filebrowser_image_upload_url")), "url");
            echo "',
            ";
        }
        // line 61
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route"))))) {
            // line 62
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route"), $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "url"))))) {
            // line 64
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_browse_url"]) ? $context["filebrowser_flash_browse_url"] : $this->getContext($context, "filebrowser_flash_browse_url")), "url");
            echo "',
            ";
        }
        // line 66
        echo "            ";
        if (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "route", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route"))))) {
            // line 67
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route"), $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : null), "url", array(), "any", true, true) && (!(null === $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "url"))))) {
            // line 69
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->getAttribute((isset($context["filebrowser_flash_upload_url"]) ? $context["filebrowser_flash_upload_url"] : $this->getContext($context, "filebrowser_flash_upload_url")), "url");
            echo "',
            ";
        }
        // line 71
        echo "            ";
        if ((!(null === (isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin"))))) {
            // line 72
            echo "                skin: '";
            echo (isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin"));
            echo "',
            ";
        }
        // line 74
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["format_tags"]) ? $context["format_tags"] : $this->getContext($context, "format_tags"))) > 0)) {
            // line 75
            echo "                format_tags: '";
            echo twig_join_filter((isset($context["format_tags"]) ? $context["format_tags"] : $this->getContext($context, "format_tags")), ";");
            echo "',
            ";
        }
        // line 77
        echo "            ";
        if ((!(null === (isset($context["base_href"]) ? $context["base_href"] : $this->getContext($context, "base_href"))))) {
            // line 78
            echo "                baseHref: '";
            echo (isset($context["base_href"]) ? $context["base_href"] : $this->getContext($context, "base_href"));
            echo "',
            ";
        }
        // line 80
        echo "            ";
        if ((!(null === (isset($context["body_class"]) ? $context["body_class"] : $this->getContext($context, "body_class"))))) {
            // line 81
            echo "                bodyClass: '";
            echo (isset($context["body_class"]) ? $context["body_class"] : $this->getContext($context, "body_class"));
            echo "',
            ";
        }
        // line 83
        echo "            ";
        if ((!(null === (isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css"))))) {
            // line 84
            echo "                contentsCss: '";
            echo $this->env->getExtension('assets')->getAssetUrl((isset($context["contents_css"]) ? $context["contents_css"] : $this->getContext($context, "contents_css")));
            echo "',
            ";
        }
        // line 86
        echo "            ";
        if ((!(null === (isset($context["basic_entities"]) ? $context["basic_entities"] : $this->getContext($context, "basic_entities"))))) {
            // line 87
            echo "                basicEntities: '";
            echo (isset($context["basic_entities"]) ? $context["basic_entities"] : $this->getContext($context, "basic_entities"));
            echo "',
            ";
        }
        // line 89
        echo "            ";
        if ((!(null === (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
            // line 90
            echo "                entities: '";
            echo (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"));
            echo "',
            ";
        }
        // line 92
        echo "            ";
        if ((!(null === (isset($context["entities_latin"]) ? $context["entities_latin"] : $this->getContext($context, "entities_latin"))))) {
            // line 93
            echo "                entities_latin: '";
            echo (isset($context["entities_latin"]) ? $context["entities_latin"] : $this->getContext($context, "entities_latin"));
            echo "',
            ";
        }
        // line 95
        echo "            ";
        if ((!(null === (isset($context["startup_mode"]) ? $context["startup_mode"] : $this->getContext($context, "startup_mode"))))) {
            // line 96
            echo "                startupMode: '";
            echo (isset($context["startup_mode"]) ? $context["startup_mode"] : $this->getContext($context, "startup_mode"));
            echo "',
            ";
        }
        // line 98
        echo "            ";
        if ((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"))) {
            // line 99
            echo "                extraPlugins: '";
            echo (isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"));
            echo "',
            ";
        }
        // line 101
        echo "            toolbar: ";
        echo twig_jsonencode_filter((isset($context["toolbar"]) ? $context["toolbar"] : $this->getContext($context, "toolbar")));
        echo "
        });
    ";
        // line 104
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 104,  336 => 99,  333 => 98,  315 => 92,  309 => 90,  300 => 87,  297 => 86,  288 => 83,  282 => 81,  273 => 78,  270 => 77,  264 => 75,  252 => 71,  240 => 67,  237 => 66,  225 => 62,  222 => 61,  216 => 59,  205 => 55,  193 => 51,  190 => 50,  184 => 48,  175 => 45,  160 => 40,  151 => 37,  145 => 35,  142 => 34,  118 => 26,  111 => 24,  56 => 16,  51 => 13,  31 => 4,  22 => 2,  20 => 1,  113 => 28,  86 => 19,  71 => 13,  41 => 5,  26 => 28,  23 => 27,  21 => 1,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  469 => 144,  464 => 142,  452 => 139,  448 => 138,  444 => 137,  433 => 135,  430 => 134,  427 => 133,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  409 => 127,  406 => 126,  403 => 125,  400 => 124,  393 => 121,  387 => 119,  381 => 117,  375 => 115,  373 => 114,  370 => 113,  355 => 107,  351 => 106,  344 => 104,  341 => 103,  326 => 95,  318 => 93,  311 => 93,  308 => 92,  303 => 90,  295 => 85,  290 => 83,  285 => 82,  283 => 81,  271 => 75,  269 => 74,  261 => 74,  245 => 61,  242 => 60,  234 => 56,  231 => 64,  228 => 54,  226 => 53,  220 => 51,  218 => 50,  215 => 49,  208 => 56,  203 => 44,  198 => 42,  185 => 35,  182 => 34,  179 => 33,  177 => 32,  170 => 28,  169 => 43,  163 => 41,  157 => 23,  154 => 38,  152 => 21,  149 => 20,  132 => 10,  130 => 9,  120 => 4,  105 => 2,  90 => 161,  85 => 150,  83 => 18,  78 => 103,  75 => 102,  73 => 90,  68 => 80,  65 => 79,  63 => 10,  60 => 69,  58 => 60,  55 => 59,  53 => 8,  48 => 42,  43 => 20,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  461 => 141,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  423 => 151,  420 => 150,  411 => 144,  402 => 138,  398 => 123,  394 => 136,  390 => 134,  388 => 133,  385 => 118,  379 => 124,  368 => 116,  364 => 109,  359 => 114,  357 => 113,  350 => 111,  346 => 105,  342 => 101,  338 => 107,  335 => 106,  332 => 98,  330 => 104,  327 => 96,  324 => 95,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  306 => 89,  304 => 96,  296 => 94,  291 => 84,  289 => 90,  286 => 89,  279 => 80,  263 => 72,  258 => 70,  255 => 72,  250 => 66,  247 => 62,  244 => 60,  241 => 59,  238 => 56,  235 => 55,  233 => 54,  230 => 53,  209 => 39,  201 => 43,  199 => 53,  196 => 33,  178 => 46,  171 => 29,  168 => 26,  162 => 11,  156 => 9,  144 => 4,  137 => 2,  129 => 667,  127 => 29,  122 => 488,  117 => 410,  109 => 364,  107 => 24,  99 => 317,  97 => 23,  94 => 22,  89 => 197,  87 => 188,  79 => 149,  77 => 18,  74 => 131,  72 => 89,  69 => 88,  62 => 33,  52 => 11,  49 => 10,  44 => 6,  284 => 128,  280 => 80,  274 => 80,  267 => 120,  260 => 71,  253 => 112,  246 => 69,  239 => 104,  227 => 95,  223 => 94,  210 => 57,  202 => 79,  194 => 74,  188 => 36,  173 => 30,  165 => 56,  158 => 52,  155 => 51,  153 => 50,  150 => 49,  139 => 3,  136 => 32,  134 => 1,  131 => 38,  116 => 25,  112 => 365,  102 => 1,  98 => 21,  95 => 167,  93 => 162,  91 => 21,  82 => 150,  59 => 17,  57 => 9,  54 => 12,  50 => 48,  47 => 11,  45 => 41,  40 => 19,  37 => 4,  35 => 7,  32 => 10,  27 => 8,  25 => 3,  138 => 12,  133 => 31,  124 => 28,  119 => 487,  114 => 409,  108 => 31,  104 => 346,  100 => 29,  96 => 28,  92 => 198,  88 => 20,  84 => 187,  80 => 17,  76 => 16,  70 => 89,  67 => 53,  64 => 52,  42 => 9,  38 => 8,  33 => 5,  30 => 1,);
    }
}
