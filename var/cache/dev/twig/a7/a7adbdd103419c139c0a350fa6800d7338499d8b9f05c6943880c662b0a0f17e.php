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
        $__internal_db905c77e3c4eaa5540fbfc5a22e2f71da15e23e3012cdb0bcfdb5cec632272d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db905c77e3c4eaa5540fbfc5a22e2f71da15e23e3012cdb0bcfdb5cec632272d->enter($__internal_db905c77e3c4eaa5540fbfc5a22e2f71da15e23e3012cdb0bcfdb5cec632272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $__internal_8cafa13b91fcf7ee2fc1be4f943ffaac4a566732458d66309a38b8739ab98ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cafa13b91fcf7ee2fc1be4f943ffaac4a566732458d66309a38b8739ab98ac9->enter($__internal_8cafa13b91fcf7ee2fc1be4f943ffaac4a566732458d66309a38b8739ab98ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche_spectacle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db905c77e3c4eaa5540fbfc5a22e2f71da15e23e3012cdb0bcfdb5cec632272d->leave($__internal_db905c77e3c4eaa5540fbfc5a22e2f71da15e23e3012cdb0bcfdb5cec632272d_prof);

        
        $__internal_8cafa13b91fcf7ee2fc1be4f943ffaac4a566732458d66309a38b8739ab98ac9->leave($__internal_8cafa13b91fcf7ee2fc1be4f943ffaac4a566732458d66309a38b8739ab98ac9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0578937d32f2fc4babccc6aae2d67f62e9345eecf8182f9e6f4e5cbb8c552bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0578937d32f2fc4babccc6aae2d67f62e9345eecf8182f9e6f4e5cbb8c552bd->enter($__internal_e0578937d32f2fc4babccc6aae2d67f62e9345eecf8182f9e6f4e5cbb8c552bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4931984a0bdfbb68592eb25eff01f368cabb2311305db4a24a71e794e62d90e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4931984a0bdfbb68592eb25eff01f368cabb2311305db4a24a71e794e62d90e2->enter($__internal_4931984a0bdfbb68592eb25eff01f368cabb2311305db4a24a71e794e62d90e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


            
<!-- Fiche spectacle -->

                                    
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\" style=\"color:black;border:1px solid black; \">
        <h1>TITRE SPECTACLE</h1>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\" style=\"color:black;border:1px solid black; text-align: center;  \">
        <h1>TRAILER</h1>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\" style=\"color:black; border:1px solid black; \">
        <h1>AFFICHES</h1>
    </div>
    
    <div class=\"col\" style =\"color:black; border:1px solid black; \">
      <h1>STYLE/SOUS STYLE/RÉSUMÉ SPECTACLE</h1>
    </div>
    
    <div class=\"col\" style =\"color:black; border:1px solid black; \">
      <h1>NOM THEATRE<br/>
       LIEU & MAPS<br/>
        NOM DE LA SALLE<br/>
        NB DE PLACES</h1>
    </div>   
  </div>

    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <h1>Séances dispo & dates-heures</h1>
        </div>
        <div class=\"col-12 col-md-auto\" style =\"color:black; border:1px solid black; \">
            <h1>Moyens de paiement<h1>
        </div>
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <button type=\"button\" class=\"btn btn-deep-orange\">Ajouter aux favoris</button>
            <button type=\"button\" class=\"btn btn-deep-orange\">AJouter au panier</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\" style =\"color:black; border:1px solid black; \">
            <h1>1 of 3</h1>
        </div>
        <div class=\"col-12 col-md-auto\" style =\"color:black; border:1px solid black; \">
            <h1>Variable width content</h1>
        </div>
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <h1>3 of 3</h1>
        </div>
    </div>


</div>
                                    



                                    
            



                
<!-- Fiche spectacle -->
               
    
";
        
        $__internal_4931984a0bdfbb68592eb25eff01f368cabb2311305db4a24a71e794e62d90e2->leave($__internal_4931984a0bdfbb68592eb25eff01f368cabb2311305db4a24a71e794e62d90e2_prof);

        
        $__internal_e0578937d32f2fc4babccc6aae2d67f62e9345eecf8182f9e6f4e5cbb8c552bd->leave($__internal_e0578937d32f2fc4babccc6aae2d67f62e9345eecf8182f9e6f4e5cbb8c552bd_prof);

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

                                    
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\" style=\"color:black;border:1px solid black; \">
        <h1>TITRE SPECTACLE</h1>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\" style=\"color:black;border:1px solid black; text-align: center;  \">
        <h1>TRAILER</h1>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\" style=\"color:black; border:1px solid black; \">
        <h1>AFFICHES</h1>
    </div>
    
    <div class=\"col\" style =\"color:black; border:1px solid black; \">
      <h1>STYLE/SOUS STYLE/RÉSUMÉ SPECTACLE</h1>
    </div>
    
    <div class=\"col\" style =\"color:black; border:1px solid black; \">
      <h1>NOM THEATRE<br/>
       LIEU & MAPS<br/>
        NOM DE LA SALLE<br/>
        NB DE PLACES</h1>
    </div>   
  </div>

    <div class=\"row justify-content-md-center\">
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <h1>Séances dispo & dates-heures</h1>
        </div>
        <div class=\"col-12 col-md-auto\" style =\"color:black; border:1px solid black; \">
            <h1>Moyens de paiement<h1>
        </div>
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <button type=\"button\" class=\"btn btn-deep-orange\">Ajouter aux favoris</button>
            <button type=\"button\" class=\"btn btn-deep-orange\">AJouter au panier</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col\" style =\"color:black; border:1px solid black; \">
            <h1>1 of 3</h1>
        </div>
        <div class=\"col-12 col-md-auto\" style =\"color:black; border:1px solid black; \">
            <h1>Variable width content</h1>
        </div>
        <div class=\"col col-lg-2\" style =\"color:black; border:1px solid black; \">
            <h1>3 of 3</h1>
        </div>
    </div>


</div>
                                    



                                    
            



                
<!-- Fiche spectacle -->
               
    
{% endblock %}    ", "fiche_spectacle.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/fiche_spectacle.html.twig");
    }
}
