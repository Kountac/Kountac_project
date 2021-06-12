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

/* KountacBundle:Default:produits/cfa/marque_espaces.html.twig */
class __TwigTemplate_fea5d4109de5d6d0ebd247a2458d1f63f71a259f2924dc75d14dee3bb4da6a62 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/cfa/marque_espaces.html.twig"));

        // line 1
        echo "<!-- Breadcrumbs -->

    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul>
                        <li class=\"home\"> <a title=\"Aller à l'accueil\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Accueil</a><span>&raquo;</span></li>
                        <li class=\"home\"> <a title=\"Voir tous les produits kountac\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
        echo "\">Tous les produits</a><span>&raquo;</span></li>
                            ";
        // line 10
        if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
            // line 11
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
            // line 14
            echo "                            <li><strong>Tous les produits de ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo "</strong></li>
                            ";
        }
        // line 16
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
        // line 40
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
        echo " </span></h1>
                                                    <p>  
                                                        <br>";
        // line 42
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
        // line 51
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
        // line 67
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 68
            echo "                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir d'autres produits de la marque <span class=\"text_color\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo " </span></a> </div>
                            </div>
                        ";
        } else {
            // line 73
            echo "                            <div class=\"page-title\">
                                ";
            // line 74
            if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                // line 75
                echo "                                    <h2>Résultat du tri</h2>
                                ";
            } else {
                // line 77
                echo "                                    <h2>Tous les produits de <a>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo " </a></h2>
                                ";
            }
            // line 79
            echo "                            </div>
                        ";
        }
        // line 81
        echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 84
            echo "                                    ";
            if ($this->getAttribute($context["produit"], "cfaprix", [])) {
                // line 85
                echo "                                    ";
                $context["prixReduction"] = 0;
                // line 86
                echo "                                    ";
                $context["prixReduction"] = ($this->getAttribute($context["produit"], "cfaprix", []) - (($this->getAttribute($context["produit"], "cfaprix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                // line 87
                echo "                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center> 
                                                            ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 94
                    echo "                                                                ";
                    if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                        // line 95
                        echo "                                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <img src=\"";
                        // line 96
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                        echo "\" alt=\"\">
                                                                </a>
                                                                ";
                        // line 98
                        if ($this->getAttribute($context["image"], "path2", [])) {
                            // line 99
                            echo "                                                                <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                    <img src=\"";
                            // line 100
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                </a>
                                                                ";
                        }
                        // line 103
                        echo "                                                                ";
                        if ($this->getAttribute($context["image"], "path3", [])) {
                            // line 104
                            echo "                                                                <a class=\"hover-img\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                    <img src=\"";
                            // line 105
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                </a>
                                                                ";
                        }
                        // line 107
                        echo " 
                                                                ";
                    }
                    // line 108
                    echo " 
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo " 
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        ";
                // line 117
                if ($this->getAttribute($context["produit"], "cfaprixCommande", [])) {
                    // line 118
                    echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprixCommande", []), 2), "html", null, true);
                    echo " F CFA\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        ";
                }
                // line 120
                echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                // line 124
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
                // line 127
                if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                    // line 128
                    echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </span> </div>
                                                                ";
                } else {
                    // line 130
                    echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                    // line 131
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " F CFA</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                    // line 132
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "cfaprix", []), 2), "html", null, true);
                    echo " F CFA</span> </p>
                                                                    </div>
                                                                ";
                }
                // line 135
                echo "                                                            </div>
                                                            <div class=\"pro-action\">
                                                                <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"../../../";
                // line 138
                echo "css/cart.jpg";
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
            // line 147
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            ";
        // line 152
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
        echo "
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"";
        // line 157
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
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo "</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"";
        // line 171
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
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 184
            echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\" name=\"categorie\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\">
                                                    <label for=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
            echo "</label><br>
                                                    ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                // line 188
                echo "                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\">
                                                        <label for=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                    </tiny>
                                                        ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                    // line 193
                    echo "                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                    echo "\">
                                                                <label for=\"";
                    // line 195
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
                // line 198
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
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
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 213
            echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
            echo "\" name=\"motif[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", []), "html", null, true);
            echo "\">
                                                <label for=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["motif"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
            // line 217
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["motif"], "libelle", [])), "html", null, true);
            echo "
                                                </label>
                                            </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
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
        // line 235
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "34"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> ";
        // line 239
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "36"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> ";
        // line 243
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "38"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> ";
        // line 247
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "40"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> ";
        // line 251
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "42"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> ";
        // line 255
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "44"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> ";
        // line 259
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "46"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> ";
        // line 263
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "48"), "html", null, true);
        echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> ";
        // line 267
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
        // line 284
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
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
        foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
            // line 297
            echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
            echo "\" name=\"mannequin[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
            echo "\">
                                                <label for=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
            echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "rechercheThumbItem"), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
            // line 301
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
            echo "
                                                    <span class=\"count\"><br> (taille std.:";
            // line 302
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
        // line 307
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
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_taille_poids_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
        echo "\">
                        ";
        // line 323
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 324
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
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'row');
        echo "
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
        // line 342
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
        // line 355
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                    <br>
                    
                    ";
        // line 359
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenuAllProducts"), []);
        // line 360
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
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "mincfa", []), "html", null, true);
        echo ",
            max: ";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cfaprix"] ?? $this->getContext($context, "cfaprix")), 0, [], "array"), "maxcfa", []), "html", null, true);
        echo ",
            values: [ ";
        // line 383
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
        return "KountacBundle:Default:produits/cfa/marque_espaces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 383,  759 => 382,  755 => 381,  732 => 360,  730 => 359,  723 => 355,  707 => 342,  699 => 337,  683 => 324,  679 => 323,  675 => 322,  658 => 307,  643 => 302,  639 => 301,  635 => 300,  631 => 299,  625 => 298,  622 => 297,  618 => 296,  603 => 284,  583 => 267,  576 => 263,  569 => 259,  562 => 255,  555 => 251,  548 => 247,  541 => 243,  534 => 239,  527 => 235,  511 => 221,  501 => 217,  497 => 216,  493 => 215,  487 => 214,  484 => 213,  480 => 212,  467 => 201,  460 => 199,  454 => 198,  443 => 195,  437 => 194,  434 => 193,  430 => 192,  423 => 190,  417 => 189,  414 => 188,  410 => 187,  404 => 186,  398 => 185,  395 => 184,  391 => 183,  374 => 171,  370 => 170,  354 => 157,  346 => 152,  340 => 148,  334 => 147,  322 => 138,  318 => 137,  314 => 135,  308 => 132,  304 => 131,  301 => 130,  295 => 128,  293 => 127,  279 => 124,  273 => 120,  265 => 118,  263 => 117,  259 => 116,  255 => 115,  251 => 114,  244 => 109,  237 => 108,  233 => 107,  227 => 105,  222 => 104,  219 => 103,  213 => 100,  208 => 99,  206 => 98,  201 => 96,  196 => 95,  193 => 94,  189 => 93,  181 => 87,  178 => 86,  175 => 85,  172 => 84,  168 => 83,  164 => 81,  160 => 79,  154 => 77,  150 => 75,  148 => 74,  145 => 73,  137 => 70,  133 => 68,  131 => 67,  112 => 51,  100 => 42,  95 => 40,  69 => 16,  63 => 14,  52 => 11,  50 => 10,  46 => 9,  42 => 8,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Breadcrumbs -->

    <div class=\"breadcrumbs\">
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
                        {% if produits|length == 0 %}
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
                                {% for produit in produits %}
                                    {% if produit.cfaprix %}
                                    {% set prixReduction = 0 %}
                                    {% set prixReduction = produit.cfaprix - (produit.cfaprix * produit.reduction/100) %}
                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center> 
                                                            {% for image in images %}
                                                                {% if image.produit2 == produit and image.top == 0 %}
                                                                <a href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% if image.path2 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath2|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% endif %}
                                                                {% if image.path3 %}
                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit.id}) }}\">
                                                                    <img src=\"{{ image.AssetPath3|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                </a>
                                                                {% endif %} 
                                                                {% endif %} 
                                                            {% endfor %} 
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickViewEspaceMarque', {'id' : produit.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
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
                                                            <div class=\"pro-action\">
                                                                <a href=\"{{ path('quickViewEspaceMarque', {'id' : produit.id}) }}\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"../../../{{ 'css/cart.jpg' }}\" alt=\"\"><span> Ajouter au panier</span> </button>
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
                            {{ knp_pagination_render(produits) }}
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
                                                <input type=\"checkbox\" id=\"{{ mannequin.id }}\" name=\"mannequin[]\" value=\"{{ mannequin.id }}\">
                                                <label for=\"{{ mannequin.id }}\"> <span class=\"button\"></span> 
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
</script>", "KountacBundle:Default:produits/cfa/marque_espaces.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/cfa/marque_espaces.html.twig");
    }
}
