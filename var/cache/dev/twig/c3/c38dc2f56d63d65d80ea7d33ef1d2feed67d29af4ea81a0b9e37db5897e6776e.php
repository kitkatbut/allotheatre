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
        $__internal_bae05b7aa0db75214254b74a8e1ce4b061b42640a7fedc0cdbd259941f0371d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae05b7aa0db75214254b74a8e1ce4b061b42640a7fedc0cdbd259941f0371d4->enter($__internal_bae05b7aa0db75214254b74a8e1ce4b061b42640a7fedc0cdbd259941f0371d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1d0462162d3565f49bcce0e9b26eca0fb7f05e7898114b9dc596d2eb245f6247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0462162d3565f49bcce0e9b26eca0fb7f05e7898114b9dc596d2eb245f6247->enter($__internal_1d0462162d3565f49bcce0e9b26eca0fb7f05e7898114b9dc596d2eb245f6247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae05b7aa0db75214254b74a8e1ce4b061b42640a7fedc0cdbd259941f0371d4->leave($__internal_bae05b7aa0db75214254b74a8e1ce4b061b42640a7fedc0cdbd259941f0371d4_prof);

        
        $__internal_1d0462162d3565f49bcce0e9b26eca0fb7f05e7898114b9dc596d2eb245f6247->leave($__internal_1d0462162d3565f49bcce0e9b26eca0fb7f05e7898114b9dc596d2eb245f6247_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02d610a0dfa8bc4b6197162188e7fc708af0fc776aec9df507a172aa56f22f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d610a0dfa8bc4b6197162188e7fc708af0fc776aec9df507a172aa56f22f14->enter($__internal_02d610a0dfa8bc4b6197162188e7fc708af0fc776aec9df507a172aa56f22f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0d7bba51e75ba8cfe441df99a6a3be839312510573d9607e6d33438e6eb3d934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7bba51e75ba8cfe441df99a6a3be839312510573d9607e6d33438e6eb3d934->enter($__internal_0d7bba51e75ba8cfe441df99a6a3be839312510573d9607e6d33438e6eb3d934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d7bba51e75ba8cfe441df99a6a3be839312510573d9607e6d33438e6eb3d934->leave($__internal_0d7bba51e75ba8cfe441df99a6a3be839312510573d9607e6d33438e6eb3d934_prof);

        
        $__internal_02d610a0dfa8bc4b6197162188e7fc708af0fc776aec9df507a172aa56f22f14->leave($__internal_02d610a0dfa8bc4b6197162188e7fc708af0fc776aec9df507a172aa56f22f14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8772bd1ea53e28af4dff5f5469ba6027ce6139441a26c734841722e6be93bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8772bd1ea53e28af4dff5f5469ba6027ce6139441a26c734841722e6be93bed->enter($__internal_e8772bd1ea53e28af4dff5f5469ba6027ce6139441a26c734841722e6be93bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55cffe62e6c10718b7598ee421655b5c3516e1378e4931332401864a9cc9fd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cffe62e6c10718b7598ee421655b5c3516e1378e4931332401864a9cc9fd6a->enter($__internal_55cffe62e6c10718b7598ee421655b5c3516e1378e4931332401864a9cc9fd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55cffe62e6c10718b7598ee421655b5c3516e1378e4931332401864a9cc9fd6a->leave($__internal_55cffe62e6c10718b7598ee421655b5c3516e1378e4931332401864a9cc9fd6a_prof);

        
        $__internal_e8772bd1ea53e28af4dff5f5469ba6027ce6139441a26c734841722e6be93bed->leave($__internal_e8772bd1ea53e28af4dff5f5469ba6027ce6139441a26c734841722e6be93bed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4dd085e2200aebb61aaee987fc2ccb9dedffcc2d18063e2c2bfc8cd1accccd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dd085e2200aebb61aaee987fc2ccb9dedffcc2d18063e2c2bfc8cd1accccd8->enter($__internal_a4dd085e2200aebb61aaee987fc2ccb9dedffcc2d18063e2c2bfc8cd1accccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28a9f583378227a376cda65b3f3d862bc5ea3437ef4857bd732976046f23bb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a9f583378227a376cda65b3f3d862bc5ea3437ef4857bd732976046f23bb28->enter($__internal_28a9f583378227a376cda65b3f3d862bc5ea3437ef4857bd732976046f23bb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_28a9f583378227a376cda65b3f3d862bc5ea3437ef4857bd732976046f23bb28->leave($__internal_28a9f583378227a376cda65b3f3d862bc5ea3437ef4857bd732976046f23bb28_prof);

        
        $__internal_a4dd085e2200aebb61aaee987fc2ccb9dedffcc2d18063e2c2bfc8cd1accccd8->leave($__internal_a4dd085e2200aebb61aaee987fc2ccb9dedffcc2d18063e2c2bfc8cd1accccd8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
