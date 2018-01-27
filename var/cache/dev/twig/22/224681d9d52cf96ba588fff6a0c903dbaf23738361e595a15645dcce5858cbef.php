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
        $__internal_158c1820d35fd5aa316c45bcd59c34c330a4ae36fe85cdf679bb90a20339819d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158c1820d35fd5aa316c45bcd59c34c330a4ae36fe85cdf679bb90a20339819d->enter($__internal_158c1820d35fd5aa316c45bcd59c34c330a4ae36fe85cdf679bb90a20339819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b219930cf2e3ad0bae1a7cab8fecb857f74a8646c8f25687c51549866777b63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b219930cf2e3ad0bae1a7cab8fecb857f74a8646c8f25687c51549866777b63c->enter($__internal_b219930cf2e3ad0bae1a7cab8fecb857f74a8646c8f25687c51549866777b63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_158c1820d35fd5aa316c45bcd59c34c330a4ae36fe85cdf679bb90a20339819d->leave($__internal_158c1820d35fd5aa316c45bcd59c34c330a4ae36fe85cdf679bb90a20339819d_prof);

        
        $__internal_b219930cf2e3ad0bae1a7cab8fecb857f74a8646c8f25687c51549866777b63c->leave($__internal_b219930cf2e3ad0bae1a7cab8fecb857f74a8646c8f25687c51549866777b63c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdb26d5adb41b10130c1b35a0b1d8cb32c787e3dd505f8807b5de399534cdcef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb26d5adb41b10130c1b35a0b1d8cb32c787e3dd505f8807b5de399534cdcef->enter($__internal_bdb26d5adb41b10130c1b35a0b1d8cb32c787e3dd505f8807b5de399534cdcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6359714bb5b409be05d591bc1c076f549a3960d7be71293d9b96facd1bc9c239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6359714bb5b409be05d591bc1c076f549a3960d7be71293d9b96facd1bc9c239->enter($__internal_6359714bb5b409be05d591bc1c076f549a3960d7be71293d9b96facd1bc9c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6359714bb5b409be05d591bc1c076f549a3960d7be71293d9b96facd1bc9c239->leave($__internal_6359714bb5b409be05d591bc1c076f549a3960d7be71293d9b96facd1bc9c239_prof);

        
        $__internal_bdb26d5adb41b10130c1b35a0b1d8cb32c787e3dd505f8807b5de399534cdcef->leave($__internal_bdb26d5adb41b10130c1b35a0b1d8cb32c787e3dd505f8807b5de399534cdcef_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a04c7332b7e292c6dd1321f62f2cb1d330121a00751eb9d1c238d6f0f3c71cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04c7332b7e292c6dd1321f62f2cb1d330121a00751eb9d1c238d6f0f3c71cda->enter($__internal_a04c7332b7e292c6dd1321f62f2cb1d330121a00751eb9d1c238d6f0f3c71cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9d927654cd4104d003d63eaf783d4de1aca7c247e9db1903286c2b8f4225ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d927654cd4104d003d63eaf783d4de1aca7c247e9db1903286c2b8f4225ec3->enter($__internal_c9d927654cd4104d003d63eaf783d4de1aca7c247e9db1903286c2b8f4225ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c9d927654cd4104d003d63eaf783d4de1aca7c247e9db1903286c2b8f4225ec3->leave($__internal_c9d927654cd4104d003d63eaf783d4de1aca7c247e9db1903286c2b8f4225ec3_prof);

        
        $__internal_a04c7332b7e292c6dd1321f62f2cb1d330121a00751eb9d1c238d6f0f3c71cda->leave($__internal_a04c7332b7e292c6dd1321f62f2cb1d330121a00751eb9d1c238d6f0f3c71cda_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_33e56040dbf75659bfa5fe769643aece6bc827d17da4abe7e1ac7cf5a17cdc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e56040dbf75659bfa5fe769643aece6bc827d17da4abe7e1ac7cf5a17cdc20->enter($__internal_33e56040dbf75659bfa5fe769643aece6bc827d17da4abe7e1ac7cf5a17cdc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_391462897b860430bbba80984676f53db34c6c5604437a0aa9174a13cd4b0ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391462897b860430bbba80984676f53db34c6c5604437a0aa9174a13cd4b0ffe->enter($__internal_391462897b860430bbba80984676f53db34c6c5604437a0aa9174a13cd4b0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_391462897b860430bbba80984676f53db34c6c5604437a0aa9174a13cd4b0ffe->leave($__internal_391462897b860430bbba80984676f53db34c6c5604437a0aa9174a13cd4b0ffe_prof);

        
        $__internal_33e56040dbf75659bfa5fe769643aece6bc827d17da4abe7e1ac7cf5a17cdc20->leave($__internal_33e56040dbf75659bfa5fe769643aece6bc827d17da4abe7e1ac7cf5a17cdc20_prof);

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
