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
        $__internal_7ce35ce1aca78230c0bb7c6dc47c4ba1cbd7c719e3069fab5a52400cbee548a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce35ce1aca78230c0bb7c6dc47c4ba1cbd7c719e3069fab5a52400cbee548a3->enter($__internal_7ce35ce1aca78230c0bb7c6dc47c4ba1cbd7c719e3069fab5a52400cbee548a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_9c9ee144e61909c0f3f01a8c150a5a4cc0cf88f26063f6f9f14ae4100035c720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9ee144e61909c0f3f01a8c150a5a4cc0cf88f26063f6f9f14ae4100035c720->enter($__internal_9c9ee144e61909c0f3f01a8c150a5a4cc0cf88f26063f6f9f14ae4100035c720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce35ce1aca78230c0bb7c6dc47c4ba1cbd7c719e3069fab5a52400cbee548a3->leave($__internal_7ce35ce1aca78230c0bb7c6dc47c4ba1cbd7c719e3069fab5a52400cbee548a3_prof);

        
        $__internal_9c9ee144e61909c0f3f01a8c150a5a4cc0cf88f26063f6f9f14ae4100035c720->leave($__internal_9c9ee144e61909c0f3f01a8c150a5a4cc0cf88f26063f6f9f14ae4100035c720_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7cd250b4d8ea08e6cf38dc27578b622157d2e5028b00eb546454b1ed9844fe90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd250b4d8ea08e6cf38dc27578b622157d2e5028b00eb546454b1ed9844fe90->enter($__internal_7cd250b4d8ea08e6cf38dc27578b622157d2e5028b00eb546454b1ed9844fe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c6ec80c8c29f3b09dc736bd079af7e45f4583d8211b58b4c94869b59fc59e46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ec80c8c29f3b09dc736bd079af7e45f4583d8211b58b4c94869b59fc59e46a->enter($__internal_c6ec80c8c29f3b09dc736bd079af7e45f4583d8211b58b4c94869b59fc59e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c6ec80c8c29f3b09dc736bd079af7e45f4583d8211b58b4c94869b59fc59e46a->leave($__internal_c6ec80c8c29f3b09dc736bd079af7e45f4583d8211b58b4c94869b59fc59e46a_prof);

        
        $__internal_7cd250b4d8ea08e6cf38dc27578b622157d2e5028b00eb546454b1ed9844fe90->leave($__internal_7cd250b4d8ea08e6cf38dc27578b622157d2e5028b00eb546454b1ed9844fe90_prof);

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
