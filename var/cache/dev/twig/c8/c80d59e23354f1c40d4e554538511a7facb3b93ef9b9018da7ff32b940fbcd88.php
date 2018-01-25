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
        $__internal_7a8f06a96f995a4c346567d8deb5601d861427f72cbd9576d7aa1b7a5e9283fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8f06a96f995a4c346567d8deb5601d861427f72cbd9576d7aa1b7a5e9283fa->enter($__internal_7a8f06a96f995a4c346567d8deb5601d861427f72cbd9576d7aa1b7a5e9283fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_070bc2826f29c4d10850dd63f30e999fb3d17ae2f659c2f6a093ae6596a936e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070bc2826f29c4d10850dd63f30e999fb3d17ae2f659c2f6a093ae6596a936e8->enter($__internal_070bc2826f29c4d10850dd63f30e999fb3d17ae2f659c2f6a093ae6596a936e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8f06a96f995a4c346567d8deb5601d861427f72cbd9576d7aa1b7a5e9283fa->leave($__internal_7a8f06a96f995a4c346567d8deb5601d861427f72cbd9576d7aa1b7a5e9283fa_prof);

        
        $__internal_070bc2826f29c4d10850dd63f30e999fb3d17ae2f659c2f6a093ae6596a936e8->leave($__internal_070bc2826f29c4d10850dd63f30e999fb3d17ae2f659c2f6a093ae6596a936e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89d99425558303d8b5772b055b4c079dd24ce5aebd2967a73c4b405fb3d2e1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d99425558303d8b5772b055b4c079dd24ce5aebd2967a73c4b405fb3d2e1a0->enter($__internal_89d99425558303d8b5772b055b4c079dd24ce5aebd2967a73c4b405fb3d2e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3204a2fc4179b6502149051438feaf0a8b395c9b9fb5b4cd5b12617bd4e72c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3204a2fc4179b6502149051438feaf0a8b395c9b9fb5b4cd5b12617bd4e72c0e->enter($__internal_3204a2fc4179b6502149051438feaf0a8b395c9b9fb5b4cd5b12617bd4e72c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3204a2fc4179b6502149051438feaf0a8b395c9b9fb5b4cd5b12617bd4e72c0e->leave($__internal_3204a2fc4179b6502149051438feaf0a8b395c9b9fb5b4cd5b12617bd4e72c0e_prof);

        
        $__internal_89d99425558303d8b5772b055b4c079dd24ce5aebd2967a73c4b405fb3d2e1a0->leave($__internal_89d99425558303d8b5772b055b4c079dd24ce5aebd2967a73c4b405fb3d2e1a0_prof);

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
