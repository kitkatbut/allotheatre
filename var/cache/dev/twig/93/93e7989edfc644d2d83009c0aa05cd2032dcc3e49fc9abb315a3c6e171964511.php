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
        $__internal_f62b619c289615f22420c657771ad08195d51f4b9b9c6ccab1a5598f7d105406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62b619c289615f22420c657771ad08195d51f4b9b9c6ccab1a5598f7d105406->enter($__internal_f62b619c289615f22420c657771ad08195d51f4b9b9c6ccab1a5598f7d105406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1e2131c79cbddb44e35d6bcbad9cbc9e5ffe82dcb46576c67d9dafebaac308a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2131c79cbddb44e35d6bcbad9cbc9e5ffe82dcb46576c67d9dafebaac308a1->enter($__internal_1e2131c79cbddb44e35d6bcbad9cbc9e5ffe82dcb46576c67d9dafebaac308a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f62b619c289615f22420c657771ad08195d51f4b9b9c6ccab1a5598f7d105406->leave($__internal_f62b619c289615f22420c657771ad08195d51f4b9b9c6ccab1a5598f7d105406_prof);

        
        $__internal_1e2131c79cbddb44e35d6bcbad9cbc9e5ffe82dcb46576c67d9dafebaac308a1->leave($__internal_1e2131c79cbddb44e35d6bcbad9cbc9e5ffe82dcb46576c67d9dafebaac308a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bcc3ea058ea8056e4e5cd3b790bc523ed6ebe0048aabec3eee8723618ed6025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcc3ea058ea8056e4e5cd3b790bc523ed6ebe0048aabec3eee8723618ed6025->enter($__internal_3bcc3ea058ea8056e4e5cd3b790bc523ed6ebe0048aabec3eee8723618ed6025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2585607d7c051925eeb9687ec990cbf383c97601be13dc59bffbb5c0653a1459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2585607d7c051925eeb9687ec990cbf383c97601be13dc59bffbb5c0653a1459->enter($__internal_2585607d7c051925eeb9687ec990cbf383c97601be13dc59bffbb5c0653a1459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2585607d7c051925eeb9687ec990cbf383c97601be13dc59bffbb5c0653a1459->leave($__internal_2585607d7c051925eeb9687ec990cbf383c97601be13dc59bffbb5c0653a1459_prof);

        
        $__internal_3bcc3ea058ea8056e4e5cd3b790bc523ed6ebe0048aabec3eee8723618ed6025->leave($__internal_3bcc3ea058ea8056e4e5cd3b790bc523ed6ebe0048aabec3eee8723618ed6025_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d81d70db379f5c566046d8b4eda80c04b3d8a93da7ee6222640756072c90ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d81d70db379f5c566046d8b4eda80c04b3d8a93da7ee6222640756072c90ecd->enter($__internal_0d81d70db379f5c566046d8b4eda80c04b3d8a93da7ee6222640756072c90ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89f2be43a5483809e0e4beb71a1cec854d8bc64e7aa94147efe16261b50e1352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f2be43a5483809e0e4beb71a1cec854d8bc64e7aa94147efe16261b50e1352->enter($__internal_89f2be43a5483809e0e4beb71a1cec854d8bc64e7aa94147efe16261b50e1352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_89f2be43a5483809e0e4beb71a1cec854d8bc64e7aa94147efe16261b50e1352->leave($__internal_89f2be43a5483809e0e4beb71a1cec854d8bc64e7aa94147efe16261b50e1352_prof);

        
        $__internal_0d81d70db379f5c566046d8b4eda80c04b3d8a93da7ee6222640756072c90ecd->leave($__internal_0d81d70db379f5c566046d8b4eda80c04b3d8a93da7ee6222640756072c90ecd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5c8b5dcfead53325c444a4bf58b05a60e49ce0bb3331467005d7f669e8049e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c8b5dcfead53325c444a4bf58b05a60e49ce0bb3331467005d7f669e8049e8->enter($__internal_f5c8b5dcfead53325c444a4bf58b05a60e49ce0bb3331467005d7f669e8049e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8951176e0cd5ae089be36da4e840da1152c0cf0f1cf435f04248bb2397de69b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8951176e0cd5ae089be36da4e840da1152c0cf0f1cf435f04248bb2397de69b8->enter($__internal_8951176e0cd5ae089be36da4e840da1152c0cf0f1cf435f04248bb2397de69b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8951176e0cd5ae089be36da4e840da1152c0cf0f1cf435f04248bb2397de69b8->leave($__internal_8951176e0cd5ae089be36da4e840da1152c0cf0f1cf435f04248bb2397de69b8_prof);

        
        $__internal_f5c8b5dcfead53325c444a4bf58b05a60e49ce0bb3331467005d7f669e8049e8->leave($__internal_f5c8b5dcfead53325c444a4bf58b05a60e49ce0bb3331467005d7f669e8049e8_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Allotheatre/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
