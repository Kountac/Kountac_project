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

/* KountacBundle:Menu:panierMenu.html.twig */
class __TwigTemplate_ee26e437baae743163c973ad9afb460ee05f8c81b300238c6cb53353388f349b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:panierMenu.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 2
            $context["totalPanier"] = 0;
            // line 3
            $context["totalPanier2"] = 0;
            // line 4
            echo "<div class=\"top-cart-contain\">
    <div class=\"mini-cart\">
        ";
            // line 6
            if (((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0) && (twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) == 0))) {
                // line 7
                echo "        <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/panier.png", "PanierLogo"), "html", null, true);
                echo "\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\">PANIER VIDE</div>
            </a></div>
        <div class=\"top-cart-content\">
                <div class=\"block-subtitle hidden-xs\"> Aucun produit dans le panier</div>
                 
            </div>
        ";
            } else {
                // line 16
                echo "            <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/panier.png", "PanierLogo"), "html", null, true);
                echo "\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\"><span class=\"cart-title\">Mon panier</span> <span class=\"cart-total\">";
                // line 18
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                echo " Produit(s) ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " <br>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))), "html", null, true);
                    echo " Commande(s)";
                }
                echo "</span></div>
            </a></div>
        <div>
            <div class=\"top-cart-content\">
                <div class=\"block-subtitle hidden-xs\"></div>
                <ul id=\"cart-sidebar\" class=\"mini-products-list\">
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 25
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", [])) {
                        // line 26
                        echo "                        ";
                        $context["prixReduction"] = 0;
                        // line 27
                        echo "                        ";
                        $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                        // line 28
                        echo "
                    <li class=\"item last odd\"> 
                        <a href=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "\" class=\"product-image\">
                            ";
                        // line 31
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 32
                            echo "                                ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 33
                                echo "                                    <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                                echo "\" alt=\"\">
                                ";
                            }
                            // line 35
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer ";
                        // line 37
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " de votre panier\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerpanier", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "</a> </p>
                            ";
                        // line 39
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                        echo "<br>
                            <strong>";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                        echo "</strong> x <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </div>
                    </li>
                        ";
                        // line 42
                        $context["totalPanier"] = (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + (($context["prixReduction"] ?? $this->getContext($context, "prixReduction")) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")));
                        // line 43
                        echo "                        ";
                    }
                    // line 44
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 46
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
                    foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                        // line 47
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "europrixCommande", [])) {
                            // line 48
                            echo "                        ";
                            $context["prixReduction2"] = $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "europrixCommande", []);
                            // line 49
                            echo "
                    <li class=\"item last odd\"> 
                        <a href=\"";
                            // line 51
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                            echo "\" class=\"product-image\">
                            <img src=\"";
                            // line 52
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "picture", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                            echo "\" alt=\"\">
                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer ";
                            // line 54
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                            echo " de votre panier\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delete_item", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
                            echo "\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"";
                            // line 55
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                            echo " (Commande)</a> </p>
                            ";
                            // line 56
                            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commande"], "contenu", [])), 50, false, " ..."), "html", null, true);
                            echo "<br>
                            <span class=\"price\">";
                            // line 57
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")), 2), "html", null, true);
                            echo " €</span> </div>
                    </li>
                        ";
                            // line 59
                            $context["totalPanier2"] = (($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2")) + ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")));
                            // line 60
                            echo "                        ";
                        }
                        // line 61
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                    ";
                }
                // line 63
                echo "                </ul>
                <div class=\"top-subtotal\">Total: <span class=\"price\">";
                // line 64
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + ($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2"))), 2), "html", null, true);
                echo " €</span></div>
                <div class=\"actions\">
                    <a title=\"Finaliser votre commande\" href=\"";
                // line 66
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Checkout_index1");
                echo "\">
                        <button class=\"btn-checkout\" type=\"button\"><i class=\"fa fa-check\"></i><span>Finaliser</span></button>
                    </a>
                    <a title=\"Aller à mon panier pour plus de détail\" href=\"";
                // line 69
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
                echo "\">
                        <button class=\"view-cart\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Mon panier</span></button>
                    </a>
                </div>
            </div>
        </div>
        ";
            }
            // line 76
            echo "    </div>
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 78
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 79
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:livre/panierMenu.html.twig", "KountacBundle:Menu:panierMenu.html.twig", 79)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 80
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 81
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:usa/panierMenu.html.twig", "KountacBundle:Menu:panierMenu.html.twig", 81)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 82
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 83
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:naira/panierMenu.html.twig", "KountacBundle:Menu:panierMenu.html.twig", 83)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 84
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 85
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:cfa/panierMenu.html.twig", "KountacBundle:Menu:panierMenu.html.twig", 85)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 86
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 87
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:all/panierMenu.html.twig", "KountacBundle:Menu:panierMenu.html.twig", 87)->display($context);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:panierMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 87,  284 => 86,  281 => 85,  279 => 84,  276 => 83,  274 => 82,  271 => 81,  269 => 80,  266 => 79,  264 => 78,  260 => 76,  250 => 69,  244 => 66,  239 => 64,  236 => 63,  233 => 62,  227 => 61,  224 => 60,  222 => 59,  217 => 57,  213 => 56,  205 => 55,  197 => 54,  192 => 52,  184 => 51,  180 => 49,  177 => 48,  174 => 47,  169 => 46,  166 => 45,  160 => 44,  157 => 43,  155 => 42,  148 => 40,  144 => 39,  136 => 38,  128 => 37,  125 => 36,  119 => 35,  113 => 33,  110 => 32,  106 => 31,  98 => 30,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  81 => 24,  66 => 18,  62 => 17,  59 => 16,  48 => 8,  45 => 7,  43 => 6,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
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
<div class=\"top-cart-contain\">
    <div class=\"mini-cart\">
        {% if produits|length == 0 and commandes|length == 0 %}
        <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"{{ 'css/panier.png'|imagine_filter('PanierLogo') }}\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\">PANIER VIDE</div>
            </a></div>
        <div class=\"top-cart-content\">
                <div class=\"block-subtitle hidden-xs\"> Aucun produit dans le panier</div>
                 
            </div>
        {% else %}
            <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"{{ 'css/panier.png'|imagine_filter('PanierLogo') }}\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\"><span class=\"cart-title\">Mon panier</span> <span class=\"cart-total\">{{ produits|length }} Produit(s) {% if is_granted('IS_AUTHENTICATED_FULLY') %} <br>{{ commandes|length }} Commande(s){% endif %}</span></div>
            </a></div>
        <div>
            <div class=\"top-cart-content\">
                <div class=\"block-subtitle hidden-xs\"></div>
                <ul id=\"cart-sidebar\" class=\"mini-products-list\">
                    {% for produit in produits %}
                        {% if produit.produit2.europrix %}
                        {% set prixReduction = 0 %}
                        {% set prixReduction = produit.produit2.europrix - (produit.produit2.europrix * produit.produit2.reduction/100) %}

                    <li class=\"item last odd\"> 
                        <a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\" title=\"{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}\" class=\"product-image\">
                            {% for image in images %}
                                {% if image.produit2 == produit.produit2 and image.top == 0 %}
                                    <img src=\"{{ image.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                                {% endif %}
                            {% endfor %}
                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer {{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }} de votre panier\" href=\"{{ path('supprimerpanier', { 'id' : produit.id }) }}\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}</a> </p>
                            {{ produit.produit2.produit1.description|capitalize|truncate(50, false, ' ...') }}<br>
                            <strong>{{ panier[produit.id] }}</strong> x <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </div>
                    </li>
                        {% set totalPanier = totalPanier + (prixReduction * panier[produit.id]) %}
                        {% endif %}
                    {% endfor %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% for commande in commandes %}
                        {% if commande.produit.europrixCommande %}
                        {% set prixReduction2 = commande.produit.europrixCommande %}

                    <li class=\"item last odd\"> 
                        <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\" title=\"{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }}\" class=\"product-image\">
                            <img src=\"{{ commande.produit.picture.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} de votre panier\" href=\"{{ path('commande_delete_item', { 'id' : commande.id }) }}\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"{{ path('product', {'id' : commande.produit.id}) }}\">{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)</a> </p>
                            {{ commande.contenu|capitalize|truncate(50, false, ' ...') }}<br>
                            <span class=\"price\">{{ prixReduction2|number_format(2) }} €</span> </div>
                    </li>
                        {% set totalPanier2 = totalPanier2 + prixReduction2 %}
                        {% endif %}
                    {% endfor %}
                    {% endif %}
                </ul>
                <div class=\"top-subtotal\">Total: <span class=\"price\">{{ (totalPanier + totalPanier2)|number_format(2) }} €</span></div>
                <div class=\"actions\">
                    <a title=\"Finaliser votre commande\" href=\"{{ path('Checkout_index1') }}\">
                        <button class=\"btn-checkout\" type=\"button\"><i class=\"fa fa-check\"></i><span>Finaliser</span></button>
                    </a>
                    <a title=\"Aller à mon panier pour plus de détail\" href=\"{{ path('panier') }}\">
                        <button class=\"view-cart\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Mon panier</span></button>
                    </a>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% elseif livre|length != 0 %}
    {% include 'KountacBundle:Menu:livre/panierMenu.html.twig' %}
{% elseif usa|length != 0 %}
    {% include 'KountacBundle:Menu:usa/panierMenu.html.twig' %}
{% elseif naira|length != 0 %}
    {% include 'KountacBundle:Menu:naira/panierMenu.html.twig' %}
{% elseif cfa|length != 0 %}
    {% include 'KountacBundle:Menu:cfa/panierMenu.html.twig' %}
{% elseif all|length != 0 %}
    {% include 'KountacBundle:Menu:all/panierMenu.html.twig' %}
{% endif %}
", "KountacBundle:Menu:panierMenu.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/panierMenu.html.twig");
    }
}
