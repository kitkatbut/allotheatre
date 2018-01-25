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
        $__internal_bc2a3deeee54673644467c91778b4c11179caf03f4a1a94e2d85cbb2e8625f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2a3deeee54673644467c91778b4c11179caf03f4a1a94e2d85cbb2e8625f9b->enter($__internal_bc2a3deeee54673644467c91778b4c11179caf03f4a1a94e2d85cbb2e8625f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22bd40b805d6af8abd50226affdd562c11e783a07fa9e7e6c2da770989d71d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bd40b805d6af8abd50226affdd562c11e783a07fa9e7e6c2da770989d71d61->enter($__internal_22bd40b805d6af8abd50226affdd562c11e783a07fa9e7e6c2da770989d71d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2a3deeee54673644467c91778b4c11179caf03f4a1a94e2d85cbb2e8625f9b->leave($__internal_bc2a3deeee54673644467c91778b4c11179caf03f4a1a94e2d85cbb2e8625f9b_prof);

        
        $__internal_22bd40b805d6af8abd50226affdd562c11e783a07fa9e7e6c2da770989d71d61->leave($__internal_22bd40b805d6af8abd50226affdd562c11e783a07fa9e7e6c2da770989d71d61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd776fb1867d093e0872d19cbcb681db9b1dc458db6bf84b035711ce70c98755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd776fb1867d093e0872d19cbcb681db9b1dc458db6bf84b035711ce70c98755->enter($__internal_fd776fb1867d093e0872d19cbcb681db9b1dc458db6bf84b035711ce70c98755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1bb57133fa32c663286475dd3eed6a19ea45c7f8a28f3b8e7568da4cd5469fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bb57133fa32c663286475dd3eed6a19ea45c7f8a28f3b8e7568da4cd5469fe->enter($__internal_c1bb57133fa32c663286475dd3eed6a19ea45c7f8a28f3b8e7568da4cd5469fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c1bb57133fa32c663286475dd3eed6a19ea45c7f8a28f3b8e7568da4cd5469fe->leave($__internal_c1bb57133fa32c663286475dd3eed6a19ea45c7f8a28f3b8e7568da4cd5469fe_prof);

        
        $__internal_fd776fb1867d093e0872d19cbcb681db9b1dc458db6bf84b035711ce70c98755->leave($__internal_fd776fb1867d093e0872d19cbcb681db9b1dc458db6bf84b035711ce70c98755_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_373225a3345557ad766ce7ba94f35c15694a1826f1e331a24f0a5bef6f28687b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373225a3345557ad766ce7ba94f35c15694a1826f1e331a24f0a5bef6f28687b->enter($__internal_373225a3345557ad766ce7ba94f35c15694a1826f1e331a24f0a5bef6f28687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2808dcf42e824c893bb699a48c757628cbb2502d1d65c0117916e422fdf8fae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2808dcf42e824c893bb699a48c757628cbb2502d1d65c0117916e422fdf8fae1->enter($__internal_2808dcf42e824c893bb699a48c757628cbb2502d1d65c0117916e422fdf8fae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2808dcf42e824c893bb699a48c757628cbb2502d1d65c0117916e422fdf8fae1->leave($__internal_2808dcf42e824c893bb699a48c757628cbb2502d1d65c0117916e422fdf8fae1_prof);

        
        $__internal_373225a3345557ad766ce7ba94f35c15694a1826f1e331a24f0a5bef6f28687b->leave($__internal_373225a3345557ad766ce7ba94f35c15694a1826f1e331a24f0a5bef6f28687b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cf1fdf0baa430bb0bfb3bce32c9e92049e3f10ddb22bf66cdec3346d410e87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf1fdf0baa430bb0bfb3bce32c9e92049e3f10ddb22bf66cdec3346d410e87b->enter($__internal_5cf1fdf0baa430bb0bfb3bce32c9e92049e3f10ddb22bf66cdec3346d410e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae0cd3d5b39337f3bf9e2531205d21c3eccce2f178716e0dcf96f219bdafa89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0cd3d5b39337f3bf9e2531205d21c3eccce2f178716e0dcf96f219bdafa89d->enter($__internal_ae0cd3d5b39337f3bf9e2531205d21c3eccce2f178716e0dcf96f219bdafa89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ae0cd3d5b39337f3bf9e2531205d21c3eccce2f178716e0dcf96f219bdafa89d->leave($__internal_ae0cd3d5b39337f3bf9e2531205d21c3eccce2f178716e0dcf96f219bdafa89d_prof);

        
        $__internal_5cf1fdf0baa430bb0bfb3bce32c9e92049e3f10ddb22bf66cdec3346d410e87b->leave($__internal_5cf1fdf0baa430bb0bfb3bce32c9e92049e3f10ddb22bf66cdec3346d410e87b_prof);

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
