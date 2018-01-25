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
        $__internal_8c78e5a1b3efe777afe7939113d18cd6bbe92e52e98e49f4d104e7857439913e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c78e5a1b3efe777afe7939113d18cd6bbe92e52e98e49f4d104e7857439913e->enter($__internal_8c78e5a1b3efe777afe7939113d18cd6bbe92e52e98e49f4d104e7857439913e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_33abd98cb624143c9d642e4d402503653faeb2fc1a3144d84fdbe9335ee8dce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33abd98cb624143c9d642e4d402503653faeb2fc1a3144d84fdbe9335ee8dce1->enter($__internal_33abd98cb624143c9d642e4d402503653faeb2fc1a3144d84fdbe9335ee8dce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8c78e5a1b3efe777afe7939113d18cd6bbe92e52e98e49f4d104e7857439913e->leave($__internal_8c78e5a1b3efe777afe7939113d18cd6bbe92e52e98e49f4d104e7857439913e_prof);

        
        $__internal_33abd98cb624143c9d642e4d402503653faeb2fc1a3144d84fdbe9335ee8dce1->leave($__internal_33abd98cb624143c9d642e4d402503653faeb2fc1a3144d84fdbe9335ee8dce1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbeee7c14ea59eadd8d9cf72fe5bd2b7a14de368745d85646078bc268270eaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeee7c14ea59eadd8d9cf72fe5bd2b7a14de368745d85646078bc268270eaec->enter($__internal_bbeee7c14ea59eadd8d9cf72fe5bd2b7a14de368745d85646078bc268270eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e072030d66cce2b61ebef1513c50aa9653cb01ac4db1c4b525741b0da2ae9b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e072030d66cce2b61ebef1513c50aa9653cb01ac4db1c4b525741b0da2ae9b5a->enter($__internal_e072030d66cce2b61ebef1513c50aa9653cb01ac4db1c4b525741b0da2ae9b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e072030d66cce2b61ebef1513c50aa9653cb01ac4db1c4b525741b0da2ae9b5a->leave($__internal_e072030d66cce2b61ebef1513c50aa9653cb01ac4db1c4b525741b0da2ae9b5a_prof);

        
        $__internal_bbeee7c14ea59eadd8d9cf72fe5bd2b7a14de368745d85646078bc268270eaec->leave($__internal_bbeee7c14ea59eadd8d9cf72fe5bd2b7a14de368745d85646078bc268270eaec_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4785be9a81a795701b2b0f279b9740fe07925470281101e8d15844e6f4bf6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4785be9a81a795701b2b0f279b9740fe07925470281101e8d15844e6f4bf6cd->enter($__internal_a4785be9a81a795701b2b0f279b9740fe07925470281101e8d15844e6f4bf6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b833622c74eeebdd9cf65cbeb35a02ee9e0a0ae4a1a230a4b78dbe525adb7bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b833622c74eeebdd9cf65cbeb35a02ee9e0a0ae4a1a230a4b78dbe525adb7bd1->enter($__internal_b833622c74eeebdd9cf65cbeb35a02ee9e0a0ae4a1a230a4b78dbe525adb7bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b833622c74eeebdd9cf65cbeb35a02ee9e0a0ae4a1a230a4b78dbe525adb7bd1->leave($__internal_b833622c74eeebdd9cf65cbeb35a02ee9e0a0ae4a1a230a4b78dbe525adb7bd1_prof);

        
        $__internal_a4785be9a81a795701b2b0f279b9740fe07925470281101e8d15844e6f4bf6cd->leave($__internal_a4785be9a81a795701b2b0f279b9740fe07925470281101e8d15844e6f4bf6cd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_396c4435feb4d7743cf6451a939f1f186843fdc1bb43866aebc4bdad716f8355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396c4435feb4d7743cf6451a939f1f186843fdc1bb43866aebc4bdad716f8355->enter($__internal_396c4435feb4d7743cf6451a939f1f186843fdc1bb43866aebc4bdad716f8355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b11376988868145bddbb52001b9d450405c9c55f910363d65b0f189b1129ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b11376988868145bddbb52001b9d450405c9c55f910363d65b0f189b1129ced->enter($__internal_0b11376988868145bddbb52001b9d450405c9c55f910363d65b0f189b1129ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b11376988868145bddbb52001b9d450405c9c55f910363d65b0f189b1129ced->leave($__internal_0b11376988868145bddbb52001b9d450405c9c55f910363d65b0f189b1129ced_prof);

        
        $__internal_396c4435feb4d7743cf6451a939f1f186843fdc1bb43866aebc4bdad716f8355->leave($__internal_396c4435feb4d7743cf6451a939f1f186843fdc1bb43866aebc4bdad716f8355_prof);

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
