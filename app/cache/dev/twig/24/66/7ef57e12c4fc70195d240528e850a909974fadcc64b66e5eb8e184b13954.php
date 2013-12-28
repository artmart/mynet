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
        return array (  270 => 77,  255 => 72,  206 => 58,  229 => 96,  212 => 88,  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  346 => 196,  331 => 187,  316 => 121,  284 => 106,  279 => 80,  253 => 68,  401 => 156,  390 => 150,  366 => 210,  364 => 139,  359 => 138,  328 => 124,  290 => 106,  283 => 166,  198 => 80,  195 => 68,  155 => 75,  318 => 93,  306 => 89,  303 => 139,  242 => 140,  170 => 77,  150 => 55,  12 => 34,  572 => 180,  561 => 178,  557 => 330,  544 => 172,  538 => 319,  521 => 162,  517 => 161,  511 => 160,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  474 => 285,  470 => 135,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  407 => 242,  395 => 84,  392 => 83,  382 => 93,  380 => 83,  369 => 141,  367 => 131,  357 => 125,  352 => 135,  333 => 98,  302 => 114,  300 => 87,  296 => 109,  275 => 103,  226 => 67,  214 => 60,  186 => 111,  160 => 40,  267 => 156,  261 => 74,  256 => 96,  244 => 85,  237 => 66,  232 => 136,  205 => 55,  172 => 52,  167 => 76,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  549 => 174,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  508 => 159,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  460 => 132,  457 => 131,  444 => 134,  438 => 133,  435 => 258,  427 => 130,  424 => 254,  418 => 128,  410 => 96,  406 => 158,  386 => 95,  379 => 119,  373 => 142,  368 => 117,  348 => 104,  317 => 70,  298 => 173,  294 => 61,  276 => 57,  266 => 52,  258 => 49,  241 => 101,  231 => 64,  222 => 61,  216 => 59,  210 => 57,  194 => 79,  185 => 68,  180 => 62,  114 => 59,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 169,  533 => 160,  530 => 165,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  480 => 151,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 136,  425 => 135,  414 => 127,  409 => 124,  400 => 129,  398 => 128,  388 => 107,  377 => 82,  374 => 81,  371 => 113,  361 => 208,  355 => 136,  349 => 133,  342 => 101,  339 => 100,  336 => 99,  329 => 75,  326 => 185,  311 => 89,  307 => 115,  297 => 86,  291 => 84,  286 => 132,  272 => 158,  263 => 124,  250 => 93,  247 => 67,  236 => 108,  233 => 98,  223 => 66,  200 => 70,  191 => 53,  175 => 45,  152 => 74,  146 => 49,  84 => 48,  76 => 34,  344 => 97,  340 => 95,  335 => 188,  321 => 183,  312 => 177,  292 => 134,  282 => 81,  280 => 101,  264 => 75,  259 => 70,  252 => 71,  249 => 70,  220 => 80,  215 => 78,  190 => 50,  184 => 48,  181 => 81,  178 => 46,  161 => 45,  137 => 65,  129 => 64,  97 => 23,  70 => 31,  118 => 26,  153 => 63,  124 => 28,  100 => 33,  65 => 35,  126 => 63,  110 => 25,  104 => 51,  81 => 47,  77 => 18,  58 => 32,  90 => 46,  23 => 28,  358 => 106,  343 => 132,  341 => 131,  338 => 78,  327 => 96,  323 => 125,  309 => 90,  305 => 115,  301 => 111,  299 => 112,  289 => 81,  285 => 81,  281 => 105,  277 => 100,  271 => 108,  265 => 99,  260 => 98,  248 => 115,  228 => 83,  225 => 62,  213 => 126,  211 => 59,  202 => 57,  197 => 54,  174 => 23,  165 => 75,  148 => 69,  134 => 55,  127 => 29,  113 => 55,  34 => 26,  20 => 1,  53 => 30,  490 => 171,  484 => 170,  479 => 167,  471 => 164,  467 => 134,  463 => 133,  454 => 136,  450 => 157,  447 => 135,  445 => 267,  440 => 153,  437 => 152,  433 => 151,  423 => 128,  419 => 98,  417 => 140,  412 => 174,  408 => 138,  403 => 157,  397 => 131,  394 => 152,  391 => 125,  389 => 128,  384 => 147,  378 => 144,  375 => 120,  372 => 119,  370 => 118,  365 => 116,  351 => 135,  347 => 118,  332 => 125,  324 => 95,  322 => 72,  319 => 90,  315 => 92,  308 => 67,  304 => 174,  295 => 88,  293 => 109,  288 => 83,  278 => 94,  274 => 98,  268 => 126,  262 => 51,  257 => 149,  251 => 105,  245 => 83,  239 => 83,  234 => 80,  218 => 91,  192 => 65,  188 => 88,  177 => 49,  169 => 43,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 29,  273 => 78,  269 => 100,  254 => 68,  243 => 89,  240 => 67,  238 => 139,  235 => 83,  230 => 63,  227 => 134,  224 => 102,  221 => 75,  219 => 129,  217 => 61,  208 => 56,  204 => 73,  179 => 84,  159 => 59,  143 => 39,  135 => 44,  119 => 30,  102 => 37,  71 => 28,  67 => 27,  63 => 34,  59 => 17,  28 => 20,  201 => 72,  196 => 52,  183 => 50,  171 => 81,  166 => 79,  163 => 41,  158 => 64,  156 => 93,  151 => 37,  142 => 34,  138 => 69,  136 => 32,  121 => 61,  117 => 44,  105 => 55,  91 => 21,  62 => 19,  49 => 20,  94 => 22,  89 => 28,  85 => 27,  75 => 43,  68 => 36,  56 => 16,  38 => 10,  87 => 49,  31 => 4,  25 => 3,  21 => 2,  26 => 29,  24 => 21,  19 => 19,  93 => 47,  88 => 20,  78 => 25,  46 => 13,  44 => 26,  27 => 5,  79 => 25,  72 => 25,  69 => 40,  47 => 11,  40 => 5,  37 => 8,  22 => 2,  246 => 69,  157 => 44,  145 => 35,  139 => 45,  131 => 61,  123 => 58,  120 => 57,  115 => 49,  111 => 24,  108 => 56,  101 => 30,  98 => 34,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 5,  32 => 7,  29 => 24,  209 => 73,  203 => 122,  199 => 53,  193 => 51,  189 => 64,  187 => 84,  182 => 85,  176 => 65,  173 => 48,  168 => 80,  164 => 46,  162 => 74,  154 => 38,  149 => 73,  147 => 41,  144 => 48,  141 => 70,  133 => 31,  130 => 54,  125 => 59,  122 => 104,  116 => 25,  112 => 41,  109 => 42,  106 => 35,  103 => 34,  99 => 38,  95 => 37,  92 => 31,  86 => 19,  82 => 26,  80 => 43,  73 => 23,  64 => 38,  60 => 10,  57 => 24,  54 => 34,  51 => 13,  48 => 7,  45 => 30,  42 => 9,  39 => 11,  36 => 5,  33 => 5,  30 => 21,);
    }
}
