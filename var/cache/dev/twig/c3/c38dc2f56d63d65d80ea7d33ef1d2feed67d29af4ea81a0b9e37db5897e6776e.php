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
        $__internal_027290b06c2ebfb8649390bd52fa52d5c7d23f8b4a8acc8ed6af6d1f5933a4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027290b06c2ebfb8649390bd52fa52d5c7d23f8b4a8acc8ed6af6d1f5933a4c0->enter($__internal_027290b06c2ebfb8649390bd52fa52d5c7d23f8b4a8acc8ed6af6d1f5933a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d5a3f518485d556cee37a7a26f2318e2265723cd37f4504ceda36350e2f1897b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a3f518485d556cee37a7a26f2318e2265723cd37f4504ceda36350e2f1897b->enter($__internal_d5a3f518485d556cee37a7a26f2318e2265723cd37f4504ceda36350e2f1897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027290b06c2ebfb8649390bd52fa52d5c7d23f8b4a8acc8ed6af6d1f5933a4c0->leave($__internal_027290b06c2ebfb8649390bd52fa52d5c7d23f8b4a8acc8ed6af6d1f5933a4c0_prof);

        
        $__internal_d5a3f518485d556cee37a7a26f2318e2265723cd37f4504ceda36350e2f1897b->leave($__internal_d5a3f518485d556cee37a7a26f2318e2265723cd37f4504ceda36350e2f1897b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35511c4096b9c5627271e72d26f0bd41a13c3b0a2b039aeefec6b6fb2172f936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35511c4096b9c5627271e72d26f0bd41a13c3b0a2b039aeefec6b6fb2172f936->enter($__internal_35511c4096b9c5627271e72d26f0bd41a13c3b0a2b039aeefec6b6fb2172f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e78b60fd2d5a8aa53f1a3c0701a5c4d8473a3e40297491cd28503ae14f3b293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e78b60fd2d5a8aa53f1a3c0701a5c4d8473a3e40297491cd28503ae14f3b293->enter($__internal_4e78b60fd2d5a8aa53f1a3c0701a5c4d8473a3e40297491cd28503ae14f3b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e78b60fd2d5a8aa53f1a3c0701a5c4d8473a3e40297491cd28503ae14f3b293->leave($__internal_4e78b60fd2d5a8aa53f1a3c0701a5c4d8473a3e40297491cd28503ae14f3b293_prof);

        
        $__internal_35511c4096b9c5627271e72d26f0bd41a13c3b0a2b039aeefec6b6fb2172f936->leave($__internal_35511c4096b9c5627271e72d26f0bd41a13c3b0a2b039aeefec6b6fb2172f936_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f55a6680e240915e99cad3b28c65c846c56c4ba9d583ea78be8d12441409c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f55a6680e240915e99cad3b28c65c846c56c4ba9d583ea78be8d12441409c19->enter($__internal_2f55a6680e240915e99cad3b28c65c846c56c4ba9d583ea78be8d12441409c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b385b07fcfa7e93b62452564768f866cd83f00cfecc3a300fe5999014e5d9755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b385b07fcfa7e93b62452564768f866cd83f00cfecc3a300fe5999014e5d9755->enter($__internal_b385b07fcfa7e93b62452564768f866cd83f00cfecc3a300fe5999014e5d9755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b385b07fcfa7e93b62452564768f866cd83f00cfecc3a300fe5999014e5d9755->leave($__internal_b385b07fcfa7e93b62452564768f866cd83f00cfecc3a300fe5999014e5d9755_prof);

        
        $__internal_2f55a6680e240915e99cad3b28c65c846c56c4ba9d583ea78be8d12441409c19->leave($__internal_2f55a6680e240915e99cad3b28c65c846c56c4ba9d583ea78be8d12441409c19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a22fecd616afcf1d526c57c9b333b75d963c9b2daa68644c5355ee24891db1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22fecd616afcf1d526c57c9b333b75d963c9b2daa68644c5355ee24891db1de->enter($__internal_a22fecd616afcf1d526c57c9b333b75d963c9b2daa68644c5355ee24891db1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cf864683c0bbf5d97f7774576f53fe527580c8088f9300fd086707778622cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf864683c0bbf5d97f7774576f53fe527580c8088f9300fd086707778622cb3->enter($__internal_2cf864683c0bbf5d97f7774576f53fe527580c8088f9300fd086707778622cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2cf864683c0bbf5d97f7774576f53fe527580c8088f9300fd086707778622cb3->leave($__internal_2cf864683c0bbf5d97f7774576f53fe527580c8088f9300fd086707778622cb3_prof);

        
        $__internal_a22fecd616afcf1d526c57c9b333b75d963c9b2daa68644c5355ee24891db1de->leave($__internal_a22fecd616afcf1d526c57c9b333b75d963c9b2daa68644c5355ee24891db1de_prof);

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
