<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_ac8d4e90a911f648823c4b66f9cb077e52ac2bf768d637c37ff482ba9de60dfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">


<head>
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1, user-scalable=no\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        <script type=\"text/javascript\">
        \$(window).on('scroll',function(){
            if(\$(window).scrollTop()){
                \$('nav').addClass('black');
            }
            else{
                \$('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         \$(document).ready(function(){
                \$('.menu h4').click(function(){
                    \$(\"nav ul\").toggleClass(\"active\")
            })
            })
        </script>
\t</head>
<body>
        <div class=\"responsive-bar\">
        <div class=\"logo\">
                 <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/rect3.jpg"), "html", null, true);
        echo " \" alt=\"logo\"/>
           
            </div>
            <div class=\"menu\">
            <h4>Menu</h4>
            </div>
        </div>
\t\t<nav>
            <div class=\"logo\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/rect2.jpg"), "html", null, true);
        echo " \" alt=\"logo\"/>
            </div>
         <ul>
            <li><a href=\"#\">Home</a></li>
             <li><a href=\"#\">offres demploi</a></li>
             <li><a href=\"#\">condidat</a></li>
             <li><a href=\"#\">recruteur</a></li>
             <li><a href=\"#\">Contact</a></li>
             <li><a href=\"#\">inscription</a></li>
             <li><a href=\"#\">connexion</a></li>

            </ul>
        </nav>
        
        <section class=\"sec1\"></section>
        <section class=\"content\">
        <p>
            
            
           

Métiers

    Informatique / Multimédia (224)
    Commercial / Vente / Distribution (195)
    Comptabilité / Gestion Finance / Audit (159)
    Call Center / Télévente (124)
    Ingénieur / Industrie / Production (114)
    Marketing / Publicité / Communication (106)
    Administration / Secrétariat (98)
    Achats / Logistique (88)
    Technicien / Industrie / Production (74)
    Ressources Humaines / Social (54)


    Maintenance / Qualité (53)
    Santé / Paramédical / Optique (47)
    Enseignement / Formation (43)
    Consultant / Étude / Conseil (32)
    Banque / Assurances / Finance Marché (29)
    Électronique / Électricité / Énergie (28)
    Tourisme / Hôtellerie / Restauration / Loisirs (28)
    Architecture / Immobilier (25)
    Télécoms / Réseaux (24)
    Agricuture / Agro-Alimentaire / Environnement (20)

 <br>
 
            </p>
        </section>
        <section class=\"sec2\"></section>
        <section class=\"content\">
        <p>
            Lorem ipsum   enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>
 ullamcorper sit. Blandit massa enim nec 
            </p>
        </section>
\t</body>

  
       
          
 










  </head>
<body>
 
 <!--footer start-->
<footer>
  <div class=\"footer-wrap\">
  <div class=\"container first_class\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">
          <h3>BE THE FIRST TO KNOW</h3>
          <p>Get all the latest information on  Triedge Services, Events, Jobs
            and Fairs. Sign up for our newsletter today.</p>
        </div>
        <div class=\"col-md-4 col-sm-6\">
        <form class=\"newsletter\">
           <input type=\"text\" placeholder=\"Email Address\"> 
                                                        <button class=\"newsletter_submit_btn\" type=\"submit\"><i class=\"fa fa-paper-plane\"></i></button>  
        </form>
        
        </div>
        <div class=\"col-md-4 col-sm-6\">
        <div class=\"col-md-12\">
          <div class=\"standard_social_links\">
        <div>
          <li class=\"round-btn btn-facebook\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>

          </li>
          <li class=\"round-btn btn-linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-twitter\"><a href=\"#\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-instagram\"><a href=\"#\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-whatsapp\"><a href=\"#\"><i class=\"fab fa-whatsapp\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-envelop\"><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>

          </li>
        </div>
      </div>  
        </div>
          <div class=\"clearfix\"></div>
        <div class=\"col-md-12\"><h3 style=\"text-align: right;\">Stay Connected</h3></div>
        </div>
      </div>
  </div>
    <div class=\"second_class\">
      <div class=\"container second_class_bdr\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">

          <div class=\"footer-logo\"><img src=\"http://localhost/lrn/img/footer_logo.png\" alt=\"logo\">
          </div>
          <p>Your one-stop career platform to find Jobs, Internships, Professional Trainings, Projects, and Volunteering Opportunities.</p>
        </div>
        <div class=\"col-md-2 col-sm-6\">
          <h3>Quick  LInks</h3>
          <ul class=\"footer-links\">
            <li><a href=\"#\">Home</a>
            </li>
            <li><a href=\"#\">About us</a>
            </li>
            <li><a href=\"#\">Triedge Partners</a>
            </li>
            <li><a href=\"#\">Contact Us</a>
            </li>
            <li><a href=\"#\" target=\"_blank\">Terms &amp; Conditions</a>
            </li>
            <li><a href=\"#\" target=\"_blank\">Privacy Policy</a>
            </li>
            <li><a href=\"#\">Sitemap</a>
            </li>
          </ul>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <h3>OUR SERVICES</h3>
          <ul class=\"footer-category\">
            <li><a href=\"#\">Fresher Jobs</a>
            </li>
            <li><a href=\"#\">InternEdge - Internships &amp; Projects </a>
            </li>
            <li><a href=\"#\">Resume Edge - Resume Writing Services</a>
            </li>
            <li><a href=\"#\">Readers Galleria - Curated Library</a>
            </li>
            <li><a href=\"#\">Trideus - Campus Ambassadors</a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <h3>triedge Events</h3>
          <ul class=\"footer-links\">
            <li><a href=\"#\">Triedge Events</a>
            </li>

            <li><a href=\"#\">Jobs &AMP; Internship Fair 2019</a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
    </div>
    
    <div class=\"row\">
      
      <div class=\"container-fluid\">
      <div class=\"copyright\"> Copyright 2019 | All Rights Reserved by TRIEDGE Solutions Pvt. Ltd.</div>
      </div>
      
    </div>
  </div>
  
  </footer>

<!--footer end-->


 
 
    





  ";
        // line 248
        $this->displayBlock('body', $context, $blocks);
        // line 249
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>


    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 248
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  359 => 248,  340 => 5,  325 => 253,  320 => 251,  316 => 250,  311 => 249,  309 => 248,  102 => 44,  90 => 35,  61 => 9,  57 => 8,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">


<head>
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1, user-scalable=no\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        <script type=\"text/javascript\">
        \$(window).on('scroll',function(){
            if(\$(window).scrollTop()){
                \$('nav').addClass('black');
            }
            else{
                \$('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         \$(document).ready(function(){
                \$('.menu h4').click(function(){
                    \$(\"nav ul\").toggleClass(\"active\")
            })
            })
        </script>
\t</head>
<body>
        <div class=\"responsive-bar\">
        <div class=\"logo\">
                 <img src=\"{{asset('/images/rect3.jpg')}} \" alt=\"logo\"/>
           
            </div>
            <div class=\"menu\">
            <h4>Menu</h4>
            </div>
        </div>
\t\t<nav>
            <div class=\"logo\">
            <img src=\"{{asset('/images/rect2.jpg')}} \" alt=\"logo\"/>
            </div>
         <ul>
            <li><a href=\"#\">Home</a></li>
             <li><a href=\"#\">offres demploi</a></li>
             <li><a href=\"#\">condidat</a></li>
             <li><a href=\"#\">recruteur</a></li>
             <li><a href=\"#\">Contact</a></li>
             <li><a href=\"#\">inscription</a></li>
             <li><a href=\"#\">connexion</a></li>

            </ul>
        </nav>
        
        <section class=\"sec1\"></section>
        <section class=\"content\">
        <p>
            
            
           

Métiers

    Informatique / Multimédia (224)
    Commercial / Vente / Distribution (195)
    Comptabilité / Gestion Finance / Audit (159)
    Call Center / Télévente (124)
    Ingénieur / Industrie / Production (114)
    Marketing / Publicité / Communication (106)
    Administration / Secrétariat (98)
    Achats / Logistique (88)
    Technicien / Industrie / Production (74)
    Ressources Humaines / Social (54)


    Maintenance / Qualité (53)
    Santé / Paramédical / Optique (47)
    Enseignement / Formation (43)
    Consultant / Étude / Conseil (32)
    Banque / Assurances / Finance Marché (29)
    Électronique / Électricité / Énergie (28)
    Tourisme / Hôtellerie / Restauration / Loisirs (28)
    Architecture / Immobilier (25)
    Télécoms / Réseaux (24)
    Agricuture / Agro-Alimentaire / Environnement (20)

 <br>
 
            </p>
        </section>
        <section class=\"sec2\"></section>
        <section class=\"content\">
        <p>
            Lorem ipsum   enim facilisis gravida neque. Id leo in vitae turpis massa sed elementum tempus egestas. Vivamus arcu felis bibendum ut tristique et. Lectus sit amet est placerat. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. Commodo quis imperdiet massa tincidunt. Arcu dictum varius duis at consectetur lorem donec massa sapien. Imperdiet sed euismod nisi porta lorem mollis aliquam. Habitant morbi tristique senectus et netus et malesuada fames ac.<br>
 ullamcorper sit. Blandit massa enim nec 
            </p>
        </section>
\t</body>

  
       
          
 










  </head>
<body>
 
 <!--footer start-->
<footer>
  <div class=\"footer-wrap\">
  <div class=\"container first_class\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">
          <h3>BE THE FIRST TO KNOW</h3>
          <p>Get all the latest information on  Triedge Services, Events, Jobs
            and Fairs. Sign up for our newsletter today.</p>
        </div>
        <div class=\"col-md-4 col-sm-6\">
        <form class=\"newsletter\">
           <input type=\"text\" placeholder=\"Email Address\"> 
                                                        <button class=\"newsletter_submit_btn\" type=\"submit\"><i class=\"fa fa-paper-plane\"></i></button>  
        </form>
        
        </div>
        <div class=\"col-md-4 col-sm-6\">
        <div class=\"col-md-12\">
          <div class=\"standard_social_links\">
        <div>
          <li class=\"round-btn btn-facebook\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>

          </li>
          <li class=\"round-btn btn-linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-twitter\"><a href=\"#\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-instagram\"><a href=\"#\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-whatsapp\"><a href=\"#\"><i class=\"fab fa-whatsapp\" aria-hidden=\"true\"></i></a>

          </li>
          <li class=\"round-btn btn-envelop\"><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>

          </li>
        </div>
      </div>  
        </div>
          <div class=\"clearfix\"></div>
        <div class=\"col-md-12\"><h3 style=\"text-align: right;\">Stay Connected</h3></div>
        </div>
      </div>
  </div>
    <div class=\"second_class\">
      <div class=\"container second_class_bdr\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">

          <div class=\"footer-logo\"><img src=\"http://localhost/lrn/img/footer_logo.png\" alt=\"logo\">
          </div>
          <p>Your one-stop career platform to find Jobs, Internships, Professional Trainings, Projects, and Volunteering Opportunities.</p>
        </div>
        <div class=\"col-md-2 col-sm-6\">
          <h3>Quick  LInks</h3>
          <ul class=\"footer-links\">
            <li><a href=\"#\">Home</a>
            </li>
            <li><a href=\"#\">About us</a>
            </li>
            <li><a href=\"#\">Triedge Partners</a>
            </li>
            <li><a href=\"#\">Contact Us</a>
            </li>
            <li><a href=\"#\" target=\"_blank\">Terms &amp; Conditions</a>
            </li>
            <li><a href=\"#\" target=\"_blank\">Privacy Policy</a>
            </li>
            <li><a href=\"#\">Sitemap</a>
            </li>
          </ul>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <h3>OUR SERVICES</h3>
          <ul class=\"footer-category\">
            <li><a href=\"#\">Fresher Jobs</a>
            </li>
            <li><a href=\"#\">InternEdge - Internships &amp; Projects </a>
            </li>
            <li><a href=\"#\">Resume Edge - Resume Writing Services</a>
            </li>
            <li><a href=\"#\">Readers Galleria - Curated Library</a>
            </li>
            <li><a href=\"#\">Trideus - Campus Ambassadors</a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <h3>triedge Events</h3>
          <ul class=\"footer-links\">
            <li><a href=\"#\">Triedge Events</a>
            </li>

            <li><a href=\"#\">Jobs &AMP; Internship Fair 2019</a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
    </div>
    
    <div class=\"row\">
      
      <div class=\"container-fluid\">
      <div class=\"copyright\"> Copyright 2019 | All Rights Reserved by TRIEDGE Solutions Pvt. Ltd.</div>
      </div>
      
    </div>
  </div>
  
  </footer>

<!--footer end-->


 
 
    





  {% block body %}{% endblock %}
    <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery-3.5.1.slim.min.js')}}\"></script>
    <script src=\"{{ asset('js/popper.min.js')}}\"></script>

    <script src=\"{{ asset('js/index.js')}}\"></script>


    </body>
</html>", "base.html.twig", "/opt/lampp/htdocs/recrutement/templates/base.html.twig");
    }
}
