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
        $__internal_16707d12ad64f97cac9ba169e913ac352279697ca7e4e922f19f821390f56032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16707d12ad64f97cac9ba169e913ac352279697ca7e4e922f19f821390f56032->enter($__internal_16707d12ad64f97cac9ba169e913ac352279697ca7e4e922f19f821390f56032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02aca5f9ae1a0224426ffbb39eb73d7b108932d11a9adf65ac152599ef8f4889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aca5f9ae1a0224426ffbb39eb73d7b108932d11a9adf65ac152599ef8f4889->enter($__internal_02aca5f9ae1a0224426ffbb39eb73d7b108932d11a9adf65ac152599ef8f4889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_16707d12ad64f97cac9ba169e913ac352279697ca7e4e922f19f821390f56032->leave($__internal_16707d12ad64f97cac9ba169e913ac352279697ca7e4e922f19f821390f56032_prof);

        
        $__internal_02aca5f9ae1a0224426ffbb39eb73d7b108932d11a9adf65ac152599ef8f4889->leave($__internal_02aca5f9ae1a0224426ffbb39eb73d7b108932d11a9adf65ac152599ef8f4889_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_683cb2d7f8eb3d5678d53c860de1beda9149762e2606abbbbee107ed55cff3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683cb2d7f8eb3d5678d53c860de1beda9149762e2606abbbbee107ed55cff3e9->enter($__internal_683cb2d7f8eb3d5678d53c860de1beda9149762e2606abbbbee107ed55cff3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d33134e304620719368c9d520c0dfad7c8c302a69ee7574d0f53e3147efa38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d33134e304620719368c9d520c0dfad7c8c302a69ee7574d0f53e3147efa38a->enter($__internal_0d33134e304620719368c9d520c0dfad7c8c302a69ee7574d0f53e3147efa38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d33134e304620719368c9d520c0dfad7c8c302a69ee7574d0f53e3147efa38a->leave($__internal_0d33134e304620719368c9d520c0dfad7c8c302a69ee7574d0f53e3147efa38a_prof);

        
        $__internal_683cb2d7f8eb3d5678d53c860de1beda9149762e2606abbbbee107ed55cff3e9->leave($__internal_683cb2d7f8eb3d5678d53c860de1beda9149762e2606abbbbee107ed55cff3e9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e033ed3f84fecd382ec797531f9451858e10c73088eb13879dd49ec4ea758bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e033ed3f84fecd382ec797531f9451858e10c73088eb13879dd49ec4ea758bf->enter($__internal_0e033ed3f84fecd382ec797531f9451858e10c73088eb13879dd49ec4ea758bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_789f6e270321e5a421e908c0e260f09204f894165b834bde91258958973df1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789f6e270321e5a421e908c0e260f09204f894165b834bde91258958973df1ad->enter($__internal_789f6e270321e5a421e908c0e260f09204f894165b834bde91258958973df1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_789f6e270321e5a421e908c0e260f09204f894165b834bde91258958973df1ad->leave($__internal_789f6e270321e5a421e908c0e260f09204f894165b834bde91258958973df1ad_prof);

        
        $__internal_0e033ed3f84fecd382ec797531f9451858e10c73088eb13879dd49ec4ea758bf->leave($__internal_0e033ed3f84fecd382ec797531f9451858e10c73088eb13879dd49ec4ea758bf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_196ce13649906d52fb5299982be6d0c80ff42f14befe07fa7e2fcd155a40c0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196ce13649906d52fb5299982be6d0c80ff42f14befe07fa7e2fcd155a40c0cd->enter($__internal_196ce13649906d52fb5299982be6d0c80ff42f14befe07fa7e2fcd155a40c0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_244a8a8c4995b2e8ae5e6cc7f69c15e2cc5d0e8b057483ec47da5abe6c50aac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244a8a8c4995b2e8ae5e6cc7f69c15e2cc5d0e8b057483ec47da5abe6c50aac0->enter($__internal_244a8a8c4995b2e8ae5e6cc7f69c15e2cc5d0e8b057483ec47da5abe6c50aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_244a8a8c4995b2e8ae5e6cc7f69c15e2cc5d0e8b057483ec47da5abe6c50aac0->leave($__internal_244a8a8c4995b2e8ae5e6cc7f69c15e2cc5d0e8b057483ec47da5abe6c50aac0_prof);

        
        $__internal_196ce13649906d52fb5299982be6d0c80ff42f14befe07fa7e2fcd155a40c0cd->leave($__internal_196ce13649906d52fb5299982be6d0c80ff42f14befe07fa7e2fcd155a40c0cd_prof);

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
