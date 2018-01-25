<?php

/* connexion.html.twig */
class __TwigTemplate_d7fa0e45df2bf8befd21248325e3d03593d6e6785aaf9fb13c7a68791d9cfa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "connexion.html.twig", 2);
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
        $__internal_82eff20b3c216225fcd918de77a02344a7ec276d60631c4a34f176d5e0a1b72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82eff20b3c216225fcd918de77a02344a7ec276d60631c4a34f176d5e0a1b72b->enter($__internal_82eff20b3c216225fcd918de77a02344a7ec276d60631c4a34f176d5e0a1b72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_ef3267fcd621fabe3c2f499849399e6e8557fcc725e03f9c8535adc315981afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3267fcd621fabe3c2f499849399e6e8557fcc725e03f9c8535adc315981afd->enter($__internal_ef3267fcd621fabe3c2f499849399e6e8557fcc725e03f9c8535adc315981afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82eff20b3c216225fcd918de77a02344a7ec276d60631c4a34f176d5e0a1b72b->leave($__internal_82eff20b3c216225fcd918de77a02344a7ec276d60631c4a34f176d5e0a1b72b_prof);

        
        $__internal_ef3267fcd621fabe3c2f499849399e6e8557fcc725e03f9c8535adc315981afd->leave($__internal_ef3267fcd621fabe3c2f499849399e6e8557fcc725e03f9c8535adc315981afd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dddd6031b07cb8b98de80d4c78e7e085cd9e873e4f5869c223ea02acaab9f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dddd6031b07cb8b98de80d4c78e7e085cd9e873e4f5869c223ea02acaab9f8e->enter($__internal_0dddd6031b07cb8b98de80d4c78e7e085cd9e873e4f5869c223ea02acaab9f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bcc664f229e7424627fa4136d31d7b784a6ba6fcae7159a9eac8fc90d5f4803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcc664f229e7424627fa4136d31d7b784a6ba6fcae7159a9eac8fc90d5f4803->enter($__internal_8bcc664f229e7424627fa4136d31d7b784a6ba6fcae7159a9eac8fc90d5f4803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"grid\">

  <form action=\"https://httpbin.org/post\" method=\"POST\" class=\"form login\">

    <div class=\"form__field\">
      <label for=\"login__username\"><svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#user\"></use></svg><span class=\"hidden\">Username</span></label>
      <input id=\"login__username\" type=\"text\" name=\"username\" class=\"form__input\" placeholder=\"Username\" required>
    </div>

    <div class=\"form__field\">
      <label for=\"login__password\"><svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#lock\"></use></svg><span class=\"hidden\">Password</span></label>
      <input id=\"login__password\" type=\"password\" name=\"password\" class=\"form__input\" placeholder=\"Password\" required>
    </div>

    <div class=\"form__field\">
      <input type=\"submit\" value=\"Sign In\">
    </div>

  </form>

  <p class=\"text--center\">Not a member? <a href=\"#\">Sign up now</a> <svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"assets/images/icons.svg#arrow-right\"></use></svg></p>

</div>

<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icons\"><symbol id=\"arrow-right\" viewBox=\"0 0 1792 1792\"><path d=\"M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z\"/></symbol><symbol id=\"lock\" viewBox=\"0 0 1792 1792\"><path d=\"M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z\"/></symbol><symbol id=\"user\" viewBox=\"0 0 1792 1792\"><path d=\"M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z\"/></symbol></svg>


";
        
        $__internal_8bcc664f229e7424627fa4136d31d7b784a6ba6fcae7159a9eac8fc90d5f4803->leave($__internal_8bcc664f229e7424627fa4136d31d7b784a6ba6fcae7159a9eac8fc90d5f4803_prof);

        
        $__internal_0dddd6031b07cb8b98de80d4c78e7e085cd9e873e4f5869c223ea02acaab9f8e->leave($__internal_0dddd6031b07cb8b98de80d4c78e7e085cd9e873e4f5869c223ea02acaab9f8e_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
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
        return new Twig_Source("{# templates/connexion.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}

<div class=\"grid\">

  <form action=\"https://httpbin.org/post\" method=\"POST\" class=\"form login\">

    <div class=\"form__field\">
      <label for=\"login__username\"><svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#user\"></use></svg><span class=\"hidden\">Username</span></label>
      <input id=\"login__username\" type=\"text\" name=\"username\" class=\"form__input\" placeholder=\"Username\" required>
    </div>

    <div class=\"form__field\">
      <label for=\"login__password\"><svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#lock\"></use></svg><span class=\"hidden\">Password</span></label>
      <input id=\"login__password\" type=\"password\" name=\"password\" class=\"form__input\" placeholder=\"Password\" required>
    </div>

    <div class=\"form__field\">
      <input type=\"submit\" value=\"Sign In\">
    </div>

  </form>

  <p class=\"text--center\">Not a member? <a href=\"#\">Sign up now</a> <svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"assets/images/icons.svg#arrow-right\"></use></svg></p>

</div>

<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icons\"><symbol id=\"arrow-right\" viewBox=\"0 0 1792 1792\"><path d=\"M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z\"/></symbol><symbol id=\"lock\" viewBox=\"0 0 1792 1792\"><path d=\"M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z\"/></symbol><symbol id=\"user\" viewBox=\"0 0 1792 1792\"><path d=\"M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z\"/></symbol></svg>


{% endblock %}
", "connexion.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\connexion.html.twig");
    }
}
