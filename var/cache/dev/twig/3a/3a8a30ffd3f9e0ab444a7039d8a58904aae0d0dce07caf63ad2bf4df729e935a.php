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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c5d229d47593f003d920883d01f3f6ad6e723b30d99b37bc573150b900976d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5d229d47593f003d920883d01f3f6ad6e723b30d99b37bc573150b900976d5->enter($__internal_6c5d229d47593f003d920883d01f3f6ad6e723b30d99b37bc573150b900976d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_0d6d3591ed4d30b112e35c9385989b1e8ed210c32b59ee1e506892ba9af497ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6d3591ed4d30b112e35c9385989b1e8ed210c32b59ee1e506892ba9af497ca->enter($__internal_0d6d3591ed4d30b112e35c9385989b1e8ed210c32b59ee1e506892ba9af497ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5d229d47593f003d920883d01f3f6ad6e723b30d99b37bc573150b900976d5->leave($__internal_6c5d229d47593f003d920883d01f3f6ad6e723b30d99b37bc573150b900976d5_prof);

        
        $__internal_0d6d3591ed4d30b112e35c9385989b1e8ed210c32b59ee1e506892ba9af497ca->leave($__internal_0d6d3591ed4d30b112e35c9385989b1e8ed210c32b59ee1e506892ba9af497ca_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f46cdcb73397f76093a7cf8c88202cbd1c54e877e97744d0a12873e75417e40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46cdcb73397f76093a7cf8c88202cbd1c54e877e97744d0a12873e75417e40f->enter($__internal_f46cdcb73397f76093a7cf8c88202cbd1c54e877e97744d0a12873e75417e40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b6ab857c5103b9041c576f73a520b7662e1454b8146c7befa0344c52dfad8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6ab857c5103b9041c576f73a520b7662e1454b8146c7befa0344c52dfad8d6->enter($__internal_3b6ab857c5103b9041c576f73a520b7662e1454b8146c7befa0344c52dfad8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3b6ab857c5103b9041c576f73a520b7662e1454b8146c7befa0344c52dfad8d6->leave($__internal_3b6ab857c5103b9041c576f73a520b7662e1454b8146c7befa0344c52dfad8d6_prof);

        
        $__internal_f46cdcb73397f76093a7cf8c88202cbd1c54e877e97744d0a12873e75417e40f->leave($__internal_f46cdcb73397f76093a7cf8c88202cbd1c54e877e97744d0a12873e75417e40f_prof);

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

{% block content %}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.password.first) }}
    {{ form_row(form.password.second) }}

    <button type=\"submit\">S'inscrire</button>
{{ form_end(form) }}


{% endblock %}", "security/register.html.twig", "/Applications/MAMP/htdocs/Allotheatre/templates/security/register.html.twig");
    }
}
