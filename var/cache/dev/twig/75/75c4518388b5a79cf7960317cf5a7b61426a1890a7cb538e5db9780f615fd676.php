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
        $__internal_2bfcc942da38acf1920159b9cef8fb139c0d6eb0850d1bcda31e7c6465ab5df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfcc942da38acf1920159b9cef8fb139c0d6eb0850d1bcda31e7c6465ab5df6->enter($__internal_2bfcc942da38acf1920159b9cef8fb139c0d6eb0850d1bcda31e7c6465ab5df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_011b4270ae7e9f6f3bd744b4206ee60423672444d2d89c3a8b10ec8721c35b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011b4270ae7e9f6f3bd744b4206ee60423672444d2d89c3a8b10ec8721c35b9e->enter($__internal_011b4270ae7e9f6f3bd744b4206ee60423672444d2d89c3a8b10ec8721c35b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfcc942da38acf1920159b9cef8fb139c0d6eb0850d1bcda31e7c6465ab5df6->leave($__internal_2bfcc942da38acf1920159b9cef8fb139c0d6eb0850d1bcda31e7c6465ab5df6_prof);

        
        $__internal_011b4270ae7e9f6f3bd744b4206ee60423672444d2d89c3a8b10ec8721c35b9e->leave($__internal_011b4270ae7e9f6f3bd744b4206ee60423672444d2d89c3a8b10ec8721c35b9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5857c6c93d193ca4225875cc1346a73521712a0797901e20237177b6ec55002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5857c6c93d193ca4225875cc1346a73521712a0797901e20237177b6ec55002->enter($__internal_c5857c6c93d193ca4225875cc1346a73521712a0797901e20237177b6ec55002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34e42513a4553dfe209fd90f9ddc985e8b94bac0f01f92121e0b308e03394df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e42513a4553dfe209fd90f9ddc985e8b94bac0f01f92121e0b308e03394df9->enter($__internal_34e42513a4553dfe209fd90f9ddc985e8b94bac0f01f92121e0b308e03394df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_34e42513a4553dfe209fd90f9ddc985e8b94bac0f01f92121e0b308e03394df9->leave($__internal_34e42513a4553dfe209fd90f9ddc985e8b94bac0f01f92121e0b308e03394df9_prof);

        
        $__internal_c5857c6c93d193ca4225875cc1346a73521712a0797901e20237177b6ec55002->leave($__internal_c5857c6c93d193ca4225875cc1346a73521712a0797901e20237177b6ec55002_prof);

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
