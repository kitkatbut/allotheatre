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
        $__internal_410b6f86e34df3df559f8a28a49f5803347feabb2d07d2ac61abdf7209692a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410b6f86e34df3df559f8a28a49f5803347feabb2d07d2ac61abdf7209692a4f->enter($__internal_410b6f86e34df3df559f8a28a49f5803347feabb2d07d2ac61abdf7209692a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_66f84c87526d980b7bfe88c9eb46ae0145725be4a4efcb7122cc58cb3aa8d64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f84c87526d980b7bfe88c9eb46ae0145725be4a4efcb7122cc58cb3aa8d64f->enter($__internal_66f84c87526d980b7bfe88c9eb46ae0145725be4a4efcb7122cc58cb3aa8d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_410b6f86e34df3df559f8a28a49f5803347feabb2d07d2ac61abdf7209692a4f->leave($__internal_410b6f86e34df3df559f8a28a49f5803347feabb2d07d2ac61abdf7209692a4f_prof);

        
        $__internal_66f84c87526d980b7bfe88c9eb46ae0145725be4a4efcb7122cc58cb3aa8d64f->leave($__internal_66f84c87526d980b7bfe88c9eb46ae0145725be4a4efcb7122cc58cb3aa8d64f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f25f29812da2efe25a18dc235dcf69fbf324f3e348f2ad01f4e568dcfd83cba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25f29812da2efe25a18dc235dcf69fbf324f3e348f2ad01f4e568dcfd83cba1->enter($__internal_f25f29812da2efe25a18dc235dcf69fbf324f3e348f2ad01f4e568dcfd83cba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4eb2dcaebf1cc1956716815f5d0b272a495e37cef44f62363d3242734248def3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb2dcaebf1cc1956716815f5d0b272a495e37cef44f62363d3242734248def3->enter($__internal_4eb2dcaebf1cc1956716815f5d0b272a495e37cef44f62363d3242734248def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4eb2dcaebf1cc1956716815f5d0b272a495e37cef44f62363d3242734248def3->leave($__internal_4eb2dcaebf1cc1956716815f5d0b272a495e37cef44f62363d3242734248def3_prof);

        
        $__internal_f25f29812da2efe25a18dc235dcf69fbf324f3e348f2ad01f4e568dcfd83cba1->leave($__internal_f25f29812da2efe25a18dc235dcf69fbf324f3e348f2ad01f4e568dcfd83cba1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_398afe87d940c7df642148ce3a30dd0176aaf55f6742d0ac01fafcd01012b45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398afe87d940c7df642148ce3a30dd0176aaf55f6742d0ac01fafcd01012b45b->enter($__internal_398afe87d940c7df642148ce3a30dd0176aaf55f6742d0ac01fafcd01012b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d44b2ba681b8101d8681f65a3cfdfd08b5320c7fb2a7e7add9b8538d0a71c279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44b2ba681b8101d8681f65a3cfdfd08b5320c7fb2a7e7add9b8538d0a71c279->enter($__internal_d44b2ba681b8101d8681f65a3cfdfd08b5320c7fb2a7e7add9b8538d0a71c279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d44b2ba681b8101d8681f65a3cfdfd08b5320c7fb2a7e7add9b8538d0a71c279->leave($__internal_d44b2ba681b8101d8681f65a3cfdfd08b5320c7fb2a7e7add9b8538d0a71c279_prof);

        
        $__internal_398afe87d940c7df642148ce3a30dd0176aaf55f6742d0ac01fafcd01012b45b->leave($__internal_398afe87d940c7df642148ce3a30dd0176aaf55f6742d0ac01fafcd01012b45b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_06bc4ab914dc5a5b4646a0d70ab1130637309370e25b1d494e4ce0a5cfd48f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bc4ab914dc5a5b4646a0d70ab1130637309370e25b1d494e4ce0a5cfd48f39->enter($__internal_06bc4ab914dc5a5b4646a0d70ab1130637309370e25b1d494e4ce0a5cfd48f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a69b9341729e4074a4f637a44d230e88248fab503d66f5a7e65fac95bf790122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69b9341729e4074a4f637a44d230e88248fab503d66f5a7e65fac95bf790122->enter($__internal_a69b9341729e4074a4f637a44d230e88248fab503d66f5a7e65fac95bf790122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a69b9341729e4074a4f637a44d230e88248fab503d66f5a7e65fac95bf790122->leave($__internal_a69b9341729e4074a4f637a44d230e88248fab503d66f5a7e65fac95bf790122_prof);

        
        $__internal_06bc4ab914dc5a5b4646a0d70ab1130637309370e25b1d494e4ce0a5cfd48f39->leave($__internal_06bc4ab914dc5a5b4646a0d70ab1130637309370e25b1d494e4ce0a5cfd48f39_prof);

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
