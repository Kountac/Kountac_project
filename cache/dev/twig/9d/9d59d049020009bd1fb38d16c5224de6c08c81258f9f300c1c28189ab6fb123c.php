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

/* KountacBundle:Menu:categories.html.twig */
class __TwigTemplate_c2ecfe0cc3252931dd5bf9d750f0754b4b5a5ae9038b10192920c50d3a0a1114 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:categories.html.twig"));

        // line 1
        echo "<li class=\"mt-root\">
    <div class=\"mt-root-item\">
        <a href=\"#\"><div class=\"title title_font\"><span class=\"title-text\">Idées look</span></div></a>
    </div>
    <ul class=\"menu-items col-xs-12\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["looks"] ?? $this->getContext($context, "looks")));
        foreach ($context['_seq'] as $context["_key"] => $context["look"]) {
            // line 7
            echo "        <li class=\"menu-item depth-1 menucol-1-3 \">
            <div class=\"title title_font\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idees_look", ["look" => $this->getAttribute($context["look"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["look"], "nom", []), "html", null, true);
            echo "</a></div>
            <ul class=\"submenu\">
            </ul>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['look'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
</li>
   
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "    <li class=\"mt-root\">
        <div class=\"mt-root-item\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_1", ["categorie" => $this->getAttribute($context["categorie"], "id", [])]), "html", null, true);
            echo "\"><div class=\"title title_font\"><span class=\"title-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", []), "html", null, true);
            echo "</span></div></a>
        </div>
        <ul class=\"menu-items col-xs-12\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
                // line 23
                echo "            <li class=\"menu-item depth-1 menucol-1-3 \">
                <div class=\"title title_font\"><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "nom", []), "html", null, true);
                echo "</a></div>
                <ul class=\"submenu\">
                    ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["souscategorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["souscategorie2"]) {
                    // line 27
                    echo "                        <li class=\"menu-item\">
                            <div class=\"title\"> <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($context["souscategorie2"], "id", [])]), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie2"], "nom", []), "html", null, true);
                    echo " </a></div>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    <li class=\"menu-item\">
                        <div class=\"title\"> <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_categorie", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\"> Nouveautés </a></div>
                    </li>
                    ";
                // line 34
                if ((($this->getAttribute($context["categorie"], "nom", []) == "Femmes") || ($this->getAttribute($context["categorie"], "nom", []) == "Hommes"))) {
                    // line 35
                    echo "                        ";
                    $context["lien"] = ((twig_lower_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])) . "_surmesure") . $this->getAttribute($context["souscategorie"], "nom", []));
                    // line 36
                    echo "                        <li class=\"menu-item\">
                            <div class=\"title\"> <a href=\"";
                    // line 37
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["lien"] ?? $this->getContext($context, "lien")));
                    echo "\"> Sur mésure </a></div>
                        </li>
                    ";
                }
                // line 40
                echo "                    <li class=\"menu-item\">
                        <div class=\"title\"> <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("best_categorie", ["categorie" => $this->getAttribute($context["souscategorie"], "id", [])]), "html", null, true);
                echo "\"> Déstockages </a></div>
                    </li>
                </ul>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </ul>
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
        return "KountacBundle:Menu:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  138 => 41,  135 => 40,  129 => 37,  126 => 36,  123 => 35,  121 => 34,  116 => 32,  113 => 31,  102 => 28,  99 => 27,  95 => 26,  88 => 24,  85 => 23,  81 => 22,  73 => 19,  69 => 17,  65 => 16,  60 => 13,  47 => 8,  44 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"mt-root\">
    <div class=\"mt-root-item\">
        <a href=\"#\"><div class=\"title title_font\"><span class=\"title-text\">Idées look</span></div></a>
    </div>
    <ul class=\"menu-items col-xs-12\">
        {% for look in looks %}
        <li class=\"menu-item depth-1 menucol-1-3 \">
            <div class=\"title title_font\"><a href=\"{{ path('idees_look', { 'look' : look.id}) }}\">{{ look.nom }}</a></div>
            <ul class=\"submenu\">
            </ul>
        </li>
        {% endfor %}
    </ul>
</li>
   
{% for categorie in categories %}
    <li class=\"mt-root\">
        <div class=\"mt-root-item\">
            <a href=\"{{ path('categorie_1', { 'categorie' : categorie.id}) }}\"><div class=\"title title_font\"><span class=\"title-text\">{{ categorie.nom }}</span></div></a>
        </div>
        <ul class=\"menu-items col-xs-12\">
            {% for souscategorie in categorie.children %}
            <li class=\"menu-item depth-1 menucol-1-3 \">
                <div class=\"title title_font\"><a href=\"{{ path('categorie_2', { 'categorie' : souscategorie.id}) }}\">{{ souscategorie.nom }}</a></div>
                <ul class=\"submenu\">
                    {% for souscategorie2 in souscategorie.children %}
                        <li class=\"menu-item\">
                            <div class=\"title\"> <a href=\"{{ path('categorie_2', { 'categorie' : souscategorie2.id}) }}\"> {{ souscategorie2.nom }} </a></div>
                        </li>
                    {% endfor %}
                    <li class=\"menu-item\">
                        <div class=\"title\"> <a href=\"{{ path('new_categorie', { 'categorie' : souscategorie.id}) }}\"> Nouveautés </a></div>
                    </li>
                    {% if categorie.nom == \"Femmes\" or categorie.nom == \"Hommes\"  %}
                        {% set lien = categorie.nom|lower ~\"_surmesure\"~souscategorie.nom %}
                        <li class=\"menu-item\">
                            <div class=\"title\"> <a href=\"{{ path(lien) }}\"> Sur mésure </a></div>
                        </li>
                    {% endif %}
                    <li class=\"menu-item\">
                        <div class=\"title\"> <a href=\"{{ path('best_categorie', { 'categorie' : souscategorie.id}) }}\"> Déstockages </a></div>
                    </li>
                </ul>
            </li>
            {% endfor %}
          </ul>
    </li>
{% endfor %}
", "KountacBundle:Menu:categories.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/categories.html.twig");
    }
}
