<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_75d082011f71bda63a2cdd6e385917207e963ab455bfd69b8eea8ef64e95ee1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32d64eb483dcce4ce6155f2d09c9b951574fac797df900d225d8e480fe2aa3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d64eb483dcce4ce6155f2d09c9b951574fac797df900d225d8e480fe2aa3fc->enter($__internal_32d64eb483dcce4ce6155f2d09c9b951574fac797df900d225d8e480fe2aa3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f07bc6523fa965931f76bca3a9e18225a28f5a359913f638e62ce379ef5903cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07bc6523fa965931f76bca3a9e18225a28f5a359913f638e62ce379ef5903cd->enter($__internal_f07bc6523fa965931f76bca3a9e18225a28f5a359913f638e62ce379ef5903cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d64eb483dcce4ce6155f2d09c9b951574fac797df900d225d8e480fe2aa3fc->leave($__internal_32d64eb483dcce4ce6155f2d09c9b951574fac797df900d225d8e480fe2aa3fc_prof);

        
        $__internal_f07bc6523fa965931f76bca3a9e18225a28f5a359913f638e62ce379ef5903cd->leave($__internal_f07bc6523fa965931f76bca3a9e18225a28f5a359913f638e62ce379ef5903cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c8c2b8535f88694f57479cfa2f43056a77942613759c4c834795df8b1809bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8c2b8535f88694f57479cfa2f43056a77942613759c4c834795df8b1809bdc->enter($__internal_2c8c2b8535f88694f57479cfa2f43056a77942613759c4c834795df8b1809bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0f89c19164924cfcf7c7d6659b1c1bcaf01e66c7270a47a3db24249675d54cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f89c19164924cfcf7c7d6659b1c1bcaf01e66c7270a47a3db24249675d54cc->enter($__internal_e0f89c19164924cfcf7c7d6659b1c1bcaf01e66c7270a47a3db24249675d54cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0f89c19164924cfcf7c7d6659b1c1bcaf01e66c7270a47a3db24249675d54cc->leave($__internal_e0f89c19164924cfcf7c7d6659b1c1bcaf01e66c7270a47a3db24249675d54cc_prof);

        
        $__internal_2c8c2b8535f88694f57479cfa2f43056a77942613759c4c834795df8b1809bdc->leave($__internal_2c8c2b8535f88694f57479cfa2f43056a77942613759c4c834795df8b1809bdc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_988dce345a870229c1367b52eed3b20b2080faaef923c82a72ce2b75be1d6cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988dce345a870229c1367b52eed3b20b2080faaef923c82a72ce2b75be1d6cf3->enter($__internal_988dce345a870229c1367b52eed3b20b2080faaef923c82a72ce2b75be1d6cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6cc5792e0a0381725fb5cd978221dc0c7f5470dffce303e903f3e0acb0f17283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc5792e0a0381725fb5cd978221dc0c7f5470dffce303e903f3e0acb0f17283->enter($__internal_6cc5792e0a0381725fb5cd978221dc0c7f5470dffce303e903f3e0acb0f17283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cc5792e0a0381725fb5cd978221dc0c7f5470dffce303e903f3e0acb0f17283->leave($__internal_6cc5792e0a0381725fb5cd978221dc0c7f5470dffce303e903f3e0acb0f17283_prof);

        
        $__internal_988dce345a870229c1367b52eed3b20b2080faaef923c82a72ce2b75be1d6cf3->leave($__internal_988dce345a870229c1367b52eed3b20b2080faaef923c82a72ce2b75be1d6cf3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15083a90fa15a277b6085b392045e64229ded19bd7b197ca1d2088281b50afc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15083a90fa15a277b6085b392045e64229ded19bd7b197ca1d2088281b50afc3->enter($__internal_15083a90fa15a277b6085b392045e64229ded19bd7b197ca1d2088281b50afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a17cff9cc9afbd250d441ac8e512540902423026b29cb590e52c9593f04a7af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17cff9cc9afbd250d441ac8e512540902423026b29cb590e52c9593f04a7af8->enter($__internal_a17cff9cc9afbd250d441ac8e512540902423026b29cb590e52c9593f04a7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a17cff9cc9afbd250d441ac8e512540902423026b29cb590e52c9593f04a7af8->leave($__internal_a17cff9cc9afbd250d441ac8e512540902423026b29cb590e52c9593f04a7af8_prof);

        
        $__internal_15083a90fa15a277b6085b392045e64229ded19bd7b197ca1d2088281b50afc3->leave($__internal_15083a90fa15a277b6085b392045e64229ded19bd7b197ca1d2088281b50afc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
