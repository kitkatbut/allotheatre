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
        $__internal_98cb46f342fbd362e65676419d29900b31609e0f0bb1308ce81aa662d89e7fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cb46f342fbd362e65676419d29900b31609e0f0bb1308ce81aa662d89e7fe5->enter($__internal_98cb46f342fbd362e65676419d29900b31609e0f0bb1308ce81aa662d89e7fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_52283205d18df645b9ae0b9d75d45137317fbda538310d45dc4024d3574bbf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52283205d18df645b9ae0b9d75d45137317fbda538310d45dc4024d3574bbf6f->enter($__internal_52283205d18df645b9ae0b9d75d45137317fbda538310d45dc4024d3574bbf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cb46f342fbd362e65676419d29900b31609e0f0bb1308ce81aa662d89e7fe5->leave($__internal_98cb46f342fbd362e65676419d29900b31609e0f0bb1308ce81aa662d89e7fe5_prof);

        
        $__internal_52283205d18df645b9ae0b9d75d45137317fbda538310d45dc4024d3574bbf6f->leave($__internal_52283205d18df645b9ae0b9d75d45137317fbda538310d45dc4024d3574bbf6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa1e087e8d5622a96be17847ae46e239940372ae51a5e4ac376f8485314836bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1e087e8d5622a96be17847ae46e239940372ae51a5e4ac376f8485314836bb->enter($__internal_fa1e087e8d5622a96be17847ae46e239940372ae51a5e4ac376f8485314836bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4db30cca4fe0f18ee7c6865b05c5f251a430e0200b6cc9c0bd4680196847f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4db30cca4fe0f18ee7c6865b05c5f251a430e0200b6cc9c0bd4680196847f1a->enter($__internal_e4db30cca4fe0f18ee7c6865b05c5f251a430e0200b6cc9c0bd4680196847f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4db30cca4fe0f18ee7c6865b05c5f251a430e0200b6cc9c0bd4680196847f1a->leave($__internal_e4db30cca4fe0f18ee7c6865b05c5f251a430e0200b6cc9c0bd4680196847f1a_prof);

        
        $__internal_fa1e087e8d5622a96be17847ae46e239940372ae51a5e4ac376f8485314836bb->leave($__internal_fa1e087e8d5622a96be17847ae46e239940372ae51a5e4ac376f8485314836bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e66dda722f401dac17d1df89afb997de563988f2aa2bb4b4d087c95a8e552fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66dda722f401dac17d1df89afb997de563988f2aa2bb4b4d087c95a8e552fc7->enter($__internal_e66dda722f401dac17d1df89afb997de563988f2aa2bb4b4d087c95a8e552fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69babe579ad398a5ee3fe9b81c1137f835384e5c6fc1118f3283a7fbb31a8ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69babe579ad398a5ee3fe9b81c1137f835384e5c6fc1118f3283a7fbb31a8ec1->enter($__internal_69babe579ad398a5ee3fe9b81c1137f835384e5c6fc1118f3283a7fbb31a8ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69babe579ad398a5ee3fe9b81c1137f835384e5c6fc1118f3283a7fbb31a8ec1->leave($__internal_69babe579ad398a5ee3fe9b81c1137f835384e5c6fc1118f3283a7fbb31a8ec1_prof);

        
        $__internal_e66dda722f401dac17d1df89afb997de563988f2aa2bb4b4d087c95a8e552fc7->leave($__internal_e66dda722f401dac17d1df89afb997de563988f2aa2bb4b4d087c95a8e552fc7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2eaeb589b05c267f73bd7a1af719569547243371bc32330b21e1fbfa351664d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaeb589b05c267f73bd7a1af719569547243371bc32330b21e1fbfa351664d5->enter($__internal_2eaeb589b05c267f73bd7a1af719569547243371bc32330b21e1fbfa351664d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8bdaa40ac34e4c69fd1b67266c31e3d6181332e95ec5d705e8c89235b343266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bdaa40ac34e4c69fd1b67266c31e3d6181332e95ec5d705e8c89235b343266->enter($__internal_e8bdaa40ac34e4c69fd1b67266c31e3d6181332e95ec5d705e8c89235b343266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e8bdaa40ac34e4c69fd1b67266c31e3d6181332e95ec5d705e8c89235b343266->leave($__internal_e8bdaa40ac34e4c69fd1b67266c31e3d6181332e95ec5d705e8c89235b343266_prof);

        
        $__internal_2eaeb589b05c267f73bd7a1af719569547243371bc32330b21e1fbfa351664d5->leave($__internal_2eaeb589b05c267f73bd7a1af719569547243371bc32330b21e1fbfa351664d5_prof);

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
