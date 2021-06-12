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

/* KountacBundle:Menu:panierMenuAllProducts.html.twig */
class __TwigTemplate_c0bb9cb2690fda34337cedd61ac807fa665b4bfcd2df9f098820cd08daad90db extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:panierMenuAllProducts.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 2
            $context["totalPanier"] = 0;
            // line 3
            $context["totalPanier2"] = 0;
            // line 4
            echo "<div class=\"block sidebar-cart\">

    ";
            // line 6
            if (((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0) && (twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) == 0))) {
                // line 7
                echo "
        <div class=\"sidebar-bar-title\">
            <h3>Panier Vide</h3>
        </div>
    ";
            } else {
                // line 12
                echo "        <div class=\"sidebar-bar-title\">
            <h3>Mon panier</h3>
        </div>
    ";
            }
            // line 16
            echo "    <div class=\"block-content\">
        ";
            // line 17
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
                // line 18
                echo "            <p class=\"amount\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                echo " produit(s)</a> dans votre panier.</p>
            <ul>

                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 22
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", [])) {
                        // line 23
                        echo "                    ";
                        $context["prixReduction"] = 0;
                        // line 24
                        echo "                    ";
                        $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                        // line 25
                        echo "                    <li class=\"item\"> 
                        <a href=\"";
                        // line 26
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "\" class=\"product-image\">
                            ";
                        // line 27
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 28
                            echo "                                ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 29
                                echo "                                    <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                                echo "\" alt=\"\">
                                ";
                            }
                            // line 31
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                        </a>
                        <div class=\"product-details\">
                            <div class=\"access\"> <a href=\"#\" title=\"Retirer ";
                        // line 34
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                            <p class=\"product-name\"> <a href=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\"><strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "</strong></a> </p>
                            ";
                        // line 36
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                        echo "<br>
                            <strong>";
                        // line 37
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                        echo "</strong> x <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </div>
                    </li>
                    ";
                        // line 39
                        $context["totalPanier"] = (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + (($context["prixReduction"] ?? $this->getContext($context, "prixReduction")) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")));
                        // line 40
                        echo "                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            ";
            }
            // line 43
            echo "            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 44
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
                foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                    // line 45
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "europrixCommande", [])) {
                        // line 46
                        echo "                        ";
                        $context["prixReduction2"] = 0;
                        // line 47
                        echo "                        ";
                        $context["prixReduction2"] = $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "europrixCommande", []);
                        // line 48
                        echo "                        <li class=\"item\"> 
                            <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " (Commande)\" class=\"product-image\">
                                <img src=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "picture", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">
                            </a>
                            <div class=\"product-details\">
                                <div class=\"access\"> <a href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delete_item", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
                        echo "\" title=\"Retirer ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " (Commande) de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                                <p class=\"product-name\"> <a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                        echo "\"><strong> ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " (Commande)</strong></a> </p>
                                ";
                        // line 55
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                        echo "<br>
                                <span class=\"price\">";
                        // line 56
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")), 2), "html", null, true);
                        echo " €</span> </div>
                        </li>
                        ";
                        // line 58
                        $context["totalPanier2"] = (($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2")) + ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")));
                        // line 59
                        echo "                    ";
                    }
                    // line 60
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            ";
            }
            // line 62
            echo "
        </ul>
        ";
            // line 64
            if (((twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) != 0) || (twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0))) {
                // line 65
                echo "            <div class=\"summary\">
                <p class=\"subtotal\"> <span class=\"label\">Total panier:</span> <span class=\"price\">";
                // line 66
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + ($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2"))), 2), "html", null, true);
                echo " €</span> </p>
            </div> 
            <a href=\"";
                // line 68
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Checkout_index1");
                echo "\" title=\"Finalisation de la commande\">
                <div class=\"cart-checkout\">
                    <button class=\"button\"><i class=\"fa fa-check\"></i> <span>Finaliser</span></button> 
                </div>
            </a>
        ";
            }
            // line 74
            echo "    </div>
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 76
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 77
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig", "KountacBundle:Menu:panierMenuAllProducts.html.twig", 77)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 78
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 79
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:usa/panierMenuAllProducts.html.twig", "KountacBundle:Menu:panierMenuAllProducts.html.twig", 79)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 80
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 81
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:livre/panierMenuAllProducts.html.twig", "KountacBundle:Menu:panierMenuAllProducts.html.twig", 81)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 82
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 83
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:naira/panierMenuAllProducts.html.twig", "KountacBundle:Menu:panierMenuAllProducts.html.twig", 83)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 84
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 85
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:all/panierMenuAllProducts.html.twig", "KountacBundle:Menu:panierMenuAllProducts.html.twig", 85)->display($context);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:panierMenuAllProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 85,  278 => 84,  275 => 83,  273 => 82,  270 => 81,  268 => 80,  265 => 79,  263 => 78,  260 => 77,  258 => 76,  254 => 74,  245 => 68,  240 => 66,  237 => 65,  235 => 64,  231 => 62,  228 => 61,  222 => 60,  219 => 59,  217 => 58,  212 => 56,  208 => 55,  200 => 54,  192 => 53,  186 => 50,  178 => 49,  175 => 48,  172 => 47,  169 => 46,  166 => 45,  161 => 44,  158 => 43,  155 => 42,  149 => 41,  146 => 40,  144 => 39,  137 => 37,  133 => 36,  125 => 35,  119 => 34,  115 => 32,  109 => 31,  103 => 29,  100 => 28,  96 => 27,  88 => 26,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  72 => 21,  63 => 18,  61 => 17,  58 => 16,  52 => 12,  45 => 7,  43 => 6,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if euro|length != 0 %}
{% set totalPanier = 0 %}
{% set totalPanier2 = 0 %}
<div class=\"block sidebar-cart\">

    {% if produits|length == 0 and commandes|length == 0 %}

        <div class=\"sidebar-bar-title\">
            <h3>Panier Vide</h3>
        </div>
    {% else %}
        <div class=\"sidebar-bar-title\">
            <h3>Mon panier</h3>
        </div>
    {% endif %}
    <div class=\"block-content\">
        {% if produits|length != 0%}
            <p class=\"amount\"><a href=\"{{ path('panier') }}\">{{ produits|length}} produit(s)</a> dans votre panier.</p>
            <ul>

                {% for produit in produits %}
                    {% if produit.produit2.europrix %}
                    {% set prixReduction = 0 %}
                    {% set prixReduction = produit.produit2.europrix - (produit.produit2.europrix * produit.produit2.reduction/100) %}
                    <li class=\"item\"> 
                        <a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\" title=\"{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}\" class=\"product-image\">
                            {% for image in images %}
                                {% if image.produit2 == produit.produit2 and image.top == 0 %}
                                    <img src=\"{{ image.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                                {% endif %}
                            {% endfor %}
                        </a>
                        <div class=\"product-details\">
                            <div class=\"access\"> <a href=\"#\" title=\"Retirer {{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }} de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                            <p class=\"product-name\"> <a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\"><strong>{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}</strong></a> </p>
                            {{ produit.produit2.produit1.description|capitalize|truncate(50, false, ' ...') }}<br>
                            <strong>{{ panier[produit.id] }}</strong> x <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </div>
                    </li>
                    {% set totalPanier = totalPanier + (prixReduction * panier[produit.id]) %}
                    {% endif %}
                {% endfor %}
            {% endif %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% for commande in commandes %}
                    {% if commande.produit.europrixCommande %}
                        {% set prixReduction2 = 0 %}
                        {% set prixReduction2 = commande.produit.europrixCommande %}
                        <li class=\"item\"> 
                            <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\" title=\"{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)\" class=\"product-image\">
                                <img src=\"{{ commande.produit.picture.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                            </a>
                            <div class=\"product-details\">
                                <div class=\"access\"> <a href=\"{{ path('commande_delete_item', {'id' : commande.id}) }}\" title=\"Retirer {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande) de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                                <p class=\"product-name\"> <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\"><strong> {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)</strong></a> </p>
                                {{ commande.produit.produit1.description|capitalize|truncate(50, false, ' ...') }}<br>
                                <span class=\"price\">{{ prixReduction2|number_format(2) }} €</span> </div>
                        </li>
                        {% set totalPanier2 = totalPanier2 + prixReduction2 %}
                    {% endif %}
                {% endfor %}
            {% endif %}

        </ul>
        {% if commandes|length != 0 or produits|length != 0 %}
            <div class=\"summary\">
                <p class=\"subtotal\"> <span class=\"label\">Total panier:</span> <span class=\"price\">{{ (totalPanier + totalPanier2)|number_format(2) }} €</span> </p>
            </div> 
            <a href=\"{{ path('Checkout_index1') }}\" title=\"Finalisation de la commande\">
                <div class=\"cart-checkout\">
                    <button class=\"button\"><i class=\"fa fa-check\"></i> <span>Finaliser</span></button> 
                </div>
            </a>
        {% endif %}
    </div>
</div>
{% elseif cfa|length != 0 %}
    {% include 'KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig' %}
{% elseif usa|length != 0 %}
    {% include 'KountacBundle:Menu:usa/panierMenuAllProducts.html.twig' %}
{% elseif livre|length != 0 %}
    {% include 'KountacBundle:Menu:livre/panierMenuAllProducts.html.twig' %}
{% elseif naira|length != 0 %}
    {% include 'KountacBundle:Menu:naira/panierMenuAllProducts.html.twig' %}
{% elseif all|length != 0 %}
    {% include 'KountacBundle:Menu:all/panierMenuAllProducts.html.twig' %}
{% endif %}", "KountacBundle:Menu:panierMenuAllProducts.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/panierMenuAllProducts.html.twig");
    }
}
