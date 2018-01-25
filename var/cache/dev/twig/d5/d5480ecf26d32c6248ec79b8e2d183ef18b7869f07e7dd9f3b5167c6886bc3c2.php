<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
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
        $__internal_bca072633283ac0cb4a289fac05df0478b7dbf42855f88f9f66f8763cc8cfdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca072633283ac0cb4a289fac05df0478b7dbf42855f88f9f66f8763cc8cfdee->enter($__internal_bca072633283ac0cb4a289fac05df0478b7dbf42855f88f9f66f8763cc8cfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cdb795b130a2bc1a3fd9217fed10d2e1d07935e28a104e1ff1636e69823e8dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb795b130a2bc1a3fd9217fed10d2e1d07935e28a104e1ff1636e69823e8dc0->enter($__internal_cdb795b130a2bc1a3fd9217fed10d2e1d07935e28a104e1ff1636e69823e8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bca072633283ac0cb4a289fac05df0478b7dbf42855f88f9f66f8763cc8cfdee->leave($__internal_bca072633283ac0cb4a289fac05df0478b7dbf42855f88f9f66f8763cc8cfdee_prof);

        
        $__internal_cdb795b130a2bc1a3fd9217fed10d2e1d07935e28a104e1ff1636e69823e8dc0->leave($__internal_cdb795b130a2bc1a3fd9217fed10d2e1d07935e28a104e1ff1636e69823e8dc0_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_bede56176af40dfa7be20fe20d28355c15515cc614919a16b1504332a5c74ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bede56176af40dfa7be20fe20d28355c15515cc614919a16b1504332a5c74ada->enter($__internal_bede56176af40dfa7be20fe20d28355c15515cc614919a16b1504332a5c74ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d8fcdec6f84a77eb0d415625272935baa7af4c117e57f391e6d70fd9b75866e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8fcdec6f84a77eb0d415625272935baa7af4c117e57f391e6d70fd9b75866e->enter($__internal_8d8fcdec6f84a77eb0d415625272935baa7af4c117e57f391e6d70fd9b75866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_8d8fcdec6f84a77eb0d415625272935baa7af4c117e57f391e6d70fd9b75866e->leave($__internal_8d8fcdec6f84a77eb0d415625272935baa7af4c117e57f391e6d70fd9b75866e_prof);

        
        $__internal_bede56176af40dfa7be20fe20d28355c15515cc614919a16b1504332a5c74ada->leave($__internal_bede56176af40dfa7be20fe20d28355c15515cc614919a16b1504332a5c74ada_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_1c3d83ac66e40af0b01b282f5d93e161fae94ccc3bd34e49f7bfa03fdda37f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3d83ac66e40af0b01b282f5d93e161fae94ccc3bd34e49f7bfa03fdda37f74->enter($__internal_1c3d83ac66e40af0b01b282f5d93e161fae94ccc3bd34e49f7bfa03fdda37f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_933b776741ece54bc001317d7cca55bd0e865ead31dc4b518bfc23787ea598e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933b776741ece54bc001317d7cca55bd0e865ead31dc4b518bfc23787ea598e6->enter($__internal_933b776741ece54bc001317d7cca55bd0e865ead31dc4b518bfc23787ea598e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_933b776741ece54bc001317d7cca55bd0e865ead31dc4b518bfc23787ea598e6->leave($__internal_933b776741ece54bc001317d7cca55bd0e865ead31dc4b518bfc23787ea598e6_prof);

        
        $__internal_1c3d83ac66e40af0b01b282f5d93e161fae94ccc3bd34e49f7bfa03fdda37f74->leave($__internal_1c3d83ac66e40af0b01b282f5d93e161fae94ccc3bd34e49f7bfa03fdda37f74_prof);

    }

    // line 179
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad6940a0a4b5aebf2a185e7b433013ec704b6613cc753772112be25e17a53f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad6940a0a4b5aebf2a185e7b433013ec704b6613cc753772112be25e17a53f2->enter($__internal_aad6940a0a4b5aebf2a185e7b433013ec704b6613cc753772112be25e17a53f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bfce076ed98274fcef3cfd1e6275fe384d8f91d28b6d05713b37bcc3876eedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfce076ed98274fcef3cfd1e6275fe384d8f91d28b6d05713b37bcc3876eedb->enter($__internal_4bfce076ed98274fcef3cfd1e6275fe384d8f91d28b6d05713b37bcc3876eedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 180
        echo "
<body>
    <h2 class=\"body\">Body</h2>
</body>
";
        
        $__internal_4bfce076ed98274fcef3cfd1e6275fe384d8f91d28b6d05713b37bcc3876eedb->leave($__internal_4bfce076ed98274fcef3cfd1e6275fe384d8f91d28b6d05713b37bcc3876eedb_prof);

        
        $__internal_aad6940a0a4b5aebf2a185e7b433013ec704b6613cc753772112be25e17a53f2->leave($__internal_aad6940a0a4b5aebf2a185e7b433013ec704b6613cc753772112be25e17a53f2_prof);

    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4d12d7c3e82eb5dbb7a93c89f41aab7df1cdacc4500ee2c2191b4c6305973a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d12d7c3e82eb5dbb7a93c89f41aab7df1cdacc4500ee2c2191b4c6305973a4b->enter($__internal_4d12d7c3e82eb5dbb7a93c89f41aab7df1cdacc4500ee2c2191b4c6305973a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0126238da7164a5d3644bc0d343a90fe30c36d1b9839c3b54f8e64d6a565a7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0126238da7164a5d3644bc0d343a90fe30c36d1b9839c3b54f8e64d6a565a7f8->enter($__internal_0126238da7164a5d3644bc0d343a90fe30c36d1b9839c3b54f8e64d6a565a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 185
        echo "<footer>
    <h2 class=\"footer\">Footer</h2>
</footer>
";
        
        $__internal_0126238da7164a5d3644bc0d343a90fe30c36d1b9839c3b54f8e64d6a565a7f8->leave($__internal_0126238da7164a5d3644bc0d343a90fe30c36d1b9839c3b54f8e64d6a565a7f8_prof);

        
        $__internal_4d12d7c3e82eb5dbb7a93c89f41aab7df1cdacc4500ee2c2191b4c6305973a4b->leave($__internal_4d12d7c3e82eb5dbb7a93c89f41aab7df1cdacc4500ee2c2191b4c6305973a4b_prof);

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
<script src=\"js/bootstrap.min.js\"></script>", "base.html.twig", "C:\\xampp\\htdocs\\allotheatre\\templates\\base.html.twig");
    }
}
