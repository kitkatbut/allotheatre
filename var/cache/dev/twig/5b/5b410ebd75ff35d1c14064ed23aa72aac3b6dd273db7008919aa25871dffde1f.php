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
        $__internal_3f84a3473e075bc34776d0a5014ad89c5817765f7e0015d287d04e7a2da195cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f84a3473e075bc34776d0a5014ad89c5817765f7e0015d287d04e7a2da195cb->enter($__internal_3f84a3473e075bc34776d0a5014ad89c5817765f7e0015d287d04e7a2da195cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bcde0af3c671e68f0647fbdc1fcb6ec8cf8cbb983da3c611653878df329f8329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcde0af3c671e68f0647fbdc1fcb6ec8cf8cbb983da3c611653878df329f8329->enter($__internal_bcde0af3c671e68f0647fbdc1fcb6ec8cf8cbb983da3c611653878df329f8329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3f84a3473e075bc34776d0a5014ad89c5817765f7e0015d287d04e7a2da195cb->leave($__internal_3f84a3473e075bc34776d0a5014ad89c5817765f7e0015d287d04e7a2da195cb_prof);

        
        $__internal_bcde0af3c671e68f0647fbdc1fcb6ec8cf8cbb983da3c611653878df329f8329->leave($__internal_bcde0af3c671e68f0647fbdc1fcb6ec8cf8cbb983da3c611653878df329f8329_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08b832a5b0eb0e607655f45dc1025b2ce8a3ed404ebd7a6c4ca03bd43998c8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b832a5b0eb0e607655f45dc1025b2ce8a3ed404ebd7a6c4ca03bd43998c8a1->enter($__internal_08b832a5b0eb0e607655f45dc1025b2ce8a3ed404ebd7a6c4ca03bd43998c8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_454c4afbd764c9a6bd2a38516e1604fe89f2354e6ebe07fde6d886b77a4add73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454c4afbd764c9a6bd2a38516e1604fe89f2354e6ebe07fde6d886b77a4add73->enter($__internal_454c4afbd764c9a6bd2a38516e1604fe89f2354e6ebe07fde6d886b77a4add73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_454c4afbd764c9a6bd2a38516e1604fe89f2354e6ebe07fde6d886b77a4add73->leave($__internal_454c4afbd764c9a6bd2a38516e1604fe89f2354e6ebe07fde6d886b77a4add73_prof);

        
        $__internal_08b832a5b0eb0e607655f45dc1025b2ce8a3ed404ebd7a6c4ca03bd43998c8a1->leave($__internal_08b832a5b0eb0e607655f45dc1025b2ce8a3ed404ebd7a6c4ca03bd43998c8a1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2921495892435db9c958ab58de15e1910f871012edbf0e9714b92302d365845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2921495892435db9c958ab58de15e1910f871012edbf0e9714b92302d365845->enter($__internal_b2921495892435db9c958ab58de15e1910f871012edbf0e9714b92302d365845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7205e061d96500bd47ef07d41878a6a2c4334b31fb08be34e8f69813eaa50602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7205e061d96500bd47ef07d41878a6a2c4334b31fb08be34e8f69813eaa50602->enter($__internal_7205e061d96500bd47ef07d41878a6a2c4334b31fb08be34e8f69813eaa50602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7205e061d96500bd47ef07d41878a6a2c4334b31fb08be34e8f69813eaa50602->leave($__internal_7205e061d96500bd47ef07d41878a6a2c4334b31fb08be34e8f69813eaa50602_prof);

        
        $__internal_b2921495892435db9c958ab58de15e1910f871012edbf0e9714b92302d365845->leave($__internal_b2921495892435db9c958ab58de15e1910f871012edbf0e9714b92302d365845_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_724ed30a623e6433160ce84da8fd766b98d95a86ad0371529c3750ac4da98b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724ed30a623e6433160ce84da8fd766b98d95a86ad0371529c3750ac4da98b5d->enter($__internal_724ed30a623e6433160ce84da8fd766b98d95a86ad0371529c3750ac4da98b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_366a8d3768df87aab6bb475fb1f25f8fe8a0fb50b7b839886c764c24a189203c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366a8d3768df87aab6bb475fb1f25f8fe8a0fb50b7b839886c764c24a189203c->enter($__internal_366a8d3768df87aab6bb475fb1f25f8fe8a0fb50b7b839886c764c24a189203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_366a8d3768df87aab6bb475fb1f25f8fe8a0fb50b7b839886c764c24a189203c->leave($__internal_366a8d3768df87aab6bb475fb1f25f8fe8a0fb50b7b839886c764c24a189203c_prof);

        
        $__internal_724ed30a623e6433160ce84da8fd766b98d95a86ad0371529c3750ac4da98b5d->leave($__internal_724ed30a623e6433160ce84da8fd766b98d95a86ad0371529c3750ac4da98b5d_prof);

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
