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
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510->enter($__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168->enter($__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510->leave($__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510_prof);

        
        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168->leave($__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8->enter($__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130->enter($__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130->leave($__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130_prof);

        
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8->leave($__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee->enter($__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834->enter($__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834->leave($__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834_prof);

        
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee->leave($__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5->enter($__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5->enter($__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5->leave($__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5_prof);

        
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5->leave($__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5_prof);

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
