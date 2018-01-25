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
        $__internal_24cbfe1b4afc592c1676fff997353db6e9ac6c1e0515aee33e48970bb86eb8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cbfe1b4afc592c1676fff997353db6e9ac6c1e0515aee33e48970bb86eb8e6->enter($__internal_24cbfe1b4afc592c1676fff997353db6e9ac6c1e0515aee33e48970bb86eb8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_39f4569a9bee15ca0410a434530f50cd03dea4bbb5686fdf2616da60fa5151ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f4569a9bee15ca0410a434530f50cd03dea4bbb5686fdf2616da60fa5151ff->enter($__internal_39f4569a9bee15ca0410a434530f50cd03dea4bbb5686fdf2616da60fa5151ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24cbfe1b4afc592c1676fff997353db6e9ac6c1e0515aee33e48970bb86eb8e6->leave($__internal_24cbfe1b4afc592c1676fff997353db6e9ac6c1e0515aee33e48970bb86eb8e6_prof);

        
        $__internal_39f4569a9bee15ca0410a434530f50cd03dea4bbb5686fdf2616da60fa5151ff->leave($__internal_39f4569a9bee15ca0410a434530f50cd03dea4bbb5686fdf2616da60fa5151ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1afdb377566f60c2ef956ee7197fa2aad84a7609fc549aa7435dcd5e6ac4ac5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afdb377566f60c2ef956ee7197fa2aad84a7609fc549aa7435dcd5e6ac4ac5e->enter($__internal_1afdb377566f60c2ef956ee7197fa2aad84a7609fc549aa7435dcd5e6ac4ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bfd65cc1d166a46489a32240be0ee02bb8ea00fed2eec125a143c9f60b9a179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfd65cc1d166a46489a32240be0ee02bb8ea00fed2eec125a143c9f60b9a179->enter($__internal_9bfd65cc1d166a46489a32240be0ee02bb8ea00fed2eec125a143c9f60b9a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9bfd65cc1d166a46489a32240be0ee02bb8ea00fed2eec125a143c9f60b9a179->leave($__internal_9bfd65cc1d166a46489a32240be0ee02bb8ea00fed2eec125a143c9f60b9a179_prof);

        
        $__internal_1afdb377566f60c2ef956ee7197fa2aad84a7609fc549aa7435dcd5e6ac4ac5e->leave($__internal_1afdb377566f60c2ef956ee7197fa2aad84a7609fc549aa7435dcd5e6ac4ac5e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3a0f0836e8191b5866aeb839657c08f29adc59008a5db0d9770c6172634cfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a0f0836e8191b5866aeb839657c08f29adc59008a5db0d9770c6172634cfc9->enter($__internal_e3a0f0836e8191b5866aeb839657c08f29adc59008a5db0d9770c6172634cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4aeb3e1849228566516be6033173af574d76daf76f58d3d2164d705229d298b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aeb3e1849228566516be6033173af574d76daf76f58d3d2164d705229d298b0->enter($__internal_4aeb3e1849228566516be6033173af574d76daf76f58d3d2164d705229d298b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4aeb3e1849228566516be6033173af574d76daf76f58d3d2164d705229d298b0->leave($__internal_4aeb3e1849228566516be6033173af574d76daf76f58d3d2164d705229d298b0_prof);

        
        $__internal_e3a0f0836e8191b5866aeb839657c08f29adc59008a5db0d9770c6172634cfc9->leave($__internal_e3a0f0836e8191b5866aeb839657c08f29adc59008a5db0d9770c6172634cfc9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_15979bcb8a0c958b2746aea10faf5339482fb54aa5e6a22b8a1227ee5eed51e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15979bcb8a0c958b2746aea10faf5339482fb54aa5e6a22b8a1227ee5eed51e0->enter($__internal_15979bcb8a0c958b2746aea10faf5339482fb54aa5e6a22b8a1227ee5eed51e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6630429dfc21ccbdfd4b0a4a6c7a7abd33f0cef32f16bf92b11191cb75baea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6630429dfc21ccbdfd4b0a4a6c7a7abd33f0cef32f16bf92b11191cb75baea9->enter($__internal_d6630429dfc21ccbdfd4b0a4a6c7a7abd33f0cef32f16bf92b11191cb75baea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d6630429dfc21ccbdfd4b0a4a6c7a7abd33f0cef32f16bf92b11191cb75baea9->leave($__internal_d6630429dfc21ccbdfd4b0a4a6c7a7abd33f0cef32f16bf92b11191cb75baea9_prof);

        
        $__internal_15979bcb8a0c958b2746aea10faf5339482fb54aa5e6a22b8a1227ee5eed51e0->leave($__internal_15979bcb8a0c958b2746aea10faf5339482fb54aa5e6a22b8a1227ee5eed51e0_prof);

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
