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
        $__internal_6ad6f81d563d29e9a1bf9fce3cf46277cb1cce45868a50f0bbfee813df35060c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad6f81d563d29e9a1bf9fce3cf46277cb1cce45868a50f0bbfee813df35060c->enter($__internal_6ad6f81d563d29e9a1bf9fce3cf46277cb1cce45868a50f0bbfee813df35060c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_71388f5f78ebee5515b91817dc355eda9d71a1fbb2a4feae7a3c8fddf6d50710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71388f5f78ebee5515b91817dc355eda9d71a1fbb2a4feae7a3c8fddf6d50710->enter($__internal_71388f5f78ebee5515b91817dc355eda9d71a1fbb2a4feae7a3c8fddf6d50710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad6f81d563d29e9a1bf9fce3cf46277cb1cce45868a50f0bbfee813df35060c->leave($__internal_6ad6f81d563d29e9a1bf9fce3cf46277cb1cce45868a50f0bbfee813df35060c_prof);

        
        $__internal_71388f5f78ebee5515b91817dc355eda9d71a1fbb2a4feae7a3c8fddf6d50710->leave($__internal_71388f5f78ebee5515b91817dc355eda9d71a1fbb2a4feae7a3c8fddf6d50710_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc6062963d1e33cb3517650fdfd410ebe667ef646e69df967352a2dd483d37b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6062963d1e33cb3517650fdfd410ebe667ef646e69df967352a2dd483d37b7->enter($__internal_cc6062963d1e33cb3517650fdfd410ebe667ef646e69df967352a2dd483d37b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4c6c86121242e72ea3bae88af1898070d2eed86ceab26bf2ace01a5e48d92277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6c86121242e72ea3bae88af1898070d2eed86ceab26bf2ace01a5e48d92277->enter($__internal_4c6c86121242e72ea3bae88af1898070d2eed86ceab26bf2ace01a5e48d92277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4c6c86121242e72ea3bae88af1898070d2eed86ceab26bf2ace01a5e48d92277->leave($__internal_4c6c86121242e72ea3bae88af1898070d2eed86ceab26bf2ace01a5e48d92277_prof);

        
        $__internal_cc6062963d1e33cb3517650fdfd410ebe667ef646e69df967352a2dd483d37b7->leave($__internal_cc6062963d1e33cb3517650fdfd410ebe667ef646e69df967352a2dd483d37b7_prof);

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
