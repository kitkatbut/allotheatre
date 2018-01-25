<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da225b048552c58cbbe10916ad9d6902f95376c8244fabaa0328ec107427c308 extends Twig_Template
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
        $__internal_13c2158a8f7fb0aa82e5426704c5c72008b3663b4f8872dcc88804ef994894e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c2158a8f7fb0aa82e5426704c5c72008b3663b4f8872dcc88804ef994894e0->enter($__internal_13c2158a8f7fb0aa82e5426704c5c72008b3663b4f8872dcc88804ef994894e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_505cbc89fbb2494e65e65c7ff8c87759121c1187e0998ac809ac2cd6fa178bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505cbc89fbb2494e65e65c7ff8c87759121c1187e0998ac809ac2cd6fa178bb6->enter($__internal_505cbc89fbb2494e65e65c7ff8c87759121c1187e0998ac809ac2cd6fa178bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13c2158a8f7fb0aa82e5426704c5c72008b3663b4f8872dcc88804ef994894e0->leave($__internal_13c2158a8f7fb0aa82e5426704c5c72008b3663b4f8872dcc88804ef994894e0_prof);

        
        $__internal_505cbc89fbb2494e65e65c7ff8c87759121c1187e0998ac809ac2cd6fa178bb6->leave($__internal_505cbc89fbb2494e65e65c7ff8c87759121c1187e0998ac809ac2cd6fa178bb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9168978c20e58b1ed464ec8faf43dfeba5c6015904910c4da62c8661da39638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9168978c20e58b1ed464ec8faf43dfeba5c6015904910c4da62c8661da39638->enter($__internal_b9168978c20e58b1ed464ec8faf43dfeba5c6015904910c4da62c8661da39638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7dcb5c04fcf5e2cf63c43d6f19c71f21d683b4193dcb09b2b711032a35d97be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcb5c04fcf5e2cf63c43d6f19c71f21d683b4193dcb09b2b711032a35d97be3->enter($__internal_7dcb5c04fcf5e2cf63c43d6f19c71f21d683b4193dcb09b2b711032a35d97be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7dcb5c04fcf5e2cf63c43d6f19c71f21d683b4193dcb09b2b711032a35d97be3->leave($__internal_7dcb5c04fcf5e2cf63c43d6f19c71f21d683b4193dcb09b2b711032a35d97be3_prof);

        
        $__internal_b9168978c20e58b1ed464ec8faf43dfeba5c6015904910c4da62c8661da39638->leave($__internal_b9168978c20e58b1ed464ec8faf43dfeba5c6015904910c4da62c8661da39638_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d4aa7db2b7d32894b155bb4c793570f887d3ad7624e43dba7ef5e6ed3cd781f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4aa7db2b7d32894b155bb4c793570f887d3ad7624e43dba7ef5e6ed3cd781f->enter($__internal_5d4aa7db2b7d32894b155bb4c793570f887d3ad7624e43dba7ef5e6ed3cd781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d31173d3500ec2f58f927856006785a764a63a141d4c2a6368209e1bbb62d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d31173d3500ec2f58f927856006785a764a63a141d4c2a6368209e1bbb62d62->enter($__internal_4d31173d3500ec2f58f927856006785a764a63a141d4c2a6368209e1bbb62d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4d31173d3500ec2f58f927856006785a764a63a141d4c2a6368209e1bbb62d62->leave($__internal_4d31173d3500ec2f58f927856006785a764a63a141d4c2a6368209e1bbb62d62_prof);

        
        $__internal_5d4aa7db2b7d32894b155bb4c793570f887d3ad7624e43dba7ef5e6ed3cd781f->leave($__internal_5d4aa7db2b7d32894b155bb4c793570f887d3ad7624e43dba7ef5e6ed3cd781f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e7f354aa4bfc3476b4bc188bed03f3780285c497615660ba85d4ebbd0ae888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e7f354aa4bfc3476b4bc188bed03f3780285c497615660ba85d4ebbd0ae888->enter($__internal_81e7f354aa4bfc3476b4bc188bed03f3780285c497615660ba85d4ebbd0ae888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4911482c7861a3f0412c58d32f1458482467e4da2089cd9b2686e07b4d1c5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4911482c7861a3f0412c58d32f1458482467e4da2089cd9b2686e07b4d1c5d1->enter($__internal_e4911482c7861a3f0412c58d32f1458482467e4da2089cd9b2686e07b4d1c5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e4911482c7861a3f0412c58d32f1458482467e4da2089cd9b2686e07b4d1c5d1->leave($__internal_e4911482c7861a3f0412c58d32f1458482467e4da2089cd9b2686e07b4d1c5d1_prof);

        
        $__internal_81e7f354aa4bfc3476b4bc188bed03f3780285c497615660ba85d4ebbd0ae888->leave($__internal_81e7f354aa4bfc3476b4bc188bed03f3780285c497615660ba85d4ebbd0ae888_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
