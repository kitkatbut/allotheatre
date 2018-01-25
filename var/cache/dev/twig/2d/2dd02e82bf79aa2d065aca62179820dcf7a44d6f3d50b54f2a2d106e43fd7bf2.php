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
        $__internal_40dbd8acdea9b6e803e2144ce52752fc0df57da89ec94e0b2a72548aa76ec199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dbd8acdea9b6e803e2144ce52752fc0df57da89ec94e0b2a72548aa76ec199->enter($__internal_40dbd8acdea9b6e803e2144ce52752fc0df57da89ec94e0b2a72548aa76ec199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_29715b8ba7f388150e52fd368d12c7c46a9d6232f6ba2f24f2e22ee50297c210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29715b8ba7f388150e52fd368d12c7c46a9d6232f6ba2f24f2e22ee50297c210->enter($__internal_29715b8ba7f388150e52fd368d12c7c46a9d6232f6ba2f24f2e22ee50297c210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40dbd8acdea9b6e803e2144ce52752fc0df57da89ec94e0b2a72548aa76ec199->leave($__internal_40dbd8acdea9b6e803e2144ce52752fc0df57da89ec94e0b2a72548aa76ec199_prof);

        
        $__internal_29715b8ba7f388150e52fd368d12c7c46a9d6232f6ba2f24f2e22ee50297c210->leave($__internal_29715b8ba7f388150e52fd368d12c7c46a9d6232f6ba2f24f2e22ee50297c210_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95ac1dd13d92cd91e307542aef742d3bebeb362d09e0ae39479c2c1cb99aaeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ac1dd13d92cd91e307542aef742d3bebeb362d09e0ae39479c2c1cb99aaeb1->enter($__internal_95ac1dd13d92cd91e307542aef742d3bebeb362d09e0ae39479c2c1cb99aaeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7bc8bf8a1d95a5974b59826b6ec30e5222bda01347521993492c5c5180daa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bc8bf8a1d95a5974b59826b6ec30e5222bda01347521993492c5c5180daa59->enter($__internal_a7bc8bf8a1d95a5974b59826b6ec30e5222bda01347521993492c5c5180daa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7bc8bf8a1d95a5974b59826b6ec30e5222bda01347521993492c5c5180daa59->leave($__internal_a7bc8bf8a1d95a5974b59826b6ec30e5222bda01347521993492c5c5180daa59_prof);

        
        $__internal_95ac1dd13d92cd91e307542aef742d3bebeb362d09e0ae39479c2c1cb99aaeb1->leave($__internal_95ac1dd13d92cd91e307542aef742d3bebeb362d09e0ae39479c2c1cb99aaeb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4de495547fec14024b8afa6c33f135a4bef5a533bd7466aa0cc9d488b364903f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de495547fec14024b8afa6c33f135a4bef5a533bd7466aa0cc9d488b364903f->enter($__internal_4de495547fec14024b8afa6c33f135a4bef5a533bd7466aa0cc9d488b364903f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fb5bc162e039c28d07f22a4bf146e0e9e8ca70e4e778c67a9652672926da89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb5bc162e039c28d07f22a4bf146e0e9e8ca70e4e778c67a9652672926da89e->enter($__internal_8fb5bc162e039c28d07f22a4bf146e0e9e8ca70e4e778c67a9652672926da89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fb5bc162e039c28d07f22a4bf146e0e9e8ca70e4e778c67a9652672926da89e->leave($__internal_8fb5bc162e039c28d07f22a4bf146e0e9e8ca70e4e778c67a9652672926da89e_prof);

        
        $__internal_4de495547fec14024b8afa6c33f135a4bef5a533bd7466aa0cc9d488b364903f->leave($__internal_4de495547fec14024b8afa6c33f135a4bef5a533bd7466aa0cc9d488b364903f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93c7ef6d84b7f7f9849c26aa0340ab3bbfba78c8f4fc0ecb7514853abb570bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c7ef6d84b7f7f9849c26aa0340ab3bbfba78c8f4fc0ecb7514853abb570bfa->enter($__internal_93c7ef6d84b7f7f9849c26aa0340ab3bbfba78c8f4fc0ecb7514853abb570bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df3b929b13485f3c2f88d2e7a14c5decaf1401c6947374ad00ab90b45acb2e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3b929b13485f3c2f88d2e7a14c5decaf1401c6947374ad00ab90b45acb2e87->enter($__internal_df3b929b13485f3c2f88d2e7a14c5decaf1401c6947374ad00ab90b45acb2e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_df3b929b13485f3c2f88d2e7a14c5decaf1401c6947374ad00ab90b45acb2e87->leave($__internal_df3b929b13485f3c2f88d2e7a14c5decaf1401c6947374ad00ab90b45acb2e87_prof);

        
        $__internal_93c7ef6d84b7f7f9849c26aa0340ab3bbfba78c8f4fc0ecb7514853abb570bfa->leave($__internal_93c7ef6d84b7f7f9849c26aa0340ab3bbfba78c8f4fc0ecb7514853abb570bfa_prof);

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
