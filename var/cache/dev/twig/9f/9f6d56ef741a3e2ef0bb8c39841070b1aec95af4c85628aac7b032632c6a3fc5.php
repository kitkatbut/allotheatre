<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1fccbcb4bbe07d3bd48672c6a3bb4f7d505eb2ba00db6bb6d9dc9622320f96 extends Twig_Template
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
        $__internal_d8d1f753973e6a82b431a3b236b92c013148137b4eb9a23f36381af6283b3af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d1f753973e6a82b431a3b236b92c013148137b4eb9a23f36381af6283b3af6->enter($__internal_d8d1f753973e6a82b431a3b236b92c013148137b4eb9a23f36381af6283b3af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_428f5b0ef8b08733193e3d0f4d45dcee5eccae8257057a5f173ba8d0a1ba156d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428f5b0ef8b08733193e3d0f4d45dcee5eccae8257057a5f173ba8d0a1ba156d->enter($__internal_428f5b0ef8b08733193e3d0f4d45dcee5eccae8257057a5f173ba8d0a1ba156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d8d1f753973e6a82b431a3b236b92c013148137b4eb9a23f36381af6283b3af6->leave($__internal_d8d1f753973e6a82b431a3b236b92c013148137b4eb9a23f36381af6283b3af6_prof);

        
        $__internal_428f5b0ef8b08733193e3d0f4d45dcee5eccae8257057a5f173ba8d0a1ba156d->leave($__internal_428f5b0ef8b08733193e3d0f4d45dcee5eccae8257057a5f173ba8d0a1ba156d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_117ef829e857783dbfdce9b2f3f8b4b1e924ce8907373f701d747f9992cdda65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117ef829e857783dbfdce9b2f3f8b4b1e924ce8907373f701d747f9992cdda65->enter($__internal_117ef829e857783dbfdce9b2f3f8b4b1e924ce8907373f701d747f9992cdda65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a746c1bb959102871461eeb396ebabc0c4c25aa404902f1afe779778b0d59bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a746c1bb959102871461eeb396ebabc0c4c25aa404902f1afe779778b0d59bc->enter($__internal_3a746c1bb959102871461eeb396ebabc0c4c25aa404902f1afe779778b0d59bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a746c1bb959102871461eeb396ebabc0c4c25aa404902f1afe779778b0d59bc->leave($__internal_3a746c1bb959102871461eeb396ebabc0c4c25aa404902f1afe779778b0d59bc_prof);

        
        $__internal_117ef829e857783dbfdce9b2f3f8b4b1e924ce8907373f701d747f9992cdda65->leave($__internal_117ef829e857783dbfdce9b2f3f8b4b1e924ce8907373f701d747f9992cdda65_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4927f1e0464af8dd749f0718df2a7bdc13d99a99616692313b78b4903075e297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4927f1e0464af8dd749f0718df2a7bdc13d99a99616692313b78b4903075e297->enter($__internal_4927f1e0464af8dd749f0718df2a7bdc13d99a99616692313b78b4903075e297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_daa8929d87264accc14f235b15f855cada7a72ef14fc6c7b035b2f2d9f97013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa8929d87264accc14f235b15f855cada7a72ef14fc6c7b035b2f2d9f97013d->enter($__internal_daa8929d87264accc14f235b15f855cada7a72ef14fc6c7b035b2f2d9f97013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_daa8929d87264accc14f235b15f855cada7a72ef14fc6c7b035b2f2d9f97013d->leave($__internal_daa8929d87264accc14f235b15f855cada7a72ef14fc6c7b035b2f2d9f97013d_prof);

        
        $__internal_4927f1e0464af8dd749f0718df2a7bdc13d99a99616692313b78b4903075e297->leave($__internal_4927f1e0464af8dd749f0718df2a7bdc13d99a99616692313b78b4903075e297_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c56424fa6d77af1e460cb87a786e3f5b87d6d08aae120516465e0d446cc06d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c56424fa6d77af1e460cb87a786e3f5b87d6d08aae120516465e0d446cc06d4->enter($__internal_1c56424fa6d77af1e460cb87a786e3f5b87d6d08aae120516465e0d446cc06d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ebe3b51b80984969e19537e18e8a55dde634c482f1ab735e75e6fe831690121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebe3b51b80984969e19537e18e8a55dde634c482f1ab735e75e6fe831690121->enter($__internal_0ebe3b51b80984969e19537e18e8a55dde634c482f1ab735e75e6fe831690121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ebe3b51b80984969e19537e18e8a55dde634c482f1ab735e75e6fe831690121->leave($__internal_0ebe3b51b80984969e19537e18e8a55dde634c482f1ab735e75e6fe831690121_prof);

        
        $__internal_1c56424fa6d77af1e460cb87a786e3f5b87d6d08aae120516465e0d446cc06d4->leave($__internal_1c56424fa6d77af1e460cb87a786e3f5b87d6d08aae120516465e0d446cc06d4_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
