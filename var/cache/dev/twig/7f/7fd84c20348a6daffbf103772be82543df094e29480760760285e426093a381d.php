<?php

/* nav.html.twig */
class __TwigTemplate_2f697db1a8599fcab2434382403c8ccc59b285dabe53561906b71aba19525f71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nav.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0421225dac648f0b9f02ee0ef6592deafc6c4bfeeefeaa111fbe1659f5ae05cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0421225dac648f0b9f02ee0ef6592deafc6c4bfeeefeaa111fbe1659f5ae05cb->enter($__internal_0421225dac648f0b9f02ee0ef6592deafc6c4bfeeefeaa111fbe1659f5ae05cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_039d1d0f489a9e14c35e972ec2f21a0b0bae7d7f96ad2a73fd5b656dffa670cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039d1d0f489a9e14c35e972ec2f21a0b0bae7d7f96ad2a73fd5b656dffa670cb->enter($__internal_039d1d0f489a9e14c35e972ec2f21a0b0bae7d7f96ad2a73fd5b656dffa670cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0421225dac648f0b9f02ee0ef6592deafc6c4bfeeefeaa111fbe1659f5ae05cb->leave($__internal_0421225dac648f0b9f02ee0ef6592deafc6c4bfeeefeaa111fbe1659f5ae05cb_prof);

        
        $__internal_039d1d0f489a9e14c35e972ec2f21a0b0bae7d7f96ad2a73fd5b656dffa670cb->leave($__internal_039d1d0f489a9e14c35e972ec2f21a0b0bae7d7f96ad2a73fd5b656dffa670cb_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e7d0dffa7c9fb54edee328eda3e53e7226511dac7a713bf5b8b2b79cd4fecb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d0dffa7c9fb54edee328eda3e53e7226511dac7a713bf5b8b2b79cd4fecb1a->enter($__internal_e7d0dffa7c9fb54edee328eda3e53e7226511dac7a713bf5b8b2b79cd4fecb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a8f35bb3d4bec6aa3f63dba56e169782f0d9ad22ef8df564746a331871e289e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f35bb3d4bec6aa3f63dba56e169782f0d9ad22ef8df564746a331871e289e5->enter($__internal_a8f35bb3d4bec6aa3f63dba56e169782f0d9ad22ef8df564746a331871e289e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo " <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
";
        
        $__internal_a8f35bb3d4bec6aa3f63dba56e169782f0d9ad22ef8df564746a331871e289e5->leave($__internal_a8f35bb3d4bec6aa3f63dba56e169782f0d9ad22ef8df564746a331871e289e5_prof);

        
        $__internal_e7d0dffa7c9fb54edee328eda3e53e7226511dac7a713bf5b8b2b79cd4fecb1a->leave($__internal_e7d0dffa7c9fb54edee328eda3e53e7226511dac7a713bf5b8b2b79cd4fecb1a_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 
{% block nav %}
 <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
{% endblock %}
", "nav.html.twig", "/Applications/MAMP/htdocs/AlloTheatre/templates/nav.html.twig");
    }
}
