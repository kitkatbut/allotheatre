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
        $__internal_c9c13bab5568799f25d8a4241a73f7b0456f0d69039fdf905130963aa9d11a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c13bab5568799f25d8a4241a73f7b0456f0d69039fdf905130963aa9d11a3e->enter($__internal_c9c13bab5568799f25d8a4241a73f7b0456f0d69039fdf905130963aa9d11a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_37a752dad234c95d8fc60787a994226e441809ba8b06a81221a4914a0d51168c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a752dad234c95d8fc60787a994226e441809ba8b06a81221a4914a0d51168c->enter($__internal_37a752dad234c95d8fc60787a994226e441809ba8b06a81221a4914a0d51168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c13bab5568799f25d8a4241a73f7b0456f0d69039fdf905130963aa9d11a3e->leave($__internal_c9c13bab5568799f25d8a4241a73f7b0456f0d69039fdf905130963aa9d11a3e_prof);

        
        $__internal_37a752dad234c95d8fc60787a994226e441809ba8b06a81221a4914a0d51168c->leave($__internal_37a752dad234c95d8fc60787a994226e441809ba8b06a81221a4914a0d51168c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87a1688dcdb97542d3a8ad3cf311c6bbcb8c4b6b93691453a81cfd3d572433e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a1688dcdb97542d3a8ad3cf311c6bbcb8c4b6b93691453a81cfd3d572433e7->enter($__internal_87a1688dcdb97542d3a8ad3cf311c6bbcb8c4b6b93691453a81cfd3d572433e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fe517fa594359f91c54f76da92d3b129867ca9d2742d0457c784273da989711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe517fa594359f91c54f76da92d3b129867ca9d2742d0457c784273da989711->enter($__internal_6fe517fa594359f91c54f76da92d3b129867ca9d2742d0457c784273da989711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6fe517fa594359f91c54f76da92d3b129867ca9d2742d0457c784273da989711->leave($__internal_6fe517fa594359f91c54f76da92d3b129867ca9d2742d0457c784273da989711_prof);

        
        $__internal_87a1688dcdb97542d3a8ad3cf311c6bbcb8c4b6b93691453a81cfd3d572433e7->leave($__internal_87a1688dcdb97542d3a8ad3cf311c6bbcb8c4b6b93691453a81cfd3d572433e7_prof);

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
