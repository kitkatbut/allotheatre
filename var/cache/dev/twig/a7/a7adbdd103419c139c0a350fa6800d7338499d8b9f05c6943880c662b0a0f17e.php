<?php

/* fiche_spectacle.html.twig */
class __TwigTemplate_3e26c69fe50d0ffee5b6f20680098554882526c280e956fee8e23ee41828021a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "fiche_spectacle.html.twig", 2);
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
        $__internal_e407df3312d3d4dfa1e20d9970a958ff529979472a860326cdc834bb569769f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e407df3312d3d4dfa1e20d9970a958ff529979472a860326cdc834bb569769f6->enter($__internal_e407df3312d3d4dfa1e20d9970a958ff529979472a860326cdc834bb569769f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $__internal_78c41a83fb16506b2b77daac65a9328c9e20acb70bb04263096f88308769807b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c41a83fb16506b2b77daac65a9328c9e20acb70bb04263096f88308769807b->enter($__internal_78c41a83fb16506b2b77daac65a9328c9e20acb70bb04263096f88308769807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e407df3312d3d4dfa1e20d9970a958ff529979472a860326cdc834bb569769f6->leave($__internal_e407df3312d3d4dfa1e20d9970a958ff529979472a860326cdc834bb569769f6_prof);

        
        $__internal_78c41a83fb16506b2b77daac65a9328c9e20acb70bb04263096f88308769807b->leave($__internal_78c41a83fb16506b2b77daac65a9328c9e20acb70bb04263096f88308769807b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_213397ffe9f55d20d454a708b8cb2fcf21324d33b2799d3e4eb7dd909d4d177d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213397ffe9f55d20d454a708b8cb2fcf21324d33b2799d3e4eb7dd909d4d177d->enter($__internal_213397ffe9f55d20d454a708b8cb2fcf21324d33b2799d3e4eb7dd909d4d177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b417648794fe75d0d56f5705e1eb690b3dabcb1f55cb75d02a28e49f06ae8f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b417648794fe75d0d56f5705e1eb690b3dabcb1f55cb75d02a28e49f06ae8f5c->enter($__internal_b417648794fe75d0d56f5705e1eb690b3dabcb1f55cb75d02a28e49f06ae8f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


            
<!-- Fiche spectacle -->


<div class=\"example z-depth-4\">
     <h1>FICHE SPECTACLE</h1>
</div>


<div class=\"w-100 p-3\" style=\"background-color: #eee;\">
    TRAILER ICI    
</div>                 


<div class=\"d-flex justify-content-start\">
    AFFICHE ICI
</div>
<div class=\"d-flex justify-content-end\">NOM DU THEATRE, MAPS, NOM DE LA SALLE, NOMBRE DE PLACE</div>
<div class=\"d-flex justify-content-center\">...</div>
<div class=\"d-flex justify-content-between\">...</div>
<div class=\"d-flex justify-content-around\">...</div>

                
<!-- Fiche spectacle -->
               
    
";
        
        $__internal_b417648794fe75d0d56f5705e1eb690b3dabcb1f55cb75d02a28e49f06ae8f5c->leave($__internal_b417648794fe75d0d56f5705e1eb690b3dabcb1f55cb75d02a28e49f06ae8f5c_prof);

        
        $__internal_213397ffe9f55d20d454a708b8cb2fcf21324d33b2799d3e4eb7dd909d4d177d->leave($__internal_213397ffe9f55d20d454a708b8cb2fcf21324d33b2799d3e4eb7dd909d4d177d_prof);

    }

    public function getTemplateName()
    {
        return "fiche_spectacle.html.twig";
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
        return new Twig_Source("{# templates/fiche_spectacle.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}



            
<!-- Fiche spectacle -->


<div class=\"example z-depth-4\">
     <h1>FICHE SPECTACLE</h1>
</div>


<div class=\"w-100 p-3\" style=\"background-color: #eee;\">
    TRAILER ICI    
</div>                 


<div class=\"d-flex justify-content-start\">
    AFFICHE ICI
</div>
<div class=\"d-flex justify-content-end\">NOM DU THEATRE, MAPS, NOM DE LA SALLE, NOMBRE DE PLACE</div>
<div class=\"d-flex justify-content-center\">...</div>
<div class=\"d-flex justify-content-between\">...</div>
<div class=\"d-flex justify-content-around\">...</div>

                
<!-- Fiche spectacle -->
               
    
{% endblock %}    ", "fiche_spectacle.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/fiche_spectacle.html.twig");
    }
}
