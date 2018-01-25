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
        $__internal_783b3eacd3d74ff5d490f06a046b46b6c216f35f20f19d51bc35ce1e67f26998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783b3eacd3d74ff5d490f06a046b46b6c216f35f20f19d51bc35ce1e67f26998->enter($__internal_783b3eacd3d74ff5d490f06a046b46b6c216f35f20f19d51bc35ce1e67f26998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_e3ce01339ba2af486d6700308726d4b9d2ee5d67a53b7b646a6899d054e0b409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ce01339ba2af486d6700308726d4b9d2ee5d67a53b7b646a6899d054e0b409->enter($__internal_e3ce01339ba2af486d6700308726d4b9d2ee5d67a53b7b646a6899d054e0b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_783b3eacd3d74ff5d490f06a046b46b6c216f35f20f19d51bc35ce1e67f26998->leave($__internal_783b3eacd3d74ff5d490f06a046b46b6c216f35f20f19d51bc35ce1e67f26998_prof);

        
        $__internal_e3ce01339ba2af486d6700308726d4b9d2ee5d67a53b7b646a6899d054e0b409->leave($__internal_e3ce01339ba2af486d6700308726d4b9d2ee5d67a53b7b646a6899d054e0b409_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6dbcfe77ed7a59bbf4e643cb1c918149476861d407da0e645d111ea99cfc5626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbcfe77ed7a59bbf4e643cb1c918149476861d407da0e645d111ea99cfc5626->enter($__internal_6dbcfe77ed7a59bbf4e643cb1c918149476861d407da0e645d111ea99cfc5626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_db14065db8ebe83abdbdbce9a8507cb497a5f230585b66f04489406ea6a9a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db14065db8ebe83abdbdbce9a8507cb497a5f230585b66f04489406ea6a9a5a9->enter($__internal_db14065db8ebe83abdbdbce9a8507cb497a5f230585b66f04489406ea6a9a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_db14065db8ebe83abdbdbce9a8507cb497a5f230585b66f04489406ea6a9a5a9->leave($__internal_db14065db8ebe83abdbdbce9a8507cb497a5f230585b66f04489406ea6a9a5a9_prof);

        
        $__internal_6dbcfe77ed7a59bbf4e643cb1c918149476861d407da0e645d111ea99cfc5626->leave($__internal_6dbcfe77ed7a59bbf4e643cb1c918149476861d407da0e645d111ea99cfc5626_prof);

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
