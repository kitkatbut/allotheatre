<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6d8f7f1f39a46864c20c87281c66485f18be3835d691f510c0ee75d6259fee0b extends Twig_Template
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
<<<<<<< HEAD
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556->enter($__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e->enter($__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
=======
<<<<<<< HEAD:var/cache/dev/twig/5b/5b410ebd75ff35d1c14064ed23aa72aac3b6dd273db7008919aa25871dffde1f.php
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510->enter($__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168->enter($__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
=======
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f->enter($__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154->enter($__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/22/224681d9d52cf96ba588fff6a0c903dbaf23738361e595a15645dcce5858cbef.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

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
        
<<<<<<< HEAD
        $__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556->leave($__internal_8f17f4e39bbea409c67e64693f20b98fd2e281455b573ed4cc7cbc7ee605b556_prof);

        
        $__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e->leave($__internal_49e7e6d224f54d4f0dd434bfc35398016c892c708f7ef43684dc90fce411063e_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/5b/5b410ebd75ff35d1c14064ed23aa72aac3b6dd273db7008919aa25871dffde1f.php
        $__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510->leave($__internal_5d87e07ee185f93d53744c986e16907d641a5978c0945184c0819a1cb896c510_prof);

        
        $__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168->leave($__internal_ced3b1bbc7358cacfbd9e494c854af0f88db33201e546cb1ccb8e910d4254168_prof);
=======
        $__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f->leave($__internal_fa7dae9120c8c01d26255a5f74c2efddbc6f4df7476651139b8b661d8e48518f_prof);

        
        $__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154->leave($__internal_ef231fc1bf7576025c9740056d76d37fc1f98f860e1c97a7bea0cfd5e6342154_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/22/224681d9d52cf96ba588fff6a0c903dbaf23738361e595a15645dcce5858cbef.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1->enter($__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
<<<<<<< HEAD:var/cache/dev/twig/5b/5b410ebd75ff35d1c14064ed23aa72aac3b6dd273db7008919aa25871dffde1f.php
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8->enter($__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130->enter($__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130->leave($__internal_4346e753cb766bc24b14c2a1559dd7d547760dd927d06d87b0d726d58ba3d130_prof);

        
        $__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8->leave($__internal_1ae24a18fdf572270eed1cd1d54deded17d7cd1974e9b00a01a454fe071df9d8_prof);
=======
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77->enter($__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60->enter($__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60->leave($__internal_b6dd1b023ea11324150e22c01109a59a8af97d566fdf6e69598709628e3edf60_prof);

        
<<<<<<< HEAD
        $__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1->leave($__internal_45ea47f6eeb339d308110009ee3261b7eb670222a77bfaaf217510eca0a8d6d1_prof);
=======
        $__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77->leave($__internal_cf690ca20785dd12550bb31fd3956b0b5f226f88f6f5e2aa0213884a4cca2e77_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/22/224681d9d52cf96ba588fff6a0c903dbaf23738361e595a15645dcce5858cbef.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c->enter($__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
<<<<<<< HEAD:var/cache/dev/twig/5b/5b410ebd75ff35d1c14064ed23aa72aac3b6dd273db7008919aa25871dffde1f.php
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee->enter($__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834->enter($__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834->leave($__internal_390b3c07eebbeb96a40b0db1edbfabeb02eda5711c854d97a4dc325df6302834_prof);

        
        $__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee->leave($__internal_9e2b9c775be5142db1e4648d696d05f1b4fdc3a090b673239d90f973b82e34ee_prof);
=======
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f->enter($__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f->enter($__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f->leave($__internal_eca84841b885213447d5ac82dad8ae6bc70cc63e2029065c82610ae2555ea32f_prof);

        
<<<<<<< HEAD
        $__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c->leave($__internal_fd17d22d4b0d9452113a3d5a44b329e24129e5df59b9f49442b3c0b1b0a5263c_prof);
=======
        $__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f->leave($__internal_65448c0bd218d3fc6f420790862fab615b30f076eeb9d544038c9c42c6c6612f_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/22/224681d9d52cf96ba588fff6a0c903dbaf23738361e595a15645dcce5858cbef.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c->enter($__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
<<<<<<< HEAD:var/cache/dev/twig/5b/5b410ebd75ff35d1c14064ed23aa72aac3b6dd273db7008919aa25871dffde1f.php
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5->enter($__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5->enter($__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5->leave($__internal_de0c599cde63380771ef57e02d814758368a8cecd98a9f159ffef35303d448d5_prof);

        
        $__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5->leave($__internal_ad2f12bedd15205decb44ea096c3c8779be27089695a060393d25a6ddafc51e5_prof);
=======
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2->enter($__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020->enter($__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020->leave($__internal_0d52915778b027d3ffbe3f1b9abd4d772af920eb617b56681f1bcd05bbb6d020_prof);

        
<<<<<<< HEAD
        $__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c->leave($__internal_08e106c35c24a33b8bcda3ba1e10c1e3a12907eb73d6d4207094c999f410d95c_prof);
=======
        $__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2->leave($__internal_f4ed144ef5de28086306f4447a0d30c08f1c57afa0e6e007fd0522938c585ea2_prof);
>>>>>>> dd750d5759c991b2aaf8e12a2c7b5ac6ae0c82ea:var/cache/dev/twig/22/224681d9d52cf96ba588fff6a0c903dbaf23738361e595a15645dcce5858cbef.php
>>>>>>> 02c4a0439f43eb84982404b0559cf4e3beb721e4

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
", "@Twig/layout.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
