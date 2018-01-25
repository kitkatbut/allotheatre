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
        $__internal_f7e26c8e0536b07b0304d7390625f1f26718778a178e32eb2fb48a783a0624d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e26c8e0536b07b0304d7390625f1f26718778a178e32eb2fb48a783a0624d9->enter($__internal_f7e26c8e0536b07b0304d7390625f1f26718778a178e32eb2fb48a783a0624d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_82d98cb3132843dc8b5dfe33de558782efa17aa7fb0d1d0e532fb0670ebb64ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d98cb3132843dc8b5dfe33de558782efa17aa7fb0d1d0e532fb0670ebb64ee->enter($__internal_82d98cb3132843dc8b5dfe33de558782efa17aa7fb0d1d0e532fb0670ebb64ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e26c8e0536b07b0304d7390625f1f26718778a178e32eb2fb48a783a0624d9->leave($__internal_f7e26c8e0536b07b0304d7390625f1f26718778a178e32eb2fb48a783a0624d9_prof);

        
        $__internal_82d98cb3132843dc8b5dfe33de558782efa17aa7fb0d1d0e532fb0670ebb64ee->leave($__internal_82d98cb3132843dc8b5dfe33de558782efa17aa7fb0d1d0e532fb0670ebb64ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c208b644ed0fae6a3960381dfac27ac8cd078231358ae5f0378b240020115cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c208b644ed0fae6a3960381dfac27ac8cd078231358ae5f0378b240020115cf->enter($__internal_1c208b644ed0fae6a3960381dfac27ac8cd078231358ae5f0378b240020115cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a0110534b3cff22308e4b2a224b484406e68f4978f295fc1cb2fbeb621554b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0110534b3cff22308e4b2a224b484406e68f4978f295fc1cb2fbeb621554b2->enter($__internal_7a0110534b3cff22308e4b2a224b484406e68f4978f295fc1cb2fbeb621554b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a0110534b3cff22308e4b2a224b484406e68f4978f295fc1cb2fbeb621554b2->leave($__internal_7a0110534b3cff22308e4b2a224b484406e68f4978f295fc1cb2fbeb621554b2_prof);

        
        $__internal_1c208b644ed0fae6a3960381dfac27ac8cd078231358ae5f0378b240020115cf->leave($__internal_1c208b644ed0fae6a3960381dfac27ac8cd078231358ae5f0378b240020115cf_prof);

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
