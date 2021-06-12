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

/* commentaires/index.html.twig */
class __TwigTemplate_8a952282b8a0c25da7872d3ead2bfdac06f80860d7c41bdfcbd4db72c05fc408 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutAdmin.html.twig", "commentaires/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaires/index.html.twig"));

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
                        <li><strong>Tous les commentaires</strong></li>
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
        if ((twig_length_filter($this->env, ($context["commentaires"] ?? $this->getContext($context, "commentaires"))) != 0)) {
            // line 34
            echo "                                <h2>Liste de tous les commentaires</h2>
                            ";
        }
        // line 36
        echo "                        </div>

                        <div class=\"order-detail-content\">
                        ";
        // line 39
        if ((twig_length_filter($this->env, ($context["commentaires"] ?? $this->getContext($context, "commentaires"))) == 0)) {
            // line 40
            echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de commentaires vide. Aucun commentaire à afficher</h1></center></td>
                                    </tr>
                                </table>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_new");
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajoutez un nouveau commentaire</a> </div>
                            </div>  
                        ";
        } else {
            // line 49
            echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th class=\"cart_product\">Aperçu</th>
                                            <th>Description</th>
                                            <th>Date d'ajout</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 62
                echo "                                            <tr>
                                                <td class=\"action\"><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_show", ["id" => $this->getAttribute($context["commentaire"], "id", [])]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", []), "html", null, true);
                echo " </a></td>
                                                <td class=\"cart_product\">
                                                    <a><img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "produit", []), "picture", []), "AssetPath", []), "cartThumbItem"), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    <br>";
                // line 66
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                echo "
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Avis</u> : \"";
                // line 68
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "titre", [])), "html", null, true);
                echo "\" </a></p><br>
                                                    <small><a><u>Commentaire</u> : ";
                // line 69
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", [])), 50, false, " ..."), "html", null, true);
                echo "</a></small><br>
                                                    <br><u>Ajouté par</u> : <strong>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", []), "html", null, true);
                echo "</strong> <br>
                                                   
                                                </td>
                                                <td class=\"action\">
                                                    ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", []), "d M Y"), "html", null, true);
                echo "
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Regardez commentaire \" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_show", ["id" => $this->getAttribute($context["commentaire"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-search\"></i></a><br>
                                                    <a title=\"Modifiez ce commentaire \" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_edit", ["id" => $this->getAttribute($context["commentaire"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a><br>
                                                    <br><br><a title=\"Retirez ce commentaire\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_delete", ["id" => $this->getAttribute($context["commentaire"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_new");
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajoutez un nouveau commentaire</a> </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                ";
            // line 90
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["commentaires"] ?? $this->getContext($context, "commentaires")));
            echo "
                            </center>
                        ";
        }
        // line 93
        echo "                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        ";
        // line 99
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "commentaires/index.html.twig", 99)->display($context);
        // line 100
        echo "        <br><br>
        ";
        // line 101
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informationsPro.html.twig", "commentaires/index.html.twig", 101)->display($context);
        // line 102
        echo "      </aside>
    </div>
  </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commentaires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 102,  237 => 101,  234 => 100,  232 => 99,  224 => 93,  218 => 90,  211 => 86,  206 => 83,  196 => 79,  192 => 78,  188 => 77,  182 => 74,  175 => 70,  171 => 69,  167 => 68,  160 => 66,  156 => 65,  149 => 63,  146 => 62,  142 => 61,  128 => 49,  122 => 46,  114 => 40,  112 => 39,  107 => 36,  103 => 34,  101 => 33,  86 => 20,  76 => 16,  72 => 14,  68 => 13,  62 => 10,  58 => 9,  51 => 4,  45 => 3,  22 => 1,);
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
                        <li><strong>Tous les commentaires</strong></li>
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
                            {% if commentaires|length != 0 %}
                                <h2>Liste de tous les commentaires</h2>
                            {% endif %}
                        </div>

                        <div class=\"order-detail-content\">
                        {% if commentaires|length == 0 %}
                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de commentaires vide. Aucun commentaire à afficher</h1></center></td>
                                    </tr>
                                </table>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('adminCommentaires_new') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajoutez un nouveau commentaire</a> </div>
                            </div>  
                        {% else %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th class=\"cart_product\">Aperçu</th>
                                            <th>Description</th>
                                            <th>Date d'ajout</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for commentaire in commentaires %}
                                            <tr>
                                                <td class=\"action\"><a href=\"{{ path('adminCommentaires_show', {'id' : commentaire.id}) }}\"> {{ commentaire.id }} </a></td>
                                                <td class=\"cart_product\">
                                                    <a><img src=\"{{ commentaire.produit.picture.AssetPath|imagine_filter('cartThumbItem') }}\" alt=\"\"></a>
                                                    <br>{{ commentaire.produit.produit1.nom|capitalize }} - {{ commentaire.produit.libelle.libelle|capitalize }}
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a><u>Avis</u> : \"{{ commentaire.titre|capitalize }}\" </a></p><br>
                                                    <small><a><u>Commentaire</u> : {{ commentaire.contenu|capitalize|truncate(50, false, ' ...') }}</a></small><br>
                                                    <br><u>Ajouté par</u> : <strong>{{ commentaire.pseudo }}</strong> <br>
                                                   
                                                </td>
                                                <td class=\"action\">
                                                    {{ commentaire.date|date('d M Y') }}
                                                </td>
                                                <td class=\"action\">
                                                    <a title=\"Regardez commentaire \" href=\"{{ path('adminCommentaires_show', {'id' : commentaire.id}) }}\"><i class=\"fa fa-search\"></i></a><br>
                                                    <a title=\"Modifiez ce commentaire \" href=\"{{ path('adminCommentaires_edit', {'id' : commentaire.id}) }}\"><i class=\"fa fa-pencil\"></i></a><br>
                                                    <br><br><a title=\"Retirez ce commentaire\" href=\"{{ path('adminCommentaires_delete', {'id' : commentaire.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('adminCommentaires_new') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajoutez un nouveau commentaire</a> </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                {{ knp_pagination_render(commentaires) }}
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
", "commentaires/index.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\commentaires\\index.html.twig");
    }
}
