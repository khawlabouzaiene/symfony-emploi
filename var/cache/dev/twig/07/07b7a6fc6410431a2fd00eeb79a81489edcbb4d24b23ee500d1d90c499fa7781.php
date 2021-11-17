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

/* home/index.html.twig */
class __TwigTemplate_f9b07a6be96f010f99b6a11a95d3d097c51f4bc409e6cdfa446802ec2e31e2c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
<html>
  <body>
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



</html>
  </body>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
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

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
 
<html>
  <body>
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



</html>
  </body>





{% endblock %}
", "home/index.html.twig", "/opt/lampp/htdocs/recrutement/templates/home/index.html.twig");
    }
}
