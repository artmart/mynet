<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_e7820f71fbf7eb151aa1856f0e5bc48d9a176a5eb915c981530bc4fe64e1c05d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  66 => 25,  26 => 3,  24 => 2,  23 => 17,  22 => 12,  19 => 1,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  192 => 64,  189 => 61,  180 => 56,  175 => 53,  172 => 51,  169 => 49,  165 => 47,  163 => 45,  160 => 44,  154 => 40,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  93 => 21,  86 => 17,  84 => 16,  81 => 15,  74 => 11,  69 => 9,  65 => 83,  62 => 24,  55 => 79,  52 => 78,  50 => 15,  47 => 43,  45 => 28,  40 => 20,  35 => 15,  30 => 5,  27 => 8,  350 => 129,  345 => 128,  340 => 126,  335 => 70,  331 => 68,  276 => 53,  273 => 52,  269 => 35,  201 => 33,  196 => 65,  193 => 18,  187 => 60,  182 => 57,  177 => 54,  157 => 143,  148 => 136,  146 => 135,  143 => 133,  140 => 131,  136 => 129,  134 => 128,  131 => 127,  129 => 126,  123 => 122,  117 => 34,  107 => 90,  103 => 88,  98 => 85,  90 => 20,  83 => 30,  75 => 28,  73 => 70,  70 => 26,  68 => 52,  64 => 50,  46 => 14,  42 => 12,  38 => 6,  34 => 4,  32 => 6,  28 => 1,  281 => 66,  271 => 204,  259 => 193,  248 => 183,  235 => 171,  232 => 170,  221 => 79,  215 => 160,  209 => 157,  203 => 154,  197 => 151,  191 => 148,  185 => 59,  179 => 142,  173 => 154,  167 => 48,  156 => 41,  150 => 125,  144 => 122,  138 => 119,  132 => 116,  126 => 113,  120 => 36,  114 => 107,  108 => 28,  105 => 103,  100 => 23,  95 => 22,  92 => 70,  72 => 10,  63 => 45,  60 => 81,  57 => 80,  53 => 42,  43 => 36,  37 => 19,  31 => 4,);
    }
}
