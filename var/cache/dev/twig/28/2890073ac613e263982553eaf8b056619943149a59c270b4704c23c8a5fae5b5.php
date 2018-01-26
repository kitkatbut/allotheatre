<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_e96248cda7baad48434dcf41f63280b99e704123b44f56eb7b4b9cb616537a0f extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/28/2890073ac613e263982553eaf8b056619943149a59c270b4704c23c8a5fae5b5.php
        $__internal_363b6244b77d65aebf1ad68a6a8a881a2be7516f034273016f16a2b3d3445dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363b6244b77d65aebf1ad68a6a8a881a2be7516f034273016f16a2b3d3445dc4->enter($__internal_363b6244b77d65aebf1ad68a6a8a881a2be7516f034273016f16a2b3d3445dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_c6522f13b9ac1a0fb0e5ba2abcb6d987baa41aa5225674bc4f292236c6817a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6522f13b9ac1a0fb0e5ba2abcb6d987baa41aa5225674bc4f292236c6817a39->enter($__internal_c6522f13b9ac1a0fb0e5ba2abcb6d987baa41aa5225674bc4f292236c6817a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_6d837a55ed66a145f55d5655c971630e50f9003816d52f08fb3fb0c6591c02d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d837a55ed66a145f55d5655c971630e50f9003816d52f08fb3fb0c6591c02d9->enter($__internal_6d837a55ed66a145f55d5655c971630e50f9003816d52f08fb3fb0c6591c02d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_aca3cb39861f61ad93b827a0e16b56be6828766c39956a77435214af9598cf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca3cb39861f61ad93b827a0e16b56be6828766c39956a77435214af9598cf9f->enter($__internal_aca3cb39861f61ad93b827a0e16b56be6828766c39956a77435214af9598cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/dc/dcde14632519f32e0b8ce1e16a04dec958cce7fbc3f1110adc6f787cf5aebf33.php

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
        
<<<<<<< HEAD:var/cache/dev/twig/28/2890073ac613e263982553eaf8b056619943149a59c270b4704c23c8a5fae5b5.php
        $__internal_363b6244b77d65aebf1ad68a6a8a881a2be7516f034273016f16a2b3d3445dc4->leave($__internal_363b6244b77d65aebf1ad68a6a8a881a2be7516f034273016f16a2b3d3445dc4_prof);

        
        $__internal_c6522f13b9ac1a0fb0e5ba2abcb6d987baa41aa5225674bc4f292236c6817a39->leave($__internal_c6522f13b9ac1a0fb0e5ba2abcb6d987baa41aa5225674bc4f292236c6817a39_prof);
=======
        $__internal_6d837a55ed66a145f55d5655c971630e50f9003816d52f08fb3fb0c6591c02d9->leave($__internal_6d837a55ed66a145f55d5655c971630e50f9003816d52f08fb3fb0c6591c02d9_prof);

        
        $__internal_aca3cb39861f61ad93b827a0e16b56be6828766c39956a77435214af9598cf9f->leave($__internal_aca3cb39861f61ad93b827a0e16b56be6828766c39956a77435214af9598cf9f_prof);
>>>>>>> 348fb456109680eaf0ffeae7afd6f51a8b00ed58:var/cache/dev/twig/dc/dcde14632519f32e0b8ce1e16a04dec958cce7fbc3f1110adc6f787cf5aebf33.php

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
", "@Twig/Exception/traces_text.html.twig", "C:\\xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
