<?php

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_ebaed31c5c8080c5178d870af105d80105431731826c5d8970dfe9827e488bab extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/92/92e931c7cb1a7688546152c19e9fd5a98b549d5035c1daefbcea055fb64ab9d8.php
        $__internal_3fc0a41d42d3eb34bf8f1fd9defbf7a52f57dbbce10977c9bc29bb1afed307dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc0a41d42d3eb34bf8f1fd9defbf7a52f57dbbce10977c9bc29bb1afed307dd->enter($__internal_3fc0a41d42d3eb34bf8f1fd9defbf7a52f57dbbce10977c9bc29bb1afed307dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_3afff6be47d780b4cf8c20d07997b8b7fabc96f7fa7c13cf3f2229d675654977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afff6be47d780b4cf8c20d07997b8b7fabc96f7fa7c13cf3f2229d675654977->enter($__internal_3afff6be47d780b4cf8c20d07997b8b7fabc96f7fa7c13cf3f2229d675654977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));
=======
        $__internal_703a087986781569197675324bb7b0a43a790573ee1ca98962a6728e2ca7bad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703a087986781569197675324bb7b0a43a790573ee1ca98962a6728e2ca7bad1->enter($__internal_703a087986781569197675324bb7b0a43a790573ee1ca98962a6728e2ca7bad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_8e849eab52eb5b0b781a4a7d113af29b7b6c6c23932432d6d26868b405d0d515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e849eab52eb5b0b781a4a7d113af29b7b6c6c23932432d6d26868b405d0d515->enter($__internal_8e849eab52eb5b0b781a4a7d113af29b7b6c6c23932432d6d26868b405d0d515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/e1/e1ab171b4690770fce9f2ac16317b7b09822c24ab554fef298f12e6da3f1c3f7.php

        // line 1
        echo "<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["expand"]) || array_key_exists("expand", $context) ? $context["expand"] : (function () { throw new Twig_Error_Runtime('Variable "expand" does not exist.', 4, $this->getSourceContext()); })())) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 7, $this->getSourceContext()); })()), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 8
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 10, $this->getSourceContext()); })()), "class", array()), "\\")), "html", null, true);
        echo "

                    <span class=\"icon icon-close\">";
        // line 12
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 16, $this->getSourceContext()); })()), "message", array())) && ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 16, $this->getSourceContext()); })()) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 24, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_display_code_snippet"] = ((((isset($context["_is_first_user_code"]) || array_key_exists("_is_first_user_code", $context) ? $context["_is_first_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_is_first_user_code" does not exist.', 25, $this->getSourceContext()); })()) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array())));
            // line 26
            echo "            ";
            if ((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 26, $this->getSourceContext()); })())) {
                $context["_is_first_user_code"] = false;
            }
            // line 27
            echo "            <div class=\"trace-line\">
                ";
            // line 28
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 28, $this->getSourceContext()); })()), "i" => $context["i"], "trace" => $context["trace"], "_display_code_snippet" => (isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new Twig_Error_Runtime('Variable "_display_code_snippet" does not exist.', 28, $this->getSourceContext()); })())), false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>
";
        
<<<<<<< HEAD:var/cache/dev/twig/92/92e931c7cb1a7688546152c19e9fd5a98b549d5035c1daefbcea055fb64ab9d8.php
        $__internal_3fc0a41d42d3eb34bf8f1fd9defbf7a52f57dbbce10977c9bc29bb1afed307dd->leave($__internal_3fc0a41d42d3eb34bf8f1fd9defbf7a52f57dbbce10977c9bc29bb1afed307dd_prof);

        
        $__internal_3afff6be47d780b4cf8c20d07997b8b7fabc96f7fa7c13cf3f2229d675654977->leave($__internal_3afff6be47d780b4cf8c20d07997b8b7fabc96f7fa7c13cf3f2229d675654977_prof);
=======
        $__internal_703a087986781569197675324bb7b0a43a790573ee1ca98962a6728e2ca7bad1->leave($__internal_703a087986781569197675324bb7b0a43a790573ee1ca98962a6728e2ca7bad1_prof);

        
        $__internal_8e849eab52eb5b0b781a4a7d113af29b7b6c6c23932432d6d26868b405d0d515->leave($__internal_8e849eab52eb5b0b781a4a7d113af29b7b6c6c23932432d6d26868b405d0d515_prof);
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/e1/e1ab171b4690770fce9f2ac16317b7b09822c24ab554fef298f12e6da3f1c3f7.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  95 => 28,  92 => 27,  87 => 26,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  68 => 19,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  45 => 10,  40 => 8,  38 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                        {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                    </span>
                    {{ exception.class|split('\\\\')|last }}

                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>

                {% if exception.message is not empty and index > 1 %}
                    <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                {% endif %}
            </span>
        </div>

        <div id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _display_code_snippet = _is_first_user_code and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and (trace.file is not empty) %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <div class=\"trace-line\">
                {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace, _display_code_snippet: _display_code_snippet }, with_context = false) }}
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "@Twig/Exception/traces.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.html.twig");
    }
}
