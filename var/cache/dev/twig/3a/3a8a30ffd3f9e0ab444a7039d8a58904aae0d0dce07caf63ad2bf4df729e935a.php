<?php

/* security/register.html.twig */
class __TwigTemplate_7b4b1de6d229b84e60f61c86d65ce398132587a9b61ee3aa66f17105098f06b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e3801040e7e96cd1bc5a9ec03b87b2876c28f6d8c02db28cfa4ab552b2f6027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3801040e7e96cd1bc5a9ec03b87b2876c28f6d8c02db28cfa4ab552b2f6027->enter($__internal_8e3801040e7e96cd1bc5a9ec03b87b2876c28f6d8c02db28cfa4ab552b2f6027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_d6c48c7f04347da50e67b3cea06d080f163e846be2ceade8b3d3014d4399afc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c48c7f04347da50e67b3cea06d080f163e846be2ceade8b3d3014d4399afc5->enter($__internal_d6c48c7f04347da50e67b3cea06d080f163e846be2ceade8b3d3014d4399afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3801040e7e96cd1bc5a9ec03b87b2876c28f6d8c02db28cfa4ab552b2f6027->leave($__internal_8e3801040e7e96cd1bc5a9ec03b87b2876c28f6d8c02db28cfa4ab552b2f6027_prof);

        
        $__internal_d6c48c7f04347da50e67b3cea06d080f163e846be2ceade8b3d3014d4399afc5->leave($__internal_d6c48c7f04347da50e67b3cea06d080f163e846be2ceade8b3d3014d4399afc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_071aaeb025f29ac9562ed039002120d28cbd572974e2af0563fadaaed6971c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071aaeb025f29ac9562ed039002120d28cbd572974e2af0563fadaaed6971c0f->enter($__internal_071aaeb025f29ac9562ed039002120d28cbd572974e2af0563fadaaed6971c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_767bc63cd5d436850125e82345d63a58638e4f940c13631c662b853d2cba217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767bc63cd5d436850125e82345d63a58638e4f940c13631c662b853d2cba217a->enter($__internal_767bc63cd5d436850125e82345d63a58638e4f940c13631c662b853d2cba217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">S'inscrire</button>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "



";
        
        $__internal_767bc63cd5d436850125e82345d63a58638e4f940c13631c662b853d2cba217a->leave($__internal_767bc63cd5d436850125e82345d63a58638e4f940c13631c662b853d2cba217a_prof);

        
        $__internal_071aaeb025f29ac9562ed039002120d28cbd572974e2af0563fadaaed6971c0f->leave($__internal_071aaeb025f29ac9562ed039002120d28cbd572974e2af0563fadaaed6971c0f_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.password.first) }}
    {{ form_row(form.password.second) }}

    <button type=\"submit\">S'inscrire</button>
{{ form_end(form) }}



{% endblock %}

", "security/register.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/security/register.html.twig");
    }
}
