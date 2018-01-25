<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2200b168ef3fbdeae393f51fd8308ab7aef1ec213195a5f3f0c1482526f9956d extends Twig_Template
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
        $__internal_39fae3a6074c23f575c55f04c7ce57ce485d9ea89e53ba3948b5df57d6d8e153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fae3a6074c23f575c55f04c7ce57ce485d9ea89e53ba3948b5df57d6d8e153->enter($__internal_39fae3a6074c23f575c55f04c7ce57ce485d9ea89e53ba3948b5df57d6d8e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e94e1bf75df33cfa73a25235b5a3b6128b7bad98af0004fbc59141c3eb506fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94e1bf75df33cfa73a25235b5a3b6128b7bad98af0004fbc59141c3eb506fde->enter($__internal_e94e1bf75df33cfa73a25235b5a3b6128b7bad98af0004fbc59141c3eb506fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39fae3a6074c23f575c55f04c7ce57ce485d9ea89e53ba3948b5df57d6d8e153->leave($__internal_39fae3a6074c23f575c55f04c7ce57ce485d9ea89e53ba3948b5df57d6d8e153_prof);

        
        $__internal_e94e1bf75df33cfa73a25235b5a3b6128b7bad98af0004fbc59141c3eb506fde->leave($__internal_e94e1bf75df33cfa73a25235b5a3b6128b7bad98af0004fbc59141c3eb506fde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9960dc2f5bc83759335c38265b3ba379cd86021cf0ceea65edd6efbe2a27bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9960dc2f5bc83759335c38265b3ba379cd86021cf0ceea65edd6efbe2a27bcd->enter($__internal_b9960dc2f5bc83759335c38265b3ba379cd86021cf0ceea65edd6efbe2a27bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5b9aec2cee3cd4711514a214c599dc9d9d84d36fbdaabb85b0686784b20f8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b9aec2cee3cd4711514a214c599dc9d9d84d36fbdaabb85b0686784b20f8ed->enter($__internal_e5b9aec2cee3cd4711514a214c599dc9d9d84d36fbdaabb85b0686784b20f8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e5b9aec2cee3cd4711514a214c599dc9d9d84d36fbdaabb85b0686784b20f8ed->leave($__internal_e5b9aec2cee3cd4711514a214c599dc9d9d84d36fbdaabb85b0686784b20f8ed_prof);

        
        $__internal_b9960dc2f5bc83759335c38265b3ba379cd86021cf0ceea65edd6efbe2a27bcd->leave($__internal_b9960dc2f5bc83759335c38265b3ba379cd86021cf0ceea65edd6efbe2a27bcd_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
