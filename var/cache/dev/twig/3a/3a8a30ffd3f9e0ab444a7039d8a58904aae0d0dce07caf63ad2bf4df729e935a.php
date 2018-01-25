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
        $__internal_ed546e8f128de0686b6bfe8e0975797d5d1db9d360381fdfa50a51be9b98bee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed546e8f128de0686b6bfe8e0975797d5d1db9d360381fdfa50a51be9b98bee7->enter($__internal_ed546e8f128de0686b6bfe8e0975797d5d1db9d360381fdfa50a51be9b98bee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_3aa21eb92da608c72b8a09a043113d765b7b167a88d90d9494f94ccbe732cfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa21eb92da608c72b8a09a043113d765b7b167a88d90d9494f94ccbe732cfeb->enter($__internal_3aa21eb92da608c72b8a09a043113d765b7b167a88d90d9494f94ccbe732cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed546e8f128de0686b6bfe8e0975797d5d1db9d360381fdfa50a51be9b98bee7->leave($__internal_ed546e8f128de0686b6bfe8e0975797d5d1db9d360381fdfa50a51be9b98bee7_prof);

        
        $__internal_3aa21eb92da608c72b8a09a043113d765b7b167a88d90d9494f94ccbe732cfeb->leave($__internal_3aa21eb92da608c72b8a09a043113d765b7b167a88d90d9494f94ccbe732cfeb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f5bbe66a851dfb1a9ff4176ae479dc40828f01922e657e63f963c7e17247f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f5bbe66a851dfb1a9ff4176ae479dc40828f01922e657e63f963c7e17247f8->enter($__internal_a0f5bbe66a851dfb1a9ff4176ae479dc40828f01922e657e63f963c7e17247f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c87e333136f59c36d0ca7dccc9e271d868aac6f897e43692268b20578f913efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87e333136f59c36d0ca7dccc9e271d868aac6f897e43692268b20578f913efc->enter($__internal_c87e333136f59c36d0ca7dccc9e271d868aac6f897e43692268b20578f913efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "save", array()), 'row');
        echo "

    
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "



";
        
        $__internal_c87e333136f59c36d0ca7dccc9e271d868aac6f897e43692268b20578f913efc->leave($__internal_c87e333136f59c36d0ca7dccc9e271d868aac6f897e43692268b20578f913efc_prof);

        
        $__internal_a0f5bbe66a851dfb1a9ff4176ae479dc40828f01922e657e63f963c7e17247f8->leave($__internal_a0f5bbe66a851dfb1a9ff4176ae479dc40828f01922e657e63f963c7e17247f8_prof);

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
        return array (  78 => 13,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ form_row(form.save) }}

    
{{ form_end(form) }}



{% endblock %}

", "security/register.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/security/register.html.twig");
    }
}
