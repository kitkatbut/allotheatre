<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a0247dec4b42e277b54b1e85c86f53751432c864d6926126790d4959c436f1 extends Twig_Template
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
        $__internal_977995c36e7c25c1efa79e1aea4eb779f2f81c268a48855ec4556f968f6de3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977995c36e7c25c1efa79e1aea4eb779f2f81c268a48855ec4556f968f6de3ea->enter($__internal_977995c36e7c25c1efa79e1aea4eb779f2f81c268a48855ec4556f968f6de3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f12ff53470cd1757f0b626aef5d7d2320c90bbbab75d8e853ae288aee79a44fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12ff53470cd1757f0b626aef5d7d2320c90bbbab75d8e853ae288aee79a44fd->enter($__internal_f12ff53470cd1757f0b626aef5d7d2320c90bbbab75d8e853ae288aee79a44fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977995c36e7c25c1efa79e1aea4eb779f2f81c268a48855ec4556f968f6de3ea->leave($__internal_977995c36e7c25c1efa79e1aea4eb779f2f81c268a48855ec4556f968f6de3ea_prof);

        
        $__internal_f12ff53470cd1757f0b626aef5d7d2320c90bbbab75d8e853ae288aee79a44fd->leave($__internal_f12ff53470cd1757f0b626aef5d7d2320c90bbbab75d8e853ae288aee79a44fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6a8f36a513c2b3a1e2f0efac1e487234a9137367676b11d1ee66ac793a8cc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a8f36a513c2b3a1e2f0efac1e487234a9137367676b11d1ee66ac793a8cc92->enter($__internal_e6a8f36a513c2b3a1e2f0efac1e487234a9137367676b11d1ee66ac793a8cc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b765fb4950c2b72fb4a63a6e51bbe137fecb6c17649c64fb459ec20c31811fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b765fb4950c2b72fb4a63a6e51bbe137fecb6c17649c64fb459ec20c31811fd8->enter($__internal_b765fb4950c2b72fb4a63a6e51bbe137fecb6c17649c64fb459ec20c31811fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b765fb4950c2b72fb4a63a6e51bbe137fecb6c17649c64fb459ec20c31811fd8->leave($__internal_b765fb4950c2b72fb4a63a6e51bbe137fecb6c17649c64fb459ec20c31811fd8_prof);

        
        $__internal_e6a8f36a513c2b3a1e2f0efac1e487234a9137367676b11d1ee66ac793a8cc92->leave($__internal_e6a8f36a513c2b3a1e2f0efac1e487234a9137367676b11d1ee66ac793a8cc92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c6ede0f606628a591209500882502aef7db9f35efe07bddaf8b4482809a835c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6ede0f606628a591209500882502aef7db9f35efe07bddaf8b4482809a835c->enter($__internal_3c6ede0f606628a591209500882502aef7db9f35efe07bddaf8b4482809a835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fefb7b770870896cadda9cd4bd4912e43bc16a59d4619139171b3e9089ac264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fefb7b770870896cadda9cd4bd4912e43bc16a59d4619139171b3e9089ac264->enter($__internal_8fefb7b770870896cadda9cd4bd4912e43bc16a59d4619139171b3e9089ac264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fefb7b770870896cadda9cd4bd4912e43bc16a59d4619139171b3e9089ac264->leave($__internal_8fefb7b770870896cadda9cd4bd4912e43bc16a59d4619139171b3e9089ac264_prof);

        
        $__internal_3c6ede0f606628a591209500882502aef7db9f35efe07bddaf8b4482809a835c->leave($__internal_3c6ede0f606628a591209500882502aef7db9f35efe07bddaf8b4482809a835c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_533c083a72cfdccf351930f60926f9e551890544b142cbc8d0f18f1bd21c78e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533c083a72cfdccf351930f60926f9e551890544b142cbc8d0f18f1bd21c78e5->enter($__internal_533c083a72cfdccf351930f60926f9e551890544b142cbc8d0f18f1bd21c78e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb4930eaa932686b88ca8fa8a78561f0121d9dcb586809354d6e090bd4c89320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4930eaa932686b88ca8fa8a78561f0121d9dcb586809354d6e090bd4c89320->enter($__internal_bb4930eaa932686b88ca8fa8a78561f0121d9dcb586809354d6e090bd4c89320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bb4930eaa932686b88ca8fa8a78561f0121d9dcb586809354d6e090bd4c89320->leave($__internal_bb4930eaa932686b88ca8fa8a78561f0121d9dcb586809354d6e090bd4c89320_prof);

        
        $__internal_533c083a72cfdccf351930f60926f9e551890544b142cbc8d0f18f1bd21c78e5->leave($__internal_533c083a72cfdccf351930f60926f9e551890544b142cbc8d0f18f1bd21c78e5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
