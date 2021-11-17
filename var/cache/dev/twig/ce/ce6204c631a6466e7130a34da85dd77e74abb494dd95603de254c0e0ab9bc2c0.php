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
class __TwigTemplate_5cecf9aea0d4aca06a8a8e120461a0d9393e9be887f0b6210e9fd2957b8d8a0b extends Template
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


<div class=\"nav\">
  <input type=\"checkbox\" id=\"nav-check\">
  <div class=\"nav-header\">
    <div class=\"nav-title\">
      JoGeek
    </div>
  </div>
  <div class=\"nav-btn\">
    <label for=\"nav-check\">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
   <h1 class=\"logo\">RS</h1>

  <div class=\"nav-links\">
  
    <ul>
    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Acceuil</a>
   <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offredemploi");
        echo "\">offres d'emplois</a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">condidat</a>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Contact</a>
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">connexion</a>
    
  </div>
</div>

      </div>
  </nav>
    <section class=\"showcase-area\" id=\"showcase\">
      <div class=\"showcase-container\">
        <h1 class=\"main-title\" id=\"home\">Eat Right Food</h1>
        <p>Eat Healty, it is good for our health.</p>
        <a href=\"#food-menu\" class=\"btn btn-primary\">Menu</a>
      </div>
    </section>

    <section id=\"about\">
      <div class=\"about-wrapper container\">
        <div class=\"about-text\">
          <p class=\"small\">About Us</p>
          <h2>Recrutement Tunisie</h2>
          <p>
            Choisir le meilleur site de recherche d’emploi en France vous permet de gagner un temps précieux dans la recherche des meilleures offres disponibles sur le marché d’emploi en Tunsie
          </p>
        </div>
        <div class=\"about-img\">
          <img src=\"https://media.gettyimages.com/vectors/job-search-and-interview-standing-in-a-row-of-job-seekers-vector-id1169300752?s=612x612\" alt=\"emplois\" />
        </div>
      </div>
    </section>
    <section id=\"food\">
      <h2>Types of jobs</h2>
      <div class=\"food-container container\">
        <div class=\"food-type fruite\">
          <div class=\"img-container\">
            <img src=\"https://reviews.tn/wp-content/uploads/2021/01/22-Meilleurs-Sites-pour-Trouver-des-Offres-demploi-en-Tunisie-2021-1152x768.png\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>fruite</h3>
              <a
                href=\"https://p9z3a6x8.stackpathcdn.com/wp-content/uploads/2021/10/Offre-demploi-ok-pour-RS.jpg\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class=\"food-type vegetable\">
          <div class=\"img-container\">
            <img src=\"https://p9z3a6x8.stackpathcdn.com/wp-content/uploads/2021/10/Offre-demploi-ok-pour-RS.jpg\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>vegetable</h3>
              <a
                href=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5jV3CzFq9TwtDL2V9TQtulP4LBIN5EaDCtCjPz0bZdh-17XdPEFm5tQEcodHt6nWsOl8&usqp=CAU\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class=\"food-type grin\">
          <div class=\"img-container\">
            <img src=\"https://reviews.tn/wp-content/uploads/2021/03/Meilleurs-Sites-pour-Trouver-des-Offres-demploi-en-Tunisie.png\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>grin</h3>
              <a
                href=\"https://en.wikipedia.org/wiki/Grain\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

       </head>
 
 </body>
</html>  
         

 <!--slider-->
 
<div class=\"wrapper\">
\t<div class=\"photobanner\">
  <img class=\"first\" src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg\" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
</div>
</div>

<!--slider-->


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
            <li><a href=\"#\">Nos service</a>
            </li>
            <li><a href=\"#\">Nos offres</a>
            </li>
            <li><a href=\"#\">Qui somme nous</a>
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
        // line 288
        $this->displayBlock('body', $context, $blocks);
        // line 289
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 293
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

    // line 288
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
        return array (  408 => 288,  389 => 5,  374 => 293,  369 => 291,  365 => 290,  360 => 289,  358 => 288,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  61 => 9,  57 => 8,  51 => 5,  45 => 1,);
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


<div class=\"nav\">
  <input type=\"checkbox\" id=\"nav-check\">
  <div class=\"nav-header\">
    <div class=\"nav-title\">
      JoGeek
    </div>
  </div>
  <div class=\"nav-btn\">
    <label for=\"nav-check\">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
   <h1 class=\"logo\">RS</h1>

  <div class=\"nav-links\">
  
    <ul>
    <a href=\"{{path('home')}}\">Acceuil</a>
   <a href=\"{{path('offredemploi')}}\">offres d'emplois</a>
    <a href=\"{{path('home')}}\">condidat</a>
    <a href=\"{{path('home')}}\">Contact</a>
    <a href=\"{{path('home')}}\">connexion</a>
    
  </div>
</div>

      </div>
  </nav>
    <section class=\"showcase-area\" id=\"showcase\">
      <div class=\"showcase-container\">
        <h1 class=\"main-title\" id=\"home\">Eat Right Food</h1>
        <p>Eat Healty, it is good for our health.</p>
        <a href=\"#food-menu\" class=\"btn btn-primary\">Menu</a>
      </div>
    </section>

    <section id=\"about\">
      <div class=\"about-wrapper container\">
        <div class=\"about-text\">
          <p class=\"small\">About Us</p>
          <h2>Recrutement Tunisie</h2>
          <p>
            Choisir le meilleur site de recherche d’emploi en France vous permet de gagner un temps précieux dans la recherche des meilleures offres disponibles sur le marché d’emploi en Tunsie
          </p>
        </div>
        <div class=\"about-img\">
          <img src=\"https://media.gettyimages.com/vectors/job-search-and-interview-standing-in-a-row-of-job-seekers-vector-id1169300752?s=612x612\" alt=\"emplois\" />
        </div>
      </div>
    </section>
    <section id=\"food\">
      <h2>Types of jobs</h2>
      <div class=\"food-container container\">
        <div class=\"food-type fruite\">
          <div class=\"img-container\">
            <img src=\"https://reviews.tn/wp-content/uploads/2021/01/22-Meilleurs-Sites-pour-Trouver-des-Offres-demploi-en-Tunisie-2021-1152x768.png\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>fruite</h3>
              <a
                href=\"https://p9z3a6x8.stackpathcdn.com/wp-content/uploads/2021/10/Offre-demploi-ok-pour-RS.jpg\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class=\"food-type vegetable\">
          <div class=\"img-container\">
            <img src=\"https://p9z3a6x8.stackpathcdn.com/wp-content/uploads/2021/10/Offre-demploi-ok-pour-RS.jpg\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>vegetable</h3>
              <a
                href=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5jV3CzFq9TwtDL2V9TQtulP4LBIN5EaDCtCjPz0bZdh-17XdPEFm5tQEcodHt6nWsOl8&usqp=CAU\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class=\"food-type grin\">
          <div class=\"img-container\">
            <img src=\"https://reviews.tn/wp-content/uploads/2021/03/Meilleurs-Sites-pour-Trouver-des-Offres-demploi-en-Tunisie.png\" alt=\"error\" />
            <div class=\"img-content\">
              <h3>grin</h3>
              <a
                href=\"https://en.wikipedia.org/wiki/Grain\"
                class=\"btn btn-primary\"
                target=\"blank\"
                >learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

       </head>
 
 </body>
</html>  
         

 <!--slider-->
 
<div class=\"wrapper\">
\t<div class=\"photobanner\">
  <img class=\"first\" src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg\" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
</div>
</div>

<!--slider-->


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
            <li><a href=\"#\">Nos service</a>
            </li>
            <li><a href=\"#\">Nos offres</a>
            </li>
            <li><a href=\"#\">Qui somme nous</a>
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
