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
        $__internal_7f1a0353d32efa067d399ada094f67412ed94fed21fa9bd15184b73de6bd4c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1a0353d32efa067d399ada094f67412ed94fed21fa9bd15184b73de6bd4c4f->enter($__internal_7f1a0353d32efa067d399ada094f67412ed94fed21fa9bd15184b73de6bd4c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_9fb57ffce554aa7f548dd208f325015109742dcc00c91667d33d1f25efd589be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb57ffce554aa7f548dd208f325015109742dcc00c91667d33d1f25efd589be->enter($__internal_9fb57ffce554aa7f548dd208f325015109742dcc00c91667d33d1f25efd589be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1a0353d32efa067d399ada094f67412ed94fed21fa9bd15184b73de6bd4c4f->leave($__internal_7f1a0353d32efa067d399ada094f67412ed94fed21fa9bd15184b73de6bd4c4f_prof);

        
        $__internal_9fb57ffce554aa7f548dd208f325015109742dcc00c91667d33d1f25efd589be->leave($__internal_9fb57ffce554aa7f548dd208f325015109742dcc00c91667d33d1f25efd589be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b536ee3849d88f32d90c3f9e4f9d047dd8c106ef164e06413553f2e66883cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b536ee3849d88f32d90c3f9e4f9d047dd8c106ef164e06413553f2e66883cd9->enter($__internal_6b536ee3849d88f32d90c3f9e4f9d047dd8c106ef164e06413553f2e66883cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ccad76f2b347066057f3c1308a02bcf3ec0fb1d0f66468135a040e55f03f7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccad76f2b347066057f3c1308a02bcf3ec0fb1d0f66468135a040e55f03f7f2->enter($__internal_3ccad76f2b347066057f3c1308a02bcf3ec0fb1d0f66468135a040e55f03f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3ccad76f2b347066057f3c1308a02bcf3ec0fb1d0f66468135a040e55f03f7f2->leave($__internal_3ccad76f2b347066057f3c1308a02bcf3ec0fb1d0f66468135a040e55f03f7f2_prof);

        
        $__internal_6b536ee3849d88f32d90c3f9e4f9d047dd8c106ef164e06413553f2e66883cd9->leave($__internal_6b536ee3849d88f32d90c3f9e4f9d047dd8c106ef164e06413553f2e66883cd9_prof);

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
{% endblock %}", "SitePublic/index.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/SitePublic/index.html.twig");
    }
}
