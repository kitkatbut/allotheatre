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
        $__internal_190bff4f4edb088e42d0acfc25734f90f6feaa87fac82c25efbc4aec258b363e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190bff4f4edb088e42d0acfc25734f90f6feaa87fac82c25efbc4aec258b363e->enter($__internal_190bff4f4edb088e42d0acfc25734f90f6feaa87fac82c25efbc4aec258b363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_e7af60b8ffb87d060c8d81459485950d041c2428f23518db24764f409eda6955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7af60b8ffb87d060c8d81459485950d041c2428f23518db24764f409eda6955->enter($__internal_e7af60b8ffb87d060c8d81459485950d041c2428f23518db24764f409eda6955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190bff4f4edb088e42d0acfc25734f90f6feaa87fac82c25efbc4aec258b363e->leave($__internal_190bff4f4edb088e42d0acfc25734f90f6feaa87fac82c25efbc4aec258b363e_prof);

        
        $__internal_e7af60b8ffb87d060c8d81459485950d041c2428f23518db24764f409eda6955->leave($__internal_e7af60b8ffb87d060c8d81459485950d041c2428f23518db24764f409eda6955_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d56bb0f12f217ebc59106a7572f06b63818ca87e7ce385855f5208ed3b910fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56bb0f12f217ebc59106a7572f06b63818ca87e7ce385855f5208ed3b910fc4->enter($__internal_d56bb0f12f217ebc59106a7572f06b63818ca87e7ce385855f5208ed3b910fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fdbcf8e93c855fbd9ea27688d10f410a0ef1e9605a1565950aba741347b3e423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbcf8e93c855fbd9ea27688d10f410a0ef1e9605a1565950aba741347b3e423->enter($__internal_fdbcf8e93c855fbd9ea27688d10f410a0ef1e9605a1565950aba741347b3e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fdbcf8e93c855fbd9ea27688d10f410a0ef1e9605a1565950aba741347b3e423->leave($__internal_fdbcf8e93c855fbd9ea27688d10f410a0ef1e9605a1565950aba741347b3e423_prof);

        
        $__internal_d56bb0f12f217ebc59106a7572f06b63818ca87e7ce385855f5208ed3b910fc4->leave($__internal_d56bb0f12f217ebc59106a7572f06b63818ca87e7ce385855f5208ed3b910fc4_prof);

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
