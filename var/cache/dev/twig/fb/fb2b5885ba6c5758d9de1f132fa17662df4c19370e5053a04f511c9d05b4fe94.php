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
        $__internal_d00526069f61283a5c1d36d1da31adb36f906c5591cfb08bc234f64a958713d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00526069f61283a5c1d36d1da31adb36f906c5591cfb08bc234f64a958713d9->enter($__internal_d00526069f61283a5c1d36d1da31adb36f906c5591cfb08bc234f64a958713d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0a891973177a4320ad7d0f1ed71ea7f04811a4b05f7726778abf275a6342e87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a891973177a4320ad7d0f1ed71ea7f04811a4b05f7726778abf275a6342e87f->enter($__internal_0a891973177a4320ad7d0f1ed71ea7f04811a4b05f7726778abf275a6342e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d00526069f61283a5c1d36d1da31adb36f906c5591cfb08bc234f64a958713d9->leave($__internal_d00526069f61283a5c1d36d1da31adb36f906c5591cfb08bc234f64a958713d9_prof);

        
        $__internal_0a891973177a4320ad7d0f1ed71ea7f04811a4b05f7726778abf275a6342e87f->leave($__internal_0a891973177a4320ad7d0f1ed71ea7f04811a4b05f7726778abf275a6342e87f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f52bd1ca85f7445b5ce765504fa06ade5dadf9aef41acda40814e048984fd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f52bd1ca85f7445b5ce765504fa06ade5dadf9aef41acda40814e048984fd44->enter($__internal_0f52bd1ca85f7445b5ce765504fa06ade5dadf9aef41acda40814e048984fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aaa703ecfa1ba751440d960ce406f42f51c784f0a183d872f76a1b917ea25275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa703ecfa1ba751440d960ce406f42f51c784f0a183d872f76a1b917ea25275->enter($__internal_aaa703ecfa1ba751440d960ce406f42f51c784f0a183d872f76a1b917ea25275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aaa703ecfa1ba751440d960ce406f42f51c784f0a183d872f76a1b917ea25275->leave($__internal_aaa703ecfa1ba751440d960ce406f42f51c784f0a183d872f76a1b917ea25275_prof);

        
        $__internal_0f52bd1ca85f7445b5ce765504fa06ade5dadf9aef41acda40814e048984fd44->leave($__internal_0f52bd1ca85f7445b5ce765504fa06ade5dadf9aef41acda40814e048984fd44_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_603b6827dfe678ce3e5d801fdc761610fb7109af166906c1fcc63056ec02a326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603b6827dfe678ce3e5d801fdc761610fb7109af166906c1fcc63056ec02a326->enter($__internal_603b6827dfe678ce3e5d801fdc761610fb7109af166906c1fcc63056ec02a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ec0eba80da4b60eb9bf20c1f6b5adac1d81c8d3f5c14dfe6ca8f63b4de214a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec0eba80da4b60eb9bf20c1f6b5adac1d81c8d3f5c14dfe6ca8f63b4de214a4->enter($__internal_6ec0eba80da4b60eb9bf20c1f6b5adac1d81c8d3f5c14dfe6ca8f63b4de214a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6ec0eba80da4b60eb9bf20c1f6b5adac1d81c8d3f5c14dfe6ca8f63b4de214a4->leave($__internal_6ec0eba80da4b60eb9bf20c1f6b5adac1d81c8d3f5c14dfe6ca8f63b4de214a4_prof);

        
        $__internal_603b6827dfe678ce3e5d801fdc761610fb7109af166906c1fcc63056ec02a326->leave($__internal_603b6827dfe678ce3e5d801fdc761610fb7109af166906c1fcc63056ec02a326_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0631b9fe7a4710a926be5f2b0a007677fcbb6973537a6505207ea563a8b0a3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0631b9fe7a4710a926be5f2b0a007677fcbb6973537a6505207ea563a8b0a3e9->enter($__internal_0631b9fe7a4710a926be5f2b0a007677fcbb6973537a6505207ea563a8b0a3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a658534b3a649bdb84fb179bfaa003dabaa592734c960b98bd88df0091423c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a658534b3a649bdb84fb179bfaa003dabaa592734c960b98bd88df0091423c9->enter($__internal_5a658534b3a649bdb84fb179bfaa003dabaa592734c960b98bd88df0091423c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5a658534b3a649bdb84fb179bfaa003dabaa592734c960b98bd88df0091423c9->leave($__internal_5a658534b3a649bdb84fb179bfaa003dabaa592734c960b98bd88df0091423c9_prof);

        
        $__internal_0631b9fe7a4710a926be5f2b0a007677fcbb6973537a6505207ea563a8b0a3e9->leave($__internal_0631b9fe7a4710a926be5f2b0a007677fcbb6973537a6505207ea563a8b0a3e9_prof);

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
