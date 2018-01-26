<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_6a8552fb019279b412305c10ed9384d12b67aaff29ffbc5d681f85511ae0e612 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/bf/bfb6edf0bfc98969d7697fcfa4f5e4f67fd11423efae30091af1d2acb121ab42.php
        $__internal_4f5a9a6708d8f6e02506793071cc00839b3ee351b29176bcd8cc9b55dbbfbc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5a9a6708d8f6e02506793071cc00839b3ee351b29176bcd8cc9b55dbbfbc5d->enter($__internal_4f5a9a6708d8f6e02506793071cc00839b3ee351b29176bcd8cc9b55dbbfbc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_2fc253ecb09d2e0c6603cf108ced146b2fb761c5e9eaecca596cff0a513d363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc253ecb09d2e0c6603cf108ced146b2fb761c5e9eaecca596cff0a513d363e->enter($__internal_2fc253ecb09d2e0c6603cf108ced146b2fb761c5e9eaecca596cff0a513d363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_18e85e3b55c8604f037147d541cc35ad7d396969cc8a3662764aeff02e4d1b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e85e3b55c8604f037147d541cc35ad7d396969cc8a3662764aeff02e4d1b43->enter($__internal_18e85e3b55c8604f037147d541cc35ad7d396969cc8a3662764aeff02e4d1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_164234673bcef24576464a88825723a33e33e07054257f0ef0b974bd6ee05ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164234673bcef24576464a88825723a33e33e07054257f0ef0b974bd6ee05ca6->enter($__internal_164234673bcef24576464a88825723a33e33e07054257f0ef0b974bd6ee05ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/8b/8bd143819ef08def9da7dc866fb6b81d01fe3f58df13863b3b1c6f12f7edf5a6.php

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 1, $this->getSourceContext()); })()), "function", array())) {
            // line 2
            echo "at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "line", array()))), array((" at line " . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "line", array())) => ""));
            echo ":";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "line", array());
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 5, $this->getSourceContext()); })()), "function", array())) ? (")") : (""));
        }
        
<<<<<<< HEAD:var/cache/dev/twig/bf/bfb6edf0bfc98969d7697fcfa4f5e4f67fd11423efae30091af1d2acb121ab42.php
        $__internal_4f5a9a6708d8f6e02506793071cc00839b3ee351b29176bcd8cc9b55dbbfbc5d->leave($__internal_4f5a9a6708d8f6e02506793071cc00839b3ee351b29176bcd8cc9b55dbbfbc5d_prof);

        
        $__internal_2fc253ecb09d2e0c6603cf108ced146b2fb761c5e9eaecca596cff0a513d363e->leave($__internal_2fc253ecb09d2e0c6603cf108ced146b2fb761c5e9eaecca596cff0a513d363e_prof);
=======
        $__internal_18e85e3b55c8604f037147d541cc35ad7d396969cc8a3662764aeff02e4d1b43->leave($__internal_18e85e3b55c8604f037147d541cc35ad7d396969cc8a3662764aeff02e4d1b43_prof);

        
        $__internal_164234673bcef24576464a88825723a33e33e07054257f0ef0b974bd6ee05ca6->leave($__internal_164234673bcef24576464a88825723a33e33e07054257f0ef0b974bd6ee05ca6_prof);
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/8b/8bd143819ef08def9da7dc866fb6b81d01fe3f58df13863b3b1c6f12f7edf5a6.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
