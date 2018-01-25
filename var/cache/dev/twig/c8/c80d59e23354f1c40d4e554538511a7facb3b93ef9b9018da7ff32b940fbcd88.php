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
        $__internal_cd91c2a39f31eaa8425ce97cc5e940bc5b6f59b3f7de9bf768f8577d16eb743e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd91c2a39f31eaa8425ce97cc5e940bc5b6f59b3f7de9bf768f8577d16eb743e->enter($__internal_cd91c2a39f31eaa8425ce97cc5e940bc5b6f59b3f7de9bf768f8577d16eb743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_420c4768ab5c9c076e7b4251782115ce515c3d31b0ff0bc25de8ea56e507a0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420c4768ab5c9c076e7b4251782115ce515c3d31b0ff0bc25de8ea56e507a0f9->enter($__internal_420c4768ab5c9c076e7b4251782115ce515c3d31b0ff0bc25de8ea56e507a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd91c2a39f31eaa8425ce97cc5e940bc5b6f59b3f7de9bf768f8577d16eb743e->leave($__internal_cd91c2a39f31eaa8425ce97cc5e940bc5b6f59b3f7de9bf768f8577d16eb743e_prof);

        
        $__internal_420c4768ab5c9c076e7b4251782115ce515c3d31b0ff0bc25de8ea56e507a0f9->leave($__internal_420c4768ab5c9c076e7b4251782115ce515c3d31b0ff0bc25de8ea56e507a0f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3893ec9462c35d4241ce4b006d37261aaea30993d2f38936b0588769e7cfc384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3893ec9462c35d4241ce4b006d37261aaea30993d2f38936b0588769e7cfc384->enter($__internal_3893ec9462c35d4241ce4b006d37261aaea30993d2f38936b0588769e7cfc384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc5646fd64fccd6d0fee2f57abadc91d921f42678a8e30f56fb07e9d80348ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5646fd64fccd6d0fee2f57abadc91d921f42678a8e30f56fb07e9d80348ef4->enter($__internal_dc5646fd64fccd6d0fee2f57abadc91d921f42678a8e30f56fb07e9d80348ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_dc5646fd64fccd6d0fee2f57abadc91d921f42678a8e30f56fb07e9d80348ef4->leave($__internal_dc5646fd64fccd6d0fee2f57abadc91d921f42678a8e30f56fb07e9d80348ef4_prof);

        
        $__internal_3893ec9462c35d4241ce4b006d37261aaea30993d2f38936b0588769e7cfc384->leave($__internal_3893ec9462c35d4241ce4b006d37261aaea30993d2f38936b0588769e7cfc384_prof);

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
