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
        $__internal_5446a81361f1c39b0e6de72a655738f88b57760694592ca5eff32b507c4ee1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5446a81361f1c39b0e6de72a655738f88b57760694592ca5eff32b507c4ee1b0->enter($__internal_5446a81361f1c39b0e6de72a655738f88b57760694592ca5eff32b507c4ee1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_5b75e5e64a5a6720194b5cb2216fabf3e6084c6a3adfe05678c4697e90336f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b75e5e64a5a6720194b5cb2216fabf3e6084c6a3adfe05678c4697e90336f72->enter($__internal_5b75e5e64a5a6720194b5cb2216fabf3e6084c6a3adfe05678c4697e90336f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5446a81361f1c39b0e6de72a655738f88b57760694592ca5eff32b507c4ee1b0->leave($__internal_5446a81361f1c39b0e6de72a655738f88b57760694592ca5eff32b507c4ee1b0_prof);

        
        $__internal_5b75e5e64a5a6720194b5cb2216fabf3e6084c6a3adfe05678c4697e90336f72->leave($__internal_5b75e5e64a5a6720194b5cb2216fabf3e6084c6a3adfe05678c4697e90336f72_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea503ca33daf760a67013e8e92a1fb8a57f88015a58db1756a93608600a57b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea503ca33daf760a67013e8e92a1fb8a57f88015a58db1756a93608600a57b15->enter($__internal_ea503ca33daf760a67013e8e92a1fb8a57f88015a58db1756a93608600a57b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_adb1e52a02517d850e92b3d25a5674832c0161b2c06ce1ccf19966f24ec6c449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb1e52a02517d850e92b3d25a5674832c0161b2c06ce1ccf19966f24ec6c449->enter($__internal_adb1e52a02517d850e92b3d25a5674832c0161b2c06ce1ccf19966f24ec6c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_adb1e52a02517d850e92b3d25a5674832c0161b2c06ce1ccf19966f24ec6c449->leave($__internal_adb1e52a02517d850e92b3d25a5674832c0161b2c06ce1ccf19966f24ec6c449_prof);

        
        $__internal_ea503ca33daf760a67013e8e92a1fb8a57f88015a58db1756a93608600a57b15->leave($__internal_ea503ca33daf760a67013e8e92a1fb8a57f88015a58db1756a93608600a57b15_prof);

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
