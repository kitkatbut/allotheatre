<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6d8f7f1f39a46864c20c87281c66485f18be3835d691f510c0ee75d6259fee0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_520218623980c3a26db138635c2c60ed2f7d5ba9ea70c054496433f5a62776a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520218623980c3a26db138635c2c60ed2f7d5ba9ea70c054496433f5a62776a0->enter($__internal_520218623980c3a26db138635c2c60ed2f7d5ba9ea70c054496433f5a62776a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dc458a30c077a845a87ebb2e6f939c3af3fb14050aa74d90709a87cb50914374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc458a30c077a845a87ebb2e6f939c3af3fb14050aa74d90709a87cb50914374->enter($__internal_dc458a30c077a845a87ebb2e6f939c3af3fb14050aa74d90709a87cb50914374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_520218623980c3a26db138635c2c60ed2f7d5ba9ea70c054496433f5a62776a0->leave($__internal_520218623980c3a26db138635c2c60ed2f7d5ba9ea70c054496433f5a62776a0_prof);

        
        $__internal_dc458a30c077a845a87ebb2e6f939c3af3fb14050aa74d90709a87cb50914374->leave($__internal_dc458a30c077a845a87ebb2e6f939c3af3fb14050aa74d90709a87cb50914374_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99018c100091a2e56810fc174ea8fa3853ea52fd713c80015aff614d879d678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99018c100091a2e56810fc174ea8fa3853ea52fd713c80015aff614d879d678->enter($__internal_e99018c100091a2e56810fc174ea8fa3853ea52fd713c80015aff614d879d678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc1304e6b58393c1f7bd5fa4a8d0d6600c34851ad708fb0f06846de03ae82e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1304e6b58393c1f7bd5fa4a8d0d6600c34851ad708fb0f06846de03ae82e0c->enter($__internal_cc1304e6b58393c1f7bd5fa4a8d0d6600c34851ad708fb0f06846de03ae82e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc1304e6b58393c1f7bd5fa4a8d0d6600c34851ad708fb0f06846de03ae82e0c->leave($__internal_cc1304e6b58393c1f7bd5fa4a8d0d6600c34851ad708fb0f06846de03ae82e0c_prof);

        
        $__internal_e99018c100091a2e56810fc174ea8fa3853ea52fd713c80015aff614d879d678->leave($__internal_e99018c100091a2e56810fc174ea8fa3853ea52fd713c80015aff614d879d678_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c86de79354dba28b74bfcae2d53e565c6e5782300c7d4857c3f89c3679fee15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86de79354dba28b74bfcae2d53e565c6e5782300c7d4857c3f89c3679fee15f->enter($__internal_c86de79354dba28b74bfcae2d53e565c6e5782300c7d4857c3f89c3679fee15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6701379808bb6ef5acc2906a98e458130705b1c85b55407f0f2136cce6c2532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6701379808bb6ef5acc2906a98e458130705b1c85b55407f0f2136cce6c2532->enter($__internal_c6701379808bb6ef5acc2906a98e458130705b1c85b55407f0f2136cce6c2532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c6701379808bb6ef5acc2906a98e458130705b1c85b55407f0f2136cce6c2532->leave($__internal_c6701379808bb6ef5acc2906a98e458130705b1c85b55407f0f2136cce6c2532_prof);

        
        $__internal_c86de79354dba28b74bfcae2d53e565c6e5782300c7d4857c3f89c3679fee15f->leave($__internal_c86de79354dba28b74bfcae2d53e565c6e5782300c7d4857c3f89c3679fee15f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08ae824ebc8b19cfff964a7791e1f75bf5d48d0681f8beecb4d248a4c143415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08ae824ebc8b19cfff964a7791e1f75bf5d48d0681f8beecb4d248a4c143415->enter($__internal_e08ae824ebc8b19cfff964a7791e1f75bf5d48d0681f8beecb4d248a4c143415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61d9e6f15a97d03e414d96c44fa89b77b6544b05b4c131aad2ad26c5516e2dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d9e6f15a97d03e414d96c44fa89b77b6544b05b4c131aad2ad26c5516e2dd3->enter($__internal_61d9e6f15a97d03e414d96c44fa89b77b6544b05b4c131aad2ad26c5516e2dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61d9e6f15a97d03e414d96c44fa89b77b6544b05b4c131aad2ad26c5516e2dd3->leave($__internal_61d9e6f15a97d03e414d96c44fa89b77b6544b05b4c131aad2ad26c5516e2dd3_prof);

        
        $__internal_e08ae824ebc8b19cfff964a7791e1f75bf5d48d0681f8beecb4d248a4c143415->leave($__internal_e08ae824ebc8b19cfff964a7791e1f75bf5d48d0681f8beecb4d248a4c143415_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
