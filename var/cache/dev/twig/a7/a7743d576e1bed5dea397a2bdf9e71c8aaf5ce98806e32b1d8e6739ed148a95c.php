<?php

/* SitePublic/index.html.twig */
class __TwigTemplate_05e8e9801779fea8b54ce918fa1693cb49969319d8988c6d05d630ac16e650b8 extends Twig_Template
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
        $__internal_e6f0b7f51c3a61ad6743b0ffd38d892cb091d5b5db91d96e40a2ef0e9d68a5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f0b7f51c3a61ad6743b0ffd38d892cb091d5b5db91d96e40a2ef0e9d68a5bd->enter($__internal_e6f0b7f51c3a61ad6743b0ffd38d892cb091d5b5db91d96e40a2ef0e9d68a5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_aecc9b8116bc819ce00beba258b3ae54e54cd5e6826fd7385abe1326bee88e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecc9b8116bc819ce00beba258b3ae54e54cd5e6826fd7385abe1326bee88e38->enter($__internal_aecc9b8116bc819ce00beba258b3ae54e54cd5e6826fd7385abe1326bee88e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f0b7f51c3a61ad6743b0ffd38d892cb091d5b5db91d96e40a2ef0e9d68a5bd->leave($__internal_e6f0b7f51c3a61ad6743b0ffd38d892cb091d5b5db91d96e40a2ef0e9d68a5bd_prof);

        
        $__internal_aecc9b8116bc819ce00beba258b3ae54e54cd5e6826fd7385abe1326bee88e38->leave($__internal_aecc9b8116bc819ce00beba258b3ae54e54cd5e6826fd7385abe1326bee88e38_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b1b2560e89f5675aef71f0694941df27328d411f61927c617be913b905dfcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1b2560e89f5675aef71f0694941df27328d411f61927c617be913b905dfcae->enter($__internal_7b1b2560e89f5675aef71f0694941df27328d411f61927c617be913b905dfcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8084063af5b4fc3dc5a3472b53e85d600eaa31b190a8374e97deb2991c87693e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8084063af5b4fc3dc5a3472b53e85d600eaa31b190a8374e97deb2991c87693e->enter($__internal_8084063af5b4fc3dc5a3472b53e85d600eaa31b190a8374e97deb2991c87693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8084063af5b4fc3dc5a3472b53e85d600eaa31b190a8374e97deb2991c87693e->leave($__internal_8084063af5b4fc3dc5a3472b53e85d600eaa31b190a8374e97deb2991c87693e_prof);

        
        $__internal_7b1b2560e89f5675aef71f0694941df27328d411f61927c617be913b905dfcae->leave($__internal_7b1b2560e89f5675aef71f0694941df27328d411f61927c617be913b905dfcae_prof);

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
{% endblock %}", "SitePublic/index.html.twig", "C:\\xampp\\htdocs\\allotheatre\\templates\\SitePublic\\index.html.twig");
    }
}
