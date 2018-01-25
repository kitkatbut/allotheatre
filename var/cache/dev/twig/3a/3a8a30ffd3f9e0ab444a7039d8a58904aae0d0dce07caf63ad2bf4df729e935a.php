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
        $__internal_820614612b96a8576dba2044165313f2b0e86474e1a33853a2f32bbd244a913a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820614612b96a8576dba2044165313f2b0e86474e1a33853a2f32bbd244a913a->enter($__internal_820614612b96a8576dba2044165313f2b0e86474e1a33853a2f32bbd244a913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_adeb3644ce4475620be970d43c0fd29b99b67fbf89dc148abb08e02c1ee964f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeb3644ce4475620be970d43c0fd29b99b67fbf89dc148abb08e02c1ee964f7->enter($__internal_adeb3644ce4475620be970d43c0fd29b99b67fbf89dc148abb08e02c1ee964f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_820614612b96a8576dba2044165313f2b0e86474e1a33853a2f32bbd244a913a->leave($__internal_820614612b96a8576dba2044165313f2b0e86474e1a33853a2f32bbd244a913a_prof);

        
        $__internal_adeb3644ce4475620be970d43c0fd29b99b67fbf89dc148abb08e02c1ee964f7->leave($__internal_adeb3644ce4475620be970d43c0fd29b99b67fbf89dc148abb08e02c1ee964f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50af9799712368ccd9797abd9c02327de05c24c1ed978fea44936c231039b8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50af9799712368ccd9797abd9c02327de05c24c1ed978fea44936c231039b8e9->enter($__internal_50af9799712368ccd9797abd9c02327de05c24c1ed978fea44936c231039b8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b4d41848c77b6dcae475a894ebf17960e5fe0178ebda5db8d7dc7c09db1d466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4d41848c77b6dcae475a894ebf17960e5fe0178ebda5db8d7dc7c09db1d466->enter($__internal_4b4d41848c77b6dcae475a894ebf17960e5fe0178ebda5db8d7dc7c09db1d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b4d41848c77b6dcae475a894ebf17960e5fe0178ebda5db8d7dc7c09db1d466->leave($__internal_4b4d41848c77b6dcae475a894ebf17960e5fe0178ebda5db8d7dc7c09db1d466_prof);

        
        $__internal_50af9799712368ccd9797abd9c02327de05c24c1ed978fea44936c231039b8e9->leave($__internal_50af9799712368ccd9797abd9c02327de05c24c1ed978fea44936c231039b8e9_prof);

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


{% endblock %}", "security/register.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/security/register.html.twig");
    }
}
