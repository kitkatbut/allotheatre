<?php

/* index.html.twig */
class __TwigTemplate_70bcb26dd99b37b6bf3143bbb0f2d448f5900004752878f99c9eda62d6fc79a8 extends Twig_Template
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
        $__internal_0b105212dfe45a9f31bd064cc0fd5ce9eb521b3b6dcdec50b7ba38c8eab81d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b105212dfe45a9f31bd064cc0fd5ce9eb521b3b6dcdec50b7ba38c8eab81d8a->enter($__internal_0b105212dfe45a9f31bd064cc0fd5ce9eb521b3b6dcdec50b7ba38c8eab81d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_7c242dd383e73e70cdc5cbdc490b51b6aa7708562a918189e4bc4d2e1f040d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c242dd383e73e70cdc5cbdc490b51b6aa7708562a918189e4bc4d2e1f040d2a->enter($__internal_7c242dd383e73e70cdc5cbdc490b51b6aa7708562a918189e4bc4d2e1f040d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b105212dfe45a9f31bd064cc0fd5ce9eb521b3b6dcdec50b7ba38c8eab81d8a->leave($__internal_0b105212dfe45a9f31bd064cc0fd5ce9eb521b3b6dcdec50b7ba38c8eab81d8a_prof);

        
        $__internal_7c242dd383e73e70cdc5cbdc490b51b6aa7708562a918189e4bc4d2e1f040d2a->leave($__internal_7c242dd383e73e70cdc5cbdc490b51b6aa7708562a918189e4bc4d2e1f040d2a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfcb614e5c70bfb1a06dd35bca234e87dfef91ee2e3c83d91bddba8dacca869f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcb614e5c70bfb1a06dd35bca234e87dfef91ee2e3c83d91bddba8dacca869f->enter($__internal_dfcb614e5c70bfb1a06dd35bca234e87dfef91ee2e3c83d91bddba8dacca869f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f3958a65ac6090c3e0232d34e899bd68dbf8d1259c470e60937ace45f2ffa48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3958a65ac6090c3e0232d34e899bd68dbf8d1259c470e60937ace45f2ffa48d->enter($__internal_f3958a65ac6090c3e0232d34e899bd68dbf8d1259c470e60937ace45f2ffa48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f3958a65ac6090c3e0232d34e899bd68dbf8d1259c470e60937ace45f2ffa48d->leave($__internal_f3958a65ac6090c3e0232d34e899bd68dbf8d1259c470e60937ace45f2ffa48d_prof);

        
        $__internal_dfcb614e5c70bfb1a06dd35bca234e87dfef91ee2e3c83d91bddba8dacca869f->leave($__internal_dfcb614e5c70bfb1a06dd35bca234e87dfef91ee2e3c83d91bddba8dacca869f_prof);

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
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\allotheatre\\templates\\index.html.twig");
    }
}
