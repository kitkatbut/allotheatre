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
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556->enter($__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e->enter($__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556->leave($__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556_prof);

        
        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e->leave($__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1->enter($__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60->enter($__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60->leave($__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60_prof);

        
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1->leave($__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c->enter($__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f->enter($__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f->leave($__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f_prof);

        
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c->leave($__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c->enter($__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020->enter($__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020->leave($__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020_prof);

        
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c->leave($__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c_prof);

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
