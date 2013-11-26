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
        return array (  327 => 96,  255 => 72,  206 => 58,  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  550 => 326,  538 => 319,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  422 => 250,  346 => 196,  331 => 187,  298 => 173,  316 => 121,  309 => 90,  305 => 115,  284 => 106,  281 => 105,  279 => 80,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 140,  348 => 104,  294 => 111,  276 => 102,  270 => 77,  202 => 57,  318 => 93,  306 => 89,  265 => 99,  260 => 98,  248 => 115,  242 => 140,  170 => 77,  165 => 75,  150 => 55,  12 => 34,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 139,  352 => 138,  333 => 98,  302 => 114,  300 => 87,  296 => 111,  226 => 67,  214 => 60,  186 => 69,  174 => 23,  127 => 29,  267 => 156,  244 => 66,  237 => 66,  232 => 136,  211 => 59,  205 => 55,  172 => 64,  167 => 76,  134 => 50,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  557 => 330,  548 => 165,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 249,  402 => 170,  396 => 234,  393 => 158,  390 => 125,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 74,  253 => 68,  231 => 64,  222 => 61,  216 => 59,  210 => 57,  194 => 79,  185 => 68,  180 => 66,  148 => 69,  114 => 59,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 404,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 366,  608 => 202,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  492 => 295,  486 => 292,  483 => 144,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 128,  414 => 125,  409 => 124,  400 => 161,  398 => 119,  388 => 107,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 86,  291 => 84,  289 => 109,  286 => 132,  272 => 158,  250 => 93,  247 => 67,  233 => 98,  228 => 83,  223 => 66,  200 => 55,  84 => 48,  76 => 16,  344 => 97,  340 => 95,  338 => 76,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  285 => 81,  282 => 81,  280 => 130,  277 => 78,  264 => 75,  259 => 70,  252 => 71,  220 => 80,  215 => 78,  190 => 50,  184 => 48,  181 => 81,  178 => 46,  161 => 45,  129 => 64,  70 => 22,  118 => 26,  153 => 63,  124 => 28,  65 => 35,  113 => 55,  110 => 41,  104 => 51,  81 => 47,  58 => 32,  90 => 46,  23 => 27,  263 => 124,  256 => 96,  249 => 89,  241 => 101,  236 => 108,  225 => 62,  213 => 126,  207 => 83,  197 => 54,  191 => 53,  175 => 45,  160 => 40,  155 => 75,  152 => 74,  146 => 56,  137 => 65,  126 => 63,  100 => 33,  97 => 23,  77 => 18,  34 => 26,  20 => 1,  53 => 30,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 267,  440 => 153,  437 => 131,  433 => 151,  423 => 128,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 156,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 75,  324 => 95,  322 => 107,  319 => 71,  315 => 92,  308 => 118,  304 => 174,  295 => 88,  293 => 109,  288 => 83,  278 => 94,  274 => 128,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 86,  234 => 84,  218 => 91,  192 => 87,  188 => 88,  177 => 49,  169 => 43,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 29,  273 => 78,  269 => 100,  254 => 91,  243 => 89,  240 => 67,  238 => 139,  235 => 83,  230 => 63,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 61,  208 => 56,  204 => 73,  179 => 84,  159 => 69,  143 => 39,  135 => 81,  119 => 43,  102 => 35,  71 => 13,  67 => 24,  63 => 34,  59 => 17,  28 => 20,  201 => 72,  196 => 71,  183 => 50,  171 => 81,  166 => 79,  163 => 41,  158 => 59,  156 => 93,  151 => 37,  142 => 34,  138 => 69,  136 => 32,  121 => 61,  117 => 41,  105 => 55,  91 => 21,  62 => 19,  49 => 20,  94 => 22,  89 => 28,  85 => 27,  75 => 43,  68 => 36,  56 => 16,  38 => 10,  87 => 49,  31 => 4,  25 => 3,  21 => 2,  26 => 28,  24 => 21,  19 => 19,  93 => 47,  88 => 20,  78 => 25,  46 => 13,  44 => 26,  27 => 5,  79 => 25,  72 => 25,  69 => 40,  47 => 11,  40 => 7,  37 => 8,  22 => 2,  246 => 69,  157 => 44,  145 => 35,  139 => 49,  131 => 61,  123 => 58,  120 => 57,  115 => 43,  111 => 24,  108 => 56,  101 => 30,  98 => 21,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 5,  32 => 7,  29 => 24,  209 => 95,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 84,  182 => 85,  176 => 65,  173 => 48,  168 => 80,  164 => 46,  162 => 74,  154 => 38,  149 => 73,  147 => 41,  144 => 54,  141 => 70,  133 => 31,  130 => 49,  125 => 59,  122 => 104,  116 => 25,  112 => 48,  109 => 39,  106 => 40,  103 => 34,  99 => 34,  95 => 33,  92 => 32,  86 => 19,  82 => 26,  80 => 43,  73 => 23,  64 => 38,  60 => 17,  57 => 9,  54 => 34,  51 => 13,  48 => 7,  45 => 30,  42 => 9,  39 => 11,  36 => 5,  33 => 5,  30 => 21,);
    }
}
