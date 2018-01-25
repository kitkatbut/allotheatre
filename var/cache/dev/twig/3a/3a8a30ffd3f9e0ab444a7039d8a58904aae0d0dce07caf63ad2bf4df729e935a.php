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
        $__internal_8834510433fd451e787107c5b8c76874a2a50a3db11e6e6eca53ac97270980cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8834510433fd451e787107c5b8c76874a2a50a3db11e6e6eca53ac97270980cc->enter($__internal_8834510433fd451e787107c5b8c76874a2a50a3db11e6e6eca53ac97270980cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_7a02ec3004637aec2b800c76f8553b876bb509c6a18e419a11053a04a484dabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a02ec3004637aec2b800c76f8553b876bb509c6a18e419a11053a04a484dabb->enter($__internal_7a02ec3004637aec2b800c76f8553b876bb509c6a18e419a11053a04a484dabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8834510433fd451e787107c5b8c76874a2a50a3db11e6e6eca53ac97270980cc->leave($__internal_8834510433fd451e787107c5b8c76874a2a50a3db11e6e6eca53ac97270980cc_prof);

        
        $__internal_7a02ec3004637aec2b800c76f8553b876bb509c6a18e419a11053a04a484dabb->leave($__internal_7a02ec3004637aec2b800c76f8553b876bb509c6a18e419a11053a04a484dabb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9486a2c9cd97a917b8bc5ee0d637492dacbe16feb1a1ba0ece39ae38e4ca58cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9486a2c9cd97a917b8bc5ee0d637492dacbe16feb1a1ba0ece39ae38e4ca58cc->enter($__internal_9486a2c9cd97a917b8bc5ee0d637492dacbe16feb1a1ba0ece39ae38e4ca58cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_209068c9403716787a202dd5167820a661675142bc24bf6c0648b898ceba2232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209068c9403716787a202dd5167820a661675142bc24bf6c0648b898ceba2232->enter($__internal_209068c9403716787a202dd5167820a661675142bc24bf6c0648b898ceba2232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_209068c9403716787a202dd5167820a661675142bc24bf6c0648b898ceba2232->leave($__internal_209068c9403716787a202dd5167820a661675142bc24bf6c0648b898ceba2232_prof);

        
        $__internal_9486a2c9cd97a917b8bc5ee0d637492dacbe16feb1a1ba0ece39ae38e4ca58cc->leave($__internal_9486a2c9cd97a917b8bc5ee0d637492dacbe16feb1a1ba0ece39ae38e4ca58cc_prof);

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
