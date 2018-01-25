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
        $__internal_ea83aeb86448cfcc8a7a76a970b4653804ab2160dd42648af92ff2ef37193b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea83aeb86448cfcc8a7a76a970b4653804ab2160dd42648af92ff2ef37193b12->enter($__internal_ea83aeb86448cfcc8a7a76a970b4653804ab2160dd42648af92ff2ef37193b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_79bfed88c83b6385172fbdc0f517f688d6efced4babbf5a91996b5197ca91a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bfed88c83b6385172fbdc0f517f688d6efced4babbf5a91996b5197ca91a39->enter($__internal_79bfed88c83b6385172fbdc0f517f688d6efced4babbf5a91996b5197ca91a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea83aeb86448cfcc8a7a76a970b4653804ab2160dd42648af92ff2ef37193b12->leave($__internal_ea83aeb86448cfcc8a7a76a970b4653804ab2160dd42648af92ff2ef37193b12_prof);

        
        $__internal_79bfed88c83b6385172fbdc0f517f688d6efced4babbf5a91996b5197ca91a39->leave($__internal_79bfed88c83b6385172fbdc0f517f688d6efced4babbf5a91996b5197ca91a39_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_093f66364e575946bcdd25bb2a76264a8d9590ee7794ddee2f8e47e659e8a301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093f66364e575946bcdd25bb2a76264a8d9590ee7794ddee2f8e47e659e8a301->enter($__internal_093f66364e575946bcdd25bb2a76264a8d9590ee7794ddee2f8e47e659e8a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33bf57ae318d267c18892a87a88e2a527505e37661902f53e77bcf94d7f750ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bf57ae318d267c18892a87a88e2a527505e37661902f53e77bcf94d7f750ca->enter($__internal_33bf57ae318d267c18892a87a88e2a527505e37661902f53e77bcf94d7f750ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_33bf57ae318d267c18892a87a88e2a527505e37661902f53e77bcf94d7f750ca->leave($__internal_33bf57ae318d267c18892a87a88e2a527505e37661902f53e77bcf94d7f750ca_prof);

        
        $__internal_093f66364e575946bcdd25bb2a76264a8d9590ee7794ddee2f8e47e659e8a301->leave($__internal_093f66364e575946bcdd25bb2a76264a8d9590ee7794ddee2f8e47e659e8a301_prof);

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
{% endblock %}", "SitePublic/index.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/SitePublic/index.html.twig");
    }
}
