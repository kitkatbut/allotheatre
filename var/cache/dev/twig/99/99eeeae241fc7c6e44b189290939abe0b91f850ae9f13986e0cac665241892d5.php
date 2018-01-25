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
        $__internal_f1970b5e6090f3a6a794766f88eddeb1d55f5de19f9cc8b1ca54ee61b8a51b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1970b5e6090f3a6a794766f88eddeb1d55f5de19f9cc8b1ca54ee61b8a51b2a->enter($__internal_f1970b5e6090f3a6a794766f88eddeb1d55f5de19f9cc8b1ca54ee61b8a51b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_f21186252237ac4d6a3367fb635c6cc61621df41c4a1d3ea276f5dc845ce6ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21186252237ac4d6a3367fb635c6cc61621df41c4a1d3ea276f5dc845ce6ab6->enter($__internal_f21186252237ac4d6a3367fb635c6cc61621df41c4a1d3ea276f5dc845ce6ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1970b5e6090f3a6a794766f88eddeb1d55f5de19f9cc8b1ca54ee61b8a51b2a->leave($__internal_f1970b5e6090f3a6a794766f88eddeb1d55f5de19f9cc8b1ca54ee61b8a51b2a_prof);

        
        $__internal_f21186252237ac4d6a3367fb635c6cc61621df41c4a1d3ea276f5dc845ce6ab6->leave($__internal_f21186252237ac4d6a3367fb635c6cc61621df41c4a1d3ea276f5dc845ce6ab6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b88d682aac4dc80c959ac55bcc622a6ba00829aafdb115e87c07330debb79ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88d682aac4dc80c959ac55bcc622a6ba00829aafdb115e87c07330debb79ea4->enter($__internal_b88d682aac4dc80c959ac55bcc622a6ba00829aafdb115e87c07330debb79ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bb1b9ad72c8e14f6b6d032a260cece1f29e50f7191590ba3c29b338fbf1f9147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1b9ad72c8e14f6b6d032a260cece1f29e50f7191590ba3c29b338fbf1f9147->enter($__internal_bb1b9ad72c8e14f6b6d032a260cece1f29e50f7191590ba3c29b338fbf1f9147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bb1b9ad72c8e14f6b6d032a260cece1f29e50f7191590ba3c29b338fbf1f9147->leave($__internal_bb1b9ad72c8e14f6b6d032a260cece1f29e50f7191590ba3c29b338fbf1f9147_prof);

        
        $__internal_b88d682aac4dc80c959ac55bcc622a6ba00829aafdb115e87c07330debb79ea4->leave($__internal_b88d682aac4dc80c959ac55bcc622a6ba00829aafdb115e87c07330debb79ea4_prof);

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
