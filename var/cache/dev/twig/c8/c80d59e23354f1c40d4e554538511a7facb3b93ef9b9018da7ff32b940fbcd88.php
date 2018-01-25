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
        $__internal_739cfe89ca9dec340b8ea140dca7f7ee70856490228b69e35aa10dc98181f54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739cfe89ca9dec340b8ea140dca7f7ee70856490228b69e35aa10dc98181f54a->enter($__internal_739cfe89ca9dec340b8ea140dca7f7ee70856490228b69e35aa10dc98181f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0fe4656fedec23534a57d2d68b58d50501e1ddae16170b6dce94b5275e1331f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe4656fedec23534a57d2d68b58d50501e1ddae16170b6dce94b5275e1331f9->enter($__internal_0fe4656fedec23534a57d2d68b58d50501e1ddae16170b6dce94b5275e1331f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739cfe89ca9dec340b8ea140dca7f7ee70856490228b69e35aa10dc98181f54a->leave($__internal_739cfe89ca9dec340b8ea140dca7f7ee70856490228b69e35aa10dc98181f54a_prof);

        
        $__internal_0fe4656fedec23534a57d2d68b58d50501e1ddae16170b6dce94b5275e1331f9->leave($__internal_0fe4656fedec23534a57d2d68b58d50501e1ddae16170b6dce94b5275e1331f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_569bbc30d72c14931ba3a35db4ca02058608df602cdd1f6588ecf2500cdbc06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569bbc30d72c14931ba3a35db4ca02058608df602cdd1f6588ecf2500cdbc06a->enter($__internal_569bbc30d72c14931ba3a35db4ca02058608df602cdd1f6588ecf2500cdbc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d675266a4639487bdfc5970ecb54d45533410c88fb609cf185ffe0faba3f77a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d675266a4639487bdfc5970ecb54d45533410c88fb609cf185ffe0faba3f77a8->enter($__internal_d675266a4639487bdfc5970ecb54d45533410c88fb609cf185ffe0faba3f77a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d675266a4639487bdfc5970ecb54d45533410c88fb609cf185ffe0faba3f77a8->leave($__internal_d675266a4639487bdfc5970ecb54d45533410c88fb609cf185ffe0faba3f77a8_prof);

        
        $__internal_569bbc30d72c14931ba3a35db4ca02058608df602cdd1f6588ecf2500cdbc06a->leave($__internal_569bbc30d72c14931ba3a35db4ca02058608df602cdd1f6588ecf2500cdbc06a_prof);

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
