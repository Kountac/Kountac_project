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

/* KountacBundle:Default:produits/all_products.html.twig */
class __TwigTemplate_33827b484b9f12312c7349d6861a83595d2990597d9db5380c1a17056d897434 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAllProduct.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "::baseAllProduct.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/all_products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo (((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) ? ("Filtre") : ("Recherche"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_meta($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 8
        echo "  <meta name=\"description\" content=\"";
        echo (((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) ? ("Filtre") : ("Recherche"));
        echo " -  Achetez le nouveau prêt à porter africain -  Les dernières tendances modes Africaine en un clic -  The new made in Africa, la qualité africaine livrée chez vous -  Originalité et authenticité, la mode africaine chez vous\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 13
            echo "    <!-- Breadcrumbs -->

    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
            echo "\">Accueil</a><span>&raquo;</span></li>
                            ";
            // line 21
            if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                // line 22
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Résultat du tri</strong></li>
                            ";
            } elseif (            // line 24
(isset($context["recherche"]) || array_key_exists("recherche", $context))) {
                // line 25
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Recherche \"";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["mot"] ?? $this->getContext($context, "mot"))), "html", null, true);
                echo "\"</strong></li>            
                            ";
            } elseif (            // line 27
(isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                // line 28
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la catégorie \"";
                // line 29
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom"))), "html", null, true);
                echo "\"</strong></li>
                            ";
            } elseif (            // line 30
(isset($context["collection"]) || array_key_exists("collection", $context))) {
                // line 31
                echo "                            <li class=\"\"> <a title=\"Voir tous les produits\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\">Tous les produits</a><span>&raquo;</span></li>
                            <li><strong>Produits de la collection \"";
                // line 32
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom"))), "html", null, true);
                echo "\"</strong></li>
                            ";
            } else {
                // line 34
                echo "                            <li><strong>Tous les produits</strong></li>
                            ";
            }
            // line 36
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
            // line 53
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
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cat-slider-img2.jpg"), "html", null, true);
            echo "\"></a> </div>

                                    <!-- End Item --> 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"shop-inner\">
                        ";
            // line 72
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
                // line 73
                echo "                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
                echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir tous les produits</a></div>
                            </div>
                        ";
            } else {
                // line 78
                echo "                            <div class=\"page-title\">
                                ";
                // line 79
                if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                    // line 80
                    echo "                                    <h2>Résultat du tri</h2>
                                ";
                } elseif (                // line 81
(isset($context["recherche"]) || array_key_exists("recherche", $context))) {
                    // line 82
                    echo "                                    <h2 class=\"page-title\">Resultats de la recherche : \"";
                    echo twig_escape_filter($this->env, ($context["mot"] ?? $this->getContext($context, "mot")), "html", null, true);
                    echo "\"</h2>
                                ";
                } elseif (                // line 83
(isset($context["categorie"]) || array_key_exists("categorie", $context))) {
                    // line 84
                    echo "                                    <h2 class=\"page-title\">Tous les produits de la catégorie \"";
                    echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
                    echo "\"</h2>
                                ";
                } elseif (                // line 85
(isset($context["collection"]) || array_key_exists("collection", $context))) {
                    // line 86
                    echo "                                    <h2 class=\"page-title\">Tous les produits de la collection \"";
                    echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
                    echo "\"</h2>
                                ";
                } else {
                    // line 88
                    echo "                                    <h2>Tous les produits</h2>
                                ";
                }
                // line 90
                echo "                            </div>
                        ";
            }
            // line 92
            echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 95
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 96
                    echo "                                    ";
                    $context["prixReduction"] = 0;
                    // line 97
                    echo "                                    ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 98
                    echo "                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                            ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 105
                        echo "                                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 106
                            echo "                                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb")), "html", null, true);
                            echo "\" alt=\"\"></a>
                                                                ";
                            // line 107
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 108
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 109
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb")), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 112
                            echo "                                                                ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 113
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 114
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb")), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 117
                            echo "                                                                ";
                        }
                        // line 118
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        ";
                    // line 126
                    if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                        // line 127
                        echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                        echo " €\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        ";
                    }
                    // line 129
                    echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                    // line 133
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
                    // line 136
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 137
                        echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </span> </div>
                                                                ";
                    } else {
                        // line 139
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 140
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 141
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                        echo " €</span> </p>
                                                                    </div>
                                                                ";
                    }
                    // line 144
                    echo "                                                            </div>
                                                            <center>
                                                                <div class=\"language-currency-wrapper left\">
                                                                    <div class=\"inner-cl\">
                                                                        <div class=\"block block-language form-language \">
                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                    // line 149
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
                    // line 152
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
                    // line 160
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 161
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
                // line 171
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            ";
            // line 176
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
            echo "
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"";
            // line 181
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
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo "</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"";
            // line 195
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
                                        ";
            // line 206
            $context["nbr"] = 0;
            // line 207
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 208
                echo "                                            <div class=\"layered-Category\">
                                                <h2 class=\"saider-bar-title2\" data-toggle=\"collapse\" data-target=\"#cat";
                // line 209
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "</h2>
                                                <div id=\"cat";
                // line 210
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "\" class=\"collapse layered-content\">
                                                    ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                    // line 212
                    echo "                                                        ";
                    $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                    // line 213
                    echo "                                                        <div class=\"layered-Category\">
                                                            <h2 class=\"saider-bar-title3\" data-toggle=\"collapse\" data-target=\"#cat";
                    // line 214
                    echo twig_escape_filter($this->env, ($context["nbr"] ?? $this->getContext($context, "nbr")), "html", null, true);
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "</h2>
                                                            <div id=\"cat";
                    // line 215
                    echo twig_escape_filter($this->env, ($context["nbr"] ?? $this->getContext($context, "nbr")), "html", null, true);
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "\" class=\"collapse layered-content\">
                                                                ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                        // line 217
                        echo "                                                                    <small>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                        // line 218
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\" name=\"categorie\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\">
                                                                        <label for=\"";
                        // line 219
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
                    // line 222
                    echo "                                                            </div>
                                                        </div>                                                       
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                                        <h2 class=\"saider-bar-title2\">
                                            <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                            <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                        </h2>
                                        

                                        <!--div class=\"layered-Category\">
                                            <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#cat\">Test Header</h2>
                                            <div id=\"cat\" class=\"collapse layered-content\">
                                                <ul class=\"check-box-list\">
                                                    ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 239
                echo "                                                        <li>
                                                            <input type=\"radio\" id=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\">
                                                            <label for=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                            ";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                    // line 243
                    echo "                                                            <tiny>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\">
                                                                <label for=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\"> <span class=\"button\"></span> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "</label><br>
                                                            </tiny>
                                                                ";
                    // line 247
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                        // line 248
                        echo "                                                                    <small>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                        // line 249
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\" name=\"categorie\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\">
                                                                        <label for=\"";
                        // line 250
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
                    // line 253
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "                                                        </li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                                                    <li>
                                                        <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                                        <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div-->



                                        <!--ul class=\"check-box-list\">
                                            ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 268
                echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\">
                                                    <label for=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                    ";
                // line 271
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                    // line 272
                    echo "                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\">
                                                        <label for=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\"> <span class=\"button\"></span> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "</label><br>
                                                    </tiny>
                                                        ";
                    // line 276
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                        // line 277
                        echo "                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                        // line 278
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\" name=\"categorie\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\">
                                                                <label for=\"";
                        // line 279
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
                    // line 282
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 283
                echo "                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                                <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                            </li>
                                        </ul-->
                                    </div>
                                </div>
                                    
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#marque\"><a>Marque(s)</a></h2>
                                    <div id=\"marque\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
            foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
                // line 298
                echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
                // line 299
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\" name=\"marque\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\">
                                                    <label for=\"";
                // line 300
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "marque", []), "html", null, true);
                echo "\"> 
                                                        <img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["marque"], "image", []), "AssetPath", []), "recherche2ThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                        <span class=\"button\"></span> (";
                // line 302
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["marque"], "marque", [])), "html", null, true);
                echo ")
                                                    </label>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
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
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
            foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
                // line 319
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 320
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\" name=\"motif[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 322
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["motif"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 323
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["motif"], "libelle", [])), "html", null, true);
                echo "
                                                </label>
                                            </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
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
            // line 341
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "34"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> ";
            // line 345
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "36"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> ";
            // line 349
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "38"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> ";
            // line 353
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "40"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> ";
            // line 357
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "42"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> ";
            // line 361
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "44"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> ";
            // line 365
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "46"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> ";
            // line 369
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "48"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> ";
            // line 373
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
            // line 392
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
            // line 404
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
            foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
                // line 405
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 406
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\" name=\"mannequin[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 407
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 408
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 409
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
                echo "
                                                    <span class=\"count\"><br> (taille std.:";
                // line 410
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
            // line 415
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
            // line 430
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_taille_poids");
            echo "\">
                        ";
            // line 431
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                        ";
            // line 432
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
            // line 445
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'row');
            echo "
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
            // line 450
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
            // line 463
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                    </form>
                    <br>
                    
                    ";
            // line 467
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Compare:compareAside"), []);
            // line 468
            echo "
                    ";
            // line 469
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenuAllProducts"), []);
            // line 470
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
            // line 492
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo ",
                    max: ";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "maxeuro", []), "html", null, true);
            echo ",
                    values: [ ";
            // line 494
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
        } elseif ((twig_length_filter($this->env,         // line 503
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 504
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/cfa/all_products.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 504)->display($context);
            // line 505
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 506
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/usa/all_products.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 506)->display($context);
            // line 507
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 508
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/livre/all_products.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 508)->display($context);
            // line 509
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 510
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/naira/all_products.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 510)->display($context);
            // line 511
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 512
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/all/all_products.html.twig", "KountacBundle:Default:produits/all_products.html.twig", 512)->display($context);
            // line 513
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/all_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1144 => 513,  1141 => 512,  1138 => 511,  1135 => 510,  1132 => 509,  1129 => 508,  1126 => 507,  1123 => 506,  1120 => 505,  1117 => 504,  1115 => 503,  1101 => 494,  1097 => 493,  1093 => 492,  1069 => 470,  1067 => 469,  1064 => 468,  1062 => 467,  1055 => 463,  1039 => 450,  1031 => 445,  1015 => 432,  1011 => 431,  1007 => 430,  990 => 415,  975 => 410,  971 => 409,  967 => 408,  963 => 407,  957 => 406,  954 => 405,  950 => 404,  935 => 392,  913 => 373,  906 => 369,  899 => 365,  892 => 361,  885 => 357,  878 => 353,  871 => 349,  864 => 345,  857 => 341,  841 => 327,  831 => 323,  827 => 322,  823 => 321,  817 => 320,  814 => 319,  810 => 318,  796 => 306,  786 => 302,  782 => 301,  778 => 300,  772 => 299,  769 => 298,  765 => 297,  751 => 285,  744 => 283,  738 => 282,  727 => 279,  721 => 278,  718 => 277,  714 => 276,  707 => 274,  701 => 273,  698 => 272,  694 => 271,  688 => 270,  682 => 269,  679 => 268,  675 => 267,  662 => 256,  655 => 254,  649 => 253,  638 => 250,  632 => 249,  629 => 248,  625 => 247,  618 => 245,  612 => 244,  609 => 243,  605 => 242,  599 => 241,  593 => 240,  590 => 239,  586 => 238,  574 => 228,  566 => 225,  558 => 222,  547 => 219,  541 => 218,  538 => 217,  534 => 216,  529 => 215,  522 => 214,  519 => 213,  516 => 212,  512 => 211,  508 => 210,  502 => 209,  499 => 208,  494 => 207,  492 => 206,  476 => 195,  472 => 194,  456 => 181,  448 => 176,  442 => 172,  436 => 171,  423 => 161,  419 => 160,  404 => 152,  392 => 149,  385 => 144,  379 => 141,  375 => 140,  372 => 139,  366 => 137,  364 => 136,  350 => 133,  344 => 129,  336 => 127,  334 => 126,  330 => 125,  326 => 124,  322 => 123,  316 => 119,  310 => 118,  307 => 117,  301 => 114,  296 => 113,  293 => 112,  287 => 109,  282 => 108,  280 => 107,  273 => 106,  270 => 105,  266 => 104,  258 => 98,  255 => 97,  252 => 96,  249 => 95,  245 => 94,  241 => 92,  237 => 90,  233 => 88,  227 => 86,  225 => 85,  220 => 84,  218 => 83,  213 => 82,  211 => 81,  208 => 80,  206 => 79,  203 => 78,  197 => 75,  193 => 73,  191 => 72,  179 => 63,  166 => 53,  147 => 36,  143 => 34,  138 => 32,  133 => 31,  131 => 30,  127 => 29,  122 => 28,  120 => 27,  116 => 26,  111 => 25,  109 => 24,  103 => 22,  101 => 21,  97 => 20,  88 => 13,  85 => 12,  79 => 11,  69 => 8,  63 => 7,  53 => 4,  47 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::baseAllProduct.html.twig\" %}

{% block title %}
  {{ euro|length != 0 ? \"Filtre\" : \"Recherche\" }}
{% endblock %}
 
{% block meta %}
  <meta name=\"description\" content=\"{{ euro|length != 0 ? \"Filtre\" : \"Recherche\" }} -  Achetez le nouveau prêt à porter africain -  Les dernières tendances modes Africaine en un clic -  The new made in Africa, la qualité africaine livrée chez vous -  Originalité et authenticité, la mode africaine chez vous\" />
{% endblock %}
               
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
                                {% for produit in produits %}
                                    {% if produit.europrix %}
                                    {% set prixReduction = 0 %}
                                    {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}
                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                            {% for image in images %}
                                                                {% if image.produit2 == produit and image.top == 0 %}
                                                                <a href=\"{{ path('product', {'id' : produit.id}) }}\"><img src=\"{{ asset(image.AssetPath |imagine_filter('resizeThumb')) }}\" alt=\"\"></a>
                                                                {% if image.path2 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ asset(image.AssetPath2 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                </a>
                                                                {% endif %}
                                                                {% if image.path3 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ asset(image.AssetPath3 |imagine_filter('resizeThumb')) }}\" alt=\"\">
                                                                </a>
                                                                {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickViewAllProducts', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        {% if produit.europrixCommande %}
                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                {% if produit.reduction == 0 %}
                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </span> </div>
                                                                {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.europrix|number_format(2) }} €</span> </p>
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
                                        {% set nbr = 0 %}
                                        {% for categorie in categories %}
                                            <div class=\"layered-Category\">
                                                <h2 class=\"saider-bar-title2\" data-toggle=\"collapse\" data-target=\"#cat{{ categorie.nom|capitalize }}\">{{ categorie.nom|capitalize }}</h2>
                                                <div id=\"cat{{ categorie.nom|capitalize }}\" class=\"collapse layered-content\">
                                                    {% for categorie2 in categorie.children %}
                                                        {% set nbr = nbr + 1 %}
                                                        <div class=\"layered-Category\">
                                                            <h2 class=\"saider-bar-title3\" data-toggle=\"collapse\" data-target=\"#cat{{ nbr }}{{ categorie2.nom|capitalize }}\">{{ categorie2.nom|capitalize }}</h2>
                                                            <div id=\"cat{{ nbr }}{{ categorie2.nom|capitalize }}\" class=\"collapse layered-content\">
                                                                {% for categorie3 in categorie2.children %}
                                                                    <small>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"{{ categorie3.id }}\" name=\"categorie\" value=\"{{ categorie3.id }}\">
                                                                        <label for=\"{{ categorie3.id }}\"> <span class=\"button\"></span> {{ categorie3.nom|capitalize }}</label><br>
                                                                    </small>
                                                                {% endfor %}
                                                            </div>
                                                        </div>                                                       
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        {% endfor %}
                                        <h2 class=\"saider-bar-title2\">
                                            <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                            <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                        </h2>
                                        

                                        <!--div class=\"layered-Category\">
                                            <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#cat\">Test Header</h2>
                                            <div id=\"cat\" class=\"collapse layered-content\">
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
                                        </div-->



                                        <!--ul class=\"check-box-list\">
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
                                        </ul-->
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
        {% include 'KountacBundle:Default:produits/cfa/all_products.html.twig' %}
    {% elseif usa|length != 0 %}
        {% include 'KountacBundle:Default:produits/usa/all_products.html.twig' %}
    {% elseif livre|length != 0 %}
        {% include 'KountacBundle:Default:produits/livre/all_products.html.twig' %}
    {% elseif naira|length != 0 %}
        {% include 'KountacBundle:Default:produits/naira/all_products.html.twig' %}
    {% elseif all|length != 0 %}
        {% include 'KountacBundle:Default:produits/all/all_products.html.twig' %}
    {% endif %}
{% endblock %}
", "KountacBundle:Default:produits/all_products.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/all_products.html.twig");
    }
}
