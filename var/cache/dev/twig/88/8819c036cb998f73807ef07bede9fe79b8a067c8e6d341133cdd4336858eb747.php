<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b9196226b5549f7603b38944dd9d010834f7d239ba706f8cc61bbccbb65a1a96 extends Twig_Template
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
        $__internal_74d0d091ed04dbdd3c24dbae2452e883af267e41caa8ca856eeba160768e8053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d0d091ed04dbdd3c24dbae2452e883af267e41caa8ca856eeba160768e8053->enter($__internal_74d0d091ed04dbdd3c24dbae2452e883af267e41caa8ca856eeba160768e8053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d1e92b718903e3941ca253d506c3016cf22fb3f14b5c5a21cb494afdf51e7498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e92b718903e3941ca253d506c3016cf22fb3f14b5c5a21cb494afdf51e7498->enter($__internal_d1e92b718903e3941ca253d506c3016cf22fb3f14b5c5a21cb494afdf51e7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d0d091ed04dbdd3c24dbae2452e883af267e41caa8ca856eeba160768e8053->leave($__internal_74d0d091ed04dbdd3c24dbae2452e883af267e41caa8ca856eeba160768e8053_prof);

        
        $__internal_d1e92b718903e3941ca253d506c3016cf22fb3f14b5c5a21cb494afdf51e7498->leave($__internal_d1e92b718903e3941ca253d506c3016cf22fb3f14b5c5a21cb494afdf51e7498_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_842f8b16c954132172e4a8245bd85c6030d5ba22f8855a4c8fd00ed862ac35e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842f8b16c954132172e4a8245bd85c6030d5ba22f8855a4c8fd00ed862ac35e0->enter($__internal_842f8b16c954132172e4a8245bd85c6030d5ba22f8855a4c8fd00ed862ac35e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_991101e2e501c75d210f67ed151e78b98a46d6d92c4e9d0bddd1f2d6d6a5611d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991101e2e501c75d210f67ed151e78b98a46d6d92c4e9d0bddd1f2d6d6a5611d->enter($__internal_991101e2e501c75d210f67ed151e78b98a46d6d92c4e9d0bddd1f2d6d6a5611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_991101e2e501c75d210f67ed151e78b98a46d6d92c4e9d0bddd1f2d6d6a5611d->leave($__internal_991101e2e501c75d210f67ed151e78b98a46d6d92c4e9d0bddd1f2d6d6a5611d_prof);

        
        $__internal_842f8b16c954132172e4a8245bd85c6030d5ba22f8855a4c8fd00ed862ac35e0->leave($__internal_842f8b16c954132172e4a8245bd85c6030d5ba22f8855a4c8fd00ed862ac35e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f759594eb7b8d0d620d7fe1ea627f2e5c0ac2c02a0b51928b40fefd4a702cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f759594eb7b8d0d620d7fe1ea627f2e5c0ac2c02a0b51928b40fefd4a702cd6->enter($__internal_5f759594eb7b8d0d620d7fe1ea627f2e5c0ac2c02a0b51928b40fefd4a702cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc0df48d0a1e95955e426f226cf5867b75c346a4e7bd40e47685a66886a7fc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0df48d0a1e95955e426f226cf5867b75c346a4e7bd40e47685a66886a7fc57->enter($__internal_fc0df48d0a1e95955e426f226cf5867b75c346a4e7bd40e47685a66886a7fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fc0df48d0a1e95955e426f226cf5867b75c346a4e7bd40e47685a66886a7fc57->leave($__internal_fc0df48d0a1e95955e426f226cf5867b75c346a4e7bd40e47685a66886a7fc57_prof);

        
        $__internal_5f759594eb7b8d0d620d7fe1ea627f2e5c0ac2c02a0b51928b40fefd4a702cd6->leave($__internal_5f759594eb7b8d0d620d7fe1ea627f2e5c0ac2c02a0b51928b40fefd4a702cd6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13c3ee1e15d364e700f62dd6697ea64db0c1bf000f6a0ba704e0d411e29d5207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c3ee1e15d364e700f62dd6697ea64db0c1bf000f6a0ba704e0d411e29d5207->enter($__internal_13c3ee1e15d364e700f62dd6697ea64db0c1bf000f6a0ba704e0d411e29d5207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d470bbc77211e99503e001d1044e6d2a4a0a111e7f8aea83fc7bc92c2812c226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d470bbc77211e99503e001d1044e6d2a4a0a111e7f8aea83fc7bc92c2812c226->enter($__internal_d470bbc77211e99503e001d1044e6d2a4a0a111e7f8aea83fc7bc92c2812c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d470bbc77211e99503e001d1044e6d2a4a0a111e7f8aea83fc7bc92c2812c226->leave($__internal_d470bbc77211e99503e001d1044e6d2a4a0a111e7f8aea83fc7bc92c2812c226_prof);

        
        $__internal_13c3ee1e15d364e700f62dd6697ea64db0c1bf000f6a0ba704e0d411e29d5207->leave($__internal_13c3ee1e15d364e700f62dd6697ea64db0c1bf000f6a0ba704e0d411e29d5207_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
