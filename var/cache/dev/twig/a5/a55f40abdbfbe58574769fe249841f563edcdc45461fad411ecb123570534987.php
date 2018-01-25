<?php

/* SitePublic/contact.html.twig */
class __TwigTemplate_915f0f66cda9f9b748d422d8a8d19d843944b1617414a4833060436c77f76c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "SitePublic/contact.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1735e790bafc2d9e6a1e1e10f91dc4fefa9b658d80fc44e1e70f0944b8f4b9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1735e790bafc2d9e6a1e1e10f91dc4fefa9b658d80fc44e1e70f0944b8f4b9e6->enter($__internal_1735e790bafc2d9e6a1e1e10f91dc4fefa9b658d80fc44e1e70f0944b8f4b9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/contact.html.twig"));

        $__internal_30c578c24cf42cc2aeb9279410bf698b3b7680eaf8a3ba56e6d6e4b53580827d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c578c24cf42cc2aeb9279410bf698b3b7680eaf8a3ba56e6d6e4b53580827d->enter($__internal_30c578c24cf42cc2aeb9279410bf698b3b7680eaf8a3ba56e6d6e4b53580827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePublic/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1735e790bafc2d9e6a1e1e10f91dc4fefa9b658d80fc44e1e70f0944b8f4b9e6->leave($__internal_1735e790bafc2d9e6a1e1e10f91dc4fefa9b658d80fc44e1e70f0944b8f4b9e6_prof);

        
        $__internal_30c578c24cf42cc2aeb9279410bf698b3b7680eaf8a3ba56e6d6e4b53580827d->leave($__internal_30c578c24cf42cc2aeb9279410bf698b3b7680eaf8a3ba56e6d6e4b53580827d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b93487fa1ba4b5f55c225678c437d649e1363ba63b025fef080a230f9ff7ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b93487fa1ba4b5f55c225678c437d649e1363ba63b025fef080a230f9ff7ba2->enter($__internal_9b93487fa1ba4b5f55c225678c437d649e1363ba63b025fef080a230f9ff7ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc9b48851b6541b9494baf8bdee6b15fc23024d51ebb507a2f3d52a057f24a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9b48851b6541b9494baf8bdee6b15fc23024d51ebb507a2f3d52a057f24a1a->enter($__internal_cc9b48851b6541b9494baf8bdee6b15fc23024d51ebb507a2f3d52a057f24a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

<!--Section: Team v.1-->
<section class=\"section team-section pb-5\">

       <!--Section heading-->
       <h2 class=\"h1 text-center py-5\">Our amazing team</h2>
       <!--Section description-->
       <p class=\"section-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
           esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

       <!-- Grid row -->
       <div class=\"row text-center\">

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Anna Williams</strong>
                   </h5>
                   <p class=\"grey-text\">Graphic designer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Twitter -->
                       <a class=\"icons-sm tw-ic\">
                           <i class=\"fa fa-twitter blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>John Doe</strong>
                   </h5>
                   <p class=\"grey-text\">Web developer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Maria Smith</strong>
                   </h5>
                   <p class=\"grey-text\">Photographer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                       <!-- Dribbble -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-dribbble blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Tom Adams</strong>
                   </h5>

                   <p class=\"grey-text\">Backend developer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Github -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-github blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

       </div>
       <!-- Grid row -->

   </section>
   <!--Section: Team v.1-->
           
<!-- Form contact -->
<section id=\"hire\">
  <h1>Contact Me</h1>

  <form>
      <div class=\"field name-box\">
          <input type=\"text\" id=\"name\" placeholder=\"Who Are You?\"/>
          <label for=\"name\">Name</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <div class=\"field email-box\">
          <input type=\"text\" id=\"email\" placeholder=\"name@email.com\"/>
          <label for=\"email\">Email</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <div class=\"field msg-box\">
          <textarea id=\"msg\" rows=\"4\" placeholder=\"Your message goes here...\"/></textarea>
          <label for=\"msg\">Msg</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <input class=\"button\" type=\"submit\" value=\"Send\" />
</form>
</section>
<!-- Form contact -->


";
        
        $__internal_cc9b48851b6541b9494baf8bdee6b15fc23024d51ebb507a2f3d52a057f24a1a->leave($__internal_cc9b48851b6541b9494baf8bdee6b15fc23024d51ebb507a2f3d52a057f24a1a_prof);

        
        $__internal_9b93487fa1ba4b5f55c225678c437d649e1363ba63b025fef080a230f9ff7ba2->leave($__internal_9b93487fa1ba4b5f55c225678c437d649e1363ba63b025fef080a230f9ff7ba2_prof);

    }

    public function getTemplateName()
    {
        return "SitePublic/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/contact.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}


<!--Section: Team v.1-->
<section class=\"section team-section pb-5\">

       <!--Section heading-->
       <h2 class=\"h1 text-center py-5\">Our amazing team</h2>
       <!--Section description-->
       <p class=\"section-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
           esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

       <!-- Grid row -->
       <div class=\"row text-center\">

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Anna Williams</strong>
                   </h5>
                   <p class=\"grey-text\">Graphic designer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Twitter -->
                       <a class=\"icons-sm tw-ic\">
                           <i class=\"fa fa-twitter blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>John Doe</strong>
                   </h5>
                   <p class=\"grey-text\">Web developer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Maria Smith</strong>
                   </h5>
                   <p class=\"grey-text\">Photographer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Instagram -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-instagram blue-text\"> </i>
                       </a>
                       <!-- Dribbble -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-dribbble blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class=\"col-lg-3 col-md-6 mb-r\">
               <div class=\"card card-body\">
                   <div class=\"avatar mt-3\">
                       <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg\" class=\"rounded-circle\" alt=\"First sample avatar image\">
                   </div>
                   <h5 class=\"font-bold\">
                       <strong>Tom Adams</strong>
                   </h5>

                   <p class=\"grey-text\">Backend developer</p>

                   <ul class=\"list-unstyled\">
                       <!-- Facebook -->
                       <a class=\"icons-sm fb-ic\">
                           <i class=\"fa fa-facebook blue-text\"> </i>
                       </a>
                       <!-- Github -->
                       <a class=\"icons-sm ins-ic\">
                           <i class=\"fa fa-github blue-text\"> </i>
                       </a>
                   </ul>
               </div>
           </div>
           <!-- Grid column -->

       </div>
       <!-- Grid row -->

   </section>
   <!--Section: Team v.1-->
           
<!-- Form contact -->
<section id=\"hire\">
  <h1>Contact Me</h1>

  <form>
      <div class=\"field name-box\">
          <input type=\"text\" id=\"name\" placeholder=\"Who Are You?\"/>
          <label for=\"name\">Name</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <div class=\"field email-box\">
          <input type=\"text\" id=\"email\" placeholder=\"name@email.com\"/>
          <label for=\"email\">Email</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <div class=\"field msg-box\">
          <textarea id=\"msg\" rows=\"4\" placeholder=\"Your message goes here...\"/></textarea>
          <label for=\"msg\">Msg</label>
          <span class=\"ss-icon\">check</span>
      </div>

      <input class=\"button\" type=\"submit\" value=\"Send\" />
</form>
</section>
<!-- Form contact -->


{% endblock %}
", "SitePublic/contact.html.twig", "/Applications/MAMP/htdocs/allotheatre/templates/SitePublic/contact.html.twig");
    }
}
