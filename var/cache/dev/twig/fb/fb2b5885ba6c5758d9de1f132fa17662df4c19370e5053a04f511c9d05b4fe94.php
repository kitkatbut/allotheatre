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
        $__internal_aa0b54549bac3bef5ef2274013c698deed6b7c6c331b2ac41b0fcb9b5837279c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0b54549bac3bef5ef2274013c698deed6b7c6c331b2ac41b0fcb9b5837279c->enter($__internal_aa0b54549bac3bef5ef2274013c698deed6b7c6c331b2ac41b0fcb9b5837279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c2462357f5bf4883d21bacd2db014b52a2c4bd69f04d8104e4d9ab0c4d975ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2462357f5bf4883d21bacd2db014b52a2c4bd69f04d8104e4d9ab0c4d975ee5->enter($__internal_c2462357f5bf4883d21bacd2db014b52a2c4bd69f04d8104e4d9ab0c4d975ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa0b54549bac3bef5ef2274013c698deed6b7c6c331b2ac41b0fcb9b5837279c->leave($__internal_aa0b54549bac3bef5ef2274013c698deed6b7c6c331b2ac41b0fcb9b5837279c_prof);

        
        $__internal_c2462357f5bf4883d21bacd2db014b52a2c4bd69f04d8104e4d9ab0c4d975ee5->leave($__internal_c2462357f5bf4883d21bacd2db014b52a2c4bd69f04d8104e4d9ab0c4d975ee5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9da06f3bca90e38898d994a97db54e5c00c25ee6b837852819d00b762d8c24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9da06f3bca90e38898d994a97db54e5c00c25ee6b837852819d00b762d8c24f->enter($__internal_c9da06f3bca90e38898d994a97db54e5c00c25ee6b837852819d00b762d8c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d8ec9ddb74b914177e18ed5384a874fe5c339901b90b64558a66ad09a2faf791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ec9ddb74b914177e18ed5384a874fe5c339901b90b64558a66ad09a2faf791->enter($__internal_d8ec9ddb74b914177e18ed5384a874fe5c339901b90b64558a66ad09a2faf791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d8ec9ddb74b914177e18ed5384a874fe5c339901b90b64558a66ad09a2faf791->leave($__internal_d8ec9ddb74b914177e18ed5384a874fe5c339901b90b64558a66ad09a2faf791_prof);

        
        $__internal_c9da06f3bca90e38898d994a97db54e5c00c25ee6b837852819d00b762d8c24f->leave($__internal_c9da06f3bca90e38898d994a97db54e5c00c25ee6b837852819d00b762d8c24f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45f097c8d49ed8b1ad5b1130557403b2fa3a0a4e815c1b9a31d998de30452321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f097c8d49ed8b1ad5b1130557403b2fa3a0a4e815c1b9a31d998de30452321->enter($__internal_45f097c8d49ed8b1ad5b1130557403b2fa3a0a4e815c1b9a31d998de30452321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ccfaf87a6d58f0673b6cd33093c9073b7c3f97a9c63f9a034359c86cc30a0a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfaf87a6d58f0673b6cd33093c9073b7c3f97a9c63f9a034359c86cc30a0a96->enter($__internal_ccfaf87a6d58f0673b6cd33093c9073b7c3f97a9c63f9a034359c86cc30a0a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ccfaf87a6d58f0673b6cd33093c9073b7c3f97a9c63f9a034359c86cc30a0a96->leave($__internal_ccfaf87a6d58f0673b6cd33093c9073b7c3f97a9c63f9a034359c86cc30a0a96_prof);

        
        $__internal_45f097c8d49ed8b1ad5b1130557403b2fa3a0a4e815c1b9a31d998de30452321->leave($__internal_45f097c8d49ed8b1ad5b1130557403b2fa3a0a4e815c1b9a31d998de30452321_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71e5e4f4c2dd9af60caba37094e1ea1504c9b16eca2b4ad969c5ab63f3b01899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e5e4f4c2dd9af60caba37094e1ea1504c9b16eca2b4ad969c5ab63f3b01899->enter($__internal_71e5e4f4c2dd9af60caba37094e1ea1504c9b16eca2b4ad969c5ab63f3b01899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f9e69a8fa06029d37be7f8a1f5f5d86f23c2b8f03967f91dbd0b35ae431d0f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e69a8fa06029d37be7f8a1f5f5d86f23c2b8f03967f91dbd0b35ae431d0f7e->enter($__internal_f9e69a8fa06029d37be7f8a1f5f5d86f23c2b8f03967f91dbd0b35ae431d0f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f9e69a8fa06029d37be7f8a1f5f5d86f23c2b8f03967f91dbd0b35ae431d0f7e->leave($__internal_f9e69a8fa06029d37be7f8a1f5f5d86f23c2b8f03967f91dbd0b35ae431d0f7e_prof);

        
        $__internal_71e5e4f4c2dd9af60caba37094e1ea1504c9b16eca2b4ad969c5ab63f3b01899->leave($__internal_71e5e4f4c2dd9af60caba37094e1ea1504c9b16eca2b4ad969c5ab63f3b01899_prof);

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
