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

/* KountacBundle:Default:produits/cfa/marque_espacesResultats.html.twig */
class __TwigTemplate_7f15013af6067ab9085a7c48d90a72ebd316041763e78f0f95b35ed1e2505545 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/cfa/marque_espacesResultats.html.twig"));

        // line 1
        echo "<div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Accueil</a><span>&raquo;</span></li>
                        <li class=\"home\"> <a title=\"Voir tous les produits kountac\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
        echo "\">Tous les produits</a><span>&raquo;</span></li>
                            ";
        // line 8
        if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
            // line 9
            echo "                            <li class=\"\"> <a title=\"Voir tous les produits de ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
            echo "\">Tous les produits de ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo "</a><span>&raquo;</span></li>
                            <li><strong>Résultat de la recherche</strong></li>
                            ";
        } else {
            // line 12
            echo "                            <li><strong>Tous les produits de ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo "</strong></li>
                            ";
        }
        // line 14
        echo "                    </ul>
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
                                    <div class=\"item\"> 
                                        <div class=\"main container\">

                                            <div class=\"about-page\">
                                                <div class=\"col-xs-12 col-sm-6\"> 

                                                    <h1>Bienvenue sur <span class=\"text_color\">";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
        echo " </span></h1>
                                                    <p>  
                                                        <br>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "descriptionentreprise", []), "html", null, true);
        echo " <br>
                                                    </p>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <div class=\"single-img-add sidebar-add-slider\">
                                                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\"> 

                                                            <!-- Wrapper for slides -->
                                                            <div class=\"carousel-inner\" role=\"listbox\">
                                                                <div class=\"item active\"> <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "image", []), "AssetPath", []), "marquePhotoProfil"), "html", null, true);
        echo "\" > </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <!-- End Item --> 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"shop-inner\">
                        ";
        // line 65
        if ((twig_length_filter($this->env, ($context["images"] ?? $this->getContext($context, "images"))) == 0)) {
            // line 66
            echo "                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir d'autres produits de la marque <span class=\"text_color\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo " </span></a> </div>
                            </div>
                        ";
        } else {
            // line 71
            echo "                            <div class=\"page-title\">
                                ";
            // line 72
            if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                // line 73
                echo "                                    <h2>Résultat du tri</h2>
                                ";
            } else {
                // line 75
                echo "                                    <h2>Tous les produits de <a>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo " </a></h2>
                                ";
            }
            // line 77
            echo "                            </div>
                        ";
        }
        // line 79
        echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 82
            echo "                                    ";
            if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", [])) {
                // line 83
                echo "                                    ";
                $context["prixReduction"] = 0;
                // line 84
                echo "                                    ";
                $context["prixReduction"] = ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) - (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []) * $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", [])) / 100));
                // line 85
                echo "                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                            ";
                // line 91
                if (($this->getAttribute($context["produit"], "top", []) == 0)) {
                    // line 92
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                        <img src=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath", []), "resizeThumb"), "html", null, true);
                    echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    // line 95
                    if ($this->getAttribute($context["produit"], "path2", [])) {
                        // line 96
                        echo "                                                                    <a class=\"hover-img\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    }
                    // line 100
                    echo "                                                                    ";
                    if ($this->getAttribute($context["produit"], "path3", [])) {
                        // line 101
                        echo "                                                                    <a class=\"hover-img\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    }
                    // line 105
                    echo "                                                                ";
                } else {
                    // line 106
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <img src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath", []), "resizeThumb"), "html", null, true);
                    echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    // line 109
                    if ($this->getAttribute($context["produit"], "path2", [])) {
                        // line 110
                        echo "                                                                    <a class=\"hover-img\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    }
                    // line 114
                    echo "                                                                    ";
                    if ($this->getAttribute($context["produit"], "path3", [])) {
                        // line 115
                        echo "                                                                    <a class=\"hover-img\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", []), "id_image" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <img src=\"";
                        // line 116
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["produit"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                        echo "\" alt=\"\">
                                                                    </a>
                                                                    ";
                    }
                    // line 119
                    echo "                                                                ";
                }
                // line 120
                echo "                                                            
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        ";
                // line 128
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprixCommande", [])) {
                    // line 129
                    echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprixCommande", []), 2), "html", null, true);
                    echo " F CFA\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        ";
                }
                // line 131
                echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                // line 135
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                echo "</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                ";
                // line 138
                if (($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "reduction", []) == 0)) {
                    // line 139
                    echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </span> </div>
                                                                ";
                } else {
                    // line 141
                    echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                    // line 142
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                    // line 143
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", []), 2), "html", null, true);
                    echo " F CFA</span> </p>
                                                                    </div>
                                                                ";
                }
                // line 146
                echo "                                                            </div>
                                                            <div class=\"pro-action\">
                                                                <a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                // line 149
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
            // line 158
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            ";
        // line 163
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["images"] ?? $this->getContext($context, "images")));
        echo "
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
        echo "\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3>Affiner la recherche</h3>
                            </div>

                            <div class=\"block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Prix (F CFA)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <fieldset>
                                                    <!--output name=\"prix\">";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo "</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "maxcfa", []), "html", null, true);
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
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 195
            echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\" name=\"categorie\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\">
                                                    <label for=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
            echo "</label><br>
                                                    ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                // line 199
                echo "                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\">
                                                        <label for=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                    </tiny>
                                                        ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                    // line 204
                    echo "                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                    echo "\">
                                                                <label for=\"";
                    // line 206
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
                // line 209
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                                            <li>
                                                <input type=\"radio\" id=\"toutes_les_categories\" name=\"categorie\" value=\"toutes_les_categories\" checked=\"checked\">
                                                <label for=\"toutes_les_categories\"> <span class=\"button\"></span> Toutes les catégories</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#motif\"><a>Motif(s)</a></h2>
                                    <div id=\"motif\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 224
            echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
            echo "\" name=\"motif[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", []), "html", null, true);
            echo "\">
                                                <label for=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["motif"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
            // line 228
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["motif"], "libelle", [])), "html", null, true);
            echo "
                                                </label>
                                            </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
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
        // line 246
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "34"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> ";
        // line 250
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "36"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> ";
        // line 254
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "38"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> ";
        // line 258
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "40"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> ";
        // line 262
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "42"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> ";
        // line 266
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "44"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> ";
        // line 270
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "46"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> ";
        // line 274
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "48"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> ";
        // line 278
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
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_avatar_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
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
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
        foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
            // line 308
            echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
            echo "\" name=\"mannequin[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
            echo "\">
                                                <label for=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
            // line 312
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
            echo "
                                                    <span class=\"count\"><br> (taille std.:";
            // line 313
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
        // line 318
        echo "                                            <br>
                                            <li>
                                                <input type=\"checkbox\" id=\"tous_les_mannequins\" name=\"mannequin\" value=\"tous_les_mannequins\" checked=\"checked\">
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
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_taille_poids_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
        echo "\">
                        ";
        // line 334
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 335
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
        // line 348
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'row');
        echo "
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
        // line 353
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
        // line 366
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                    <br>
                    
                    ";
        // line 370
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenuAllProducts"), []);
        // line 371
        echo "                </aside>
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
        // line 392
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo ",
            max: ";
        // line 393
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "maxcfa", []), "html", null, true);
        echo ",
            values: [ ";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "maxcfa", []), "html", null, true);
        echo " ],
            slide: function( event, ui ) {
                \$( \"#amount\" ).val(ui.values[ 0 ].toLocaleString('en') + \" - \" + ui.values[ 1 ].toLocaleString('en')  );
            }
        });
        \$( \"#amount\" ).val( \$( \"#slider-range\" ).slider( \"values\", 0 ).toLocaleString('en') + \" - \" +
            \$( \"#slider-range\" ).slider( \"values\", 1 ).toLocaleString('en') );
    } );
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/cfa/marque_espacesResultats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 394,  784 => 393,  780 => 392,  757 => 371,  755 => 370,  748 => 366,  732 => 353,  724 => 348,  708 => 335,  704 => 334,  700 => 333,  683 => 318,  668 => 313,  664 => 312,  660 => 311,  656 => 310,  650 => 309,  647 => 308,  643 => 307,  628 => 295,  608 => 278,  601 => 274,  594 => 270,  587 => 266,  580 => 262,  573 => 258,  566 => 254,  559 => 250,  552 => 246,  536 => 232,  526 => 228,  522 => 227,  518 => 226,  512 => 225,  509 => 224,  505 => 223,  492 => 212,  485 => 210,  479 => 209,  468 => 206,  462 => 205,  459 => 204,  455 => 203,  448 => 201,  442 => 200,  439 => 199,  435 => 198,  429 => 197,  423 => 196,  420 => 195,  416 => 194,  399 => 182,  395 => 181,  379 => 168,  371 => 163,  365 => 159,  359 => 158,  347 => 149,  343 => 148,  339 => 146,  333 => 143,  329 => 142,  326 => 141,  320 => 139,  318 => 138,  304 => 135,  298 => 131,  290 => 129,  288 => 128,  284 => 127,  280 => 126,  276 => 125,  269 => 120,  266 => 119,  260 => 116,  255 => 115,  252 => 114,  246 => 111,  241 => 110,  239 => 109,  234 => 107,  229 => 106,  226 => 105,  220 => 102,  215 => 101,  212 => 100,  206 => 97,  201 => 96,  199 => 95,  194 => 93,  189 => 92,  187 => 91,  179 => 85,  176 => 84,  173 => 83,  170 => 82,  166 => 81,  162 => 79,  158 => 77,  152 => 75,  148 => 73,  146 => 72,  143 => 71,  135 => 68,  131 => 66,  129 => 65,  110 => 49,  98 => 40,  93 => 38,  67 => 14,  61 => 12,  50 => 9,  48 => 8,  44 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"{{ path ('kountac_homepage')}}\">Accueil</a><span>&raquo;</span></li>
                        <li class=\"home\"> <a title=\"Voir tous les produits kountac\" href=\"{{ path('all_products') }}\">Tous les produits</a><span>&raquo;</span></li>
                            {% if tri is defined %}
                            <li class=\"\"> <a title=\"Voir tous les produits de {{ produit2.produit1.marque.marque|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit2.id}) }}\">Tous les produits de {{ produit2.produit1.marque.marque|capitalize }}</a><span>&raquo;</span></li>
                            <li><strong>Résultat de la recherche</strong></li>
                            {% else %}
                            <li><strong>Tous les produits de {{ produit2.produit1.marque.marque|capitalize }}</strong></li>
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
                                    <div class=\"item\"> 
                                        <div class=\"main container\">

                                            <div class=\"about-page\">
                                                <div class=\"col-xs-12 col-sm-6\"> 

                                                    <h1>Bienvenue sur <span class=\"text_color\">{{ produit2.produit1.marque.marque|upper}} </span></h1>
                                                    <p>  
                                                        <br>{{ produit2.produit1.marque.descriptionentreprise}} <br>
                                                    </p>
                                                </div>
                                                <div class=\"col-xs-12 col-sm-6\">
                                                    <div class=\"single-img-add sidebar-add-slider\">
                                                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\"> 

                                                            <!-- Wrapper for slides -->
                                                            <div class=\"carousel-inner\" role=\"listbox\">
                                                                <div class=\"item active\"> <img src=\"{{ produit2.produit1.marque.image.AssetPath|imagine_filter('marquePhotoProfil') }}\" > </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <!-- End Item --> 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"shop-inner\">
                        {% if images|length == 0 %}
                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('espace_marque', {'id' : produit2.id}) }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir d'autres produits de la marque <span class=\"text_color\">{{ produit2.produit1.marque.marque|upper}} </span></a> </div>
                            </div>
                        {% else %}
                            <div class=\"page-title\">
                                {% if tri is defined %}
                                    <h2>Résultat du tri</h2>
                                {% else %}
                                    <h2>Tous les produits de <a>{{ produit2.produit1.marque.marque|upper}} </a></h2>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                {% for produit in images %}
                                    {% if produit.produit2.cfaprix %}
                                    {% set prixReduction = 0 %}
                                    {% set prixReduction = produit.produit2.cfaprix - (produit.produit2.cfaprix * produit.produit2.reduction/100) %}
                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center>
                                                            {% if produit.top == 0 %}
                                                                    <a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% if produit.path2 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.produit2.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath2|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                    {% if produit.path3 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.produit2.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath3|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                {% else %}
                                                                    <a href=\"{{ path('product_mannequin', {'id': produit.produit2.id, 'id_image': produit.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% if produit.path2 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product_mannequin', {'id': produit.produit2.id, 'id_image': produit.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath2|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                    {% if produit.path3 %}
                                                                    <a class=\"hover-img\" href=\"{{ path('product_mannequin', {'id': produit.produit2.id, 'id_image': produit.id}) }}\">
                                                                        <img src=\"{{ produit.AssetPath3|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                    </a>
                                                                    {% endif %}
                                                                {% endif %}
                                                            
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.produit2.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.produit2.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.produit2.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        {% if produit.produit2.cfaprixCommande %}
                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.produit2.cfaprixCommande|number_format(2) }} F CFA\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.produit2.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.produit2.id}) }}\">{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}</a> </div>
                                                        <div class=\"item-content\">
                                                            <div class=\"item-price\">
                                                                {% if produit.produit2.reduction == 0 %}
                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </span> </div>
                                                                {% else %}
                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.produit2.cfaprix|number_format(2) }} F CFA</span> </p>
                                                                    </div>
                                                                {% endif %}
                                                            </div>
                                                            <div class=\"pro-action\">
                                                                <a href=\"{{ path('quickViewEspaceMarque', {'id' : produit.produit2.id}) }}\">
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
                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            {{ knp_pagination_render(images) }}
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"{{ path('espace_marque', {'id' : produit2.id}) }}\"> 
                        <div class=\"block shop-by-side\">
                            <div class=\"sidebar-bar-title\">
                                <h3>Affiner la recherche</h3>
                            </div>

                            <div class=\"block-content\">
                                <div class=\"layered-Category\">
                                    <h2 class=\"saider-bar-title\">Prix (F CFA)</h2>
                                    <div class=\"layered-content\">
                                        <ul class=\"check-box-list\">
                                            <li>
                                                <fieldset>
                                                    <!--output name=\"prix\">{{ cfaprix[0].mincfa }}</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"{{ cfaprix[0].mincfa }}\" max=\"{{ cfaprix[0].maxcfa }}\" value=\"0\" step=\"1\" oninput=\"prix.value=parseInt(prix.value)\" autocomplete=\"off\" /-->
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
                    
                    <form method=\"POST\" action=\"{{ path('recherche_avatar_marque', {'id' : produit2.id}) }}\"> 
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
                                                <input type=\"checkbox\" id=\"tous_les_mannequins\" name=\"mannequin\" value=\"tous_les_mannequins\" checked=\"checked\">
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
                                            
                    <form method=\"POST\" action=\"{{ path('recherche_taille_poids_marque', {'id' : produit2.id}) }}\">
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
            min: {{ cfaprix[0].mincfa }},
            max: {{ cfaprix[0].maxcfa }},
            values: [ {{ cfaprix[0].mincfa }}, {{ cfaprix[0].maxcfa }} ],
            slide: function( event, ui ) {
                \$( \"#amount\" ).val(ui.values[ 0 ].toLocaleString('en') + \" - \" + ui.values[ 1 ].toLocaleString('en')  );
            }
        });
        \$( \"#amount\" ).val( \$( \"#slider-range\" ).slider( \"values\", 0 ).toLocaleString('en') + \" - \" +
            \$( \"#slider-range\" ).slider( \"values\", 1 ).toLocaleString('en') );
    } );
</script>", "KountacBundle:Default:produits/cfa/marque_espacesResultats.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/cfa/marque_espacesResultats.html.twig");
    }
}
