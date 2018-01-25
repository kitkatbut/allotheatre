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
        $__internal_f021e8c457f842fa5d1fc4ca8aa135b2eea64499dedd525c78271fbe853c24ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f021e8c457f842fa5d1fc4ca8aa135b2eea64499dedd525c78271fbe853c24ad->enter($__internal_f021e8c457f842fa5d1fc4ca8aa135b2eea64499dedd525c78271fbe853c24ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_85d7a83aa18f9cd6a617527c405c96c822fd7c8d4ce9813c668735f71d5b2cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d7a83aa18f9cd6a617527c405c96c822fd7c8d4ce9813c668735f71d5b2cd3->enter($__internal_85d7a83aa18f9cd6a617527c405c96c822fd7c8d4ce9813c668735f71d5b2cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f021e8c457f842fa5d1fc4ca8aa135b2eea64499dedd525c78271fbe853c24ad->leave($__internal_f021e8c457f842fa5d1fc4ca8aa135b2eea64499dedd525c78271fbe853c24ad_prof);

        
        $__internal_85d7a83aa18f9cd6a617527c405c96c822fd7c8d4ce9813c668735f71d5b2cd3->leave($__internal_85d7a83aa18f9cd6a617527c405c96c822fd7c8d4ce9813c668735f71d5b2cd3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_826315425cb6b7bd016b67b14147efa874a3afb4ef82edfa6a74e79660bf4c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826315425cb6b7bd016b67b14147efa874a3afb4ef82edfa6a74e79660bf4c69->enter($__internal_826315425cb6b7bd016b67b14147efa874a3afb4ef82edfa6a74e79660bf4c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a03c6dac16a6b9be304b994327bc64f7d4c0f8286305f97f9fae71ce34cf75a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03c6dac16a6b9be304b994327bc64f7d4c0f8286305f97f9fae71ce34cf75a5->enter($__internal_a03c6dac16a6b9be304b994327bc64f7d4c0f8286305f97f9fae71ce34cf75a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a03c6dac16a6b9be304b994327bc64f7d4c0f8286305f97f9fae71ce34cf75a5->leave($__internal_a03c6dac16a6b9be304b994327bc64f7d4c0f8286305f97f9fae71ce34cf75a5_prof);

        
        $__internal_826315425cb6b7bd016b67b14147efa874a3afb4ef82edfa6a74e79660bf4c69->leave($__internal_826315425cb6b7bd016b67b14147efa874a3afb4ef82edfa6a74e79660bf4c69_prof);

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
