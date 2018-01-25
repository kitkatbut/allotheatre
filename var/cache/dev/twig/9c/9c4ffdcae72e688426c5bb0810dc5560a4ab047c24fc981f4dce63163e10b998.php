<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_ffe621022c4d27b0f68fc4616bfb4e5631ed6502ebe42da640ecb82452108707 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_bb1c9be32ac6b54d2b0a21252e540b311cc629542701dfa2a0e4be98fa5256e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1c9be32ac6b54d2b0a21252e540b311cc629542701dfa2a0e4be98fa5256e1->enter($__internal_bb1c9be32ac6b54d2b0a21252e540b311cc629542701dfa2a0e4be98fa5256e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_bac40474171cd99ee4d61ed67944bdcfefc6182ca03e75cdeb332653221db786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac40474171cd99ee4d61ed67944bdcfefc6182ca03e75cdeb332653221db786->enter($__internal_bac40474171cd99ee4d61ed67944bdcfefc6182ca03e75cdeb332653221db786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
        $__internal_e741be149749faf8d2c0ecb1ea66d1f5ad6294c9d06ac1a4c5645d9b4990d212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e741be149749faf8d2c0ecb1ea66d1f5ad6294c9d06ac1a4c5645d9b4990d212->enter($__internal_e741be149749faf8d2c0ecb1ea66d1f5ad6294c9d06ac1a4c5645d9b4990d212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_f879b4645ee17178fcc524b1643366ff9d119e6ff0951ede1f2a8552d4de416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f879b4645ee17178fcc524b1643366ff9d119e6ff0951ede1f2a8552d4de416f->enter($__internal_f879b4645ee17178fcc524b1643366ff9d119e6ff0951ede1f2a8552d4de416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_f960c1d2c21c51af00b3f92919a1cd753b47104587f1cdc74c854334f947fce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f960c1d2c21c51af00b3f92919a1cd753b47104587f1cdc74c854334f947fce0->enter($__internal_f960c1d2c21c51af00b3f92919a1cd753b47104587f1cdc74c854334f947fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_a8f7c3616388c91768852565c413ce991cb218ed4f594157c971fbd9b15f8c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f7c3616388c91768852565c413ce991cb218ed4f594157c971fbd9b15f8c2e->enter($__internal_a8f7c3616388c91768852565c413ce991cb218ed4f594157c971fbd9b15f8c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/9c/9c4ffdcae72e688426c5bb0810dc5560a4ab047c24fc981f4dce63163e10b998.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

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
<<<<<<< HEAD
                $__internal_b7057e82a93bfdc04698ce8a91faefaa4a9e9150da9cae9611d58d24892b09b2 = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
=======
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
                $__internal_c9dd09177a6a0827ff5d54cf51e3b7edcd89ff57ea9b6ee6bd11c786154c359d = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
=======
                $__internal_6781b15ac3c5cece38871c473dab8e0b20f5ccf8a08c8568311d93a9be7b942c = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 13
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/9c/9c4ffdcae72e688426c5bb0810dc5560a4ab047c24fc981f4dce63163e10b998.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 13, $this->getSourceContext()); })()), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
(isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 14, $this->getSourceContext()); })()), "token" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 15
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 15, $this->getSourceContext()); })()), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
(isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 17, $this->getSourceContext()); })()), "csp_script_nonce" =>                 // line 18
(isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 18, $this->getSourceContext()); })()), "csp_style_nonce" =>                 // line 19
(isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 19, $this->getSourceContext()); })()));
<<<<<<< HEAD
                if (!is_array($__internal_b7057e82a93bfdc04698ce8a91faefaa4a9e9150da9cae9611d58d24892b09b2)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_b7057e82a93bfdc04698ce8a91faefaa4a9e9150da9cae9611d58d24892b09b2);
=======
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
                if (!is_array($__internal_c9dd09177a6a0827ff5d54cf51e3b7edcd89ff57ea9b6ee6bd11c786154c359d)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_c9dd09177a6a0827ff5d54cf51e3b7edcd89ff57ea9b6ee6bd11c786154c359d);
=======
                if (!is_array($__internal_6781b15ac3c5cece38871c473dab8e0b20f5ccf8a08c8568311d93a9be7b942c)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_6781b15ac3c5cece38871c473dab8e0b20f5ccf8a08c8568311d93a9be7b942c);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/9c/9c4ffdcae72e688426c5bb0810dc5560a4ab047c24fc981f4dce63163e10b998.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4
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
        
<<<<<<< HEAD
        $__internal_bb1c9be32ac6b54d2b0a21252e540b311cc629542701dfa2a0e4be98fa5256e1->leave($__internal_bb1c9be32ac6b54d2b0a21252e540b311cc629542701dfa2a0e4be98fa5256e1_prof);

        
        $__internal_bac40474171cd99ee4d61ed67944bdcfefc6182ca03e75cdeb332653221db786->leave($__internal_bac40474171cd99ee4d61ed67944bdcfefc6182ca03e75cdeb332653221db786_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/d9/d97c3f4203f8d1c204a1fb0169361b2983e29513861379ee16198c8af5f35bde.php
        $__internal_e741be149749faf8d2c0ecb1ea66d1f5ad6294c9d06ac1a4c5645d9b4990d212->leave($__internal_e741be149749faf8d2c0ecb1ea66d1f5ad6294c9d06ac1a4c5645d9b4990d212_prof);

        
        $__internal_f879b4645ee17178fcc524b1643366ff9d119e6ff0951ede1f2a8552d4de416f->leave($__internal_f879b4645ee17178fcc524b1643366ff9d119e6ff0951ede1f2a8552d4de416f_prof);
=======
        $__internal_f960c1d2c21c51af00b3f92919a1cd753b47104587f1cdc74c854334f947fce0->leave($__internal_f960c1d2c21c51af00b3f92919a1cd753b47104587f1cdc74c854334f947fce0_prof);

        
        $__internal_a8f7c3616388c91768852565c413ce991cb218ed4f594157c971fbd9b15f8c2e->leave($__internal_a8f7c3616388c91768852565c413ce991cb218ed4f594157c971fbd9b15f8c2e_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/9c/9c4ffdcae72e688426c5bb0810dc5560a4ab047c24fc981f4dce63163e10b998.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

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
", "@WebProfiler/Profiler/toolbar.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
