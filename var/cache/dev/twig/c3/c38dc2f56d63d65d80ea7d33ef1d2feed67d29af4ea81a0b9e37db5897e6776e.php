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
        $__internal_eb3d161bc267edf31c247da45a495a26e95881279530b26e6f20626b5d9f873b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3d161bc267edf31c247da45a495a26e95881279530b26e6f20626b5d9f873b->enter($__internal_eb3d161bc267edf31c247da45a495a26e95881279530b26e6f20626b5d9f873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e56dc4f8f5c22f8528422f613432898bc50e5453efe4f34db18a66ba6bb4c2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56dc4f8f5c22f8528422f613432898bc50e5453efe4f34db18a66ba6bb4c2f7->enter($__internal_e56dc4f8f5c22f8528422f613432898bc50e5453efe4f34db18a66ba6bb4c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3d161bc267edf31c247da45a495a26e95881279530b26e6f20626b5d9f873b->leave($__internal_eb3d161bc267edf31c247da45a495a26e95881279530b26e6f20626b5d9f873b_prof);

        
        $__internal_e56dc4f8f5c22f8528422f613432898bc50e5453efe4f34db18a66ba6bb4c2f7->leave($__internal_e56dc4f8f5c22f8528422f613432898bc50e5453efe4f34db18a66ba6bb4c2f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19e055a7f01a19448eda3208fc343182df332d9a1608ff3d5dffdf888b67bda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e055a7f01a19448eda3208fc343182df332d9a1608ff3d5dffdf888b67bda0->enter($__internal_19e055a7f01a19448eda3208fc343182df332d9a1608ff3d5dffdf888b67bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05227f570ef03dd2b00916988e9f36f445666bf02079644cd860b0f389dcf7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05227f570ef03dd2b00916988e9f36f445666bf02079644cd860b0f389dcf7cf->enter($__internal_05227f570ef03dd2b00916988e9f36f445666bf02079644cd860b0f389dcf7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05227f570ef03dd2b00916988e9f36f445666bf02079644cd860b0f389dcf7cf->leave($__internal_05227f570ef03dd2b00916988e9f36f445666bf02079644cd860b0f389dcf7cf_prof);

        
        $__internal_19e055a7f01a19448eda3208fc343182df332d9a1608ff3d5dffdf888b67bda0->leave($__internal_19e055a7f01a19448eda3208fc343182df332d9a1608ff3d5dffdf888b67bda0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2913a27fe8378b59a086aed4fc47a998c51d489b8716149ff361828c9dfbe6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2913a27fe8378b59a086aed4fc47a998c51d489b8716149ff361828c9dfbe6bd->enter($__internal_2913a27fe8378b59a086aed4fc47a998c51d489b8716149ff361828c9dfbe6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c131abe5a317de40460dfb9cf5fbb20cd0d915835d8d28939c3081db5532e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c131abe5a317de40460dfb9cf5fbb20cd0d915835d8d28939c3081db5532e30->enter($__internal_8c131abe5a317de40460dfb9cf5fbb20cd0d915835d8d28939c3081db5532e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c131abe5a317de40460dfb9cf5fbb20cd0d915835d8d28939c3081db5532e30->leave($__internal_8c131abe5a317de40460dfb9cf5fbb20cd0d915835d8d28939c3081db5532e30_prof);

        
        $__internal_2913a27fe8378b59a086aed4fc47a998c51d489b8716149ff361828c9dfbe6bd->leave($__internal_2913a27fe8378b59a086aed4fc47a998c51d489b8716149ff361828c9dfbe6bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5958837c4446eadc4c982cc23019b4b8af5518bbf218dd248f6db8fcb25bbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5958837c4446eadc4c982cc23019b4b8af5518bbf218dd248f6db8fcb25bbfe->enter($__internal_a5958837c4446eadc4c982cc23019b4b8af5518bbf218dd248f6db8fcb25bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a28b1d97d81452a50275dee1177a60405898823049a3a56a27b4c5be31c2f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a28b1d97d81452a50275dee1177a60405898823049a3a56a27b4c5be31c2f81->enter($__internal_8a28b1d97d81452a50275dee1177a60405898823049a3a56a27b4c5be31c2f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8a28b1d97d81452a50275dee1177a60405898823049a3a56a27b4c5be31c2f81->leave($__internal_8a28b1d97d81452a50275dee1177a60405898823049a3a56a27b4c5be31c2f81_prof);

        
        $__internal_a5958837c4446eadc4c982cc23019b4b8af5518bbf218dd248f6db8fcb25bbfe->leave($__internal_a5958837c4446eadc4c982cc23019b4b8af5518bbf218dd248f6db8fcb25bbfe_prof);

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
