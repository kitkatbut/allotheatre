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
        $__internal_02bde2eae7566aa244c4fb512313844a85291c4feb40deb86ba8b8f76aa79d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bde2eae7566aa244c4fb512313844a85291c4feb40deb86ba8b8f76aa79d19->enter($__internal_02bde2eae7566aa244c4fb512313844a85291c4feb40deb86ba8b8f76aa79d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_693eebcb0a72c955eebe90f250c685c7ebc453584be4f41f5e8103d8d4cb7dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693eebcb0a72c955eebe90f250c685c7ebc453584be4f41f5e8103d8d4cb7dca->enter($__internal_693eebcb0a72c955eebe90f250c685c7ebc453584be4f41f5e8103d8d4cb7dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02bde2eae7566aa244c4fb512313844a85291c4feb40deb86ba8b8f76aa79d19->leave($__internal_02bde2eae7566aa244c4fb512313844a85291c4feb40deb86ba8b8f76aa79d19_prof);

        
        $__internal_693eebcb0a72c955eebe90f250c685c7ebc453584be4f41f5e8103d8d4cb7dca->leave($__internal_693eebcb0a72c955eebe90f250c685c7ebc453584be4f41f5e8103d8d4cb7dca_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9349f610e47c25de720b9de76d39d329dc02e170463c8aca2922df05023b153c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9349f610e47c25de720b9de76d39d329dc02e170463c8aca2922df05023b153c->enter($__internal_9349f610e47c25de720b9de76d39d329dc02e170463c8aca2922df05023b153c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9022cb19a18d38048e94056924d59e5f8f906d86ef00fb2517ba64798db2daaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9022cb19a18d38048e94056924d59e5f8f906d86ef00fb2517ba64798db2daaa->enter($__internal_9022cb19a18d38048e94056924d59e5f8f906d86ef00fb2517ba64798db2daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9022cb19a18d38048e94056924d59e5f8f906d86ef00fb2517ba64798db2daaa->leave($__internal_9022cb19a18d38048e94056924d59e5f8f906d86ef00fb2517ba64798db2daaa_prof);

        
        $__internal_9349f610e47c25de720b9de76d39d329dc02e170463c8aca2922df05023b153c->leave($__internal_9349f610e47c25de720b9de76d39d329dc02e170463c8aca2922df05023b153c_prof);

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
