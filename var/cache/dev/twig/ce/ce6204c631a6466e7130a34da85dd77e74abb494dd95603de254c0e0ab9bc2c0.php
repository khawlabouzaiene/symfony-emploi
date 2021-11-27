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
            'javascript' => [$this, 'block_javascript'],
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
        echo "<html>
 <head>
 <meta charset=\"UTF-8\"
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
             <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
   integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
   crossorigin=\"\"/>
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.css%22%3E%22%3E\">
 
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.Default.css%22%3%22%3E\">

 
</head>
<body>
 <section class=\"top-nav\">
    <div>
    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo recrut.jpeg"), "html", null, true);
        echo "\" style=\"width:100px; height:50px;\" alt=\"images\"/>
    </div>
    <input id=\"menu-toggle\" type=\"checkbox\" />
    <label class='menu-button-container' for=\"menu-toggle\">
    <div class='menu-button'></div>
  </label>
    <ul class=\"menu\">
    

       <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</li>
       <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offredemploi");
        echo "\">offres d'emploi</li>
       <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidas");
        echo "\">candidas</li>
       <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">contact</li>
        <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruteur");
        echo "\">Recruteur</li>
       


     ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                <li class=\"nav-item \">
                  <a class=\"nav-link\" >";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                </li>

                <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                </li>


              ";
        } else {
            // line 49
            echo "              <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
             </li>

               <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
               </li>

         
            ";
        }
        // line 59
        echo "





    </ul>
  </section>



";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('javascript', $context, $blocks);
        // line 81
        echo "

<footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-cta pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <div class=\"cta-text\">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"fas fa-phone\"></i>
                            <div class=\"cta-text\">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"far fa-envelope-open\"></i>
                            <div class=\"cta-text\">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-content pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"index.html\"><img src=\"https://i.ibb.co/QDy827D/ak-logo.png\" class=\"img-fluid\" alt=\"logo\"></a>
                            </div>
                            <div class=\"footer-text\">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class=\"footer-social-icon\">
                                <span>Follow us</span>
                                <a href=\"#\"><i class=\"fab fa-facebook-f facebook-bg\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter twitter-bg\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-google-plus-g google-bg\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-30\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">about</a></li>
                                <li><a href=\"#\">services</a></li>
                                <li><a href=\"#\">portfolio</a></li>
                                <li><a href=\"#\">Contact</a></li>
                                <li><a href=\"#\">About us</a></li>
                                <li><a href=\"#\">Our Services</a></li>
                                <li><a href=\"#\">Expert Team</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Subscribe</h3>
                            </div>
                            <div class=\"footer-text mb-25\">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class=\"subscribe-form\">
                                <form action=\"#\">
                                    <input type=\"text\" placeholder=\"Email Address\">
                                    <button><i class=\"fab fa-telegram-plane\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 text-center text-lg-left\">
                        <div class=\"copyright-text\">
                            <p>Copyright &copy; 2018, All Right Reserved <a href=\"https://codepen.io/anupkumar92/\">Anup</a></p>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 d-none d-lg-block text-right\">
                        <div class=\"footer-menu\">
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Terms</a></li>
                                <li><a href=\"#\">Privacy</a></li>
                                <li><a href=\"#\">Policy</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
    ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: \"\";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
    
    </style>";
        
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

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 75
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("popper/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
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
        return array (  526 => 79,  522 => 78,  518 => 77,  514 => 76,  509 => 75,  499 => 74,  488 => 71,  478 => 70,  459 => 5,  172 => 81,  170 => 74,  167 => 73,  165 => 70,  152 => 59,  144 => 54,  137 => 50,  134 => 49,  126 => 44,  117 => 40,  114 => 39,  112 => 38,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  77 => 21,  61 => 8,  57 => 7,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
 <head>
 <meta charset=\"UTF-8\"
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Welcome!{% endblock %}</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">
             <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
   <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
   integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
   crossorigin=\"\"/>
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.css%22%3E%22%3E\">
 
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/markercluster.Default.css%22%3%22%3E\">

 
</head>
<body>
 <section class=\"top-nav\">
    <div>
    <img src=\"{{asset('images/logo recrut.jpeg')}}\" style=\"width:100px; height:50px;\" alt=\"images\"/>
    </div>
    <input id=\"menu-toggle\" type=\"checkbox\" />
    <label class='menu-button-container' for=\"menu-toggle\">
    <div class='menu-button'></div>
  </label>
    <ul class=\"menu\">
    

       <li><a href=\"{{path('home')}}\">Home</li>
       <li><a href=\"{{path('offredemploi')}}\">offres d'emploi</li>
       <li><a href=\"{{path('candidas')}}\">candidas</li>
       <li><a href=\"{{path('contact')}}\">contact</li>
        <li><a href=\"{{path('recruteur')}}\">Recruteur</li>
       


     {% if app.user %}
                <li class=\"nav-item \">
                  <a class=\"nav-link\" >{{ app.user.nom }} {{ app.user.prenom }}</a>
                </li>

                <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>


              {% else %}
              <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
             </li>

               <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
               </li>

         
            {% endif %}






    </ul>
  </section>



{% block body %}

{% endblock %}

        {% block javascript %}
    <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery-3.5.1.slim.min.js')}}\"></script>
    <script src=\"{{ asset('js/popper.min.js')}}\"></script>
    <script src=\"{{asset('popper/popper-base.min.js.map_2.4.4/cdnjs/popper-base.min.js.map')}}\"> </script>
    <script src=\"{{ asset('js/index.js')}}\"></script>
    {% endblock %}


<footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-cta pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <div class=\"cta-text\">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"fas fa-phone\"></i>
                            <div class=\"cta-text\">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-4 mb-30\">
                        <div class=\"single-cta\">
                            <i class=\"far fa-envelope-open\"></i>
                            <div class=\"cta-text\">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-content pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"index.html\"><img src=\"https://i.ibb.co/QDy827D/ak-logo.png\" class=\"img-fluid\" alt=\"logo\"></a>
                            </div>
                            <div class=\"footer-text\">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class=\"footer-social-icon\">
                                <span>Follow us</span>
                                <a href=\"#\"><i class=\"fab fa-facebook-f facebook-bg\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter twitter-bg\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-google-plus-g google-bg\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-30\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">about</a></li>
                                <li><a href=\"#\">services</a></li>
                                <li><a href=\"#\">portfolio</a></li>
                                <li><a href=\"#\">Contact</a></li>
                                <li><a href=\"#\">About us</a></li>
                                <li><a href=\"#\">Our Services</a></li>
                                <li><a href=\"#\">Expert Team</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Subscribe</h3>
                            </div>
                            <div class=\"footer-text mb-25\">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class=\"subscribe-form\">
                                <form action=\"#\">
                                    <input type=\"text\" placeholder=\"Email Address\">
                                    <button><i class=\"fab fa-telegram-plane\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 text-center text-lg-left\">
                        <div class=\"copyright-text\">
                            <p>Copyright &copy; 2018, All Right Reserved <a href=\"https://codepen.io/anupkumar92/\">Anup</a></p>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 d-none d-lg-block text-right\">
                        <div class=\"footer-menu\">
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Terms</a></li>
                                <li><a href=\"#\">Privacy</a></li>
                                <li><a href=\"#\">Policy</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
    ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: \"\";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
    
    </style>", "base.html.twig", "/opt/lampp/htdocs/recrutement/templates/base.html.twig");
    }
}
