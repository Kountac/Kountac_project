<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* KountacBundle:Menu:categoriesMobile.html.twig */
class __TwigTemplate_58053ed9fc3d55601423274eb3ba31a8cb245e6c393e23935633e16aab7c9ce6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:categoriesMobile.html.twig"));

        // line 1
        echo "<li><a href=\"\">Idées look</a>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["looks"] ?? $this->getContext($context, "looks")));
        foreach ($context['_seq'] as $context["_key"] => $context["look"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idees_look", ["look" => $this->getAttribute($context["look"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["look"], "nom", []), "html", null, true);
            echo "</a>
      <ul>
          
      </ul>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['look'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
</li>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_1", ["categorie" => $this->getAttribute($context["categorie"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
            echo "</a>
<ul>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
                // line 16
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom", []), "html", null, true);
                echo "</a>
      <ul>
          ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["souscategorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["souscategorie2"]) {
                    // line 19
                    echo "          <li> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($context["souscategorie2"], "id", [])]), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie2"], "nom", []), "html", null, true);
                    echo " </a> </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "          <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_categorie", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\"> Nouveautés </a> </li>
          <li> <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("best_categorie", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\"> Déstockages </a> </li>
      </ul>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</ul>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<li><a href=\"\">Sur mesure</a>
<ul>
    <li><a href=\"\">Femmes</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"\">Hommes</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"\">Enfants</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
</ul>
</li>
<li><a href=\"\">Déstockages</a>
<ul>
    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("femmes_destockage");
        echo "\">Femmes</a>
      <ul>
          <li> <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("femmes_destockageHauts");
        echo "\"> Hauts </a> </li>
          <li> <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("femmes_destockageBas");
        echo "\"> Bas </a> </li>
          <li> <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("femmes_destockageEnsembles");
        echo "\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hommes_destockage");
        echo "\">Hommes</a>
      <ul>
          <li> <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("femmes_destockageHauts");
        echo "\"> Hauts </a> </li>
          <li> <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hommes_destockageBas");
        echo "\"> Bas </a> </li>
          <li> <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hommes_destockageEnsembles");
        echo "\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfants_destockage");
        echo "\">Enfants</a>
      <ul>
          <li> <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfants_destockageHauts");
        echo "\"> Hauts </a> </li>
          <li> <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfants_destockageBas");
        echo "\"> Bas </a> </li>
          <li> <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enfants_destockageEnsembles");
        echo "\"> Ensembles </a> </li>
      </ul>
    </li>
</ul>
</li>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:categoriesMobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  198 => 73,  194 => 72,  189 => 70,  183 => 67,  179 => 66,  175 => 65,  170 => 63,  164 => 60,  160 => 59,  156 => 58,  151 => 56,  122 => 29,  114 => 26,  104 => 22,  99 => 21,  88 => 19,  84 => 18,  76 => 16,  72 => 15,  64 => 13,  60 => 12,  56 => 10,  41 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li><a href=\"\">Idées look</a>
<ul>
    {% for look in looks %}
    <li><a href=\"{{ path('idees_look', { 'look' : look.id}) }}\">{{ look.nom }}</a>
      <ul>
          
      </ul>
    </li>
    {% endfor %}
</ul>
</li>
{% for categorie in categories %}
<li><a href=\"{{ path('categorie_1', { 'categorie' : categorie.id}) }}\">{{ categorie.nom }}</a>
<ul>
    {% for souscategorie in categorie.children %}
    <li><a href=\"{{ path('categorie_2', { 'categorie' : souscategorie.id}) }}\">{{ souscategorie.nom }}</a>
      <ul>
          {% for souscategorie2 in souscategorie.children %}
          <li> <a href=\"{{ path('categorie_2', { 'categorie' : souscategorie2.id}) }}\"> {{ souscategorie2.nom }} </a> </li>
          {% endfor %}
          <li> <a href=\"{{ path('new_categorie', { 'categorie' : souscategorie.id}) }}\"> Nouveautés </a> </li>
          <li> <a href=\"{{ path('best_categorie', { 'categorie' : souscategorie.id}) }}\"> Déstockages </a> </li>
      </ul>
    </li>
    {% endfor %}
</ul>
</li>
{% endfor %}
<li><a href=\"\">Sur mesure</a>
<ul>
    <li><a href=\"\">Femmes</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"\">Hommes</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"\">Enfants</a>
      <ul>
          <li> <a href=\"\"> Hauts </a> </li>
          <li> <a href=\"\"> Bas </a> </li>
          <li> <a href=\"\"> Ensembles </a> </li>
      </ul>
    </li>
</ul>
</li>
<li><a href=\"\">Déstockages</a>
<ul>
    <li><a href=\"{{ path('femmes_destockage') }}\">Femmes</a>
      <ul>
          <li> <a href=\"{{ path('femmes_destockageHauts') }}\"> Hauts </a> </li>
          <li> <a href=\"{{ path('femmes_destockageBas') }}\"> Bas </a> </li>
          <li> <a href=\"{{ path('femmes_destockageEnsembles') }}\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"{{ path('hommes_destockage') }}\">Hommes</a>
      <ul>
          <li> <a href=\"{{ path('femmes_destockageHauts') }}\"> Hauts </a> </li>
          <li> <a href=\"{{ path('hommes_destockageBas') }}\"> Bas </a> </li>
          <li> <a href=\"{{ path('hommes_destockageEnsembles') }}\"> Ensembles </a> </li>
      </ul>
    </li>
    <li><a href=\"{{ path('enfants_destockage') }}\">Enfants</a>
      <ul>
          <li> <a href=\"{{ path('enfants_destockageHauts') }}\"> Hauts </a> </li>
          <li> <a href=\"{{ path('enfants_destockageBas') }}\"> Bas </a> </li>
          <li> <a href=\"{{ path('enfants_destockageEnsembles') }}\"> Ensembles </a> </li>
      </ul>
    </li>
</ul>
</li>", "KountacBundle:Menu:categoriesMobile.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/categoriesMobile.html.twig");
    }
}
