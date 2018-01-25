<?php

/* number.html.twig */
class __TwigTemplate_f7beebdcdbe1f5082a7f49cdacf9d2da61be725a442bff78f1bdfd5f59f44092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e46c7417bef1799305994ccb57ae9126ce050c164a91a58b315448eb5d18ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e46c7417bef1799305994ccb57ae9126ce050c164a91a58b315448eb5d18ad3->enter($__internal_0e46c7417bef1799305994ccb57ae9126ce050c164a91a58b315448eb5d18ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "number.html.twig"));

        $__internal_2b8fe6d9075e973fdab9e1bc1cba1aea2f397745dd38580b961ffc993c3f8aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8fe6d9075e973fdab9e1bc1cba1aea2f397745dd38580b961ffc993c3f8aac->enter($__internal_2b8fe6d9075e973fdab9e1bc1cba1aea2f397745dd38580b961ffc993c3f8aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e46c7417bef1799305994ccb57ae9126ce050c164a91a58b315448eb5d18ad3->leave($__internal_0e46c7417bef1799305994ccb57ae9126ce050c164a91a58b315448eb5d18ad3_prof);

        
        $__internal_2b8fe6d9075e973fdab9e1bc1cba1aea2f397745dd38580b961ffc993c3f8aac->leave($__internal_2b8fe6d9075e973fdab9e1bc1cba1aea2f397745dd38580b961ffc993c3f8aac_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd38beaa879890b3a240b521530b5e874e12be1a8679b7598896b6c96dcbb291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd38beaa879890b3a240b521530b5e874e12be1a8679b7598896b6c96dcbb291->enter($__internal_cd38beaa879890b3a240b521530b5e874e12be1a8679b7598896b6c96dcbb291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5914f02a4915da18ba294489caa7931ee1de1b2b3f80f7dd6f6b061e8203dfe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5914f02a4915da18ba294489caa7931ee1de1b2b3f80f7dd6f6b061e8203dfe0->enter($__internal_5914f02a4915da18ba294489caa7931ee1de1b2b3f80f7dd6f6b061e8203dfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
    
";
        
        $__internal_5914f02a4915da18ba294489caa7931ee1de1b2b3f80f7dd6f6b061e8203dfe0->leave($__internal_5914f02a4915da18ba294489caa7931ee1de1b2b3f80f7dd6f6b061e8203dfe0_prof);

        
        $__internal_cd38beaa879890b3a240b521530b5e874e12be1a8679b7598896b6c96dcbb291->leave($__internal_cd38beaa879890b3a240b521530b5e874e12be1a8679b7598896b6c96dcbb291_prof);

    }

    public function getTemplateName()
    {
        return "number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/number.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
<h1>Your lucky number is {{ number }}</h1>
    
{% endblock %}    ", "number.html.twig", "/Applications/MAMP/htdocs/AlloTheatre/templates/number.html.twig");
    }
}
