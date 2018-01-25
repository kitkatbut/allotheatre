<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8c77e9d4cc7768f7bb8d71ee3fd6690fbac1fc9ff17871a760e60759e880555 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_c128394b9e9b1bd3acfdd757bb32686cd3bc5ae1258178179959982ce68a4967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c128394b9e9b1bd3acfdd757bb32686cd3bc5ae1258178179959982ce68a4967->enter($__internal_c128394b9e9b1bd3acfdd757bb32686cd3bc5ae1258178179959982ce68a4967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c128394b9e9b1bd3acfdd757bb32686cd3bc5ae1258178179959982ce68a4967->leave($__internal_c128394b9e9b1bd3acfdd757bb32686cd3bc5ae1258178179959982ce68a4967_prof);
=======
        $__internal_2e63e6b3241deb16bf3d0b6d12e39077b549941169a85bc7ebe7d4104d9ec979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63e6b3241deb16bf3d0b6d12e39077b549941169a85bc7ebe7d4104d9ec979->enter($__internal_2e63e6b3241deb16bf3d0b6d12e39077b549941169a85bc7ebe7d4104d9ec979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e63e6b3241deb16bf3d0b6d12e39077b549941169a85bc7ebe7d4104d9ec979->leave($__internal_2e63e6b3241deb16bf3d0b6d12e39077b549941169a85bc7ebe7d4104d9ec979_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_24fec7a56c17d6cfbfd1b9bdd9432fb6a3b3de74e0d5eda871b18caadf4cfe7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fec7a56c17d6cfbfd1b9bdd9432fb6a3b3de74e0d5eda871b18caadf4cfe7b->enter($__internal_24fec7a56c17d6cfbfd1b9bdd9432fb6a3b3de74e0d5eda871b18caadf4cfe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
        $__internal_306ed361a46e0df572a82766a927845def58fb11685ca1262e6a7a91e545fe31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ed361a46e0df572a82766a927845def58fb11685ca1262e6a7a91e545fe31->enter($__internal_306ed361a46e0df572a82766a927845def58fb11685ca1262e6a7a91e545fe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

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
        
<<<<<<< HEAD
        $__internal_24fec7a56c17d6cfbfd1b9bdd9432fb6a3b3de74e0d5eda871b18caadf4cfe7b->leave($__internal_24fec7a56c17d6cfbfd1b9bdd9432fb6a3b3de74e0d5eda871b18caadf4cfe7b_prof);
=======
        $__internal_306ed361a46e0df572a82766a927845def58fb11685ca1262e6a7a91e545fe31->leave($__internal_306ed361a46e0df572a82766a927845def58fb11685ca1262e6a7a91e545fe31_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_396ebd448ed73b6d0e4ef69b8aa1ba3c63f4436c15dd1f228a439453469b92b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396ebd448ed73b6d0e4ef69b8aa1ba3c63f4436c15dd1f228a439453469b92b4->enter($__internal_396ebd448ed73b6d0e4ef69b8aa1ba3c63f4436c15dd1f228a439453469b92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
        $__internal_54fb44d1aadbef2f960a92e9ea88a70e3dc242ada17187cea68cf59ad66574dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb44d1aadbef2f960a92e9ea88a70e3dc242ada17187cea68cf59ad66574dc->enter($__internal_54fb44d1aadbef2f960a92e9ea88a70e3dc242ada17187cea68cf59ad66574dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
<<<<<<< HEAD
        $__internal_396ebd448ed73b6d0e4ef69b8aa1ba3c63f4436c15dd1f228a439453469b92b4->leave($__internal_396ebd448ed73b6d0e4ef69b8aa1ba3c63f4436c15dd1f228a439453469b92b4_prof);
=======
        $__internal_54fb44d1aadbef2f960a92e9ea88a70e3dc242ada17187cea68cf59ad66574dc->leave($__internal_54fb44d1aadbef2f960a92e9ea88a70e3dc242ada17187cea68cf59ad66574dc_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_8d9afd50ea0da2b6d876f846d7936c17485975cadabe03596b3bc77dc69620c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9afd50ea0da2b6d876f846d7936c17485975cadabe03596b3bc77dc69620c2->enter($__internal_8d9afd50ea0da2b6d876f846d7936c17485975cadabe03596b3bc77dc69620c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_b5babb093d25d5c9e5a001feba51b476245daeceb30d022da1302e4b7158d174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5babb093d25d5c9e5a001feba51b476245daeceb30d022da1302e4b7158d174->enter($__internal_b5babb093d25d5c9e5a001feba51b476245daeceb30d022da1302e4b7158d174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
<<<<<<< HEAD
        $__internal_8d9afd50ea0da2b6d876f846d7936c17485975cadabe03596b3bc77dc69620c2->leave($__internal_8d9afd50ea0da2b6d876f846d7936c17485975cadabe03596b3bc77dc69620c2_prof);
=======
        $__internal_b5babb093d25d5c9e5a001feba51b476245daeceb30d022da1302e4b7158d174->leave($__internal_b5babb093d25d5c9e5a001feba51b476245daeceb30d022da1302e4b7158d174_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

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
        return array (  205 => 141,  199 => 140,  185 => 137,  179 => 136,  42 => 4,  36 => 3,  11 => 1,);
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
