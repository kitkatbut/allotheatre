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
        $__internal_23db823d26acfd0a95548506dfffbd570412bd502f1bb38b6be7be34eff1c74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23db823d26acfd0a95548506dfffbd570412bd502f1bb38b6be7be34eff1c74f->enter($__internal_23db823d26acfd0a95548506dfffbd570412bd502f1bb38b6be7be34eff1c74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f819db7cd8d90b731c9f2aabc239d10a1d5d132624b18899a154c1b81af0434c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819db7cd8d90b731c9f2aabc239d10a1d5d132624b18899a154c1b81af0434c->enter($__internal_f819db7cd8d90b731c9f2aabc239d10a1d5d132624b18899a154c1b81af0434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23db823d26acfd0a95548506dfffbd570412bd502f1bb38b6be7be34eff1c74f->leave($__internal_23db823d26acfd0a95548506dfffbd570412bd502f1bb38b6be7be34eff1c74f_prof);

        
        $__internal_f819db7cd8d90b731c9f2aabc239d10a1d5d132624b18899a154c1b81af0434c->leave($__internal_f819db7cd8d90b731c9f2aabc239d10a1d5d132624b18899a154c1b81af0434c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb56478fa421dd7fe1bda68c02bd2ac6c0a4aa726eaa070d6269e1aba5aa7e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb56478fa421dd7fe1bda68c02bd2ac6c0a4aa726eaa070d6269e1aba5aa7e55->enter($__internal_eb56478fa421dd7fe1bda68c02bd2ac6c0a4aa726eaa070d6269e1aba5aa7e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3595b4a637027e2a663d68e22b93bc5ba8c4db8fca4e88f0c478c1b1f8ff2e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3595b4a637027e2a663d68e22b93bc5ba8c4db8fca4e88f0c478c1b1f8ff2e5b->enter($__internal_3595b4a637027e2a663d68e22b93bc5ba8c4db8fca4e88f0c478c1b1f8ff2e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3595b4a637027e2a663d68e22b93bc5ba8c4db8fca4e88f0c478c1b1f8ff2e5b->leave($__internal_3595b4a637027e2a663d68e22b93bc5ba8c4db8fca4e88f0c478c1b1f8ff2e5b_prof);

        
        $__internal_eb56478fa421dd7fe1bda68c02bd2ac6c0a4aa726eaa070d6269e1aba5aa7e55->leave($__internal_eb56478fa421dd7fe1bda68c02bd2ac6c0a4aa726eaa070d6269e1aba5aa7e55_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93db899cc5cd23f6486cac37a4ff877278a0abcdd25e6d0721b04980908393f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93db899cc5cd23f6486cac37a4ff877278a0abcdd25e6d0721b04980908393f3->enter($__internal_93db899cc5cd23f6486cac37a4ff877278a0abcdd25e6d0721b04980908393f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fb6874e4b7941c4c92ba26572724210476c883735b05b26101f02c784f1a051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb6874e4b7941c4c92ba26572724210476c883735b05b26101f02c784f1a051->enter($__internal_7fb6874e4b7941c4c92ba26572724210476c883735b05b26101f02c784f1a051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7fb6874e4b7941c4c92ba26572724210476c883735b05b26101f02c784f1a051->leave($__internal_7fb6874e4b7941c4c92ba26572724210476c883735b05b26101f02c784f1a051_prof);

        
        $__internal_93db899cc5cd23f6486cac37a4ff877278a0abcdd25e6d0721b04980908393f3->leave($__internal_93db899cc5cd23f6486cac37a4ff877278a0abcdd25e6d0721b04980908393f3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_879c1f1e1cfb5beac92b4803446d561d6032ba6755d00129bdda62de6912b938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879c1f1e1cfb5beac92b4803446d561d6032ba6755d00129bdda62de6912b938->enter($__internal_879c1f1e1cfb5beac92b4803446d561d6032ba6755d00129bdda62de6912b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61ad86e6cf1d878a4cefa836c4f8eaa6b07b335f5d4b7c8bdc1abe5d116d0fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ad86e6cf1d878a4cefa836c4f8eaa6b07b335f5d4b7c8bdc1abe5d116d0fd6->enter($__internal_61ad86e6cf1d878a4cefa836c4f8eaa6b07b335f5d4b7c8bdc1abe5d116d0fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_61ad86e6cf1d878a4cefa836c4f8eaa6b07b335f5d4b7c8bdc1abe5d116d0fd6->leave($__internal_61ad86e6cf1d878a4cefa836c4f8eaa6b07b335f5d4b7c8bdc1abe5d116d0fd6_prof);

        
        $__internal_879c1f1e1cfb5beac92b4803446d561d6032ba6755d00129bdda62de6912b938->leave($__internal_879c1f1e1cfb5beac92b4803446d561d6032ba6755d00129bdda62de6912b938_prof);

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
