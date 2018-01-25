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
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f->enter($__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154->enter($__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f->leave($__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f_prof);

        
        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154->leave($__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77->enter($__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c4ddd12f7c1c5ecf78f5f350985176541b830d56831e7a228e7a450ec6ca84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4ddd12f7c1c5ecf78f5f350985176541b830d56831e7a228e7a450ec6ca84f->enter($__internal_7c4ddd12f7c1c5ecf78f5f350985176541b830d56831e7a228e7a450ec6ca84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7c4ddd12f7c1c5ecf78f5f350985176541b830d56831e7a228e7a450ec6ca84f->leave($__internal_7c4ddd12f7c1c5ecf78f5f350985176541b830d56831e7a228e7a450ec6ca84f_prof);

        
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77->leave($__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f->enter($__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ea9cab3b3cc4ba8c028e08b9eaa30fb41b40f6a6e9eac96b2d0037df6d2dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea9cab3b3cc4ba8c028e08b9eaa30fb41b40f6a6e9eac96b2d0037df6d2dac6->enter($__internal_8ea9cab3b3cc4ba8c028e08b9eaa30fb41b40f6a6e9eac96b2d0037df6d2dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8ea9cab3b3cc4ba8c028e08b9eaa30fb41b40f6a6e9eac96b2d0037df6d2dac6->leave($__internal_8ea9cab3b3cc4ba8c028e08b9eaa30fb41b40f6a6e9eac96b2d0037df6d2dac6_prof);

        
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f->leave($__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2->enter($__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a2c62d223650059c5de9fa002eead646f909834bd75c82886da5e1a12b4e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2c62d223650059c5de9fa002eead646f909834bd75c82886da5e1a12b4e7f1->enter($__internal_3a2c62d223650059c5de9fa002eead646f909834bd75c82886da5e1a12b4e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a2c62d223650059c5de9fa002eead646f909834bd75c82886da5e1a12b4e7f1->leave($__internal_3a2c62d223650059c5de9fa002eead646f909834bd75c82886da5e1a12b4e7f1_prof);

        
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2->leave($__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2_prof);

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
