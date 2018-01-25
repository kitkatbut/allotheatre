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
        $__internal_d95a62175744d87d848c012ffcfdab3fd26474622f96e033dbd456ef8b3d43e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95a62175744d87d848c012ffcfdab3fd26474622f96e033dbd456ef8b3d43e9->enter($__internal_d95a62175744d87d848c012ffcfdab3fd26474622f96e033dbd456ef8b3d43e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_33ea016ac016a16a69a89ed5e8ad668e54f8034f6ccb1a1911e48913f29f6a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ea016ac016a16a69a89ed5e8ad668e54f8034f6ccb1a1911e48913f29f6a98->enter($__internal_33ea016ac016a16a69a89ed5e8ad668e54f8034f6ccb1a1911e48913f29f6a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95a62175744d87d848c012ffcfdab3fd26474622f96e033dbd456ef8b3d43e9->leave($__internal_d95a62175744d87d848c012ffcfdab3fd26474622f96e033dbd456ef8b3d43e9_prof);

        
        $__internal_33ea016ac016a16a69a89ed5e8ad668e54f8034f6ccb1a1911e48913f29f6a98->leave($__internal_33ea016ac016a16a69a89ed5e8ad668e54f8034f6ccb1a1911e48913f29f6a98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1887134ae12b24200974eaad27329b0a1596a24a556a5dd6990656f07b58ec4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1887134ae12b24200974eaad27329b0a1596a24a556a5dd6990656f07b58ec4d->enter($__internal_1887134ae12b24200974eaad27329b0a1596a24a556a5dd6990656f07b58ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_280bb304cdeb1adcf04c0320699dc170349c7bfea2505b6af519a09911b96014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280bb304cdeb1adcf04c0320699dc170349c7bfea2505b6af519a09911b96014->enter($__internal_280bb304cdeb1adcf04c0320699dc170349c7bfea2505b6af519a09911b96014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_280bb304cdeb1adcf04c0320699dc170349c7bfea2505b6af519a09911b96014->leave($__internal_280bb304cdeb1adcf04c0320699dc170349c7bfea2505b6af519a09911b96014_prof);

        
        $__internal_1887134ae12b24200974eaad27329b0a1596a24a556a5dd6990656f07b58ec4d->leave($__internal_1887134ae12b24200974eaad27329b0a1596a24a556a5dd6990656f07b58ec4d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1646c257d1fe9730413c174c9b9cad1f246e00f52cbbe68a96a050c660a9c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1646c257d1fe9730413c174c9b9cad1f246e00f52cbbe68a96a050c660a9c62->enter($__internal_a1646c257d1fe9730413c174c9b9cad1f246e00f52cbbe68a96a050c660a9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfba97d9245c2af8cdf5d6ae1355c3f648d406d73e1ccab2d06047e95ddfc2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfba97d9245c2af8cdf5d6ae1355c3f648d406d73e1ccab2d06047e95ddfc2af->enter($__internal_cfba97d9245c2af8cdf5d6ae1355c3f648d406d73e1ccab2d06047e95ddfc2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cfba97d9245c2af8cdf5d6ae1355c3f648d406d73e1ccab2d06047e95ddfc2af->leave($__internal_cfba97d9245c2af8cdf5d6ae1355c3f648d406d73e1ccab2d06047e95ddfc2af_prof);

        
        $__internal_a1646c257d1fe9730413c174c9b9cad1f246e00f52cbbe68a96a050c660a9c62->leave($__internal_a1646c257d1fe9730413c174c9b9cad1f246e00f52cbbe68a96a050c660a9c62_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1c5202c26a36b0aeedc226389430ca62c9f6e22443730038c32b76822f62c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1c5202c26a36b0aeedc226389430ca62c9f6e22443730038c32b76822f62c6->enter($__internal_ca1c5202c26a36b0aeedc226389430ca62c9f6e22443730038c32b76822f62c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83ca1786234aa82ee6931772423060903518503b9260e13c53412b2b07b235c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ca1786234aa82ee6931772423060903518503b9260e13c53412b2b07b235c3->enter($__internal_83ca1786234aa82ee6931772423060903518503b9260e13c53412b2b07b235c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_83ca1786234aa82ee6931772423060903518503b9260e13c53412b2b07b235c3->leave($__internal_83ca1786234aa82ee6931772423060903518503b9260e13c53412b2b07b235c3_prof);

        
        $__internal_ca1c5202c26a36b0aeedc226389430ca62c9f6e22443730038c32b76822f62c6->leave($__internal_ca1c5202c26a36b0aeedc226389430ca62c9f6e22443730038c32b76822f62c6_prof);

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
