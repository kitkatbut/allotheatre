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
        $__internal_6941c60382f34990bea67f3be49811072f2b150a4758afa326370fd7844b860d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6941c60382f34990bea67f3be49811072f2b150a4758afa326370fd7844b860d->enter($__internal_6941c60382f34990bea67f3be49811072f2b150a4758afa326370fd7844b860d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_efc0e40513986b1fd34e0f39ef19205330f4c2bc7984fb715fcc68484a577dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc0e40513986b1fd34e0f39ef19205330f4c2bc7984fb715fcc68484a577dc6->enter($__internal_efc0e40513986b1fd34e0f39ef19205330f4c2bc7984fb715fcc68484a577dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6941c60382f34990bea67f3be49811072f2b150a4758afa326370fd7844b860d->leave($__internal_6941c60382f34990bea67f3be49811072f2b150a4758afa326370fd7844b860d_prof);

        
        $__internal_efc0e40513986b1fd34e0f39ef19205330f4c2bc7984fb715fcc68484a577dc6->leave($__internal_efc0e40513986b1fd34e0f39ef19205330f4c2bc7984fb715fcc68484a577dc6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_95335faad46601aaf6351332b2ced1365274e1ed1efc2fe34dcb65dc8b6f468c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95335faad46601aaf6351332b2ced1365274e1ed1efc2fe34dcb65dc8b6f468c->enter($__internal_95335faad46601aaf6351332b2ced1365274e1ed1efc2fe34dcb65dc8b6f468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9f035965dc2d45acf2ad4a773d87fc7d50a3b06f6945419729d66c996617ea69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f035965dc2d45acf2ad4a773d87fc7d50a3b06f6945419729d66c996617ea69->enter($__internal_9f035965dc2d45acf2ad4a773d87fc7d50a3b06f6945419729d66c996617ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9f035965dc2d45acf2ad4a773d87fc7d50a3b06f6945419729d66c996617ea69->leave($__internal_9f035965dc2d45acf2ad4a773d87fc7d50a3b06f6945419729d66c996617ea69_prof);

        
        $__internal_95335faad46601aaf6351332b2ced1365274e1ed1efc2fe34dcb65dc8b6f468c->leave($__internal_95335faad46601aaf6351332b2ced1365274e1ed1efc2fe34dcb65dc8b6f468c_prof);

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
