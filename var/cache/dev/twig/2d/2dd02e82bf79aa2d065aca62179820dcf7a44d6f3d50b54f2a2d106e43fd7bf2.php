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
        $__internal_3fbad8521f2a01e95389afd0faeadeeab38d0012e4f436e172dd7189a114515c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbad8521f2a01e95389afd0faeadeeab38d0012e4f436e172dd7189a114515c->enter($__internal_3fbad8521f2a01e95389afd0faeadeeab38d0012e4f436e172dd7189a114515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1859b132466c370777635eccbcccc276bb6efcb73af3755393b8bb07719d4ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1859b132466c370777635eccbcccc276bb6efcb73af3755393b8bb07719d4ad6->enter($__internal_1859b132466c370777635eccbcccc276bb6efcb73af3755393b8bb07719d4ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbad8521f2a01e95389afd0faeadeeab38d0012e4f436e172dd7189a114515c->leave($__internal_3fbad8521f2a01e95389afd0faeadeeab38d0012e4f436e172dd7189a114515c_prof);

        
        $__internal_1859b132466c370777635eccbcccc276bb6efcb73af3755393b8bb07719d4ad6->leave($__internal_1859b132466c370777635eccbcccc276bb6efcb73af3755393b8bb07719d4ad6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_972e868d60ae5c0af813375f630e7c2f9a674f090c723f9b27dd4b6b0302a8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972e868d60ae5c0af813375f630e7c2f9a674f090c723f9b27dd4b6b0302a8c9->enter($__internal_972e868d60ae5c0af813375f630e7c2f9a674f090c723f9b27dd4b6b0302a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe13c2442b00c9ec325f0071d41594bbfb2090d08c14930ada165a72477e8837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe13c2442b00c9ec325f0071d41594bbfb2090d08c14930ada165a72477e8837->enter($__internal_fe13c2442b00c9ec325f0071d41594bbfb2090d08c14930ada165a72477e8837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe13c2442b00c9ec325f0071d41594bbfb2090d08c14930ada165a72477e8837->leave($__internal_fe13c2442b00c9ec325f0071d41594bbfb2090d08c14930ada165a72477e8837_prof);

        
        $__internal_972e868d60ae5c0af813375f630e7c2f9a674f090c723f9b27dd4b6b0302a8c9->leave($__internal_972e868d60ae5c0af813375f630e7c2f9a674f090c723f9b27dd4b6b0302a8c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb72d37cc869c50a1431ad050d718198acf11bb121c38e2b679a7791d819499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb72d37cc869c50a1431ad050d718198acf11bb121c38e2b679a7791d819499a->enter($__internal_cb72d37cc869c50a1431ad050d718198acf11bb121c38e2b679a7791d819499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81d096cebca1efb5595579ad78d2abff8745805ff916b984b056d195fb67c3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d096cebca1efb5595579ad78d2abff8745805ff916b984b056d195fb67c3cd->enter($__internal_81d096cebca1efb5595579ad78d2abff8745805ff916b984b056d195fb67c3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81d096cebca1efb5595579ad78d2abff8745805ff916b984b056d195fb67c3cd->leave($__internal_81d096cebca1efb5595579ad78d2abff8745805ff916b984b056d195fb67c3cd_prof);

        
        $__internal_cb72d37cc869c50a1431ad050d718198acf11bb121c38e2b679a7791d819499a->leave($__internal_cb72d37cc869c50a1431ad050d718198acf11bb121c38e2b679a7791d819499a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46c534be1841a8f2d415d4cb6a39119344afe416689aed5c99b61e351357417e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c534be1841a8f2d415d4cb6a39119344afe416689aed5c99b61e351357417e->enter($__internal_46c534be1841a8f2d415d4cb6a39119344afe416689aed5c99b61e351357417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6f539397fbedd30239a94eb66f22344b245cdb5cfc6fdfd414ca2258a1259da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f539397fbedd30239a94eb66f22344b245cdb5cfc6fdfd414ca2258a1259da->enter($__internal_a6f539397fbedd30239a94eb66f22344b245cdb5cfc6fdfd414ca2258a1259da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a6f539397fbedd30239a94eb66f22344b245cdb5cfc6fdfd414ca2258a1259da->leave($__internal_a6f539397fbedd30239a94eb66f22344b245cdb5cfc6fdfd414ca2258a1259da_prof);

        
        $__internal_46c534be1841a8f2d415d4cb6a39119344afe416689aed5c99b61e351357417e->leave($__internal_46c534be1841a8f2d415d4cb6a39119344afe416689aed5c99b61e351357417e_prof);

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
