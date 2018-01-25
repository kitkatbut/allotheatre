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
        $__internal_0ac15326453672b60e86527b77822dcbaa99f738ee1b5c088cf96c9f6ce6d001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac15326453672b60e86527b77822dcbaa99f738ee1b5c088cf96c9f6ce6d001->enter($__internal_0ac15326453672b60e86527b77822dcbaa99f738ee1b5c088cf96c9f6ce6d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bbbdcf4b817a4e8de94e85cfe783ecc137cd71810ee8d3754c23e284e24d49f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbdcf4b817a4e8de94e85cfe783ecc137cd71810ee8d3754c23e284e24d49f2->enter($__internal_bbbdcf4b817a4e8de94e85cfe783ecc137cd71810ee8d3754c23e284e24d49f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0ac15326453672b60e86527b77822dcbaa99f738ee1b5c088cf96c9f6ce6d001->leave($__internal_0ac15326453672b60e86527b77822dcbaa99f738ee1b5c088cf96c9f6ce6d001_prof);

        
        $__internal_bbbdcf4b817a4e8de94e85cfe783ecc137cd71810ee8d3754c23e284e24d49f2->leave($__internal_bbbdcf4b817a4e8de94e85cfe783ecc137cd71810ee8d3754c23e284e24d49f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df5c24e2a7ac93f9974c845852f4f5e65d44d67ff7e7463bf61ba9f82ba07c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5c24e2a7ac93f9974c845852f4f5e65d44d67ff7e7463bf61ba9f82ba07c21->enter($__internal_df5c24e2a7ac93f9974c845852f4f5e65d44d67ff7e7463bf61ba9f82ba07c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e4fed64c0f014d4ecced423c52eab7fa75f307a844d97c9cd4793de06623ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4fed64c0f014d4ecced423c52eab7fa75f307a844d97c9cd4793de06623ffc->enter($__internal_2e4fed64c0f014d4ecced423c52eab7fa75f307a844d97c9cd4793de06623ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e4fed64c0f014d4ecced423c52eab7fa75f307a844d97c9cd4793de06623ffc->leave($__internal_2e4fed64c0f014d4ecced423c52eab7fa75f307a844d97c9cd4793de06623ffc_prof);

        
        $__internal_df5c24e2a7ac93f9974c845852f4f5e65d44d67ff7e7463bf61ba9f82ba07c21->leave($__internal_df5c24e2a7ac93f9974c845852f4f5e65d44d67ff7e7463bf61ba9f82ba07c21_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_30feac27089f348c0d767eee12d676d7ced73bad33a5ab26f4c7d47fda975203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30feac27089f348c0d767eee12d676d7ced73bad33a5ab26f4c7d47fda975203->enter($__internal_30feac27089f348c0d767eee12d676d7ced73bad33a5ab26f4c7d47fda975203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4c07d45066c8e03bad246708eb397f808a26e49e96f620854e7cc0577107b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c07d45066c8e03bad246708eb397f808a26e49e96f620854e7cc0577107b97->enter($__internal_f4c07d45066c8e03bad246708eb397f808a26e49e96f620854e7cc0577107b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4c07d45066c8e03bad246708eb397f808a26e49e96f620854e7cc0577107b97->leave($__internal_f4c07d45066c8e03bad246708eb397f808a26e49e96f620854e7cc0577107b97_prof);

        
        $__internal_30feac27089f348c0d767eee12d676d7ced73bad33a5ab26f4c7d47fda975203->leave($__internal_30feac27089f348c0d767eee12d676d7ced73bad33a5ab26f4c7d47fda975203_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ffbeab635a48a5c6718e4b1d4b36648825a888ded502818f07eaee7da5e0799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffbeab635a48a5c6718e4b1d4b36648825a888ded502818f07eaee7da5e0799->enter($__internal_5ffbeab635a48a5c6718e4b1d4b36648825a888ded502818f07eaee7da5e0799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e95fa27e5ce2f4f321268df138f67e407ea30e1fc3aae8b1b21d8d234832de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e95fa27e5ce2f4f321268df138f67e407ea30e1fc3aae8b1b21d8d234832de3->enter($__internal_8e95fa27e5ce2f4f321268df138f67e407ea30e1fc3aae8b1b21d8d234832de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e95fa27e5ce2f4f321268df138f67e407ea30e1fc3aae8b1b21d8d234832de3->leave($__internal_8e95fa27e5ce2f4f321268df138f67e407ea30e1fc3aae8b1b21d8d234832de3_prof);

        
        $__internal_5ffbeab635a48a5c6718e4b1d4b36648825a888ded502818f07eaee7da5e0799->leave($__internal_5ffbeab635a48a5c6718e4b1d4b36648825a888ded502818f07eaee7da5e0799_prof);

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
