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
        $__internal_e8ab6d47ec73234ffcdf405bad521ecd43a6e2001ca35de67b98514052bb082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ab6d47ec73234ffcdf405bad521ecd43a6e2001ca35de67b98514052bb082b->enter($__internal_e8ab6d47ec73234ffcdf405bad521ecd43a6e2001ca35de67b98514052bb082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0a44dcb31d4aec1dd73769420aabf4f46331add39a7cd7e624d9fc9250736cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a44dcb31d4aec1dd73769420aabf4f46331add39a7cd7e624d9fc9250736cfa->enter($__internal_0a44dcb31d4aec1dd73769420aabf4f46331add39a7cd7e624d9fc9250736cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ab6d47ec73234ffcdf405bad521ecd43a6e2001ca35de67b98514052bb082b->leave($__internal_e8ab6d47ec73234ffcdf405bad521ecd43a6e2001ca35de67b98514052bb082b_prof);

        
        $__internal_0a44dcb31d4aec1dd73769420aabf4f46331add39a7cd7e624d9fc9250736cfa->leave($__internal_0a44dcb31d4aec1dd73769420aabf4f46331add39a7cd7e624d9fc9250736cfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51c950dc749e54b0fe9f542acf05f6effe01395287d3b6a2300387b41a6e2e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c950dc749e54b0fe9f542acf05f6effe01395287d3b6a2300387b41a6e2e53->enter($__internal_51c950dc749e54b0fe9f542acf05f6effe01395287d3b6a2300387b41a6e2e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c90b7f0145f6894669425156f3bee63f1d8f0ae8683ea0fee8f03430b7f6a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c90b7f0145f6894669425156f3bee63f1d8f0ae8683ea0fee8f03430b7f6a83->enter($__internal_9c90b7f0145f6894669425156f3bee63f1d8f0ae8683ea0fee8f03430b7f6a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9c90b7f0145f6894669425156f3bee63f1d8f0ae8683ea0fee8f03430b7f6a83->leave($__internal_9c90b7f0145f6894669425156f3bee63f1d8f0ae8683ea0fee8f03430b7f6a83_prof);

        
        $__internal_51c950dc749e54b0fe9f542acf05f6effe01395287d3b6a2300387b41a6e2e53->leave($__internal_51c950dc749e54b0fe9f542acf05f6effe01395287d3b6a2300387b41a6e2e53_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e457aff0a37848e51f7754782132300d9af0b4737fde6f7280e0db8362e81387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e457aff0a37848e51f7754782132300d9af0b4737fde6f7280e0db8362e81387->enter($__internal_e457aff0a37848e51f7754782132300d9af0b4737fde6f7280e0db8362e81387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9194c9c2d1c6daf6fe286c2b119487ef47314594cc08b90c448008cbe7d71bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9194c9c2d1c6daf6fe286c2b119487ef47314594cc08b90c448008cbe7d71bb8->enter($__internal_9194c9c2d1c6daf6fe286c2b119487ef47314594cc08b90c448008cbe7d71bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9194c9c2d1c6daf6fe286c2b119487ef47314594cc08b90c448008cbe7d71bb8->leave($__internal_9194c9c2d1c6daf6fe286c2b119487ef47314594cc08b90c448008cbe7d71bb8_prof);

        
        $__internal_e457aff0a37848e51f7754782132300d9af0b4737fde6f7280e0db8362e81387->leave($__internal_e457aff0a37848e51f7754782132300d9af0b4737fde6f7280e0db8362e81387_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b103bcddef7be74faa40feeca6abcc68db434506bab25053dfe64df3c2a9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b103bcddef7be74faa40feeca6abcc68db434506bab25053dfe64df3c2a9c4->enter($__internal_65b103bcddef7be74faa40feeca6abcc68db434506bab25053dfe64df3c2a9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_256ab8980cbd9eebf87fb045765dbc819633c4192cbf1b7cc08172215511ea60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256ab8980cbd9eebf87fb045765dbc819633c4192cbf1b7cc08172215511ea60->enter($__internal_256ab8980cbd9eebf87fb045765dbc819633c4192cbf1b7cc08172215511ea60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_256ab8980cbd9eebf87fb045765dbc819633c4192cbf1b7cc08172215511ea60->leave($__internal_256ab8980cbd9eebf87fb045765dbc819633c4192cbf1b7cc08172215511ea60_prof);

        
        $__internal_65b103bcddef7be74faa40feeca6abcc68db434506bab25053dfe64df3c2a9c4->leave($__internal_65b103bcddef7be74faa40feeca6abcc68db434506bab25053dfe64df3c2a9c4_prof);

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
