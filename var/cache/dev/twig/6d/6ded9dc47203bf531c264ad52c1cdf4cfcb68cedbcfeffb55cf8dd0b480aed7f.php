<?php

/* contact.html.twig */
class __TwigTemplate_a78a79a9a88f973b253340e24b7a1c44b52a492f1222cecebcf772add0b1842d extends Twig_Template
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
        $__internal_66adce1d5abfc609d348521b92c89914bf6da0466c54066695da2eb32d7f46ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66adce1d5abfc609d348521b92c89914bf6da0466c54066695da2eb32d7f46ac->enter($__internal_66adce1d5abfc609d348521b92c89914bf6da0466c54066695da2eb32d7f46ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_91f97b00058766a6810166c6a00715b4f20c0a3ad6ecf082f03d28f995624d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f97b00058766a6810166c6a00715b4f20c0a3ad6ecf082f03d28f995624d7f->enter($__internal_91f97b00058766a6810166c6a00715b4f20c0a3ad6ecf082f03d28f995624d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66adce1d5abfc609d348521b92c89914bf6da0466c54066695da2eb32d7f46ac->leave($__internal_66adce1d5abfc609d348521b92c89914bf6da0466c54066695da2eb32d7f46ac_prof);

        
        $__internal_91f97b00058766a6810166c6a00715b4f20c0a3ad6ecf082f03d28f995624d7f->leave($__internal_91f97b00058766a6810166c6a00715b4f20c0a3ad6ecf082f03d28f995624d7f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d431e29a8937a2b8f04af1f93efd75442a448c0e7482a71622a2124a5d540cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d431e29a8937a2b8f04af1f93efd75442a448c0e7482a71622a2124a5d540cd->enter($__internal_5d431e29a8937a2b8f04af1f93efd75442a448c0e7482a71622a2124a5d540cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d150b08492cdb978b4fa9838f0a4da3a2c56969c17fb3a83eb70fb97f084c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d150b08492cdb978b4fa9838f0a4da3a2c56969c17fb3a83eb70fb97f084c8a->enter($__internal_8d150b08492cdb978b4fa9838f0a4da3a2c56969c17fb3a83eb70fb97f084c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d150b08492cdb978b4fa9838f0a4da3a2c56969c17fb3a83eb70fb97f084c8a->leave($__internal_8d150b08492cdb978b4fa9838f0a4da3a2c56969c17fb3a83eb70fb97f084c8a_prof);

        
        $__internal_5d431e29a8937a2b8f04af1f93efd75442a448c0e7482a71622a2124a5d540cd->leave($__internal_5d431e29a8937a2b8f04af1f93efd75442a448c0e7482a71622a2124a5d540cd_prof);

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
               
    
{% endblock %}    ", "contact.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\contact.html.twig");
    }
}
