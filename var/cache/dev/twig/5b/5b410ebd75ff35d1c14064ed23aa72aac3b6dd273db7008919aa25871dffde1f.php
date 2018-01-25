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
        $__internal_aa307363fbcb0f34f85f9ef91db42a48bdb03fae0f6c63283f3c95186c53a416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa307363fbcb0f34f85f9ef91db42a48bdb03fae0f6c63283f3c95186c53a416->enter($__internal_aa307363fbcb0f34f85f9ef91db42a48bdb03fae0f6c63283f3c95186c53a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_49e91b57550ea28e321edada3ba4c31ee15ae34fcdbdcb0cf9e42501664ff89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e91b57550ea28e321edada3ba4c31ee15ae34fcdbdcb0cf9e42501664ff89d->enter($__internal_49e91b57550ea28e321edada3ba4c31ee15ae34fcdbdcb0cf9e42501664ff89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_aa307363fbcb0f34f85f9ef91db42a48bdb03fae0f6c63283f3c95186c53a416->leave($__internal_aa307363fbcb0f34f85f9ef91db42a48bdb03fae0f6c63283f3c95186c53a416_prof);

        
        $__internal_49e91b57550ea28e321edada3ba4c31ee15ae34fcdbdcb0cf9e42501664ff89d->leave($__internal_49e91b57550ea28e321edada3ba4c31ee15ae34fcdbdcb0cf9e42501664ff89d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43042abd80a4b10bc175de8dce1db2b7e0b558c2f81f513659be8635663e2cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43042abd80a4b10bc175de8dce1db2b7e0b558c2f81f513659be8635663e2cb9->enter($__internal_43042abd80a4b10bc175de8dce1db2b7e0b558c2f81f513659be8635663e2cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4bf859ee099e6ff8ae4f2d2f812781a23b029f7abb925cbc34d0407a13775e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bf859ee099e6ff8ae4f2d2f812781a23b029f7abb925cbc34d0407a13775e1->enter($__internal_b4bf859ee099e6ff8ae4f2d2f812781a23b029f7abb925cbc34d0407a13775e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b4bf859ee099e6ff8ae4f2d2f812781a23b029f7abb925cbc34d0407a13775e1->leave($__internal_b4bf859ee099e6ff8ae4f2d2f812781a23b029f7abb925cbc34d0407a13775e1_prof);

        
        $__internal_43042abd80a4b10bc175de8dce1db2b7e0b558c2f81f513659be8635663e2cb9->leave($__internal_43042abd80a4b10bc175de8dce1db2b7e0b558c2f81f513659be8635663e2cb9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_08198dcfb9fa7ff14395cc15d479c468cb21b19c3b31081aa1c9c8f87027946b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08198dcfb9fa7ff14395cc15d479c468cb21b19c3b31081aa1c9c8f87027946b->enter($__internal_08198dcfb9fa7ff14395cc15d479c468cb21b19c3b31081aa1c9c8f87027946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3ffc5613c84ba95d3b464ac2d09baa44a457aaa9584553c12f09308f233ed54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ffc5613c84ba95d3b464ac2d09baa44a457aaa9584553c12f09308f233ed54->enter($__internal_b3ffc5613c84ba95d3b464ac2d09baa44a457aaa9584553c12f09308f233ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b3ffc5613c84ba95d3b464ac2d09baa44a457aaa9584553c12f09308f233ed54->leave($__internal_b3ffc5613c84ba95d3b464ac2d09baa44a457aaa9584553c12f09308f233ed54_prof);

        
        $__internal_08198dcfb9fa7ff14395cc15d479c468cb21b19c3b31081aa1c9c8f87027946b->leave($__internal_08198dcfb9fa7ff14395cc15d479c468cb21b19c3b31081aa1c9c8f87027946b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04497f560ed91e2ec7e96dd5e9e1370dbf760b0d60ddd5b822ec14d0c7c7c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04497f560ed91e2ec7e96dd5e9e1370dbf760b0d60ddd5b822ec14d0c7c7c0b->enter($__internal_c04497f560ed91e2ec7e96dd5e9e1370dbf760b0d60ddd5b822ec14d0c7c7c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b70f7e82aedfc13ec754ee92feba3918d7c70b0844d05afbff5696cead2ebaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70f7e82aedfc13ec754ee92feba3918d7c70b0844d05afbff5696cead2ebaee->enter($__internal_b70f7e82aedfc13ec754ee92feba3918d7c70b0844d05afbff5696cead2ebaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b70f7e82aedfc13ec754ee92feba3918d7c70b0844d05afbff5696cead2ebaee->leave($__internal_b70f7e82aedfc13ec754ee92feba3918d7c70b0844d05afbff5696cead2ebaee_prof);

        
        $__internal_c04497f560ed91e2ec7e96dd5e9e1370dbf760b0d60ddd5b822ec14d0c7c7c0b->leave($__internal_c04497f560ed91e2ec7e96dd5e9e1370dbf760b0d60ddd5b822ec14d0c7c7c0b_prof);

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
