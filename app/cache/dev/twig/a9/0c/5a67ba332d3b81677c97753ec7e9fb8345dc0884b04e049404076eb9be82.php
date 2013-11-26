<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_a90c5a67ba332d3b81677c97753ec7e9fb8345dc0884b04e049404076eb9be82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url"))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage"))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), "vars"), "id"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), "vars"), "id"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), "vars"), "id"), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength")))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude"), "vars"), "id"))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), "vars"), "id"))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality"), "vars"), "id"))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), "vars"), "id"))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), "vars"), "id"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (((!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true)) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto") === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail"), "width")) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file")) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width")) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height")) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  804 => 353,  799 => 351,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  687 => 288,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  617 => 250,  598 => 238,  586 => 236,  583 => 235,  558 => 224,  554 => 223,  520 => 208,  511 => 203,  503 => 200,  501 => 199,  487 => 192,  461 => 175,  438 => 160,  411 => 144,  385 => 132,  379 => 124,  368 => 116,  364 => 115,  350 => 111,  330 => 104,  313 => 96,  258 => 70,  327 => 103,  255 => 68,  206 => 58,  229 => 96,  212 => 88,  198 => 80,  676 => 401,  659 => 278,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 233,  573 => 340,  567 => 230,  550 => 326,  538 => 319,  531 => 215,  518 => 207,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  443 => 162,  439 => 260,  435 => 258,  429 => 154,  424 => 254,  422 => 250,  346 => 110,  331 => 187,  298 => 173,  316 => 97,  309 => 90,  305 => 115,  284 => 128,  281 => 105,  279 => 84,  399 => 158,  387 => 152,  383 => 224,  366 => 210,  362 => 141,  359 => 114,  348 => 104,  294 => 111,  276 => 102,  270 => 77,  202 => 79,  318 => 93,  306 => 127,  265 => 99,  260 => 71,  248 => 115,  242 => 140,  170 => 77,  165 => 56,  150 => 49,  12 => 34,  553 => 176,  545 => 220,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  504 => 302,  500 => 157,  488 => 153,  477 => 150,  474 => 285,  470 => 135,  460 => 132,  457 => 131,  449 => 123,  441 => 105,  426 => 102,  415 => 247,  410 => 96,  407 => 242,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  357 => 113,  352 => 138,  333 => 98,  302 => 114,  300 => 87,  296 => 94,  226 => 67,  214 => 60,  186 => 69,  174 => 23,  127 => 656,  267 => 120,  244 => 60,  237 => 66,  232 => 136,  211 => 59,  205 => 55,  172 => 64,  167 => 76,  134 => 1,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 360,  800 => 252,  798 => 251,  795 => 349,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 290,  690 => 410,  688 => 230,  683 => 227,  677 => 224,  674 => 397,  672 => 222,  664 => 394,  658 => 216,  638 => 213,  632 => 258,  627 => 208,  621 => 251,  611 => 247,  587 => 200,  584 => 199,  582 => 198,  578 => 234,  576 => 195,  572 => 193,  569 => 231,  566 => 182,  561 => 174,  557 => 330,  548 => 221,  526 => 310,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  481 => 189,  478 => 188,  475 => 141,  468 => 140,  459 => 137,  444 => 132,  434 => 130,  420 => 150,  402 => 138,  396 => 234,  393 => 158,  390 => 134,  381 => 121,  376 => 119,  369 => 136,  363 => 114,  345 => 135,  328 => 74,  325 => 125,  317 => 70,  303 => 139,  299 => 112,  283 => 166,  275 => 103,  271 => 55,  261 => 74,  253 => 112,  231 => 64,  222 => 61,  216 => 59,  210 => 84,  194 => 74,  185 => 68,  180 => 66,  148 => 69,  114 => 409,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 287,  669 => 221,  666 => 200,  663 => 199,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 248,  608 => 246,  605 => 361,  602 => 185,  596 => 181,  592 => 237,  590 => 178,  585 => 177,  568 => 179,  551 => 222,  547 => 173,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  530 => 158,  528 => 167,  525 => 211,  516 => 161,  512 => 152,  510 => 158,  507 => 202,  505 => 156,  502 => 155,  498 => 198,  492 => 295,  486 => 292,  483 => 190,  480 => 151,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  453 => 124,  451 => 141,  446 => 122,  430 => 103,  428 => 129,  425 => 152,  414 => 125,  409 => 124,  400 => 161,  398 => 137,  388 => 133,  377 => 147,  374 => 81,  371 => 144,  361 => 208,  358 => 113,  355 => 122,  349 => 103,  342 => 109,  339 => 100,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  307 => 115,  297 => 86,  291 => 91,  289 => 90,  286 => 89,  272 => 158,  250 => 65,  247 => 64,  233 => 54,  228 => 83,  223 => 94,  200 => 55,  84 => 187,  76 => 9,  344 => 97,  340 => 95,  338 => 107,  335 => 106,  321 => 99,  312 => 177,  292 => 134,  285 => 81,  282 => 81,  280 => 127,  277 => 78,  264 => 75,  259 => 70,  252 => 71,  220 => 80,  215 => 78,  190 => 50,  184 => 48,  181 => 81,  178 => 18,  161 => 45,  129 => 667,  70 => 22,  118 => 26,  153 => 50,  124 => 655,  65 => 35,  113 => 55,  110 => 41,  104 => 346,  81 => 47,  58 => 32,  90 => 46,  23 => 27,  263 => 72,  256 => 96,  249 => 89,  241 => 59,  236 => 108,  225 => 62,  213 => 126,  207 => 83,  197 => 54,  191 => 53,  175 => 45,  160 => 40,  155 => 51,  152 => 74,  146 => 56,  137 => 2,  126 => 63,  100 => 33,  97 => 246,  77 => 132,  34 => 26,  20 => 1,  53 => 30,  490 => 171,  484 => 170,  479 => 167,  471 => 183,  467 => 134,  463 => 133,  454 => 158,  450 => 135,  447 => 134,  445 => 163,  440 => 153,  437 => 131,  433 => 151,  423 => 151,  419 => 98,  417 => 126,  412 => 139,  408 => 124,  403 => 121,  397 => 131,  394 => 136,  391 => 129,  389 => 128,  384 => 122,  378 => 121,  375 => 120,  372 => 119,  370 => 118,  365 => 115,  351 => 114,  347 => 118,  332 => 105,  324 => 102,  322 => 107,  319 => 98,  315 => 92,  308 => 118,  304 => 96,  295 => 88,  293 => 109,  288 => 83,  278 => 94,  274 => 80,  268 => 126,  262 => 89,  257 => 149,  251 => 105,  245 => 88,  239 => 104,  234 => 84,  218 => 91,  192 => 87,  188 => 71,  177 => 49,  169 => 43,  140 => 66,  132 => 65,  128 => 60,  107 => 347,  61 => 29,  273 => 78,  269 => 100,  254 => 91,  243 => 89,  240 => 67,  238 => 56,  235 => 55,  230 => 53,  227 => 95,  224 => 102,  221 => 78,  219 => 129,  217 => 61,  208 => 56,  204 => 73,  179 => 84,  159 => 69,  143 => 39,  135 => 81,  119 => 487,  102 => 318,  71 => 13,  67 => 53,  63 => 34,  59 => 32,  28 => 20,  201 => 35,  196 => 33,  183 => 50,  171 => 14,  166 => 79,  163 => 41,  158 => 52,  156 => 9,  151 => 37,  142 => 34,  138 => 69,  136 => 40,  121 => 61,  117 => 410,  105 => 55,  91 => 14,  62 => 33,  49 => 10,  94 => 245,  89 => 197,  85 => 27,  75 => 43,  68 => 36,  56 => 16,  38 => 10,  87 => 188,  31 => 4,  25 => 1,  21 => 2,  26 => 28,  24 => 21,  19 => 19,  93 => 15,  88 => 13,  78 => 25,  46 => 13,  44 => 8,  27 => 8,  79 => 149,  72 => 89,  69 => 88,  47 => 9,  40 => 13,  37 => 12,  22 => 2,  246 => 108,  157 => 44,  145 => 35,  139 => 3,  131 => 38,  123 => 58,  120 => 57,  115 => 43,  111 => 24,  108 => 56,  101 => 30,  98 => 17,  96 => 48,  83 => 44,  74 => 131,  66 => 39,  55 => 31,  52 => 11,  50 => 49,  43 => 12,  41 => 25,  35 => 11,  32 => 10,  29 => 24,  209 => 39,  203 => 122,  199 => 34,  193 => 51,  189 => 71,  187 => 84,  182 => 85,  176 => 65,  173 => 15,  168 => 13,  164 => 46,  162 => 11,  154 => 38,  149 => 73,  147 => 41,  144 => 4,  141 => 70,  133 => 31,  130 => 49,  125 => 59,  122 => 488,  116 => 26,  112 => 365,  109 => 364,  106 => 40,  103 => 34,  99 => 317,  95 => 16,  92 => 198,  86 => 19,  82 => 150,  80 => 43,  73 => 23,  64 => 52,  60 => 17,  57 => 13,  54 => 12,  51 => 13,  48 => 7,  45 => 38,  42 => 1,  39 => 11,  36 => 5,  33 => 5,  30 => 9,);
    }
}
