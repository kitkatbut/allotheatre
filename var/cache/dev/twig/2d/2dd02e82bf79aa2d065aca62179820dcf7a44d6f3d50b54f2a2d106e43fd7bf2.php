<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fc0cc20ca1a5ea1bb7d4230c01dbcd07bad77bd59dbbbe8e8502d59cdf18fa2 extends Twig_Template
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
        $__internal_5f930ac628dfc0c0bb7319a6f375ed0c0d4d5278c7eacbb1ff9fc787422ad75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f930ac628dfc0c0bb7319a6f375ed0c0d4d5278c7eacbb1ff9fc787422ad75f->enter($__internal_5f930ac628dfc0c0bb7319a6f375ed0c0d4d5278c7eacbb1ff9fc787422ad75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8f3cbda5a7b87eb877ee06695d2e705826115fa61152dd3af4b5a49403d354f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3cbda5a7b87eb877ee06695d2e705826115fa61152dd3af4b5a49403d354f2->enter($__internal_8f3cbda5a7b87eb877ee06695d2e705826115fa61152dd3af4b5a49403d354f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f930ac628dfc0c0bb7319a6f375ed0c0d4d5278c7eacbb1ff9fc787422ad75f->leave($__internal_5f930ac628dfc0c0bb7319a6f375ed0c0d4d5278c7eacbb1ff9fc787422ad75f_prof);

        
        $__internal_8f3cbda5a7b87eb877ee06695d2e705826115fa61152dd3af4b5a49403d354f2->leave($__internal_8f3cbda5a7b87eb877ee06695d2e705826115fa61152dd3af4b5a49403d354f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_538c856d9f38dc904d08c0ce6b5655f4ac1028f10b65138752d9e08ebb76e8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538c856d9f38dc904d08c0ce6b5655f4ac1028f10b65138752d9e08ebb76e8d7->enter($__internal_538c856d9f38dc904d08c0ce6b5655f4ac1028f10b65138752d9e08ebb76e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_574798c3d52027723535f53293e818db555f70961220db5a2ef0f11ddae9d7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574798c3d52027723535f53293e818db555f70961220db5a2ef0f11ddae9d7dc->enter($__internal_574798c3d52027723535f53293e818db555f70961220db5a2ef0f11ddae9d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_574798c3d52027723535f53293e818db555f70961220db5a2ef0f11ddae9d7dc->leave($__internal_574798c3d52027723535f53293e818db555f70961220db5a2ef0f11ddae9d7dc_prof);

        
        $__internal_538c856d9f38dc904d08c0ce6b5655f4ac1028f10b65138752d9e08ebb76e8d7->leave($__internal_538c856d9f38dc904d08c0ce6b5655f4ac1028f10b65138752d9e08ebb76e8d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b444f3e5ce02b43e6b950a2792cbf4a244787847fa169baf5bba89f3e93f6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b444f3e5ce02b43e6b950a2792cbf4a244787847fa169baf5bba89f3e93f6ae->enter($__internal_1b444f3e5ce02b43e6b950a2792cbf4a244787847fa169baf5bba89f3e93f6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b55db1366cdee4daa6260bb664abb261c39564e377205d6d3e09294c6bc0d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b55db1366cdee4daa6260bb664abb261c39564e377205d6d3e09294c6bc0d59->enter($__internal_8b55db1366cdee4daa6260bb664abb261c39564e377205d6d3e09294c6bc0d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b55db1366cdee4daa6260bb664abb261c39564e377205d6d3e09294c6bc0d59->leave($__internal_8b55db1366cdee4daa6260bb664abb261c39564e377205d6d3e09294c6bc0d59_prof);

        
        $__internal_1b444f3e5ce02b43e6b950a2792cbf4a244787847fa169baf5bba89f3e93f6ae->leave($__internal_1b444f3e5ce02b43e6b950a2792cbf4a244787847fa169baf5bba89f3e93f6ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74a2a7523e718c224ec5f13a404558d0b6dfe3f00970d6a099ca251196d254a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a2a7523e718c224ec5f13a404558d0b6dfe3f00970d6a099ca251196d254a6->enter($__internal_74a2a7523e718c224ec5f13a404558d0b6dfe3f00970d6a099ca251196d254a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_377b138bf244db509f89584f1ce115b1965ce20551505233777a9fdccc1740d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377b138bf244db509f89584f1ce115b1965ce20551505233777a9fdccc1740d0->enter($__internal_377b138bf244db509f89584f1ce115b1965ce20551505233777a9fdccc1740d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_377b138bf244db509f89584f1ce115b1965ce20551505233777a9fdccc1740d0->leave($__internal_377b138bf244db509f89584f1ce115b1965ce20551505233777a9fdccc1740d0_prof);

        
        $__internal_74a2a7523e718c224ec5f13a404558d0b6dfe3f00970d6a099ca251196d254a6->leave($__internal_74a2a7523e718c224ec5f13a404558d0b6dfe3f00970d6a099ca251196d254a6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
