<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9e952fd1e711f62be4d0fe79e0d105d29d53ae100336ebe8daba6717c3354053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a21911084b817a870fa1fae3178c135753abb8fd62ceb983906d503de42f31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a21911084b817a870fa1fae3178c135753abb8fd62ceb983906d503de42f31a->enter($__internal_9a21911084b817a870fa1fae3178c135753abb8fd62ceb983906d503de42f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e2b7b4d57f7f0f8667002bc067cb904f546f7804129324255a63dcf49de5f653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b7b4d57f7f0f8667002bc067cb904f546f7804129324255a63dcf49de5f653->enter($__internal_e2b7b4d57f7f0f8667002bc067cb904f546f7804129324255a63dcf49de5f653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a21911084b817a870fa1fae3178c135753abb8fd62ceb983906d503de42f31a->leave($__internal_9a21911084b817a870fa1fae3178c135753abb8fd62ceb983906d503de42f31a_prof);

        
        $__internal_e2b7b4d57f7f0f8667002bc067cb904f546f7804129324255a63dcf49de5f653->leave($__internal_e2b7b4d57f7f0f8667002bc067cb904f546f7804129324255a63dcf49de5f653_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d7df4a409e7f49797a306a5c60ed6ff925cb38623e8e2a33a47c043937a713e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7df4a409e7f49797a306a5c60ed6ff925cb38623e8e2a33a47c043937a713e->enter($__internal_9d7df4a409e7f49797a306a5c60ed6ff925cb38623e8e2a33a47c043937a713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0b846a069a27cdee2e161d83dda6878c42d60646033ea7323ef936ee6ef6d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b846a069a27cdee2e161d83dda6878c42d60646033ea7323ef936ee6ef6d02->enter($__internal_f0b846a069a27cdee2e161d83dda6878c42d60646033ea7323ef936ee6ef6d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f0b846a069a27cdee2e161d83dda6878c42d60646033ea7323ef936ee6ef6d02->leave($__internal_f0b846a069a27cdee2e161d83dda6878c42d60646033ea7323ef936ee6ef6d02_prof);

        
        $__internal_9d7df4a409e7f49797a306a5c60ed6ff925cb38623e8e2a33a47c043937a713e->leave($__internal_9d7df4a409e7f49797a306a5c60ed6ff925cb38623e8e2a33a47c043937a713e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a69054d4b78672da89b30b110d3b1d2d6824ba5ce5e788fde84d556cd85ca37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a69054d4b78672da89b30b110d3b1d2d6824ba5ce5e788fde84d556cd85ca37->enter($__internal_0a69054d4b78672da89b30b110d3b1d2d6824ba5ce5e788fde84d556cd85ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddd12b378f846859f4aae8238db9ff90d34de671aaf0f060a5a2866e808111f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd12b378f846859f4aae8238db9ff90d34de671aaf0f060a5a2866e808111f7->enter($__internal_ddd12b378f846859f4aae8238db9ff90d34de671aaf0f060a5a2866e808111f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ddd12b378f846859f4aae8238db9ff90d34de671aaf0f060a5a2866e808111f7->leave($__internal_ddd12b378f846859f4aae8238db9ff90d34de671aaf0f060a5a2866e808111f7_prof);

        
        $__internal_0a69054d4b78672da89b30b110d3b1d2d6824ba5ce5e788fde84d556cd85ca37->leave($__internal_0a69054d4b78672da89b30b110d3b1d2d6824ba5ce5e788fde84d556cd85ca37_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35f1631134bb95da5437db147bf591dcd7650113fd80713b75e40bca5145529a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f1631134bb95da5437db147bf591dcd7650113fd80713b75e40bca5145529a->enter($__internal_35f1631134bb95da5437db147bf591dcd7650113fd80713b75e40bca5145529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6df4bdf2a06c018840e963c3cc47e2cfbfa30853e35e4b1ab1d1588c5cbc9d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df4bdf2a06c018840e963c3cc47e2cfbfa30853e35e4b1ab1d1588c5cbc9d85->enter($__internal_6df4bdf2a06c018840e963c3cc47e2cfbfa30853e35e4b1ab1d1588c5cbc9d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6df4bdf2a06c018840e963c3cc47e2cfbfa30853e35e4b1ab1d1588c5cbc9d85->leave($__internal_6df4bdf2a06c018840e963c3cc47e2cfbfa30853e35e4b1ab1d1588c5cbc9d85_prof);

        
        $__internal_35f1631134bb95da5437db147bf591dcd7650113fd80713b75e40bca5145529a->leave($__internal_35f1631134bb95da5437db147bf591dcd7650113fd80713b75e40bca5145529a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
