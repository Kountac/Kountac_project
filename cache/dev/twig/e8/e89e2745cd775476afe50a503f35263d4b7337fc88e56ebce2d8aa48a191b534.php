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

/* KountacBundle:Default:pages/wishlist.html.twig */
class __TwigTemplate_ba4ae4870f975c968a63f5284e445b8df63bfe71a58bc39a3889c9bab5300c22 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:pages/wishlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 5
            echo "<div>
        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            ";
            // line 11
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 12
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
                echo " |
                                <a href=\"";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 17
            echo "                        </ul>
                        <ul>
                            ";
            // line 19
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                // line 20
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 21
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 22
                        echo "                                        <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                                            ";
                        // line 23
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            ";
            }
            // line 28
            echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                // line 37
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 39
                        echo "                <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                    ";
                        // line 40
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "    ";
            }
            // line 45
            echo "
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
            echo "\">Home</a><span>&raquo;</span></li>
                        <li><strong>Mes souhaits</strong></li>
                    </ul>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 55
                echo "                        <div class=\"alert-box\">
                            <br>
                            ";
                // line 57
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
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
            // line 72
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
                // line 73
                echo "                                <h2>Mes souhaits</h2>
                            ";
            }
            // line 75
            echo "                        </div>
                        ";
            // line 76
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
                // line 77
                echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de souhaits vide. Aucun produit</h1></center></td>
                                    </tr>
                                </table>
                                <br>
                                <button class=\"button\"> <a class=\"continue-btn\" href=\"";
                // line 84
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
                echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir les produits</a> </button>
                            </div>
                        ";
            } else {
                // line 87
                echo "                        <div class=\"wishlist-item table-responsive\">
                            <table class=\"col-md-12\">
                                <thead>
                                    <tr>
                                        <th class=\"th-product\">Retirez</th>
                                        <th class=\"th-product\">Images</th>
                                        <th class=\"th-details\">Nom du produit</th>
                                        <th class=\"th-price\">P U (€)</th>
                                        <th class=\"th-total th-add-to-cart\">Ajout panier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 100
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", [])) {
                        // line 101
                        echo "                                        ";
                        $context["prixReduction"] = 0;
                        // line 102
                        echo "                                        ";
                        $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                        // line 103
                        echo "                                    <tr>
                                        <td class=\"th-delate\"><a href=\"";
                        // line 104
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerwishlist", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>
                                        <td class=\"th-product\">
                                            ";
                        // line 106
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 107
                            echo "                                                ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 108
                                echo "                                                    <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbItem"), "html", null, true);
                                echo "\" alt=\"\">
                                                ";
                            }
                            // line 110
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 111
                        echo "                                        </td>
                                        <td class=\"th-details\"><h2><a href=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "</a></h2>
                                            <small><a><u>Description</u> : ";
                        // line 113
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 100, false, " ..."), "html", null, true);
                        echo "</a></small><br>
                                            <small><a><u>Matière</u> : ";
                        // line 114
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "matiere", [])), "html", null, true);
                        echo "</a></small><br>

                                        </td>
                                        <td class=\"th-price\">
                                        ";
                        // line 118
                        if (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", []) == 0)) {
                            // line 119
                            echo "                                            <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </span> </div>
                                        ";
                        } else {
                            // line 121
                            echo "                                            <div class=\"price-box\">
                                                <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                            // line 122
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </p>
                                                <br><br><p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                            // line 123
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []), 2), "html", null, true);
                            echo " €</span> </p>
                                            </div>
                                        ";
                        }
                        // line 126
                        echo "                                        </td>
                                        <th class=\"td-add-to-cart\"><a href=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpanier", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\"> Ajouter</a></th>
                                    </tr>
                                    ";
                    }
                    // line 130
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                </tbody>
                            </table>
                            <a href=\"";
                // line 133
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutToutpanier");
                echo "\" class=\"all-cart\">Tout ajouter dans mon panier</a> </div>
                        ";
            }
            // line 135
            echo "                    </div>
                </div>
                <aside class=\"right sidebar col-sm-3 col-xs-12\">
                    <div class=\"sidebar-account block\">
                        <div class=\"sidebar-bar-title\">

                        </div>

                    </div>
                ";
            // line 144
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Compare:compareAside"), []);
            // line 145
            echo "                </aside>
            </div>
        </div>
    </section>
    <!-- service section -->
";
        } elseif ((twig_length_filter($this->env,         // line 150
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 151
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:pages/cfa/wishlist.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 151)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 152
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 153
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:pages/livre/wishlist.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 153)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 154
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 155
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:pages/naira/wishlist.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 155)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 156
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 157
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:pages/usa/wishlist.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 157)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 158
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 159
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:pages/all/wishlist.html.twig", "KountacBundle:Default:pages/wishlist.html.twig", 159)->display($context);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:pages/wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 159,  395 => 158,  392 => 157,  390 => 156,  387 => 155,  385 => 154,  382 => 153,  380 => 152,  377 => 151,  375 => 150,  368 => 145,  366 => 144,  355 => 135,  350 => 133,  346 => 131,  340 => 130,  334 => 127,  331 => 126,  325 => 123,  321 => 122,  318 => 121,  312 => 119,  310 => 118,  303 => 114,  299 => 113,  291 => 112,  288 => 111,  282 => 110,  276 => 108,  273 => 107,  269 => 106,  264 => 104,  261 => 103,  258 => 102,  255 => 101,  252 => 100,  248 => 99,  234 => 87,  228 => 84,  219 => 77,  217 => 76,  214 => 75,  210 => 73,  208 => 72,  194 => 60,  185 => 57,  181 => 55,  177 => 54,  171 => 51,  163 => 45,  160 => 44,  154 => 43,  145 => 40,  140 => 39,  135 => 38,  130 => 37,  128 => 36,  118 => 28,  115 => 27,  109 => 26,  100 => 23,  95 => 22,  90 => 21,  85 => 20,  83 => 19,  79 => 17,  73 => 14,  69 => 13,  64 => 12,  62 => 11,  54 => 5,  51 => 4,  45 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::base.html.twig\" %}

{% block body %}
    {% if euro|length != 0 %}
<div>
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
                                        <th class=\"th-price\">P U (€)</th>
                                        <th class=\"th-total th-add-to-cart\">Ajout panier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for produit in produits %}
                                    {% if produit.produit2.europrix %}
                                        {% set prixReduction = 0 %}
                                        {% set prixReduction = produit.produit2.europrix - (produit.produit2.europrix * produit.produit2.reduction/100) %}
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
                                            <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </span> </div>
                                        {% else %}
                                            <div class=\"price-box\">
                                                <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </p>
                                                <br><br><p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.produit2.europrix|number_format(2) }} €</span> </p>
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
    <!-- service section -->
{% elseif cfa|length != 0 %}
    {% include 'KountacBundle:Default:pages/cfa/wishlist.html.twig' %}
{% elseif livre|length != 0 %}
    {% include 'KountacBundle:Default:pages/livre/wishlist.html.twig' %}
{% elseif naira|length != 0 %}
    {% include 'KountacBundle:Default:pages/naira/wishlist.html.twig' %}
{% elseif usa|length != 0 %}
    {% include 'KountacBundle:Default:pages/usa/wishlist.html.twig' %}
{% elseif all|length != 0 %}
    {% include 'KountacBundle:Default:pages/all/wishlist.html.twig' %}
{% endif %}
{% endblock %}
", "KountacBundle:Default:pages/wishlist.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/pages/wishlist.html.twig");
    }
}
