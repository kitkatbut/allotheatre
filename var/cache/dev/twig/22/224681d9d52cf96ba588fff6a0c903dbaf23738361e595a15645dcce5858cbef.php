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
        $__internal_b4a32ad607b1036e5d571b156cd82895f35476c50a90aa7916639c2f92611701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a32ad607b1036e5d571b156cd82895f35476c50a90aa7916639c2f92611701->enter($__internal_b4a32ad607b1036e5d571b156cd82895f35476c50a90aa7916639c2f92611701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_86a4cdfe46ab090bd7484b29a0c70d3eb5d8e51b11ea3753986bbc670f547ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a4cdfe46ab090bd7484b29a0c70d3eb5d8e51b11ea3753986bbc670f547ecd->enter($__internal_86a4cdfe46ab090bd7484b29a0c70d3eb5d8e51b11ea3753986bbc670f547ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b4a32ad607b1036e5d571b156cd82895f35476c50a90aa7916639c2f92611701->leave($__internal_b4a32ad607b1036e5d571b156cd82895f35476c50a90aa7916639c2f92611701_prof);

        
        $__internal_86a4cdfe46ab090bd7484b29a0c70d3eb5d8e51b11ea3753986bbc670f547ecd->leave($__internal_86a4cdfe46ab090bd7484b29a0c70d3eb5d8e51b11ea3753986bbc670f547ecd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51576cd4de6cd493bdc71b665ade6a3d27ce8eaaa4c0929df9a282e233977a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51576cd4de6cd493bdc71b665ade6a3d27ce8eaaa4c0929df9a282e233977a2b->enter($__internal_51576cd4de6cd493bdc71b665ade6a3d27ce8eaaa4c0929df9a282e233977a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_934c3354d8c9f144d28f60d2023e0d495763b702dc2147a62727cf9a61730930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934c3354d8c9f144d28f60d2023e0d495763b702dc2147a62727cf9a61730930->enter($__internal_934c3354d8c9f144d28f60d2023e0d495763b702dc2147a62727cf9a61730930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_934c3354d8c9f144d28f60d2023e0d495763b702dc2147a62727cf9a61730930->leave($__internal_934c3354d8c9f144d28f60d2023e0d495763b702dc2147a62727cf9a61730930_prof);

        
        $__internal_51576cd4de6cd493bdc71b665ade6a3d27ce8eaaa4c0929df9a282e233977a2b->leave($__internal_51576cd4de6cd493bdc71b665ade6a3d27ce8eaaa4c0929df9a282e233977a2b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a82818f7475c4e9e83d1918c639a1e9e4bca8eeb445f6f01446d647b9d10f39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82818f7475c4e9e83d1918c639a1e9e4bca8eeb445f6f01446d647b9d10f39b->enter($__internal_a82818f7475c4e9e83d1918c639a1e9e4bca8eeb445f6f01446d647b9d10f39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9e9ee20772e710d8aeb4511460b9ba30f8e5f20ee70df49c2245338aadd99f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e9ee20772e710d8aeb4511460b9ba30f8e5f20ee70df49c2245338aadd99f8->enter($__internal_a9e9ee20772e710d8aeb4511460b9ba30f8e5f20ee70df49c2245338aadd99f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a9e9ee20772e710d8aeb4511460b9ba30f8e5f20ee70df49c2245338aadd99f8->leave($__internal_a9e9ee20772e710d8aeb4511460b9ba30f8e5f20ee70df49c2245338aadd99f8_prof);

        
        $__internal_a82818f7475c4e9e83d1918c639a1e9e4bca8eeb445f6f01446d647b9d10f39b->leave($__internal_a82818f7475c4e9e83d1918c639a1e9e4bca8eeb445f6f01446d647b9d10f39b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee572e26ab5aa3a11527516e42d65505a2cddb5dda0d58a1a3cc74fff8ac718a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee572e26ab5aa3a11527516e42d65505a2cddb5dda0d58a1a3cc74fff8ac718a->enter($__internal_ee572e26ab5aa3a11527516e42d65505a2cddb5dda0d58a1a3cc74fff8ac718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c8a730e404c05915cce35549dc8da4b4d966e70eee4335ab9c281e3f3399f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8a730e404c05915cce35549dc8da4b4d966e70eee4335ab9c281e3f3399f11->enter($__internal_2c8a730e404c05915cce35549dc8da4b4d966e70eee4335ab9c281e3f3399f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c8a730e404c05915cce35549dc8da4b4d966e70eee4335ab9c281e3f3399f11->leave($__internal_2c8a730e404c05915cce35549dc8da4b4d966e70eee4335ab9c281e3f3399f11_prof);

        
        $__internal_ee572e26ab5aa3a11527516e42d65505a2cddb5dda0d58a1a3cc74fff8ac718a->leave($__internal_ee572e26ab5aa3a11527516e42d65505a2cddb5dda0d58a1a3cc74fff8ac718a_prof);

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
