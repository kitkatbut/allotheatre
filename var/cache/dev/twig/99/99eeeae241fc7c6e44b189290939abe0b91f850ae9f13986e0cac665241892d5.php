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
        $__internal_3749460ce7be26ce21527430520201d0e255ff712a5e92b44c2ae7595d165fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3749460ce7be26ce21527430520201d0e255ff712a5e92b44c2ae7595d165fc7->enter($__internal_3749460ce7be26ce21527430520201d0e255ff712a5e92b44c2ae7595d165fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_1b8d37bc4609e3ecbb2303b09bc9faa8e587fc8fe4f10607e3d8017befb1ea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8d37bc4609e3ecbb2303b09bc9faa8e587fc8fe4f10607e3d8017befb1ea07->enter($__internal_1b8d37bc4609e3ecbb2303b09bc9faa8e587fc8fe4f10607e3d8017befb1ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3749460ce7be26ce21527430520201d0e255ff712a5e92b44c2ae7595d165fc7->leave($__internal_3749460ce7be26ce21527430520201d0e255ff712a5e92b44c2ae7595d165fc7_prof);

        
        $__internal_1b8d37bc4609e3ecbb2303b09bc9faa8e587fc8fe4f10607e3d8017befb1ea07->leave($__internal_1b8d37bc4609e3ecbb2303b09bc9faa8e587fc8fe4f10607e3d8017befb1ea07_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_759a37e6aafb8191f1f70511b98506183f0ead93423e55d4782012954951215f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759a37e6aafb8191f1f70511b98506183f0ead93423e55d4782012954951215f->enter($__internal_759a37e6aafb8191f1f70511b98506183f0ead93423e55d4782012954951215f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_edbd183ef97fc823c78d58cf47e7ba1a48b986a59aaae6eb3ca528105a931784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbd183ef97fc823c78d58cf47e7ba1a48b986a59aaae6eb3ca528105a931784->enter($__internal_edbd183ef97fc823c78d58cf47e7ba1a48b986a59aaae6eb3ca528105a931784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_edbd183ef97fc823c78d58cf47e7ba1a48b986a59aaae6eb3ca528105a931784->leave($__internal_edbd183ef97fc823c78d58cf47e7ba1a48b986a59aaae6eb3ca528105a931784_prof);

        
        $__internal_759a37e6aafb8191f1f70511b98506183f0ead93423e55d4782012954951215f->leave($__internal_759a37e6aafb8191f1f70511b98506183f0ead93423e55d4782012954951215f_prof);

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
