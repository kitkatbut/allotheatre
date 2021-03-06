<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_599cc9151178d7de631eeb82860c1db361f57fb89f0c7e642c123de470092a98 extends Twig_Template
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
        $__internal_4835d74cbe3dd95af78a58ecda35bca0e86152fa7e5538e8254601140381403a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4835d74cbe3dd95af78a58ecda35bca0e86152fa7e5538e8254601140381403a->enter($__internal_4835d74cbe3dd95af78a58ecda35bca0e86152fa7e5538e8254601140381403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_69556e94dfbdb05ecb9abba954727c8882bd49437280155e95960185947c4c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69556e94dfbdb05ecb9abba954727c8882bd49437280155e95960185947c4c30->enter($__internal_69556e94dfbdb05ecb9abba954727c8882bd49437280155e95960185947c4c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4835d74cbe3dd95af78a58ecda35bca0e86152fa7e5538e8254601140381403a->leave($__internal_4835d74cbe3dd95af78a58ecda35bca0e86152fa7e5538e8254601140381403a_prof);

        
        $__internal_69556e94dfbdb05ecb9abba954727c8882bd49437280155e95960185947c4c30->leave($__internal_69556e94dfbdb05ecb9abba954727c8882bd49437280155e95960185947c4c30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19948e6fc0ced1a98dc7093eed23110fdd4ac5686f911b4500c3459f40b5f64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19948e6fc0ced1a98dc7093eed23110fdd4ac5686f911b4500c3459f40b5f64a->enter($__internal_19948e6fc0ced1a98dc7093eed23110fdd4ac5686f911b4500c3459f40b5f64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b90e1bdb559629a0a5dd3721039f01a0044ff50196e006b3518673b7c9b80b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e1bdb559629a0a5dd3721039f01a0044ff50196e006b3518673b7c9b80b12->enter($__internal_b90e1bdb559629a0a5dd3721039f01a0044ff50196e006b3518673b7c9b80b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b90e1bdb559629a0a5dd3721039f01a0044ff50196e006b3518673b7c9b80b12->leave($__internal_b90e1bdb559629a0a5dd3721039f01a0044ff50196e006b3518673b7c9b80b12_prof);

        
        $__internal_19948e6fc0ced1a98dc7093eed23110fdd4ac5686f911b4500c3459f40b5f64a->leave($__internal_19948e6fc0ced1a98dc7093eed23110fdd4ac5686f911b4500c3459f40b5f64a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f65207f6987c14c90109ebf394fe1e337509a11b9fbcfd4b47ea362602e5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f65207f6987c14c90109ebf394fe1e337509a11b9fbcfd4b47ea362602e5a6->enter($__internal_c1f65207f6987c14c90109ebf394fe1e337509a11b9fbcfd4b47ea362602e5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_276444f7a0a4a54016f265bd5abb098e16e1dc358e3c04cd2e35b089052f1f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276444f7a0a4a54016f265bd5abb098e16e1dc358e3c04cd2e35b089052f1f58->enter($__internal_276444f7a0a4a54016f265bd5abb098e16e1dc358e3c04cd2e35b089052f1f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_276444f7a0a4a54016f265bd5abb098e16e1dc358e3c04cd2e35b089052f1f58->leave($__internal_276444f7a0a4a54016f265bd5abb098e16e1dc358e3c04cd2e35b089052f1f58_prof);

        
        $__internal_c1f65207f6987c14c90109ebf394fe1e337509a11b9fbcfd4b47ea362602e5a6->leave($__internal_c1f65207f6987c14c90109ebf394fe1e337509a11b9fbcfd4b47ea362602e5a6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d7b9f3fa824ddae10f10d1db84dabfe852209a9bc4c9468deb08256cf1ee15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d7b9f3fa824ddae10f10d1db84dabfe852209a9bc4c9468deb08256cf1ee15->enter($__internal_27d7b9f3fa824ddae10f10d1db84dabfe852209a9bc4c9468deb08256cf1ee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_703794a2dbcf9dde5f341c94e259be2817fe988d36610c02280ffcbf358b00d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703794a2dbcf9dde5f341c94e259be2817fe988d36610c02280ffcbf358b00d4->enter($__internal_703794a2dbcf9dde5f341c94e259be2817fe988d36610c02280ffcbf358b00d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_703794a2dbcf9dde5f341c94e259be2817fe988d36610c02280ffcbf358b00d4->leave($__internal_703794a2dbcf9dde5f341c94e259be2817fe988d36610c02280ffcbf358b00d4_prof);

        
        $__internal_27d7b9f3fa824ddae10f10d1db84dabfe852209a9bc4c9468deb08256cf1ee15->leave($__internal_27d7b9f3fa824ddae10f10d1db84dabfe852209a9bc4c9468deb08256cf1ee15_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
