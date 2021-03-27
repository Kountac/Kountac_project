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

/* KountacBundle:Menu:cfa/panierMenu.html.twig */
class __TwigTemplate_e057405342203a14be67f45d1643c519463725ad44d2ce7e0d000f8cca0c8617 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:cfa/panierMenu.html.twig"));

        // line 1
        $context["totalPanier"] = 0;
        // line 2
        $context["totalPanier2"] = 0;
        // line 3
        echo "<div class=\"top-cart-contain\">
    <div class=\"mini-cart\">
        ";
        // line 5
        if (((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0) && (twig_length_filter($this->env, ($context["commandes"] ?? $this->getContext($context, "commandes"))) == 0))) {
            // line 6
            echo "        <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/panier.png", "PanierLogo"), "html", null, true);
            echo "\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\">PANIER VIDE</div>
            </a></div>
        <div class=\"top-cart-content\">
                <div class=\"block-subtitle hidden-xs\"> Aucun produit dans le panier</div>
                 
            </div>
        ";
        } else {
            // line 15
            echo "            <div data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href>
                <div class=\"cart-icon\"><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/panier.png", "PanierLogo"), "html", null, true);
            echo "\" alt=\"\"></div>
                <div class=\"shoppingcart-inner hidden-xs hidden-sm\"><span class=\"cart-title\">Mon panier</span> <span class=\"cart-total\">";
            // line 17
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
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 24
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", [])) {
                    // line 25
                    echo "                        ";
                    $context["prixReduction"] = 0;
                    // line 26
                    echo "                        ";
                    $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                    // line 27
                    echo "
                    <li class=\"item last odd\"> 
                        <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "\" class=\"product-image\">
                            ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 31
                        echo "                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "produit2", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 32
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                            echo "\" alt=\"\">
                                ";
                        }
                        // line 34
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo " de votre panier\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerpanier", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "</a> </p>
                            ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                    echo "<br>
                            <strong>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array"), "html", null, true);
                    echo "</strong> x <span class=\"price\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </div>
                    </li>
                        ";
                    // line 41
                    $context["totalPanier"] = (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + (($context["prixReduction"] ?? $this->getContext($context, "prixReduction")) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", []), [], "array")));
                    // line 42
                    echo "                        ";
                }
                // line 43
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 45
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? $this->getContext($context, "commandes")));
                foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                    // line 46
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "cfaprixCommande", [])) {
                        // line 47
                        echo "                        ";
                        $context["prixReduction2"] = $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "cfaprixCommande", []);
                        // line 48
                        echo "
                    <li class=\"item last odd\"> 
                        <a href=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo "\" class=\"product-image\">
                            <img src=\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "picture", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">
                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " de votre panier\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delete_item", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
                        echo "\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["commande"], "produit", []), "id", [])]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "produit1", []), "nom", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "produit", []), "libelle", []), "libelle", [])), "html", null, true);
                        echo " (Commande)</a> </p>
                            ";
                        // line 55
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commande"], "contenu", [])), 50, false, " ..."), "html", null, true);
                        echo "<br>
                            <span class=\"price\">";
                        // line 56
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")), 2), "html", null, true);
                        echo " F CFA</span> </div>
                    </li>
                        ";
                        // line 58
                        $context["totalPanier2"] = (($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2")) + ($context["prixReduction2"] ?? $this->getContext($context, "prixReduction2")));
                        // line 59
                        echo "                        ";
                    }
                    // line 60
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                    ";
            }
            // line 62
            echo "                </ul>
                <div class=\"top-subtotal\">Total: <span class=\"price\">";
            // line 63
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["totalPanier"] ?? $this->getContext($context, "totalPanier")) + ($context["totalPanier2"] ?? $this->getContext($context, "totalPanier2"))), 2), "html", null, true);
            echo " F CFA</span></div>
                <div class=\"actions\">
                    <a title=\"Finaliser votre commande\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Checkout_index1");
            echo "\">
                        <button class=\"btn-checkout\" type=\"button\"><i class=\"fa fa-check\"></i><span>Finaliser</span></button>
                    </a>
                    <a title=\"Aller à mon panier pour plus de détail\" href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">
                        <button class=\"view-cart\" type=\"button\"><i class=\"fa fa-shopping-cart\"></i> <span>Mon panier</span></button>
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        // line 75
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:cfa/panierMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 75,  248 => 68,  242 => 65,  237 => 63,  234 => 62,  231 => 61,  225 => 60,  222 => 59,  220 => 58,  215 => 56,  211 => 55,  203 => 54,  195 => 53,  190 => 51,  182 => 50,  178 => 48,  175 => 47,  172 => 46,  167 => 45,  164 => 44,  158 => 43,  155 => 42,  153 => 41,  146 => 39,  142 => 38,  134 => 37,  126 => 36,  123 => 35,  117 => 34,  111 => 32,  108 => 31,  104 => 30,  96 => 29,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  79 => 23,  64 => 17,  60 => 16,  57 => 15,  46 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 2,  33 => 1,);
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
                        {% if produit.produit2.cfaprix %}
                        {% set prixReduction = 0 %}
                        {% set prixReduction = produit.produit2.cfaprix - (produit.produit2.cfaprix * produit.produit2.reduction/100) %}

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
                            <strong>{{ panier[produit.id] }}</strong> x <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </div>
                    </li>
                        {% set totalPanier = totalPanier + (prixReduction * panier[produit.id]) %}
                        {% endif %}
                    {% endfor %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% for commande in commandes %}
                        {% if commande.produit.cfaprixCommande %}
                        {% set prixReduction2 = commande.produit.cfaprixCommande %}

                    <li class=\"item last odd\"> 
                        <a href=\"{{ path('product', {'id' : commande.produit.id}) }}\" title=\"{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }}\" class=\"product-image\">
                            <img src=\"{{ commande.produit.picture.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">
                        </a>
                        <div class=\"product-details\"> <a title=\"Retirer {{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} de votre panier\" href=\"{{ path('commande_delete_item', { 'id' : commande.id }) }}\" class=\"remove-cart\"><i class=\"icon-close\"></i></a>
                            <p class=\"product-name\"><a href=\"{{ path('product', {'id' : commande.produit.id}) }}\">{{ commande.produit.produit1.nom|capitalize }} - {{ commande.produit.libelle.libelle|capitalize }} (Commande)</a> </p>
                            {{ commande.contenu|capitalize|truncate(50, false, ' ...') }}<br>
                            <span class=\"price\">{{ prixReduction2|number_format(2) }} F CFA</span> </div>
                    </li>
                        {% set totalPanier2 = totalPanier2 + prixReduction2 %}
                        {% endif %}
                    {% endfor %}
                    {% endif %}
                </ul>
                <div class=\"top-subtotal\">Total: <span class=\"price\">{{ (totalPanier + totalPanier2)|number_format(2) }} F CFA</span></div>
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
", "KountacBundle:Menu:cfa/panierMenu.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/cfa/panierMenu.html.twig");
    }
}
