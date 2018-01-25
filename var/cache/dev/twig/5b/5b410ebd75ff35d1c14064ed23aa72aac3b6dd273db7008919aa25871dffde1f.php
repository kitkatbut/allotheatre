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
        $__internal_7a4378ab62e6b2a28a29a4bafa7cbe115e62b6e205a0e26564eb4513a2ae4bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4378ab62e6b2a28a29a4bafa7cbe115e62b6e205a0e26564eb4513a2ae4bf9->enter($__internal_7a4378ab62e6b2a28a29a4bafa7cbe115e62b6e205a0e26564eb4513a2ae4bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_088c94c55f85de1038a9caf3d93b2c11f06b18a7bb567147bf9148fb224b2f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088c94c55f85de1038a9caf3d93b2c11f06b18a7bb567147bf9148fb224b2f37->enter($__internal_088c94c55f85de1038a9caf3d93b2c11f06b18a7bb567147bf9148fb224b2f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7a4378ab62e6b2a28a29a4bafa7cbe115e62b6e205a0e26564eb4513a2ae4bf9->leave($__internal_7a4378ab62e6b2a28a29a4bafa7cbe115e62b6e205a0e26564eb4513a2ae4bf9_prof);

        
        $__internal_088c94c55f85de1038a9caf3d93b2c11f06b18a7bb567147bf9148fb224b2f37->leave($__internal_088c94c55f85de1038a9caf3d93b2c11f06b18a7bb567147bf9148fb224b2f37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33af8a116476c7fc9ba04fe429cc68a130d757eaa874c9b4096c6213f72b5131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33af8a116476c7fc9ba04fe429cc68a130d757eaa874c9b4096c6213f72b5131->enter($__internal_33af8a116476c7fc9ba04fe429cc68a130d757eaa874c9b4096c6213f72b5131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7da3ff2792bc4875bf198da76acdc0356f1f6f774b96fd550b9e02137bafb058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da3ff2792bc4875bf198da76acdc0356f1f6f774b96fd550b9e02137bafb058->enter($__internal_7da3ff2792bc4875bf198da76acdc0356f1f6f774b96fd550b9e02137bafb058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7da3ff2792bc4875bf198da76acdc0356f1f6f774b96fd550b9e02137bafb058->leave($__internal_7da3ff2792bc4875bf198da76acdc0356f1f6f774b96fd550b9e02137bafb058_prof);

        
        $__internal_33af8a116476c7fc9ba04fe429cc68a130d757eaa874c9b4096c6213f72b5131->leave($__internal_33af8a116476c7fc9ba04fe429cc68a130d757eaa874c9b4096c6213f72b5131_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_181b9b933cdc0727ef5af70877071179e8c189aeadd0cc6365363091f339924e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181b9b933cdc0727ef5af70877071179e8c189aeadd0cc6365363091f339924e->enter($__internal_181b9b933cdc0727ef5af70877071179e8c189aeadd0cc6365363091f339924e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_834b7a910b9c35d0f6bddfe88778cfba4636ee26499b7750b291e377d10e63e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834b7a910b9c35d0f6bddfe88778cfba4636ee26499b7750b291e377d10e63e0->enter($__internal_834b7a910b9c35d0f6bddfe88778cfba4636ee26499b7750b291e377d10e63e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_834b7a910b9c35d0f6bddfe88778cfba4636ee26499b7750b291e377d10e63e0->leave($__internal_834b7a910b9c35d0f6bddfe88778cfba4636ee26499b7750b291e377d10e63e0_prof);

        
        $__internal_181b9b933cdc0727ef5af70877071179e8c189aeadd0cc6365363091f339924e->leave($__internal_181b9b933cdc0727ef5af70877071179e8c189aeadd0cc6365363091f339924e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc137138587a45c8aec8d2363a1aa22825962dfa4cb8904cbb818150c1ea7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc137138587a45c8aec8d2363a1aa22825962dfa4cb8904cbb818150c1ea7a5->enter($__internal_7dc137138587a45c8aec8d2363a1aa22825962dfa4cb8904cbb818150c1ea7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3360a30a2f66f1f3350c36b288a23ae49e8213d5c1227c5893628e96be263e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3360a30a2f66f1f3350c36b288a23ae49e8213d5c1227c5893628e96be263e33->enter($__internal_3360a30a2f66f1f3350c36b288a23ae49e8213d5c1227c5893628e96be263e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3360a30a2f66f1f3350c36b288a23ae49e8213d5c1227c5893628e96be263e33->leave($__internal_3360a30a2f66f1f3350c36b288a23ae49e8213d5c1227c5893628e96be263e33_prof);

        
        $__internal_7dc137138587a45c8aec8d2363a1aa22825962dfa4cb8904cbb818150c1ea7a5->leave($__internal_7dc137138587a45c8aec8d2363a1aa22825962dfa4cb8904cbb818150c1ea7a5_prof);

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
