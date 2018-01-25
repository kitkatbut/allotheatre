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
        $__internal_659aca27199af945465e5f3c706e1e0b6600313c054526bea7da5fb50e35885c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659aca27199af945465e5f3c706e1e0b6600313c054526bea7da5fb50e35885c->enter($__internal_659aca27199af945465e5f3c706e1e0b6600313c054526bea7da5fb50e35885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98c8d4e6801a1ad069cb7bab3f437d70efb626d3d2250c38f1c044054b08e31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c8d4e6801a1ad069cb7bab3f437d70efb626d3d2250c38f1c044054b08e31d->enter($__internal_98c8d4e6801a1ad069cb7bab3f437d70efb626d3d2250c38f1c044054b08e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659aca27199af945465e5f3c706e1e0b6600313c054526bea7da5fb50e35885c->leave($__internal_659aca27199af945465e5f3c706e1e0b6600313c054526bea7da5fb50e35885c_prof);

        
        $__internal_98c8d4e6801a1ad069cb7bab3f437d70efb626d3d2250c38f1c044054b08e31d->leave($__internal_98c8d4e6801a1ad069cb7bab3f437d70efb626d3d2250c38f1c044054b08e31d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff5985daed957e04195166a0cd71ddf77084afd57bf0e742c457d76b632d4098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5985daed957e04195166a0cd71ddf77084afd57bf0e742c457d76b632d4098->enter($__internal_ff5985daed957e04195166a0cd71ddf77084afd57bf0e742c457d76b632d4098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5c28cc7d5110e9a534a4b6349d6b04deb3c8167f29e47d169f1fe2f68c14515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c28cc7d5110e9a534a4b6349d6b04deb3c8167f29e47d169f1fe2f68c14515->enter($__internal_d5c28cc7d5110e9a534a4b6349d6b04deb3c8167f29e47d169f1fe2f68c14515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5c28cc7d5110e9a534a4b6349d6b04deb3c8167f29e47d169f1fe2f68c14515->leave($__internal_d5c28cc7d5110e9a534a4b6349d6b04deb3c8167f29e47d169f1fe2f68c14515_prof);

        
        $__internal_ff5985daed957e04195166a0cd71ddf77084afd57bf0e742c457d76b632d4098->leave($__internal_ff5985daed957e04195166a0cd71ddf77084afd57bf0e742c457d76b632d4098_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83b18935283b1e5edf5b36bea05bb9d2b38e84b263f167cccfd0e6a90780482e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b18935283b1e5edf5b36bea05bb9d2b38e84b263f167cccfd0e6a90780482e->enter($__internal_83b18935283b1e5edf5b36bea05bb9d2b38e84b263f167cccfd0e6a90780482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_155553c5f82bf97ffe74ca4b2f518724be46b292387830e206b25a2cf11c436e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155553c5f82bf97ffe74ca4b2f518724be46b292387830e206b25a2cf11c436e->enter($__internal_155553c5f82bf97ffe74ca4b2f518724be46b292387830e206b25a2cf11c436e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_155553c5f82bf97ffe74ca4b2f518724be46b292387830e206b25a2cf11c436e->leave($__internal_155553c5f82bf97ffe74ca4b2f518724be46b292387830e206b25a2cf11c436e_prof);

        
        $__internal_83b18935283b1e5edf5b36bea05bb9d2b38e84b263f167cccfd0e6a90780482e->leave($__internal_83b18935283b1e5edf5b36bea05bb9d2b38e84b263f167cccfd0e6a90780482e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43cc9cb31cbf3e9a2316b001f555b33e0c031919ad852285f829d40c33d14fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cc9cb31cbf3e9a2316b001f555b33e0c031919ad852285f829d40c33d14fdd->enter($__internal_43cc9cb31cbf3e9a2316b001f555b33e0c031919ad852285f829d40c33d14fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_053ee0b1d0c49e64bce5ce0a126a76f6b05c1d82a2dee17d86eb3f64c82c4ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053ee0b1d0c49e64bce5ce0a126a76f6b05c1d82a2dee17d86eb3f64c82c4ec6->enter($__internal_053ee0b1d0c49e64bce5ce0a126a76f6b05c1d82a2dee17d86eb3f64c82c4ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_053ee0b1d0c49e64bce5ce0a126a76f6b05c1d82a2dee17d86eb3f64c82c4ec6->leave($__internal_053ee0b1d0c49e64bce5ce0a126a76f6b05c1d82a2dee17d86eb3f64c82c4ec6_prof);

        
        $__internal_43cc9cb31cbf3e9a2316b001f555b33e0c031919ad852285f829d40c33d14fdd->leave($__internal_43cc9cb31cbf3e9a2316b001f555b33e0c031919ad852285f829d40c33d14fdd_prof);

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
