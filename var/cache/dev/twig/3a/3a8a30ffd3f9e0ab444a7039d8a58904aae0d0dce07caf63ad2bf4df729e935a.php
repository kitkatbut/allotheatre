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
        $__internal_dd027c816a16066cff92155461fad25e4c95c456bf762f38b0400dec1b7ef817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd027c816a16066cff92155461fad25e4c95c456bf762f38b0400dec1b7ef817->enter($__internal_dd027c816a16066cff92155461fad25e4c95c456bf762f38b0400dec1b7ef817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_ee150196ccf1d550b0151763aa7be48790286533d1ce4aa8fd21ee297ac27d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee150196ccf1d550b0151763aa7be48790286533d1ce4aa8fd21ee297ac27d46->enter($__internal_ee150196ccf1d550b0151763aa7be48790286533d1ce4aa8fd21ee297ac27d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd027c816a16066cff92155461fad25e4c95c456bf762f38b0400dec1b7ef817->leave($__internal_dd027c816a16066cff92155461fad25e4c95c456bf762f38b0400dec1b7ef817_prof);

        
        $__internal_ee150196ccf1d550b0151763aa7be48790286533d1ce4aa8fd21ee297ac27d46->leave($__internal_ee150196ccf1d550b0151763aa7be48790286533d1ce4aa8fd21ee297ac27d46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a10e4b63c928522f64cada013c948a5c858293ed19aac1f6e0b837908457ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a10e4b63c928522f64cada013c948a5c858293ed19aac1f6e0b837908457ea0->enter($__internal_4a10e4b63c928522f64cada013c948a5c858293ed19aac1f6e0b837908457ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0dadacabe230117b98376f90f6d360aa79f8d8b785a22c2f7d82307dc6f9440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dadacabe230117b98376f90f6d360aa79f8d8b785a22c2f7d82307dc6f9440->enter($__internal_a0dadacabe230117b98376f90f6d360aa79f8d8b785a22c2f7d82307dc6f9440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0dadacabe230117b98376f90f6d360aa79f8d8b785a22c2f7d82307dc6f9440->leave($__internal_a0dadacabe230117b98376f90f6d360aa79f8d8b785a22c2f7d82307dc6f9440_prof);

        
        $__internal_4a10e4b63c928522f64cada013c948a5c858293ed19aac1f6e0b837908457ea0->leave($__internal_4a10e4b63c928522f64cada013c948a5c858293ed19aac1f6e0b837908457ea0_prof);

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
