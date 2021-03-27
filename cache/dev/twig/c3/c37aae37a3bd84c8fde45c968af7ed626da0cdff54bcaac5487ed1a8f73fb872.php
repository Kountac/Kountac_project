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

/* KountacBundle:Default:index_cfa.html.twig */
class __TwigTemplate_54c037ebe20b058b88568bdb6900490ae957ae4b85b94a550603bf7f5103f79d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:index_cfa.html.twig"));

        // line 1
        echo "
<!-- Code by ChrisME-->

    <div class=\"container new-layout\" style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#featured\" data-toggle=\"tab\" aria-expanded=\"false\">Meilleures ventes</a></li>
                    <li> <a href=\"#top-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Bon plans</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"featured\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
    
                                ";
        // line 16
        $context["nbr"] = 0;
        // line 17
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["populaires"] ?? $this->getContext($context, "populaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 18
            echo "                                    ";
            if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                // line 19
                echo "                                        ";
                if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                    // line 20
                    echo "                                            ";
                    $context["prixReduction"] = 0;
                    // line 21
                    echo "                                            ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 22
                    echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 29
                        echo "                                                                    ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 30
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                            <img src=\"";
                            // line 31
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            // line 33
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 34
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 35
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 38
                            echo "                                                                        ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 39
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 40
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 43
                            echo "                                                                    ";
                        }
                        // line 44
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                    // line 51
                    if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                        // line 52
                        echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                        echo " F CFA\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                    }
                    // line 54
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                    // line 58
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    ";
                    // line 61
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 62
                        echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                                                    ";
                    } else {
                        // line 64
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 65
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 66
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                    </div>
                                                                    ";
                    }
                    // line 69
                    echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "produit1ImageAssetM", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque ";
                    // line 77
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 94
                    $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                    // line 95
                    echo "                                        ";
                }
                // line 96
                echo "                                    ";
            }
            // line 97
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"top-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
                                ";
        // line 104
        $context["nbr"] = 0;
        // line 105
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reductions"] ?? $this->getContext($context, "reductions")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 106
            echo "                                    ";
            if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                // line 107
                echo "                                        ";
                if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                    // line 108
                    echo "                                            ";
                    $context["prixReduction"] = 0;
                    // line 109
                    echo "                                            ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 110
                    echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 117
                        echo "                                                                    ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 118
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                            <img src=\"";
                            // line 119
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            // line 121
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 122
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 123
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 126
                            echo "                                                                        ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 127
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 128
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 131
                            echo "                                                                    ";
                        }
                        // line 132
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                    // line 139
                    if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                        // line 140
                        echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                        echo " F CFA\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                    }
                    // line 142
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                    // line 146
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    ";
                    // line 149
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 150
                        echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                                                    ";
                    } else {
                        // line 152
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 153
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 154
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                    </div>
                                                                    ";
                    }
                    // line 157
                    echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "produit1ImageAssetM", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque ";
                    // line 165
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 174
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 182
                    $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                    // line 183
                    echo "                                        ";
                }
                // line 184
                echo "                                    ";
            }
            // line 185
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            ";
        // line 193
        if ((twig_length_filter($this->env, ($context["popup"] ?? $this->getContext($context, "popup"))) == 0)) {
            // line 194
            echo "     <!-- Beginning of the popup -->
     <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

          <!-- Modal content-->
          <div class=\"modal-content\" style=\"background-image: url('";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/newsletter.jpg"), "html", null, true);
            echo "'); background-repeat : no-repeat; background-size: 100% 100%;\">
            <div class=\"modal-header\">
                <div class=\"col-sm-11\"><center><h4><label>Inscrivez vous et gagnez une réduction de 15% sur votre premier achat </label></h4> </center></div>
                <div class=\"col-sm-1\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button></div>
            </div>
            <div class=\"modal-body\">
            <form action=\"";
            // line 206
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_pop_up_registration");
            echo "\" method=\"post\">
              ";
            // line 207
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo " 
              ";
            // line 208
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                <div class=\"col-sm-5\">
                    <label>Votre identifiant</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
            // line 213
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget');
            echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Adresse email</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
            // line 220
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
            echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Code Parrain</label>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codeparrain", []), 'widget');
            echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    ";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'label');
            echo "<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    ";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget');
            echo "
                </div>
                <br><br>
                <div class=\"col-sm-5\">
                    ";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'label');
            echo "<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    ";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget');
            echo "
                </div>
                <br><br><br>
                <div class=\"col-sm-12\">
                    <label class=\"inline\" for=\"newsletter\">
                        ";
            // line 246
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newsletter", []), 'widget');
            echo " &nbsp; &nbsp; ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newsletter", []), 'label');
            echo "
                    </label>
                </div>
                <br>
                <div class=\"col-sm-12\">
                    <label class=\"inline\" for=\"condition\">
                        <input type=\"checkbox\" id=\"condition\" name=\"_condition\" value=\"on\" required/> &nbsp; &nbsp; Acceptez les conditions d'utilisation
                    </label>
                </div>
                <br><br><br>
                <button class=\"button\" type=\"submit\"><span>Créez votre compte</span>&nbsp;<i class=\"icon-check\"></i> </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Déjà un Compte ? <label><a href=\"";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></label>
               </form>
            </div>
           
          </div>

        </div>
      </div>
    <!-- End Pop up -->
    ";
        }
        // line 268
        echo "    <!-- Begin Corresponding JS code -->
    <script type=\"text/javascript\">
        var count=-1; // initially -1 as we are having a delay of 1000ms
        var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
        function timer()
        {
          count=count+1;
          if (count >=60) {//+1 than the req time as we have a delay of 1000ms
            clearInterval(counter);
            \$(\"#myModal\").modal();
            return;
          }
            document.getElementById(\"timer\").innerHTML=count + \" secs\"; // watch for spelling
        }
    
    </script>            
    
    <div class=\"container new-layout\"  style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#new\" data-toggle=\"tab\" aria-expanded=\"false\">Nouveautés</a></li>
                    <li> <a href=\"#last-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Dernières ventes</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"new\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
                                ";
        // line 296
        $context["nbr"] = 0;
        // line 297
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nouveaux"] ?? $this->getContext($context, "nouveaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 298
            echo "                                    ";
            if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                // line 299
                echo "                                        ";
                if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                    // line 300
                    echo "                                            ";
                    $context["prixReduction"] = 0;
                    // line 301
                    echo "                                            ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 302
                    echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                    // line 308
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 309
                        echo "                                                                    ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 310
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                            <img src=\"";
                            // line 311
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            // line 313
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 314
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 315
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 318
                            echo "                                                                        ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 319
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 320
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 323
                            echo "                                                                    ";
                        }
                        // line 324
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 325
                    echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                    // line 328
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 329
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                    // line 330
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                    // line 331
                    if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                        // line 332
                        echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                        echo " F CFA\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                    }
                    // line 334
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                    // line 338
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    ";
                    // line 341
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 342
                        echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                                                    ";
                    } else {
                        // line 344
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 345
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 346
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                    </div>
                                                                    ";
                    }
                    // line 349
                    echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                    // line 354
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "produit1ImageAssetM", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque ";
                    // line 357
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"";
                    // line 365
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 366
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 374
                    $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                    // line 375
                    echo "                                        ";
                }
                // line 376
                echo "                                    ";
            }
            // line 377
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"last-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">

                                ";
        // line 385
        $context["nbr"] = 0;
        // line 386
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dernieresVentes"] ?? $this->getContext($context, "dernieresVentes")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 387
            echo "                                    ";
            if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                // line 388
                echo "                                        ";
                if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                    // line 389
                    echo "                                            ";
                    $context["prixReduction"] = 0;
                    // line 390
                    echo "                                            ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 391
                    echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                    // line 397
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 398
                        echo "                                                                    ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 399
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                            <img src=\"";
                            // line 400
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            // line 402
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 403
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 404
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 407
                            echo "                                                                        ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 408
                                echo "                                                                        <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 409
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                            }
                            // line 412
                            echo "                                                                    ";
                        }
                        // line 413
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 414
                    echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                    // line 417
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 418
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                    // line 419
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                    // line 420
                    if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                        // line 421
                        echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                        echo " F CFA\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                    }
                    // line 423
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                    // line 427
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1Nom", [])), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    ";
                    // line 430
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 431
                        echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                                                    ";
                    } else {
                        // line 433
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 434
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 435
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                    </div>
                                                                    ";
                    }
                    // line 438
                    echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                    // line 443
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "produit1ImageAssetM", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque ";
                    // line 446
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "produit1MarqueM", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"";
                    // line 454
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 455
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                    // line 463
                    $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                    // line 464
                    echo "                                        ";
                }
                // line 465
                echo "                                    ";
            }
            // line 466
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End code by ChrisME -->

<div id=\"all\" class=\"main-container col1-layout\">
    <div class=\"container\">
        <div class=\"special-products\">
            <div class=\"page-header\">
                <h2>Tous nos produits</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-main col-sm-12 col-xs-12\">
                <div class=\"shop-inner\">
                    ";
        // line 489
        if ((twig_length_filter($this->env, ($context["produits2"] ?? $this->getContext($context, "produits2"))) != 0)) {
            // line 490
            echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
            // line 492
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits2"] ?? $this->getContext($context, "produits2")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 493
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                    // line 494
                    echo "                                    ";
                    $context["prixReduction"] = 0;
                    // line 495
                    echo "                                    ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 496
                    echo "                                     <li class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure>
                                                        <center>
                                                            ";
                    // line 502
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 503
                        echo "                                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 504
                            echo "                                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                    <img src=\"";
                            // line 505
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            // line 507
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 508
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 509
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 512
                            echo "                                                                ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 513
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 514
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 517
                            echo "                                                                ";
                        }
                        // line 518
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 519
                    echo "                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Réserver ce produit\" href=\"";
                    // line 523
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                        <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 524
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                        <a title=\"Comparer ce produit\" href=\"";
                    // line 525
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                        ";
                    // line 526
                    if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                        // line 527
                        echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                        echo " F CFA\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                        ";
                    }
                    // line 529
                    echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                    // line 533
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "libelle", []), "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "libelle", []), "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                ";
                    // line 536
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 537
                        echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </span> </div>
                                                                ";
                    } else {
                        // line 539
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 540
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 541
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                        echo " F CFA</span> </p>
                                                                    </div>
                                                                ";
                    }
                    // line 544
                    echo "                                                            </div>
                                                            <center>
                                                                <div class=\"language-currency-wrapper left\">
                                                                    <div class=\"inner-cl\">
                                                                        <div class=\"block block-language form-language \">
                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                    // line 549
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "marque", []), "image", []), "AssetPath", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "</span></a></div>
                                                                            <ul>
                                                                                <li>
                                                                                    <strong><a title=\"Voir tous les produits de la marque ";
                    // line 552
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                            <div class=\"pro-action\">
                                                                <a href=\"";
                    // line 560
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 561
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                </a>                                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    ";
                }
                // line 570
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 571
            echo "
                        </div>
                        <div class=\"col-lg-6 col-lg-offset-3 navigation\">
                            ";
            // line 574
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
            echo "
                        </div>
                    ";
        }
        // line 577
        echo "                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:index_cfa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1309 => 577,  1303 => 574,  1298 => 571,  1292 => 570,  1280 => 561,  1276 => 560,  1261 => 552,  1249 => 549,  1242 => 544,  1236 => 541,  1232 => 540,  1229 => 539,  1223 => 537,  1221 => 536,  1207 => 533,  1201 => 529,  1193 => 527,  1191 => 526,  1187 => 525,  1183 => 524,  1179 => 523,  1173 => 519,  1167 => 518,  1164 => 517,  1158 => 514,  1153 => 513,  1150 => 512,  1144 => 509,  1139 => 508,  1137 => 507,  1132 => 505,  1127 => 504,  1124 => 503,  1120 => 502,  1112 => 496,  1109 => 495,  1106 => 494,  1103 => 493,  1099 => 492,  1095 => 490,  1093 => 489,  1069 => 467,  1063 => 466,  1060 => 465,  1057 => 464,  1055 => 463,  1044 => 455,  1040 => 454,  1025 => 446,  1013 => 443,  1006 => 438,  1000 => 435,  996 => 434,  993 => 433,  987 => 431,  985 => 430,  971 => 427,  965 => 423,  957 => 421,  955 => 420,  951 => 419,  947 => 418,  943 => 417,  938 => 414,  932 => 413,  929 => 412,  923 => 409,  918 => 408,  915 => 407,  909 => 404,  904 => 403,  902 => 402,  897 => 400,  892 => 399,  889 => 398,  885 => 397,  877 => 391,  874 => 390,  871 => 389,  868 => 388,  865 => 387,  860 => 386,  858 => 385,  849 => 378,  843 => 377,  840 => 376,  837 => 375,  835 => 374,  824 => 366,  820 => 365,  805 => 357,  793 => 354,  786 => 349,  780 => 346,  776 => 345,  773 => 344,  767 => 342,  765 => 341,  751 => 338,  745 => 334,  737 => 332,  735 => 331,  731 => 330,  727 => 329,  723 => 328,  718 => 325,  712 => 324,  709 => 323,  703 => 320,  698 => 319,  695 => 318,  689 => 315,  684 => 314,  682 => 313,  677 => 311,  672 => 310,  669 => 309,  665 => 308,  657 => 302,  654 => 301,  651 => 300,  648 => 299,  645 => 298,  640 => 297,  638 => 296,  608 => 268,  595 => 258,  578 => 246,  570 => 241,  564 => 238,  557 => 234,  551 => 231,  544 => 227,  534 => 220,  524 => 213,  516 => 208,  512 => 207,  508 => 206,  499 => 200,  491 => 194,  489 => 193,  480 => 186,  474 => 185,  471 => 184,  468 => 183,  466 => 182,  455 => 174,  451 => 173,  436 => 165,  424 => 162,  417 => 157,  411 => 154,  407 => 153,  404 => 152,  398 => 150,  396 => 149,  382 => 146,  376 => 142,  368 => 140,  366 => 139,  362 => 138,  358 => 137,  354 => 136,  349 => 133,  343 => 132,  340 => 131,  334 => 128,  329 => 127,  326 => 126,  320 => 123,  315 => 122,  313 => 121,  308 => 119,  303 => 118,  300 => 117,  296 => 116,  288 => 110,  285 => 109,  282 => 108,  279 => 107,  276 => 106,  271 => 105,  269 => 104,  261 => 98,  255 => 97,  252 => 96,  249 => 95,  247 => 94,  236 => 86,  232 => 85,  217 => 77,  205 => 74,  198 => 69,  192 => 66,  188 => 65,  185 => 64,  179 => 62,  177 => 61,  163 => 58,  157 => 54,  149 => 52,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  130 => 45,  124 => 44,  121 => 43,  115 => 40,  110 => 39,  107 => 38,  101 => 35,  96 => 34,  94 => 33,  89 => 31,  84 => 30,  81 => 29,  77 => 28,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  52 => 17,  50 => 16,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Code by ChrisME-->

    <div class=\"container new-layout\" style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#featured\" data-toggle=\"tab\" aria-expanded=\"false\">Meilleures ventes</a></li>
                    <li> <a href=\"#top-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Bon plans</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"featured\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
    
                                {% set nbr = 0 %}
                                {% for produit in populaires %}
                                    {% if produit.cfaprix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}

                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                {% for image in images %}
                                                                    {% if image.produit2 == produit.prod and image.top == 0 %}
                                                                        <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% if image.path2 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath2 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                        {% if image.path3 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath3 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            {% if produit.cfaprixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    {% if produit.reduction == 0 %}
                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                    {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                    {% endif %}
                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"{{ path('espace_marque', {'id' : produit.id}) }}\" title=\"Aller à la marque {{ produit.produit1MarqueM|capitalize }}\"><img src=\"{{ produit.produit1ImageAssetM|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit.produit1MarqueM|capitalize }}</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque {{ produit.produit1MarqueM|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit.id}) }}\"><span class=\"hidden-xs\">{{ produit.produit1MarqueM|capitalize }}</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"{{ path('quickView', {'id' : produit.id}) }}\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% set nbr = nbr + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"top-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
                                {% set nbr = 0 %}
                                {% for produit in reductions %}
                                    {% if produit.cfaprix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}

                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                {% for image in images %}
                                                                    {% if image.produit2 == produit.prod and image.top == 0 %}
                                                                        <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% if image.path2 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath2 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                        {% if image.path3 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath3 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            {% if produit.cfaprixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    {% if produit.reduction == 0 %}
                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                    {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                    {% endif %}
                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"{{ path('espace_marque', {'id' : produit.id}) }}\" title=\"Aller à la marque {{ produit.produit1MarqueM|capitalize }}\"><img src=\"{{ produit.produit1ImageAssetM|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit.produit1MarqueM|capitalize }}</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque {{ produit.produit1MarqueM|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit.id}) }}\"><span class=\"hidden-xs\">{{ produit.produit1MarqueM|capitalize }}</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"{{ path('quickView', {'id' : produit.id}) }}\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% set nbr = nbr + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            {% if popup|length == 0 %}
     <!-- Beginning of the popup -->
     <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

          <!-- Modal content-->
          <div class=\"modal-content\" style=\"background-image: url('{{ asset('images/newsletter.jpg') }}'); background-repeat : no-repeat; background-size: 100% 100%;\">
            <div class=\"modal-header\">
                <div class=\"col-sm-11\"><center><h4><label>Inscrivez vous et gagnez une réduction de 15% sur votre premier achat </label></h4> </center></div>
                <div class=\"col-sm-1\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button></div>
            </div>
            <div class=\"modal-body\">
            <form action=\"{{ path(\"kountac_pop_up_registration\") }}\" method=\"post\">
              {{ form_start(form) }} 
              {{ form_errors(form) }}
                <div class=\"col-sm-5\">
                    <label>Votre identifiant</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    {{ form_widget(form.username) }}
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Adresse email</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    {{ form_widget(form.email) }}
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Code Parrain</label>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    {{ form_widget(form.codeparrain) }}
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    {{ form_label(form.plainPassword.first) }}<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    {{ form_widget(form.plainPassword.first) }}
                </div>
                <br><br>
                <div class=\"col-sm-5\">
                    {{ form_label(form.plainPassword.second) }}<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    {{ form_widget(form.plainPassword.second) }}
                </div>
                <br><br><br>
                <div class=\"col-sm-12\">
                    <label class=\"inline\" for=\"newsletter\">
                        {{ form_widget(form.newsletter) }} &nbsp; &nbsp; {{ form_label(form.newsletter) }}
                    </label>
                </div>
                <br>
                <div class=\"col-sm-12\">
                    <label class=\"inline\" for=\"condition\">
                        <input type=\"checkbox\" id=\"condition\" name=\"_condition\" value=\"on\" required/> &nbsp; &nbsp; Acceptez les conditions d'utilisation
                    </label>
                </div>
                <br><br><br>
                <button class=\"button\" type=\"submit\"><span>Créez votre compte</span>&nbsp;<i class=\"icon-check\"></i> </button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Déjà un Compte ? <label><a href=\"{{ path(\"fos_user_security_login\") }}\">Se connecter</a></label>
               </form>
            </div>
           
          </div>

        </div>
      </div>
    <!-- End Pop up -->
    {% endif %}
    <!-- Begin Corresponding JS code -->
    <script type=\"text/javascript\">
        var count=-1; // initially -1 as we are having a delay of 1000ms
        var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
        function timer()
        {
          count=count+1;
          if (count >=60) {//+1 than the req time as we have a delay of 1000ms
            clearInterval(counter);
            \$(\"#myModal\").modal();
            return;
          }
            document.getElementById(\"timer\").innerHTML=count + \" secs\"; // watch for spelling
        }
    
    </script>            
    
    <div class=\"container new-layout\"  style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#new\" data-toggle=\"tab\" aria-expanded=\"false\">Nouveautés</a></li>
                    <li> <a href=\"#last-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Dernières ventes</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"new\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
                                {% set nbr = 0 %}
                                {% for produit in nouveaux %}
                                    {% if produit.cfaprix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}

                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                {% for image in images %}
                                                                    {% if image.produit2 == produit.prod and image.top == 0 %}
                                                                        <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% if image.path2 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath2 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                        {% if image.path3 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath3 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            {% if produit.cfaprixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    {% if produit.reduction == 0 %}
                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                    {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                    {% endif %}
                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"{{ path('espace_marque', {'id' : produit.id}) }}\" title=\"Aller à la marque {{ produit.produit1MarqueM|capitalize }}\"><img src=\"{{ produit.produit1ImageAssetM|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit.produit1MarqueM|capitalize }}</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque {{ produit.produit1MarqueM|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit.id}) }}\"><span class=\"hidden-xs\">{{ produit.produit1MarqueM|capitalize }}</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"{{ path('quickView', {'id' : produit.id}) }}\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% set nbr = nbr + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"last-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">

                                {% set nbr = 0 %}
                                {% for produit in dernieresVentes %}
                                    {% if produit.cfaprix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}

                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                {% for image in images %}
                                                                    {% if image.produit2 == produit.prod and image.top == 0 %}
                                                                        <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% if image.path2 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath2 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                        {% if image.path3 %}
                                                                        <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                            <img src=\"{{ image.AssetPath3 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                        </a>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            {% if produit.cfaprixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
                                                            <div class=\"item-content\">
                                                                <div class=\"item-price\">
                                                                    {% if produit.reduction == 0 %}
                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                    {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                    {% endif %}
                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"{{ path('espace_marque', {'id' : produit.id}) }}\" title=\"Aller à la marque {{ produit.produit1MarqueM|capitalize }}\"><img src=\"{{ produit.produit1ImageAssetM|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit.produit1MarqueM|capitalize }}</span></a></div>
                                                                                <ul>
                                                                                    <li>
                                                                                        <strong><a title=\"Voir tous les produits de la marque {{ produit.produit1MarqueM|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit.id}) }}\"><span class=\"hidden-xs\">{{ produit.produit1MarqueM|capitalize }}</span></a></strong>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <div class=\"pro-action\">
                                                                    <a href=\"{{ path('quickView', {'id' : produit.id}) }}\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% set nbr = nbr + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End code by ChrisME -->

<div id=\"all\" class=\"main-container col1-layout\">
    <div class=\"container\">
        <div class=\"special-products\">
            <div class=\"page-header\">
                <h2>Tous nos produits</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-main col-sm-12 col-xs-12\">
                <div class=\"shop-inner\">
                    {% if produits2|length != 0 %}
                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                {% for produit in produits2 %}
                                    {% if produit.cfaprix %}
                                    {% set prixReduction = 0 %}
                                    {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}
                                     <li class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure>
                                                        <center>
                                                            {% for image in images %}
                                                                {% if image.produit2 == produit and image.top == 0 %}
                                                                <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% if image.path2 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath2 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% endif %}
                                                                {% if image.path3 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath3 |imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Réserver ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                        <a title=\"Ajouter aux souhaits\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                        {% if produit.cfaprixCommande %}
                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                {% if produit.reduction == 0 %}
                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                {% endif %}
                                                            </div>
                                                            <center>
                                                                <div class=\"language-currency-wrapper left\">
                                                                    <div class=\"inner-cl\">
                                                                        <div class=\"block block-language form-language \">
                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"{{ path('espace_marque', {'id' : produit.id}) }}\" title=\"Aller à la marque {{ produit.produit1.marque.marque|capitalize }}\"><img src=\"{{ produit.produit1.marque.image.AssetPath|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit.produit1.marque.marque|capitalize }}</span></a></div>
                                                                            <ul>
                                                                                <li>
                                                                                    <strong><a title=\"Voir tous les produits de la marque {{ produit.produit1.marque.marque|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit.id}) }}\"><span class=\"hidden-xs\">{{ produit.produit1.marque.marque|capitalize }}</span></a></strong>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                            <div class=\"pro-action\">
                                                                <a href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                </a>                                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {% endif %}
                                {% endfor %}

                        </div>
                        <div class=\"col-lg-6 col-lg-offset-3 navigation\">
                            {{ knp_pagination_render(pagination) }}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>


", "KountacBundle:Default:index_cfa.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/index_cfa.html.twig");
    }
}
