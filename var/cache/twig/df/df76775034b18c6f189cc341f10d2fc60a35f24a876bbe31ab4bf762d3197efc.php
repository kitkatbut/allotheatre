<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_26de4311c67490820b9b25e456d1384a7fac160a3aaa67b54d96f3b9415b3185 extends Twig_Template
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
        $__internal_a45c041794eac41775fdba9205ccfb99b66cb0f670d96ca4af306e50da5eb965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45c041794eac41775fdba9205ccfb99b66cb0f670d96ca4af306e50da5eb965->enter($__internal_a45c041794eac41775fdba9205ccfb99b66cb0f670d96ca4af306e50da5eb965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a45c041794eac41775fdba9205ccfb99b66cb0f670d96ca4af306e50da5eb965->leave($__internal_a45c041794eac41775fdba9205ccfb99b66cb0f670d96ca4af306e50da5eb965_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_735e136437c38e36963116373aa0e0124be6c65a5440b3f1749ba8b2f804ca88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735e136437c38e36963116373aa0e0124be6c65a5440b3f1749ba8b2f804ca88->enter($__internal_735e136437c38e36963116373aa0e0124be6c65a5440b3f1749ba8b2f804ca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_735e136437c38e36963116373aa0e0124be6c65a5440b3f1749ba8b2f804ca88->leave($__internal_735e136437c38e36963116373aa0e0124be6c65a5440b3f1749ba8b2f804ca88_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d8105364f9183c28ad67bef4838f9d4e9445ac7f717bdbd48df7c8a755eff69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8105364f9183c28ad67bef4838f9d4e9445ac7f717bdbd48df7c8a755eff69->enter($__internal_3d8105364f9183c28ad67bef4838f9d4e9445ac7f717bdbd48df7c8a755eff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3d8105364f9183c28ad67bef4838f9d4e9445ac7f717bdbd48df7c8a755eff69->leave($__internal_3d8105364f9183c28ad67bef4838f9d4e9445ac7f717bdbd48df7c8a755eff69_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_55f359ff86735393c72dd1932ae8c14345a2ad27bb6334f2a3362fdef1bc643d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f359ff86735393c72dd1932ae8c14345a2ad27bb6334f2a3362fdef1bc643d->enter($__internal_55f359ff86735393c72dd1932ae8c14345a2ad27bb6334f2a3362fdef1bc643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55f359ff86735393c72dd1932ae8c14345a2ad27bb6334f2a3362fdef1bc643d->leave($__internal_55f359ff86735393c72dd1932ae8c14345a2ad27bb6334f2a3362fdef1bc643d_prof);

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
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
