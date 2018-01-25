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
        $__internal_0a26306dc57f62e56e42f16896c4a9733f85df728e0e2f0448e314a75b5cd1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a26306dc57f62e56e42f16896c4a9733f85df728e0e2f0448e314a75b5cd1fb->enter($__internal_0a26306dc57f62e56e42f16896c4a9733f85df728e0e2f0448e314a75b5cd1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ed1e13f90a786c53aacfbb28d3c07f0bfc4bd2eebd90b88983e72b44f5e27e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1e13f90a786c53aacfbb28d3c07f0bfc4bd2eebd90b88983e72b44f5e27e83->enter($__internal_ed1e13f90a786c53aacfbb28d3c07f0bfc4bd2eebd90b88983e72b44f5e27e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 405
        echo "

      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
";
        
        $__internal_0a26306dc57f62e56e42f16896c4a9733f85df728e0e2f0448e314a75b5cd1fb->leave($__internal_0a26306dc57f62e56e42f16896c4a9733f85df728e0e2f0448e314a75b5cd1fb_prof);

        
        $__internal_ed1e13f90a786c53aacfbb28d3c07f0bfc4bd2eebd90b88983e72b44f5e27e83->leave($__internal_ed1e13f90a786c53aacfbb28d3c07f0bfc4bd2eebd90b88983e72b44f5e27e83_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfa3847f237aceb05e67cf2d04dafcbdad2cd3dffe6de99ad934336298172688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa3847f237aceb05e67cf2d04dafcbdad2cd3dffe6de99ad934336298172688->enter($__internal_cfa3847f237aceb05e67cf2d04dafcbdad2cd3dffe6de99ad934336298172688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_073c82bff2bee41b9e566b38f1f398444c4c94945d0f8209e6d44169f4cb0d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073c82bff2bee41b9e566b38f1f398444c4c94945d0f8209e6d44169f4cb0d04->enter($__internal_073c82bff2bee41b9e566b38f1f398444c4c94945d0f8209e6d44169f4cb0d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_073c82bff2bee41b9e566b38f1f398444c4c94945d0f8209e6d44169f4cb0d04->leave($__internal_073c82bff2bee41b9e566b38f1f398444c4c94945d0f8209e6d44169f4cb0d04_prof);

        
        $__internal_cfa3847f237aceb05e67cf2d04dafcbdad2cd3dffe6de99ad934336298172688->leave($__internal_cfa3847f237aceb05e67cf2d04dafcbdad2cd3dffe6de99ad934336298172688_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_e04465b2387d4f440364c0dab9e53869640d21fce30f3eb23fee6ff29c1316e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04465b2387d4f440364c0dab9e53869640d21fce30f3eb23fee6ff29c1316e6->enter($__internal_e04465b2387d4f440364c0dab9e53869640d21fce30f3eb23fee6ff29c1316e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ad82ce2d3ae985c95805b20fbcb5d3ddf166f4901121d0c8d81cf2e6eec56ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad82ce2d3ae985c95805b20fbcb5d3ddf166f4901121d0c8d81cf2e6eec56ea0->enter($__internal_ad82ce2d3ae985c95805b20fbcb5d3ddf166f4901121d0c8d81cf2e6eec56ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ad82ce2d3ae985c95805b20fbcb5d3ddf166f4901121d0c8d81cf2e6eec56ea0->leave($__internal_ad82ce2d3ae985c95805b20fbcb5d3ddf166f4901121d0c8d81cf2e6eec56ea0_prof);

        
        $__internal_e04465b2387d4f440364c0dab9e53869640d21fce30f3eb23fee6ff29c1316e6->leave($__internal_e04465b2387d4f440364c0dab9e53869640d21fce30f3eb23fee6ff29c1316e6_prof);

    }

    // line 166
    public function block_body($context, array $blocks = array())
    {
        $__internal_953965aba1d918dbd9a9944a48781ed1b6afc971810b127e03760efa21c62765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953965aba1d918dbd9a9944a48781ed1b6afc971810b127e03760efa21c62765->enter($__internal_953965aba1d918dbd9a9944a48781ed1b6afc971810b127e03760efa21c62765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80cb4c3654b55c3c694509faf2213882129a097fb3f3b615913e4b765f03d213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cb4c3654b55c3c694509faf2213882129a097fb3f3b615913e4b765f03d213->enter($__internal_80cb4c3654b55c3c694509faf2213882129a097fb3f3b615913e4b765f03d213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 167
        echo "
      <main>
        <section>

      <div id=\"carousel\">

        <div class=\"hideLeft\">
         <img src=\"https://s16.postimg.org/vklrwoxtx/cover9.jpg\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"https://s16.postimg.org/cgsggckzp/cover8.jpg\">
       </div>

       <div class=\"prev\">
         <img src=\"https://s16.postimg.org/emmrauog5/cover7.jpg\">
       </div>

       <div class=\"selected\">
         <img src=\"https://s16.postimg.org/9drqcz611/cover1.jpg\">
       </div>

       <div class=\"next\">
         <img src=\"https://s16.postimg.org/pnhwfvgp1/cover6.jpg\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"
  https://s16.postimg.org/edp6kxbnp/cover4.jpg\">
       </div>

       <div class=\"hideRight\">
         <img src=\"https://s16.postimg.org/fij8qay4l/cover3.jpg\">
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
        
        $__internal_80cb4c3654b55c3c694509faf2213882129a097fb3f3b615913e4b765f03d213->leave($__internal_80cb4c3654b55c3c694509faf2213882129a097fb3f3b615913e4b765f03d213_prof);

        
        $__internal_953965aba1d918dbd9a9944a48781ed1b6afc971810b127e03760efa21c62765->leave($__internal_953965aba1d918dbd9a9944a48781ed1b6afc971810b127e03760efa21c62765_prof);

    }

    // line 345
    public function block_footer($context, array $blocks = array())
    {
        $__internal_028f6085d5f8128f5b4f222c18f3427b0b922d21fa3484b110e8f6838daa8c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028f6085d5f8128f5b4f222c18f3427b0b922d21fa3484b110e8f6838daa8c3a->enter($__internal_028f6085d5f8128f5b4f222c18f3427b0b922d21fa3484b110e8f6838daa8c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f42a498197e4b71f2dbc7c8af75919e8c5cd5a511ea63b21cc7e00d2e902de59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42a498197e4b71f2dbc7c8af75919e8c5cd5a511ea63b21cc7e00d2e902de59->enter($__internal_f42a498197e4b71f2dbc7c8af75919e8c5cd5a511ea63b21cc7e00d2e902de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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

                   <!--Second column-->
                  <!-- <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-3\">
                       <h6 class=\"title mb-4 font-bold\">Products</h6>
                       <p><a href=\"#!\">MDBootstrap</a></p>

                   </div>-->
                   <!--/.Second column-->




é
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
        
        $__internal_f42a498197e4b71f2dbc7c8af75919e8c5cd5a511ea63b21cc7e00d2e902de59->leave($__internal_f42a498197e4b71f2dbc7c8af75919e8c5cd5a511ea63b21cc7e00d2e902de59_prof);

        
        $__internal_028f6085d5f8128f5b4f222c18f3427b0b922d21fa3484b110e8f6838daa8c3a->leave($__internal_028f6085d5f8128f5b4f222c18f3427b0b922d21fa3484b110e8f6838daa8c3a_prof);

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
        return array (  476 => 346,  467 => 345,  280 => 167,  271 => 166,  122 => 23,  113 => 22,  95 => 19,  79 => 405,  76 => 345,  74 => 166,  69 => 163,  67 => 22,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  42 => 12,  29 => 1,);
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
         <img src=\"https://s16.postimg.org/vklrwoxtx/cover9.jpg\">
       </div>

       <div class=\"prevLeftSecond\">
         <img src=\"https://s16.postimg.org/cgsggckzp/cover8.jpg\">
       </div>

       <div class=\"prev\">
         <img src=\"https://s16.postimg.org/emmrauog5/cover7.jpg\">
       </div>

       <div class=\"selected\">
         <img src=\"https://s16.postimg.org/9drqcz611/cover1.jpg\">
       </div>

       <div class=\"next\">
         <img src=\"https://s16.postimg.org/pnhwfvgp1/cover6.jpg\">
       </div>

       <div class=\"nextRightSecond\">
         <img src=\"
  https://s16.postimg.org/edp6kxbnp/cover4.jpg\">
       </div>

       <div class=\"hideRight\">
         <img src=\"https://s16.postimg.org/fij8qay4l/cover3.jpg\">
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

                   <!--Second column-->
                  <!-- <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-3\">
                       <h6 class=\"title mb-4 font-bold\">Products</h6>
                       <p><a href=\"#!\">MDBootstrap</a></p>

                   </div>-->
                   <!--/.Second column-->




é
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
