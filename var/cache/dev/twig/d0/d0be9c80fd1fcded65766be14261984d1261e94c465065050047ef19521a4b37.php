<?php

/* SitePublic/index.html.twig */
class __TwigTemplate_4e30d9ef8063a583f2936dcb330700c49a3f1c9430daa7e3233e2fe6e70bdf9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SitePublic/index.html.twig", 1);
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
        $__internal_ba719aca80c1747f609a2541a1c24c39014b939a80d599aaed156270fd82b490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba719aca80c1747f609a2541a1c24c39014b939a80d599aaed156270fd82b490->enter($__internal_ba719aca80c1747f609a2541a1c24c39014b939a80d599aaed156270fd82b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_7e511087a77f22d7c4688cfd4f0e85a722296412e29026749468852af898cde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e511087a77f22d7c4688cfd4f0e85a722296412e29026749468852af898cde0->enter($__internal_7e511087a77f22d7c4688cfd4f0e85a722296412e29026749468852af898cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba719aca80c1747f609a2541a1c24c39014b939a80d599aaed156270fd82b490->leave($__internal_ba719aca80c1747f609a2541a1c24c39014b939a80d599aaed156270fd82b490_prof);

        
        $__internal_7e511087a77f22d7c4688cfd4f0e85a722296412e29026749468852af898cde0->leave($__internal_7e511087a77f22d7c4688cfd4f0e85a722296412e29026749468852af898cde0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0614919ef569380f9593cf09a49c31db1136bd9659e6e47acbac4a42f1d3aecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0614919ef569380f9593cf09a49c31db1136bd9659e6e47acbac4a42f1d3aecf->enter($__internal_0614919ef569380f9593cf09a49c31db1136bd9659e6e47acbac4a42f1d3aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ef3780f6fcbe3551640ceb2842db7573d239dacee49e9289ce1828ce9d74119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef3780f6fcbe3551640ceb2842db7573d239dacee49e9289ce1828ce9d74119->enter($__internal_2ef3780f6fcbe3551640ceb2842db7573d239dacee49e9289ce1828ce9d74119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"vignette\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/affiche.jpg"), "html", null, true);
        echo "\" class=\"vignette__img\" alt=\"affiche\">
        <div class=\"vignette__txt\">
            <p> !</p>
            <button>Par ici</button>
        </div>
    </div>
";
        
        $__internal_2ef3780f6fcbe3551640ceb2842db7573d239dacee49e9289ce1828ce9d74119->leave($__internal_2ef3780f6fcbe3551640ceb2842db7573d239dacee49e9289ce1828ce9d74119_prof);

        
        $__internal_0614919ef569380f9593cf09a49c31db1136bd9659e6e47acbac4a42f1d3aecf->leave($__internal_0614919ef569380f9593cf09a49c31db1136bd9659e6e47acbac4a42f1d3aecf_prof);

    }

    public function getTemplateName()
    {
        return "SitePublic/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}", "SitePublic/index.html.twig", "/Applications/MAMP/htdocs/Allotheatre/templates/SitePublic/index.html.twig");
    }
}
