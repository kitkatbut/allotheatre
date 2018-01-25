<?php

/* base.html.twig */
class __TwigTemplate_f58c19a4c939fe00a77c8ff814287c2dd031cbdc714fb48dcefd916c076a5891 extends Twig_Template
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
        $__internal_05389b5d043bfff8916acc0c5ebc565d5453d5c82772acce058de84bb5e6a1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05389b5d043bfff8916acc0c5ebc565d5453d5c82772acce058de84bb5e6a1c7->enter($__internal_05389b5d043bfff8916acc0c5ebc565d5453d5c82772acce058de84bb5e6a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b2ee6099f4987afbc5c01d15559d0fb9b93b022b99adb749615067ee5e3da645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ee6099f4987afbc5c01d15559d0fb9b93b022b99adb749615067ee5e3da645->enter($__internal_b2ee6099f4987afbc5c01d15559d0fb9b93b022b99adb749615067ee5e3da645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 339
        echo "       ";
        $this->displayBlock('footer', $context, $blocks);
        // line 387
        echo "

      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
";
        
        $__internal_05389b5d043bfff8916acc0c5ebc565d5453d5c82772acce058de84bb5e6a1c7->leave($__internal_05389b5d043bfff8916acc0c5ebc565d5453d5c82772acce058de84bb5e6a1c7_prof);

        
        $__internal_b2ee6099f4987afbc5c01d15559d0fb9b93b022b99adb749615067ee5e3da645->leave($__internal_b2ee6099f4987afbc5c01d15559d0fb9b93b022b99adb749615067ee5e3da645_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba01a6c752c3e91dcc502aa6569e0b5b59f7a3c0c4ef6f3f6b56fc98fc30390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba01a6c752c3e91dcc502aa6569e0b5b59f7a3c0c4ef6f3f6b56fc98fc30390->enter($__internal_3ba01a6c752c3e91dcc502aa6569e0b5b59f7a3c0c4ef6f3f6b56fc98fc30390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4c1d47951b3e1a0ea36546c598e6e2d78d00c0ff272088c37dec46757110890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1d47951b3e1a0ea36546c598e6e2d78d00c0ff272088c37dec46757110890->enter($__internal_f4c1d47951b3e1a0ea36546c598e6e2d78d00c0ff272088c37dec46757110890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_f4c1d47951b3e1a0ea36546c598e6e2d78d00c0ff272088c37dec46757110890->leave($__internal_f4c1d47951b3e1a0ea36546c598e6e2d78d00c0ff272088c37dec46757110890_prof);

        
        $__internal_3ba01a6c752c3e91dcc502aa6569e0b5b59f7a3c0c4ef6f3f6b56fc98fc30390->leave($__internal_3ba01a6c752c3e91dcc502aa6569e0b5b59f7a3c0c4ef6f3f6b56fc98fc30390_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_ddfa100b4af46e6448bede6b4d12b16709d3b3734e390c76eb4d1d942e7b2b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfa100b4af46e6448bede6b4d12b16709d3b3734e390c76eb4d1d942e7b2b3d->enter($__internal_ddfa100b4af46e6448bede6b4d12b16709d3b3734e390c76eb4d1d942e7b2b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_090eaa5a4c7e3d9341f5aee56830f1b2cc91d76b9eccd65c54e60c3c6c47e6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090eaa5a4c7e3d9341f5aee56830f1b2cc91d76b9eccd65c54e60c3c6c47e6b3->enter($__internal_090eaa5a4c7e3d9341f5aee56830f1b2cc91d76b9eccd65c54e60c3c6c47e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
          <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>
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
        
        $__internal_090eaa5a4c7e3d9341f5aee56830f1b2cc91d76b9eccd65c54e60c3c6c47e6b3->leave($__internal_090eaa5a4c7e3d9341f5aee56830f1b2cc91d76b9eccd65c54e60c3c6c47e6b3_prof);

        
        $__internal_ddfa100b4af46e6448bede6b4d12b16709d3b3734e390c76eb4d1d942e7b2b3d->leave($__internal_ddfa100b4af46e6448bede6b4d12b16709d3b3734e390c76eb4d1d942e7b2b3d_prof);

    }

    // line 166
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab1fb696a0b891f7445969df9605b697c17cdd0474048072d749f7bd71cd490d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1fb696a0b891f7445969df9605b697c17cdd0474048072d749f7bd71cd490d->enter($__internal_ab1fb696a0b891f7445969df9605b697c17cdd0474048072d749f7bd71cd490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85ced5fc0e89fddde75bea39cda6efa9c369b49c7d548417b15e0bedf448ed9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ced5fc0e89fddde75bea39cda6efa9c369b49c7d548417b15e0bedf448ed9c->enter($__internal_85ced5fc0e89fddde75bea39cda6efa9c369b49c7d548417b15e0bedf448ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 167
        echo "
      <main>
        <section>

      <div id=\"carousel\">

        <div class=\"hideLeft\">
         <img src=\"images/images_spectacle/journal_dune_apparition.jpg\" alt=\"journal d'une apparition\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"images/images_spectacle/le_chant_des_baleines.jpg\" alt=\"le chant des baleines\">
       </div>

       <div class=\"prev\">
         <img src=\"images/images_spectacle/le_horla.jpg\" alt=\"le horla\">
       </div>

       <div class=\"selected\">
         <img src=\"images/images_spectacle/le_malade_imaginaire.jpg\" alt=\"le malade imaginaire\">
       </div>

       <div class=\"next\">
         <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\" alt=\"le petit chaperon rouge\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"images/images_spectacle/lotre_belle.jpg\" alt=\"lotre belle\">
       </div>

       <div class=\"hideRight\">
         <img src=\"images/images_spectacle/ma_grammaire_fait_du_velo.jpg\" alt=\"ma grammaire fait du vélo\">
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
          <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\" alt=\"le petit chaperon rouge\"
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
          <img src=\"images/images_spectacle/v_pour_vegan.jpg\" alt=\"v pour vegan\"
              class=\"img-fluid\">

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
          <img src=\"images/images_spectacle/welcome.jpg\" alt=\"welcome\" class=\"img-fluid\">

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
        
        $__internal_85ced5fc0e89fddde75bea39cda6efa9c369b49c7d548417b15e0bedf448ed9c->leave($__internal_85ced5fc0e89fddde75bea39cda6efa9c369b49c7d548417b15e0bedf448ed9c_prof);

        
        $__internal_ab1fb696a0b891f7445969df9605b697c17cdd0474048072d749f7bd71cd490d->leave($__internal_ab1fb696a0b891f7445969df9605b697c17cdd0474048072d749f7bd71cd490d_prof);

    }

    // line 339
    public function block_footer($context, array $blocks = array())
    {
        $__internal_20bd98b13dc180de670f18866b72242433460949a4ec4be971062b3d5d08a951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bd98b13dc180de670f18866b72242433460949a4ec4be971062b3d5d08a951->enter($__internal_20bd98b13dc180de670f18866b72242433460949a4ec4be971062b3d5d08a951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4f226a640d375515df1a2bfabbe2b19c3fef41f7687b1d9bc6f491b0c2cef30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f226a640d375515df1a2bfabbe2b19c3fef41f7687b1d9bc6f491b0c2cef30c->enter($__internal_4f226a640d375515df1a2bfabbe2b19c3fef41f7687b1d9bc6f491b0c2cef30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 340
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
        
        $__internal_4f226a640d375515df1a2bfabbe2b19c3fef41f7687b1d9bc6f491b0c2cef30c->leave($__internal_4f226a640d375515df1a2bfabbe2b19c3fef41f7687b1d9bc6f491b0c2cef30c_prof);

        
        $__internal_20bd98b13dc180de670f18866b72242433460949a4ec4be971062b3d5d08a951->leave($__internal_20bd98b13dc180de670f18866b72242433460949a4ec4be971062b3d5d08a951_prof);

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
        return array (  473 => 340,  464 => 339,  283 => 167,  274 => 166,  245 => 144,  122 => 23,  113 => 22,  95 => 19,  79 => 387,  76 => 339,  74 => 166,  69 => 163,  67 => 22,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  42 => 12,  29 => 1,);
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
          <a href=\"{{ path('connexion') }}\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>
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
         <img src=\"images/images_spectacle/journal_dune_apparition.jpg\" alt=\"journal d'une apparition\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"images/images_spectacle/le_chant_des_baleines.jpg\" alt=\"le chant des baleines\">
       </div>

       <div class=\"prev\">
         <img src=\"images/images_spectacle/le_horla.jpg\" alt=\"le horla\">
       </div>

       <div class=\"selected\">
         <img src=\"images/images_spectacle/le_malade_imaginaire.jpg\" alt=\"le malade imaginaire\">
       </div>

       <div class=\"next\">
         <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\" alt=\"le petit chaperon rouge\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"images/images_spectacle/lotre_belle.jpg\" alt=\"lotre belle\">
       </div>

       <div class=\"hideRight\">
         <img src=\"images/images_spectacle/ma_grammaire_fait_du_velo.jpg\" alt=\"ma grammaire fait du vélo\">
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
          <img src=\"images/images_spectacle/le_petit_chaperon_rouge.jpg\" alt=\"le petit chaperon rouge\"
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
          <img src=\"images/images_spectacle/v_pour_vegan.jpg\" alt=\"v pour vegan\"
              class=\"img-fluid\">

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
          <img src=\"images/images_spectacle/welcome.jpg\" alt=\"welcome\" class=\"img-fluid\">

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
", "base.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\base.html.twig");
    }
}
