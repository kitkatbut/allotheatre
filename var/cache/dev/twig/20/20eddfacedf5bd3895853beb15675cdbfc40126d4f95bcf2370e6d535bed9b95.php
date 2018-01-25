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
        $__internal_ae521d2ae1e0c33bea319ce204ffcda1be8babc392f152d611761b624ffa9dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae521d2ae1e0c33bea319ce204ffcda1be8babc392f152d611761b624ffa9dba->enter($__internal_ae521d2ae1e0c33bea319ce204ffcda1be8babc392f152d611761b624ffa9dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_873edfb102d4cc4db41f70aee92fddbc697f20bceb381aaaddf963b28b173388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873edfb102d4cc4db41f70aee92fddbc697f20bceb381aaaddf963b28b173388->enter($__internal_873edfb102d4cc4db41f70aee92fddbc697f20bceb381aaaddf963b28b173388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae521d2ae1e0c33bea319ce204ffcda1be8babc392f152d611761b624ffa9dba->leave($__internal_ae521d2ae1e0c33bea319ce204ffcda1be8babc392f152d611761b624ffa9dba_prof);

        
        $__internal_873edfb102d4cc4db41f70aee92fddbc697f20bceb381aaaddf963b28b173388->leave($__internal_873edfb102d4cc4db41f70aee92fddbc697f20bceb381aaaddf963b28b173388_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f9ea20db8d7f3e5c4ed89f0740ef592c554ee456bf3427cc486975560d662e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9ea20db8d7f3e5c4ed89f0740ef592c554ee456bf3427cc486975560d662e0->enter($__internal_0f9ea20db8d7f3e5c4ed89f0740ef592c554ee456bf3427cc486975560d662e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2bcd396356ea5796097b0a43c5688f5397d0c344ede54f9868e83c47695ce3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bcd396356ea5796097b0a43c5688f5397d0c344ede54f9868e83c47695ce3f->enter($__internal_a2bcd396356ea5796097b0a43c5688f5397d0c344ede54f9868e83c47695ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a2bcd396356ea5796097b0a43c5688f5397d0c344ede54f9868e83c47695ce3f->leave($__internal_a2bcd396356ea5796097b0a43c5688f5397d0c344ede54f9868e83c47695ce3f_prof);

        
        $__internal_0f9ea20db8d7f3e5c4ed89f0740ef592c554ee456bf3427cc486975560d662e0->leave($__internal_0f9ea20db8d7f3e5c4ed89f0740ef592c554ee456bf3427cc486975560d662e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a3c76ed125011428f0a5e0c84f4993ec45eb4eb91a7b84377117c19013a8514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3c76ed125011428f0a5e0c84f4993ec45eb4eb91a7b84377117c19013a8514->enter($__internal_9a3c76ed125011428f0a5e0c84f4993ec45eb4eb91a7b84377117c19013a8514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_735afaa3422d3b7ce064f5a110cfe8095f0bb210e276c1eb67a3e35dccccb6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735afaa3422d3b7ce064f5a110cfe8095f0bb210e276c1eb67a3e35dccccb6b7->enter($__internal_735afaa3422d3b7ce064f5a110cfe8095f0bb210e276c1eb67a3e35dccccb6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_735afaa3422d3b7ce064f5a110cfe8095f0bb210e276c1eb67a3e35dccccb6b7->leave($__internal_735afaa3422d3b7ce064f5a110cfe8095f0bb210e276c1eb67a3e35dccccb6b7_prof);

        
        $__internal_9a3c76ed125011428f0a5e0c84f4993ec45eb4eb91a7b84377117c19013a8514->leave($__internal_9a3c76ed125011428f0a5e0c84f4993ec45eb4eb91a7b84377117c19013a8514_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e924e658827be9d696266ddb539b236af8983c96bf27a10fc2386cb0e9d6482a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e924e658827be9d696266ddb539b236af8983c96bf27a10fc2386cb0e9d6482a->enter($__internal_e924e658827be9d696266ddb539b236af8983c96bf27a10fc2386cb0e9d6482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82192e180184fc34314181c89f0533cef8d7453670a668291f81d96b3e192287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82192e180184fc34314181c89f0533cef8d7453670a668291f81d96b3e192287->enter($__internal_82192e180184fc34314181c89f0533cef8d7453670a668291f81d96b3e192287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_82192e180184fc34314181c89f0533cef8d7453670a668291f81d96b3e192287->leave($__internal_82192e180184fc34314181c89f0533cef8d7453670a668291f81d96b3e192287_prof);

        
        $__internal_e924e658827be9d696266ddb539b236af8983c96bf27a10fc2386cb0e9d6482a->leave($__internal_e924e658827be9d696266ddb539b236af8983c96bf27a10fc2386cb0e9d6482a_prof);

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
