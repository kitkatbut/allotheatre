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
        $__internal_b083bd0ab91d2dd6149d788738b958ea41b8644d8114f9b30ca51fa9bcf05273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b083bd0ab91d2dd6149d788738b958ea41b8644d8114f9b30ca51fa9bcf05273->enter($__internal_b083bd0ab91d2dd6149d788738b958ea41b8644d8114f9b30ca51fa9bcf05273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_94aa5fa82d4b7bef204e33562863b8944eab568d417142b0087e085adedd892b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aa5fa82d4b7bef204e33562863b8944eab568d417142b0087e085adedd892b->enter($__internal_94aa5fa82d4b7bef204e33562863b8944eab568d417142b0087e085adedd892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b083bd0ab91d2dd6149d788738b958ea41b8644d8114f9b30ca51fa9bcf05273->leave($__internal_b083bd0ab91d2dd6149d788738b958ea41b8644d8114f9b30ca51fa9bcf05273_prof);

        
        $__internal_94aa5fa82d4b7bef204e33562863b8944eab568d417142b0087e085adedd892b->leave($__internal_94aa5fa82d4b7bef204e33562863b8944eab568d417142b0087e085adedd892b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd72c070abbfdeb447d5c8a365234007a6a23b2f2adf5338c98f549f4a8e2b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd72c070abbfdeb447d5c8a365234007a6a23b2f2adf5338c98f549f4a8e2b60->enter($__internal_dd72c070abbfdeb447d5c8a365234007a6a23b2f2adf5338c98f549f4a8e2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8aa4880705c0256a44b603fb07ea10fabd2c1c6ae1dfedeeae481eed0b67aa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa4880705c0256a44b603fb07ea10fabd2c1c6ae1dfedeeae481eed0b67aa0e->enter($__internal_8aa4880705c0256a44b603fb07ea10fabd2c1c6ae1dfedeeae481eed0b67aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8aa4880705c0256a44b603fb07ea10fabd2c1c6ae1dfedeeae481eed0b67aa0e->leave($__internal_8aa4880705c0256a44b603fb07ea10fabd2c1c6ae1dfedeeae481eed0b67aa0e_prof);

        
        $__internal_dd72c070abbfdeb447d5c8a365234007a6a23b2f2adf5338c98f549f4a8e2b60->leave($__internal_dd72c070abbfdeb447d5c8a365234007a6a23b2f2adf5338c98f549f4a8e2b60_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d25c08f3b8b156bb76fa0f6a51143f1f471ef211b474c912d0aa65cfe461db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d25c08f3b8b156bb76fa0f6a51143f1f471ef211b474c912d0aa65cfe461db3->enter($__internal_6d25c08f3b8b156bb76fa0f6a51143f1f471ef211b474c912d0aa65cfe461db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a66fc75db34b7d92b1968ab9f1102869868056bdc06f7192b3963b460c1625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a66fc75db34b7d92b1968ab9f1102869868056bdc06f7192b3963b460c1625c->enter($__internal_1a66fc75db34b7d92b1968ab9f1102869868056bdc06f7192b3963b460c1625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a66fc75db34b7d92b1968ab9f1102869868056bdc06f7192b3963b460c1625c->leave($__internal_1a66fc75db34b7d92b1968ab9f1102869868056bdc06f7192b3963b460c1625c_prof);

        
        $__internal_6d25c08f3b8b156bb76fa0f6a51143f1f471ef211b474c912d0aa65cfe461db3->leave($__internal_6d25c08f3b8b156bb76fa0f6a51143f1f471ef211b474c912d0aa65cfe461db3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc5338cc0c817b965a16a311a5db86d8e5ee8d9593d9d6b29ca189881b3f560c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5338cc0c817b965a16a311a5db86d8e5ee8d9593d9d6b29ca189881b3f560c->enter($__internal_bc5338cc0c817b965a16a311a5db86d8e5ee8d9593d9d6b29ca189881b3f560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3abd1a50ca1b67a2ec82428b02bb2aa6b1e15b92a506676976d49580f39b2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3abd1a50ca1b67a2ec82428b02bb2aa6b1e15b92a506676976d49580f39b2d2->enter($__internal_a3abd1a50ca1b67a2ec82428b02bb2aa6b1e15b92a506676976d49580f39b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a3abd1a50ca1b67a2ec82428b02bb2aa6b1e15b92a506676976d49580f39b2d2->leave($__internal_a3abd1a50ca1b67a2ec82428b02bb2aa6b1e15b92a506676976d49580f39b2d2_prof);

        
        $__internal_bc5338cc0c817b965a16a311a5db86d8e5ee8d9593d9d6b29ca189881b3f560c->leave($__internal_bc5338cc0c817b965a16a311a5db86d8e5ee8d9593d9d6b29ca189881b3f560c_prof);

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
