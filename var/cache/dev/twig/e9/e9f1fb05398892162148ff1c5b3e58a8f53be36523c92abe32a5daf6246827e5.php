<?php

/* contact.html.twig */
class __TwigTemplate_0b90e40b30bbaf8073203682965e85b7bbff299b745a536be3caf18b61b9ced4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 2);
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
        $__internal_ba48c0309a82fd9b8d75831052e03bae353940d51eb03c6f1a43039ea3417812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba48c0309a82fd9b8d75831052e03bae353940d51eb03c6f1a43039ea3417812->enter($__internal_ba48c0309a82fd9b8d75831052e03bae353940d51eb03c6f1a43039ea3417812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_b93bdae9c78a38a8b58d1636f22ea3caa87ceb6637276f21e412216568e7aeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93bdae9c78a38a8b58d1636f22ea3caa87ceb6637276f21e412216568e7aeda->enter($__internal_b93bdae9c78a38a8b58d1636f22ea3caa87ceb6637276f21e412216568e7aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba48c0309a82fd9b8d75831052e03bae353940d51eb03c6f1a43039ea3417812->leave($__internal_ba48c0309a82fd9b8d75831052e03bae353940d51eb03c6f1a43039ea3417812_prof);

        
        $__internal_b93bdae9c78a38a8b58d1636f22ea3caa87ceb6637276f21e412216568e7aeda->leave($__internal_b93bdae9c78a38a8b58d1636f22ea3caa87ceb6637276f21e412216568e7aeda_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d94085a4cc818281e785a1c9cac4e3ee9317e96e8238ab29576502658a1ef7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94085a4cc818281e785a1c9cac4e3ee9317e96e8238ab29576502658a1ef7de->enter($__internal_d94085a4cc818281e785a1c9cac4e3ee9317e96e8238ab29576502658a1ef7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78d0d2bf665f856be3c227c8aabbd7784115fa6295ca0ab225cabaa786993aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d0d2bf665f856be3c227c8aabbd7784115fa6295ca0ab225cabaa786993aea->enter($__internal_78d0d2bf665f856be3c227c8aabbd7784115fa6295ca0ab225cabaa786993aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>LA PAGE CONTACT</h1>


            
<!-- Form contact -->
<form>

    <p class=\"h5 text-center mb-4\">Nous écrire</p>

    <div class=\"md-form\">
        <i class=\"fa fa-user prefix grey-text\"></i>
        <input type=\"text\" id=\"form3\" class=\"form-control\">
        <label for=\"form3\">Votre nom</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix grey-text\"></i>
        <input type=\"text\" id=\"form2\" class=\"form-control\">
        <label for=\"form2\">Votre mail</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-tag prefix grey-text\"></i>
        <input type=\"text\" id=\"form32\" class=\"form-control\">
        <label for=\"form34\">Sujet</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-pencil prefix grey-text\"></i>
        <textarea type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\"></textarea>
        <label for=\"form8\">Votre message</label>
    </div>

    <div class=\"text-center\">
        <button class=\"btn btn-unique\">Envoyer <i class=\"fa fa-paper-plane-o ml-1\"></i></button>
    </div>

</form>
<!-- Form contact -->
               
    
";
        
        $__internal_78d0d2bf665f856be3c227c8aabbd7784115fa6295ca0ab225cabaa786993aea->leave($__internal_78d0d2bf665f856be3c227c8aabbd7784115fa6295ca0ab225cabaa786993aea_prof);

        
        $__internal_d94085a4cc818281e785a1c9cac4e3ee9317e96e8238ab29576502658a1ef7de->leave($__internal_d94085a4cc818281e785a1c9cac4e3ee9317e96e8238ab29576502658a1ef7de_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
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
        return new Twig_Source("{# templates/contact.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
<h1>LA PAGE CONTACT</h1>


            
<!-- Form contact -->
<form>

    <p class=\"h5 text-center mb-4\">Nous écrire</p>

    <div class=\"md-form\">
        <i class=\"fa fa-user prefix grey-text\"></i>
        <input type=\"text\" id=\"form3\" class=\"form-control\">
        <label for=\"form3\">Votre nom</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix grey-text\"></i>
        <input type=\"text\" id=\"form2\" class=\"form-control\">
        <label for=\"form2\">Votre mail</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-tag prefix grey-text\"></i>
        <input type=\"text\" id=\"form32\" class=\"form-control\">
        <label for=\"form34\">Sujet</label>
    </div>

    <div class=\"md-form\">
        <i class=\"fa fa-pencil prefix grey-text\"></i>
        <textarea type=\"text\" id=\"form8\" class=\"md-textarea\" style=\"height: 100px\"></textarea>
        <label for=\"form8\">Votre message</label>
    </div>

    <div class=\"text-center\">
        <button class=\"btn btn-unique\">Envoyer <i class=\"fa fa-paper-plane-o ml-1\"></i></button>
    </div>

</form>
<!-- Form contact -->
               
    
{% endblock %}    ", "contact.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/contact.html.twig");
    }
}
