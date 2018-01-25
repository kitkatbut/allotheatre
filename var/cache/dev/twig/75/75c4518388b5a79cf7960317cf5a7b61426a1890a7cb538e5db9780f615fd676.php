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
        $__internal_e46d903961a008552c87b73dc734934a11a9d0d726235c14ef22c51493ee833a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46d903961a008552c87b73dc734934a11a9d0d726235c14ef22c51493ee833a->enter($__internal_e46d903961a008552c87b73dc734934a11a9d0d726235c14ef22c51493ee833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_235b4552a6a8881a73fed0b4ef4b65a5e378a3d0e3a05072498bbd42f0418d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235b4552a6a8881a73fed0b4ef4b65a5e378a3d0e3a05072498bbd42f0418d1b->enter($__internal_235b4552a6a8881a73fed0b4ef4b65a5e378a3d0e3a05072498bbd42f0418d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46d903961a008552c87b73dc734934a11a9d0d726235c14ef22c51493ee833a->leave($__internal_e46d903961a008552c87b73dc734934a11a9d0d726235c14ef22c51493ee833a_prof);

        
        $__internal_235b4552a6a8881a73fed0b4ef4b65a5e378a3d0e3a05072498bbd42f0418d1b->leave($__internal_235b4552a6a8881a73fed0b4ef4b65a5e378a3d0e3a05072498bbd42f0418d1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7749899abd5f93eb3ee095f8b6c6281aee316d47079d696f4fbbec67e6ef35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7749899abd5f93eb3ee095f8b6c6281aee316d47079d696f4fbbec67e6ef35b->enter($__internal_a7749899abd5f93eb3ee095f8b6c6281aee316d47079d696f4fbbec67e6ef35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd15fe9dfae47aef9bb82048af3a07177efa3bd269557b2cbddc6d751bf5d597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd15fe9dfae47aef9bb82048af3a07177efa3bd269557b2cbddc6d751bf5d597->enter($__internal_fd15fe9dfae47aef9bb82048af3a07177efa3bd269557b2cbddc6d751bf5d597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fd15fe9dfae47aef9bb82048af3a07177efa3bd269557b2cbddc6d751bf5d597->leave($__internal_fd15fe9dfae47aef9bb82048af3a07177efa3bd269557b2cbddc6d751bf5d597_prof);

        
        $__internal_a7749899abd5f93eb3ee095f8b6c6281aee316d47079d696f4fbbec67e6ef35b->leave($__internal_a7749899abd5f93eb3ee095f8b6c6281aee316d47079d696f4fbbec67e6ef35b_prof);

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
