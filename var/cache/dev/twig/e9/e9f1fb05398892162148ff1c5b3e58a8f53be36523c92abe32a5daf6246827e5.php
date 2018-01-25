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
        $__internal_28de344d4b875294a9f83c627769959a58145ccb18317443d0670da74678ad0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28de344d4b875294a9f83c627769959a58145ccb18317443d0670da74678ad0a->enter($__internal_28de344d4b875294a9f83c627769959a58145ccb18317443d0670da74678ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_b605ad022fd4a3edca791099dcb84e49a467baf2d906a32f803155b7d843e689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b605ad022fd4a3edca791099dcb84e49a467baf2d906a32f803155b7d843e689->enter($__internal_b605ad022fd4a3edca791099dcb84e49a467baf2d906a32f803155b7d843e689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28de344d4b875294a9f83c627769959a58145ccb18317443d0670da74678ad0a->leave($__internal_28de344d4b875294a9f83c627769959a58145ccb18317443d0670da74678ad0a_prof);

        
        $__internal_b605ad022fd4a3edca791099dcb84e49a467baf2d906a32f803155b7d843e689->leave($__internal_b605ad022fd4a3edca791099dcb84e49a467baf2d906a32f803155b7d843e689_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1fbdc28ee4831af40635efbad5008de6e7c83305c0f94c42bfddbf5df056ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fbdc28ee4831af40635efbad5008de6e7c83305c0f94c42bfddbf5df056ab7->enter($__internal_b1fbdc28ee4831af40635efbad5008de6e7c83305c0f94c42bfddbf5df056ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1f368de4e4ee80e97897c795e70a04eb6a0aa24c378a6280d9b236a8833d68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f368de4e4ee80e97897c795e70a04eb6a0aa24c378a6280d9b236a8833d68a->enter($__internal_b1f368de4e4ee80e97897c795e70a04eb6a0aa24c378a6280d9b236a8833d68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1f368de4e4ee80e97897c795e70a04eb6a0aa24c378a6280d9b236a8833d68a->leave($__internal_b1f368de4e4ee80e97897c795e70a04eb6a0aa24c378a6280d9b236a8833d68a_prof);

        
        $__internal_b1fbdc28ee4831af40635efbad5008de6e7c83305c0f94c42bfddbf5df056ab7->leave($__internal_b1fbdc28ee4831af40635efbad5008de6e7c83305c0f94c42bfddbf5df056ab7_prof);

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
               
    
{% endblock %}    ", "contact.html.twig", "/Applications/MAMP/htdocs/AlloTheatre/templates/contact.html.twig");
    }
}
