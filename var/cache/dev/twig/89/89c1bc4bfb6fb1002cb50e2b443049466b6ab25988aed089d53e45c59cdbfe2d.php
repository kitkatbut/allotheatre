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
        $__internal_df2469ce909b92f839b360ee44b211a7f8d16a0ceb278c20c5a99079ea19c52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2469ce909b92f839b360ee44b211a7f8d16a0ceb278c20c5a99079ea19c52a->enter($__internal_df2469ce909b92f839b360ee44b211a7f8d16a0ceb278c20c5a99079ea19c52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_46da949fac1750d7bff93a4ebd57bc558f2b8bff55c76f1edbdf58cf07ab03f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46da949fac1750d7bff93a4ebd57bc558f2b8bff55c76f1edbdf58cf07ab03f1->enter($__internal_46da949fac1750d7bff93a4ebd57bc558f2b8bff55c76f1edbdf58cf07ab03f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2469ce909b92f839b360ee44b211a7f8d16a0ceb278c20c5a99079ea19c52a->leave($__internal_df2469ce909b92f839b360ee44b211a7f8d16a0ceb278c20c5a99079ea19c52a_prof);

        
        $__internal_46da949fac1750d7bff93a4ebd57bc558f2b8bff55c76f1edbdf58cf07ab03f1->leave($__internal_46da949fac1750d7bff93a4ebd57bc558f2b8bff55c76f1edbdf58cf07ab03f1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c031678a53c51676dc00e5aebc1908d5bda04efb4dadb309d32871d56d33199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c031678a53c51676dc00e5aebc1908d5bda04efb4dadb309d32871d56d33199->enter($__internal_4c031678a53c51676dc00e5aebc1908d5bda04efb4dadb309d32871d56d33199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dcb6d7b5c791a39034c07ab1f6340e5faa8183e7081c770e1cba7d94e79046eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb6d7b5c791a39034c07ab1f6340e5faa8183e7081c770e1cba7d94e79046eb->enter($__internal_dcb6d7b5c791a39034c07ab1f6340e5faa8183e7081c770e1cba7d94e79046eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dcb6d7b5c791a39034c07ab1f6340e5faa8183e7081c770e1cba7d94e79046eb->leave($__internal_dcb6d7b5c791a39034c07ab1f6340e5faa8183e7081c770e1cba7d94e79046eb_prof);

        
        $__internal_4c031678a53c51676dc00e5aebc1908d5bda04efb4dadb309d32871d56d33199->leave($__internal_4c031678a53c51676dc00e5aebc1908d5bda04efb4dadb309d32871d56d33199_prof);

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
{% endblock %}", "index.html.twig", "/Applications/MAMP/htdocs/Allotheatre/templates/index.html.twig");
    }
}
