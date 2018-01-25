<?php

/* index.html.twig */
class __TwigTemplate_199c2ea997a883093d33677de3df5559014e1ff9b595ff6f4890715089c03681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_8ce068d84223b0644f77d3437ada56f256b55bf855153c9345673ee1f311f2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce068d84223b0644f77d3437ada56f256b55bf855153c9345673ee1f311f2ca->enter($__internal_8ce068d84223b0644f77d3437ada56f256b55bf855153c9345673ee1f311f2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_eb87d15fa3e07ffcf87b94a452c9cfc8817c78b3e26e73ae915222faa591985d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb87d15fa3e07ffcf87b94a452c9cfc8817c78b3e26e73ae915222faa591985d->enter($__internal_eb87d15fa3e07ffcf87b94a452c9cfc8817c78b3e26e73ae915222faa591985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce068d84223b0644f77d3437ada56f256b55bf855153c9345673ee1f311f2ca->leave($__internal_8ce068d84223b0644f77d3437ada56f256b55bf855153c9345673ee1f311f2ca_prof);

        
        $__internal_eb87d15fa3e07ffcf87b94a452c9cfc8817c78b3e26e73ae915222faa591985d->leave($__internal_eb87d15fa3e07ffcf87b94a452c9cfc8817c78b3e26e73ae915222faa591985d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_45828dfbfe44cf429d451e5ba7c6eaa820d540e8e107115aa4f981e54942fd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45828dfbfe44cf429d451e5ba7c6eaa820d540e8e107115aa4f981e54942fd37->enter($__internal_45828dfbfe44cf429d451e5ba7c6eaa820d540e8e107115aa4f981e54942fd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c5cf51bea01fa56799cd1cccac977777b45cc1bf676215422e5e7b53dfd2dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5cf51bea01fa56799cd1cccac977777b45cc1bf676215422e5e7b53dfd2dce->enter($__internal_6c5cf51bea01fa56799cd1cccac977777b45cc1bf676215422e5e7b53dfd2dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "   
    <div class=\"vignette\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/affiche.jpg"), "html", null, true);
        echo "\" class=\"vignette__img\" alt=\"affiche\">
        <div class=\"vignette__txt\">
            <p> !</p>
            <button>Par ici</button>
        </div>
    </div>
";
        
        $__internal_6c5cf51bea01fa56799cd1cccac977777b45cc1bf676215422e5e7b53dfd2dce->leave($__internal_6c5cf51bea01fa56799cd1cccac977777b45cc1bf676215422e5e7b53dfd2dce_prof);

        
        $__internal_45828dfbfe44cf429d451e5ba7c6eaa820d540e8e107115aa4f981e54942fd37->leave($__internal_45828dfbfe44cf429d451e5ba7c6eaa820d540e8e107115aa4f981e54942fd37_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
   
    <div class=\"vignette\">
        <img src=\"{{ asset('images/affiche.jpg') }}\" class=\"vignette__img\" alt=\"affiche\">
        <div class=\"vignette__txt\">
            <p> !</p>
            <button>Par ici</button>
        </div>
    </div>
{% endblock %}", "index.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/index.html.twig");
    }
}
