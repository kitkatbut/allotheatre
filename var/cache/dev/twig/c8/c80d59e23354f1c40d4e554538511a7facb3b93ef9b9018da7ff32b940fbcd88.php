<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7eda8dc4aa43cf054d90ce233b0298649348774ca5cd511d30801b8d842c4e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82cd78a8d2ecc2ee642a2bbd68e1c8595f255666163353676b11c27a6aae452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82cd78a8d2ecc2ee642a2bbd68e1c8595f255666163353676b11c27a6aae452->enter($__internal_a82cd78a8d2ecc2ee642a2bbd68e1c8595f255666163353676b11c27a6aae452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0eddb57734b0f4d202c4cb53fa15fb89c4d4abae95e16907961fb54504bda499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eddb57734b0f4d202c4cb53fa15fb89c4d4abae95e16907961fb54504bda499->enter($__internal_0eddb57734b0f4d202c4cb53fa15fb89c4d4abae95e16907961fb54504bda499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82cd78a8d2ecc2ee642a2bbd68e1c8595f255666163353676b11c27a6aae452->leave($__internal_a82cd78a8d2ecc2ee642a2bbd68e1c8595f255666163353676b11c27a6aae452_prof);

        
        $__internal_0eddb57734b0f4d202c4cb53fa15fb89c4d4abae95e16907961fb54504bda499->leave($__internal_0eddb57734b0f4d202c4cb53fa15fb89c4d4abae95e16907961fb54504bda499_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_790302967dac92b7058fc1ae7a3c9c6788546258eea0ea094e5f80f24496fafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790302967dac92b7058fc1ae7a3c9c6788546258eea0ea094e5f80f24496fafc->enter($__internal_790302967dac92b7058fc1ae7a3c9c6788546258eea0ea094e5f80f24496fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89ad5cb8dd01191e6a6decbe4c2dca3cccc70096810546b3a90666b43545eed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ad5cb8dd01191e6a6decbe4c2dca3cccc70096810546b3a90666b43545eed1->enter($__internal_89ad5cb8dd01191e6a6decbe4c2dca3cccc70096810546b3a90666b43545eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_89ad5cb8dd01191e6a6decbe4c2dca3cccc70096810546b3a90666b43545eed1->leave($__internal_89ad5cb8dd01191e6a6decbe4c2dca3cccc70096810546b3a90666b43545eed1_prof);

        
        $__internal_790302967dac92b7058fc1ae7a3c9c6788546258eea0ea094e5f80f24496fafc->leave($__internal_790302967dac92b7058fc1ae7a3c9c6788546258eea0ea094e5f80f24496fafc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
