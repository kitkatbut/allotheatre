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
        $__internal_33c0a922a2df684623a4bfef1debfd519a2ec24656e990fd65ddb1dff44f6eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c0a922a2df684623a4bfef1debfd519a2ec24656e990fd65ddb1dff44f6eb7->enter($__internal_33c0a922a2df684623a4bfef1debfd519a2ec24656e990fd65ddb1dff44f6eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6032d61fe7c6ab65ddf785e13eac7d76b517713472ab8524e34ca0f562296873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032d61fe7c6ab65ddf785e13eac7d76b517713472ab8524e34ca0f562296873->enter($__internal_6032d61fe7c6ab65ddf785e13eac7d76b517713472ab8524e34ca0f562296873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_33c0a922a2df684623a4bfef1debfd519a2ec24656e990fd65ddb1dff44f6eb7->leave($__internal_33c0a922a2df684623a4bfef1debfd519a2ec24656e990fd65ddb1dff44f6eb7_prof);

        
        $__internal_6032d61fe7c6ab65ddf785e13eac7d76b517713472ab8524e34ca0f562296873->leave($__internal_6032d61fe7c6ab65ddf785e13eac7d76b517713472ab8524e34ca0f562296873_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd934a6c5e5a25de247e25dd248317ea05afee14a3f721cbbbee3c31864d9f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd934a6c5e5a25de247e25dd248317ea05afee14a3f721cbbbee3c31864d9f7e->enter($__internal_cd934a6c5e5a25de247e25dd248317ea05afee14a3f721cbbbee3c31864d9f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e566d8703a8fb1febd44f97fbdf32c52bad3fc2cc4b1d93377dff1054cd85f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e566d8703a8fb1febd44f97fbdf32c52bad3fc2cc4b1d93377dff1054cd85f8->enter($__internal_2e566d8703a8fb1febd44f97fbdf32c52bad3fc2cc4b1d93377dff1054cd85f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e566d8703a8fb1febd44f97fbdf32c52bad3fc2cc4b1d93377dff1054cd85f8->leave($__internal_2e566d8703a8fb1febd44f97fbdf32c52bad3fc2cc4b1d93377dff1054cd85f8_prof);

        
        $__internal_cd934a6c5e5a25de247e25dd248317ea05afee14a3f721cbbbee3c31864d9f7e->leave($__internal_cd934a6c5e5a25de247e25dd248317ea05afee14a3f721cbbbee3c31864d9f7e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bda7c002fbd7ef45e24a8b1ff2cbd619809d8824cdb6db142cc2a5a24f229935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda7c002fbd7ef45e24a8b1ff2cbd619809d8824cdb6db142cc2a5a24f229935->enter($__internal_bda7c002fbd7ef45e24a8b1ff2cbd619809d8824cdb6db142cc2a5a24f229935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81362d2c491f02ac695a202cb7b8be8b619c934f7330e21327a8be0a0d4ff3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81362d2c491f02ac695a202cb7b8be8b619c934f7330e21327a8be0a0d4ff3e0->enter($__internal_81362d2c491f02ac695a202cb7b8be8b619c934f7330e21327a8be0a0d4ff3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_81362d2c491f02ac695a202cb7b8be8b619c934f7330e21327a8be0a0d4ff3e0->leave($__internal_81362d2c491f02ac695a202cb7b8be8b619c934f7330e21327a8be0a0d4ff3e0_prof);

        
        $__internal_bda7c002fbd7ef45e24a8b1ff2cbd619809d8824cdb6db142cc2a5a24f229935->leave($__internal_bda7c002fbd7ef45e24a8b1ff2cbd619809d8824cdb6db142cc2a5a24f229935_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f958e1b3d2f84d4d4b8c5b83a6427a3138fd6ab0c86d52b776b4370f40149503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f958e1b3d2f84d4d4b8c5b83a6427a3138fd6ab0c86d52b776b4370f40149503->enter($__internal_f958e1b3d2f84d4d4b8c5b83a6427a3138fd6ab0c86d52b776b4370f40149503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9184f4e8e9eb122d51484abc59e03eb147ab7762327cbf8828eca970f0349871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9184f4e8e9eb122d51484abc59e03eb147ab7762327cbf8828eca970f0349871->enter($__internal_9184f4e8e9eb122d51484abc59e03eb147ab7762327cbf8828eca970f0349871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9184f4e8e9eb122d51484abc59e03eb147ab7762327cbf8828eca970f0349871->leave($__internal_9184f4e8e9eb122d51484abc59e03eb147ab7762327cbf8828eca970f0349871_prof);

        
        $__internal_f958e1b3d2f84d4d4b8c5b83a6427a3138fd6ab0c86d52b776b4370f40149503->leave($__internal_f958e1b3d2f84d4d4b8c5b83a6427a3138fd6ab0c86d52b776b4370f40149503_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Allotheatre/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
