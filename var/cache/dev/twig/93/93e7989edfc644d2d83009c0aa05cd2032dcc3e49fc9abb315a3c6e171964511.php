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
        $__internal_bee66422ebcf7cc7e5424d61d52fe2c32acdef7c0ba1ce5b2a62b49df393ec5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee66422ebcf7cc7e5424d61d52fe2c32acdef7c0ba1ce5b2a62b49df393ec5f->enter($__internal_bee66422ebcf7cc7e5424d61d52fe2c32acdef7c0ba1ce5b2a62b49df393ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_76fb32924333fee6f5136e678418ccd69dad6d9164b77166d79edd69284d8ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fb32924333fee6f5136e678418ccd69dad6d9164b77166d79edd69284d8ed8->enter($__internal_76fb32924333fee6f5136e678418ccd69dad6d9164b77166d79edd69284d8ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee66422ebcf7cc7e5424d61d52fe2c32acdef7c0ba1ce5b2a62b49df393ec5f->leave($__internal_bee66422ebcf7cc7e5424d61d52fe2c32acdef7c0ba1ce5b2a62b49df393ec5f_prof);

        
        $__internal_76fb32924333fee6f5136e678418ccd69dad6d9164b77166d79edd69284d8ed8->leave($__internal_76fb32924333fee6f5136e678418ccd69dad6d9164b77166d79edd69284d8ed8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5027bb40d01b9a8bc59349e1eea4942a461910014fb15bbfae93cba8afa22d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5027bb40d01b9a8bc59349e1eea4942a461910014fb15bbfae93cba8afa22d50->enter($__internal_5027bb40d01b9a8bc59349e1eea4942a461910014fb15bbfae93cba8afa22d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4262e25cb5c71c6f19977d17a9df9f696c8129c3091a45b54266bb43db30c5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4262e25cb5c71c6f19977d17a9df9f696c8129c3091a45b54266bb43db30c5bd->enter($__internal_4262e25cb5c71c6f19977d17a9df9f696c8129c3091a45b54266bb43db30c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4262e25cb5c71c6f19977d17a9df9f696c8129c3091a45b54266bb43db30c5bd->leave($__internal_4262e25cb5c71c6f19977d17a9df9f696c8129c3091a45b54266bb43db30c5bd_prof);

        
        $__internal_5027bb40d01b9a8bc59349e1eea4942a461910014fb15bbfae93cba8afa22d50->leave($__internal_5027bb40d01b9a8bc59349e1eea4942a461910014fb15bbfae93cba8afa22d50_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_feb811970c7475c0ca85e1d5abbee9e05caae7854a68d797cbc7394fad03336f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb811970c7475c0ca85e1d5abbee9e05caae7854a68d797cbc7394fad03336f->enter($__internal_feb811970c7475c0ca85e1d5abbee9e05caae7854a68d797cbc7394fad03336f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_577dd66535389207adcd6e7693c669654b92a7994cc907e0543d3658f5529c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577dd66535389207adcd6e7693c669654b92a7994cc907e0543d3658f5529c37->enter($__internal_577dd66535389207adcd6e7693c669654b92a7994cc907e0543d3658f5529c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_577dd66535389207adcd6e7693c669654b92a7994cc907e0543d3658f5529c37->leave($__internal_577dd66535389207adcd6e7693c669654b92a7994cc907e0543d3658f5529c37_prof);

        
        $__internal_feb811970c7475c0ca85e1d5abbee9e05caae7854a68d797cbc7394fad03336f->leave($__internal_feb811970c7475c0ca85e1d5abbee9e05caae7854a68d797cbc7394fad03336f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba0aa42cf61da00afadd15d1726c22e99ea1e791c01654dd6de2b49843c3fe88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0aa42cf61da00afadd15d1726c22e99ea1e791c01654dd6de2b49843c3fe88->enter($__internal_ba0aa42cf61da00afadd15d1726c22e99ea1e791c01654dd6de2b49843c3fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa589b3ec98ea3f55ec251b7016eb9db3a9f54ea26ff360bd0c95bbe38a58018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa589b3ec98ea3f55ec251b7016eb9db3a9f54ea26ff360bd0c95bbe38a58018->enter($__internal_fa589b3ec98ea3f55ec251b7016eb9db3a9f54ea26ff360bd0c95bbe38a58018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fa589b3ec98ea3f55ec251b7016eb9db3a9f54ea26ff360bd0c95bbe38a58018->leave($__internal_fa589b3ec98ea3f55ec251b7016eb9db3a9f54ea26ff360bd0c95bbe38a58018_prof);

        
        $__internal_ba0aa42cf61da00afadd15d1726c22e99ea1e791c01654dd6de2b49843c3fe88->leave($__internal_ba0aa42cf61da00afadd15d1726c22e99ea1e791c01654dd6de2b49843c3fe88_prof);

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
