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
        $__internal_d6b1fa25f3340595ca0a516cd7aca5abe7b06bbe269ada28b99494fe5f00f5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b1fa25f3340595ca0a516cd7aca5abe7b06bbe269ada28b99494fe5f00f5a4->enter($__internal_d6b1fa25f3340595ca0a516cd7aca5abe7b06bbe269ada28b99494fe5f00f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_f4cf609e8d7d485ee48c555b26d0b024fa61f508a290cb7de60f49550e5a3bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cf609e8d7d485ee48c555b26d0b024fa61f508a290cb7de60f49550e5a3bd0->enter($__internal_f4cf609e8d7d485ee48c555b26d0b024fa61f508a290cb7de60f49550e5a3bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b1fa25f3340595ca0a516cd7aca5abe7b06bbe269ada28b99494fe5f00f5a4->leave($__internal_d6b1fa25f3340595ca0a516cd7aca5abe7b06bbe269ada28b99494fe5f00f5a4_prof);

        
        $__internal_f4cf609e8d7d485ee48c555b26d0b024fa61f508a290cb7de60f49550e5a3bd0->leave($__internal_f4cf609e8d7d485ee48c555b26d0b024fa61f508a290cb7de60f49550e5a3bd0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d387ae9bee24f210b7176ad7ae43dbbf073bdbea617de9e502579d8ab9ed9967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d387ae9bee24f210b7176ad7ae43dbbf073bdbea617de9e502579d8ab9ed9967->enter($__internal_d387ae9bee24f210b7176ad7ae43dbbf073bdbea617de9e502579d8ab9ed9967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ad0b45a3b8bc6dcd83905cf15e29b981cc28940189d8f2b2930aaeaecf61d99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0b45a3b8bc6dcd83905cf15e29b981cc28940189d8f2b2930aaeaecf61d99a->enter($__internal_ad0b45a3b8bc6dcd83905cf15e29b981cc28940189d8f2b2930aaeaecf61d99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ad0b45a3b8bc6dcd83905cf15e29b981cc28940189d8f2b2930aaeaecf61d99a->leave($__internal_ad0b45a3b8bc6dcd83905cf15e29b981cc28940189d8f2b2930aaeaecf61d99a_prof);

        
        $__internal_d387ae9bee24f210b7176ad7ae43dbbf073bdbea617de9e502579d8ab9ed9967->leave($__internal_d387ae9bee24f210b7176ad7ae43dbbf073bdbea617de9e502579d8ab9ed9967_prof);

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
