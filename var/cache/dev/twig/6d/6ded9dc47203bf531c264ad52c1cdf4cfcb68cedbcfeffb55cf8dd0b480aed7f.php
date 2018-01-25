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
        $__internal_3cb77139ab9f0778bb50304920f86413dffc25e309f858af14b7f1aa3946e45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb77139ab9f0778bb50304920f86413dffc25e309f858af14b7f1aa3946e45e->enter($__internal_3cb77139ab9f0778bb50304920f86413dffc25e309f858af14b7f1aa3946e45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_2def3cda95fc00e60b7518e6c49563553411ab650f1f9f8e757c5541bb112c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2def3cda95fc00e60b7518e6c49563553411ab650f1f9f8e757c5541bb112c1e->enter($__internal_2def3cda95fc00e60b7518e6c49563553411ab650f1f9f8e757c5541bb112c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb77139ab9f0778bb50304920f86413dffc25e309f858af14b7f1aa3946e45e->leave($__internal_3cb77139ab9f0778bb50304920f86413dffc25e309f858af14b7f1aa3946e45e_prof);

        
        $__internal_2def3cda95fc00e60b7518e6c49563553411ab650f1f9f8e757c5541bb112c1e->leave($__internal_2def3cda95fc00e60b7518e6c49563553411ab650f1f9f8e757c5541bb112c1e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1a6d477e2855e290f060b549f1626c5f387214e2ae9418c42e95332c675bbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a6d477e2855e290f060b549f1626c5f387214e2ae9418c42e95332c675bbdf->enter($__internal_e1a6d477e2855e290f060b549f1626c5f387214e2ae9418c42e95332c675bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fec84d62a891154939bad2ad9c122e7fa02782c10b59ec0b89b9e3c12892aa9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec84d62a891154939bad2ad9c122e7fa02782c10b59ec0b89b9e3c12892aa9f->enter($__internal_fec84d62a891154939bad2ad9c122e7fa02782c10b59ec0b89b9e3c12892aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fec84d62a891154939bad2ad9c122e7fa02782c10b59ec0b89b9e3c12892aa9f->leave($__internal_fec84d62a891154939bad2ad9c122e7fa02782c10b59ec0b89b9e3c12892aa9f_prof);

        
        $__internal_e1a6d477e2855e290f060b549f1626c5f387214e2ae9418c42e95332c675bbdf->leave($__internal_e1a6d477e2855e290f060b549f1626c5f387214e2ae9418c42e95332c675bbdf_prof);

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
