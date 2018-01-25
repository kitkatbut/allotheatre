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
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2->enter($__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080->enter($__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

<head>
<<<<<<< HEAD
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Reboulle\">
    <link rel=\"icon\" href=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
    <!--  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->

    <!--   <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
=======
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Pauline Louis\">
  <link rel=\"icon\" href=\"\">
  <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
  <!--  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->

  <!--   <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
>>>>>>> 4eaf9a74083c451920d16235b8cc69d94fed301e
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/header.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
  <!-- <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
  <!--    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
  <!--  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->>
  <!-- Material Design Bootstrap -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <title>";
        // line 37
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 181
        echo "
      <!--Main layout-->

      ";
        // line 184
        $this->displayBlock('body', $context, $blocks);
        // line 363
        echo "       ";
        $this->displayBlock('footer', $context, $blocks);
        // line 423
        echo "

      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
";
        
        $__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2->leave($__internal_b6922f890c8999f17392196677e506783512c1b2b37e8ac5bdd3bb75ac6ab8a2_prof);

        
        $__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080->leave($__internal_9ceaed20f3be8ba0509593238e06a86073df17cc8c2661590fddc00caa133080_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c->enter($__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7b5579f8a62795ad968d15abbaf66c25132793e55cd94855bc3e0ad6af0b939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b5579f8a62795ad968d15abbaf66c25132793e55cd94855bc3e0ad6af0b939->enter($__internal_b7b5579f8a62795ad968d15abbaf66c25132793e55cd94855bc3e0ad6af0b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_b7b5579f8a62795ad968d15abbaf66c25132793e55cd94855bc3e0ad6af0b939->leave($__internal_b7b5579f8a62795ad968d15abbaf66c25132793e55cd94855bc3e0ad6af0b939_prof);

        
        $__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c->leave($__internal_8eca40799d5895f884f78f457db01daee4155e4fe214f9f7003cbff231117b5c_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9->enter($__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a->enter($__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 41
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
        
        $__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a->leave($__internal_d470036b0615c67b9df0b2f5211e09df050f628e8ceb10574d1c2bdfaf89866a_prof);

        
        $__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9->leave($__internal_3a02d861f3dffde68f5c1e32755334e76cb486391621c6c11f25f04993c8dbf9_prof);

    }

    // line 184
    public function block_body($context, array $blocks = array())
    {
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be->enter($__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1->enter($__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 185
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
        
        $__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1->leave($__internal_b67d3a5e24cbd8aa109aed93ab5eca49a0a6c0eaa672e3fc8557bcb70becc4a1_prof);

        
        $__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be->leave($__internal_5600e58d82e4a4e1c6a065cd07ebb6d77da6f4174339aa74c3c52d72f3dc30be_prof);

    }

    // line 363
    public function block_footer($context, array $blocks = array())
    {
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a->enter($__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e->enter($__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 364
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
        
        $__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e->leave($__internal_1697a5cb443646fc1d455496b1497a904198c5f503a011a809d78024b8fcef7e_prof);

        
        $__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a->leave($__internal_04b2bc0d45db8b5ba2b6d570115e15971a83f6c31a074ef66d89fc6386cb1e1a_prof);

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
        return array (  518 => 364,  509 => 363,  322 => 185,  313 => 184,  164 => 41,  155 => 40,  137 => 37,  121 => 423,  118 => 363,  116 => 184,  111 => 181,  109 => 40,  103 => 37,  98 => 35,  94 => 34,  90 => 33,  84 => 30,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  62 => 23,  57 => 21,  46 => 13,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"fr\">

<head>
<<<<<<< HEAD
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Reboulle\">
    <link rel=\"icon\" href=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
    <!--  <link href=\"{{ asset('css/base.css') }}\" rel=\"stylesheet\"> -->

    <!--   <link href=\"{{ asset('css/layout/footer.css') }}\" rel=\"stylesheet\">
=======
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Pauline Louis\">
  <link rel=\"icon\" href=\"\">
  <link href=\"https://fonts.googleapis.com/css?family=Patrick+Hand|Ubuntu\" rel=\"stylesheet\">
  <!--  <link href=\"{{ asset('css/base.css') }}\" rel=\"stylesheet\"> -->

  <!--   <link href=\"{{ asset('css/layout/footer.css') }}\" rel=\"stylesheet\">
>>>>>>> 4eaf9a74083c451920d16235b8cc69d94fed301e
        <link href=\"{{ asset('css/layout/header.css') }}\" rel=\"stylesheet\"> -->
  <!-- <link href=\"{{ asset('css/layout/main.css') }}\" rel=\"stylesheet\"> -->
  <!--    <link href=\"{{ asset('css/layout/nav.css') }}\" rel=\"stylesheet\"> -->
  <!--  <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">-->>
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
", "base.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/base.html.twig");
    }
}
