<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_7b029a3d83d9ecf1ebbd7d3874554622aa3ec33b02330fb42b33ce9e82bb8445 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/dc/dcde14632519f32e0b8ce1e16a04dec958cce7fbc3f1110adc6f787cf5aebf33.php
        $__internal_1ed54c4bfedcc5d5f44118ab50cf206f3deba5c9be3be35f6691b8b0ec672dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed54c4bfedcc5d5f44118ab50cf206f3deba5c9be3be35f6691b8b0ec672dec->enter($__internal_1ed54c4bfedcc5d5f44118ab50cf206f3deba5c9be3be35f6691b8b0ec672dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_375bd379bd9fa334c7b6eef4979e4987136b9a42d7bb770fc5b4b1170c2cb8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375bd379bd9fa334c7b6eef4979e4987136b9a42d7bb770fc5b4b1170c2cb8d5->enter($__internal_375bd379bd9fa334c7b6eef4979e4987136b9a42d7bb770fc5b4b1170c2cb8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_c819d2053872cdb614a4fdaa7d2823904d2d7b57133d000466ac050f9d07c612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c819d2053872cdb614a4fdaa7d2823904d2d7b57133d000466ac050f9d07c612->enter($__internal_c819d2053872cdb614a4fdaa7d2823904d2d7b57133d000466ac050f9d07c612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_2c06e499c4760ab9d574c34c6ef6e843932a969633be9375dc00136a785bf9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c06e499c4760ab9d574c34c6ef6e843932a969633be9375dc00136a785bf9f1->enter($__internal_2c06e499c4760ab9d574c34c6ef6e843932a969633be9375dc00136a785bf9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/d6/d6da5e98d35e997a359435da134bfb194dbd6e2d4629f9429e92818ef09c65aa.php

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 6, $this->getSourceContext()); })()) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, (((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 7, $this->getSourceContext()); })()) - (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 7, $this->getSourceContext()); })())) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new Twig_Error_Runtime('Variable "num_exceptions" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->getSourceContext()); })()), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 20, $this->getSourceContext()); })())), false);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
        
<<<<<<< HEAD:var/cache/dev/twig/dc/dcde14632519f32e0b8ce1e16a04dec958cce7fbc3f1110adc6f787cf5aebf33.php
        $__internal_1ed54c4bfedcc5d5f44118ab50cf206f3deba5c9be3be35f6691b8b0ec672dec->leave($__internal_1ed54c4bfedcc5d5f44118ab50cf206f3deba5c9be3be35f6691b8b0ec672dec_prof);

        
        $__internal_375bd379bd9fa334c7b6eef4979e4987136b9a42d7bb770fc5b4b1170c2cb8d5->leave($__internal_375bd379bd9fa334c7b6eef4979e4987136b9a42d7bb770fc5b4b1170c2cb8d5_prof);
=======
        $__internal_c819d2053872cdb614a4fdaa7d2823904d2d7b57133d000466ac050f9d07c612->leave($__internal_c819d2053872cdb614a4fdaa7d2823904d2d7b57133d000466ac050f9d07c612_prof);

        
        $__internal_2c06e499c4760ab9d574c34c6ef6e843932a969633be9375dc00136a785bf9f1->leave($__internal_2c06e499c4760ab9d574c34c6ef6e843932a969633be9375dc00136a785bf9f1_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/d6/d6da5e98d35e997a359435da134bfb194dbd6e2d4629f9429e92818ef09c65aa.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  56 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {{ include('@Twig/Exception/traces.txt.twig', { exception: exception }, with_context = false) }}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
