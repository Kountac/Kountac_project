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

/* KountacBundle:Default:produits/all_productsResultats.html.twig */
class __TwigTemplate_0271a12541225ece4dff0942786e6cda481291ed44af8a6d0234a0c56c5d0c8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/all_productsResultats.html.twig"));

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
            echo "    <!-- Breadcrumbs -->

    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
            echo "\">Accueil</a><span>&raquo;</span></li>
                            ";
            // line 13
            if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                // line 14
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Résultat du tri</strong></li>
                            ";
            } elseif (            // line 16
(isset($context["recherche"]) || array_key_exists("recherche", $context))) {
                // line 17
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Recherche \"";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["mot"] ?? $this->getContext($context, "mot"))), "html", null, true);
                echo "\"</strong></li>            
                            ";
            } elseif (            // line 19
(isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 20
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la catégorie \"";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom"))), "html", null, true);
                echo "\"</strong></li>
                            ";
            } elseif (            // line 22
(isset($context["collection"]) || array_key_exists("collection", $context))) {
                // line 23
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la collection \"";
                // line 24
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom"))), "html", null, true);
                echo "\"</strong></li>
                            ";
            } else {
                // line 26
                echo "                            <li><strong>Tous les produits</strong></li>
                            ";
            }
            // line 28
            echo "                        </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <div class=\"main-container col2-left-layout\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-main col-sm-9 col-xs-12 col-sm-push-3\">
                    <div class=\"category-description std\">
                        <div class=\"slider-items-products\">
                            <div id=\"category-desc-slider\" class=\"product-flexslider hidden-buttons\">
                                <div class=\"slider-items slider-width-col1 owl-carousel owl-theme\"> 

                                    <!-- Item -->
                                    <div class=\"item\"> <a href=\"#x\"><img alt=\"\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cat-slider-img1.jpg"), "html", null, true);
            echo "\"></a>
                                        <div class=\"inner-info\">
                                            <div class=\"cat-img-title\"> 
                                                <h2 class=\"cat-heading\"></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item --> 

                                    <!-- Item -->
                                    <div class=\"item\"> <a href=\"#x\"><img alt=\"\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cat-slider-img2.jpg"), "html", null, true);
            echo "\"></a> </div>

                                    <!-- End Item --> 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"shop-inner\">
                        ";
            // line 64
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
                // line 65
                echo "                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir tous les produits</a></div>
                            </div>
                        ";
            } else {
                // line 70
                echo "                            <div class=\"page-title\">
                                ";
                // line 71
                if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                    // line 72
                    echo "                                    <h2>Résultat du tri</h2>
                                ";
                } elseif (                // line 73
(isset($context["recherche"]) || array_key_exists("recherche", $context))) {
                    // line 74
                    echo "                                    <h2 class=\"page-title\">Resultats de la recherche : \"";
                    echo twig_escape_filter($this->env, ($context["mot"] ?? $this->getContext($context, "mot")), "html", null, true);
                    echo "\"</h2>
                                ";
                } elseif (                // line 75
(isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                    // line 76
                    echo "                                    <h2 class=\"page-title\">Tous les produits de la catégorie \"";
                    echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
                    echo "\"</h2>
                                ";
                } elseif (                // line 77
(isset($context["collection"]) || array_key_exists("collection", $context))) {
                    // line 78
                    echo "                                    <h2 class=\"page-title\">Tous les produits de la collection \"";
                    echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
                    echo "\"</h2>
                                ";
                } else {
                    // line 80
                    echo "                                    <h2>Tous les produits</h2>
                                ";
                }
                // line 82
                echo "                            </div>
                        ";
            }
            // line 84
            echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 87
                echo "                                    ";
                if ($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrix", [])) {
                    // line 88
                    echo "                                    ";
                    $context["prixReduction"] = 0;
                    // line 89
                    echo "                                    ";
                    $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrix", []) - (($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrix", []) * $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "reduction", [])) / 100));
                    // line 90
                    echo "                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                                ";
                    // line 96
                    if (($this->getAttribute($context["image"], "top", []) == 0)) {
                        // line 97
                        echo "                                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb")), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        // line 100
                        if ($this->getAttribute($context["image"], "path2", [])) {
                            // line 101
                            echo "                                                                    <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                            echo "\">
                                                                        <img src=\"";
                            // line 102
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb")), "html", null, true);
                            echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        }
                        // line 105
                        echo "                                                                    ";
                        if ($this->getAttribute($context["image"], "path3", [])) {
                            // line 106
                            echo "                                                                    <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                            echo "\">
                                                                        <img src=\"";
                            // line 107
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb")), "html", null, true);
                            echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        }
                        // line 110
                        echo "                                                                ";
                    } else {
                        // line 111
                        echo "                                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb")), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        // line 114
                        if ($this->getAttribute($context["image"], "path2", [])) {
                            // line 115
                            echo "                                                                    <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                            echo "\">
                                                                        <img src=\"";
                            // line 116
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb")), "html", null, true);
                            echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        }
                        // line 119
                        echo "                                                                    ";
                        if ($this->getAttribute($context["image"], "path3", [])) {
                            // line 120
                            echo "                                                                    <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                            echo "\">
                                                                        <img src=\"";
                            // line 121
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb")), "html", null, true);
                            echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                        }
                        // line 124
                        echo "                                                                ";
                    }
                    // line 125
                    echo "                                                       </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        ";
                    // line 132
                    if ($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrixCommande", [])) {
                        // line 133
                        echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrixCommande", []), 2), "html", null, true);
                        echo " €\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        ";
                    }
                    // line 135
                    echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                    // line 139
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                ";
                    // line 142
                    if (($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "reduction", []) == 0)) {
                        // line 143
                        echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </span> </div>
                                                                ";
                    } else {
                        // line 145
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 146
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 147
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "europrix", []), 2), "html", null, true);
                        echo " €</span> </p>
                                                                    </div>
                                                                ";
                    }
                    // line 150
                    echo "                                                            </div>
                                                            <center>
                                                                <div class=\"language-currency-wrapper left\">
                                                                    <div class=\"inner-cl\">
                                                                        <div class=\"block block-language form-language \">
                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" title=\"Aller à la marque ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "marque", []), "image", []), "AssetPath", []), "marqueLogoThumb"), "html", null, true);
                    echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "</span></a></div>
                                                                            <ul>
                                                                                <li>
                                                                                    <strong><a title=\"Voir tous les produits de la marque ";
                    // line 158
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\"><span class=\"hidden-xs\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "produit2", []), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo "</span></a></strong>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                            <div class=\"pro-action\">
                                                                <a href=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($this->getAttribute($context["image"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                    echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                </a>                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    ";
                }
                // line 177
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            ";
            // line 182
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
            echo "
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"";
            // line 187
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
            echo "\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3>Affiner la recherche</h3>
                            </div>

                            <div class=\"block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Prix (€)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <fieldset>
                                                    <!--output name=\"prix\">";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo "</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "maxeuro", []), "html", null, true);
            echo "\" value=\"0\" step=\"1\" oninput=\"prix.value=parseInt(prix.value)\" autocomplete=\"off\" /-->
                                                    <input type=\"text\" name=\"prix\" id=\"amount\" readonly style=\"border:0; color:#f6931f; font-weight:bold; margin: 10px;\">
                                                    <div id=\"slider-range\" style=\" margin-left: 10px; margin-right: 10px;\"></div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#categorie\"><a>Catégorie(s)</a></h2>
                                    <div id=\"categorie\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 214
                echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\">
                                                    <label for=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                    ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                    // line 218
                    echo "                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\">
                                                        <label for=\"";
                    // line 220
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\"> <span class=\"button\"></span> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "</label><br>
                                                    </tiny>
                                                        ";
                    // line 222
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                        // line 223
                        echo "                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                        // line 224
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\" name=\"categorie\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\">
                                                                <label for=\"";
                        // line 225
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\"> <span class=\"button\"></span> ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie3"], "nom", [])), "html", null, true);
                        echo "</label><br>
                                                            </small>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                                <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#marque\"><a>Marque(s)</a></h2>
                                    <div id=\"marque\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
            foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
                // line 244
                echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\" name=\"marque\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\">
                                                    <label for=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\"> 
                                                        <img src=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["marque"], "image", []), "AssetPath", []), "recherche2ThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                        <span class=\"button\"></span> (";
                // line 248
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["marque"], "marque", [])), "html", null, true);
                echo ")
                                                    </label>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                            <br>
                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_marques\" name=\"marque\" value=\"toutes_les_marques\" checked=\"checked\">
                                                <label for=\"toutes_les_marques\"> <span class=\"button\"></span> Toutes les marques</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#motif\"><a>Motif(s)</a></h2>
                                    <div id=\"motif\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
            foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
                // line 265
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\" name=\"motif[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["motif"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 269
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["motif"], "libelle", [])), "html", null, true);
                echo "
                                                </label>
                                            </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                                            <br>
                                            <li>
                                                <input type=\"checkbox\" id=\"tous_les_motifs\" name=\"motif\" value=\"tous_les_motifs\">
                                                <label for=\"tous_les_motifs\"> <span class=\"button\"></span> Toutes les motifs</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"size-area\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#taille\"><a>Taille(s)</a></h2>
                                    <div id=\"taille\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <input type=\"radio\" id=\"xs_taille\" name=\"taille\" value=\"34\">
                                                <label for=\"xs_taille\"> <span class=\"button\"></span> ";
            // line 287
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "34"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> ";
            // line 291
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "36"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> ";
            // line 295
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "38"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> ";
            // line 299
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "40"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> ";
            // line 303
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "42"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> ";
            // line 307
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "44"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> ";
            // line 311
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "46"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> ";
            // line 315
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "48"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> ";
            // line 319
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "50"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_tailles\" name=\"taille\" value=\"toutes_les_tailles\" checked=\"checked\">
                                                <label for=\"toutes_les_tailles\"> <span class=\"button\"></span> Toutes les tailles</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"cart-checkout\">
                            <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Chercher</span></button> 
                        </div>
                    </form>
                    <br>
                    
                    
                    <form method=\"POST\" action=\"";
            // line 338
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_avatar");
            echo "\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3 data-toggle=\"collapse\" data-target=\"#avatar\"><a>Par avatar</a></h3>
                            </div>

                            <div id=\"avatar\" class=\"collapse block-content\">
                                
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Mannequin(s) disponible(s)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
            // line 350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
            foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
                // line 351
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 352
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\" name=\"mannequin[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 353
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 354
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 355
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
                echo "
                                                    <span class=\"count\"><br> (taille std.:";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleStandardMannequin", []), "html", null, true);
                echo ", poids: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "poidsMannequin", []), "html", null, true);
                echo "Kg, Taille:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleMannequin", []), "html", null, true);
                echo "m)</span> 
                                                </label>
                                            </li>
                                            <br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mannequin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "                                            <br>
                                            <li>
                                                <input type=\"checkbox\" id=\"tous_les_mannequins\" name=\"mannequin\" value=\"tous_les_mannequins\" >
                                                <label for=\"tous_les_mannequins\"> <span class=\"button\"></span> Toutes les mannequins</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"cart-checkout\">
                                    <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Trouver</span></button> 
                                </div>
                            </div>
                        </div>
                    </form>
                                            
                    <form method=\"POST\" action=\"";
            // line 376
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_taille_poids");
            echo "\">
                        ";
            // line 377
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                        ";
            // line 378
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3 data-toggle=\"collapse\" data-target=\"#taille_poids\"><a>Par taille - poids</a></h3>
                            </div>

                            <div id=\"taille_poids\" class=\"collapse block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Taille/Poids</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
            // line 391
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'row');
            echo "
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
            // line 396
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poids", []), 'row');
            echo "
                                                </div><!--/ [col] -->
                                           </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class=\"cart-checkout\">
                                    <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Trouver</span></button> 
                                </div>
                            </div>
                        </div>
                        ";
            // line 409
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                    </form>
                    <br>
                    
                    ";
            // line 413
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Compare:compareAside"), []);
            // line 414
            echo "
                    ";
            // line 415
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenuAllProducts"), []);
            // line 416
            echo "
                </aside>
            </div>
        </div>
    </div>
        <!--script type=\"text/javascript\">
                \$(function () {
                    \$('.range').next().text('--'); // Valeur par défaut
                    \$('.range').on('input', function () {
                        var \$set = \$(this).val();
                        \$(this).next().text(\$set);
                    });
                });
            </script-->
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$( function() {
                \$( \"#slider-range\" ).slider({
                    range: true,
                    min: ";
            // line 438
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo ",
                    max: ";
            // line 439
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "maxeuro", []), "html", null, true);
            echo ",
                    values: [ ";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "maxeuro", []), "html", null, true);
            echo " ],
                    slide: function( event, ui ) {
                        \$( \"#amount\" ).val(ui.values[ 0 ].toLocaleString('en') + \" - \" + ui.values[ 1 ].toLocaleString('en')  );
                    }
                });
                \$( \"#amount\" ).val( \$( \"#slider-range\" ).slider( \"values\", 0 ).toLocaleString('en') + \" - \" +
                    \$( \"#slider-range\" ).slider( \"values\", 1 ).toLocaleString('en') );
            } );
        </script>
    ";
        } elseif ((twig_length_filter($this->env,         // line 449
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 450
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/cfa/all_productsResultats.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 450)->display($context);
            // line 451
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 452
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/usa/all_productsResultats.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 452)->display($context);
            // line 453
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 454
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/livre/all_productsResultats.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 454)->display($context);
            // line 455
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 456
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/naira/all_productsResultats.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 456)->display($context);
            // line 457
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 458
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/all/all_productsResultats.html.twig", "KountacBundle:Default:produits/all_productsResultats.html.twig", 458)->display($context);
            // line 459
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/all_productsResultats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  960 => 459,  957 => 458,  954 => 457,  951 => 456,  948 => 455,  945 => 454,  942 => 453,  939 => 452,  936 => 451,  933 => 450,  931 => 449,  917 => 440,  913 => 439,  909 => 438,  885 => 416,  883 => 415,  880 => 414,  878 => 413,  871 => 409,  855 => 396,  847 => 391,  831 => 378,  827 => 377,  823 => 376,  806 => 361,  791 => 356,  787 => 355,  783 => 354,  779 => 353,  773 => 352,  770 => 351,  766 => 350,  751 => 338,  729 => 319,  722 => 315,  715 => 311,  708 => 307,  701 => 303,  694 => 299,  687 => 295,  680 => 291,  673 => 287,  657 => 273,  647 => 269,  643 => 268,  639 => 267,  633 => 266,  630 => 265,  626 => 264,  612 => 252,  602 => 248,  598 => 247,  594 => 246,  588 => 245,  585 => 244,  581 => 243,  567 => 231,  560 => 229,  554 => 228,  543 => 225,  537 => 224,  534 => 223,  530 => 222,  523 => 220,  517 => 219,  514 => 218,  510 => 217,  504 => 216,  498 => 215,  495 => 214,  491 => 213,  474 => 201,  470 => 200,  454 => 187,  446 => 182,  440 => 178,  434 => 177,  421 => 167,  417 => 166,  402 => 158,  390 => 155,  383 => 150,  377 => 147,  373 => 146,  370 => 145,  364 => 143,  362 => 142,  348 => 139,  342 => 135,  334 => 133,  332 => 132,  328 => 131,  324 => 130,  320 => 129,  314 => 125,  311 => 124,  305 => 121,  300 => 120,  297 => 119,  291 => 116,  286 => 115,  284 => 114,  279 => 112,  274 => 111,  271 => 110,  265 => 107,  260 => 106,  257 => 105,  251 => 102,  246 => 101,  244 => 100,  239 => 98,  234 => 97,  232 => 96,  224 => 90,  221 => 89,  218 => 88,  215 => 87,  211 => 86,  207 => 84,  203 => 82,  199 => 80,  193 => 78,  191 => 77,  186 => 76,  184 => 75,  179 => 74,  177 => 73,  174 => 72,  172 => 71,  169 => 70,  163 => 67,  159 => 65,  157 => 64,  145 => 55,  132 => 45,  113 => 28,  109 => 26,  104 => 24,  99 => 23,  97 => 22,  93 => 21,  88 => 20,  86 => 19,  82 => 18,  77 => 17,  75 => 16,  69 => 14,  67 => 13,  63 => 12,  54 => 5,  51 => 4,  45 => 3,  22 => 1,);
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
    <!-- Breadcrumbs -->

    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"{{ path ('kountac_homepage')}}\">Accueil</a><span>&raquo;</span></li>
                            {% if tri is defined %}
                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"{{ path('all_products') }}\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Résultat du tri</strong></li>
                            {% elseif recherche is defined %}
                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"{{ path('all_products') }}\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Recherche \"{{ mot|capitalize }}\"</strong></li>            
                            {% elseif categorie is defined %}
                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"{{ path('all_products') }}\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la catégorie \"{{ nom|capitalize }}\"</strong></li>
                            {% elseif collection is defined %}
                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"{{ path('all_products') }}\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la collection \"{{ nom|capitalize }}\"</strong></li>
                            {% else %}
                            <li><strong>Tous les produits</strong></li>
                            {% endif %}
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End --> 
    <!-- Main Container -->
    <div class=\"main-container col2-left-layout\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-main col-sm-9 col-xs-12 col-sm-push-3\">
                    <div class=\"category-description std\">
                        <div class=\"slider-items-products\">
                            <div id=\"category-desc-slider\" class=\"product-flexslider hidden-buttons\">
                                <div class=\"slider-items slider-width-col1 owl-carousel owl-theme\"> 

                                    <!-- Item -->
                                    <div class=\"item\"> <a href=\"#x\"><img alt=\"\" src=\"{{ asset('images/cat-slider-img1.jpg') }}\"></a>
                                        <div class=\"inner-info\">
                                            <div class=\"cat-img-title\"> 
                                                <h2 class=\"cat-heading\"></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item --> 

                                    <!-- Item -->
                                    <div class=\"item\"> <a href=\"#x\"><img alt=\"\" src=\"{{ asset('images/cat-slider-img2.jpg') }}\"></a> </div>

                                    <!-- End Item --> 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"shop-inner\">
                        {% if produits|length == 0 %}
                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('all_products') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir tous les produits</a></div>
                            </div>
                        {% else %}
                            <div class=\"page-title\">
                                {% if tri is defined %}
                                    <h2>Résultat du tri</h2>
                                {% elseif recherche is defined %}
                                    <h2 class=\"page-title\">Resultats de la recherche : \"{{ mot }}\"</h2>
                                {% elseif categorie is defined %}
                                    <h2 class=\"page-title\">Tous les produits de la catégorie \"{{ nom }}\"</h2>
                                {% elseif collection is defined %}
                                    <h2 class=\"page-title\">Tous les produits de la collection \"{{ nom }}\"</h2>
                                {% else %}
                                    <h2>Tous les produits</h2>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                {% for image in produits %}
                                    {% if image.produit2.europrix %}
                                    {% set prixReduction = 0 %}
                                    {% set prixReduction = image.produit2.europrix - (image.produit2.europrix * image.produit2.reduction/100) %}
                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                                {% if image.top == 0 %}
                                                                    <a href=\"{{ path('product', {'id' : image.produit2.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% if image.path2 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product', {'id' : image.produit2.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath2 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                    {% if image.path3 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product', {'id' : image.produit2.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath3 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                {% else %}
                                                                    <a href=\"{{ path('product_mannequin', {'id': image.produit2.id, 'id_image': image.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% if image.path2 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product_mannequin', {'id': image.produit2.id, 'id_image': image.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath2 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                    {% if image.path3 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product_mannequin', {'id': image.produit2.id, 'id_image': image.id}) }}\">
                                                                        <img src=\"{{ asset(image.AssetPath3 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                {% endif %}
                                                       </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : image.produit2.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickViewAllProducts', {'id' : image.produit2.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : image.produit2.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        {% if image.produit2.europrixCommande %}
                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ image.produit2.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : image.produit2.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"{{ image.produit2.produit1.nom|capitalize }} - {{ image.produit2.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : image.produit2.id}) }}\">{{ image.produit2.produit1.nom|capitalize }} - {{ image.produit2.libelle.libelle|capitalize }}</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                {% if image.produit2.reduction == 0 %}
                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </span> </div>
                                                                {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ image.produit2.europrix|number_format(2) }} €</span> </p>
                                                                    </div>
                                                                {% endif %}
                                                            </div>
                                                            <center>
                                                                <div class=\"language-currency-wrapper left\">
                                                                    <div class=\"inner-cl\">
                                                                        <div class=\"block block-language form-language \">
                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"{{ path('espace_marque', {'id' : image.produit2.id}) }}\" title=\"Aller à la marque {{ image.produit2.produit1.marque.marque|capitalize }}\"><img src=\"{{ image.produit2.produit1.marque.image.AssetPath|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ image.produit2.produit1.marque.marque|capitalize }}</span></a></div>
                                                                            <ul>
                                                                                <li>
                                                                                    <strong><a title=\"Voir tous les produits de la marque {{ image.produit2.produit1.marque.marque|capitalize }}\" href=\"{{ path('espace_marque', {'id' : image.produit2.id}) }}\"><span class=\"hidden-xs\">{{ image.produit2.produit1.marque.marque|capitalize }}</span></a></strong>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                            <div class=\"pro-action\">
                                                                <a href=\"{{ path('quickViewAllProducts', {'id' : image.produit2.id}) }}\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                </a>                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            {{ knp_pagination_render(produits) }}
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"{{ path('all_products') }}\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3>Affiner la recherche</h3>
                            </div>

                            <div class=\"block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Prix (€)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <fieldset>
                                                    <!--output name=\"prix\">{{ europrix[0].mineuro }}</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"{{ europrix[0].mineuro }}\" max=\"{{ europrix[0].maxeuro }}\" value=\"0\" step=\"1\" oninput=\"prix.value=parseInt(prix.value)\" autocomplete=\"off\" /-->
                                                    <input type=\"text\" name=\"prix\" id=\"amount\" readonly style=\"border:0; color:#f6931f; font-weight:bold; margin: 10px;\">
                                                    <div id=\"slider-range\" style=\" margin-left: 10px; margin-right: 10px;\"></div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#categorie\"><a>Catégorie(s)</a></h2>
                                    <div id=\"categorie\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            {% for categorie in categories %}
                                                <li>
                                                    <input type=\"radio\" id=\"{{ categorie.id }}\" name=\"categorie\" value=\"{{ categorie.id }}\">
                                                    <label for=\"{{ categorie.id }}\"> <span class=\"button\"></span> {{ categorie.nom|capitalize }}</label><br>
                                                    {% for categorie2 in categorie.children %}
                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"{{ categorie2.id }}\" name=\"categorie\" value=\"{{ categorie2.id }}\">
                                                        <label for=\"{{ categorie2.id }}\"> <span class=\"button\"></span> {{ categorie2.nom|capitalize }}</label><br>
                                                    </tiny>
                                                        {% for categorie3 in categorie2.children %}
                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"{{ categorie3.id }}\" name=\"categorie\" value=\"{{ categorie3.id }}\">
                                                                <label for=\"{{ categorie3.id }}\"> <span class=\"button\"></span> {{ categorie3.nom|capitalize }}</label><br>
                                                            </small>
                                                        {% endfor %}
                                                    {% endfor %}
                                                </li>
                                            {% endfor %}
                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                                <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#marque\"><a>Marque(s)</a></h2>
                                    <div id=\"marque\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            {% for marque in marques %}
                                                <li>
                                                    <input type=\"radio\" id=\"{{ marque.marque }}\" name=\"marque\" value=\"{{ marque.marque }}\">
                                                    <label for=\"{{ marque.marque }}\"> 
                                                        <img src=\"{{ marque.image.AssetPath|imagine_filter('recherche2ThumbItem') }}\" alt=\"\">
                                                        <span class=\"button\"></span> ({{ marque.marque|capitalize }})
                                                    </label>
                                                </li>
                                            {% endfor %}
                                            <br>
                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_marques\" name=\"marque\" value=\"toutes_les_marques\" checked=\"checked\">
                                                <label for=\"toutes_les_marques\"> <span class=\"button\"></span> Toutes les marques</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#motif\"><a>Motif(s)</a></h2>
                                    <div id=\"motif\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            {% for motif in motifs %}
                                            <li>
                                                <input type=\"checkbox\" id=\"{{ motif.libelle }}\" name=\"motif[]\" value=\"{{ motif.id }}\">
                                                <label for=\"{{ motif.libelle }}\"> <span class=\"button\"></span> 
                                                    <img src=\"{{ motif.AssetPath|imagine_filter('rechercheThumbItem') }}\" alt=\"\">
                                                    {{ motif.libelle|capitalize }}
                                                </label>
                                            </li>
                                            {% endfor %}
                                            <br>
                                            <li>
                                                <input type=\"checkbox\" id=\"tous_les_motifs\" name=\"motif\" value=\"tous_les_motifs\">
                                                <label for=\"tous_les_motifs\"> <span class=\"button\"></span> Toutes les motifs</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"size-area\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#taille\"><a>Taille(s)</a></h2>
                                    <div id=\"taille\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <input type=\"radio\" id=\"xs_taille\" name=\"taille\" value=\"34\">
                                                <label for=\"xs_taille\"> <span class=\"button\"></span> {{ ('34')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> {{ ('36')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> {{ ('38')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> {{ ('40')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> {{ ('42')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> {{ ('44')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> {{ ('46')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> {{ ('48')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> {{ ('50')|upper }} </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_tailles\" name=\"taille\" value=\"toutes_les_tailles\" checked=\"checked\">
                                                <label for=\"toutes_les_tailles\"> <span class=\"button\"></span> Toutes les tailles</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"cart-checkout\">
                            <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Chercher</span></button> 
                        </div>
                    </form>
                    <br>
                    
                    
                    <form method=\"POST\" action=\"{{ path('recherche_avatar') }}\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3 data-toggle=\"collapse\" data-target=\"#avatar\"><a>Par avatar</a></h3>
                            </div>

                            <div id=\"avatar\" class=\"collapse block-content\">
                                
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Mannequin(s) disponible(s)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            {% for mannequin in mannequins %}
                                            <li>
                                                <input type=\"checkbox\" id=\"{{ mannequin.nomMannequin }}\" name=\"mannequin[]\" value=\"{{ mannequin.id }}\">
                                                <label for=\"{{ mannequin.nomMannequin }}\"> <span class=\"button\"></span> 
                                                    <img src=\"{{ mannequin.AssetPath|imagine_filter('rechercheThumbItem') }}\" alt=\"\">
                                                    {{ mannequin.nomMannequin|capitalize }}
                                                    <span class=\"count\"><br> (taille std.:{{ mannequin.tailleStandardMannequin }}, poids: {{ mannequin.poidsMannequin }}Kg, Taille:{{ mannequin.tailleMannequin }}m)</span> 
                                                </label>
                                            </li>
                                            <br>
                                            {% endfor %}
                                            <br>
                                            <li>
                                                <input type=\"checkbox\" id=\"tous_les_mannequins\" name=\"mannequin\" value=\"tous_les_mannequins\" >
                                                <label for=\"tous_les_mannequins\"> <span class=\"button\"></span> Toutes les mannequins</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"cart-checkout\">
                                    <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Trouver</span></button> 
                                </div>
                            </div>
                        </div>
                    </form>
                                            
                    <form method=\"POST\" action=\"{{ path('recherche_taille_poids') }}\">
                        {{ form_start(form) }}
                        {{ form_errors(form) }}
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3 data-toggle=\"collapse\" data-target=\"#taille_poids\"><a>Par taille - poids</a></h3>
                            </div>

                            <div id=\"taille_poids\" class=\"collapse block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Taille/Poids</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    {{ form_row(form.taille) }}
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    {{ form_row(form.poids) }}
                                                </div><!--/ [col] -->
                                           </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class=\"cart-checkout\">
                                    <button class=\"button\" type=\"submit\"><i class=\"fa fa-check\"></i> <span>Trouver</span></button> 
                                </div>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </form>
                    <br>
                    
                    {% render(controller('KountacBundle:Compare:compareAside')) %}

                    {% render(controller('KountacBundle:Panier:panierMenuAllProducts')) %}

                </aside>
            </div>
        </div>
    </div>
        <!--script type=\"text/javascript\">
                \$(function () {
                    \$('.range').next().text('--'); // Valeur par défaut
                    \$('.range').on('input', function () {
                        var \$set = \$(this).val();
                        \$(this).next().text(\$set);
                    });
                });
            </script-->
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$( function() {
                \$( \"#slider-range\" ).slider({
                    range: true,
                    min: {{ europrix[0].mineuro }},
                    max: {{ europrix[0].maxeuro }},
                    values: [ {{ europrix[0].mineuro }}, {{ europrix[0].maxeuro }} ],
                    slide: function( event, ui ) {
                        \$( \"#amount\" ).val(ui.values[ 0 ].toLocaleString('en') + \" - \" + ui.values[ 1 ].toLocaleString('en')  );
                    }
                });
                \$( \"#amount\" ).val( \$( \"#slider-range\" ).slider( \"values\", 0 ).toLocaleString('en') + \" - \" +
                    \$( \"#slider-range\" ).slider( \"values\", 1 ).toLocaleString('en') );
            } );
        </script>
    {% elseif cfa|length != 0 %}
        {% include 'KountacBundle:Default:produits/cfa/all_productsResultats.html.twig' %}
    {% elseif usa|length != 0 %}
        {% include 'KountacBundle:Default:produits/usa/all_productsResultats.html.twig' %}
    {% elseif livre|length != 0 %}
        {% include 'KountacBundle:Default:produits/livre/all_productsResultats.html.twig' %}
    {% elseif naira|length != 0 %}
        {% include 'KountacBundle:Default:produits/naira/all_productsResultats.html.twig' %}
    {% elseif all|length != 0 %}
        {% include 'KountacBundle:Default:produits/all/all_productsResultats.html.twig' %}
    {% endif %}
{% endblock %}
", "KountacBundle:Default:produits/all_productsResultats.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/all_productsResultats.html.twig");
    }
}
