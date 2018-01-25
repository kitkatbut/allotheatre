<?php

/* fiche_spectacle.html.twig */
class __TwigTemplate_3e26c69fe50d0ffee5b6f20680098554882526c280e956fee8e23ee41828021a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "fiche_spectacle.html.twig", 2);
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
        $__internal_3872fba0d973f8194265f3e8200cdb1e53edc6a66db48a96f94344091a2bc5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3872fba0d973f8194265f3e8200cdb1e53edc6a66db48a96f94344091a2bc5e5->enter($__internal_3872fba0d973f8194265f3e8200cdb1e53edc6a66db48a96f94344091a2bc5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $__internal_ebd3f385be4f23dbf36627ecd0f2578f52f68b1cbcb2865d7c804b01e1b2b92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd3f385be4f23dbf36627ecd0f2578f52f68b1cbcb2865d7c804b01e1b2b92f->enter($__internal_ebd3f385be4f23dbf36627ecd0f2578f52f68b1cbcb2865d7c804b01e1b2b92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3872fba0d973f8194265f3e8200cdb1e53edc6a66db48a96f94344091a2bc5e5->leave($__internal_3872fba0d973f8194265f3e8200cdb1e53edc6a66db48a96f94344091a2bc5e5_prof);

        
        $__internal_ebd3f385be4f23dbf36627ecd0f2578f52f68b1cbcb2865d7c804b01e1b2b92f->leave($__internal_ebd3f385be4f23dbf36627ecd0f2578f52f68b1cbcb2865d7c804b01e1b2b92f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_297d8ef03901c6775d759e82165ef4cc17477e88b21ab417c3777b3cb680176b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297d8ef03901c6775d759e82165ef4cc17477e88b21ab417c3777b3cb680176b->enter($__internal_297d8ef03901c6775d759e82165ef4cc17477e88b21ab417c3777b3cb680176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9925274d28219dac14d01d2a94000c9904b806a973a2a768df4f93d46c5cfb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9925274d28219dac14d01d2a94000c9904b806a973a2a768df4f93d46c5cfb91->enter($__internal_9925274d28219dac14d01d2a94000c9904b806a973a2a768df4f93d46c5cfb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>FICHE SPECTACLE</h1>


            
<!-- Fiche spectacle -->
                            
             
<div class=\"row\">
  <div class=\"col-md-4\">Titre du spectacle</div>
  <div class=\"col-md-4 offset-md-4\">.col-md-4 .offset-md-4</div>
</div>
<div class=\"row\">
  <div class=\"col-md-3 offset-md-3\">.col-md-3 .offset-md-3</div>
  <div class=\"col-md-3 offset-md-3\">.col-md-3 .offset-md-3</div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 offset-md-3\">.col-md-6 .offset-md-3</div>
</div>
                
<!-- Fiche spectacle -->
               
    
";
        
        $__internal_9925274d28219dac14d01d2a94000c9904b806a973a2a768df4f93d46c5cfb91->leave($__internal_9925274d28219dac14d01d2a94000c9904b806a973a2a768df4f93d46c5cfb91_prof);

        
        $__internal_297d8ef03901c6775d759e82165ef4cc17477e88b21ab417c3777b3cb680176b->leave($__internal_297d8ef03901c6775d759e82165ef4cc17477e88b21ab417c3777b3cb680176b_prof);

    }

    public function getTemplateName()
    {
        return "fiche_spectacle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/fiche_spectacle.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
<h1>FICHE SPECTACLE</h1>


            
<!-- Fiche spectacle -->
                            
             
<div class=\"row\">
  <div class=\"col-md-4\">Titre du spectacle</div>
  <div class=\"col-md-4 offset-md-4\">.col-md-4 .offset-md-4</div>
</div>
<div class=\"row\">
  <div class=\"col-md-3 offset-md-3\">.col-md-3 .offset-md-3</div>
  <div class=\"col-md-3 offset-md-3\">.col-md-3 .offset-md-3</div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 offset-md-3\">.col-md-6 .offset-md-3</div>
</div>
                
<!-- Fiche spectacle -->
               
    
{% endblock %}    ", "fiche_spectacle.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/fiche_spectacle.html.twig");
    }
}
