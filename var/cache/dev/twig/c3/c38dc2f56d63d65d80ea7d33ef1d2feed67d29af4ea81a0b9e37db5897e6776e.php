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
        $__internal_26186acff698b1e887406de7a05a824145aa3694e3420360c584c073a3ab7f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26186acff698b1e887406de7a05a824145aa3694e3420360c584c073a3ab7f4e->enter($__internal_26186acff698b1e887406de7a05a824145aa3694e3420360c584c073a3ab7f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e37200be3f2d8c0632af8667898444093c77eb9823ce3f0ec65d798eee7dfeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37200be3f2d8c0632af8667898444093c77eb9823ce3f0ec65d798eee7dfeb0->enter($__internal_e37200be3f2d8c0632af8667898444093c77eb9823ce3f0ec65d798eee7dfeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26186acff698b1e887406de7a05a824145aa3694e3420360c584c073a3ab7f4e->leave($__internal_26186acff698b1e887406de7a05a824145aa3694e3420360c584c073a3ab7f4e_prof);

        
        $__internal_e37200be3f2d8c0632af8667898444093c77eb9823ce3f0ec65d798eee7dfeb0->leave($__internal_e37200be3f2d8c0632af8667898444093c77eb9823ce3f0ec65d798eee7dfeb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25c79ebbb9d327054312fd4747a87ca998aea92f56ecef1663ab494ca580edfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c79ebbb9d327054312fd4747a87ca998aea92f56ecef1663ab494ca580edfa->enter($__internal_25c79ebbb9d327054312fd4747a87ca998aea92f56ecef1663ab494ca580edfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_736e7bfb3b3a2bf0894c5523bc4fe13073df015646efb4dde1d15a50c982393b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736e7bfb3b3a2bf0894c5523bc4fe13073df015646efb4dde1d15a50c982393b->enter($__internal_736e7bfb3b3a2bf0894c5523bc4fe13073df015646efb4dde1d15a50c982393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_736e7bfb3b3a2bf0894c5523bc4fe13073df015646efb4dde1d15a50c982393b->leave($__internal_736e7bfb3b3a2bf0894c5523bc4fe13073df015646efb4dde1d15a50c982393b_prof);

        
        $__internal_25c79ebbb9d327054312fd4747a87ca998aea92f56ecef1663ab494ca580edfa->leave($__internal_25c79ebbb9d327054312fd4747a87ca998aea92f56ecef1663ab494ca580edfa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1472191452e1b29a8c4291c6c47ad94446821077f10abd84767657aa65dd4f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1472191452e1b29a8c4291c6c47ad94446821077f10abd84767657aa65dd4f08->enter($__internal_1472191452e1b29a8c4291c6c47ad94446821077f10abd84767657aa65dd4f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_960ce77ea303760d9bba2a32a3c91285b540b1d24ee3589f6a5f8b869e43e11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960ce77ea303760d9bba2a32a3c91285b540b1d24ee3589f6a5f8b869e43e11f->enter($__internal_960ce77ea303760d9bba2a32a3c91285b540b1d24ee3589f6a5f8b869e43e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_960ce77ea303760d9bba2a32a3c91285b540b1d24ee3589f6a5f8b869e43e11f->leave($__internal_960ce77ea303760d9bba2a32a3c91285b540b1d24ee3589f6a5f8b869e43e11f_prof);

        
        $__internal_1472191452e1b29a8c4291c6c47ad94446821077f10abd84767657aa65dd4f08->leave($__internal_1472191452e1b29a8c4291c6c47ad94446821077f10abd84767657aa65dd4f08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bddc25c19e2da3d0b23dad9c63e7d216933ce09a511e52b81f7c2cd903dac38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddc25c19e2da3d0b23dad9c63e7d216933ce09a511e52b81f7c2cd903dac38e->enter($__internal_bddc25c19e2da3d0b23dad9c63e7d216933ce09a511e52b81f7c2cd903dac38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55e06dd8538ab1dd9ddce577003288d85e545e2c60ff0ef84321696a15f52fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e06dd8538ab1dd9ddce577003288d85e545e2c60ff0ef84321696a15f52fe3->enter($__internal_55e06dd8538ab1dd9ddce577003288d85e545e2c60ff0ef84321696a15f52fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_55e06dd8538ab1dd9ddce577003288d85e545e2c60ff0ef84321696a15f52fe3->leave($__internal_55e06dd8538ab1dd9ddce577003288d85e545e2c60ff0ef84321696a15f52fe3_prof);

        
        $__internal_bddc25c19e2da3d0b23dad9c63e7d216933ce09a511e52b81f7c2cd903dac38e->leave($__internal_bddc25c19e2da3d0b23dad9c63e7d216933ce09a511e52b81f7c2cd903dac38e_prof);

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
