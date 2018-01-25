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
        $__internal_ef70eabda17833858fd2925c674d33288adcf7198d6ad2c9c2adad367545c8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef70eabda17833858fd2925c674d33288adcf7198d6ad2c9c2adad367545c8f1->enter($__internal_ef70eabda17833858fd2925c674d33288adcf7198d6ad2c9c2adad367545c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f1dcad48e6d8987e975c719043a1c5d0249069bf042cad1ee6cdb9aebebe63eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dcad48e6d8987e975c719043a1c5d0249069bf042cad1ee6cdb9aebebe63eb->enter($__internal_f1dcad48e6d8987e975c719043a1c5d0249069bf042cad1ee6cdb9aebebe63eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef70eabda17833858fd2925c674d33288adcf7198d6ad2c9c2adad367545c8f1->leave($__internal_ef70eabda17833858fd2925c674d33288adcf7198d6ad2c9c2adad367545c8f1_prof);

        
        $__internal_f1dcad48e6d8987e975c719043a1c5d0249069bf042cad1ee6cdb9aebebe63eb->leave($__internal_f1dcad48e6d8987e975c719043a1c5d0249069bf042cad1ee6cdb9aebebe63eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a1a49b9df0104588b7b62b4affed48c99b3da0c34b302c10e8efcd33cfc799f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1a49b9df0104588b7b62b4affed48c99b3da0c34b302c10e8efcd33cfc799f->enter($__internal_8a1a49b9df0104588b7b62b4affed48c99b3da0c34b302c10e8efcd33cfc799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccb79ac0b46ffdc90da0dd3a9935ba503ad7f8d07db9181ad6c98fdec7e0b2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb79ac0b46ffdc90da0dd3a9935ba503ad7f8d07db9181ad6c98fdec7e0b2fe->enter($__internal_ccb79ac0b46ffdc90da0dd3a9935ba503ad7f8d07db9181ad6c98fdec7e0b2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ccb79ac0b46ffdc90da0dd3a9935ba503ad7f8d07db9181ad6c98fdec7e0b2fe->leave($__internal_ccb79ac0b46ffdc90da0dd3a9935ba503ad7f8d07db9181ad6c98fdec7e0b2fe_prof);

        
        $__internal_8a1a49b9df0104588b7b62b4affed48c99b3da0c34b302c10e8efcd33cfc799f->leave($__internal_8a1a49b9df0104588b7b62b4affed48c99b3da0c34b302c10e8efcd33cfc799f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c5288ead648a2d861c73772d166d0a26d1e84999c5348e8418f64bfc21ec10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5288ead648a2d861c73772d166d0a26d1e84999c5348e8418f64bfc21ec10a->enter($__internal_9c5288ead648a2d861c73772d166d0a26d1e84999c5348e8418f64bfc21ec10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7ac6922791a939968c94fe8f6ef661c10d96ea621628c472a99136a528c139c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ac6922791a939968c94fe8f6ef661c10d96ea621628c472a99136a528c139c->enter($__internal_d7ac6922791a939968c94fe8f6ef661c10d96ea621628c472a99136a528c139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d7ac6922791a939968c94fe8f6ef661c10d96ea621628c472a99136a528c139c->leave($__internal_d7ac6922791a939968c94fe8f6ef661c10d96ea621628c472a99136a528c139c_prof);

        
        $__internal_9c5288ead648a2d861c73772d166d0a26d1e84999c5348e8418f64bfc21ec10a->leave($__internal_9c5288ead648a2d861c73772d166d0a26d1e84999c5348e8418f64bfc21ec10a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d57ee57c11c2a889ca1436fcfa83eefbd6a96fc7bef0ceb47269e429e6bdc8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57ee57c11c2a889ca1436fcfa83eefbd6a96fc7bef0ceb47269e429e6bdc8d3->enter($__internal_d57ee57c11c2a889ca1436fcfa83eefbd6a96fc7bef0ceb47269e429e6bdc8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ee7510214ac10dcfa34421075807f90a1bd9ee907c7a6de5ebe0a0b53801bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee7510214ac10dcfa34421075807f90a1bd9ee907c7a6de5ebe0a0b53801bf9->enter($__internal_6ee7510214ac10dcfa34421075807f90a1bd9ee907c7a6de5ebe0a0b53801bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ee7510214ac10dcfa34421075807f90a1bd9ee907c7a6de5ebe0a0b53801bf9->leave($__internal_6ee7510214ac10dcfa34421075807f90a1bd9ee907c7a6de5ebe0a0b53801bf9_prof);

        
        $__internal_d57ee57c11c2a889ca1436fcfa83eefbd6a96fc7bef0ceb47269e429e6bdc8d3->leave($__internal_d57ee57c11c2a889ca1436fcfa83eefbd6a96fc7bef0ceb47269e429e6bdc8d3_prof);

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
