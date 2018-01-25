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
        $__internal_6c9082269919cf733dce36e23f257be86d89213be4532c2015f9aa826b2e3887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9082269919cf733dce36e23f257be86d89213be4532c2015f9aa826b2e3887->enter($__internal_6c9082269919cf733dce36e23f257be86d89213be4532c2015f9aa826b2e3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6fbb6506827c2fdae88ca425c8e165295f991152130d6715811460faeafa5793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbb6506827c2fdae88ca425c8e165295f991152130d6715811460faeafa5793->enter($__internal_6fbb6506827c2fdae88ca425c8e165295f991152130d6715811460faeafa5793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c9082269919cf733dce36e23f257be86d89213be4532c2015f9aa826b2e3887->leave($__internal_6c9082269919cf733dce36e23f257be86d89213be4532c2015f9aa826b2e3887_prof);

        
        $__internal_6fbb6506827c2fdae88ca425c8e165295f991152130d6715811460faeafa5793->leave($__internal_6fbb6506827c2fdae88ca425c8e165295f991152130d6715811460faeafa5793_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e19261ad27dfb557592101e1cfda7084851dd29c69b80b1892c91dbae39fcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e19261ad27dfb557592101e1cfda7084851dd29c69b80b1892c91dbae39fcec->enter($__internal_7e19261ad27dfb557592101e1cfda7084851dd29c69b80b1892c91dbae39fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8238df911b15433f876268934dd7ec2df65179c50c76f3c7e86167b69c772195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238df911b15433f876268934dd7ec2df65179c50c76f3c7e86167b69c772195->enter($__internal_8238df911b15433f876268934dd7ec2df65179c50c76f3c7e86167b69c772195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8238df911b15433f876268934dd7ec2df65179c50c76f3c7e86167b69c772195->leave($__internal_8238df911b15433f876268934dd7ec2df65179c50c76f3c7e86167b69c772195_prof);

        
        $__internal_7e19261ad27dfb557592101e1cfda7084851dd29c69b80b1892c91dbae39fcec->leave($__internal_7e19261ad27dfb557592101e1cfda7084851dd29c69b80b1892c91dbae39fcec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d0b1468794febde19a749c977f7ef6f4e31ac5043bb701c46e25faceb49bd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0b1468794febde19a749c977f7ef6f4e31ac5043bb701c46e25faceb49bd4f->enter($__internal_4d0b1468794febde19a749c977f7ef6f4e31ac5043bb701c46e25faceb49bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6669e3073dd476e3057c41603e056a189a634ff0862a7b43d12229f69bb4d5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6669e3073dd476e3057c41603e056a189a634ff0862a7b43d12229f69bb4d5b9->enter($__internal_6669e3073dd476e3057c41603e056a189a634ff0862a7b43d12229f69bb4d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6669e3073dd476e3057c41603e056a189a634ff0862a7b43d12229f69bb4d5b9->leave($__internal_6669e3073dd476e3057c41603e056a189a634ff0862a7b43d12229f69bb4d5b9_prof);

        
        $__internal_4d0b1468794febde19a749c977f7ef6f4e31ac5043bb701c46e25faceb49bd4f->leave($__internal_4d0b1468794febde19a749c977f7ef6f4e31ac5043bb701c46e25faceb49bd4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24cc611d34e1201f41e995aa63594bf109040a4e764d9a87422a52198d7c157e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cc611d34e1201f41e995aa63594bf109040a4e764d9a87422a52198d7c157e->enter($__internal_24cc611d34e1201f41e995aa63594bf109040a4e764d9a87422a52198d7c157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69bdae856d7414d429feacbd05f09ad963a4fb16521a65c24c3bbf68d898ecc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bdae856d7414d429feacbd05f09ad963a4fb16521a65c24c3bbf68d898ecc2->enter($__internal_69bdae856d7414d429feacbd05f09ad963a4fb16521a65c24c3bbf68d898ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_69bdae856d7414d429feacbd05f09ad963a4fb16521a65c24c3bbf68d898ecc2->leave($__internal_69bdae856d7414d429feacbd05f09ad963a4fb16521a65c24c3bbf68d898ecc2_prof);

        
        $__internal_24cc611d34e1201f41e995aa63594bf109040a4e764d9a87422a52198d7c157e->leave($__internal_24cc611d34e1201f41e995aa63594bf109040a4e764d9a87422a52198d7c157e_prof);

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
