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
        $__internal_365d7dbf44aca7477b684140b6ab32709afa28200a6dc7c8b46ed38953b402c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365d7dbf44aca7477b684140b6ab32709afa28200a6dc7c8b46ed38953b402c1->enter($__internal_365d7dbf44aca7477b684140b6ab32709afa28200a6dc7c8b46ed38953b402c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6ca0022c3d7e60da56c658ba6287056a5664788361a74183a24d4d35340d7843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca0022c3d7e60da56c658ba6287056a5664788361a74183a24d4d35340d7843->enter($__internal_6ca0022c3d7e60da56c658ba6287056a5664788361a74183a24d4d35340d7843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365d7dbf44aca7477b684140b6ab32709afa28200a6dc7c8b46ed38953b402c1->leave($__internal_365d7dbf44aca7477b684140b6ab32709afa28200a6dc7c8b46ed38953b402c1_prof);

        
        $__internal_6ca0022c3d7e60da56c658ba6287056a5664788361a74183a24d4d35340d7843->leave($__internal_6ca0022c3d7e60da56c658ba6287056a5664788361a74183a24d4d35340d7843_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cccff70b350585c3001ce258fcd579ec54028d6787b941a8a7dd7ded11f44cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccff70b350585c3001ce258fcd579ec54028d6787b941a8a7dd7ded11f44cd4->enter($__internal_cccff70b350585c3001ce258fcd579ec54028d6787b941a8a7dd7ded11f44cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69d6a316ce149e7f818ee2956647ae0dbf21a528cc2e91026d92c07d6e94d3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d6a316ce149e7f818ee2956647ae0dbf21a528cc2e91026d92c07d6e94d3da->enter($__internal_69d6a316ce149e7f818ee2956647ae0dbf21a528cc2e91026d92c07d6e94d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_69d6a316ce149e7f818ee2956647ae0dbf21a528cc2e91026d92c07d6e94d3da->leave($__internal_69d6a316ce149e7f818ee2956647ae0dbf21a528cc2e91026d92c07d6e94d3da_prof);

        
        $__internal_cccff70b350585c3001ce258fcd579ec54028d6787b941a8a7dd7ded11f44cd4->leave($__internal_cccff70b350585c3001ce258fcd579ec54028d6787b941a8a7dd7ded11f44cd4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_726ed537c28defb7376e5363957617e2240f2f496bad80b8f3ab7235116cc859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726ed537c28defb7376e5363957617e2240f2f496bad80b8f3ab7235116cc859->enter($__internal_726ed537c28defb7376e5363957617e2240f2f496bad80b8f3ab7235116cc859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9064d41b7f064b3acc6dd326ccef647f2b94346167e46bc9a22e9e34cd1e7cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9064d41b7f064b3acc6dd326ccef647f2b94346167e46bc9a22e9e34cd1e7cc4->enter($__internal_9064d41b7f064b3acc6dd326ccef647f2b94346167e46bc9a22e9e34cd1e7cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9064d41b7f064b3acc6dd326ccef647f2b94346167e46bc9a22e9e34cd1e7cc4->leave($__internal_9064d41b7f064b3acc6dd326ccef647f2b94346167e46bc9a22e9e34cd1e7cc4_prof);

        
        $__internal_726ed537c28defb7376e5363957617e2240f2f496bad80b8f3ab7235116cc859->leave($__internal_726ed537c28defb7376e5363957617e2240f2f496bad80b8f3ab7235116cc859_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af022dac6353ddd41eb9851310ef5ca648a4301c3bb8112e42c901a5378bcbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af022dac6353ddd41eb9851310ef5ca648a4301c3bb8112e42c901a5378bcbf5->enter($__internal_af022dac6353ddd41eb9851310ef5ca648a4301c3bb8112e42c901a5378bcbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51a0ce057af60a266fd8349918e765b4968a1c779eb85853543a05d37eff5d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a0ce057af60a266fd8349918e765b4968a1c779eb85853543a05d37eff5d89->enter($__internal_51a0ce057af60a266fd8349918e765b4968a1c779eb85853543a05d37eff5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_51a0ce057af60a266fd8349918e765b4968a1c779eb85853543a05d37eff5d89->leave($__internal_51a0ce057af60a266fd8349918e765b4968a1c779eb85853543a05d37eff5d89_prof);

        
        $__internal_af022dac6353ddd41eb9851310ef5ca648a4301c3bb8112e42c901a5378bcbf5->leave($__internal_af022dac6353ddd41eb9851310ef5ca648a4301c3bb8112e42c901a5378bcbf5_prof);

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
