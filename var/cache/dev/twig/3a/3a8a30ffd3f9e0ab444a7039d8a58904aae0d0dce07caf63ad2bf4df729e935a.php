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
        $__internal_5df412c6029d42bb836eac631990d174d86efd53b0865e44486d34c35671f023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df412c6029d42bb836eac631990d174d86efd53b0865e44486d34c35671f023->enter($__internal_5df412c6029d42bb836eac631990d174d86efd53b0865e44486d34c35671f023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_11353f4f79f7e5e7ee93b81cee6767927d01510618a065ed4a62dd3c2750d32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11353f4f79f7e5e7ee93b81cee6767927d01510618a065ed4a62dd3c2750d32b->enter($__internal_11353f4f79f7e5e7ee93b81cee6767927d01510618a065ed4a62dd3c2750d32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df412c6029d42bb836eac631990d174d86efd53b0865e44486d34c35671f023->leave($__internal_5df412c6029d42bb836eac631990d174d86efd53b0865e44486d34c35671f023_prof);

        
        $__internal_11353f4f79f7e5e7ee93b81cee6767927d01510618a065ed4a62dd3c2750d32b->leave($__internal_11353f4f79f7e5e7ee93b81cee6767927d01510618a065ed4a62dd3c2750d32b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ba06fcf0399eb4ba4d068aeed3645977a97c0214048688f1e9fac885a908fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba06fcf0399eb4ba4d068aeed3645977a97c0214048688f1e9fac885a908fac->enter($__internal_5ba06fcf0399eb4ba4d068aeed3645977a97c0214048688f1e9fac885a908fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_122e035201e6d8713b0078ba669b9c4bbdb8df57b45962bfc83eb29b09758b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122e035201e6d8713b0078ba669b9c4bbdb8df57b45962bfc83eb29b09758b3d->enter($__internal_122e035201e6d8713b0078ba669b9c4bbdb8df57b45962bfc83eb29b09758b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_122e035201e6d8713b0078ba669b9c4bbdb8df57b45962bfc83eb29b09758b3d->leave($__internal_122e035201e6d8713b0078ba669b9c4bbdb8df57b45962bfc83eb29b09758b3d_prof);

        
        $__internal_5ba06fcf0399eb4ba4d068aeed3645977a97c0214048688f1e9fac885a908fac->leave($__internal_5ba06fcf0399eb4ba4d068aeed3645977a97c0214048688f1e9fac885a908fac_prof);

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
