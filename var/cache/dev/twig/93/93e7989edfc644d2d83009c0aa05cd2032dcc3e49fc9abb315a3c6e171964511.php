<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa153a588c38f00292e73a0ea85ab003170326f68ffc78ec0901f3679a44e3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da2a222c3e7ce1ba493707726e52c71f09227c15af8df9ed00ae30d76fce9d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2a222c3e7ce1ba493707726e52c71f09227c15af8df9ed00ae30d76fce9d46->enter($__internal_da2a222c3e7ce1ba493707726e52c71f09227c15af8df9ed00ae30d76fce9d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_179ec21b91f612476fb94ab323750073c7fe00edbf00cc53a36127f255f45ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179ec21b91f612476fb94ab323750073c7fe00edbf00cc53a36127f255f45ea1->enter($__internal_179ec21b91f612476fb94ab323750073c7fe00edbf00cc53a36127f255f45ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2a222c3e7ce1ba493707726e52c71f09227c15af8df9ed00ae30d76fce9d46->leave($__internal_da2a222c3e7ce1ba493707726e52c71f09227c15af8df9ed00ae30d76fce9d46_prof);

        
        $__internal_179ec21b91f612476fb94ab323750073c7fe00edbf00cc53a36127f255f45ea1->leave($__internal_179ec21b91f612476fb94ab323750073c7fe00edbf00cc53a36127f255f45ea1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1d2110ec4e81079c36abb325aebc18a2b6f00451425e57ae78eecba5045ab38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d2110ec4e81079c36abb325aebc18a2b6f00451425e57ae78eecba5045ab38->enter($__internal_c1d2110ec4e81079c36abb325aebc18a2b6f00451425e57ae78eecba5045ab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_532d0c8212c970ab795f4e761c610ef726057c5c370d84787d342b5ef369900e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532d0c8212c970ab795f4e761c610ef726057c5c370d84787d342b5ef369900e->enter($__internal_532d0c8212c970ab795f4e761c610ef726057c5c370d84787d342b5ef369900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_532d0c8212c970ab795f4e761c610ef726057c5c370d84787d342b5ef369900e->leave($__internal_532d0c8212c970ab795f4e761c610ef726057c5c370d84787d342b5ef369900e_prof);

        
        $__internal_c1d2110ec4e81079c36abb325aebc18a2b6f00451425e57ae78eecba5045ab38->leave($__internal_c1d2110ec4e81079c36abb325aebc18a2b6f00451425e57ae78eecba5045ab38_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4e35df8f2487b991d761c448dda65428a31ab75ce4ae593c164e730893e7d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e35df8f2487b991d761c448dda65428a31ab75ce4ae593c164e730893e7d89->enter($__internal_b4e35df8f2487b991d761c448dda65428a31ab75ce4ae593c164e730893e7d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_beed9ea4963b526daae132490f0623e3331ce0e16e6d95eefd6d36ca805b2445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beed9ea4963b526daae132490f0623e3331ce0e16e6d95eefd6d36ca805b2445->enter($__internal_beed9ea4963b526daae132490f0623e3331ce0e16e6d95eefd6d36ca805b2445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_beed9ea4963b526daae132490f0623e3331ce0e16e6d95eefd6d36ca805b2445->leave($__internal_beed9ea4963b526daae132490f0623e3331ce0e16e6d95eefd6d36ca805b2445_prof);

        
        $__internal_b4e35df8f2487b991d761c448dda65428a31ab75ce4ae593c164e730893e7d89->leave($__internal_b4e35df8f2487b991d761c448dda65428a31ab75ce4ae593c164e730893e7d89_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d55a2d1d9d3e6026188c14e9aa4ca53f80cf091a2cbfbdf87c21c03d91f31ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d55a2d1d9d3e6026188c14e9aa4ca53f80cf091a2cbfbdf87c21c03d91f31ff->enter($__internal_3d55a2d1d9d3e6026188c14e9aa4ca53f80cf091a2cbfbdf87c21c03d91f31ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8751f31c5b92f90fe771b484a35f9b822d460312421cb6771dde91a7150946d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8751f31c5b92f90fe771b484a35f9b822d460312421cb6771dde91a7150946d5->enter($__internal_8751f31c5b92f90fe771b484a35f9b822d460312421cb6771dde91a7150946d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8751f31c5b92f90fe771b484a35f9b822d460312421cb6771dde91a7150946d5->leave($__internal_8751f31c5b92f90fe771b484a35f9b822d460312421cb6771dde91a7150946d5_prof);

        
        $__internal_3d55a2d1d9d3e6026188c14e9aa4ca53f80cf091a2cbfbdf87c21c03d91f31ff->leave($__internal_3d55a2d1d9d3e6026188c14e9aa4ca53f80cf091a2cbfbdf87c21c03d91f31ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
