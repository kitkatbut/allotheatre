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
        $__internal_c69bc9f6e734f012f60a7de2c978cbf14a100b09c0aea1481dad3760b6b3f2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69bc9f6e734f012f60a7de2c978cbf14a100b09c0aea1481dad3760b6b3f2b7->enter($__internal_c69bc9f6e734f012f60a7de2c978cbf14a100b09c0aea1481dad3760b6b3f2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_06d2072b85ad5ae3485150b453fbf58d74624a314e25eab9c3cf45fafc6b33be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d2072b85ad5ae3485150b453fbf58d74624a314e25eab9c3cf45fafc6b33be->enter($__internal_06d2072b85ad5ae3485150b453fbf58d74624a314e25eab9c3cf45fafc6b33be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69bc9f6e734f012f60a7de2c978cbf14a100b09c0aea1481dad3760b6b3f2b7->leave($__internal_c69bc9f6e734f012f60a7de2c978cbf14a100b09c0aea1481dad3760b6b3f2b7_prof);

        
        $__internal_06d2072b85ad5ae3485150b453fbf58d74624a314e25eab9c3cf45fafc6b33be->leave($__internal_06d2072b85ad5ae3485150b453fbf58d74624a314e25eab9c3cf45fafc6b33be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cac9e22828bfc8f2abd022e34c6cfb68894ce21965333810c639d7f51ba50f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac9e22828bfc8f2abd022e34c6cfb68894ce21965333810c639d7f51ba50f18->enter($__internal_cac9e22828bfc8f2abd022e34c6cfb68894ce21965333810c639d7f51ba50f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12136403b3291146fb7971b94d67bc998f4a28a1e9a49899929c591de5174d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12136403b3291146fb7971b94d67bc998f4a28a1e9a49899929c591de5174d62->enter($__internal_12136403b3291146fb7971b94d67bc998f4a28a1e9a49899929c591de5174d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12136403b3291146fb7971b94d67bc998f4a28a1e9a49899929c591de5174d62->leave($__internal_12136403b3291146fb7971b94d67bc998f4a28a1e9a49899929c591de5174d62_prof);

        
        $__internal_cac9e22828bfc8f2abd022e34c6cfb68894ce21965333810c639d7f51ba50f18->leave($__internal_cac9e22828bfc8f2abd022e34c6cfb68894ce21965333810c639d7f51ba50f18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07b7c56198fbbb872ca689e81615ba9c158a938e4481286e36e7b3d885a05c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b7c56198fbbb872ca689e81615ba9c158a938e4481286e36e7b3d885a05c7c->enter($__internal_07b7c56198fbbb872ca689e81615ba9c158a938e4481286e36e7b3d885a05c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f874f23a11a651e844002c2055a9e1a6821f67a612f72ce2b41296ad5dbe6640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f874f23a11a651e844002c2055a9e1a6821f67a612f72ce2b41296ad5dbe6640->enter($__internal_f874f23a11a651e844002c2055a9e1a6821f67a612f72ce2b41296ad5dbe6640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f874f23a11a651e844002c2055a9e1a6821f67a612f72ce2b41296ad5dbe6640->leave($__internal_f874f23a11a651e844002c2055a9e1a6821f67a612f72ce2b41296ad5dbe6640_prof);

        
        $__internal_07b7c56198fbbb872ca689e81615ba9c158a938e4481286e36e7b3d885a05c7c->leave($__internal_07b7c56198fbbb872ca689e81615ba9c158a938e4481286e36e7b3d885a05c7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e3f1c00cd2dc75f498133901297233bba01a065e978685ca0d16b23d2ecf514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3f1c00cd2dc75f498133901297233bba01a065e978685ca0d16b23d2ecf514->enter($__internal_9e3f1c00cd2dc75f498133901297233bba01a065e978685ca0d16b23d2ecf514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82eb8fbca5f101c74f02235c5c89333e15c868ef641f2f5d8cc8bffba917098c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eb8fbca5f101c74f02235c5c89333e15c868ef641f2f5d8cc8bffba917098c->enter($__internal_82eb8fbca5f101c74f02235c5c89333e15c868ef641f2f5d8cc8bffba917098c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_82eb8fbca5f101c74f02235c5c89333e15c868ef641f2f5d8cc8bffba917098c->leave($__internal_82eb8fbca5f101c74f02235c5c89333e15c868ef641f2f5d8cc8bffba917098c_prof);

        
        $__internal_9e3f1c00cd2dc75f498133901297233bba01a065e978685ca0d16b23d2ecf514->leave($__internal_9e3f1c00cd2dc75f498133901297233bba01a065e978685ca0d16b23d2ecf514_prof);

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
