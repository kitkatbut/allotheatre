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
        $__internal_55d18ec6b001e85926b2a63f022a5baa11d92558608e897c6a86577eed3918cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d18ec6b001e85926b2a63f022a5baa11d92558608e897c6a86577eed3918cc->enter($__internal_55d18ec6b001e85926b2a63f022a5baa11d92558608e897c6a86577eed3918cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_debd126334c32f89ec5cd73fe5b756c1db0cda7eeec1a023b9110ceda999c2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debd126334c32f89ec5cd73fe5b756c1db0cda7eeec1a023b9110ceda999c2ba->enter($__internal_debd126334c32f89ec5cd73fe5b756c1db0cda7eeec1a023b9110ceda999c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d18ec6b001e85926b2a63f022a5baa11d92558608e897c6a86577eed3918cc->leave($__internal_55d18ec6b001e85926b2a63f022a5baa11d92558608e897c6a86577eed3918cc_prof);

        
        $__internal_debd126334c32f89ec5cd73fe5b756c1db0cda7eeec1a023b9110ceda999c2ba->leave($__internal_debd126334c32f89ec5cd73fe5b756c1db0cda7eeec1a023b9110ceda999c2ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ac270de9aed0d783be09578aea50bd784b51ec3ad8632af082727d1af735a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac270de9aed0d783be09578aea50bd784b51ec3ad8632af082727d1af735a6b->enter($__internal_1ac270de9aed0d783be09578aea50bd784b51ec3ad8632af082727d1af735a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ab0b8c57a5d92c32aaccdf216b86e6386eef788706c505a186d7f2ebe5db9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab0b8c57a5d92c32aaccdf216b86e6386eef788706c505a186d7f2ebe5db9d5->enter($__internal_5ab0b8c57a5d92c32aaccdf216b86e6386eef788706c505a186d7f2ebe5db9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ab0b8c57a5d92c32aaccdf216b86e6386eef788706c505a186d7f2ebe5db9d5->leave($__internal_5ab0b8c57a5d92c32aaccdf216b86e6386eef788706c505a186d7f2ebe5db9d5_prof);

        
        $__internal_1ac270de9aed0d783be09578aea50bd784b51ec3ad8632af082727d1af735a6b->leave($__internal_1ac270de9aed0d783be09578aea50bd784b51ec3ad8632af082727d1af735a6b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_53d78d2fdd84abcb6fe236a605b595a295dcccd5fc87218c6966aee595df8475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d78d2fdd84abcb6fe236a605b595a295dcccd5fc87218c6966aee595df8475->enter($__internal_53d78d2fdd84abcb6fe236a605b595a295dcccd5fc87218c6966aee595df8475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_364ee438e117dcde45b77ef3eed421040be66f6121fb9e5519767543e4076a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ee438e117dcde45b77ef3eed421040be66f6121fb9e5519767543e4076a8c->enter($__internal_364ee438e117dcde45b77ef3eed421040be66f6121fb9e5519767543e4076a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_364ee438e117dcde45b77ef3eed421040be66f6121fb9e5519767543e4076a8c->leave($__internal_364ee438e117dcde45b77ef3eed421040be66f6121fb9e5519767543e4076a8c_prof);

        
        $__internal_53d78d2fdd84abcb6fe236a605b595a295dcccd5fc87218c6966aee595df8475->leave($__internal_53d78d2fdd84abcb6fe236a605b595a295dcccd5fc87218c6966aee595df8475_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e12043c41d3f49f062696e181d6795d01243152041f8d98e62e46b6361051b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e12043c41d3f49f062696e181d6795d01243152041f8d98e62e46b6361051b2->enter($__internal_1e12043c41d3f49f062696e181d6795d01243152041f8d98e62e46b6361051b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b6bd4b76662b6e4caf3391df419cd5a86c8570dd7c3b92e30fb2aca51c833e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6bd4b76662b6e4caf3391df419cd5a86c8570dd7c3b92e30fb2aca51c833e5->enter($__internal_8b6bd4b76662b6e4caf3391df419cd5a86c8570dd7c3b92e30fb2aca51c833e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8b6bd4b76662b6e4caf3391df419cd5a86c8570dd7c3b92e30fb2aca51c833e5->leave($__internal_8b6bd4b76662b6e4caf3391df419cd5a86c8570dd7c3b92e30fb2aca51c833e5_prof);

        
        $__internal_1e12043c41d3f49f062696e181d6795d01243152041f8d98e62e46b6361051b2->leave($__internal_1e12043c41d3f49f062696e181d6795d01243152041f8d98e62e46b6361051b2_prof);

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
