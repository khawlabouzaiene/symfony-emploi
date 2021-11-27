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

/* recruteur/index.html.twig */
class __TwigTemplate_d0d2e8b733761fc365099a027421e40597ba0e3a94943cfd928f9db877f4271a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recruteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RecruteurController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"form-container\">
<h1>Connexion recruteur</h1>
<br></br>
<p> Vous avez des besoins en recrutement?recrutement Tunisie se charge de la sélection des candidats !
Inscrivez-vous et n'hésitez pas à préciser vos demandes.
Notre équipe commerciale prendra contact avec vous pour un devis. Spécialisé dans le recrutement en Tunisie et à l'international, notre bureau vous accompagne dans le développement de vos projets.
Notre cabinet de recrutement s'est forgé une réputation de taille dans le domaine du consulting et de conseils RH. Faites appel à nos services et profiter de l'expérience et du savoir-faire de nos consultants qualifiés pour analyser vos besoins en matière de ressources humaines.
Recrutement Tunisie vous accompagne dans la recherche de vos performances!</p>
<p>S'il vous plaît entrer votre email et mot de passe :</p>
<br></br>
          <h2>Connectez-vous</h2>
         
          <input type=\"email\" placeholder=\"E-Mail\" />
           <input type=\"text\" placeholder=\"mot de passe\" />
         
          
          
          <a href=\"#\" class=\"btn btn-primary\">envoyer</a>
          
          <p>mot de passe oublier? </p>
<a href=\"#\" class=\"btn btn-primary\">nouveau recruteur</a>
        </div>

  <style>
#contact {
  padding: 5rem 0;
  background: rgb(226, 226, 226);
}

.contact-container {
  display: flex;
  background:red;
}

.contact-img {
  width: 50%;
}

.contact-img img {
  display: block;
  height: 400px;
  width: 100%;
  object-position: center;
  object-fit: cover;
}

.form-container {
  padding: 1rem;
  width: 50%;
  margin: auto;
}

.form-container input {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  padding: 1rem 0;
  box-shadow: none;
  outline: none;
  margin-bottom: 1rem;
  color: #444;
  font-weight: 500;
}

.form-container textarea {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  color: #444;
  outline: none;
  padding: 1rem 0;
  resize: none;
}

.form-container h2 {
  font-size: 2.7rem;
  font-weight: 500;
  color:blue;
  margin-bottom: 1rem;
  margin-top: -1.2rem;
}

.form-container a {
  font-size: 1.3rem;
}


  </style>









  
<div class=\"container\">
  <div class=\"employee-container\">
    <div class=\"row\">
      <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"http://resources.panderasystems.com/wp-content/uploads/2018/09/slip-maan.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Benjamin<br><span class=\"employee-role\">Developer</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
        <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"https://www.duraplas.com.au/wp-content/uploads/2015/08/Smiling-young-casual-man-2.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Jackson<br><span class=\"employee-role\">Designer</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
        <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"http://www.pngonly.com/wp-content/uploads/2017/06/Man-Business-Transparent-PNG.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Franklin<br><span class=\"employee-role\">Tester</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RecruteurController!{% endblock %}

{% block body %}

<div class=\"form-container\">
<h1>Connexion recruteur</h1>
<br></br>
<p> Vous avez des besoins en recrutement?recrutement Tunisie se charge de la sélection des candidats !
Inscrivez-vous et n'hésitez pas à préciser vos demandes.
Notre équipe commerciale prendra contact avec vous pour un devis. Spécialisé dans le recrutement en Tunisie et à l'international, notre bureau vous accompagne dans le développement de vos projets.
Notre cabinet de recrutement s'est forgé une réputation de taille dans le domaine du consulting et de conseils RH. Faites appel à nos services et profiter de l'expérience et du savoir-faire de nos consultants qualifiés pour analyser vos besoins en matière de ressources humaines.
Recrutement Tunisie vous accompagne dans la recherche de vos performances!</p>
<p>S'il vous plaît entrer votre email et mot de passe :</p>
<br></br>
          <h2>Connectez-vous</h2>
         
          <input type=\"email\" placeholder=\"E-Mail\" />
           <input type=\"text\" placeholder=\"mot de passe\" />
         
          
          
          <a href=\"#\" class=\"btn btn-primary\">envoyer</a>
          
          <p>mot de passe oublier? </p>
<a href=\"#\" class=\"btn btn-primary\">nouveau recruteur</a>
        </div>

  <style>
#contact {
  padding: 5rem 0;
  background: rgb(226, 226, 226);
}

.contact-container {
  display: flex;
  background:red;
}

.contact-img {
  width: 50%;
}

.contact-img img {
  display: block;
  height: 400px;
  width: 100%;
  object-position: center;
  object-fit: cover;
}

.form-container {
  padding: 1rem;
  width: 50%;
  margin: auto;
}

.form-container input {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  padding: 1rem 0;
  box-shadow: none;
  outline: none;
  margin-bottom: 1rem;
  color: #444;
  font-weight: 500;
}

.form-container textarea {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  color: #444;
  outline: none;
  padding: 1rem 0;
  resize: none;
}

.form-container h2 {
  font-size: 2.7rem;
  font-weight: 500;
  color:blue;
  margin-bottom: 1rem;
  margin-top: -1.2rem;
}

.form-container a {
  font-size: 1.3rem;
}


  </style>









  
<div class=\"container\">
  <div class=\"employee-container\">
    <div class=\"row\">
      <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"http://resources.panderasystems.com/wp-content/uploads/2018/09/slip-maan.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Benjamin<br><span class=\"employee-role\">Developer</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
        <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"https://www.duraplas.com.au/wp-content/uploads/2015/08/Smiling-young-casual-man-2.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Jackson<br><span class=\"employee-role\">Designer</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
        <div class=\"col-lg-4 employee-1\">
        <div class=\"employee\">
          <div class=\"employee-image\">
            <img src=\"http://www.pngonly.com/wp-content/uploads/2017/06/Man-Business-Transparent-PNG.png\" class=\"img-fluid d-block m-auto\" alt=\"employee-image\">
            </div>
          <div class=\"employee-details\">
            <div class=\"employee-name\">
              <h1 class=\"text-center\">Franklin<br><span class=\"employee-role\">Tester</span></h1>
              </div>
            <div class=\"employee-social-link\">
                <ul>
                  <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></li>
                  <li><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></li>
              </ul>
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
{% endblock %}










", "recruteur/index.html.twig", "/opt/lampp/htdocs/recrutement/templates/recruteur/index.html.twig");
    }
}
