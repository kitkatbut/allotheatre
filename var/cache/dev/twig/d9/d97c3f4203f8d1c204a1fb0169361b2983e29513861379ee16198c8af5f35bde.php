<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_0b4440d0063394bb9a497cc44d75ef5af14f6006b2de094bccf0e781f0728496 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
        $__internal_f961427932ff9a97be0c349ef6b34418c7a07b8648f9d90cb0aeac6ab8b6e267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f961427932ff9a97be0c349ef6b34418c7a07b8648f9d90cb0aeac6ab8b6e267->enter($__internal_f961427932ff9a97be0c349ef6b34418c7a07b8648f9d90cb0aeac6ab8b6e267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_b379cf18bc34a1b5167bb8f27d7f152f221cd7103cc95ac48f94f869bcf867c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b379cf18bc34a1b5167bb8f27d7f152f221cd7103cc95ac48f94f869bcf867c0->enter($__internal_b379cf18bc34a1b5167bb8f27d7f152f221cd7103cc95ac48f94f869bcf867c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_cec317efafc928557cd2926264eb9996152b7217dfdb87f3c2fc2b245892a90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec317efafc928557cd2926264eb9996152b7217dfdb87f3c2fc2b245892a90a->enter($__internal_cec317efafc928557cd2926264eb9996152b7217dfdb87f3c2fc2b245892a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_b826b2c09890180c27d9cea1d48b113211e532286b9caf5c621fc9d6c1a12bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b826b2c09890180c27d9cea1d48b113211e532286b9caf5c621fc9d6c1a12bdc->enter($__internal_b826b2c09890180c27d9cea1d48b113211e532286b9caf5c621fc9d6c1a12bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 10, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
                $__internal_05644de77be5126c5827540cdfd440465684007e25d0978f8de38cae4552022e = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
=======
                $__internal_060e803ef76c58094444ceddb5f17efe296736e8242c8f3c96c3d9a243cda45f = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 13, $this->getSourceContext()); })()), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 14, $this->getSourceContext()); })()), "token" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 15
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 15, $this->getSourceContext()); })()), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 17, $this->getSourceContext()); })()), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 18, $this->getSourceContext()); })()), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 19, $this->getSourceContext()); })()));
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
                if (!is_array($__internal_05644de77be5126c5827540cdfd440465684007e25d0978f8de38cae4552022e)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_05644de77be5126c5827540cdfd440465684007e25d0978f8de38cae4552022e);
=======
                if (!is_array($__internal_060e803ef76c58094444ceddb5f17efe296736e8242c8f3c96c3d9a243cda45f)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_060e803ef76c58094444ceddb5f17efe296736e8242c8f3c96c3d9a243cda45f);
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
        $__internal_f961427932ff9a97be0c349ef6b34418c7a07b8648f9d90cb0aeac6ab8b6e267->leave($__internal_f961427932ff9a97be0c349ef6b34418c7a07b8648f9d90cb0aeac6ab8b6e267_prof);

        
        $__internal_b379cf18bc34a1b5167bb8f27d7f152f221cd7103cc95ac48f94f869bcf867c0->leave($__internal_b379cf18bc34a1b5167bb8f27d7f152f221cd7103cc95ac48f94f869bcf867c0_prof);
=======
        $__internal_cec317efafc928557cd2926264eb9996152b7217dfdb87f3c2fc2b245892a90a->leave($__internal_cec317efafc928557cd2926264eb9996152b7217dfdb87f3c2fc2b245892a90a_prof);

        
        $__internal_b826b2c09890180c27d9cea1d48b113211e532286b9caf5c621fc9d6c1a12bdc->leave($__internal_b826b2c09890180c27d9cea1d48b113211e532286b9caf5c621fc9d6c1a12bdc_prof);
>>>>>>> 16fb13c9238ccda59e099263bf60aeefa153183d:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
