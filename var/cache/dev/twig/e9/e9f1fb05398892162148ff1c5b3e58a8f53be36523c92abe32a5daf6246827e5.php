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
        $__internal_614a8bce606f5d5f1f4f77a8952f4fdff996d80542099a75f852203fdf18d32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614a8bce606f5d5f1f4f77a8952f4fdff996d80542099a75f852203fdf18d32d->enter($__internal_614a8bce606f5d5f1f4f77a8952f4fdff996d80542099a75f852203fdf18d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_32d527114903bf7fc82b5dc7b5fef41f7003f4db94e82d75cc68a6d172e203a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d527114903bf7fc82b5dc7b5fef41f7003f4db94e82d75cc68a6d172e203a6->enter($__internal_32d527114903bf7fc82b5dc7b5fef41f7003f4db94e82d75cc68a6d172e203a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614a8bce606f5d5f1f4f77a8952f4fdff996d80542099a75f852203fdf18d32d->leave($__internal_614a8bce606f5d5f1f4f77a8952f4fdff996d80542099a75f852203fdf18d32d_prof);

        
        $__internal_32d527114903bf7fc82b5dc7b5fef41f7003f4db94e82d75cc68a6d172e203a6->leave($__internal_32d527114903bf7fc82b5dc7b5fef41f7003f4db94e82d75cc68a6d172e203a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_00a3765744d5db3b40283b6b3d9047683a43ba4f2d39e647d0cd7f79b1ae125b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a3765744d5db3b40283b6b3d9047683a43ba4f2d39e647d0cd7f79b1ae125b->enter($__internal_00a3765744d5db3b40283b6b3d9047683a43ba4f2d39e647d0cd7f79b1ae125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ca0e128c5acded6c4efcdec7f9e3ff8307c834a20ec1f3d95e5eae47ea3a20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca0e128c5acded6c4efcdec7f9e3ff8307c834a20ec1f3d95e5eae47ea3a20d->enter($__internal_9ca0e128c5acded6c4efcdec7f9e3ff8307c834a20ec1f3d95e5eae47ea3a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ca0e128c5acded6c4efcdec7f9e3ff8307c834a20ec1f3d95e5eae47ea3a20d->leave($__internal_9ca0e128c5acded6c4efcdec7f9e3ff8307c834a20ec1f3d95e5eae47ea3a20d_prof);

        
        $__internal_00a3765744d5db3b40283b6b3d9047683a43ba4f2d39e647d0cd7f79b1ae125b->leave($__internal_00a3765744d5db3b40283b6b3d9047683a43ba4f2d39e647d0cd7f79b1ae125b_prof);

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
