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
        $__internal_09bea528435b84a98f522a959f90248b5200b29fd3c7259f3afc75116b347f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bea528435b84a98f522a959f90248b5200b29fd3c7259f3afc75116b347f21->enter($__internal_09bea528435b84a98f522a959f90248b5200b29fd3c7259f3afc75116b347f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_72b05c6e44476ffeac68480bc04f0d564a298a2de58e48809661bf997d4f04b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b05c6e44476ffeac68480bc04f0d564a298a2de58e48809661bf997d4f04b2->enter($__internal_72b05c6e44476ffeac68480bc04f0d564a298a2de58e48809661bf997d4f04b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09bea528435b84a98f522a959f90248b5200b29fd3c7259f3afc75116b347f21->leave($__internal_09bea528435b84a98f522a959f90248b5200b29fd3c7259f3afc75116b347f21_prof);

        
        $__internal_72b05c6e44476ffeac68480bc04f0d564a298a2de58e48809661bf997d4f04b2->leave($__internal_72b05c6e44476ffeac68480bc04f0d564a298a2de58e48809661bf997d4f04b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_717b0b36166809c6a8a7c2cc9263d1e53c86d0e4c95dd135304de379101967f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717b0b36166809c6a8a7c2cc9263d1e53c86d0e4c95dd135304de379101967f7->enter($__internal_717b0b36166809c6a8a7c2cc9263d1e53c86d0e4c95dd135304de379101967f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_977106cfb914c06a7b1a202427eedac883c6e1fbe73f52f38e0d142fcc3a24d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977106cfb914c06a7b1a202427eedac883c6e1fbe73f52f38e0d142fcc3a24d1->enter($__internal_977106cfb914c06a7b1a202427eedac883c6e1fbe73f52f38e0d142fcc3a24d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_977106cfb914c06a7b1a202427eedac883c6e1fbe73f52f38e0d142fcc3a24d1->leave($__internal_977106cfb914c06a7b1a202427eedac883c6e1fbe73f52f38e0d142fcc3a24d1_prof);

        
        $__internal_717b0b36166809c6a8a7c2cc9263d1e53c86d0e4c95dd135304de379101967f7->leave($__internal_717b0b36166809c6a8a7c2cc9263d1e53c86d0e4c95dd135304de379101967f7_prof);

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
