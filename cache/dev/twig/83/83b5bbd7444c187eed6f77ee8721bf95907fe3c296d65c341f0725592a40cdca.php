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

/* KountacBundle:Default:pages/cfa/wishlist.html.twig */
class __TwigTemplate_1bd66343810fc67fdc2be6af5907e46e2c7603c670720f0160b4c7d99d86e948 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:pages/cfa/wishlist.html.twig"));

        // line 1
        echo "<div>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        }
        // line 12
        echo " 
                        </ul>
                        <ul>
                            ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 16
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                            ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                            ";
        }
        // line 24
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 34
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 35
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 36
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Home</a><span>&raquo;</span></li>
                        <li><strong>Mes souhaits</strong></li>
                    </ul>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 51
            echo "                        <div class=\"alert-box\">
                            <br>
                            ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <section class=\"main-container col2-right-layout\">
        <div class=\"main container\">
            <div class=\"row\">
                <div class=\"col-main col-sm-9 col-xs-12\">
                    <div class=\"my-account\">
                        <div class=\"page-title\">
                            ";
        // line 68
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 69
            echo "                                <h2>Mes souhaits</h2>
                            ";
        }
        // line 71
        echo "                        </div>
                        ";
        // line 72
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 73
            echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de souhaits vide. Aucun produit</h1></center></td>
                                    </tr>
                                </table>
                                <br>
                                <button class=\"button\"> <a class=\"continue-btn\" href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir les produits</a> </button>
                            </div>  
                        ";
        } else {
            // line 83
            echo "                        <div class=\"wishlist-item table-responsive\">
                            <table class=\"col-md-12\">
                                <thead>
                                    <tr>
                                        <th class=\"th-product\">Retirez</th>
                                        <th class=\"th-product\">Images</th>
                                        <th class=\"th-details\">Nom du produit</th>
                                        <th class=\"th-price\">P U (F CFA)</th>
                                        <th class=\"th-total th-add-to-cart\">Ajout panier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 96
                echo "                                    ";
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", [])) {
                    // line 97
                    echo "                                        ";
                    $context["prixReduction"] = 0;
                    // line 98
                    echo "                                        ";
                    $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                    // line 99
                    echo "                                    <tr>
                                        <td class=\"th-delate\"><a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerwishlist", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i></a></td>
                                        <td class=\"th-product\">
                                            ";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 103
                        echo "                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 104
                            echo "                                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbItem"), "html", null, true);
                            echo "\" alt=\"\">
                                                ";
                        }
                        // line 106
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                                        </td>
                                        <td class=\"th-details\"><h2><a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "</a></h2>
                                            <small><a><u>Description</u> : ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 100, false, " ..."), "html", null, true);
                    echo "</a></small><br>
                                            <small><a><u>Matière</u> : ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "matiere", [])), "html", null, true);
                    echo "</a></small><br>
                                            
                                        </td>
                                        <td class=\"th-price\">
                                        ";
                    // line 114
                    if (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", []) == 0)) {
                        // line 115
                        echo "                                            <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                        ";
                    } else {
                        // line 117
                        echo "                                            <div class=\"price-box\">
                                                <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 118
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                <br><br><p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 119
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                            </div>
                                        ";
                    }
                    // line 122
                    echo "                                        </td>
                                        <th class=\"td-add-to-cart\"><a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpanier", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"> Ajouter</a></th>
                                    </tr>
                                    ";
                }
                // line 126
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                </tbody>
                            </table>
                            <a href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutToutpanier");
            echo "\" class=\"all-cart\">Tout ajouter dans mon panier</a> </div>
                        ";
        }
        // line 131
        echo "                    </div>
                </div>
                <aside class=\"right sidebar col-sm-3 col-xs-12\">
                    <div class=\"sidebar-account block\">
                        <div class=\"sidebar-bar-title\">

                        </div>

                    </div>
                ";
        // line 140
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Compare:compareAside"), []);
        // line 141
        echo "                </aside>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:pages/cfa/wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 141,  346 => 140,  335 => 131,  330 => 129,  326 => 127,  320 => 126,  314 => 123,  311 => 122,  305 => 119,  301 => 118,  298 => 117,  292 => 115,  290 => 114,  283 => 110,  279 => 109,  271 => 108,  268 => 107,  262 => 106,  256 => 104,  253 => 103,  249 => 102,  244 => 100,  241 => 99,  238 => 98,  235 => 97,  232 => 96,  228 => 95,  214 => 83,  208 => 80,  199 => 73,  197 => 72,  194 => 71,  190 => 69,  188 => 68,  174 => 56,  165 => 53,  161 => 51,  157 => 50,  151 => 47,  143 => 41,  140 => 40,  134 => 39,  125 => 36,  120 => 35,  115 => 34,  110 => 33,  108 => 32,  98 => 24,  95 => 23,  89 => 22,  80 => 19,  75 => 18,  70 => 17,  65 => 16,  63 => 15,  58 => 12,  52 => 10,  48 => 9,  43 => 8,  41 => 7,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            {% endif %} 
                        </ul>
                        <ul>
                            {% if app.request.hasPreviousSession %}
                                {% for type, messages in app.session.flashbag.all() %}
                                    {% for message in messages %}
                                        <div class=\"flash-{{ type }}\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                {% endfor %}
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path ('kountac_homepage')}}\">Home</a><span>&raquo;</span></li>
                        <li><strong>Mes souhaits</strong></li>
                    </ul>
                    {% for flashMessage in app.session.flashbag.get('success') %}
                        <div class=\"alert-box\">
                            <br>
                            {{ flashMessage }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <section class=\"main-container col2-right-layout\">
        <div class=\"main container\">
            <div class=\"row\">
                <div class=\"col-main col-sm-9 col-xs-12\">
                    <div class=\"my-account\">
                        <div class=\"page-title\">
                            {% if produits|length != 0 %}
                                <h2>Mes souhaits</h2>
                            {% endif %}
                        </div>
                        {% if produits|length == 0 %}
                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de souhaits vide. Aucun produit</h1></center></td>
                                    </tr>
                                </table>
                                <br>
                                <button class=\"button\"> <a class=\"continue-btn\" href=\"{{ path('kountac_homepage') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir les produits</a> </button>
                            </div>  
                        {% else %}
                        <div class=\"wishlist-item table-responsive\">
                            <table class=\"col-md-12\">
                                <thead>
                                    <tr>
                                        <th class=\"th-product\">Retirez</th>
                                        <th class=\"th-product\">Images</th>
                                        <th class=\"th-details\">Nom du produit</th>
                                        <th class=\"th-price\">P U (F CFA)</th>
                                        <th class=\"th-total th-add-to-cart\">Ajout panier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for produit in produits %}
                                    {% if produit.produit2.cfaprix %}
                                        {% set prixReduction = 0 %}
                                        {% set prixReduction = produit.produit2.cfaprix - (produit.produit2.cfaprix * produit.produit2.reduction/100) %}
                                    <tr>
                                        <td class=\"th-delate\"><a href=\"{{ path('supprimerwishlist', { 'id' : produit.id }) }}\"><i class=\"fa fa-trash-o\"></i></a></td>
                                        <td class=\"th-product\">
                                            {% for image in images %}
                                                {% if image.produit2 == produit.produit2 and image.top == 0 %}
                                                    <img src=\"{{ image.AssetPath|imagine_filter('cartThumbItem') }}\" alt=\"\">
                                                {% endif %}
                                            {% endfor %}
                                        </td>
                                        <td class=\"th-details\"><h2><a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\">{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}</a></h2>
                                            <small><a><u>Description</u> : {{ produit.produit2.produit1.description|capitalize|truncate(100, false, ' ...') }}</a></small><br>
                                            <small><a><u>Matière</u> : {{ produit.produit2.produit1.matiere|capitalize }}</a></small><br>
                                            
                                        </td>
                                        <td class=\"th-price\">
                                        {% if produit.produit2.reduction == 0 %}
                                            <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                        {% else %}
                                            <div class=\"price-box\">
                                                <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                <br><br><p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.produit2.cfaprix|number_format(2) }} F CFA</span> </p>
                                            </div>
                                        {% endif %}
                                        </td>
                                        <th class=\"td-add-to-cart\"><a href=\"{{ path('ajoutpanier', {'id' : produit.id}) }}\"> Ajouter</a></th>
                                    </tr>
                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>
                            <a href=\"{{ path('ajoutToutpanier') }}\" class=\"all-cart\">Tout ajouter dans mon panier</a> </div>
                        {% endif %}
                    </div>
                </div>
                <aside class=\"right sidebar col-sm-3 col-xs-12\">
                    <div class=\"sidebar-account block\">
                        <div class=\"sidebar-bar-title\">

                        </div>

                    </div>
                {% render(controller('KountacBundle:Compare:compareAside')) %}
                </aside>
            </div>
        </div>
    </section>
", "KountacBundle:Default:pages/cfa/wishlist.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/pages/cfa/wishlist.html.twig");
    }
}
