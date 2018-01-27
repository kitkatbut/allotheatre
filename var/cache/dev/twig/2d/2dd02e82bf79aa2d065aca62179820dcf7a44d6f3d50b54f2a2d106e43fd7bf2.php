<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fc0cc20ca1a5ea1bb7d4230c01dbcd07bad77bd59dbbbe8e8502d59cdf18fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b1b7a2210b073176e62d64e1abda49d3746f1aca44929afd741b6304937392bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b7a2210b073176e62d64e1abda49d3746f1aca44929afd741b6304937392bc->enter($__internal_b1b7a2210b073176e62d64e1abda49d3746f1aca44929afd741b6304937392bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a66cf57b71a9989600522a9f233db6203899b120aa3d8f7dd048fb9ec753ed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66cf57b71a9989600522a9f233db6203899b120aa3d8f7dd048fb9ec753ed4c->enter($__internal_a66cf57b71a9989600522a9f233db6203899b120aa3d8f7dd048fb9ec753ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b7a2210b073176e62d64e1abda49d3746f1aca44929afd741b6304937392bc->leave($__internal_b1b7a2210b073176e62d64e1abda49d3746f1aca44929afd741b6304937392bc_prof);

        
        $__internal_a66cf57b71a9989600522a9f233db6203899b120aa3d8f7dd048fb9ec753ed4c->leave($__internal_a66cf57b71a9989600522a9f233db6203899b120aa3d8f7dd048fb9ec753ed4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd08d128a2406ce04b0d1f9089c1bdb0280a61cb8441542b7ee229754d56bab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd08d128a2406ce04b0d1f9089c1bdb0280a61cb8441542b7ee229754d56bab5->enter($__internal_cd08d128a2406ce04b0d1f9089c1bdb0280a61cb8441542b7ee229754d56bab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_61f1a40feb5ff6d3b89afc9e3d03c444c8119fef589e2b1edef9029ee7c4b2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f1a40feb5ff6d3b89afc9e3d03c444c8119fef589e2b1edef9029ee7c4b2a0->enter($__internal_61f1a40feb5ff6d3b89afc9e3d03c444c8119fef589e2b1edef9029ee7c4b2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61f1a40feb5ff6d3b89afc9e3d03c444c8119fef589e2b1edef9029ee7c4b2a0->leave($__internal_61f1a40feb5ff6d3b89afc9e3d03c444c8119fef589e2b1edef9029ee7c4b2a0_prof);

        
        $__internal_cd08d128a2406ce04b0d1f9089c1bdb0280a61cb8441542b7ee229754d56bab5->leave($__internal_cd08d128a2406ce04b0d1f9089c1bdb0280a61cb8441542b7ee229754d56bab5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c2a8f8e88e7f26a9a7c5caaa8861fb76762e15eb7cab88a96d071d09c2384ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2a8f8e88e7f26a9a7c5caaa8861fb76762e15eb7cab88a96d071d09c2384ed->enter($__internal_6c2a8f8e88e7f26a9a7c5caaa8861fb76762e15eb7cab88a96d071d09c2384ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_391f30b0647369748a850409c87bfa75bcdb28e83d07052a2478880d92c2e66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391f30b0647369748a850409c87bfa75bcdb28e83d07052a2478880d92c2e66a->enter($__internal_391f30b0647369748a850409c87bfa75bcdb28e83d07052a2478880d92c2e66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_391f30b0647369748a850409c87bfa75bcdb28e83d07052a2478880d92c2e66a->leave($__internal_391f30b0647369748a850409c87bfa75bcdb28e83d07052a2478880d92c2e66a_prof);

        
        $__internal_6c2a8f8e88e7f26a9a7c5caaa8861fb76762e15eb7cab88a96d071d09c2384ed->leave($__internal_6c2a8f8e88e7f26a9a7c5caaa8861fb76762e15eb7cab88a96d071d09c2384ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23eb68e941499150d97dada04aea9cc20111d7aaa72e78f9cd3440a46c140d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23eb68e941499150d97dada04aea9cc20111d7aaa72e78f9cd3440a46c140d2b->enter($__internal_23eb68e941499150d97dada04aea9cc20111d7aaa72e78f9cd3440a46c140d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6326d711e142163ca9797d7f2550503d931c8b19d7fc2ad76bbf932780f77c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6326d711e142163ca9797d7f2550503d931c8b19d7fc2ad76bbf932780f77c9->enter($__internal_f6326d711e142163ca9797d7f2550503d931c8b19d7fc2ad76bbf932780f77c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f6326d711e142163ca9797d7f2550503d931c8b19d7fc2ad76bbf932780f77c9->leave($__internal_f6326d711e142163ca9797d7f2550503d931c8b19d7fc2ad76bbf932780f77c9_prof);

        
        $__internal_23eb68e941499150d97dada04aea9cc20111d7aaa72e78f9cd3440a46c140d2b->leave($__internal_23eb68e941499150d97dada04aea9cc20111d7aaa72e78f9cd3440a46c140d2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
