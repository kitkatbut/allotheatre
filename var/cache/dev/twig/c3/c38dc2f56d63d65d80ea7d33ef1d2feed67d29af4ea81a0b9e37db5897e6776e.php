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
        $__internal_95d2ef93eecf1886f165e4705cf5b5986fca81db87e1e06dcb8781a3e80e21da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d2ef93eecf1886f165e4705cf5b5986fca81db87e1e06dcb8781a3e80e21da->enter($__internal_95d2ef93eecf1886f165e4705cf5b5986fca81db87e1e06dcb8781a3e80e21da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8df22243d3ac49710db493df3359b55e68db0567cb2a77d310d64d263c225627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df22243d3ac49710db493df3359b55e68db0567cb2a77d310d64d263c225627->enter($__internal_8df22243d3ac49710db493df3359b55e68db0567cb2a77d310d64d263c225627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d2ef93eecf1886f165e4705cf5b5986fca81db87e1e06dcb8781a3e80e21da->leave($__internal_95d2ef93eecf1886f165e4705cf5b5986fca81db87e1e06dcb8781a3e80e21da_prof);

        
        $__internal_8df22243d3ac49710db493df3359b55e68db0567cb2a77d310d64d263c225627->leave($__internal_8df22243d3ac49710db493df3359b55e68db0567cb2a77d310d64d263c225627_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e791d6bb61fdfd9af2d996446d10b99a50f624d265765827d0955ad13d78d48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e791d6bb61fdfd9af2d996446d10b99a50f624d265765827d0955ad13d78d48e->enter($__internal_e791d6bb61fdfd9af2d996446d10b99a50f624d265765827d0955ad13d78d48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_419de631676bbb56ea89f000de416b84f38a83c6aedd8d0e07540e4a3a36a2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419de631676bbb56ea89f000de416b84f38a83c6aedd8d0e07540e4a3a36a2ca->enter($__internal_419de631676bbb56ea89f000de416b84f38a83c6aedd8d0e07540e4a3a36a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_419de631676bbb56ea89f000de416b84f38a83c6aedd8d0e07540e4a3a36a2ca->leave($__internal_419de631676bbb56ea89f000de416b84f38a83c6aedd8d0e07540e4a3a36a2ca_prof);

        
        $__internal_e791d6bb61fdfd9af2d996446d10b99a50f624d265765827d0955ad13d78d48e->leave($__internal_e791d6bb61fdfd9af2d996446d10b99a50f624d265765827d0955ad13d78d48e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_421bc3ae70444a2f7284224f7a33d9c4e07fd05dbd00f8828c95bea6c06ff79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421bc3ae70444a2f7284224f7a33d9c4e07fd05dbd00f8828c95bea6c06ff79f->enter($__internal_421bc3ae70444a2f7284224f7a33d9c4e07fd05dbd00f8828c95bea6c06ff79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b896c110ecbff7c214eb7ce803cf62a4629c53277d2cd1a6541554c01c25c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b896c110ecbff7c214eb7ce803cf62a4629c53277d2cd1a6541554c01c25c34->enter($__internal_4b896c110ecbff7c214eb7ce803cf62a4629c53277d2cd1a6541554c01c25c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b896c110ecbff7c214eb7ce803cf62a4629c53277d2cd1a6541554c01c25c34->leave($__internal_4b896c110ecbff7c214eb7ce803cf62a4629c53277d2cd1a6541554c01c25c34_prof);

        
        $__internal_421bc3ae70444a2f7284224f7a33d9c4e07fd05dbd00f8828c95bea6c06ff79f->leave($__internal_421bc3ae70444a2f7284224f7a33d9c4e07fd05dbd00f8828c95bea6c06ff79f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba37ca88b1d3073563a1f32771c3637f5712cc1cc811cbe15a95336731cf507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba37ca88b1d3073563a1f32771c3637f5712cc1cc811cbe15a95336731cf507->enter($__internal_0ba37ca88b1d3073563a1f32771c3637f5712cc1cc811cbe15a95336731cf507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c77e4bc54aace87f40356e1562d19af32c0c09dd29fd65eced59613a9b80ad3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77e4bc54aace87f40356e1562d19af32c0c09dd29fd65eced59613a9b80ad3e->enter($__internal_c77e4bc54aace87f40356e1562d19af32c0c09dd29fd65eced59613a9b80ad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c77e4bc54aace87f40356e1562d19af32c0c09dd29fd65eced59613a9b80ad3e->leave($__internal_c77e4bc54aace87f40356e1562d19af32c0c09dd29fd65eced59613a9b80ad3e_prof);

        
        $__internal_0ba37ca88b1d3073563a1f32771c3637f5712cc1cc811cbe15a95336731cf507->leave($__internal_0ba37ca88b1d3073563a1f32771c3637f5712cc1cc811cbe15a95336731cf507_prof);

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
