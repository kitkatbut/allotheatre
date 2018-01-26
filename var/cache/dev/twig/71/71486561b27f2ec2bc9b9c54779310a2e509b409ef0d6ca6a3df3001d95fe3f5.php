<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ef41c30844e72005200ada40688efa58ce746171c08e20764c2ac15ae93a2602 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/71/71486561b27f2ec2bc9b9c54779310a2e509b409ef0d6ca6a3df3001d95fe3f5.php
        $__internal_0eca2013782f63cc504c7792b8121f51f27520f1e781f0ae0e89bf9fd229ca66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eca2013782f63cc504c7792b8121f51f27520f1e781f0ae0e89bf9fd229ca66->enter($__internal_0eca2013782f63cc504c7792b8121f51f27520f1e781f0ae0e89bf9fd229ca66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c7732a393316ea7fecb2a1a99e0d06f7baaba6b2f22a7b03ca9c8ca6759961c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7732a393316ea7fecb2a1a99e0d06f7baaba6b2f22a7b03ca9c8ca6759961c9->enter($__internal_c7732a393316ea7fecb2a1a99e0d06f7baaba6b2f22a7b03ca9c8ca6759961c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_abaf6fc53e44c3131bbc871740e9156cb05fcb038d09b020318277caab22bb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abaf6fc53e44c3131bbc871740e9156cb05fcb038d09b020318277caab22bb92->enter($__internal_abaf6fc53e44c3131bbc871740e9156cb05fcb038d09b020318277caab22bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1deeb178a10dffed5ff1d8950e95546fa77d3ccf9f2dde73d18237e3ae3ffd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deeb178a10dffed5ff1d8950e95546fa77d3ccf9f2dde73d18237e3ae3ffd31->enter($__internal_1deeb178a10dffed5ff1d8950e95546fa77d3ccf9f2dde73d18237e3ae3ffd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/3d/3de646e5f066dd7ad20f3988bceb8cf4f369966c92a67feee62f4bce1d1d68ba.php

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 4, $this->getSourceContext()); })()), "message", array()))) {
                // line 5
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 5, $this->getSourceContext()); })()), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
<<<<<<< HEAD:var/cache/dev/twig/71/71486561b27f2ec2bc9b9c54779310a2e509b409ef0d6ca6a3df3001d95fe3f5.php
        $__internal_0eca2013782f63cc504c7792b8121f51f27520f1e781f0ae0e89bf9fd229ca66->leave($__internal_0eca2013782f63cc504c7792b8121f51f27520f1e781f0ae0e89bf9fd229ca66_prof);

        
        $__internal_c7732a393316ea7fecb2a1a99e0d06f7baaba6b2f22a7b03ca9c8ca6759961c9->leave($__internal_c7732a393316ea7fecb2a1a99e0d06f7baaba6b2f22a7b03ca9c8ca6759961c9_prof);
=======
        $__internal_abaf6fc53e44c3131bbc871740e9156cb05fcb038d09b020318277caab22bb92->leave($__internal_abaf6fc53e44c3131bbc871740e9156cb05fcb038d09b020318277caab22bb92_prof);

        
        $__internal_1deeb178a10dffed5ff1d8950e95546fa77d3ccf9f2dde73d18237e3ae3ffd31->leave($__internal_1deeb178a10dffed5ff1d8950e95546fa77d3ccf9f2dde73d18237e3ae3ffd31_prof);
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/3d/3de646e5f066dd7ad20f3988bceb8cf4f369966c92a67feee62f4bce1d1d68ba.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
