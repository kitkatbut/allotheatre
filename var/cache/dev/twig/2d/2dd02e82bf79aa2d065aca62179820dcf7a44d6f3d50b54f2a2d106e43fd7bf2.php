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
        $__internal_15a9490f04308684b75bd4168215e699aebf4be9362dd5ab567e98e946ca67b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a9490f04308684b75bd4168215e699aebf4be9362dd5ab567e98e946ca67b3->enter($__internal_15a9490f04308684b75bd4168215e699aebf4be9362dd5ab567e98e946ca67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2ad5794e97e1061dc868d4b49e9f247752aa78f991fd6c5cd1dbbd136d21f7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad5794e97e1061dc868d4b49e9f247752aa78f991fd6c5cd1dbbd136d21f7f0->enter($__internal_2ad5794e97e1061dc868d4b49e9f247752aa78f991fd6c5cd1dbbd136d21f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a9490f04308684b75bd4168215e699aebf4be9362dd5ab567e98e946ca67b3->leave($__internal_15a9490f04308684b75bd4168215e699aebf4be9362dd5ab567e98e946ca67b3_prof);

        
        $__internal_2ad5794e97e1061dc868d4b49e9f247752aa78f991fd6c5cd1dbbd136d21f7f0->leave($__internal_2ad5794e97e1061dc868d4b49e9f247752aa78f991fd6c5cd1dbbd136d21f7f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afa73763aab7ff2d62b7955bb231e860488f63376dda560977cfa0cb228b0d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa73763aab7ff2d62b7955bb231e860488f63376dda560977cfa0cb228b0d45->enter($__internal_afa73763aab7ff2d62b7955bb231e860488f63376dda560977cfa0cb228b0d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd94fc7c96359c4c52a095f740933c8282a9951d3c04a5e46dd6ab126dfd741e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd94fc7c96359c4c52a095f740933c8282a9951d3c04a5e46dd6ab126dfd741e->enter($__internal_fd94fc7c96359c4c52a095f740933c8282a9951d3c04a5e46dd6ab126dfd741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd94fc7c96359c4c52a095f740933c8282a9951d3c04a5e46dd6ab126dfd741e->leave($__internal_fd94fc7c96359c4c52a095f740933c8282a9951d3c04a5e46dd6ab126dfd741e_prof);

        
        $__internal_afa73763aab7ff2d62b7955bb231e860488f63376dda560977cfa0cb228b0d45->leave($__internal_afa73763aab7ff2d62b7955bb231e860488f63376dda560977cfa0cb228b0d45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caac24e8d40d49c9b916ed61349be18ef4a25a50ffc203b539df080669286f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caac24e8d40d49c9b916ed61349be18ef4a25a50ffc203b539df080669286f60->enter($__internal_caac24e8d40d49c9b916ed61349be18ef4a25a50ffc203b539df080669286f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe2d40e61a94a90270c5f2e8319daa793ac83b7e6b272b0f7c1b5ee8c7c9743d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2d40e61a94a90270c5f2e8319daa793ac83b7e6b272b0f7c1b5ee8c7c9743d->enter($__internal_fe2d40e61a94a90270c5f2e8319daa793ac83b7e6b272b0f7c1b5ee8c7c9743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe2d40e61a94a90270c5f2e8319daa793ac83b7e6b272b0f7c1b5ee8c7c9743d->leave($__internal_fe2d40e61a94a90270c5f2e8319daa793ac83b7e6b272b0f7c1b5ee8c7c9743d_prof);

        
        $__internal_caac24e8d40d49c9b916ed61349be18ef4a25a50ffc203b539df080669286f60->leave($__internal_caac24e8d40d49c9b916ed61349be18ef4a25a50ffc203b539df080669286f60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79289419cfc289e548fcc6a18ed37fa67210cb18e057be5827b842d851957905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79289419cfc289e548fcc6a18ed37fa67210cb18e057be5827b842d851957905->enter($__internal_79289419cfc289e548fcc6a18ed37fa67210cb18e057be5827b842d851957905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54b3265ed8b465dd6c799695510f0f07ceaf1b69b160dd96ac7c35b1d6d7211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b3265ed8b465dd6c799695510f0f07ceaf1b69b160dd96ac7c35b1d6d7211f->enter($__internal_54b3265ed8b465dd6c799695510f0f07ceaf1b69b160dd96ac7c35b1d6d7211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_54b3265ed8b465dd6c799695510f0f07ceaf1b69b160dd96ac7c35b1d6d7211f->leave($__internal_54b3265ed8b465dd6c799695510f0f07ceaf1b69b160dd96ac7c35b1d6d7211f_prof);

        
        $__internal_79289419cfc289e548fcc6a18ed37fa67210cb18e057be5827b842d851957905->leave($__internal_79289419cfc289e548fcc6a18ed37fa67210cb18e057be5827b842d851957905_prof);

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
