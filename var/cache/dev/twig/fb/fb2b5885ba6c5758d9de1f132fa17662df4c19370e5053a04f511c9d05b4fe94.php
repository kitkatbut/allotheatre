<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9e952fd1e711f62be4d0fe79e0d105d29d53ae100336ebe8daba6717c3354053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbaa314beed68ba603bfeace8d78e1632ae7c72d24d56bdcc6a5bb941a5338a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa314beed68ba603bfeace8d78e1632ae7c72d24d56bdcc6a5bb941a5338a3->enter($__internal_fbaa314beed68ba603bfeace8d78e1632ae7c72d24d56bdcc6a5bb941a5338a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6b1867e77f95bc7a6ba956778c3abe46f04969d9d25b606f45a857206b895718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1867e77f95bc7a6ba956778c3abe46f04969d9d25b606f45a857206b895718->enter($__internal_6b1867e77f95bc7a6ba956778c3abe46f04969d9d25b606f45a857206b895718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbaa314beed68ba603bfeace8d78e1632ae7c72d24d56bdcc6a5bb941a5338a3->leave($__internal_fbaa314beed68ba603bfeace8d78e1632ae7c72d24d56bdcc6a5bb941a5338a3_prof);

        
        $__internal_6b1867e77f95bc7a6ba956778c3abe46f04969d9d25b606f45a857206b895718->leave($__internal_6b1867e77f95bc7a6ba956778c3abe46f04969d9d25b606f45a857206b895718_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3db6b614996191ad3e52b3751d17d7b6dba71b0ffc46ab050346e554c79ddd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db6b614996191ad3e52b3751d17d7b6dba71b0ffc46ab050346e554c79ddd3f->enter($__internal_3db6b614996191ad3e52b3751d17d7b6dba71b0ffc46ab050346e554c79ddd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7114391be7e999511d4934a4b8c19da51084a3f14d7f189ea485d1781da40859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7114391be7e999511d4934a4b8c19da51084a3f14d7f189ea485d1781da40859->enter($__internal_7114391be7e999511d4934a4b8c19da51084a3f14d7f189ea485d1781da40859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7114391be7e999511d4934a4b8c19da51084a3f14d7f189ea485d1781da40859->leave($__internal_7114391be7e999511d4934a4b8c19da51084a3f14d7f189ea485d1781da40859_prof);

        
        $__internal_3db6b614996191ad3e52b3751d17d7b6dba71b0ffc46ab050346e554c79ddd3f->leave($__internal_3db6b614996191ad3e52b3751d17d7b6dba71b0ffc46ab050346e554c79ddd3f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d5b9cfe5cea874f75088f68ebe9a7b1f5eb5eab59c71253db5301d93b7389d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5b9cfe5cea874f75088f68ebe9a7b1f5eb5eab59c71253db5301d93b7389d4->enter($__internal_7d5b9cfe5cea874f75088f68ebe9a7b1f5eb5eab59c71253db5301d93b7389d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c1031989de55b2cf8bebbf7a387975bb150149e9b0c9191053202ef251c3378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1031989de55b2cf8bebbf7a387975bb150149e9b0c9191053202ef251c3378->enter($__internal_6c1031989de55b2cf8bebbf7a387975bb150149e9b0c9191053202ef251c3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6c1031989de55b2cf8bebbf7a387975bb150149e9b0c9191053202ef251c3378->leave($__internal_6c1031989de55b2cf8bebbf7a387975bb150149e9b0c9191053202ef251c3378_prof);

        
        $__internal_7d5b9cfe5cea874f75088f68ebe9a7b1f5eb5eab59c71253db5301d93b7389d4->leave($__internal_7d5b9cfe5cea874f75088f68ebe9a7b1f5eb5eab59c71253db5301d93b7389d4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc04f73517e4681390a79cb3c6570d1443c30ad9e612a3ae48d3084074eb8f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc04f73517e4681390a79cb3c6570d1443c30ad9e612a3ae48d3084074eb8f67->enter($__internal_cc04f73517e4681390a79cb3c6570d1443c30ad9e612a3ae48d3084074eb8f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a118198640d6eaf4cfdf6c90dd28b5955a3015e53c0c71f98f5a18b759132b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a118198640d6eaf4cfdf6c90dd28b5955a3015e53c0c71f98f5a18b759132b4c->enter($__internal_a118198640d6eaf4cfdf6c90dd28b5955a3015e53c0c71f98f5a18b759132b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a118198640d6eaf4cfdf6c90dd28b5955a3015e53c0c71f98f5a18b759132b4c->leave($__internal_a118198640d6eaf4cfdf6c90dd28b5955a3015e53c0c71f98f5a18b759132b4c_prof);

        
        $__internal_cc04f73517e4681390a79cb3c6570d1443c30ad9e612a3ae48d3084074eb8f67->leave($__internal_cc04f73517e4681390a79cb3c6570d1443c30ad9e612a3ae48d3084074eb8f67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
