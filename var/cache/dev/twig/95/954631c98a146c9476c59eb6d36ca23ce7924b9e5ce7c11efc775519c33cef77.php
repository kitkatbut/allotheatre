<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_a00c683003c813e3ec192655cdfc3691edf893bb9adb72b4ee464e79e1aba065 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/95/954631c98a146c9476c59eb6d36ca23ce7924b9e5ce7c11efc775519c33cef77.php
        $__internal_73e9efb89e0b0d1b7c9f71cc94a91eb63b58f727149098212fde501835921b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e9efb89e0b0d1b7c9f71cc94a91eb63b58f727149098212fde501835921b45->enter($__internal_73e9efb89e0b0d1b7c9f71cc94a91eb63b58f727149098212fde501835921b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_bad5c96a7a8f126c052c9da6f8b727a5f057d76f63343f84e96c66d5dbffae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad5c96a7a8f126c052c9da6f8b727a5f057d76f63343f84e96c66d5dbffae74->enter($__internal_bad5c96a7a8f126c052c9da6f8b727a5f057d76f63343f84e96c66d5dbffae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_01dc77fe539debfa281d3c7b21d15ba65afa05b58430e53d1c25d40b3ba853a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dc77fe539debfa281d3c7b21d15ba65afa05b58430e53d1c25d40b3ba853a3->enter($__internal_01dc77fe539debfa281d3c7b21d15ba65afa05b58430e53d1c25d40b3ba853a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_4d1bb5d583b48de097c3b7187f5527f1176ab547504115f72137bc5559fdd85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1bb5d583b48de097c3b7187f5527f1176ab547504115f72137bc5559fdd85c->enter($__internal_4d1bb5d583b48de097c3b7187f5527f1176ab547504115f72137bc5559fdd85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php

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
        
<<<<<<< HEAD:var/cache/dev/twig/95/954631c98a146c9476c59eb6d36ca23ce7924b9e5ce7c11efc775519c33cef77.php
        $__internal_73e9efb89e0b0d1b7c9f71cc94a91eb63b58f727149098212fde501835921b45->leave($__internal_73e9efb89e0b0d1b7c9f71cc94a91eb63b58f727149098212fde501835921b45_prof);

        
        $__internal_bad5c96a7a8f126c052c9da6f8b727a5f057d76f63343f84e96c66d5dbffae74->leave($__internal_bad5c96a7a8f126c052c9da6f8b727a5f057d76f63343f84e96c66d5dbffae74_prof);
=======
        $__internal_01dc77fe539debfa281d3c7b21d15ba65afa05b58430e53d1c25d40b3ba853a3->leave($__internal_01dc77fe539debfa281d3c7b21d15ba65afa05b58430e53d1c25d40b3ba853a3_prof);

        
        $__internal_4d1bb5d583b48de097c3b7187f5527f1176ab547504115f72137bc5559fdd85c->leave($__internal_4d1bb5d583b48de097c3b7187f5527f1176ab547504115f72137bc5559fdd85c_prof);
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/0d/0df7be1f1e280fe973abbee95e78856b41fbd273380aee5819de2f734aeb7ae6.php

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
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
