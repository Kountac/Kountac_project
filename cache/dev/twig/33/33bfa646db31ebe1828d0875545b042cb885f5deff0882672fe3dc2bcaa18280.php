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

/* utilisateurs/index.html.twig */
class __TwigTemplate_4498d03ccf6cbb6c00c2b6f781a33f3fa077d68c51aecdb8a98a499f9da2703d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutAdmin.html.twig", "utilisateurs/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyAdmin($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyAdmin"));

        // line 4
        echo "    <div class=\"breadcrumbs\">
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
                        <li><strong>Tous les utilisateurs</strong></li>
                    </ul>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                        <div class=\"alert-box\">
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
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    
    <section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            ";
        // line 33
        if ((twig_length_filter($this->env, ($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs"))) != 0)) {
            // line 34
            echo "                                <h2>Liste de tous les utilisateurs Kountac</h2>
                            ";
        }
        // line 36
        echo "                        </div>
                        <div class=\"order-detail-content\">
                        ";
        // line 38
        if ((twig_length_filter($this->env, ($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs"))) == 0)) {
            // line 39
            echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste d'utilisateurs vide. Aucun utilisateur à afficher</h1></center></td>
                                    </tr>
                                </table>
                            </div>  
                        ";
        } else {
            // line 47
            echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>A propos</th>
                                            <th>Type compte</th>
                                            <th>Etat</th>
                                            <th>Vérifier</th>
                                            <th>Dernière connexion</th>
                                            <th>Informations marque</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 63
                echo "                                            <tr>
                                                <td class=\"action\"><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_show", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", []), "html", null, true);
                echo " </a></td>
                                                <td class=\"cart_description\"><p class=\"product-name\">";
                // line 65
                if ($this->getAttribute($context["utilisateur"], "sexe", [])) {
                    echo "Mme. ";
                } else {
                    echo "M. ";
                }
                echo " 
                                                    <strong>";
                // line 66
                if ($this->getAttribute($context["utilisateur"], "prenom", [])) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", [])), "html", null, true);
                    echo " ";
                }
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", [])), "html", null, true);
                echo "</strong><br>
                                                    <small><u>Email:</u> ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", []), "html", null, true);
                echo "<br>
                                                           <u>Adresse:</u> ";
                // line 68
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "adresse", [])), "html", null, true);
                echo "<br>
                                                           <u>Code postal:</u> ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "cp", []), "html", null, true);
                echo "<br>
                                                           <u>Rue:</u> ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rue", []), "html", null, true);
                echo "<br>
                                                           <u>Ville:</u> ";
                // line 71
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "ville", [])), "html", null, true);
                echo "<br>
                                                           <u>Pays:</u> ";
                // line 72
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "pays", [])), "html", null, true);
                echo "<br>
                                                           <u>Mobile:</u> ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephone", []), "html", null, true);
                echo "<br>
                                                        ";
                // line 74
                if ($this->getAttribute($context["utilisateur"], "telephonefix", [])) {
                    // line 75
                    echo "                                                            <u>Fixe:</u> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephonefix", []), "html", null, true);
                    echo "<br>
                                                        ";
                }
                // line 77
                echo "                                                           <br>
                                                    </small>
                                                </td>
                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">";
                // line 81
                if (($this->getAttribute($this->getAttribute($context["utilisateur"], "roles", []), 0, [], "array") == "ROLE_PRO")) {
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Marque"), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($this->getAttribute($context["utilisateur"], "roles", []), 1, [], "array") == "ROLE_ADMIN")) {
                        echo " (";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Administrateur"), "html", null, true);
                        echo ") ";
                    }
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Simple"), "html", null, true);
                    echo " ";
                }
                echo "</span>
                                                </td>
                                                ";
                // line 83
                if ($this->getAttribute($context["utilisateur"], "enabled", [])) {
                    // line 84
                    echo "                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Activé"), "html", null, true);
                    echo "</span><br>
                                                </td>
                                                ";
                } else {
                    // line 88
                    echo "                                                <td class=\"availability out-of-stock\">
                                                    <span class=\"label\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Bloqué"), "html", null, true);
                    echo "</span><br>
                                                </td>
                                                ";
                }
                // line 92
                echo "                                                <td class=\"action\">
                                                    
                                                    ";
                // line 94
                if (($this->getAttribute($context["utilisateur"], "verifier", []) != 1)) {
                    // line 95
                    echo "                                                    <a title=\"Valider la vérification\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_verify", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                    echo "\"><input type=\"checkbox\" data-toggle=\"toggle\"></a><br>
                                                    ";
                } else {
                    // line 97
                    echo "                                                    <a title=\"Annuler la vérification\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_unverify", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                    echo "\"><input type=\"checkbox\" checked data-toggle=\"toggle\"></i></a><br>
                                                    ";
                }
                // line 99
                echo "                                                </td>
                                                <td class=\"action\">
                                                    ";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["utilisateur"], "lastlogin", []), "d M Y"), "html", null, true);
                echo "
                                                </td>
                                                ";
                // line 103
                if ($this->getAttribute($context["utilisateur"], "marque", [])) {
                    // line 104
                    echo "                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Nom</u>: ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "marque", [])), "html", null, true);
                    echo " </a></p><br><br>
                                                    <small><u>Adresse:</u> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "adresseentreprise", []), "html", null, true);
                    echo "<br>
                                                           <u>Code postal:</u> ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "cpentreprise", []), "html", null, true);
                    echo "<br>
                                                           <u>Rue:</u> ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "rueentreprise", []), "html", null, true);
                    echo "<br>
                                                           <u>Ville:</u> ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "villeentreprise", [])), "html", null, true);
                    echo "<br>
                                                           <u>Pays:</u> ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["utilisateur"], "paysentreprise", [])), "html", null, true);
                    echo "<br>
                                                           <u>Mobile:</u> ";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephoneentreprise", []), "html", null, true);
                    echo "<br>
                                                        ";
                    // line 111
                    if ($this->getAttribute($context["utilisateur"], "telephonefixentreprise", [])) {
                        // line 112
                        echo "                                                            <u>Fixe:</u> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephonefixentreprise", []), "html", null, true);
                        echo "<br>
                                                        ";
                    }
                    // line 114
                    echo "                                                           <br>
                                                    </small>
                                                </td>
                                                ";
                } else {
                    // line 118
                    echo "                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">";
                    // line 119
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "simple utilisateur"), "html", null, true);
                    echo "</span><br>
                                                </td>
                                                ";
                }
                // line 122
                echo "                                                <td class=\"action\">
                                                    <a title=\"Regardez utilisateur\" href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_show", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-search\"></i></a><br><br>
                                                    ";
                // line 124
                if ($this->getAttribute($context["utilisateur"], "enabled", [])) {
                    // line 125
                    echo "                                                    <a title=\"Bloquez compte utilisateur\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_disabled", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-lock\"></i></a><br>
                                                    ";
                } else {
                    // line 127
                    echo "                                                    <a title=\"Débloquez compte utilisateur\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_enabled", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-unlock\"></i></a><br>
                                                    ";
                }
                // line 129
                echo "                                                    <br><a title=\"Effacez compte utilisateur\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_delete", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a> <br> <br>
                                                    
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                    </tbody>
                                </table>
                            </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                ";
            // line 140
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs")));
            echo "
                            </center>
                        ";
        }
        // line 143
        echo "                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        ";
        // line 149
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "utilisateurs/index.html.twig", 149)->display($context);
        // line 150
        echo "        <br><br>
        ";
        // line 151
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informationsPro.html.twig", "utilisateurs/index.html.twig", 151)->display($context);
        // line 152
        echo "      </aside>
    </div>
  </div>
  </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 152,  392 => 151,  389 => 150,  387 => 149,  379 => 143,  373 => 140,  365 => 134,  353 => 129,  347 => 127,  341 => 125,  339 => 124,  335 => 123,  332 => 122,  326 => 119,  323 => 118,  317 => 114,  311 => 112,  309 => 111,  305 => 110,  301 => 109,  297 => 108,  293 => 107,  289 => 106,  285 => 105,  280 => 104,  278 => 103,  273 => 101,  269 => 99,  263 => 97,  257 => 95,  255 => 94,  251 => 92,  245 => 89,  242 => 88,  236 => 85,  233 => 84,  231 => 83,  213 => 81,  207 => 77,  201 => 75,  199 => 74,  195 => 73,  191 => 72,  187 => 71,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  161 => 66,  153 => 65,  147 => 64,  144 => 63,  140 => 62,  123 => 47,  113 => 39,  111 => 38,  107 => 36,  103 => 34,  101 => 33,  86 => 20,  76 => 16,  72 => 14,  68 => 13,  62 => 10,  58 => 9,  51 => 4,  45 => 3,  22 => 1,);
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

{% block bodyAdmin %}
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path('kountac_homepage')}}\">Home</a><span>&raquo;</span></li>
                        <li class=\"home\"> <a title=\"Aller à mon profil\" href=\"{{ path('admin_profile_show')}}\">Mon profil (admin)</a><span>&raquo;</span></li>
                        <li><strong>Tous les utilisateurs</strong></li>
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
    <!-- Breadcrumbs End -->
    
    <section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            {% if utilisateurs|length != 0 %}
                                <h2>Liste de tous les utilisateurs Kountac</h2>
                            {% endif %}
                        </div>
                        <div class=\"order-detail-content\">
                        {% if utilisateurs|length == 0 %}
                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste d'utilisateurs vide. Aucun utilisateur à afficher</h1></center></td>
                                    </tr>
                                </table>
                            </div>  
                        {% else %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>A propos</th>
                                            <th>Type compte</th>
                                            <th>Etat</th>
                                            <th>Vérifier</th>
                                            <th>Dernière connexion</th>
                                            <th>Informations marque</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for utilisateur in utilisateurs %}
                                            <tr>
                                                <td class=\"action\"><a href=\"{{ path('adminUtilisateurs_show', {'id' : utilisateur.id}) }}\"> {{ utilisateur.id }} </a></td>
                                                <td class=\"cart_description\"><p class=\"product-name\">{% if utilisateur.sexe %}Mme. {% else %}M. {% endif %} 
                                                    <strong>{% if utilisateur.prenom %} {{ utilisateur.prenom|capitalize }} {% endif %} {{ utilisateur.nom|capitalize }}</strong><br>
                                                    <small><u>Email:</u> {{ utilisateur.email }}<br>
                                                           <u>Adresse:</u> {{ utilisateur.adresse|capitalize }}<br>
                                                           <u>Code postal:</u> {{ utilisateur.cp }}<br>
                                                           <u>Rue:</u> {{ utilisateur.rue }}<br>
                                                           <u>Ville:</u> {{ utilisateur.ville|capitalize }}<br>
                                                           <u>Pays:</u> {{ utilisateur.pays|capitalize }}<br>
                                                           <u>Mobile:</u> {{ utilisateur.telephone }}<br>
                                                        {% if utilisateur.telephonefix %}
                                                            <u>Fixe:</u> {{ utilisateur.telephonefix }}<br>
                                                        {% endif %}
                                                           <br>
                                                    </small>
                                                </td>
                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">{% if utilisateur.roles[0] == 'ROLE_PRO' %}{{ ('Marque')|upper }} {% if utilisateur.roles[1]  == 'ROLE_ADMIN' %} ({{ ('Administrateur')|upper }}) {% endif %} {% else %} {{ ('Simple')|upper }} {% endif %}</span>
                                                </td>
                                                {% if utilisateur.enabled %}
                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">{{ ('Activé')|upper }}</span><br>
                                                </td>
                                                {% else %}
                                                <td class=\"availability out-of-stock\">
                                                    <span class=\"label\">{{ ('Bloqué')|upper }}</span><br>
                                                </td>
                                                {% endif %}
                                                <td class=\"action\">
                                                    
                                                    {% if utilisateur.verifier != 1 %}
                                                    <a title=\"Valider la vérification\" href=\"{{ path('adminUtilisateurs_verify', {'id' : utilisateur.id}) }}\"><input type=\"checkbox\" data-toggle=\"toggle\"></a><br>
                                                    {% else %}
                                                    <a title=\"Annuler la vérification\" href=\"{{ path('adminUtilisateurs_unverify', {'id' : utilisateur.id}) }}\"><input type=\"checkbox\" checked data-toggle=\"toggle\"></i></a><br>
                                                    {% endif %}
                                                </td>
                                                <td class=\"action\">
                                                    {{ utilisateur.lastlogin|date('d M Y') }}
                                                </td>
                                                {% if utilisateur.marque %}
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Nom</u>: {{ utilisateur.marque|capitalize }} </a></p><br><br>
                                                    <small><u>Adresse:</u> {{ utilisateur.adresseentreprise }}<br>
                                                           <u>Code postal:</u> {{ utilisateur.cpentreprise }}<br>
                                                           <u>Rue:</u> {{ utilisateur.rueentreprise }}<br>
                                                           <u>Ville:</u> {{ utilisateur.villeentreprise|capitalize }}<br>
                                                           <u>Pays:</u> {{ utilisateur.paysentreprise|capitalize }}<br>
                                                           <u>Mobile:</u> {{ utilisateur.telephoneentreprise }}<br>
                                                        {% if utilisateur.telephonefixentreprise %}
                                                            <u>Fixe:</u> {{ utilisateur.telephonefixentreprise }}<br>
                                                        {% endif %}
                                                           <br>
                                                    </small>
                                                </td>
                                                {% else %}
                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">{{ ('simple utilisateur')|upper }}</span><br>
                                                </td>
                                                {% endif %}
                                                <td class=\"action\">
                                                    <a title=\"Regardez utilisateur\" href=\"{{ path('adminUtilisateurs_show', {'id' : utilisateur.id}) }}\"><i class=\"fa fa-search\"></i></a><br><br>
                                                    {% if utilisateur.enabled %}
                                                    <a title=\"Bloquez compte utilisateur\" href=\"{{ path('adminUtilisateurs_disabled', {'id' : utilisateur.id}) }}\"><i class=\"fa fa-lock\"></i></a><br>
                                                    {% else %}
                                                    <a title=\"Débloquez compte utilisateur\" href=\"{{ path('adminUtilisateurs_enabled', {'id' : utilisateur.id}) }}\"><i class=\"fa fa-unlock\"></i></a><br>
                                                    {% endif %}
                                                    <br><a title=\"Effacez compte utilisateur\" href=\"{{ path('adminUtilisateurs_delete', {'id' : utilisateur.id}) }}\"><i class=\"fa fa-trash\"></i></a> <br> <br>
                                                    
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                {{ knp_pagination_render(utilisateurs) }}
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
        {% include 'FOSUserBundle:Profile:Navigation/informationsPro.html.twig' %}
      </aside>
    </div>
  </div>
  </section>

{% endblock %}
", "utilisateurs/index.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\utilisateurs\\index.html.twig");
    }
}
