<?php

/* index.html.twig */
class __TwigTemplate_b6296615cd07f7c142f358bfc6b6e4bc3d9a2a3d968bb4743fa0e81b9795ae73 extends Twig_Template
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
        $__internal_18c7d96b8d26d8607fcd9476b498c42654abadefbafeec74c7239bd28498b212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c7d96b8d26d8607fcd9476b498c42654abadefbafeec74c7239bd28498b212->enter($__internal_18c7d96b8d26d8607fcd9476b498c42654abadefbafeec74c7239bd28498b212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_2ae0eabb6549cdc55152e2d4e01a4eb3be4c3444d2a4a9678495e657b5f7b834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae0eabb6549cdc55152e2d4e01a4eb3be4c3444d2a4a9678495e657b5f7b834->enter($__internal_2ae0eabb6549cdc55152e2d4e01a4eb3be4c3444d2a4a9678495e657b5f7b834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c7d96b8d26d8607fcd9476b498c42654abadefbafeec74c7239bd28498b212->leave($__internal_18c7d96b8d26d8607fcd9476b498c42654abadefbafeec74c7239bd28498b212_prof);

        
        $__internal_2ae0eabb6549cdc55152e2d4e01a4eb3be4c3444d2a4a9678495e657b5f7b834->leave($__internal_2ae0eabb6549cdc55152e2d4e01a4eb3be4c3444d2a4a9678495e657b5f7b834_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_281bc6a8e170841c28d20380664ee3cdec7347424b0bab63fdcfb63959f152d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281bc6a8e170841c28d20380664ee3cdec7347424b0bab63fdcfb63959f152d2->enter($__internal_281bc6a8e170841c28d20380664ee3cdec7347424b0bab63fdcfb63959f152d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4b616d5ef0b384ae0c49be2babd65f53060c64acbd79238fa3896cf2de7e00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b616d5ef0b384ae0c49be2babd65f53060c64acbd79238fa3896cf2de7e00f->enter($__internal_c4b616d5ef0b384ae0c49be2babd65f53060c64acbd79238fa3896cf2de7e00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c4b616d5ef0b384ae0c49be2babd65f53060c64acbd79238fa3896cf2de7e00f->leave($__internal_c4b616d5ef0b384ae0c49be2babd65f53060c64acbd79238fa3896cf2de7e00f_prof);

        
        $__internal_281bc6a8e170841c28d20380664ee3cdec7347424b0bab63fdcfb63959f152d2->leave($__internal_281bc6a8e170841c28d20380664ee3cdec7347424b0bab63fdcfb63959f152d2_prof);

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
{% endblock %}", "index.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\index.html.twig");
    }
}
