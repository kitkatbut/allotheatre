<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_92becb044c0aaf10f1b7d2043f0c0082aa6bf3ccdeed10e537ab3bc54d03b734 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/8b/8bd143819ef08def9da7dc866fb6b81d01fe3f58df13863b3b1c6f12f7edf5a6.php
        $__internal_83b03563d61d45a9f1416dbdc865e111f036b43a2584f2480c56ad3a8ce84fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b03563d61d45a9f1416dbdc865e111f036b43a2584f2480c56ad3a8ce84fd4->enter($__internal_83b03563d61d45a9f1416dbdc865e111f036b43a2584f2480c56ad3a8ce84fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_67ea6fa5988033ec35a5c917deeaeab65c222d605b66b436b7c67701a1ed0985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ea6fa5988033ec35a5c917deeaeab65c222d605b66b436b7c67701a1ed0985->enter($__internal_67ea6fa5988033ec35a5c917deeaeab65c222d605b66b436b7c67701a1ed0985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_32e34a9a1fd0fcf2da5aadd19f9e51ade6a678e3afded0efe9d20e8987c96aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e34a9a1fd0fcf2da5aadd19f9e51ade6a678e3afded0efe9d20e8987c96aff->enter($__internal_32e34a9a1fd0fcf2da5aadd19f9e51ade6a678e3afded0efe9d20e8987c96aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_d493dca6ac84d991b9283d6a451882c8cb73f8d3b2b13b8edf44c8e81dd057f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d493dca6ac84d991b9283d6a451882c8cb73f8d3b2b13b8edf44c8e81dd057f9->enter($__internal_d493dca6ac84d991b9283d6a451882c8cb73f8d3b2b13b8edf44c8e81dd057f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/7f/7fc6b731c1acaf6f61c0d8c0a6b81abbf88fa83a54704be8187f8f9042f6120c.php

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
        
<<<<<<< HEAD:var/cache/dev/twig/8b/8bd143819ef08def9da7dc866fb6b81d01fe3f58df13863b3b1c6f12f7edf5a6.php
        $__internal_83b03563d61d45a9f1416dbdc865e111f036b43a2584f2480c56ad3a8ce84fd4->leave($__internal_83b03563d61d45a9f1416dbdc865e111f036b43a2584f2480c56ad3a8ce84fd4_prof);

        
        $__internal_67ea6fa5988033ec35a5c917deeaeab65c222d605b66b436b7c67701a1ed0985->leave($__internal_67ea6fa5988033ec35a5c917deeaeab65c222d605b66b436b7c67701a1ed0985_prof);
=======
        $__internal_32e34a9a1fd0fcf2da5aadd19f9e51ade6a678e3afded0efe9d20e8987c96aff->leave($__internal_32e34a9a1fd0fcf2da5aadd19f9e51ade6a678e3afded0efe9d20e8987c96aff_prof);

        
        $__internal_d493dca6ac84d991b9283d6a451882c8cb73f8d3b2b13b8edf44c8e81dd057f9->leave($__internal_d493dca6ac84d991b9283d6a451882c8cb73f8d3b2b13b8edf44c8e81dd057f9_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/7f/7fc6b731c1acaf6f61c0d8c0a6b81abbf88fa83a54704be8187f8f9042f6120c.php

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
", "@Twig/Exception/trace.txt.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
