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
        $__internal_e4fe859b58d4dfcf0c6df25875360375a633d9e87812e1ea887a8d480cdd2943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe859b58d4dfcf0c6df25875360375a633d9e87812e1ea887a8d480cdd2943->enter($__internal_e4fe859b58d4dfcf0c6df25875360375a633d9e87812e1ea887a8d480cdd2943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea404e73f59ff76fc086115b7ad2a51ceada0a38c9ba4ee1cb6cbf28032bdd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea404e73f59ff76fc086115b7ad2a51ceada0a38c9ba4ee1cb6cbf28032bdd67->enter($__internal_ea404e73f59ff76fc086115b7ad2a51ceada0a38c9ba4ee1cb6cbf28032bdd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fe859b58d4dfcf0c6df25875360375a633d9e87812e1ea887a8d480cdd2943->leave($__internal_e4fe859b58d4dfcf0c6df25875360375a633d9e87812e1ea887a8d480cdd2943_prof);

        
        $__internal_ea404e73f59ff76fc086115b7ad2a51ceada0a38c9ba4ee1cb6cbf28032bdd67->leave($__internal_ea404e73f59ff76fc086115b7ad2a51ceada0a38c9ba4ee1cb6cbf28032bdd67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86f1023bc4ea9a5e0ea8ebaeee2987d7e67172496af5f6bfdad2a1de4c85c9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f1023bc4ea9a5e0ea8ebaeee2987d7e67172496af5f6bfdad2a1de4c85c9ce->enter($__internal_86f1023bc4ea9a5e0ea8ebaeee2987d7e67172496af5f6bfdad2a1de4c85c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_279e11ca43829a8eced6e435c7c82ebb413086e7025ea4cd4b711447c0c93d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279e11ca43829a8eced6e435c7c82ebb413086e7025ea4cd4b711447c0c93d1e->enter($__internal_279e11ca43829a8eced6e435c7c82ebb413086e7025ea4cd4b711447c0c93d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_279e11ca43829a8eced6e435c7c82ebb413086e7025ea4cd4b711447c0c93d1e->leave($__internal_279e11ca43829a8eced6e435c7c82ebb413086e7025ea4cd4b711447c0c93d1e_prof);

        
        $__internal_86f1023bc4ea9a5e0ea8ebaeee2987d7e67172496af5f6bfdad2a1de4c85c9ce->leave($__internal_86f1023bc4ea9a5e0ea8ebaeee2987d7e67172496af5f6bfdad2a1de4c85c9ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ddd98ed08f1367a5a611166a5932fc7b578a5e43e47277670be72c225017feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddd98ed08f1367a5a611166a5932fc7b578a5e43e47277670be72c225017feb->enter($__internal_5ddd98ed08f1367a5a611166a5932fc7b578a5e43e47277670be72c225017feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5fa8283fa36f4137daed656c4f17def05776954d332c28214aaeb55ddcf8112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa8283fa36f4137daed656c4f17def05776954d332c28214aaeb55ddcf8112e->enter($__internal_5fa8283fa36f4137daed656c4f17def05776954d332c28214aaeb55ddcf8112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5fa8283fa36f4137daed656c4f17def05776954d332c28214aaeb55ddcf8112e->leave($__internal_5fa8283fa36f4137daed656c4f17def05776954d332c28214aaeb55ddcf8112e_prof);

        
        $__internal_5ddd98ed08f1367a5a611166a5932fc7b578a5e43e47277670be72c225017feb->leave($__internal_5ddd98ed08f1367a5a611166a5932fc7b578a5e43e47277670be72c225017feb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b748414126bc6f01c6de759384ed5358a0019646d58d4497cd04a306010252f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b748414126bc6f01c6de759384ed5358a0019646d58d4497cd04a306010252f->enter($__internal_7b748414126bc6f01c6de759384ed5358a0019646d58d4497cd04a306010252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e752885df7724a6984db2424f476deb43db9cceaacbefed08b5e643e6e76a0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e752885df7724a6984db2424f476deb43db9cceaacbefed08b5e643e6e76a0a9->enter($__internal_e752885df7724a6984db2424f476deb43db9cceaacbefed08b5e643e6e76a0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e752885df7724a6984db2424f476deb43db9cceaacbefed08b5e643e6e76a0a9->leave($__internal_e752885df7724a6984db2424f476deb43db9cceaacbefed08b5e643e6e76a0a9_prof);

        
        $__internal_7b748414126bc6f01c6de759384ed5358a0019646d58d4497cd04a306010252f->leave($__internal_7b748414126bc6f01c6de759384ed5358a0019646d58d4497cd04a306010252f_prof);

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
