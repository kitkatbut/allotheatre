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
        $__internal_ad031c8b772e4692cea0571eb2feb1b9be65b37d43ff4c3f1b4b77b0b88bcdab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad031c8b772e4692cea0571eb2feb1b9be65b37d43ff4c3f1b4b77b0b88bcdab->enter($__internal_ad031c8b772e4692cea0571eb2feb1b9be65b37d43ff4c3f1b4b77b0b88bcdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_c58d40cda00ad0a3f661075ef9b260b5a56ade35d0d06cca70b6dfb27eabfcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58d40cda00ad0a3f661075ef9b260b5a56ade35d0d06cca70b6dfb27eabfcc3->enter($__internal_c58d40cda00ad0a3f661075ef9b260b5a56ade35d0d06cca70b6dfb27eabfcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad031c8b772e4692cea0571eb2feb1b9be65b37d43ff4c3f1b4b77b0b88bcdab->leave($__internal_ad031c8b772e4692cea0571eb2feb1b9be65b37d43ff4c3f1b4b77b0b88bcdab_prof);

        
        $__internal_c58d40cda00ad0a3f661075ef9b260b5a56ade35d0d06cca70b6dfb27eabfcc3->leave($__internal_c58d40cda00ad0a3f661075ef9b260b5a56ade35d0d06cca70b6dfb27eabfcc3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c76cf730665b1576facaa79c4493d41de20f0fd2bec46a5dfc8c9489cdd1b56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76cf730665b1576facaa79c4493d41de20f0fd2bec46a5dfc8c9489cdd1b56a->enter($__internal_c76cf730665b1576facaa79c4493d41de20f0fd2bec46a5dfc8c9489cdd1b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b82c492cf217d973e3fbfb5c212593811c057e4f577f20dc670d08b13e813aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82c492cf217d973e3fbfb5c212593811c057e4f577f20dc670d08b13e813aac->enter($__internal_b82c492cf217d973e3fbfb5c212593811c057e4f577f20dc670d08b13e813aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b82c492cf217d973e3fbfb5c212593811c057e4f577f20dc670d08b13e813aac->leave($__internal_b82c492cf217d973e3fbfb5c212593811c057e4f577f20dc670d08b13e813aac_prof);

        
        $__internal_c76cf730665b1576facaa79c4493d41de20f0fd2bec46a5dfc8c9489cdd1b56a->leave($__internal_c76cf730665b1576facaa79c4493d41de20f0fd2bec46a5dfc8c9489cdd1b56a_prof);

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
