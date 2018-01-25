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
        $__internal_222f00cb985b69f641a97f5a42aa002edc43d80b446e56d3786dc06d6e71ad2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222f00cb985b69f641a97f5a42aa002edc43d80b446e56d3786dc06d6e71ad2a->enter($__internal_222f00cb985b69f641a97f5a42aa002edc43d80b446e56d3786dc06d6e71ad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_3f62e94ec72713dfc13f0ad829e06a3927195bdb5f93fdf02067c956367f514d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f62e94ec72713dfc13f0ad829e06a3927195bdb5f93fdf02067c956367f514d->enter($__internal_3f62e94ec72713dfc13f0ad829e06a3927195bdb5f93fdf02067c956367f514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222f00cb985b69f641a97f5a42aa002edc43d80b446e56d3786dc06d6e71ad2a->leave($__internal_222f00cb985b69f641a97f5a42aa002edc43d80b446e56d3786dc06d6e71ad2a_prof);

        
        $__internal_3f62e94ec72713dfc13f0ad829e06a3927195bdb5f93fdf02067c956367f514d->leave($__internal_3f62e94ec72713dfc13f0ad829e06a3927195bdb5f93fdf02067c956367f514d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8ba7553096e94aeb43db5f8b849fe96dc56c618b2c0716db09728184914491e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ba7553096e94aeb43db5f8b849fe96dc56c618b2c0716db09728184914491e->enter($__internal_a8ba7553096e94aeb43db5f8b849fe96dc56c618b2c0716db09728184914491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a03d68dcfd59d6c4b328bff3bbeda4b834e182d56329ce451ac8afac800e1bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03d68dcfd59d6c4b328bff3bbeda4b834e182d56329ce451ac8afac800e1bb1->enter($__internal_a03d68dcfd59d6c4b328bff3bbeda4b834e182d56329ce451ac8afac800e1bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a03d68dcfd59d6c4b328bff3bbeda4b834e182d56329ce451ac8afac800e1bb1->leave($__internal_a03d68dcfd59d6c4b328bff3bbeda4b834e182d56329ce451ac8afac800e1bb1_prof);

        
        $__internal_a8ba7553096e94aeb43db5f8b849fe96dc56c618b2c0716db09728184914491e->leave($__internal_a8ba7553096e94aeb43db5f8b849fe96dc56c618b2c0716db09728184914491e_prof);

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
