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
<<<<<<< HEAD
        $__internal_3e7d4b432ae2f74f668cae8b99acfdb16749c4fdf3ab087233acba6604c8ad03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7d4b432ae2f74f668cae8b99acfdb16749c4fdf3ab087233acba6604c8ad03->enter($__internal_3e7d4b432ae2f74f668cae8b99acfdb16749c4fdf3ab087233acba6604c8ad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
=======
        $__internal_bd9f2d3e1323e1ec3879bfeaa87b18b66346bfb8bf11f56611a0194d2b8ea0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9f2d3e1323e1ec3879bfeaa87b18b66346bfb8bf11f56611a0194d2b8ea0c9->enter($__internal_bd9f2d3e1323e1ec3879bfeaa87b18b66346bfb8bf11f56611a0194d2b8ea0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

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
        
<<<<<<< HEAD
        $__internal_3e7d4b432ae2f74f668cae8b99acfdb16749c4fdf3ab087233acba6604c8ad03->leave($__internal_3e7d4b432ae2f74f668cae8b99acfdb16749c4fdf3ab087233acba6604c8ad03_prof);
=======
        $__internal_bd9f2d3e1323e1ec3879bfeaa87b18b66346bfb8bf11f56611a0194d2b8ea0c9->leave($__internal_bd9f2d3e1323e1ec3879bfeaa87b18b66346bfb8bf11f56611a0194d2b8ea0c9_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f637aeb14dc60a4bc494991e0566b89a3e6fa9dfda8a1c1953d8e6b87b76ef5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f637aeb14dc60a4bc494991e0566b89a3e6fa9dfda8a1c1953d8e6b87b76ef5a->enter($__internal_f637aeb14dc60a4bc494991e0566b89a3e6fa9dfda8a1c1953d8e6b87b76ef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f637aeb14dc60a4bc494991e0566b89a3e6fa9dfda8a1c1953d8e6b87b76ef5a->leave($__internal_f637aeb14dc60a4bc494991e0566b89a3e6fa9dfda8a1c1953d8e6b87b76ef5a_prof);
=======
        $__internal_75ea0dfede650c5615636544a7b4e305fb0ea7c8fdc388dff72628ff86794d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ea0dfede650c5615636544a7b4e305fb0ea7c8fdc388dff72628ff86794d26->enter($__internal_75ea0dfede650c5615636544a7b4e305fb0ea7c8fdc388dff72628ff86794d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_75ea0dfede650c5615636544a7b4e305fb0ea7c8fdc388dff72628ff86794d26->leave($__internal_75ea0dfede650c5615636544a7b4e305fb0ea7c8fdc388dff72628ff86794d26_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_07d3f522d2a6d86103fbfa292913d1c28dfb5ecaed96875a3224130dff71251f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d3f522d2a6d86103fbfa292913d1c28dfb5ecaed96875a3224130dff71251f->enter($__internal_07d3f522d2a6d86103fbfa292913d1c28dfb5ecaed96875a3224130dff71251f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_07d3f522d2a6d86103fbfa292913d1c28dfb5ecaed96875a3224130dff71251f->leave($__internal_07d3f522d2a6d86103fbfa292913d1c28dfb5ecaed96875a3224130dff71251f_prof);
=======
        $__internal_ca92dbf8961153539ead3d7941f6f053ae4ece264c33b629c7ffd269957ef15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca92dbf8961153539ead3d7941f6f053ae4ece264c33b629c7ffd269957ef15f->enter($__internal_ca92dbf8961153539ead3d7941f6f053ae4ece264c33b629c7ffd269957ef15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ca92dbf8961153539ead3d7941f6f053ae4ece264c33b629c7ffd269957ef15f->leave($__internal_ca92dbf8961153539ead3d7941f6f053ae4ece264c33b629c7ffd269957ef15f_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_18d8097e819907138289243a9136e8148663d550863309369f2796a7265f73c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d8097e819907138289243a9136e8148663d550863309369f2796a7265f73c4->enter($__internal_18d8097e819907138289243a9136e8148663d550863309369f2796a7265f73c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18d8097e819907138289243a9136e8148663d550863309369f2796a7265f73c4->leave($__internal_18d8097e819907138289243a9136e8148663d550863309369f2796a7265f73c4_prof);
=======
        $__internal_fa8e93f5a7e3fe386a0219a57ef2c0ee77c410fc7e01c997aea23a4beb7abf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8e93f5a7e3fe386a0219a57ef2c0ee77c410fc7e01c997aea23a4beb7abf00->enter($__internal_fa8e93f5a7e3fe386a0219a57ef2c0ee77c410fc7e01c997aea23a4beb7abf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa8e93f5a7e3fe386a0219a57ef2c0ee77c410fc7e01c997aea23a4beb7abf00->leave($__internal_fa8e93f5a7e3fe386a0219a57ef2c0ee77c410fc7e01c997aea23a4beb7abf00_prof);
>>>>>>> c75da957463b412500a8d1755d1cebac634c1262

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
