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

/* KountacBundle:Menu:categoriesAdmin.html.twig */
class __TwigTemplate_e307168ab8a06816be98c49ebde77285be0f33edfedb1746eda25569057e35c3 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:categoriesAdmin.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li class=\"megamenu\"><a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
            echo " </a>
        <div class=\"mega-menu\"> 
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
                // line 5
                echo "            <span> 
                <a class=\"mega-title\"> ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom", []), "html", null, true);
                echo " </a> 
                ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["souscategorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["souscategorie2"]) {
                    // line 8
                    echo "                    <a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie2"], "nom", []), "html", null, true);
                    echo " </a> 
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_categorie", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\"> Nouveautés </a> 
                    <a> Déstockages </a> 
            </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:categoriesAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  67 => 10,  58 => 8,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for categorie in categories %}
    <li class=\"megamenu\"><a> {{ categorie.nom }} </a>
        <div class=\"mega-menu\"> 
            {% for souscategorie in categorie.children %}
            <span> 
                <a class=\"mega-title\"> {{ souscategorie.nom }} </a> 
                {% for souscategorie2 in souscategorie.children %}
                    <a> {{ souscategorie2.nom }} </a> 
                {% endfor %}
                    <a href=\"{{ path('new_categorie', { 'categorie' : souscategorie.id}) }}\"> Nouveautés </a> 
                    <a> Déstockages </a> 
            </span>
            {% endfor %}
        </div>
    </li>
{% endfor %}", "KountacBundle:Menu:categoriesAdmin.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/categoriesAdmin.html.twig");
    }
}
