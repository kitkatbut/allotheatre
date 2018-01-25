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
        $__internal_16b4f023ecfd9f75f4f43441e2806550c819450cedb70593e18c6a2e239de694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b4f023ecfd9f75f4f43441e2806550c819450cedb70593e18c6a2e239de694->enter($__internal_16b4f023ecfd9f75f4f43441e2806550c819450cedb70593e18c6a2e239de694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b2344d096d653ed4a3dda515be0113779c0c74324d7730ba0eaf1c9194eaaa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2344d096d653ed4a3dda515be0113779c0c74324d7730ba0eaf1c9194eaaa11->enter($__internal_b2344d096d653ed4a3dda515be0113779c0c74324d7730ba0eaf1c9194eaaa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b4f023ecfd9f75f4f43441e2806550c819450cedb70593e18c6a2e239de694->leave($__internal_16b4f023ecfd9f75f4f43441e2806550c819450cedb70593e18c6a2e239de694_prof);

        
        $__internal_b2344d096d653ed4a3dda515be0113779c0c74324d7730ba0eaf1c9194eaaa11->leave($__internal_b2344d096d653ed4a3dda515be0113779c0c74324d7730ba0eaf1c9194eaaa11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af969bcaa3cdc9cf026822977e4742ef53b4015f8c8f1cba9a7a201b47e0b567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af969bcaa3cdc9cf026822977e4742ef53b4015f8c8f1cba9a7a201b47e0b567->enter($__internal_af969bcaa3cdc9cf026822977e4742ef53b4015f8c8f1cba9a7a201b47e0b567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3610e89280f7913dc91f61f555f104822cb534cc6d781355bf82212017ba9fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3610e89280f7913dc91f61f555f104822cb534cc6d781355bf82212017ba9fab->enter($__internal_3610e89280f7913dc91f61f555f104822cb534cc6d781355bf82212017ba9fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3610e89280f7913dc91f61f555f104822cb534cc6d781355bf82212017ba9fab->leave($__internal_3610e89280f7913dc91f61f555f104822cb534cc6d781355bf82212017ba9fab_prof);

        
        $__internal_af969bcaa3cdc9cf026822977e4742ef53b4015f8c8f1cba9a7a201b47e0b567->leave($__internal_af969bcaa3cdc9cf026822977e4742ef53b4015f8c8f1cba9a7a201b47e0b567_prof);

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
