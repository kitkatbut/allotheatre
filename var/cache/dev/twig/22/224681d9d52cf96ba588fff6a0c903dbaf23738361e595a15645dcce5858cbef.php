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
        $__internal_dd886d5cecbfff80aff96c3891ebcd7124a25cdbf3966e1d48f098e59a5e52e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd886d5cecbfff80aff96c3891ebcd7124a25cdbf3966e1d48f098e59a5e52e2->enter($__internal_dd886d5cecbfff80aff96c3891ebcd7124a25cdbf3966e1d48f098e59a5e52e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2486b8d5ac74fd8cb79a0caeea33fa4b3bed3d72728647eddaa525f31fbeb2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2486b8d5ac74fd8cb79a0caeea33fa4b3bed3d72728647eddaa525f31fbeb2cd->enter($__internal_2486b8d5ac74fd8cb79a0caeea33fa4b3bed3d72728647eddaa525f31fbeb2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dd886d5cecbfff80aff96c3891ebcd7124a25cdbf3966e1d48f098e59a5e52e2->leave($__internal_dd886d5cecbfff80aff96c3891ebcd7124a25cdbf3966e1d48f098e59a5e52e2_prof);

        
        $__internal_2486b8d5ac74fd8cb79a0caeea33fa4b3bed3d72728647eddaa525f31fbeb2cd->leave($__internal_2486b8d5ac74fd8cb79a0caeea33fa4b3bed3d72728647eddaa525f31fbeb2cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7398de9cfb559288f6bffd8a61200f2cd86d8053f9f78f258bb1571af08f1732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7398de9cfb559288f6bffd8a61200f2cd86d8053f9f78f258bb1571af08f1732->enter($__internal_7398de9cfb559288f6bffd8a61200f2cd86d8053f9f78f258bb1571af08f1732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7925a786b9b67c040f061a4f977486eb05b5869d1c047cf63a66895f87f0c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7925a786b9b67c040f061a4f977486eb05b5869d1c047cf63a66895f87f0c63->enter($__internal_d7925a786b9b67c040f061a4f977486eb05b5869d1c047cf63a66895f87f0c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d7925a786b9b67c040f061a4f977486eb05b5869d1c047cf63a66895f87f0c63->leave($__internal_d7925a786b9b67c040f061a4f977486eb05b5869d1c047cf63a66895f87f0c63_prof);

        
        $__internal_7398de9cfb559288f6bffd8a61200f2cd86d8053f9f78f258bb1571af08f1732->leave($__internal_7398de9cfb559288f6bffd8a61200f2cd86d8053f9f78f258bb1571af08f1732_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_75262285745625443ed74898ccdd0b14769f9930ec0d41ad8eeeba25114d99da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75262285745625443ed74898ccdd0b14769f9930ec0d41ad8eeeba25114d99da->enter($__internal_75262285745625443ed74898ccdd0b14769f9930ec0d41ad8eeeba25114d99da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51d2cf114340882f6f7f09523356351deebfb85d0a13046915b7962d553e0a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d2cf114340882f6f7f09523356351deebfb85d0a13046915b7962d553e0a73->enter($__internal_51d2cf114340882f6f7f09523356351deebfb85d0a13046915b7962d553e0a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_51d2cf114340882f6f7f09523356351deebfb85d0a13046915b7962d553e0a73->leave($__internal_51d2cf114340882f6f7f09523356351deebfb85d0a13046915b7962d553e0a73_prof);

        
        $__internal_75262285745625443ed74898ccdd0b14769f9930ec0d41ad8eeeba25114d99da->leave($__internal_75262285745625443ed74898ccdd0b14769f9930ec0d41ad8eeeba25114d99da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_316e8fad1bb8028b8790a9be2ec3e8d703ecffb33c66db53143fcdd76a4d64b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316e8fad1bb8028b8790a9be2ec3e8d703ecffb33c66db53143fcdd76a4d64b6->enter($__internal_316e8fad1bb8028b8790a9be2ec3e8d703ecffb33c66db53143fcdd76a4d64b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ccebe2fa5e86c3f3a6c64c4eb980abeb5ac26431be78d051e02985876dde379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccebe2fa5e86c3f3a6c64c4eb980abeb5ac26431be78d051e02985876dde379->enter($__internal_1ccebe2fa5e86c3f3a6c64c4eb980abeb5ac26431be78d051e02985876dde379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ccebe2fa5e86c3f3a6c64c4eb980abeb5ac26431be78d051e02985876dde379->leave($__internal_1ccebe2fa5e86c3f3a6c64c4eb980abeb5ac26431be78d051e02985876dde379_prof);

        
        $__internal_316e8fad1bb8028b8790a9be2ec3e8d703ecffb33c66db53143fcdd76a4d64b6->leave($__internal_316e8fad1bb8028b8790a9be2ec3e8d703ecffb33c66db53143fcdd76a4d64b6_prof);

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
