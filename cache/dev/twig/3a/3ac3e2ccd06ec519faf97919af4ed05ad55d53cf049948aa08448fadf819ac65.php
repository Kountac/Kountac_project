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

/* achats/index.html.twig */
class __TwigTemplate_13d86a34acb04b76b1d91b6fe19af74dcf9b61c72bde876fa43565e186a98f61 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutAdmin.html.twig", "achats/index.html.twig", 1);
        $this->blocks = [
            'bodyAdmin' => [$this, 'block_bodyAdmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achats/index.html.twig"));

        // line 2
        $context["total"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyAdmin($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyAdmin"));

        // line 4
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Home</a><span>&raquo;</span></li>
                    <li class=\"home\"> <a title=\"Aller à mon profil\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile_show");
        echo "\">Mon profil (admin)</a><span>&raquo;</span></li>
                    <li><strong>Tous les achats</strong></li>
                </ul>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                    <div class=\"alert-box\">
                        <br><br>
                        ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        <br><br>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
        </div>
    </div>
</div>
";
        // line 25
        echo "
<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            ";
        // line 34
        if ((twig_length_filter($this->env, ($context["achats"] ?? $this->getContext($context, "achats"))) != 0)) {
            // line 35
            echo "                                <h2>Liste de tous les achats kountac</h2>
                            ";
        }
        // line 37
        echo "                        </div>

                        <div class=\"order-detail-content\">
                        ";
        // line 40
        if ((twig_length_filter($this->env, ($context["achats"] ?? $this->getContext($context, "achats"))) == 0)) {
            // line 41
            echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Aucun Achat à afficher ";
            // line 44
            if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "sexe", [])) {
                echo "Mme.";
            } else {
                echo "M.";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", [])), "html", null, true);
            echo "</h1></center></td>
                                    </tr>
                                </table>
                            </div>  
                        ";
        } else {
            // line 49
            echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Références</th>
                                            <th>Description</th>
                                            <th>Prix total</th>
                                            <th  class=\"action\">Factures</th>
                                            <th  class=\"action\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["achats"] ?? $this->getContext($context, "achats")));
            foreach ($context['_seq'] as $context["_key"] => $context["achat"]) {
                // line 62
                echo "                                            ";
                if ( !$this->getAttribute($context["achat"], "cfa", [])) {
                    // line 63
                    echo "                                            <tr>
                                                <td class=\"action\">
                                                    ref : ";
                    // line 65
                    echo twig_escape_filter($this->env, sprintf($this->getAttribute($context["achat"], "reference", []), "4"), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Client</u> : ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["achat"], "utilisateur", [])), "html", null, true);
                    echo " </a></p>
                                                    <small><a>Acheté le : ";
                    // line 68
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["achat"], "date", []), "d M Y"), "html", null, true);
                    echo "</a></small><br>
                                                    ";
                    // line 69
                    if ($this->getAttribute($context["achat"], "effacer", [])) {
                        echo " <br><strong>Commande retirée par le client</strong>";
                    }
                    // line 70
                    echo "                                                </td>
                                                <td class=\"price\">
                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                    // line 72
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["achat"], "achat", []), "prix", []), 2), "html", null, true);
                    echo " €</span> </span></div>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Voir la facture pour la commande ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["achat"], "reference", []), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_PDF", ["id" => $this->getAttribute($context["achat"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-file\"></i></a>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Retirez achat ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["achat"], "reference", []), "html", null, true);
                    echo " de vos achats\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminAchats_delete", ["id" => $this->getAttribute($context["achat"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
                } else {
                    // line 82
                    echo "                                                <tr>
                                                <td class=\"action\">
                                                    ref : ";
                    // line 84
                    echo twig_escape_filter($this->env, sprintf($this->getAttribute($context["achat"], "reference", []), "4"), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Client</u> : ";
                    // line 86
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["achat"], "utilisateur", [])), "html", null, true);
                    echo " </a></p>
                                                    <small><a>Acheté le : ";
                    // line 87
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["achat"], "date", []), "d M Y"), "html", null, true);
                    echo "</a></small><br>
                                                    ";
                    // line 88
                    if ($this->getAttribute($context["achat"], "effacer", [])) {
                        echo " <br><strong>Commande retirée par le client</strong>";
                    }
                    // line 89
                    echo "                                                </td>
                                                <td class=\"price\">
                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                    // line 91
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["achat"], "achat", []), "prix", []), 2), "html", null, true);
                    echo " F CFA</span> </span></div>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Voir la facture pour la commande ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["achat"], "reference", []), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_PDF", ["id" => $this->getAttribute($context["achat"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-file\"></i></a>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Retirez achat ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["achat"], "reference", []), "html", null, true);
                    echo " de vos achats\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminAchats_delete", ["id" => $this->getAttribute($context["achat"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            ";
                }
                // line 101
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                    </tbody>
                                </table>
                            </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                ";
            // line 108
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["achats"] ?? $this->getContext($context, "achats")));
            echo "
                            </center>
                        ";
        }
        // line 111
        echo "                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        ";
        // line 117
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "achats/index.html.twig", 117)->display($context);
        // line 118
        echo "        <br><br>
        ";
        // line 119
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informations.html.twig", "achats/index.html.twig", 119)->display($context);
        // line 120
        echo "      </aside>
    </div>
  </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "achats/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 120,  290 => 119,  287 => 118,  285 => 117,  277 => 111,  271 => 108,  263 => 102,  257 => 101,  248 => 97,  240 => 94,  234 => 91,  230 => 89,  226 => 88,  222 => 87,  218 => 86,  213 => 84,  209 => 82,  200 => 78,  192 => 75,  186 => 72,  182 => 70,  178 => 69,  174 => 68,  170 => 67,  165 => 65,  161 => 63,  158 => 62,  154 => 61,  140 => 49,  124 => 44,  119 => 41,  117 => 40,  112 => 37,  108 => 35,  106 => 34,  95 => 25,  89 => 20,  79 => 16,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  54 => 4,  48 => 3,  41 => 1,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layoutAdmin.html.twig\" %}
{% set total = 0 %}
{% block bodyAdmin %}
<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path('kountac_homepage')}}\">Home</a><span>&raquo;</span></li>
                    <li class=\"home\"> <a title=\"Aller à mon profil\" href=\"{{ path('admin_profile_show')}}\">Mon profil (admin)</a><span>&raquo;</span></li>
                    <li><strong>Tous les achats</strong></li>
                </ul>
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert-box\">
                        <br><br>
                        {{ flashMessage }}
                        <br><br>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% trans_default_domain 'FOSUserBundle' %}

<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            {% if achats|length != 0 %}
                                <h2>Liste de tous les achats kountac</h2>
                            {% endif %}
                        </div>

                        <div class=\"order-detail-content\">
                        {% if achats|length == 0 %}
                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Aucun Achat à afficher {% if user.sexe %}Mme.{% else %}M.{% endif %} {{ user.prenom|capitalize }} {{ user.nom|capitalize }}</h1></center></td>
                                    </tr>
                                </table>
                            </div>  
                        {% else %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Références</th>
                                            <th>Description</th>
                                            <th>Prix total</th>
                                            <th  class=\"action\">Factures</th>
                                            <th  class=\"action\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for achat in achats %}
                                            {% if not achat.cfa %}
                                            <tr>
                                                <td class=\"action\">
                                                    ref : {{ achat.reference|format('4') }}
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Client</u> : {{ achat.utilisateur|capitalize }} </a></p>
                                                    <small><a>Acheté le : {{ achat.date|date('d M Y') }}</a></small><br>
                                                    {% if achat.effacer %} <br><strong>Commande retirée par le client</strong>{% endif %}
                                                </td>
                                                <td class=\"price\">
                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ achat.achat.prix|number_format(2) }} €</span> </span></div>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Voir la facture pour la commande {{ achat.reference }}\" href=\"{{ path('facture_PDF', {'id' : achat.id}) }}\"><i class=\"fa fa-file\"></i></a>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Retirez achat {{ achat.reference }} de vos achats\" href=\"{{ path('adminAchats_delete', {'id' : achat.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% else %}
                                                <tr>
                                                <td class=\"action\">
                                                    ref : {{ achat.reference|format('4') }}
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Client</u> : {{ achat.utilisateur|capitalize }} </a></p>
                                                    <small><a>Acheté le : {{ achat.date|date('d M Y') }}</a></small><br>
                                                    {% if achat.effacer %} <br><strong>Commande retirée par le client</strong>{% endif %}
                                                </td>
                                                <td class=\"price\">
                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ achat.achat.prix|number_format(2) }} F CFA</span> </span></div>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Voir la facture pour la commande {{ achat.reference }}\" href=\"{{ path('facture_PDF', {'id' : achat.id}) }}\"><i class=\"fa fa-file\"></i></a>
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Retirez achat {{ achat.reference }} de vos achats\" href=\"{{ path('adminAchats_delete', {'id' : achat.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                            {% endif %}
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                {{ knp_pagination_render(achats) }}
                            </center>
                        {% endif %}
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        {% include 'FOSUserBundle:Profile:Navigation/menuAdmin.html.twig' %}
        <br><br>
        {% include 'FOSUserBundle:Profile:Navigation/informations.html.twig' %}
      </aside>
    </div>
  </div>
  </section>
{% endblock %}", "achats/index.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\achats\\index.html.twig");
    }
}
