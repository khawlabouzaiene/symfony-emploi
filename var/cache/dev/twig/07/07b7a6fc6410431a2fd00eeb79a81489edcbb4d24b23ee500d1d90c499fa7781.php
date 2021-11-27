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
<div class=\"frame\"></div>
<style>
.frame {
  height: 90vh;
  width: 100%;
  margin: 5vh 5vw;
  background-color: #eee;
  background-size: cover;
  
  animation: image 3s infinite alternate;
}

@keyframes image {
  0% {
    background-image: url('https://www.anthedesign.fr/w2015/wp-content/uploads/2014/02/emploi-sur-internet.jpg');
  }
  100% {
    background-image: url('https://www.lesmotspositifs.com/wp-content/uploads/2019/08/emploi_de_reve_citation.jpg');
  }
}
</style>
 <div id=\"container\">
 
    
    <!-- Each image is 200px by 200px -->
    <div class=\"photobanner\">
    \t<img class=\"first\" src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://pbs.twimg.com/profile_images/943414229243179008/JlhIxNlN_400x400.jpg\" alt=\"\" />
    \t<img src=\"https://pbs.twimg.com/profile_images/324953065/JitLogoSloganBgVert1.jpg\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/car\" alt=\"\" />
    </div>
</div>

<style>
* {margin: 0; padding: 0;}


#container {
\twidth: 1000px;
\toverflow: hidden;
\tmargin: 50px auto;
\tbackground: red;
}

/*header*/
header {
\twidth: 800px;
\tmargin: 40px auto;
}



/*photobanner*/

.photobanner {
\theight: 233px;
\twidth: 3550px;
\tmargin-bottom: 80px;
}

/*keyframe animations*/
.first {
\t-webkit-animation: bannermove 40s linear infinite;
\t   -moz-animation: bannermove 40s linear infinite;
\t    -ms-animation: bannermove 40s linear infinite;
\t     -o-animation: bannermove 40s linear infinite;
\t        animation: bannermove 40s linear infinite;
}

@keyframes \"bannermove\" {
 0% {
    margin-left: 0px;
 }
 100% {
    margin-left: -1250px;
 }

}



@-webkit-keyframes \"bannermove\" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1250px;
 }

}




</style>



         

       

    <section id=\"about\">
      <div class=\"about-wrapper container\">
        <div class=\"about-text\">
          <p class=\"small\">About Us</p>
          <h2> Votre nouveau travail commence ici.</h2>
          <p>
             

Hé, vous méritez une chance de trouver un bon travail. Pour améliorer votre situation. Maintenant, peut-être que vous avez déjà essayé des agences de recrutements. Mais ici c’est différent. Nous avons des centaines d’emplois à travers le pays. Et vous avez juste besoin d’un bon. Alors qu’est-ce que vous attendez? Trouvez-le aujourd’hui et commencez à travailler!

          </p>
        </div>
        <div class=\"about-img\">
          <img src=\"https://media.gettyimages.com/vectors/job-search-and-interview-standing-in-a-row-of-job-seekers-vector-id1169300752?s=612x612\" alt=\"emplois\" />
        </div>
      </div>
    </section>
<div class=\"wrapper\">
\t<div class=\"photobanner\">
  <img src=\" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxvbLYqn7UGwTgOHlcgctIfqTl_Dr7XKl5ng&usqp=CAU\" alt=\"\" />
  <img src=\"https://www.mediavox.com/uploads/l/201611161500565598249.jpg \" alt=\"\" />
  <img src=\"https://www.mediavox.com/uploads/l/201804180950123867617.jpg \" alt =\"\"/>
  <img src=\"https://i2.wp.com/www.recruter.tn/wp-content/uploads/2021/10/emplois_recruter_-Enregistrement-automatique-51.jpg?resize=840%2C430&ssl=1\" alt=\"\" />
  <img src=\"https://f.hellowork.com/helloworkplace/2020/12/lecons-publicitaire-bien-rediger-annonce-emploi.jpg \" alt=\"\" />
  <img src=\"https://cleversms.fr/wp-content/uploads/2017/01/Stop-par-SMS.jpg\" alt=\"\" />
  <img src=\"https://www.tourmag.com/photo/art/grande/50975673-39224881.jpg?v=1603879559\" alt=\"\" />
  <img src=\"https://blog.flatchr.io/hs-fs/hubfs/11-min.png?width=504&name=11-min.png\" alt=\"\" />
  <img src=\" https://thumbs.dreamstime.com/z/travailleur-de-travail-travaux-d-affiche-la-publicit%C3%A9-demande-emploi-pour-les-sur-un-mur-142665579.jpg\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
</div>
</div>
<style>
\t.wrapper {
\twidth: 100%;
\toverflow: hidden;
}
.photobanner {
\tposition: relative;
\theight: 233px;
\tmargin-bottom: 30px;
\tdisplay: flex;
\twidth: 100%;
}

.photobanner img {
  margin: 0px 25px;
  box-shadow: 2px 2px 8px #8a8a8a;
}

.photobanner {
  animation: bannermove 50s linear infinite alternate-reverse;
}

@keyframes bannermove {
  from {
    left: 0px;
  }
  to {
    left: -2700px;
  }
}





\t
    }
}






  


 
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>











<style>
/* ......//about us//...... */

#about {
  padding: 50px 0;
  background: #f5f5f7;
}

.about-wrapper {
  display: flex;
  flex-wrap: wrap;
}

#about h2 {
  font-size: 2.3rem;
}

#about p {
  font-size: 1.2rem;
  color: #555;
}

#about .small {
  font-size: 1.2rem;
  color: #666;
  font-weight: 600;
}

.about-img {
  flex: 1 1 400px;
  padding: 30px;
  transform: translateX(150%);
  animation: about-img-animation 1s ease-in-out forwards;
}

@keyframes about-img-animation {
  100% {
    transform: translate(0);
  }
}

.about-text {
  flex: 1 1 400px;
  padding: 30px;
  margin: auto;
  transform: translate(-150%);
  animation: about-text-animation 1s ease-in-out forwards;
}

@keyframes about-text-animation {
  100% {
    transform: translate(0);
  }
}

.about-img img {
  display: block;
  height: 400px;
  max-width: 100%;
  margin: auto;
  object-fit: cover;
  object-position: right;
}

</style>

<h1 style=\"color:green;text-align:center;\">les types des offres d'emplois</h1>



  </div>
</div>
<div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 1000 Commerciaux terrain</h2>
    <p>L'agence emploi jeunes procède au recrutement de 1000

     agents commerciaux terrain pour un contrat stage pré-emploi.
      L'activité s’effectuera sur toute 
    l’étendue du territoire.  Les candidatures…
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
 <br></br>
 <div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 10 assistants Ressources Humaines</h2>
    <p>

    L'agence emploi jeunes procède au recrutement de 10  Assistant Ressources
     Humaines pour un contrat stage-école. L'activité s’effectuera à Abengourou. 
     Les candidatures masculines et féminines 
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
<br></br>
 <div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 03 Auxiliaires en Pharmacie </h2>
    <p>L'agence emploi jeunes procède au recrutement de 03  Auxiliaire en Pharmacie pour un contrat stage-école. L'activité s’effectuera à Niakara.
      Les candidatures masculines et féminines sont acceptées
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
<div class=\"profile-userbuttons\">
        <a href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" > <button type=\"button\" class=\"btn btn-danger btn-sm\">voir toutes les offres</button></a>
      </div>






 

<style>
.picture-left{
    float: left;
}
 
.div-categoryContainer{
    padding: 10px;
}
 
.paragraph-right {
  margin-top : 50px;

}

</style>




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
        return array (  417 => 321,  291 => 198,  286 => 196,  282 => 195,  278 => 194,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RecruteurController!{% endblock %}

{% block body %}
 
<div class=\"frame\"></div>
<style>
.frame {
  height: 90vh;
  width: 100%;
  margin: 5vh 5vw;
  background-color: #eee;
  background-size: cover;
  
  animation: image 3s infinite alternate;
}

@keyframes image {
  0% {
    background-image: url('https://www.anthedesign.fr/w2015/wp-content/uploads/2014/02/emploi-sur-internet.jpg');
  }
  100% {
    background-image: url('https://www.lesmotspositifs.com/wp-content/uploads/2019/08/emploi_de_reve_citation.jpg');
  }
}
</style>
 <div id=\"container\">
 
    
    <!-- Each image is 200px by 200px -->
    <div class=\"photobanner\">
    \t<img class=\"first\" src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://pbs.twimg.com/profile_images/943414229243179008/JlhIxNlN_400x400.jpg\" alt=\"\" />
    \t<img src=\"https://pbs.twimg.com/profile_images/324953065/JitLogoSloganBgVert1.jpg\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/tech\" alt=\"\" />
    \t<img src=\"https://placeimg.com/200/200/car\" alt=\"\" />
    </div>
</div>

<style>
* {margin: 0; padding: 0;}


#container {
\twidth: 1000px;
\toverflow: hidden;
\tmargin: 50px auto;
\tbackground: red;
}

/*header*/
header {
\twidth: 800px;
\tmargin: 40px auto;
}



/*photobanner*/

.photobanner {
\theight: 233px;
\twidth: 3550px;
\tmargin-bottom: 80px;
}

/*keyframe animations*/
.first {
\t-webkit-animation: bannermove 40s linear infinite;
\t   -moz-animation: bannermove 40s linear infinite;
\t    -ms-animation: bannermove 40s linear infinite;
\t     -o-animation: bannermove 40s linear infinite;
\t        animation: bannermove 40s linear infinite;
}

@keyframes \"bannermove\" {
 0% {
    margin-left: 0px;
 }
 100% {
    margin-left: -1250px;
 }

}



@-webkit-keyframes \"bannermove\" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -1250px;
 }

}




</style>



         

       

    <section id=\"about\">
      <div class=\"about-wrapper container\">
        <div class=\"about-text\">
          <p class=\"small\">About Us</p>
          <h2> Votre nouveau travail commence ici.</h2>
          <p>
             

Hé, vous méritez une chance de trouver un bon travail. Pour améliorer votre situation. Maintenant, peut-être que vous avez déjà essayé des agences de recrutements. Mais ici c’est différent. Nous avons des centaines d’emplois à travers le pays. Et vous avez juste besoin d’un bon. Alors qu’est-ce que vous attendez? Trouvez-le aujourd’hui et commencez à travailler!

          </p>
        </div>
        <div class=\"about-img\">
          <img src=\"https://media.gettyimages.com/vectors/job-search-and-interview-standing-in-a-row-of-job-seekers-vector-id1169300752?s=612x612\" alt=\"emplois\" />
        </div>
      </div>
    </section>
<div class=\"wrapper\">
\t<div class=\"photobanner\">
  <img src=\" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxvbLYqn7UGwTgOHlcgctIfqTl_Dr7XKl5ng&usqp=CAU\" alt=\"\" />
  <img src=\"https://www.mediavox.com/uploads/l/201611161500565598249.jpg \" alt=\"\" />
  <img src=\"https://www.mediavox.com/uploads/l/201804180950123867617.jpg \" alt =\"\"/>
  <img src=\"https://i2.wp.com/www.recruter.tn/wp-content/uploads/2021/10/emplois_recruter_-Enregistrement-automatique-51.jpg?resize=840%2C430&ssl=1\" alt=\"\" />
  <img src=\"https://f.hellowork.com/helloworkplace/2020/12/lecons-publicitaire-bien-rediger-annonce-emploi.jpg \" alt=\"\" />
  <img src=\"https://cleversms.fr/wp-content/uploads/2017/01/Stop-par-SMS.jpg\" alt=\"\" />
  <img src=\"https://www.tourmag.com/photo/art/grande/50975673-39224881.jpg?v=1603879559\" alt=\"\" />
  <img src=\"https://blog.flatchr.io/hs-fs/hubfs/11-min.png?width=504&name=11-min.png\" alt=\"\" />
  <img src=\" https://thumbs.dreamstime.com/z/travailleur-de-travail-travaux-d-affiche-la-publicit%C3%A9-demande-emploi-pour-les-sur-un-mur-142665579.jpg\" />
  <img src=\"https://i.ibb.co/DfbLcN1/photo-1426901013385-803d40bd5558.jpg \" alt=\"\" />
</div>
</div>
<style>
\t.wrapper {
\twidth: 100%;
\toverflow: hidden;
}
.photobanner {
\tposition: relative;
\theight: 233px;
\tmargin-bottom: 30px;
\tdisplay: flex;
\twidth: 100%;
}

.photobanner img {
  margin: 0px 25px;
  box-shadow: 2px 2px 8px #8a8a8a;
}

.photobanner {
  animation: bannermove 50s linear infinite alternate-reverse;
}

@keyframes bannermove {
  from {
    left: 0px;
  }
  to {
    left: -2700px;
  }
}





\t
    }
}






  


 
    <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery-3.5.1.slim.min.js')}}\"></script>
    <script src=\"{{ asset('js/popper.min.js')}}\"></script>

    <script src=\"{{ asset('js/index.js')}}\"></script>











<style>
/* ......//about us//...... */

#about {
  padding: 50px 0;
  background: #f5f5f7;
}

.about-wrapper {
  display: flex;
  flex-wrap: wrap;
}

#about h2 {
  font-size: 2.3rem;
}

#about p {
  font-size: 1.2rem;
  color: #555;
}

#about .small {
  font-size: 1.2rem;
  color: #666;
  font-weight: 600;
}

.about-img {
  flex: 1 1 400px;
  padding: 30px;
  transform: translateX(150%);
  animation: about-img-animation 1s ease-in-out forwards;
}

@keyframes about-img-animation {
  100% {
    transform: translate(0);
  }
}

.about-text {
  flex: 1 1 400px;
  padding: 30px;
  margin: auto;
  transform: translate(-150%);
  animation: about-text-animation 1s ease-in-out forwards;
}

@keyframes about-text-animation {
  100% {
    transform: translate(0);
  }
}

.about-img img {
  display: block;
  height: 400px;
  max-width: 100%;
  margin: auto;
  object-fit: cover;
  object-position: right;
}

</style>

<h1 style=\"color:green;text-align:center;\">les types des offres d'emplois</h1>



  </div>
</div>
<div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 1000 Commerciaux terrain</h2>
    <p>L'agence emploi jeunes procède au recrutement de 1000

     agents commerciaux terrain pour un contrat stage pré-emploi.
      L'activité s’effectuera sur toute 
    l’étendue du territoire.  Les candidatures…
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
 <br></br>
 <div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 10 assistants Ressources Humaines</h2>
    <p>

    L'agence emploi jeunes procède au recrutement de 10  Assistant Ressources
     Humaines pour un contrat stage-école. L'activité s’effectuera à Abengourou. 
     Les candidatures masculines et féminines 
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
<br></br>
 <div class=\"div-categoryContainer\">
 <img src=\"https://cdn.tutsplus.com/vector/uploads/2014/03/gem-PW-diamond.jpg\" class=\"picture-left\">
  <div class=\"paragraph-right\">
    <h2 style=\"color:red;\">Recrutement de 03 Auxiliaires en Pharmacie </h2>
    <p>L'agence emploi jeunes procède au recrutement de 03  Auxiliaire en Pharmacie pour un contrat stage-école. L'activité s’effectuera à Niakara.
      Les candidatures masculines et féminines sont acceptées
    </p>
      <a href=\"#\" class=\"btn btn-primary\">envoyer à un ami</a>
  </div>
</div>
<div class=\"profile-userbuttons\">
        <a href=\"{{path('contact')}}\" > <button type=\"button\" class=\"btn btn-danger btn-sm\">voir toutes les offres</button></a>
      </div>






 

<style>
.picture-left{
    float: left;
}
 
.div-categoryContainer{
    padding: 10px;
}
 
.paragraph-right {
  margin-top : 50px;

}

</style>




 {% endblock %}

   





























", "home/index.html.twig", "/opt/lampp/htdocs/recrutement/templates/home/index.html.twig");
    }
}
