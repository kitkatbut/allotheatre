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
<<<<<<< HEAD
        $__internal_b181ea3850aa799f7662651bde9a2fc70425cf8dd17ba56ae20ff1a7f0d82aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b181ea3850aa799f7662651bde9a2fc70425cf8dd17ba56ae20ff1a7f0d82aa5->enter($__internal_b181ea3850aa799f7662651bde9a2fc70425cf8dd17ba56ae20ff1a7f0d82aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_54b4356bb35c03fd0a518800eb1ad4978f9bdb44fc74a642b4b331ee35a1c495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4356bb35c03fd0a518800eb1ad4978f9bdb44fc74a642b4b331ee35a1c495->enter($__internal_54b4356bb35c03fd0a518800eb1ad4978f9bdb44fc74a642b4b331ee35a1c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_e9014156b324ee47c68be379349012c73047c337e27ad64425fc31bf2fa89060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9014156b324ee47c68be379349012c73047c337e27ad64425fc31bf2fa89060->enter($__internal_e9014156b324ee47c68be379349012c73047c337e27ad64425fc31bf2fa89060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5d04da1ef7836352cd5d67bae8a819a823487c50747c7d316c94e2a7043e02ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d04da1ef7836352cd5d67bae8a819a823487c50747c7d316c94e2a7043e02ee->enter($__internal_5d04da1ef7836352cd5d67bae8a819a823487c50747c7d316c94e2a7043e02ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2->enter($__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080->enter($__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

        // line 1
        echo "<html lang=\"fr\">

<head>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--<meta name=\"description\" content=\"\">-->
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Rebolle\">
    <!--<link rel=\"icon\" href=\"\">-->

  <!-- Material Design Bootstrap -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 163
        echo "
      <!--Main layout-->

      ";
        // line 166
        $this->displayBlock('body', $context, $blocks);
        // line 345
        echo "       ";
        $this->displayBlock('footer', $context, $blocks);
<<<<<<< HEAD
        // line 405
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        // line 393
=======
        // line 423
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992
        echo "

      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
";
        
<<<<<<< HEAD
        $__internal_b181ea3850aa799f7662651bde9a2fc70425cf8dd17ba56ae20ff1a7f0d82aa5->leave($__internal_b181ea3850aa799f7662651bde9a2fc70425cf8dd17ba56ae20ff1a7f0d82aa5_prof);

        
        $__internal_54b4356bb35c03fd0a518800eb1ad4978f9bdb44fc74a642b4b331ee35a1c495->leave($__internal_54b4356bb35c03fd0a518800eb1ad4978f9bdb44fc74a642b4b331ee35a1c495_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_e9014156b324ee47c68be379349012c73047c337e27ad64425fc31bf2fa89060->leave($__internal_e9014156b324ee47c68be379349012c73047c337e27ad64425fc31bf2fa89060_prof);

        
        $__internal_5d04da1ef7836352cd5d67bae8a819a823487c50747c7d316c94e2a7043e02ee->leave($__internal_5d04da1ef7836352cd5d67bae8a819a823487c50747c7d316c94e2a7043e02ee_prof);
=======
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2->leave($__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2_prof);

        
        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080->leave($__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080_prof);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_1ed8d86d01900b871467f6a1ad2226230dcf2320934b5679a7cbe28f524d09a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed8d86d01900b871467f6a1ad2226230dcf2320934b5679a7cbe28f524d09a9->enter($__internal_1ed8d86d01900b871467f6a1ad2226230dcf2320934b5679a7cbe28f524d09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_4ad8a103fb6a06c5a9548cb4a94002a09488ecea0c76f9b2cab256e79c56a02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad8a103fb6a06c5a9548cb4a94002a09488ecea0c76f9b2cab256e79c56a02d->enter($__internal_4ad8a103fb6a06c5a9548cb4a94002a09488ecea0c76f9b2cab256e79c56a02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8eb29ca98d192ce92e50c114506fc191aa93ad6b75aad2ff4cb22eefa63d06ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb29ca98d192ce92e50c114506fc191aa93ad6b75aad2ff4cb22eefa63d06ca->enter($__internal_8eb29ca98d192ce92e50c114506fc191aa93ad6b75aad2ff4cb22eefa63d06ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_8eb29ca98d192ce92e50c114506fc191aa93ad6b75aad2ff4cb22eefa63d06ca->leave($__internal_8eb29ca98d192ce92e50c114506fc191aa93ad6b75aad2ff4cb22eefa63d06ca_prof);

        
        $__internal_4ad8a103fb6a06c5a9548cb4a94002a09488ecea0c76f9b2cab256e79c56a02d->leave($__internal_4ad8a103fb6a06c5a9548cb4a94002a09488ecea0c76f9b2cab256e79c56a02d_prof);
=======
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c->enter($__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

        $__internal_54fa6f2967afc672df73f4ab00556e5ed30f4600461f7dd5d6358def592d4948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fa6f2967afc672df73f4ab00556e5ed30f4600461f7dd5d6358def592d4948->enter($__internal_54fa6f2967afc672df73f4ab00556e5ed30f4600461f7dd5d6358def592d4948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_54fa6f2967afc672df73f4ab00556e5ed30f4600461f7dd5d6358def592d4948->leave($__internal_54fa6f2967afc672df73f4ab00556e5ed30f4600461f7dd5d6358def592d4948_prof);

        
<<<<<<< HEAD
        $__internal_1ed8d86d01900b871467f6a1ad2226230dcf2320934b5679a7cbe28f524d09a9->leave($__internal_1ed8d86d01900b871467f6a1ad2226230dcf2320934b5679a7cbe28f524d09a9_prof);
=======
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c->leave($__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c_prof);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e62e3bbdda4580040ee7ce1d0887ca926245808a291d239bd5c173d19849cac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62e3bbdda4580040ee7ce1d0887ca926245808a291d239bd5c173d19849cac2->enter($__internal_e62e3bbdda4580040ee7ce1d0887ca926245808a291d239bd5c173d19849cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3506b1233d006b420dfe22533a8a2a9cd0886ef76576287024cb077afc14ff62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3506b1233d006b420dfe22533a8a2a9cd0886ef76576287024cb077afc14ff62->enter($__internal_3506b1233d006b420dfe22533a8a2a9cd0886ef76576287024cb077afc14ff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_93cf82ff3dab4a4f08797a4952a6657fba5c6bd6781cb64bb4f94fe55791c348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93cf82ff3dab4a4f08797a4952a6657fba5c6bd6781cb64bb4f94fe55791c348->enter($__internal_93cf82ff3dab4a4f08797a4952a6657fba5c6bd6781cb64bb4f94fe55791c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_47863c9dc0700818010c1eab74e21106299384e4291bfd2b852e88e3c90fa820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47863c9dc0700818010c1eab74e21106299384e4291bfd2b852e88e3c90fa820->enter($__internal_47863c9dc0700818010c1eab74e21106299384e4291bfd2b852e88e3c90fa820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));
=======
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9->enter($__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a->enter($__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

        // line 23
        echo "

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
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-chevron-right\"></i> Cirque/Clown<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Cirque</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Clown</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-hand-pointer-o\"></i> Conte/poésie/lecture<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Conte</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Poésie</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Lecture</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-eye\"></i> Danse/Danse-Théâtre<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Danse</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Danse-Théâtre</a>
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
        <p>ALLOTHEATRE</p>
      </div>
      <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
        <li class=\"nav-item\">
          <a href=\"contact.php\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
        </li>
        <li class=\"nav-item\">
          <a href=\"inscription.php\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Inscription</span></a>

        </li>
        <li> | </li>
        <li class=\"nav-item\">
          <a href=\"connexion.php\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Mon Compte</span>

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

 ";
        
<<<<<<< HEAD
        $__internal_3506b1233d006b420dfe22533a8a2a9cd0886ef76576287024cb077afc14ff62->leave($__internal_3506b1233d006b420dfe22533a8a2a9cd0886ef76576287024cb077afc14ff62_prof);

        
        $__internal_e62e3bbdda4580040ee7ce1d0887ca926245808a291d239bd5c173d19849cac2->leave($__internal_e62e3bbdda4580040ee7ce1d0887ca926245808a291d239bd5c173d19849cac2_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_47863c9dc0700818010c1eab74e21106299384e4291bfd2b852e88e3c90fa820->leave($__internal_47863c9dc0700818010c1eab74e21106299384e4291bfd2b852e88e3c90fa820_prof);

        
        $__internal_93cf82ff3dab4a4f08797a4952a6657fba5c6bd6781cb64bb4f94fe55791c348->leave($__internal_93cf82ff3dab4a4f08797a4952a6657fba5c6bd6781cb64bb4f94fe55791c348_prof);
=======
        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a->leave($__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a_prof);

        
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9->leave($__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9_prof);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

    }

    // line 166
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_61b9f87fc916cff216f1f33bc20d0d6a0e0249df5f6aa3a041128ba3d3475eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b9f87fc916cff216f1f33bc20d0d6a0e0249df5f6aa3a041128ba3d3475eaf->enter($__internal_61b9f87fc916cff216f1f33bc20d0d6a0e0249df5f6aa3a041128ba3d3475eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ea36b5d450f2a522d119604075808ec132434f6d3d3cd4c544f3d4366a1cde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea36b5d450f2a522d119604075808ec132434f6d3d3cd4c544f3d4366a1cde5->enter($__internal_5ea36b5d450f2a522d119604075808ec132434f6d3d3cd4c544f3d4366a1cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_2cfa3e16acb0c5952773f765a7bb3c6d1ffc9b2f493103e465cf8e5162639cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfa3e16acb0c5952773f765a7bb3c6d1ffc9b2f493103e465cf8e5162639cd7->enter($__internal_2cfa3e16acb0c5952773f765a7bb3c6d1ffc9b2f493103e465cf8e5162639cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_777490b7e73c5513bf9705e7a9460d1645b2699f484d610ba18505070737a886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777490b7e73c5513bf9705e7a9460d1645b2699f484d610ba18505070737a886->enter($__internal_777490b7e73c5513bf9705e7a9460d1645b2699f484d610ba18505070737a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be->enter($__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1->enter($__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

        // line 167
        echo "
      <main>
        <section>

      <div id=\"carousel\">

        <div class=\"hideLeft\">
         <img src=\"images/images_spectacle/journal_dune_apparition.jpg\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"images/images_spectacle/le_chant_des_baleines.jpg\">
       </div>

       <div class=\"prev\">
         <img src=\"images/images_spectacle/le_horla.jpg\">
       </div>

       <div class=\"selected\">
         <img src=\"images/images_spectacle/le_malade_imaginaire.jpg\">
       </div>

       <div class=\"next\">
         <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"
  images/images_spectacle/lotre_belle.jpg\">
       </div>

       <div class=\"hideRight\">
         <img src=\"images/images_spectacle/ma_grammaire_fait_du_velo.jpg\">
       </div>
       </div>


     <div class=\"buttons col-lg-2 col-lg-offset-5\">
       <button id=\"prev\" class=\"btn btn-warning col-lg-5\">Prev</button>
       <button id=\"next\" class=\"btn btn-warning col-lg-5\">Next</button>
     </div>

        </section>

  <section class=\"py-4 text-center text-lg-left\">

      <!--Section heading-->
      <h1 class=\"h1 font-bold text-center mb-5 pt-4\">Recent posts</h1>
      <!--Section description-->
      <p class=\"text-center mb-5 pb-3\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <!--Grid row-->
      <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 pb-3\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg\" alt=\"Sample image for first version of blog listing\"
              class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7\">
          <!--Excerpt-->
          <a href=\"\" class=\"green-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-cutlery\"></i> Food</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
          possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 19/08/2018</p>
          <a class=\"btn btn-success btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class=\"mb-5 mt-5 pb-3\">

      <!--Grid row-->
      <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7 pb-3\">
          <!--Excerpt-->
          <a href=\"\" class=\"pink-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-image\"></i> Lifestyle</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
          corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et dolorum fuga.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 14/08/2018</p>
          <a class=\"btn btn-pink btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 mb-5\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg\" alt=\"Second image in the first version of blog listing\"
              class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class=\"mb-5 mt-4 pb-3\">

      <!--Grid row-->
      <div class=\"row pb-5\">

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 pb-3\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img (28).jpg\" alt=\"Thrid image in the blog listing.\" class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7\">
          <!--Excerpt-->
          <a href=\"\" class=\"indigo-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-suitcase\"></i> Travels</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
          eos qui ratione voluptatem sequi nesciunt. Neque porro qui dolorem ipsum quia sit amet, consectetur.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 11/08/2018</p>
          <a class=\"btn btn-indigo btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->
        </div>
      </div>
      <!--Grid row-->

  </section>
  <!--Section: Blog v.1-->


  </main>
      ";
        
<<<<<<< HEAD
        $__internal_5ea36b5d450f2a522d119604075808ec132434f6d3d3cd4c544f3d4366a1cde5->leave($__internal_5ea36b5d450f2a522d119604075808ec132434f6d3d3cd4c544f3d4366a1cde5_prof);

        
        $__internal_61b9f87fc916cff216f1f33bc20d0d6a0e0249df5f6aa3a041128ba3d3475eaf->leave($__internal_61b9f87fc916cff216f1f33bc20d0d6a0e0249df5f6aa3a041128ba3d3475eaf_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_777490b7e73c5513bf9705e7a9460d1645b2699f484d610ba18505070737a886->leave($__internal_777490b7e73c5513bf9705e7a9460d1645b2699f484d610ba18505070737a886_prof);

        
        $__internal_2cfa3e16acb0c5952773f765a7bb3c6d1ffc9b2f493103e465cf8e5162639cd7->leave($__internal_2cfa3e16acb0c5952773f765a7bb3c6d1ffc9b2f493103e465cf8e5162639cd7_prof);
=======
        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1->leave($__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1_prof);

        
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be->leave($__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be_prof);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

    }

    // line 345
    public function block_footer($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_913040205e06197c04b5c2c83d29069a2b4d8a4bb2a3c8e10700631455254c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913040205e06197c04b5c2c83d29069a2b4d8a4bb2a3c8e10700631455254c9e->enter($__internal_913040205e06197c04b5c2c83d29069a2b4d8a4bb2a3c8e10700631455254c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8ee6a30d0f1ebd1dc4b3ae2c054dc01b5c4c04e57a0f7c76642d7decf4f1d57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee6a30d0f1ebd1dc4b3ae2c054dc01b5c4c04e57a0f7c76642d7decf4f1d57e->enter($__internal_8ee6a30d0f1ebd1dc4b3ae2c054dc01b5c4c04e57a0f7c76642d7decf4f1d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_25caeb4be31d8eed9789a659b9bd7a9a258648d00af5d469168e484b4a3e0851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25caeb4be31d8eed9789a659b9bd7a9a258648d00af5d469168e484b4a3e0851->enter($__internal_25caeb4be31d8eed9789a659b9bd7a9a258648d00af5d469168e484b4a3e0851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1bdc1632eb9be27d63c320bfbb877ab30fb4029f6c368ef81af8be49605939e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdc1632eb9be27d63c320bfbb877ab30fb4029f6c368ef81af8be49605939e4->enter($__internal_1bdc1632eb9be27d63c320bfbb877ab30fb4029f6c368ef81af8be49605939e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));
=======
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a->enter($__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e->enter($__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

        // line 346
        echo "       <footer class=\"page-footer stylish-color-dark\">

           <!--Footer Links-->
           <div class=\"container\">

               <!-- Footer links -->
               <div class=\"row text-center text-md-left mt-3 pb-3\">

                    <!--First column-->
                   <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mt-3\">
                      <!-- <h6 class=\"title mb-4 font-bold\">Useful links</h6>-->

                   </div>
                   <!--/.st column-->
                   <hr class=\"w-75 clearfix d-md-none\">
                   <!--Second column-->
                   <div class=\"col-md-3 col-lg-3 col-xl-3 mx-auto mt-3\">
                     <!--  <h6 class=\"title mb-4 font-bold\">Petit titre sympa</h6> -->
                       <p><a href=\"!\">Mentions légales</a></p>
                       <p><a href=\"!\">CGV</a></p>
                       <p><a href=\"!\">CGU</a></p>
                        <!--Social buttons-->
                       <div class=\"social-section text-center text-md-left\">
                           <ul>
                               <li><a class=\"btn-floating btn-sm rgba-white-slight mr-xl-4\"><i class=\"fa fa-facebook\"></i></a></li>
                               <li><a class=\"btn-floating btn-sm rgba-white-slight mr-xl-4\"><i class=\"fa fa-twitter\"></i></a></li>

                           </ul>
                       </div>
                       <!--/.Social buttons-->

                   </div>
                   <!--/.nd column-->

                   <hr class=\"w-75 clearfix d-md-none\">

                   <!--Third column-->
                   <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mt-3\">
                       <h6 class=\"title mb-4 font-bold\">Contact</h6>
                       <p><i class=\"fa fa-home mr-3\"></i> Notre adresse Adresse</p>
                       <p><i class=\"fa fa-envelope mr-3\"></i> Notre mail</p>
                       <p><i class=\"fa fa-phone mr-3\"></i> Notre telephone</p>
                   </div>
                   <!--/.rd column-->

               </div>
      ";
        
<<<<<<< HEAD
        $__internal_8ee6a30d0f1ebd1dc4b3ae2c054dc01b5c4c04e57a0f7c76642d7decf4f1d57e->leave($__internal_8ee6a30d0f1ebd1dc4b3ae2c054dc01b5c4c04e57a0f7c76642d7decf4f1d57e_prof);

        
        $__internal_913040205e06197c04b5c2c83d29069a2b4d8a4bb2a3c8e10700631455254c9e->leave($__internal_913040205e06197c04b5c2c83d29069a2b4d8a4bb2a3c8e10700631455254c9e_prof);
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        $__internal_1bdc1632eb9be27d63c320bfbb877ab30fb4029f6c368ef81af8be49605939e4->leave($__internal_1bdc1632eb9be27d63c320bfbb877ab30fb4029f6c368ef81af8be49605939e4_prof);

        
        $__internal_25caeb4be31d8eed9789a659b9bd7a9a258648d00af5d469168e484b4a3e0851->leave($__internal_25caeb4be31d8eed9789a659b9bd7a9a258648d00af5d469168e484b4a3e0851_prof);
=======
        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e->leave($__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e_prof);

        
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a->leave($__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a_prof);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992

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
<<<<<<< HEAD
        return array (  476 => 346,  467 => 345,  280 => 167,  271 => 166,  122 => 23,  113 => 22,  95 => 19,  79 => 405,  76 => 345,  74 => 166,  69 => 163,  67 => 22,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  42 => 12,  29 => 1,);
=======
<<<<<<< HEAD:var/cache/dev/twig/56/563f1164d28ea1951c8146ea5116ec1339fd0163c207b3b2f56c49ad8e0b29f5.php
        return array (  476 => 346,  467 => 345,  280 => 167,  271 => 166,  122 => 23,  113 => 22,  95 => 19,  79 => 393,  76 => 345,  74 => 166,  69 => 163,  67 => 22,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  42 => 12,  29 => 1,);
=======
        return array (  518 => 364,  509 => 363,  322 => 185,  313 => 184,  164 => 41,  155 => 40,  137 => 37,  121 => 423,  118 => 363,  116 => 184,  111 => 181,  109 => 40,  103 => 37,  98 => 35,  94 => 34,  90 => 33,  84 => 30,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  62 => 23,  57 => 21,  46 => 13,  41 => 11,  29 => 1,);
>>>>>>> ff51f62b898e62301f688c953c7787776adb97ac:var/cache/dev/twig/e2/e2d1122272abe4479bfcf979be98371cda420c5b01efe694456db6b8a35b5a4f.php
>>>>>>> f31a0acf26722695a2dc127cfe8951dfafb58992
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"fr\">

<head>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--<meta name=\"description\" content=\"\">-->
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Rebolle\">
    <!--<link rel=\"icon\" href=\"\">-->

  <!-- Material Design Bootstrap -->
  <link href=\"{{ asset('css/mdb.min.css') }}\" rel=\"stylesheet\">
  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
  <!-- Bootstrap core CSS -->
  <link href=\"{{ asset('css/compiled.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

  <title>{% block title %}AlloTheatre{% endblock %}</title>
</head>

{% block header %}


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
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-chevron-right\"></i> Cirque/Clown<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Cirque</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Clown</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-hand-pointer-o\"></i> Conte/poésie/lecture<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Conte</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Poésie</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Lecture</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-eye\"></i> Danse/Danse-Théâtre<i class=\"fa fa-angle-down rotate-icon\"></i></a>
              <div class=\"collapsible-body\">
                <ul>
                  <li><a href=\"#\" class=\"waves-effect\">Danse</a>
                  </li>
                  <li><a href=\"#\" class=\"waves-effect\">Danse-Théâtre</a>
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
        <p>ALLOTHEATRE</p>
      </div>
      <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
        <li class=\"nav-item\">
          <a href=\"contact.php\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
        </li>
        <li class=\"nav-item\">
          <a href=\"inscription.php\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Inscription</span></a>

        </li>
        <li> | </li>
        <li class=\"nav-item\">
          <a href=\"connexion.php\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Mon Compte</span>

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

 {% endblock %}

      <!--Main layout-->

      {% block body %}

      <main>
        <section>

      <div id=\"carousel\">

        <div class=\"hideLeft\">
         <img src=\"images/images_spectacle/journal_dune_apparition.jpg\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"images/images_spectacle/le_chant_des_baleines.jpg\">
       </div>

       <div class=\"prev\">
         <img src=\"images/images_spectacle/le_horla.jpg\">
       </div>

       <div class=\"selected\">
         <img src=\"images/images_spectacle/le_malade_imaginaire.jpg\">
       </div>

       <div class=\"next\">
         <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"
  images/images_spectacle/lotre_belle.jpg\">
       </div>

       <div class=\"hideRight\">
         <img src=\"images/images_spectacle/ma_grammaire_fait_du_velo.jpg\">
       </div>
       </div>


     <div class=\"buttons col-lg-2 col-lg-offset-5\">
       <button id=\"prev\" class=\"btn btn-warning col-lg-5\">Prev</button>
       <button id=\"next\" class=\"btn btn-warning col-lg-5\">Next</button>
     </div>

        </section>

  <section class=\"py-4 text-center text-lg-left\">

      <!--Section heading-->
      <h1 class=\"h1 font-bold text-center mb-5 pt-4\">Recent posts</h1>
      <!--Section description-->
      <p class=\"text-center mb-5 pb-3\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <!--Grid row-->
      <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 pb-3\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg\" alt=\"Sample image for first version of blog listing\"
              class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7\">
          <!--Excerpt-->
          <a href=\"\" class=\"green-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-cutlery\"></i> Food</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
          possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 19/08/2018</p>
          <a class=\"btn btn-success btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class=\"mb-5 mt-5 pb-3\">

      <!--Grid row-->
      <div class=\"row\">

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7 pb-3\">
          <!--Excerpt-->
          <a href=\"\" class=\"pink-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-image\"></i> Lifestyle</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
          corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et dolorum fuga.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 14/08/2018</p>
          <a class=\"btn btn-pink btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 mb-5\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg\" alt=\"Second image in the first version of blog listing\"
              class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr class=\"mb-5 mt-4 pb-3\">

      <!--Grid row-->
      <div class=\"row pb-5\">

      <!--Grid column-->
      <div class=\"col-lg-5 col-xl-5 pb-3\">
          <!--Featured image-->
          <div class=\"view overlay hm-white-slight rounded z-depth-2\">
          <img src=\"https://mdbootstrap.com/img/Photos/Others/img (28).jpg\" alt=\"Thrid image in the blog listing.\" class=\"img-fluid\">
          <a>
              <div class=\"mask\"></div>
          </a>
          </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-7 col-xl-7\">
          <!--Excerpt-->
          <a href=\"\" class=\"indigo-text\">
          <h6 class=\"font-bold pb-1\">
              <i class=\"fa fa-suitcase\"></i> Travels</h6>
          </a>
          <h3 class=\"mb-4 font-bold dark-grey-text\">
          <strong>This is title of the news</strong>
          </h3>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
          eos qui ratione voluptatem sequi nesciunt. Neque porro qui dolorem ipsum quia sit amet, consectetur.</p>
          <p>by
          <a>
              <strong>Carine Fox</strong>
          </a>, 11/08/2018</p>
          <a class=\"btn btn-indigo btn-md mb-3\">Read more</a>
      </div>
      <!--Grid column-->
        </div>
      </div>
      <!--Grid row-->

  </section>
  <!--Section: Blog v.1-->


  </main>
      {% endblock %}
       {% block footer %}
       <footer class=\"page-footer stylish-color-dark\">

           <!--Footer Links-->
           <div class=\"container\">

               <!-- Footer links -->
               <div class=\"row text-center text-md-left mt-3 pb-3\">

                    <!--First column-->
                   <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mt-3\">
                      <!-- <h6 class=\"title mb-4 font-bold\">Useful links</h6>-->

                   </div>
                   <!--/.st column-->
                   <hr class=\"w-75 clearfix d-md-none\">
                   <!--Second column-->
                   <div class=\"col-md-3 col-lg-3 col-xl-3 mx-auto mt-3\">
                     <!--  <h6 class=\"title mb-4 font-bold\">Petit titre sympa</h6> -->
                       <p><a href=\"!\">Mentions légales</a></p>
                       <p><a href=\"!\">CGV</a></p>
                       <p><a href=\"!\">CGU</a></p>
                        <!--Social buttons-->
                       <div class=\"social-section text-center text-md-left\">
                           <ul>
                               <li><a class=\"btn-floating btn-sm rgba-white-slight mr-xl-4\"><i class=\"fa fa-facebook\"></i></a></li>
                               <li><a class=\"btn-floating btn-sm rgba-white-slight mr-xl-4\"><i class=\"fa fa-twitter\"></i></a></li>

                           </ul>
                       </div>
                       <!--/.Social buttons-->

                   </div>
                   <!--/.nd column-->

                   <hr class=\"w-75 clearfix d-md-none\">

                   <!--Third column-->
                   <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mt-3\">
                       <h6 class=\"title mb-4 font-bold\">Contact</h6>
                       <p><i class=\"fa fa-home mr-3\"></i> Notre adresse Adresse</p>
                       <p><i class=\"fa fa-envelope mr-3\"></i> Notre mail</p>
                       <p><i class=\"fa fa-phone mr-3\"></i> Notre telephone</p>
                   </div>
                   <!--/.rd column-->

               </div>
      {% endblock %}


      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
", "base.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/base.html.twig");
    }
}
