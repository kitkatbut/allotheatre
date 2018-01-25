<?php

/* base.html.twig */
class __TwigTemplate_cb33324dcd09b62227066128489b0e097154a8eb364f85d9a0456c65178f8d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74d553ee62487b2753441eca64249bb0041b4249ff01aa319da7de4ba118398d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d553ee62487b2753441eca64249bb0041b4249ff01aa319da7de4ba118398d->enter($__internal_74d553ee62487b2753441eca64249bb0041b4249ff01aa319da7de4ba118398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5a62af9fecb5b9b2ed79a943fc100ea8d89d9d7ee1b6b8dddb8079ecfef8ca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a62af9fecb5b9b2ed79a943fc100ea8d89d9d7ee1b6b8dddb8079ecfef8ca94->enter($__internal_5a62af9fecb5b9b2ed79a943fc100ea8d89d9d7ee1b6b8dddb8079ecfef8ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Pauline Louis\">
    <link rel=\"icon\" href=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
    <!--  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->

    <!--   <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/header.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
    <!-- <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
    <!--    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  
    <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 176
        echo "
    <!--Main layout-->
    
";
        // line 179
        $this->displayBlock('body', $context, $blocks);
        // line 184
        echo " ";
        $this->displayBlock('footer', $context, $blocks);
        // line 189
        echo "

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>";
        
        $__internal_74d553ee62487b2753441eca64249bb0041b4249ff01aa319da7de4ba118398d->leave($__internal_74d553ee62487b2753441eca64249bb0041b4249ff01aa319da7de4ba118398d_prof);

        
        $__internal_5a62af9fecb5b9b2ed79a943fc100ea8d89d9d7ee1b6b8dddb8079ecfef8ca94->leave($__internal_5a62af9fecb5b9b2ed79a943fc100ea8d89d9d7ee1b6b8dddb8079ecfef8ca94_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed6830f656296beed566fb6a7664d8c222bf60b98a9be0349f5587fd41b63a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed6830f656296beed566fb6a7664d8c222bf60b98a9be0349f5587fd41b63a0->enter($__internal_bed6830f656296beed566fb6a7664d8c222bf60b98a9be0349f5587fd41b63a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fb4da6453bd1605318db5942b3e9d7641233349f176afe4db024ac62b5fe774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb4da6453bd1605318db5942b3e9d7641233349f176afe4db024ac62b5fe774->enter($__internal_1fb4da6453bd1605318db5942b3e9d7641233349f176afe4db024ac62b5fe774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_1fb4da6453bd1605318db5942b3e9d7641233349f176afe4db024ac62b5fe774->leave($__internal_1fb4da6453bd1605318db5942b3e9d7641233349f176afe4db024ac62b5fe774_prof);

        
        $__internal_bed6830f656296beed566fb6a7664d8c222bf60b98a9be0349f5587fd41b63a0->leave($__internal_bed6830f656296beed566fb6a7664d8c222bf60b98a9be0349f5587fd41b63a0_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_b4e8ad5bd1c04bc2753d4c34fbf88f16c402d4fd096975ddf9bfe5ccdc3ea1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e8ad5bd1c04bc2753d4c34fbf88f16c402d4fd096975ddf9bfe5ccdc3ea1fc->enter($__internal_b4e8ad5bd1c04bc2753d4c34fbf88f16c402d4fd096975ddf9bfe5ccdc3ea1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7ef2d03868fb67498b6214013d8b558fe4fe5260f9a1dda27ce29e230edfa97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef2d03868fb67498b6214013d8b558fe4fe5260f9a1dda27ce29e230edfa97a->enter($__internal_7ef2d03868fb67498b6214013d8b558fe4fe5260f9a1dda27ce29e230edfa97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "
<!--
<header class=\"header\">
    <!--
            <nav class=\"nav\">
                <ul class=\"nav__list\">
                    ";
        // line 32
        echo "                    <li class=\"nav__item\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a></li>
                    <li class=\"nav__item\"><a href=\"\">Spectacle</a></li>
                    <li class=\"nav__item\"><a href=\"\">Mon compte</a></li>
                </ul>
            </nav>
              -->
<body class=\"fixed-sn white-skin\">
    
        <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id=\"slide-out\" class=\"side-nav sn-bg-4 fixed mdb-sidenav\">
            <ul class=\"custom-scrollbar list-unstyled\" style=\"max-height:100vh;\">
                <!-- Logo -->
                <li>
                    <div class=\"logo-wrapper waves-light\">
                        <a href=\"#\"><img src=\"https://mdbootstrap.com/img/logo/mdb-transparent.png\" class=\"img-fluid flex-center\"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class=\"search-form\" role=\"search\">
                        <div class=\"form-group waves-light\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class=\"collapsible collapsible-accordion\">
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-chevron-right\"></i> Submit blog<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">Submit listing</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Registration form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-hand-pointer-o\"></i> Instruction<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">For bloggers</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">For authors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-eye\"></i> About<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">Introduction</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-envelope-o\"></i> Contact me<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class=\"sidenav-bg mask-strong\"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class=\"navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav\">
            <!-- SideNav slide-out button -->
            <div class=\"float-left\">
                <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-dn mr-auto\">
                <p>Material Design for Bootstrap</p>
            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Support</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Account</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Dropdown
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->              

  <body>
    \t<header class=\"header\">
    <h1 class=\"header__title\">AlloTheatre</h1><h2 class=\"header__sub-title\">Envie de sortir</h2>
    <img src=\"images/affiche.jpg\">


";
        
        $__internal_7ef2d03868fb67498b6214013d8b558fe4fe5260f9a1dda27ce29e230edfa97a->leave($__internal_7ef2d03868fb67498b6214013d8b558fe4fe5260f9a1dda27ce29e230edfa97a_prof);

        
        $__internal_b4e8ad5bd1c04bc2753d4c34fbf88f16c402d4fd096975ddf9bfe5ccdc3ea1fc->leave($__internal_b4e8ad5bd1c04bc2753d4c34fbf88f16c402d4fd096975ddf9bfe5ccdc3ea1fc_prof);

    }

    // line 179
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8feb6a567312e53a2e30a737a949820370a4b42e4acb6bd38459616e0db3078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8feb6a567312e53a2e30a737a949820370a4b42e4acb6bd38459616e0db3078->enter($__internal_c8feb6a567312e53a2e30a737a949820370a4b42e4acb6bd38459616e0db3078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c090c23125ec02f1a402d308a2d8431d08aaa9d30419c7d25fd5f8050414ee0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c090c23125ec02f1a402d308a2d8431d08aaa9d30419c7d25fd5f8050414ee0c->enter($__internal_c090c23125ec02f1a402d308a2d8431d08aaa9d30419c7d25fd5f8050414ee0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 180
        echo "
<body>
    <h2 class=\"body\">Body</h2>
</body>
";
        
        $__internal_c090c23125ec02f1a402d308a2d8431d08aaa9d30419c7d25fd5f8050414ee0c->leave($__internal_c090c23125ec02f1a402d308a2d8431d08aaa9d30419c7d25fd5f8050414ee0c_prof);

        
        $__internal_c8feb6a567312e53a2e30a737a949820370a4b42e4acb6bd38459616e0db3078->leave($__internal_c8feb6a567312e53a2e30a737a949820370a4b42e4acb6bd38459616e0db3078_prof);

    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9638c2cd262e8d79ec0ed506f4697b1fa4a469a4692f3a92abcf60c473248712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9638c2cd262e8d79ec0ed506f4697b1fa4a469a4692f3a92abcf60c473248712->enter($__internal_9638c2cd262e8d79ec0ed506f4697b1fa4a469a4692f3a92abcf60c473248712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2455960040a31d0a11abd61fc29a24f9fd77191000d42f13abf21b46eb716dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2455960040a31d0a11abd61fc29a24f9fd77191000d42f13abf21b46eb716dde->enter($__internal_2455960040a31d0a11abd61fc29a24f9fd77191000d42f13abf21b46eb716dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 185
        echo "<footer>
    <h2 class=\"footer\">Footer</h2>
</footer>
";
        
        $__internal_2455960040a31d0a11abd61fc29a24f9fd77191000d42f13abf21b46eb716dde->leave($__internal_2455960040a31d0a11abd61fc29a24f9fd77191000d42f13abf21b46eb716dde_prof);

        
        $__internal_9638c2cd262e8d79ec0ed506f4697b1fa4a469a4692f3a92abcf60c473248712->leave($__internal_9638c2cd262e8d79ec0ed506f4697b1fa4a469a4692f3a92abcf60c473248712_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 185,  316 => 184,  302 => 180,  293 => 179,  138 => 32,  130 => 25,  121 => 24,  103 => 21,  90 => 189,  87 => 184,  85 => 179,  80 => 176,  78 => 24,  72 => 21,  66 => 18,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"fr\">

<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Pauline Louis\">
    <link rel=\"icon\" href=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
    <!--  <link href=\"{{ asset('css/base.css') }}\" rel=\"stylesheet\"> -->

    <!--   <link href=\"{{ asset('css/layout/footer.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/layout/header.css') }}\" rel=\"stylesheet\"> -->
    <!-- <link href=\"{{ asset('css/layout/main.css') }}\" rel=\"stylesheet\"> -->
    <!--    <link href=\"{{ asset('css/layout/nav.css') }}\" rel=\"stylesheet\"> -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
      <link href=\"{{ asset('css/mdb.min.css') }}\" rel=\"stylesheet\">
  
  
    <title>{% block title %}AlloTheatre{% endblock %}</title>
</head>

{% block header %}

<!--
<header class=\"header\">
    <!--
            <nav class=\"nav\">
                <ul class=\"nav__list\">
                    {# Pour faire un lien, {{ path('nom_de_la_route') }} #}
                    <li class=\"nav__item\"><a href=\"{{ path('accueil') }}\">Accueil</a></li>
                    <li class=\"nav__item\"><a href=\"\">Spectacle</a></li>
                    <li class=\"nav__item\"><a href=\"\">Mon compte</a></li>
                </ul>
            </nav>
              -->
<body class=\"fixed-sn white-skin\">
    
        <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id=\"slide-out\" class=\"side-nav sn-bg-4 fixed mdb-sidenav\">
            <ul class=\"custom-scrollbar list-unstyled\" style=\"max-height:100vh;\">
                <!-- Logo -->
                <li>
                    <div class=\"logo-wrapper waves-light\">
                        <a href=\"#\"><img src=\"https://mdbootstrap.com/img/logo/mdb-transparent.png\" class=\"img-fluid flex-center\"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
                        <li><a href=\"#\" class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class=\"search-form\" role=\"search\">
                        <div class=\"form-group waves-light\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class=\"collapsible collapsible-accordion\">
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-chevron-right\"></i> Submit blog<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">Submit listing</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Registration form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-hand-pointer-o\"></i> Instruction<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">For bloggers</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">For authors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-eye\"></i> About<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">Introduction</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-envelope-o\"></i> Contact me<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">FAQ</a>
                                    </li>
                                    <li><a href=\"#\" class=\"waves-effect\">Write a message</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class=\"sidenav-bg mask-strong\"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class=\"navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav\">
            <!-- SideNav slide-out button -->
            <div class=\"float-left\">
                <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-dn mr-auto\">
                <p>Material Design for Bootstrap</p>
            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Support</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"><i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Account</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Dropdown
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->              

  <body>
    \t<header class=\"header\">
    <h1 class=\"header__title\">AlloTheatre</h1><h2 class=\"header__sub-title\">Envie de sortir</h2>
    <img src=\"images/affiche.jpg\">


{% endblock %}

    <!--Main layout-->
    
{% block body %}

<body>
    <h2 class=\"body\">Body</h2>
</body>
{% endblock %} {% block footer %}
<footer>
    <h2 class=\"footer\">Footer</h2>
</footer>
{% endblock %}


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>", "base.html.twig", "/Applications/MAMP/htdocs/AlloTheatre/templates/base.html.twig");
    }
}
