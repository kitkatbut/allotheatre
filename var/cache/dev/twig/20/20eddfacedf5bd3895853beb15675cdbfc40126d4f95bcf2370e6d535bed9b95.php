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
        $__internal_395858f5645e0140f81008c5bfb9992107dd9df14eaccaa460b01f093c235838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395858f5645e0140f81008c5bfb9992107dd9df14eaccaa460b01f093c235838->enter($__internal_395858f5645e0140f81008c5bfb9992107dd9df14eaccaa460b01f093c235838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ace972a3d6138bf615daa7d25fb68bb85670d7ea897bd0f509d0516b16f15c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace972a3d6138bf615daa7d25fb68bb85670d7ea897bd0f509d0516b16f15c90->enter($__internal_ace972a3d6138bf615daa7d25fb68bb85670d7ea897bd0f509d0516b16f15c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395858f5645e0140f81008c5bfb9992107dd9df14eaccaa460b01f093c235838->leave($__internal_395858f5645e0140f81008c5bfb9992107dd9df14eaccaa460b01f093c235838_prof);

        
        $__internal_ace972a3d6138bf615daa7d25fb68bb85670d7ea897bd0f509d0516b16f15c90->leave($__internal_ace972a3d6138bf615daa7d25fb68bb85670d7ea897bd0f509d0516b16f15c90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_643ffa8b3b04c7c6469b380b95b4823537f8b01e9f5d6c00337f918518c1bc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643ffa8b3b04c7c6469b380b95b4823537f8b01e9f5d6c00337f918518c1bc4c->enter($__internal_643ffa8b3b04c7c6469b380b95b4823537f8b01e9f5d6c00337f918518c1bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06bcd6bf91f3af83f731856c5fde7575055e6985ac4aea99234ebeeb85595381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bcd6bf91f3af83f731856c5fde7575055e6985ac4aea99234ebeeb85595381->enter($__internal_06bcd6bf91f3af83f731856c5fde7575055e6985ac4aea99234ebeeb85595381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_06bcd6bf91f3af83f731856c5fde7575055e6985ac4aea99234ebeeb85595381->leave($__internal_06bcd6bf91f3af83f731856c5fde7575055e6985ac4aea99234ebeeb85595381_prof);

        
        $__internal_643ffa8b3b04c7c6469b380b95b4823537f8b01e9f5d6c00337f918518c1bc4c->leave($__internal_643ffa8b3b04c7c6469b380b95b4823537f8b01e9f5d6c00337f918518c1bc4c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaa6642d45c8330d31729ba0eb77ab39b78e3a21799990a6dfdc11177eb1e80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa6642d45c8330d31729ba0eb77ab39b78e3a21799990a6dfdc11177eb1e80c->enter($__internal_aaa6642d45c8330d31729ba0eb77ab39b78e3a21799990a6dfdc11177eb1e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fe55149b92283a0e74bf92ceee1864368336c0ef45164f0357f91ddd9b7d6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe55149b92283a0e74bf92ceee1864368336c0ef45164f0357f91ddd9b7d6d0->enter($__internal_8fe55149b92283a0e74bf92ceee1864368336c0ef45164f0357f91ddd9b7d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8fe55149b92283a0e74bf92ceee1864368336c0ef45164f0357f91ddd9b7d6d0->leave($__internal_8fe55149b92283a0e74bf92ceee1864368336c0ef45164f0357f91ddd9b7d6d0_prof);

        
        $__internal_aaa6642d45c8330d31729ba0eb77ab39b78e3a21799990a6dfdc11177eb1e80c->leave($__internal_aaa6642d45c8330d31729ba0eb77ab39b78e3a21799990a6dfdc11177eb1e80c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f3449b3f7d1d06e6628c28a7f9ce5dc7b6b28ef92ae12025355407042aceb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3449b3f7d1d06e6628c28a7f9ce5dc7b6b28ef92ae12025355407042aceb55->enter($__internal_0f3449b3f7d1d06e6628c28a7f9ce5dc7b6b28ef92ae12025355407042aceb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91d5e9aa49a3a371eee3f41ee63e4d64eb662f92eff72d13ff0245f92d24f009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d5e9aa49a3a371eee3f41ee63e4d64eb662f92eff72d13ff0245f92d24f009->enter($__internal_91d5e9aa49a3a371eee3f41ee63e4d64eb662f92eff72d13ff0245f92d24f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_91d5e9aa49a3a371eee3f41ee63e4d64eb662f92eff72d13ff0245f92d24f009->leave($__internal_91d5e9aa49a3a371eee3f41ee63e4d64eb662f92eff72d13ff0245f92d24f009_prof);

        
        $__internal_0f3449b3f7d1d06e6628c28a7f9ce5dc7b6b28ef92ae12025355407042aceb55->leave($__internal_0f3449b3f7d1d06e6628c28a7f9ce5dc7b6b28ef92ae12025355407042aceb55_prof);

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
