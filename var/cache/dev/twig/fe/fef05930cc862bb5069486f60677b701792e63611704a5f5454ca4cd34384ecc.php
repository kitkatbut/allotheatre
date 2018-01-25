<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_db4f78348087776b64515c0cd21c151bba4a13fc79371a5cb28683b1692c7543 extends Twig_Template
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
        $__internal_9d58042805c0821b04abe782c208f3c2659c68f40a608905748a8e70bf441537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d58042805c0821b04abe782c208f3c2659c68f40a608905748a8e70bf441537->enter($__internal_9d58042805c0821b04abe782c208f3c2659c68f40a608905748a8e70bf441537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_d5a7c05ec2238a1d7e6d8d4cc99085abb8b8b90bd1f2add7bfde6c363bbeca2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a7c05ec2238a1d7e6d8d4cc99085abb8b8b90bd1f2add7bfde6c363bbeca2e->enter($__internal_d5a7c05ec2238a1d7e6d8d4cc99085abb8b8b90bd1f2add7bfde6c363bbeca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_b9698f16ae779542548b9a5936b2b5f939db4803eecbcfdd4a4dc8a0a00e3a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9698f16ae779542548b9a5936b2b5f939db4803eecbcfdd4a4dc8a0a00e3a6d->enter($__internal_b9698f16ae779542548b9a5936b2b5f939db4803eecbcfdd4a4dc8a0a00e3a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_f8ba0fe80df1c85cb0734e14556bd0f3e5ac038bb82a811133e8b482ce922268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ba0fe80df1c85cb0734e14556bd0f3e5ac038bb82a811133e8b482ce922268->enter($__internal_f8ba0fe80df1c85cb0734e14556bd0f3e5ac038bb82a811133e8b482ce922268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/fe/fef05930cc862bb5069486f60677b701792e63611704a5f5454ca4cd34384ecc.php

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
        $__internal_9d58042805c0821b04abe782c208f3c2659c68f40a608905748a8e70bf441537->leave($__internal_9d58042805c0821b04abe782c208f3c2659c68f40a608905748a8e70bf441537_prof);

        
        $__internal_d5a7c05ec2238a1d7e6d8d4cc99085abb8b8b90bd1f2add7bfde6c363bbeca2e->leave($__internal_d5a7c05ec2238a1d7e6d8d4cc99085abb8b8b90bd1f2add7bfde6c363bbeca2e_prof);
=======
        $__internal_b9698f16ae779542548b9a5936b2b5f939db4803eecbcfdd4a4dc8a0a00e3a6d->leave($__internal_b9698f16ae779542548b9a5936b2b5f939db4803eecbcfdd4a4dc8a0a00e3a6d_prof);

        
        $__internal_f8ba0fe80df1c85cb0734e14556bd0f3e5ac038bb82a811133e8b482ce922268->leave($__internal_f8ba0fe80df1c85cb0734e14556bd0f3e5ac038bb82a811133e8b482ce922268_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/fe/fef05930cc862bb5069486f60677b701792e63611704a5f5454ca4cd34384ecc.php

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
", "@WebProfiler/Profiler/toolbar_item.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
