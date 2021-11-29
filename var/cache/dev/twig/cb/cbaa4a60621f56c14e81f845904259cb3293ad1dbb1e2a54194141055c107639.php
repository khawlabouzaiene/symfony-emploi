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

/* offredemploi/index.html.twig */
class __TwigTemplate_4964706f0326974a315a398c526e78139b95e65ed6a4324671f60c4eb46db304 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offredemploi/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offredemploi/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offredemploi/index.html.twig", 1);
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

        echo "Hello OffredemploiController!";
        
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
<h1>nos offres d'emplois</h1>

        





<header>
  <h1>Responsive Table Styling</h1>
  <h2>We can't always avoid table tags.</h2>
</header>

<table class=\"responsive-table\">
  <tr class=\"table-header\">
    <th>Event</th>
    <th>Location</th>
    <th>Time</th>
    <th>Price</th>
    <th>More Info</th>
  </tr>
  <tr>
    <td class=\"event\">A Night of Musical Goodness <span>w/s/g The Robot Kids</span></td>
    <td class=\"location\">Dr. Wily's Laboratory</td>
    <td class=\"time\">7pm door / 8pm show</td>
    <td class=\"price\">\$12</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
  <tr>
    <td class=\"event\">Songwriting Clinic</td>
    <td class=\"location\">Jeb's Music Studio</td>
    <td class=\"time\">5<span class=\"desktop-fluff\">:00</span>pm&#8202;&ndash;&#8202;7:45pm</td>
    <td class=\"price\">Free</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
  <tr>
    <td class=\"event\">The Orchestra Fam, <span>Conducted by Aaron&nbsp;Rhoades</span></td>
    <td class=\"location\">The Dreamland Theater</td>
    <td class=\"time\">7<span class=\"desktop-fluff\">:00</span>pm&#8202;&ndash;&#8202;11<span class=\"desktop-fluff\">:00</span>pm</td>
    <td class=\"price\">\$12</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
</table>

<style>
h1,
h2 {
  text-align: center;
}
header {
  h1 {
    font-family: \"Rammetto One\", cursive;
    margin-bottom: 0;
  }
  h2 {
    margin-top: 0;
    margin-bottom: 40px;
    font-family: \"Roboto\", sans-serif;
  }
}

table.responsive-table {
  display: flex;
  flex-direction: column;
  border: none;
  justify-content: center;
  align-items: center;
  a {
    text-decoration: none;
    padding: 3px 6px;
    border-radius: 6px 3px;
    border: 1px solid #298ffb;
    transition: all 0.1s ease-in-out;
  }
  a:hover {
    color: #fff;
    background: #73b7ff;
    transition: all 0.2s ease-in-out;
  }
}
td,
th {
  text-align: center;
  vertical-align: middle;
}
tr {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  border: 1px solid #eee;
  max-width: 400px;
  margin: 10px 10px 20px;
  padding: 20px;
  box-shadow: 0 5px 10px -5px #aaa;
      border-left: 10px solid #ffa1a1;
    border-bottom: none;

  &.table-header {
    align-self: center;
    display: none;
  }
}
td {
  font-family: \"Roboto\", sans-serif;
  display: flex;
  flex-direction: column;
}

.more-info a {
  color: #298ffb;
}

//getting into specific styles
.event {
  font-family: \"Rammetto One\", cursive;
  color: #ffa1a1;
}
td:not(.event) {
  text-align: left;
  margin-bottom: 5px;
  color: #777;
}
.desktop-fluff {
  display: none;
}

//mobile extras
td.price:before {
  content: \"Price:\";
  display: inline-block;
  margin-right: 5px;
}

td.price {
  display: flex;
  flex-direction: row;
}

td.location {
  font-weight: bold;
  display: flex;
  flex-direction: row;
}

td.location:before {
  content: \"@\";
  margin-right: 3px;
  position: relative;
  top: -1px;
}


@media (min-width: 350px) {
  td:not(.event) {
    margin-left: 30%;
    align-items: flex-start;
    display: flex;
  }

  td.event {
    align-self: center;
    margin-bottom: 14px;
  }
  td.event:after {
    display: block;
    content: \"\";
    width: 100%;
    height: 2px;
    background: #ffa1a1;
    position: relative;
    top: 3px;
  }
}

@media (min-width: 768px) {
  .desktop-fluff {
    display: initial;
  }
  table.responsive-table,
  tr,
  td,
  th {
    margin: 0 auto;
    border: 1px solid #eee;
    border-collapse: collapse;
  }
  table.responsive-table {
    display: table;
    a {
      text-decoration: underline;
      border: none;
      padding: initial;
    }
    a:hover {
      background: none;
      color: #73b7ff;
    }
    tr.table-header,
    tr {
      font-family: \"Roboto\", sans-serif;
      display: table-row;
      flex-direction: unset;
      justify-content: unset;
      align-items: unset;
      box-shadow: none;
    }
    td {
      max-width: unset;
      display: table-cell;
      &.event {
        font-family: \"Roboto\", sans-serif;
        color: #222;
        font-size: 16px;
        font-weight: 900;
        text-align: left;
      }
      &:not(.event){
        text-align: center;
      }
    }
  }

  tr {
    th,
    td {
      border: 1px solid #aaa;
      padding: 10px;
    }
    th {
      font-family: \"Rammetto One\", cursive;
      background: #4eb342;
      border-color: #44943b;
      color: white;
      text-shadow: -2px 2px black;
      font-weight: 100;
    }
  }

  //remove mobile extras
  td.price:before,
  td.location:before,
  table td.event:after {
    display: none;
  }

  td.price,
  td.location,
  td:not(.event) {
    display: table-cell;
  }
  table.responsive-table td:not(.event) {
    margin-left: auto;
    margin-bottom: auto;
    align-items: unset;
    display: table-cell;
  }

  td.event {
    align-self: unset;
    margin-bottom: 0;
  }
}

</style>
   





     


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offredemploi/index.html.twig";
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

{% block title %}Hello OffredemploiController!{% endblock %}

{% block body %}

<h1>nos offres d'emplois</h1>

        





<header>
  <h1>Responsive Table Styling</h1>
  <h2>We can't always avoid table tags.</h2>
</header>

<table class=\"responsive-table\">
  <tr class=\"table-header\">
    <th>Event</th>
    <th>Location</th>
    <th>Time</th>
    <th>Price</th>
    <th>More Info</th>
  </tr>
  <tr>
    <td class=\"event\">A Night of Musical Goodness <span>w/s/g The Robot Kids</span></td>
    <td class=\"location\">Dr. Wily's Laboratory</td>
    <td class=\"time\">7pm door / 8pm show</td>
    <td class=\"price\">\$12</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
  <tr>
    <td class=\"event\">Songwriting Clinic</td>
    <td class=\"location\">Jeb's Music Studio</td>
    <td class=\"time\">5<span class=\"desktop-fluff\">:00</span>pm&#8202;&ndash;&#8202;7:45pm</td>
    <td class=\"price\">Free</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
  <tr>
    <td class=\"event\">The Orchestra Fam, <span>Conducted by Aaron&nbsp;Rhoades</span></td>
    <td class=\"location\">The Dreamland Theater</td>
    <td class=\"time\">7<span class=\"desktop-fluff\">:00</span>pm&#8202;&ndash;&#8202;11<span class=\"desktop-fluff\">:00</span>pm</td>
    <td class=\"price\">\$12</td>
    <td class=\"more-info\"><a href=\"#\">View More</a></td>
  </tr>
</table>

<style>
h1,
h2 {
  text-align: center;
}
header {
  h1 {
    font-family: \"Rammetto One\", cursive;
    margin-bottom: 0;
  }
  h2 {
    margin-top: 0;
    margin-bottom: 40px;
    font-family: \"Roboto\", sans-serif;
  }
}

table.responsive-table {
  display: flex;
  flex-direction: column;
  border: none;
  justify-content: center;
  align-items: center;
  a {
    text-decoration: none;
    padding: 3px 6px;
    border-radius: 6px 3px;
    border: 1px solid #298ffb;
    transition: all 0.1s ease-in-out;
  }
  a:hover {
    color: #fff;
    background: #73b7ff;
    transition: all 0.2s ease-in-out;
  }
}
td,
th {
  text-align: center;
  vertical-align: middle;
}
tr {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  border: 1px solid #eee;
  max-width: 400px;
  margin: 10px 10px 20px;
  padding: 20px;
  box-shadow: 0 5px 10px -5px #aaa;
      border-left: 10px solid #ffa1a1;
    border-bottom: none;

  &.table-header {
    align-self: center;
    display: none;
  }
}
td {
  font-family: \"Roboto\", sans-serif;
  display: flex;
  flex-direction: column;
}

.more-info a {
  color: #298ffb;
}

//getting into specific styles
.event {
  font-family: \"Rammetto One\", cursive;
  color: #ffa1a1;
}
td:not(.event) {
  text-align: left;
  margin-bottom: 5px;
  color: #777;
}
.desktop-fluff {
  display: none;
}

//mobile extras
td.price:before {
  content: \"Price:\";
  display: inline-block;
  margin-right: 5px;
}

td.price {
  display: flex;
  flex-direction: row;
}

td.location {
  font-weight: bold;
  display: flex;
  flex-direction: row;
}

td.location:before {
  content: \"@\";
  margin-right: 3px;
  position: relative;
  top: -1px;
}


@media (min-width: 350px) {
  td:not(.event) {
    margin-left: 30%;
    align-items: flex-start;
    display: flex;
  }

  td.event {
    align-self: center;
    margin-bottom: 14px;
  }
  td.event:after {
    display: block;
    content: \"\";
    width: 100%;
    height: 2px;
    background: #ffa1a1;
    position: relative;
    top: 3px;
  }
}

@media (min-width: 768px) {
  .desktop-fluff {
    display: initial;
  }
  table.responsive-table,
  tr,
  td,
  th {
    margin: 0 auto;
    border: 1px solid #eee;
    border-collapse: collapse;
  }
  table.responsive-table {
    display: table;
    a {
      text-decoration: underline;
      border: none;
      padding: initial;
    }
    a:hover {
      background: none;
      color: #73b7ff;
    }
    tr.table-header,
    tr {
      font-family: \"Roboto\", sans-serif;
      display: table-row;
      flex-direction: unset;
      justify-content: unset;
      align-items: unset;
      box-shadow: none;
    }
    td {
      max-width: unset;
      display: table-cell;
      &.event {
        font-family: \"Roboto\", sans-serif;
        color: #222;
        font-size: 16px;
        font-weight: 900;
        text-align: left;
      }
      &:not(.event){
        text-align: center;
      }
    }
  }

  tr {
    th,
    td {
      border: 1px solid #aaa;
      padding: 10px;
    }
    th {
      font-family: \"Rammetto One\", cursive;
      background: #4eb342;
      border-color: #44943b;
      color: white;
      text-shadow: -2px 2px black;
      font-weight: 100;
    }
  }

  //remove mobile extras
  td.price:before,
  td.location:before,
  table td.event:after {
    display: none;
  }

  td.price,
  td.location,
  td:not(.event) {
    display: table-cell;
  }
  table.responsive-table td:not(.event) {
    margin-left: auto;
    margin-bottom: auto;
    align-items: unset;
    display: table-cell;
  }

  td.event {
    align-self: unset;
    margin-bottom: 0;
  }
}

</style>
   





     


{% endblock %}", "offredemploi/index.html.twig", "/opt/lampp/htdocs/recrutement/templates/offredemploi/index.html.twig");
    }
}
