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
        $__internal_175b9b7f89afec44183f5b8bbf90a3693935687c005e4058680036a8d9bee530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175b9b7f89afec44183f5b8bbf90a3693935687c005e4058680036a8d9bee530->enter($__internal_175b9b7f89afec44183f5b8bbf90a3693935687c005e4058680036a8d9bee530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3217490701a1f036572453a057e93dfe6e96939c8b07e71bce8e3fa8c3bdea82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3217490701a1f036572453a057e93dfe6e96939c8b07e71bce8e3fa8c3bdea82->enter($__internal_3217490701a1f036572453a057e93dfe6e96939c8b07e71bce8e3fa8c3bdea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_175b9b7f89afec44183f5b8bbf90a3693935687c005e4058680036a8d9bee530->leave($__internal_175b9b7f89afec44183f5b8bbf90a3693935687c005e4058680036a8d9bee530_prof);

        
        $__internal_3217490701a1f036572453a057e93dfe6e96939c8b07e71bce8e3fa8c3bdea82->leave($__internal_3217490701a1f036572453a057e93dfe6e96939c8b07e71bce8e3fa8c3bdea82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7f33f275298b23c0edee413b754fd1933d015aee072d492f29696e6bebf9e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f33f275298b23c0edee413b754fd1933d015aee072d492f29696e6bebf9e12->enter($__internal_b7f33f275298b23c0edee413b754fd1933d015aee072d492f29696e6bebf9e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_668a157813dafb506d47bd2779a9fa2ff7815b64f7b5b112da7f270cb8b31392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668a157813dafb506d47bd2779a9fa2ff7815b64f7b5b112da7f270cb8b31392->enter($__internal_668a157813dafb506d47bd2779a9fa2ff7815b64f7b5b112da7f270cb8b31392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_668a157813dafb506d47bd2779a9fa2ff7815b64f7b5b112da7f270cb8b31392->leave($__internal_668a157813dafb506d47bd2779a9fa2ff7815b64f7b5b112da7f270cb8b31392_prof);

        
        $__internal_b7f33f275298b23c0edee413b754fd1933d015aee072d492f29696e6bebf9e12->leave($__internal_b7f33f275298b23c0edee413b754fd1933d015aee072d492f29696e6bebf9e12_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_286fecacecbdf8d06f80cb52bd4f300364bfb9beb5ac67dc35c5e550f9a85d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286fecacecbdf8d06f80cb52bd4f300364bfb9beb5ac67dc35c5e550f9a85d12->enter($__internal_286fecacecbdf8d06f80cb52bd4f300364bfb9beb5ac67dc35c5e550f9a85d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a52df04f6a534b24a2a2581e4306d65243599d344d133889550944b2b2b874b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a52df04f6a534b24a2a2581e4306d65243599d344d133889550944b2b2b874b->enter($__internal_3a52df04f6a534b24a2a2581e4306d65243599d344d133889550944b2b2b874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3a52df04f6a534b24a2a2581e4306d65243599d344d133889550944b2b2b874b->leave($__internal_3a52df04f6a534b24a2a2581e4306d65243599d344d133889550944b2b2b874b_prof);

        
        $__internal_286fecacecbdf8d06f80cb52bd4f300364bfb9beb5ac67dc35c5e550f9a85d12->leave($__internal_286fecacecbdf8d06f80cb52bd4f300364bfb9beb5ac67dc35c5e550f9a85d12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffd60b8804bcbec54e58811d8bd7598217bbe175acdd283fde36fcbe33eab8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd60b8804bcbec54e58811d8bd7598217bbe175acdd283fde36fcbe33eab8e8->enter($__internal_ffd60b8804bcbec54e58811d8bd7598217bbe175acdd283fde36fcbe33eab8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69032c59f8fe1bc60c567ad9d61d7b121ac651b8206d0240cfa10315e53f3f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69032c59f8fe1bc60c567ad9d61d7b121ac651b8206d0240cfa10315e53f3f50->enter($__internal_69032c59f8fe1bc60c567ad9d61d7b121ac651b8206d0240cfa10315e53f3f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_69032c59f8fe1bc60c567ad9d61d7b121ac651b8206d0240cfa10315e53f3f50->leave($__internal_69032c59f8fe1bc60c567ad9d61d7b121ac651b8206d0240cfa10315e53f3f50_prof);

        
        $__internal_ffd60b8804bcbec54e58811d8bd7598217bbe175acdd283fde36fcbe33eab8e8->leave($__internal_ffd60b8804bcbec54e58811d8bd7598217bbe175acdd283fde36fcbe33eab8e8_prof);

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
