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
        $__internal_dec39b0ee55f7dbece417b95fbce1fc6c4b52912622da80bf2cf0f62a6d6e254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec39b0ee55f7dbece417b95fbce1fc6c4b52912622da80bf2cf0f62a6d6e254->enter($__internal_dec39b0ee55f7dbece417b95fbce1fc6c4b52912622da80bf2cf0f62a6d6e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_41f128b186844f56e898bd931ff69e8d1378a4a4571d9b7dbd89b3e26fcb9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f128b186844f56e898bd931ff69e8d1378a4a4571d9b7dbd89b3e26fcb9853->enter($__internal_41f128b186844f56e898bd931ff69e8d1378a4a4571d9b7dbd89b3e26fcb9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dec39b0ee55f7dbece417b95fbce1fc6c4b52912622da80bf2cf0f62a6d6e254->leave($__internal_dec39b0ee55f7dbece417b95fbce1fc6c4b52912622da80bf2cf0f62a6d6e254_prof);

        
        $__internal_41f128b186844f56e898bd931ff69e8d1378a4a4571d9b7dbd89b3e26fcb9853->leave($__internal_41f128b186844f56e898bd931ff69e8d1378a4a4571d9b7dbd89b3e26fcb9853_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_951b10d8c3433e09fd33aaf37496baaa5967881296f10ba67a5765f6cfd37bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951b10d8c3433e09fd33aaf37496baaa5967881296f10ba67a5765f6cfd37bd0->enter($__internal_951b10d8c3433e09fd33aaf37496baaa5967881296f10ba67a5765f6cfd37bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cd62529877f1917ee1f810fc83c093dd5786b176b9e593bd67c5b13038df505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd62529877f1917ee1f810fc83c093dd5786b176b9e593bd67c5b13038df505->enter($__internal_7cd62529877f1917ee1f810fc83c093dd5786b176b9e593bd67c5b13038df505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7cd62529877f1917ee1f810fc83c093dd5786b176b9e593bd67c5b13038df505->leave($__internal_7cd62529877f1917ee1f810fc83c093dd5786b176b9e593bd67c5b13038df505_prof);

        
        $__internal_951b10d8c3433e09fd33aaf37496baaa5967881296f10ba67a5765f6cfd37bd0->leave($__internal_951b10d8c3433e09fd33aaf37496baaa5967881296f10ba67a5765f6cfd37bd0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e4a0b816c2a6db7e1bc1a31d211b54a9627764f832c8a7fad19575fc28e36fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4a0b816c2a6db7e1bc1a31d211b54a9627764f832c8a7fad19575fc28e36fb->enter($__internal_7e4a0b816c2a6db7e1bc1a31d211b54a9627764f832c8a7fad19575fc28e36fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_504608fe3e39361462d1c685e01518f6a252c9cf40ed21f589038fca28bf8d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504608fe3e39361462d1c685e01518f6a252c9cf40ed21f589038fca28bf8d82->enter($__internal_504608fe3e39361462d1c685e01518f6a252c9cf40ed21f589038fca28bf8d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_504608fe3e39361462d1c685e01518f6a252c9cf40ed21f589038fca28bf8d82->leave($__internal_504608fe3e39361462d1c685e01518f6a252c9cf40ed21f589038fca28bf8d82_prof);

        
        $__internal_7e4a0b816c2a6db7e1bc1a31d211b54a9627764f832c8a7fad19575fc28e36fb->leave($__internal_7e4a0b816c2a6db7e1bc1a31d211b54a9627764f832c8a7fad19575fc28e36fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80c33d096058f7b936d807c5f65d90bc531d7604861a6f18498e6eedfe55475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c33d096058f7b936d807c5f65d90bc531d7604861a6f18498e6eedfe55475->enter($__internal_f80c33d096058f7b936d807c5f65d90bc531d7604861a6f18498e6eedfe55475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a7387a2df4793cd96f40fa58503e15f7e6f2644c4a51f713d170b8b4feb85d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7387a2df4793cd96f40fa58503e15f7e6f2644c4a51f713d170b8b4feb85d4->enter($__internal_1a7387a2df4793cd96f40fa58503e15f7e6f2644c4a51f713d170b8b4feb85d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a7387a2df4793cd96f40fa58503e15f7e6f2644c4a51f713d170b8b4feb85d4->leave($__internal_1a7387a2df4793cd96f40fa58503e15f7e6f2644c4a51f713d170b8b4feb85d4_prof);

        
        $__internal_f80c33d096058f7b936d807c5f65d90bc531d7604861a6f18498e6eedfe55475->leave($__internal_f80c33d096058f7b936d807c5f65d90bc531d7604861a6f18498e6eedfe55475_prof);

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
