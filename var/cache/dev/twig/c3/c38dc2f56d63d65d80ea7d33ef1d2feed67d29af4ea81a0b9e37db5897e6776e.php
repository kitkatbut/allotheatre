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
        $__internal_2976ff2c9103d0b342831f71b4136bfa234422d8cca42f547c5043da0d1c3afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2976ff2c9103d0b342831f71b4136bfa234422d8cca42f547c5043da0d1c3afa->enter($__internal_2976ff2c9103d0b342831f71b4136bfa234422d8cca42f547c5043da0d1c3afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0f4769517a27bbb26c9ce5e03ec9c0bbc4cc57f4f8f80d1a4c70b7c75054d758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4769517a27bbb26c9ce5e03ec9c0bbc4cc57f4f8f80d1a4c70b7c75054d758->enter($__internal_0f4769517a27bbb26c9ce5e03ec9c0bbc4cc57f4f8f80d1a4c70b7c75054d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2976ff2c9103d0b342831f71b4136bfa234422d8cca42f547c5043da0d1c3afa->leave($__internal_2976ff2c9103d0b342831f71b4136bfa234422d8cca42f547c5043da0d1c3afa_prof);

        
        $__internal_0f4769517a27bbb26c9ce5e03ec9c0bbc4cc57f4f8f80d1a4c70b7c75054d758->leave($__internal_0f4769517a27bbb26c9ce5e03ec9c0bbc4cc57f4f8f80d1a4c70b7c75054d758_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b770b6bf7a6cfe96d1aa666694de36fe7cf1a2e4669fc74356e3546d181a8eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b770b6bf7a6cfe96d1aa666694de36fe7cf1a2e4669fc74356e3546d181a8eaa->enter($__internal_b770b6bf7a6cfe96d1aa666694de36fe7cf1a2e4669fc74356e3546d181a8eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60b9bbc02e85aa374bc67780c4b23458ed198742b4b4be92d92f134563a454ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b9bbc02e85aa374bc67780c4b23458ed198742b4b4be92d92f134563a454ca->enter($__internal_60b9bbc02e85aa374bc67780c4b23458ed198742b4b4be92d92f134563a454ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60b9bbc02e85aa374bc67780c4b23458ed198742b4b4be92d92f134563a454ca->leave($__internal_60b9bbc02e85aa374bc67780c4b23458ed198742b4b4be92d92f134563a454ca_prof);

        
        $__internal_b770b6bf7a6cfe96d1aa666694de36fe7cf1a2e4669fc74356e3546d181a8eaa->leave($__internal_b770b6bf7a6cfe96d1aa666694de36fe7cf1a2e4669fc74356e3546d181a8eaa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f1e0565de0308f254bb2db9ae3365622daaf7ce806304c197edd6341c3d583e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1e0565de0308f254bb2db9ae3365622daaf7ce806304c197edd6341c3d583e->enter($__internal_5f1e0565de0308f254bb2db9ae3365622daaf7ce806304c197edd6341c3d583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0a5ec9013fd578ad8b649e278a7fa616ad97c8b044eb745f86810a40e63bf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a5ec9013fd578ad8b649e278a7fa616ad97c8b044eb745f86810a40e63bf21->enter($__internal_f0a5ec9013fd578ad8b649e278a7fa616ad97c8b044eb745f86810a40e63bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0a5ec9013fd578ad8b649e278a7fa616ad97c8b044eb745f86810a40e63bf21->leave($__internal_f0a5ec9013fd578ad8b649e278a7fa616ad97c8b044eb745f86810a40e63bf21_prof);

        
        $__internal_5f1e0565de0308f254bb2db9ae3365622daaf7ce806304c197edd6341c3d583e->leave($__internal_5f1e0565de0308f254bb2db9ae3365622daaf7ce806304c197edd6341c3d583e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_422bbcd551e45d10b632f9b6a2c7ed20a5b7af9072297e35ccc29fc6c99612a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422bbcd551e45d10b632f9b6a2c7ed20a5b7af9072297e35ccc29fc6c99612a9->enter($__internal_422bbcd551e45d10b632f9b6a2c7ed20a5b7af9072297e35ccc29fc6c99612a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5b76bfd590794e21c1db388a28d842183d456e0cf8fd8d6c9a5678cdcd394ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b76bfd590794e21c1db388a28d842183d456e0cf8fd8d6c9a5678cdcd394ff->enter($__internal_f5b76bfd590794e21c1db388a28d842183d456e0cf8fd8d6c9a5678cdcd394ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f5b76bfd590794e21c1db388a28d842183d456e0cf8fd8d6c9a5678cdcd394ff->leave($__internal_f5b76bfd590794e21c1db388a28d842183d456e0cf8fd8d6c9a5678cdcd394ff_prof);

        
        $__internal_422bbcd551e45d10b632f9b6a2c7ed20a5b7af9072297e35ccc29fc6c99612a9->leave($__internal_422bbcd551e45d10b632f9b6a2c7ed20a5b7af9072297e35ccc29fc6c99612a9_prof);

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
