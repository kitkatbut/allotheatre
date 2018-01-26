<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4cece701e1522cfd32ecad7d0f59ff211ecedeae5e07c72dd84071bb318435c0 extends Twig_Template
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
        $__internal_0109470b6725537bebf6a6b0a40d6ad2a89cd5aa7c0a2002213dd06ed4715de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0109470b6725537bebf6a6b0a40d6ad2a89cd5aa7c0a2002213dd06ed4715de5->enter($__internal_0109470b6725537bebf6a6b0a40d6ad2a89cd5aa7c0a2002213dd06ed4715de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6a3d000a44e4f303bb03e1cee849b25b150afb81235be3e1abe623467bac47e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3d000a44e4f303bb03e1cee849b25b150afb81235be3e1abe623467bac47e7->enter($__internal_6a3d000a44e4f303bb03e1cee849b25b150afb81235be3e1abe623467bac47e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0109470b6725537bebf6a6b0a40d6ad2a89cd5aa7c0a2002213dd06ed4715de5->leave($__internal_0109470b6725537bebf6a6b0a40d6ad2a89cd5aa7c0a2002213dd06ed4715de5_prof);

        
        $__internal_6a3d000a44e4f303bb03e1cee849b25b150afb81235be3e1abe623467bac47e7->leave($__internal_6a3d000a44e4f303bb03e1cee849b25b150afb81235be3e1abe623467bac47e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0eda28403a31e3d37de76080a47b2a2f8f753fd695eab7595a78313060e20ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0eda28403a31e3d37de76080a47b2a2f8f753fd695eab7595a78313060e20ce->enter($__internal_a0eda28403a31e3d37de76080a47b2a2f8f753fd695eab7595a78313060e20ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_664458087a0da79e76aecf9d5187cf9bcbccbf4e1c3a23cb5b49113cddeb4dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664458087a0da79e76aecf9d5187cf9bcbccbf4e1c3a23cb5b49113cddeb4dd7->enter($__internal_664458087a0da79e76aecf9d5187cf9bcbccbf4e1c3a23cb5b49113cddeb4dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_664458087a0da79e76aecf9d5187cf9bcbccbf4e1c3a23cb5b49113cddeb4dd7->leave($__internal_664458087a0da79e76aecf9d5187cf9bcbccbf4e1c3a23cb5b49113cddeb4dd7_prof);

        
        $__internal_a0eda28403a31e3d37de76080a47b2a2f8f753fd695eab7595a78313060e20ce->leave($__internal_a0eda28403a31e3d37de76080a47b2a2f8f753fd695eab7595a78313060e20ce_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
