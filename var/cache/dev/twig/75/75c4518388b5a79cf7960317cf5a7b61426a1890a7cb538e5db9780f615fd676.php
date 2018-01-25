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
        $__internal_3d1067b872a9f276c77b0e4934b8ec7b4b264c6f36c46eb028dbd4a3bad821da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1067b872a9f276c77b0e4934b8ec7b4b264c6f36c46eb028dbd4a3bad821da->enter($__internal_3d1067b872a9f276c77b0e4934b8ec7b4b264c6f36c46eb028dbd4a3bad821da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fbb71ba5e159ac9fd93559a849af89573a15527b5354711e71c0106830e24309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb71ba5e159ac9fd93559a849af89573a15527b5354711e71c0106830e24309->enter($__internal_fbb71ba5e159ac9fd93559a849af89573a15527b5354711e71c0106830e24309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1067b872a9f276c77b0e4934b8ec7b4b264c6f36c46eb028dbd4a3bad821da->leave($__internal_3d1067b872a9f276c77b0e4934b8ec7b4b264c6f36c46eb028dbd4a3bad821da_prof);

        
        $__internal_fbb71ba5e159ac9fd93559a849af89573a15527b5354711e71c0106830e24309->leave($__internal_fbb71ba5e159ac9fd93559a849af89573a15527b5354711e71c0106830e24309_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4d6602a29292edf868b2c04ce169e874ae5133ea5ab0547de44bd01916c4485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d6602a29292edf868b2c04ce169e874ae5133ea5ab0547de44bd01916c4485->enter($__internal_d4d6602a29292edf868b2c04ce169e874ae5133ea5ab0547de44bd01916c4485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_396f22cd21d07361260cad36ecfa01992f12b8e207f41c2aced9e3dc4c837e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396f22cd21d07361260cad36ecfa01992f12b8e207f41c2aced9e3dc4c837e0e->enter($__internal_396f22cd21d07361260cad36ecfa01992f12b8e207f41c2aced9e3dc4c837e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_396f22cd21d07361260cad36ecfa01992f12b8e207f41c2aced9e3dc4c837e0e->leave($__internal_396f22cd21d07361260cad36ecfa01992f12b8e207f41c2aced9e3dc4c837e0e_prof);

        
        $__internal_d4d6602a29292edf868b2c04ce169e874ae5133ea5ab0547de44bd01916c4485->leave($__internal_d4d6602a29292edf868b2c04ce169e874ae5133ea5ab0547de44bd01916c4485_prof);

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
