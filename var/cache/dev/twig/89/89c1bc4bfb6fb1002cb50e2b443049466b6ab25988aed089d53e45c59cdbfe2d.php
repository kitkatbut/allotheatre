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
        $__internal_caf856561245a87821e2341883522999c65fbcb7dffdb47fe18ba1339ec95a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf856561245a87821e2341883522999c65fbcb7dffdb47fe18ba1339ec95a19->enter($__internal_caf856561245a87821e2341883522999c65fbcb7dffdb47fe18ba1339ec95a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_d7da094b5924667aed9dcb4cf31b8ae917bae0382b1cb4ba86abca83215e4f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7da094b5924667aed9dcb4cf31b8ae917bae0382b1cb4ba86abca83215e4f4b->enter($__internal_d7da094b5924667aed9dcb4cf31b8ae917bae0382b1cb4ba86abca83215e4f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf856561245a87821e2341883522999c65fbcb7dffdb47fe18ba1339ec95a19->leave($__internal_caf856561245a87821e2341883522999c65fbcb7dffdb47fe18ba1339ec95a19_prof);

        
        $__internal_d7da094b5924667aed9dcb4cf31b8ae917bae0382b1cb4ba86abca83215e4f4b->leave($__internal_d7da094b5924667aed9dcb4cf31b8ae917bae0382b1cb4ba86abca83215e4f4b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac52c8f2e052968bbc721603597949aa5479a862a332c0733784777f915d1ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac52c8f2e052968bbc721603597949aa5479a862a332c0733784777f915d1ad4->enter($__internal_ac52c8f2e052968bbc721603597949aa5479a862a332c0733784777f915d1ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3a7a51fac0694ed539eeab60d1d46ed5cb6de017611429d18f635e89698ec001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7a51fac0694ed539eeab60d1d46ed5cb6de017611429d18f635e89698ec001->enter($__internal_3a7a51fac0694ed539eeab60d1d46ed5cb6de017611429d18f635e89698ec001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3a7a51fac0694ed539eeab60d1d46ed5cb6de017611429d18f635e89698ec001->leave($__internal_3a7a51fac0694ed539eeab60d1d46ed5cb6de017611429d18f635e89698ec001_prof);

        
        $__internal_ac52c8f2e052968bbc721603597949aa5479a862a332c0733784777f915d1ad4->leave($__internal_ac52c8f2e052968bbc721603597949aa5479a862a332c0733784777f915d1ad4_prof);

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
