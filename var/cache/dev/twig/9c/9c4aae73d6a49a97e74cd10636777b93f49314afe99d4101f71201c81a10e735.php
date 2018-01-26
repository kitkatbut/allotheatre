<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa51162854aea0157d9154daa17624b1f8e492959880e0993ad7712f034b30ac extends Twig_Template
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
        $__internal_0d4c14a6f95b6341b84f854ab9ccc1377f631654dda6b973d0b8c80e4a8fd2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4c14a6f95b6341b84f854ab9ccc1377f631654dda6b973d0b8c80e4a8fd2f6->enter($__internal_0d4c14a6f95b6341b84f854ab9ccc1377f631654dda6b973d0b8c80e4a8fd2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dc4ac3d54ce3cd0b0fe14d06acafd683ca087153bb351e6779a4e5c6603ea70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4ac3d54ce3cd0b0fe14d06acafd683ca087153bb351e6779a4e5c6603ea70c->enter($__internal_dc4ac3d54ce3cd0b0fe14d06acafd683ca087153bb351e6779a4e5c6603ea70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4c14a6f95b6341b84f854ab9ccc1377f631654dda6b973d0b8c80e4a8fd2f6->leave($__internal_0d4c14a6f95b6341b84f854ab9ccc1377f631654dda6b973d0b8c80e4a8fd2f6_prof);

        
        $__internal_dc4ac3d54ce3cd0b0fe14d06acafd683ca087153bb351e6779a4e5c6603ea70c->leave($__internal_dc4ac3d54ce3cd0b0fe14d06acafd683ca087153bb351e6779a4e5c6603ea70c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0e0cf7a59f13baaae1f595b2ada70864422878c958a102ecf75332cf82128dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e0cf7a59f13baaae1f595b2ada70864422878c958a102ecf75332cf82128dc->enter($__internal_b0e0cf7a59f13baaae1f595b2ada70864422878c958a102ecf75332cf82128dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6280728bcacd29dfdfe97e7bccaf938f178cdb5b6d2655802f76e6bc642e5b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6280728bcacd29dfdfe97e7bccaf938f178cdb5b6d2655802f76e6bc642e5b3f->enter($__internal_6280728bcacd29dfdfe97e7bccaf938f178cdb5b6d2655802f76e6bc642e5b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6280728bcacd29dfdfe97e7bccaf938f178cdb5b6d2655802f76e6bc642e5b3f->leave($__internal_6280728bcacd29dfdfe97e7bccaf938f178cdb5b6d2655802f76e6bc642e5b3f_prof);

        
        $__internal_b0e0cf7a59f13baaae1f595b2ada70864422878c958a102ecf75332cf82128dc->leave($__internal_b0e0cf7a59f13baaae1f595b2ada70864422878c958a102ecf75332cf82128dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6503a99cc65d2955f97234cc0b358d7389b486b03c8fc50e4662d3a7058cdfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6503a99cc65d2955f97234cc0b358d7389b486b03c8fc50e4662d3a7058cdfe5->enter($__internal_6503a99cc65d2955f97234cc0b358d7389b486b03c8fc50e4662d3a7058cdfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9fdd9031e4f45e099b195de12cca5c00d280e70720fab2ada216d83aae3d660b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdd9031e4f45e099b195de12cca5c00d280e70720fab2ada216d83aae3d660b->enter($__internal_9fdd9031e4f45e099b195de12cca5c00d280e70720fab2ada216d83aae3d660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9fdd9031e4f45e099b195de12cca5c00d280e70720fab2ada216d83aae3d660b->leave($__internal_9fdd9031e4f45e099b195de12cca5c00d280e70720fab2ada216d83aae3d660b_prof);

        
        $__internal_6503a99cc65d2955f97234cc0b358d7389b486b03c8fc50e4662d3a7058cdfe5->leave($__internal_6503a99cc65d2955f97234cc0b358d7389b486b03c8fc50e4662d3a7058cdfe5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9be765cd59694cf500b4ca7ff4b0c5385874ab367b2985a37de572696084f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9be765cd59694cf500b4ca7ff4b0c5385874ab367b2985a37de572696084f87->enter($__internal_a9be765cd59694cf500b4ca7ff4b0c5385874ab367b2985a37de572696084f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fbe1270ee65f831120aba5eafe3059fed2b102516b0a5ed9b16ae176697d75d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe1270ee65f831120aba5eafe3059fed2b102516b0a5ed9b16ae176697d75d4->enter($__internal_fbe1270ee65f831120aba5eafe3059fed2b102516b0a5ed9b16ae176697d75d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fbe1270ee65f831120aba5eafe3059fed2b102516b0a5ed9b16ae176697d75d4->leave($__internal_fbe1270ee65f831120aba5eafe3059fed2b102516b0a5ed9b16ae176697d75d4_prof);

        
        $__internal_a9be765cd59694cf500b4ca7ff4b0c5385874ab367b2985a37de572696084f87->leave($__internal_a9be765cd59694cf500b4ca7ff4b0c5385874ab367b2985a37de572696084f87_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
