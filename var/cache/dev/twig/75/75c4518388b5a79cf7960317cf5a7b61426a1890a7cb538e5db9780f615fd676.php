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
        $__internal_30d3bbf699fe0037bec70d6c8fbb4ba7a25ddb93c9da2a590ece15891725be68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d3bbf699fe0037bec70d6c8fbb4ba7a25ddb93c9da2a590ece15891725be68->enter($__internal_30d3bbf699fe0037bec70d6c8fbb4ba7a25ddb93c9da2a590ece15891725be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2903214dc8e200c44e89227561fe2b31c481fce1488babd9be98edb37101d2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2903214dc8e200c44e89227561fe2b31c481fce1488babd9be98edb37101d2f9->enter($__internal_2903214dc8e200c44e89227561fe2b31c481fce1488babd9be98edb37101d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d3bbf699fe0037bec70d6c8fbb4ba7a25ddb93c9da2a590ece15891725be68->leave($__internal_30d3bbf699fe0037bec70d6c8fbb4ba7a25ddb93c9da2a590ece15891725be68_prof);

        
        $__internal_2903214dc8e200c44e89227561fe2b31c481fce1488babd9be98edb37101d2f9->leave($__internal_2903214dc8e200c44e89227561fe2b31c481fce1488babd9be98edb37101d2f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ac2ad5f9d358238a8e7819e63c4c29c01e812a3e4f19a2b239a5133698b209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac2ad5f9d358238a8e7819e63c4c29c01e812a3e4f19a2b239a5133698b209c->enter($__internal_6ac2ad5f9d358238a8e7819e63c4c29c01e812a3e4f19a2b239a5133698b209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35717fae1dd02ed5f8f9eb5cb961de5662a792cda3b52ece3a3e17d7a3468430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35717fae1dd02ed5f8f9eb5cb961de5662a792cda3b52ece3a3e17d7a3468430->enter($__internal_35717fae1dd02ed5f8f9eb5cb961de5662a792cda3b52ece3a3e17d7a3468430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_35717fae1dd02ed5f8f9eb5cb961de5662a792cda3b52ece3a3e17d7a3468430->leave($__internal_35717fae1dd02ed5f8f9eb5cb961de5662a792cda3b52ece3a3e17d7a3468430_prof);

        
        $__internal_6ac2ad5f9d358238a8e7819e63c4c29c01e812a3e4f19a2b239a5133698b209c->leave($__internal_6ac2ad5f9d358238a8e7819e63c4c29c01e812a3e4f19a2b239a5133698b209c_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
