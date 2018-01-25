<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_5c675d5755699a1af904a841452c698c0cec09fbf7b9e0f45455553da421947a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php
        $__internal_6e1ed45184a7320de3df795e13b7c64ba6ed2c029b29df74b752076fdc560bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1ed45184a7320de3df795e13b7c64ba6ed2c029b29df74b752076fdc560bc9->enter($__internal_6e1ed45184a7320de3df795e13b7c64ba6ed2c029b29df74b752076fdc560bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_5662ab0b34a80cd77243ce976c21dc573c9feebae62b39aacf61595e927b6eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5662ab0b34a80cd77243ce976c21dc573c9feebae62b39aacf61595e927b6eea->enter($__internal_5662ab0b34a80cd77243ce976c21dc573c9feebae62b39aacf61595e927b6eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_245752a273f97ef204b78e5830d6d6028d829824215183c479fcec2fd2827ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245752a273f97ef204b78e5830d6d6028d829824215183c479fcec2fd2827ff4->enter($__internal_245752a273f97ef204b78e5830d6d6028d829824215183c479fcec2fd2827ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_f1f8214de4ede31acf9c1e4f5a871445b09fa87c62dbb7bb192b8264c335d93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f8214de4ede31acf9c1e4f5a871445b09fa87c62dbb7bb192b8264c335d93c->enter($__internal_f1f8214de4ede31acf9c1e4f5a871445b09fa87c62dbb7bb192b8264c335d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 1, $this->getSourceContext()); })()), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) || array_key_exists("additional_classes", $context) ? $context["additional_classes"] : (function () { throw new Twig_Error_Runtime('Variable "additional_classes" does not exist.', 1, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter((isset($context["block_attrs"]) || array_key_exists("block_attrs", $context) ? $context["block_attrs"] : (function () { throw new Twig_Error_Runtime('Variable "block_attrs" does not exist.', 1, $this->getSourceContext()); })()), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 2, $this->getSourceContext()); })()))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 2, $this->getSourceContext()); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 2, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 5, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php
        $__internal_6e1ed45184a7320de3df795e13b7c64ba6ed2c029b29df74b752076fdc560bc9->leave($__internal_6e1ed45184a7320de3df795e13b7c64ba6ed2c029b29df74b752076fdc560bc9_prof);

        
        $__internal_5662ab0b34a80cd77243ce976c21dc573c9feebae62b39aacf61595e927b6eea->leave($__internal_5662ab0b34a80cd77243ce976c21dc573c9feebae62b39aacf61595e927b6eea_prof);
=======
        $__internal_245752a273f97ef204b78e5830d6d6028d829824215183c479fcec2fd2827ff4->leave($__internal_245752a273f97ef204b78e5830d6d6028d829824215183c479fcec2fd2827ff4_prof);

        
        $__internal_f1f8214de4ede31acf9c1e4f5a871445b09fa87c62dbb7bb192b8264c335d93c->leave($__internal_f1f8214de4ede31acf9c1e4f5a871445b09fa87c62dbb7bb192b8264c335d93c_prof);
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
