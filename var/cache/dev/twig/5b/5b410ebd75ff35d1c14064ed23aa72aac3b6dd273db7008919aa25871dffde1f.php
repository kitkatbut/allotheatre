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
        $__internal_8646198c4505c6df9ad27f9572340b71f966c10efb4cecca90371927c5e777a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8646198c4505c6df9ad27f9572340b71f966c10efb4cecca90371927c5e777a7->enter($__internal_8646198c4505c6df9ad27f9572340b71f966c10efb4cecca90371927c5e777a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_489f8166596848a8efbbebae77be59115e3a4ab9500b93aba43c919a895df1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489f8166596848a8efbbebae77be59115e3a4ab9500b93aba43c919a895df1be->enter($__internal_489f8166596848a8efbbebae77be59115e3a4ab9500b93aba43c919a895df1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8646198c4505c6df9ad27f9572340b71f966c10efb4cecca90371927c5e777a7->leave($__internal_8646198c4505c6df9ad27f9572340b71f966c10efb4cecca90371927c5e777a7_prof);

        
        $__internal_489f8166596848a8efbbebae77be59115e3a4ab9500b93aba43c919a895df1be->leave($__internal_489f8166596848a8efbbebae77be59115e3a4ab9500b93aba43c919a895df1be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a749121d89f89e9bf2a44388e77c9eacb25e5eff1b4b686f0f42a664df2bfb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a749121d89f89e9bf2a44388e77c9eacb25e5eff1b4b686f0f42a664df2bfb54->enter($__internal_a749121d89f89e9bf2a44388e77c9eacb25e5eff1b4b686f0f42a664df2bfb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_387c2c697c69a981e8ca4aad3ca9adfefaf70f7e62622f075697b9d856d23e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387c2c697c69a981e8ca4aad3ca9adfefaf70f7e62622f075697b9d856d23e5b->enter($__internal_387c2c697c69a981e8ca4aad3ca9adfefaf70f7e62622f075697b9d856d23e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_387c2c697c69a981e8ca4aad3ca9adfefaf70f7e62622f075697b9d856d23e5b->leave($__internal_387c2c697c69a981e8ca4aad3ca9adfefaf70f7e62622f075697b9d856d23e5b_prof);

        
        $__internal_a749121d89f89e9bf2a44388e77c9eacb25e5eff1b4b686f0f42a664df2bfb54->leave($__internal_a749121d89f89e9bf2a44388e77c9eacb25e5eff1b4b686f0f42a664df2bfb54_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2952b02e91f5607549f27bbeb3e494f3142e347be431a478a85b839f1a78582d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2952b02e91f5607549f27bbeb3e494f3142e347be431a478a85b839f1a78582d->enter($__internal_2952b02e91f5607549f27bbeb3e494f3142e347be431a478a85b839f1a78582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53f425f7b78d4930184e28c101c7ef5118a33981b61986b08057a69b4a07d5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f425f7b78d4930184e28c101c7ef5118a33981b61986b08057a69b4a07d5ce->enter($__internal_53f425f7b78d4930184e28c101c7ef5118a33981b61986b08057a69b4a07d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_53f425f7b78d4930184e28c101c7ef5118a33981b61986b08057a69b4a07d5ce->leave($__internal_53f425f7b78d4930184e28c101c7ef5118a33981b61986b08057a69b4a07d5ce_prof);

        
        $__internal_2952b02e91f5607549f27bbeb3e494f3142e347be431a478a85b839f1a78582d->leave($__internal_2952b02e91f5607549f27bbeb3e494f3142e347be431a478a85b839f1a78582d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdfb3b5d02ffae4bcd2c38a841a66e8dcfd115abbc44cfb488f634bf29977aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfb3b5d02ffae4bcd2c38a841a66e8dcfd115abbc44cfb488f634bf29977aa1->enter($__internal_bdfb3b5d02ffae4bcd2c38a841a66e8dcfd115abbc44cfb488f634bf29977aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86ec8251457ce907e2d53b48bab4e206c8385103e3ac2fb1939a928b04a17d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ec8251457ce907e2d53b48bab4e206c8385103e3ac2fb1939a928b04a17d01->enter($__internal_86ec8251457ce907e2d53b48bab4e206c8385103e3ac2fb1939a928b04a17d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86ec8251457ce907e2d53b48bab4e206c8385103e3ac2fb1939a928b04a17d01->leave($__internal_86ec8251457ce907e2d53b48bab4e206c8385103e3ac2fb1939a928b04a17d01_prof);

        
        $__internal_bdfb3b5d02ffae4bcd2c38a841a66e8dcfd115abbc44cfb488f634bf29977aa1->leave($__internal_bdfb3b5d02ffae4bcd2c38a841a66e8dcfd115abbc44cfb488f634bf29977aa1_prof);

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
