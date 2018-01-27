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
        $__internal_6c506ae6310ce86653f873264e8a5d33fac08e77b27532cfe66e6e88694f92ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c506ae6310ce86653f873264e8a5d33fac08e77b27532cfe66e6e88694f92ed->enter($__internal_6c506ae6310ce86653f873264e8a5d33fac08e77b27532cfe66e6e88694f92ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_e242922aac5756a4bf44e4dbd67c8a717e123bf3918bb307a69573327d28fb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e242922aac5756a4bf44e4dbd67c8a717e123bf3918bb307a69573327d28fb2c->enter($__internal_e242922aac5756a4bf44e4dbd67c8a717e123bf3918bb307a69573327d28fb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c506ae6310ce86653f873264e8a5d33fac08e77b27532cfe66e6e88694f92ed->leave($__internal_6c506ae6310ce86653f873264e8a5d33fac08e77b27532cfe66e6e88694f92ed_prof);

        
        $__internal_e242922aac5756a4bf44e4dbd67c8a717e123bf3918bb307a69573327d28fb2c->leave($__internal_e242922aac5756a4bf44e4dbd67c8a717e123bf3918bb307a69573327d28fb2c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fb71234a9126a442ae2ca8c6bc26b2571946570617c2612ff6ffc52b2321dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb71234a9126a442ae2ca8c6bc26b2571946570617c2612ff6ffc52b2321dc9->enter($__internal_5fb71234a9126a442ae2ca8c6bc26b2571946570617c2612ff6ffc52b2321dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83e4e9bcc3ad75d3409ad1a5e4adfd58efdbb0ea0a72afbe6b286dad159f9970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e4e9bcc3ad75d3409ad1a5e4adfd58efdbb0ea0a72afbe6b286dad159f9970->enter($__internal_83e4e9bcc3ad75d3409ad1a5e4adfd58efdbb0ea0a72afbe6b286dad159f9970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"grid\">

  <!--<form action=\"https://httpbin.org/post\" method=\"POST\" class=\"form login\">-->
   <!-- <form action=\"https://www.netflix.com/\" method=\"POST\" class=\"form login\"> -->
    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\" class=\"form login\">
    
     <div class=\"form__field\">
      <label for=\"username\"><span class=\"hidden\">Username</span></label>
      <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required>
    </div>

    <div class=\"form__field\">
      <label for=\"password\"><span class=\"hidden\">Password</span></label>
      <input id=\"password\" type=\"password\"  name=\"_password\" class=\"form__input\" required>
    </div>

    <div class=\"form__field\">
      <input type=\"submit\" value=\"Sign In\">
    </div>
     <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\" />
  </form>

  <p class=\"text--center\">Not a member? <a href=\"#\">Sign up now</a> <svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"assets/images/icons.svg#arrow-right\"></use></svg></p>

</div>


";
        
        $__internal_83e4e9bcc3ad75d3409ad1a5e4adfd58efdbb0ea0a72afbe6b286dad159f9970->leave($__internal_83e4e9bcc3ad75d3409ad1a5e4adfd58efdbb0ea0a72afbe6b286dad159f9970_prof);

        
        $__internal_5fb71234a9126a442ae2ca8c6bc26b2571946570617c2612ff6ffc52b2321dc9->leave($__internal_5fb71234a9126a442ae2ca8c6bc26b2571946570617c2612ff6ffc52b2321dc9_prof);

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
        return array (  85 => 28,  71 => 17,  64 => 13,  57 => 8,  51 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/connexion.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
{% if error %}
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"grid\">

  <!--<form action=\"https://httpbin.org/post\" method=\"POST\" class=\"form login\">-->
   <!-- <form action=\"https://www.netflix.com/\" method=\"POST\" class=\"form login\"> -->
    <form action=\"{{ path('login_check') }}\" method=\"POST\" class=\"form login\">
    
     <div class=\"form__field\">
      <label for=\"username\"><span class=\"hidden\">Username</span></label>
      <input id=\"username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" required>
    </div>

    <div class=\"form__field\">
      <label for=\"password\"><span class=\"hidden\">Password</span></label>
      <input id=\"password\" type=\"password\"  name=\"_password\" class=\"form__input\" required>
    </div>

    <div class=\"form__field\">
      <input type=\"submit\" value=\"Sign In\">
    </div>
     <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('profil') }}\" />
  </form>

  <p class=\"text--center\">Not a member? <a href=\"#\">Sign up now</a> <svg class=\"icon\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"assets/images/icons.svg#arrow-right\"></use></svg></p>

</div>


{% endblock %}
", "connexion.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\connexion.html.twig");
    }
}
