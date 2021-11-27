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
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offredemploi"]) || array_key_exists("offredemploi", $context) ? $context["offredemploi"] : (function () { throw new RuntimeError('Variable "offredemploi" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        





<section id=\"commentaires\">
    <h1>";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offredemploi"]) || array_key_exists("offredemploi", $context) ? $context["offredemploi"] : (function () { throw new RuntimeError('Variable "offredemploi" does not exist.', 16, $this->source); })()), "commentaires", [], "any", false, false, false, 16)), "html", null, true);
            echo " commentaires : </h1>
   ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offredemploi"]) || array_key_exists("offredemploi", $context) ? $context["offredemploi"] : (function () { throw new RuntimeError('Variable "offredemploi" does not exist.', 17, $this->source); })()), "commentaires", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 18
                echo "   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nomutilisateur", [], "any", false, false, false, 21), "html", null, true);
                echo "(<small>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 21), "d/m/y à H:i"), "html", null, true);
                echo "</small>)
           </div>
           <div class=\"col-9\">
              ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "text", [], "any", false, false, false, 24);
                echo "
           </div>
       </div>

   </div>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "


   ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 33, $this->source); })()), 'form_start');
            echo "
   ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 34, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
            echo "
   ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 35, $this->source); })()), "text", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 38, $this->source); })()), 'form_end');
            echo "
﻿<section id=\"commentaires\">
    <h1>";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offredemploi"]) || array_key_exists("offredemploi", $context) ? $context["offredemploi"] : (function () { throw new RuntimeError('Variable "offredemploi" does not exist.', 40, $this->source); })()), "commentaires", [], "any", false, false, false, 40)), "html", null, true);
            echo " commentaires : </h1>
   ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offredemploi"]) || array_key_exists("offredemploi", $context) ? $context["offredemploi"] : (function () { throw new RuntimeError('Variable "offredemploi" does not exist.', 41, $this->source); })()), "commentaires", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 42
                echo "   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nomutilisateur", [], "any", false, false, false, 45), "html", null, true);
                echo "(<small>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 45), "d/m/y à H:i"), "html", null, true);
                echo "</small>)
           </div>
           <div class=\"col-9\">
              ";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "text", [], "any", false, false, false, 48);
                echo "
           </div>
       </div>

   </div>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "


   ";
            // line 57
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 57, $this->source); })()), 'form_start');
            echo "
   ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 58, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
            echo "
   ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 59, $this->source); })()), "text", [], "any", false, false, false, 59), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   ";
            // line 62
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 62, $this->source); })()), 'form_end');
            echo "
﻿




  <style>




</style>
     
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
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
        return array (  234 => 76,  214 => 62,  208 => 59,  204 => 58,  200 => 57,  195 => 54,  183 => 48,  175 => 45,  170 => 42,  166 => 41,  162 => 40,  157 => 38,  151 => 35,  147 => 34,  143 => 33,  138 => 30,  126 => 24,  118 => 21,  113 => 18,  109 => 17,  105 => 16,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello OffredemploiController!{% endblock %}

{% block body %}

<h1>nos offres d'emplois</h1>
{% for item in offredemploi %}
        





<section id=\"commentaires\">
    <h1>{{ offredemploi.commentaires | length }} commentaires : </h1>
   {% for commentaire in offredemploi.commentaires %}
   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              {{commentaire.nomutilisateur}}(<small>{{ commentaire.createdAt| date('d/m/y à H:i' )}}</small>)
           </div>
           <div class=\"col-9\">
              {{commentaire.text | raw}}
           </div>
       </div>

   </div>
   {% endfor %}



   {{ form_start(commentaireForm) }}
   {{ form_row(commentaireForm.nomutilisateur, {'attr': {'placeholder': \"Votre nom\"}}) }}
   {{ form_row(commentaireForm.text, {'attr': {'placeholder': \"Votre commentaire\"}}) }}

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   {{ form_end(commentaireForm) }}
﻿<section id=\"commentaires\">
    <h1>{{ offredemploi.commentaires | length }} commentaires : </h1>
   {% for commentaire in offredemploi.commentaires %}
   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              {{commentaire.nomutilisateur}}(<small>{{ commentaire.createdAt| date('d/m/y à H:i' )}}</small>)
           </div>
           <div class=\"col-9\">
              {{commentaire.text | raw}}
           </div>
       </div>

   </div>
   {% endfor %}



   {{ form_start(commentaireForm) }}
   {{ form_row(commentaireForm.nomutilisateur, {'attr': {'placeholder': \"Votre nom\"}}) }}
   {{ form_row(commentaireForm.text, {'attr': {'placeholder': \"Votre commentaire\"}}) }}

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   {{ form_end(commentaireForm) }}
﻿




  <style>




</style>
     
{% endfor %}

{% endblock %}", "offredemploi/index.html.twig", "/opt/lampp/htdocs/recrutement/templates/offredemploi/index.html.twig");
    }
}
