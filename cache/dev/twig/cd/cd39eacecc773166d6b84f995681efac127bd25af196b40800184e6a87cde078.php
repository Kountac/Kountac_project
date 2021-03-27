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

/* KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig */
class __TwigTemplate_240942dfc67fc6961728df726536658a41f85b7d9404c46e6aed62e820e8ab34 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig"));

        // line 1
        $context["totalPanier"] = 0;
        // line 2
        $context["totalPanier2"] = 0;
        // line 3
        echo "<div class=\"block sidebar-cart\">

    ";
        // line 5
        if (((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0) && (twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) == 0))) {
            // line 6
            echo "
        <div class=\"sidebar-bar-title\">
            <h3>Panier Vide</h3>
        </div>
    ";
        } else {
            // line 11
            echo "        <div class=\"sidebar-bar-title\">
            <h3>Mon panier</h3>
        </div>
    ";
        }
        // line 15
        echo "    <div class=\"block-content\">
        ";
        // line 16
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 17
            echo "            <p class=\"amount\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
            echo " produit(s)</a> dans votre panier.</p>
            <ul>

                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 21
                echo "                    ";
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", [])) {
                    // line 22
                    echo "                    ";
                    $context["prixReduction"] = 0;
                    // line 23
                    echo "                    ";
                    $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                    // line 24
                    echo "                    <li class=\"item\"> 
                        <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "\" class=\"product-image\">
                            ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 27
                        echo "                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 28
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                            echo "\" alt=\"\">
                                ";
                        }
                        // line 30
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                        </a>
                        <div class=\"product-details\">
                            <div class=\"access\"> <a href=\"#\" title=\"Retirer ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo " de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                            <p class=\"product-name\"> <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\"><strong>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "</strong></a> </p>
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                    echo "<br>
                            <strong>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                    echo "</strong> x <span class=\"price\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </div>
                    </li>
                    ";
                    // line 38
                    $context["totalPanier"] = (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + (($context["prixReduction"] ?? $this->getContext($context, "prixReduction")) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")));
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        // line 42
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 44
                echo "                    ";
                if ($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "cfaprixCommande", [])) {
                    // line 45
                    echo "                        ";
                    $context["prixReduction2"] = 0;
                    // line 46
                    echo "                        ";
                    $context["prixReduction2"] = $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "cfaprixCommande", []);
                    // line 47
                    echo "                        <li class=\"item\"> 
                            <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo " (Commande)\" class=\"product-image\">
                                <img src=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "picture", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                    echo "\" alt=\"\">
                            </a>
                            <div class=\"product-details\">
                                <div class=\"access\"> <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delete_item", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
                    echo "\" title=\"Retirer ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo " (Commande) de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                                <p class=\"product-name\"> <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                    echo "\"><strong> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo " (Commande)</strong></a> </p>
                                ";
                    // line 54
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                    echo "<br>
                                <span class=\"price\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")), 2), "html", null, true);
                    echo " F CFA</span> </div>
                        </li>
                        ";
                    // line 57
                    $context["totalPanier2"] = (($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2")) + ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")));
                    // line 58
                    echo "                    ";
                }
                // line 59
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "
        </ul>
        ";
        // line 63
        if (((twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) != 0) || (twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0))) {
            // line 64
            echo "            <div class=\"summary\">
                <p class=\"subtotal\"> <span class=\"label\">Total panier:</span> <span class=\"price\">";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + ($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2"))), 2), "html", null, true);
            echo " F CFA</span> </p>
            </div> 
            <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Checkout_index1");
            echo "\" title=\"Finalisation de la commande\">
                <div class=\"cart-checkout\">
                    <button class=\"button\"><i class=\"fa fa-check\"></i> <span>Finaliser</span></button> 
                </div>
            </a>
        ";
        }
        // line 73
        echo "    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 73,  243 => 67,  238 => 65,  235 => 64,  233 => 63,  229 => 61,  226 => 60,  220 => 59,  217 => 58,  215 => 57,  210 => 55,  206 => 54,  198 => 53,  190 => 52,  184 => 49,  176 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  159 => 43,  156 => 42,  153 => 41,  147 => 40,  144 => 39,  142 => 38,  135 => 36,  131 => 35,  123 => 34,  117 => 33,  113 => 31,  107 => 30,  101 => 28,  98 => 27,  94 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  70 => 20,  61 => 17,  59 => 16,  56 => 15,  50 => 11,  43 => 6,  41 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set totalPanier = 0 %}
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
                    {% if produit.produit2.cfaprix %}
                    {% set prixReduction = 0 %}
                    {% set prixReduction = produit.produit2.cfaprix - (produit.produit2.cfaprix * produit.produit2.reduction/100) %}
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
                            <strong>{{ panier[produit.id] }}</strong> x <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </div>
                    </li>
                    {% set totalPanier = totalPanier + (prixReduction * panier[produit.id]) %}
                    {% endif %}
                {% endfor %}
            {% endif %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% for commande in commandes %}
                    {% if commande.produit.cfaprixCommande %}
                        {% set prixReduction2 = 0 %}
                        {% set prixReduction2 = commande.produit.cfaprixCommande %}
                        <li class=\"item\"> 
                            <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\" title=\"{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)\" class=\"product-image\">
                                <img src=\"{{ commande.produit.picture.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                            </a>
                            <div class=\"product-details\">
                                <div class=\"access\"> <a href=\"{{ path('commande_delete_item', {'id' : commande.id}) }}\" title=\"Retirer {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande) de votre panier\" class=\"remove-cart\"><i class=\"icon-close\"></i></a></div>
                                <p class=\"product-name\"> <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\"><strong> {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)</strong></a> </p>
                                {{ commande.produit.produit1.description|capitalize|truncate(50, false, ' ...') }}<br>
                                <span class=\"price\">{{ prixReduction2|number_format(2) }} F CFA</span> </div>
                        </li>
                        {% set totalPanier2 = totalPanier2 + prixReduction2 %}
                    {% endif %}
                {% endfor %}
            {% endif %}

        </ul>
        {% if commandes|length != 0 or produits|length != 0 %}
            <div class=\"summary\">
                <p class=\"subtotal\"> <span class=\"label\">Total panier:</span> <span class=\"price\">{{ (totalPanier + totalPanier2)|number_format(2) }} F CFA</span> </p>
            </div> 
            <a href=\"{{ path('Checkout_index1') }}\" title=\"Finalisation de la commande\">
                <div class=\"cart-checkout\">
                    <button class=\"button\"><i class=\"fa fa-check\"></i> <span>Finaliser</span></button> 
                </div>
            </a>
        {% endif %}
    </div>
</div>", "KountacBundle:Menu:cfa/panierMenuAllProducts.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/cfa/panierMenuAllProducts.html.twig");
    }
}
