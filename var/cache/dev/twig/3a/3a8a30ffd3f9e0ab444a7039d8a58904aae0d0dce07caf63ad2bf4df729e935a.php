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
        $__internal_3189a45a91977341f3b09b537484f892796d3579fcc8da34fe0fb9aeac5738df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3189a45a91977341f3b09b537484f892796d3579fcc8da34fe0fb9aeac5738df->enter($__internal_3189a45a91977341f3b09b537484f892796d3579fcc8da34fe0fb9aeac5738df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_139dd96870feb4fb5a27fdc8b3874a6b584c1cb4e9309548702ec916bc008939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139dd96870feb4fb5a27fdc8b3874a6b584c1cb4e9309548702ec916bc008939->enter($__internal_139dd96870feb4fb5a27fdc8b3874a6b584c1cb4e9309548702ec916bc008939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3189a45a91977341f3b09b537484f892796d3579fcc8da34fe0fb9aeac5738df->leave($__internal_3189a45a91977341f3b09b537484f892796d3579fcc8da34fe0fb9aeac5738df_prof);

        
        $__internal_139dd96870feb4fb5a27fdc8b3874a6b584c1cb4e9309548702ec916bc008939->leave($__internal_139dd96870feb4fb5a27fdc8b3874a6b584c1cb4e9309548702ec916bc008939_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_739a192db2108d62d4c9c7a6ec34f76e3b65265d49db6a65f6e29d2773f7eb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739a192db2108d62d4c9c7a6ec34f76e3b65265d49db6a65f6e29d2773f7eb13->enter($__internal_739a192db2108d62d4c9c7a6ec34f76e3b65265d49db6a65f6e29d2773f7eb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d2e56ccad45c9c3b147f5b23db84aa90cbe6c4a7745c7f1a0d94550d9fe91c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2e56ccad45c9c3b147f5b23db84aa90cbe6c4a7745c7f1a0d94550d9fe91c3->enter($__internal_1d2e56ccad45c9c3b147f5b23db84aa90cbe6c4a7745c7f1a0d94550d9fe91c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d2e56ccad45c9c3b147f5b23db84aa90cbe6c4a7745c7f1a0d94550d9fe91c3->leave($__internal_1d2e56ccad45c9c3b147f5b23db84aa90cbe6c4a7745c7f1a0d94550d9fe91c3_prof);

        
        $__internal_739a192db2108d62d4c9c7a6ec34f76e3b65265d49db6a65f6e29d2773f7eb13->leave($__internal_739a192db2108d62d4c9c7a6ec34f76e3b65265d49db6a65f6e29d2773f7eb13_prof);

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
