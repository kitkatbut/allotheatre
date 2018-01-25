<?php

/* SitePublic/index.html.twig */
class __TwigTemplate_83222f9a4d4dfb13abf89aa48b4086a0a26c736f97f73bd9e143f3236fe5f7dc extends Twig_Template
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
        $__internal_ed04d317f2ddcb4935a1fb535aab5e88c5f940769f3a5123f5b7ab82a0f3e2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed04d317f2ddcb4935a1fb535aab5e88c5f940769f3a5123f5b7ab82a0f3e2a9->enter($__internal_ed04d317f2ddcb4935a1fb535aab5e88c5f940769f3a5123f5b7ab82a0f3e2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $__internal_ca287ef57e31d62ac06ef8ee2819ac7a1130304842eb7db1d387a378891613e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca287ef57e31d62ac06ef8ee2819ac7a1130304842eb7db1d387a378891613e5->enter($__internal_ca287ef57e31d62ac06ef8ee2819ac7a1130304842eb7db1d387a378891613e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed04d317f2ddcb4935a1fb535aab5e88c5f940769f3a5123f5b7ab82a0f3e2a9->leave($__internal_ed04d317f2ddcb4935a1fb535aab5e88c5f940769f3a5123f5b7ab82a0f3e2a9_prof);

        
        $__internal_ca287ef57e31d62ac06ef8ee2819ac7a1130304842eb7db1d387a378891613e5->leave($__internal_ca287ef57e31d62ac06ef8ee2819ac7a1130304842eb7db1d387a378891613e5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_132065f45b78a0f6a3c4df19a4278fe19fd24dfae8649dd4a2ba56bd6af33014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132065f45b78a0f6a3c4df19a4278fe19fd24dfae8649dd4a2ba56bd6af33014->enter($__internal_132065f45b78a0f6a3c4df19a4278fe19fd24dfae8649dd4a2ba56bd6af33014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_84b92781c19ac9bc18ea0c08e221bb3b37015ebc1444a72d2abcb305b193e7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b92781c19ac9bc18ea0c08e221bb3b37015ebc1444a72d2abcb305b193e7e3->enter($__internal_84b92781c19ac9bc18ea0c08e221bb3b37015ebc1444a72d2abcb305b193e7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_84b92781c19ac9bc18ea0c08e221bb3b37015ebc1444a72d2abcb305b193e7e3->leave($__internal_84b92781c19ac9bc18ea0c08e221bb3b37015ebc1444a72d2abcb305b193e7e3_prof);

        
        $__internal_132065f45b78a0f6a3c4df19a4278fe19fd24dfae8649dd4a2ba56bd6af33014->leave($__internal_132065f45b78a0f6a3c4df19a4278fe19fd24dfae8649dd4a2ba56bd6af33014_prof);

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
{% endblock %}", "SitePublic/index.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\SitePublic\\index.html.twig");
    }
}
