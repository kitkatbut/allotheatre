<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_38442a74564d83394274fdaf508c02d026fc18c4e9db63280b601897ab419170 extends Twig_Template
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
        $__internal_a2e2e3176f3601d010bd3c9d5f273f77691498fd4ceafa4aa1f45810fd705a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e2e3176f3601d010bd3c9d5f273f77691498fd4ceafa4aa1f45810fd705a1d->enter($__internal_a2e2e3176f3601d010bd3c9d5f273f77691498fd4ceafa4aa1f45810fd705a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_532382d4e9e0fd0492a5ab2f3f04ba98894f995a6e288fc9130480b59e832932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532382d4e9e0fd0492a5ab2f3f04ba98894f995a6e288fc9130480b59e832932->enter($__internal_532382d4e9e0fd0492a5ab2f3f04ba98894f995a6e288fc9130480b59e832932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a2e2e3176f3601d010bd3c9d5f273f77691498fd4ceafa4aa1f45810fd705a1d->leave($__internal_a2e2e3176f3601d010bd3c9d5f273f77691498fd4ceafa4aa1f45810fd705a1d_prof);

        
        $__internal_532382d4e9e0fd0492a5ab2f3f04ba98894f995a6e288fc9130480b59e832932->leave($__internal_532382d4e9e0fd0492a5ab2f3f04ba98894f995a6e288fc9130480b59e832932_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e793f2ba2892b830f7bbae324e427f832c383239b8ff1192caf1e8d523f27b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e793f2ba2892b830f7bbae324e427f832c383239b8ff1192caf1e8d523f27b9->enter($__internal_0e793f2ba2892b830f7bbae324e427f832c383239b8ff1192caf1e8d523f27b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd8d586192c7014a0e9cea40b18f53c7530517d8465f0bcd67cad7769c2a8608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8d586192c7014a0e9cea40b18f53c7530517d8465f0bcd67cad7769c2a8608->enter($__internal_dd8d586192c7014a0e9cea40b18f53c7530517d8465f0bcd67cad7769c2a8608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dd8d586192c7014a0e9cea40b18f53c7530517d8465f0bcd67cad7769c2a8608->leave($__internal_dd8d586192c7014a0e9cea40b18f53c7530517d8465f0bcd67cad7769c2a8608_prof);

        
        $__internal_0e793f2ba2892b830f7bbae324e427f832c383239b8ff1192caf1e8d523f27b9->leave($__internal_0e793f2ba2892b830f7bbae324e427f832c383239b8ff1192caf1e8d523f27b9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe8057243a5726fc99d20fde71336dd4ac86ee6bc025b8572871a3291596c8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8057243a5726fc99d20fde71336dd4ac86ee6bc025b8572871a3291596c8bc->enter($__internal_fe8057243a5726fc99d20fde71336dd4ac86ee6bc025b8572871a3291596c8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a1178f8d461bab5af6af665e86c77f4f008e5a58bc712af79fa00a56f1e8b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1178f8d461bab5af6af665e86c77f4f008e5a58bc712af79fa00a56f1e8b68->enter($__internal_2a1178f8d461bab5af6af665e86c77f4f008e5a58bc712af79fa00a56f1e8b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2a1178f8d461bab5af6af665e86c77f4f008e5a58bc712af79fa00a56f1e8b68->leave($__internal_2a1178f8d461bab5af6af665e86c77f4f008e5a58bc712af79fa00a56f1e8b68_prof);

        
        $__internal_fe8057243a5726fc99d20fde71336dd4ac86ee6bc025b8572871a3291596c8bc->leave($__internal_fe8057243a5726fc99d20fde71336dd4ac86ee6bc025b8572871a3291596c8bc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2a1e4bfe1fcbb611141a606e5adaf9aefd9827a93fa9d31be397fd660bd4ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a1e4bfe1fcbb611141a606e5adaf9aefd9827a93fa9d31be397fd660bd4ad0->enter($__internal_b2a1e4bfe1fcbb611141a606e5adaf9aefd9827a93fa9d31be397fd660bd4ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18c447013b3b1ba15138b23c58a64a006e139e2a3a9605a6a7b3a76a577b4563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c447013b3b1ba15138b23c58a64a006e139e2a3a9605a6a7b3a76a577b4563->enter($__internal_18c447013b3b1ba15138b23c58a64a006e139e2a3a9605a6a7b3a76a577b4563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18c447013b3b1ba15138b23c58a64a006e139e2a3a9605a6a7b3a76a577b4563->leave($__internal_18c447013b3b1ba15138b23c58a64a006e139e2a3a9605a6a7b3a76a577b4563_prof);

        
        $__internal_b2a1e4bfe1fcbb611141a606e5adaf9aefd9827a93fa9d31be397fd660bd4ad0->leave($__internal_b2a1e4bfe1fcbb611141a606e5adaf9aefd9827a93fa9d31be397fd660bd4ad0_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
