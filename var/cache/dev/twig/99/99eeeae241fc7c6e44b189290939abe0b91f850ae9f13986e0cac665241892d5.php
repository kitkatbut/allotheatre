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
        $__internal_a2b4f45b891fbfd51c1ecb31881a65d8f2284526a78e5de1da8415d17e3e1f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b4f45b891fbfd51c1ecb31881a65d8f2284526a78e5de1da8415d17e3e1f88->enter($__internal_a2b4f45b891fbfd51c1ecb31881a65d8f2284526a78e5de1da8415d17e3e1f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_de5a40876a13a4549f1b01ffa0a3ba63c5c172a2bdbabe9e9830efd5e47495b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5a40876a13a4549f1b01ffa0a3ba63c5c172a2bdbabe9e9830efd5e47495b4->enter($__internal_de5a40876a13a4549f1b01ffa0a3ba63c5c172a2bdbabe9e9830efd5e47495b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b4f45b891fbfd51c1ecb31881a65d8f2284526a78e5de1da8415d17e3e1f88->leave($__internal_a2b4f45b891fbfd51c1ecb31881a65d8f2284526a78e5de1da8415d17e3e1f88_prof);

        
        $__internal_de5a40876a13a4549f1b01ffa0a3ba63c5c172a2bdbabe9e9830efd5e47495b4->leave($__internal_de5a40876a13a4549f1b01ffa0a3ba63c5c172a2bdbabe9e9830efd5e47495b4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1058ef40b4d0ce3c099fd10c249c06266ef5a9f24e0e451c47ac4f462f3157eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1058ef40b4d0ce3c099fd10c249c06266ef5a9f24e0e451c47ac4f462f3157eb->enter($__internal_1058ef40b4d0ce3c099fd10c249c06266ef5a9f24e0e451c47ac4f462f3157eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5462509642fe039689019fe31022fb4aac1cdf1e68098cb918990378259645cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5462509642fe039689019fe31022fb4aac1cdf1e68098cb918990378259645cc->enter($__internal_5462509642fe039689019fe31022fb4aac1cdf1e68098cb918990378259645cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5462509642fe039689019fe31022fb4aac1cdf1e68098cb918990378259645cc->leave($__internal_5462509642fe039689019fe31022fb4aac1cdf1e68098cb918990378259645cc_prof);

        
        $__internal_1058ef40b4d0ce3c099fd10c249c06266ef5a9f24e0e451c47ac4f462f3157eb->leave($__internal_1058ef40b4d0ce3c099fd10c249c06266ef5a9f24e0e451c47ac4f462f3157eb_prof);

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
