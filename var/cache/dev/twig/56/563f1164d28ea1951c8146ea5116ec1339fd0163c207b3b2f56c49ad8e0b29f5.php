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
        $__internal_bd69700e3714b4de2918255b03414f796df11c0048522f059deb2773b8038e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd69700e3714b4de2918255b03414f796df11c0048522f059deb2773b8038e3c->enter($__internal_bd69700e3714b4de2918255b03414f796df11c0048522f059deb2773b8038e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_93cc512425f3bc6d525257e95b4dcad83df9813c0893123311cbd5708a3f2361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cc512425f3bc6d525257e95b4dcad83df9813c0893123311cbd5708a3f2361->enter($__internal_93cc512425f3bc6d525257e95b4dcad83df9813c0893123311cbd5708a3f2361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

<head>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--<meta name=\"description\" content=\"\">-->
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Rebolle\">

    <link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\" />

  <!-- Material Design Bootstrap -->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
      <!--Main layout-->

      ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 272
        echo "       ";
        $this->displayBlock('footer', $context, $blocks);
        // line 322
        echo "

      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
";
        
        $__internal_bd69700e3714b4de2918255b03414f796df11c0048522f059deb2773b8038e3c->leave($__internal_bd69700e3714b4de2918255b03414f796df11c0048522f059deb2773b8038e3c_prof);

        
        $__internal_93cc512425f3bc6d525257e95b4dcad83df9813c0893123311cbd5708a3f2361->leave($__internal_93cc512425f3bc6d525257e95b4dcad83df9813c0893123311cbd5708a3f2361_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_13561588885716c45cd588a086df96ae7181cc985ddb48ed72e16589d39af928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13561588885716c45cd588a086df96ae7181cc985ddb48ed72e16589d39af928->enter($__internal_13561588885716c45cd588a086df96ae7181cc985ddb48ed72e16589d39af928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a099d131ccdd46d18c58db21297671540af0793b9913fa4e37ff79c7f25bba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a099d131ccdd46d18c58db21297671540af0793b9913fa4e37ff79c7f25bba0->enter($__internal_9a099d131ccdd46d18c58db21297671540af0793b9913fa4e37ff79c7f25bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlloTheatre";
        
        $__internal_9a099d131ccdd46d18c58db21297671540af0793b9913fa4e37ff79c7f25bba0->leave($__internal_9a099d131ccdd46d18c58db21297671540af0793b9913fa4e37ff79c7f25bba0_prof);

        
        $__internal_13561588885716c45cd588a086df96ae7181cc985ddb48ed72e16589d39af928->leave($__internal_13561588885716c45cd588a086df96ae7181cc985ddb48ed72e16589d39af928_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_aa619fb00a1fdd34f10993e7beef371dbcaa19410bed1cfc3c7f12e27d2c3263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa619fb00a1fdd34f10993e7beef371dbcaa19410bed1cfc3c7f12e27d2c3263->enter($__internal_aa619fb00a1fdd34f10993e7beef371dbcaa19410bed1cfc3c7f12e27d2c3263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_718a4f7eeedc22033882306568534f4dbff4b9d223eeafeacab64178990933a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718a4f7eeedc22033882306568534f4dbff4b9d223eeafeacab64178990933a8->enter($__internal_718a4f7eeedc22033882306568534f4dbff4b9d223eeafeacab64178990933a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 25
        echo "

<body class=\"fixed-sn\">

      <div class=\"sidenav-bg mask-strong\"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->

    <nav class=\"navbar fixed-top navbar-toggleable-md navbar-expand-lg navbar-light scrolling-navbar double-nav\">

      <a class=\"navbar-brand\" href=\"#\">
     <img src=\"images/logo2.png\" alt=\"logo Allo Théâtre\" class=\"logo\">
    </a>


      <!-- SideNav slide-out button -->

      <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
        <li class=\"nav-item\">
        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><img src=\"images/stage.png\"/></a>
      </li>

        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\"><img src=\"images/ticket1.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Recherche par genre:</span>

            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\" class=\"nav-link\"><img src=\"images/ticket1.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\" class=\"nav-link\"><img src=\"images/positif.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Inscription</span></a>

        </li>

      <!--  <li class=\"nav-item\">

          <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>

        </li>-->
      <!--Boutons déconnexions
      <li class=\"nav-item\">

         <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Déconnecter</span></a>

       </li>
      -->
        <!--<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Mon Compte</span>

                                  </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          </div>
        </li>-->
      </ul>
    </nav>

  </header>

 ";
        
        $__internal_718a4f7eeedc22033882306568534f4dbff4b9d223eeafeacab64178990933a8->leave($__internal_718a4f7eeedc22033882306568534f4dbff4b9d223eeafeacab64178990933a8_prof);

        
        $__internal_aa619fb00a1fdd34f10993e7beef371dbcaa19410bed1cfc3c7f12e27d2c3263->leave($__internal_aa619fb00a1fdd34f10993e7beef371dbcaa19410bed1cfc3c7f12e27d2c3263_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a0909c668215bf69ae039fabe863fa531806006d5b99b5fa9f919744c4a2592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0909c668215bf69ae039fabe863fa531806006d5b99b5fa9f919744c4a2592->enter($__internal_2a0909c668215bf69ae039fabe863fa531806006d5b99b5fa9f919744c4a2592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9124a473e09f65084ca9827428f0c4a89ba95a6df54d46f7ce5f1034eb232a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9124a473e09f65084ca9827428f0c4a89ba95a6df54d46f7ce5f1034eb232a47->enter($__internal_9124a473e09f65084ca9827428f0c4a89ba95a6df54d46f7ce5f1034eb232a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
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
              <i class=\"fa fa-cutlery icone\"></i> Food</h6>
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
              <i class=\"fa fa-image icone\"></i> Lifestyle</h6>
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
              <i class=\"fa fa-suitcase icone\"></i> Travels</h6>
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
        
        $__internal_9124a473e09f65084ca9827428f0c4a89ba95a6df54d46f7ce5f1034eb232a47->leave($__internal_9124a473e09f65084ca9827428f0c4a89ba95a6df54d46f7ce5f1034eb232a47_prof);

        
        $__internal_2a0909c668215bf69ae039fabe863fa531806006d5b99b5fa9f919744c4a2592->leave($__internal_2a0909c668215bf69ae039fabe863fa531806006d5b99b5fa9f919744c4a2592_prof);

    }

    // line 272
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8eb91974743a27b62957015b8cd59e3543fd72728d2e57582ee94a1d962b709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb91974743a27b62957015b8cd59e3543fd72728d2e57582ee94a1d962b709f->enter($__internal_8eb91974743a27b62957015b8cd59e3543fd72728d2e57582ee94a1d962b709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bc980541af99b879638a2d26c74fcbb21144f7a6e266524e38a8d8ed311e589e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc980541af99b879638a2d26c74fcbb21144f7a6e266524e38a8d8ed311e589e->enter($__internal_bc980541af99b879638a2d26c74fcbb21144f7a6e266524e38a8d8ed311e589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 273
        echo "       <footer class=\"page-footer footerCouleur\">

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
               </div>
               </footer>
      ";
        
        $__internal_bc980541af99b879638a2d26c74fcbb21144f7a6e266524e38a8d8ed311e589e->leave($__internal_bc980541af99b879638a2d26c74fcbb21144f7a6e266524e38a8d8ed311e589e_prof);

        
        $__internal_8eb91974743a27b62957015b8cd59e3543fd72728d2e57582ee94a1d962b709f->leave($__internal_8eb91974743a27b62957015b8cd59e3543fd72728d2e57582ee94a1d962b709f_prof);

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
        return array (  418 => 273,  409 => 272,  228 => 100,  219 => 99,  189 => 76,  180 => 70,  171 => 64,  165 => 61,  147 => 46,  124 => 25,  115 => 24,  97 => 21,  81 => 322,  78 => 272,  76 => 99,  71 => 96,  69 => 24,  63 => 21,  58 => 19,  54 => 18,  50 => 17,  44 => 14,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"fr\">

<head>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--<meta name=\"description\" content=\"\">-->
    <meta name=\"author\" content=\"Claire Moreau, Amel Choquet, Chafika Morsli, Audrey Rebolle\">

    <link rel=\"icon\" type=\"image/png\" href=\"images/favicon.png\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\" />

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


<body class=\"fixed-sn\">

      <div class=\"sidenav-bg mask-strong\"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->

    <nav class=\"navbar fixed-top navbar-toggleable-md navbar-expand-lg navbar-light scrolling-navbar double-nav\">

      <a class=\"navbar-brand\" href=\"#\">
     <img src=\"images/logo2.png\" alt=\"logo Allo Théâtre\" class=\"logo\">
    </a>


      <!-- SideNav slide-out button -->

      <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
        <li class=\"nav-item\">
        <a href=\"{{ path('accueil') }}\"><img src=\"images/stage.png\"/></a>
      </li>

        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\"><img src=\"images/ticket1.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Recherche par genre:</span>

            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>
        <li class=\"nav-item\">
          <a href=\"{{ path('contact') }}\" class=\"nav-link\"><img src=\"images/ticket1.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Contact</span></a>
        </li>
        <li class=\"nav-item\">
          <a href=\"{{ path('inscription') }}\" class=\"nav-link\"><img src=\"images/positif.png\"/><span class=\"clearfix d-none d-sm-inline-block\">Inscription</span></a>

        </li>

      <!--  <li class=\"nav-item\">

          <a href=\"{{ path('login') }}\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Connecter</span></a>

        </li>-->
      <!--Boutons déconnexions
      <li class=\"nav-item\">

         <a href=\"{{ path('login') }}\" class=\"nav-link\"><i class=\"fa fa-comments-o\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Se Déconnecter</span></a>

       </li>
      -->
        <!--<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-user\"></i> <span class=\"clearfix d-none d-sm-inline-block\">Mon Compte</span>

                                  </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          </div>
        </li>-->
      </ul>
    </nav>

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
              <i class=\"fa fa-cutlery icone\"></i> Food</h6>
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
              <i class=\"fa fa-image icone\"></i> Lifestyle</h6>
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
              <i class=\"fa fa-suitcase icone\"></i> Travels</h6>
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
       <footer class=\"page-footer footerCouleur\">

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
               </div>
               </footer>
      {% endblock %}


      <script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react@16/umd/react.development.js\"></script>
      <script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.development.js\"></script>
      <script type=\"text/javascript\" src=\"js/script.js\"></script>
", "base.html.twig", "D:\\Programmes\\Xampp\\htdocs\\allotheatre\\templates\\base.html.twig");
    }
}
