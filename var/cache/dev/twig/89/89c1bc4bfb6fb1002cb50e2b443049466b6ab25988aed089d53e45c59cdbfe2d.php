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
        $__internal_571aa5c38800ae415fa9ad7496032dfc26d1d328daa40912f4ae73412c1e6eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571aa5c38800ae415fa9ad7496032dfc26d1d328daa40912f4ae73412c1e6eac->enter($__internal_571aa5c38800ae415fa9ad7496032dfc26d1d328daa40912f4ae73412c1e6eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_14ea26fb198e662e7304fdf405458b2e46e68faab61031ce59d99d33fcf23418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ea26fb198e662e7304fdf405458b2e46e68faab61031ce59d99d33fcf23418->enter($__internal_14ea26fb198e662e7304fdf405458b2e46e68faab61031ce59d99d33fcf23418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571aa5c38800ae415fa9ad7496032dfc26d1d328daa40912f4ae73412c1e6eac->leave($__internal_571aa5c38800ae415fa9ad7496032dfc26d1d328daa40912f4ae73412c1e6eac_prof);

        
        $__internal_14ea26fb198e662e7304fdf405458b2e46e68faab61031ce59d99d33fcf23418->leave($__internal_14ea26fb198e662e7304fdf405458b2e46e68faab61031ce59d99d33fcf23418_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a1df6f79d44d0a0d1bdf650b3bab707b2c724e9272b9dbf2207041eef61cd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1df6f79d44d0a0d1bdf650b3bab707b2c724e9272b9dbf2207041eef61cd6d->enter($__internal_5a1df6f79d44d0a0d1bdf650b3bab707b2c724e9272b9dbf2207041eef61cd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a93b2050d9459f52074d8ec41888c16f584dfeb45b9b4ecb67bdc3f0517b77d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93b2050d9459f52074d8ec41888c16f584dfeb45b9b4ecb67bdc3f0517b77d9->enter($__internal_a93b2050d9459f52074d8ec41888c16f584dfeb45b9b4ecb67bdc3f0517b77d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a93b2050d9459f52074d8ec41888c16f584dfeb45b9b4ecb67bdc3f0517b77d9->leave($__internal_a93b2050d9459f52074d8ec41888c16f584dfeb45b9b4ecb67bdc3f0517b77d9_prof);

        
        $__internal_5a1df6f79d44d0a0d1bdf650b3bab707b2c724e9272b9dbf2207041eef61cd6d->leave($__internal_5a1df6f79d44d0a0d1bdf650b3bab707b2c724e9272b9dbf2207041eef61cd6d_prof);

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
