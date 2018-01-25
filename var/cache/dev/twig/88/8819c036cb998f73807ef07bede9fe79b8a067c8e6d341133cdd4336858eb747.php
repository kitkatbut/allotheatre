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
        $__internal_e1ec3eeb6c3683d7171fce923493e26718b79b9cbc99d41a84da640bd222bac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ec3eeb6c3683d7171fce923493e26718b79b9cbc99d41a84da640bd222bac7->enter($__internal_e1ec3eeb6c3683d7171fce923493e26718b79b9cbc99d41a84da640bd222bac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_df8e4235af8115120f5b80d35a2a7dced5500cb073c6f7c016774162b7785a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8e4235af8115120f5b80d35a2a7dced5500cb073c6f7c016774162b7785a08->enter($__internal_df8e4235af8115120f5b80d35a2a7dced5500cb073c6f7c016774162b7785a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ec3eeb6c3683d7171fce923493e26718b79b9cbc99d41a84da640bd222bac7->leave($__internal_e1ec3eeb6c3683d7171fce923493e26718b79b9cbc99d41a84da640bd222bac7_prof);

        
        $__internal_df8e4235af8115120f5b80d35a2a7dced5500cb073c6f7c016774162b7785a08->leave($__internal_df8e4235af8115120f5b80d35a2a7dced5500cb073c6f7c016774162b7785a08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b635cead388c6deed4dba2a33e377cbac0e2eac125a98a9f64dff4e97f5b4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b635cead388c6deed4dba2a33e377cbac0e2eac125a98a9f64dff4e97f5b4f0->enter($__internal_2b635cead388c6deed4dba2a33e377cbac0e2eac125a98a9f64dff4e97f5b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfff567b99514a3b2541ba59aed0e09169260729499d824b4a6fc920bd21eb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfff567b99514a3b2541ba59aed0e09169260729499d824b4a6fc920bd21eb0c->enter($__internal_bfff567b99514a3b2541ba59aed0e09169260729499d824b4a6fc920bd21eb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bfff567b99514a3b2541ba59aed0e09169260729499d824b4a6fc920bd21eb0c->leave($__internal_bfff567b99514a3b2541ba59aed0e09169260729499d824b4a6fc920bd21eb0c_prof);

        
        $__internal_2b635cead388c6deed4dba2a33e377cbac0e2eac125a98a9f64dff4e97f5b4f0->leave($__internal_2b635cead388c6deed4dba2a33e377cbac0e2eac125a98a9f64dff4e97f5b4f0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4023ffdc9fb161d4f4b205f720afdff430f81fb5b8b27c41c0d7bedaa3ce93c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4023ffdc9fb161d4f4b205f720afdff430f81fb5b8b27c41c0d7bedaa3ce93c5->enter($__internal_4023ffdc9fb161d4f4b205f720afdff430f81fb5b8b27c41c0d7bedaa3ce93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30681be934fb836998bf007116c5b843fa30bffb123e7cf49d5fd1383911adc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30681be934fb836998bf007116c5b843fa30bffb123e7cf49d5fd1383911adc1->enter($__internal_30681be934fb836998bf007116c5b843fa30bffb123e7cf49d5fd1383911adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_30681be934fb836998bf007116c5b843fa30bffb123e7cf49d5fd1383911adc1->leave($__internal_30681be934fb836998bf007116c5b843fa30bffb123e7cf49d5fd1383911adc1_prof);

        
        $__internal_4023ffdc9fb161d4f4b205f720afdff430f81fb5b8b27c41c0d7bedaa3ce93c5->leave($__internal_4023ffdc9fb161d4f4b205f720afdff430f81fb5b8b27c41c0d7bedaa3ce93c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0288965a24fa6066fbc4a8b35ffd48c807e85ed86f7e925bfe2487a9d8e3b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0288965a24fa6066fbc4a8b35ffd48c807e85ed86f7e925bfe2487a9d8e3b977->enter($__internal_0288965a24fa6066fbc4a8b35ffd48c807e85ed86f7e925bfe2487a9d8e3b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb87f8d6f78527c19c980bd767fe4cef636cb8a7b966e65705b2bc7d8a9ef19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb87f8d6f78527c19c980bd767fe4cef636cb8a7b966e65705b2bc7d8a9ef19e->enter($__internal_eb87f8d6f78527c19c980bd767fe4cef636cb8a7b966e65705b2bc7d8a9ef19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eb87f8d6f78527c19c980bd767fe4cef636cb8a7b966e65705b2bc7d8a9ef19e->leave($__internal_eb87f8d6f78527c19c980bd767fe4cef636cb8a7b966e65705b2bc7d8a9ef19e_prof);

        
        $__internal_0288965a24fa6066fbc4a8b35ffd48c807e85ed86f7e925bfe2487a9d8e3b977->leave($__internal_0288965a24fa6066fbc4a8b35ffd48c807e85ed86f7e925bfe2487a9d8e3b977_prof);

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
