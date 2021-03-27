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

/* KountacBundle:Default:produits/marque_espaces.html.twig */
class __TwigTemplate_a4354629e3e7ba374ecc6b3b67e65e65f91a5e356b3020e1b421759ac2ca66dd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/marque_espaces.html.twig"));

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
                        <li class=\"home\"> <a title=\"Voir tous les produits kountac\" href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
            echo "\">Tous les produits</a><span>&raquo;</span></li>
                            ";
            // line 14
            if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                // line 15
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
                // line 18
                echo "                            <li><strong>Tous les produits de ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo "</strong></li>
                            ";
            }
            // line 20
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
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
            echo " </span></h1>
                                                    <p>  
                                                        <br>";
            // line 46
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
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "image", []), "AssetPath", []), "html", null, true);
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
            // line 71
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
                // line 72
                echo "                            <div class=\"page-title\">
                                <h2>Aucun produit à afficher</h2>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Voir d'autres produits de la marque <span class=\"text_color\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo " </span></a> </div>
                            </div>
                        ";
            } else {
                // line 77
                echo "                            <div class=\"page-title\">
                                ";
                // line 78
                if ((isset($context["tri"]) || array_key_exists("tri", $context))) {
                    // line 79
                    echo "                                    <h2>Résultat du tri</h2>
                                ";
                } else {
                    // line 81
                    echo "                                    <h2>Tous les produits de <a>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                    echo " </a></h2>
                                ";
                }
                // line 83
                echo "                            </div>
                        ";
            }
            // line 85
            echo "                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 88
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 89
                    echo "                                    ";
                    $context["prixReduction"] = 0;
                    // line 90
                    echo "                                    ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 91
                    echo "                                    <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6 \">
                                        <div class=\"product-item\">
                                            <div class=\"item-inner\">
                                                <div class=\"product-thumb has-hover-img\">
                                                    <figure> 
                                                        <center> 
                                                            ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 98
                        echo "                                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 99
                            echo "                                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                    <img src=\"";
                            // line 100
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            // line 102
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 103
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 104
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 107
                            echo "                                                                ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 108
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 109
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 111
                            echo " 
                                                                ";
                        }
                        // line 112
                        echo " 
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo " 
                                                        </center>
                                                    </figure>

                                                    <div class=\"pr-info-area animated animate4\">
                                                        <a title=\"Reserver ce produit\" href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                        <a title=\"Comparer ce produit\" href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                        ";
                    // line 121
                    if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                        // line 122
                        echo "                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                        echo " €\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                        ";
                    }
                    // line 124
                    echo "                                                    </div>
                                                </div>
                                                <div class=\"item-info\">
                                                    <div class=\"info-inner\">
                                                        <div class=\"item-title\"> <a title=\"";
                    // line 128
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
                    // line 131
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 132
                        echo "                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </span> </div>
                                                                ";
                    } else {
                        // line 134
                        echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 135
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 136
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                        echo " €</span> </p>
                                                                    </div>
                                                                ";
                    }
                    // line 139
                    echo "                                                            </div>
                                                            <div class=\"pro-action\">
                                                                <a href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewEspaceMarque", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"../../../";
                    // line 142
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
                // line 151
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                            </ul>
                        </div>
                        <div class=\"pagination-area \"></div>
                        <center>
                            ";
            // line 156
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
            echo "
                        </center>
                    </div>
                </div>
                <aside class=\"sidebar col-sm-3 col-xs-12 col-sm-pull-9\">
                    <form method=\"POST\" action=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
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
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo "</output>
                                                    <input type=\"range\" multiple name=\"prix\" min=\"";
            // line 175
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
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 188
                echo "                                                <li>
                                                    <input type=\"radio\" id=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\" name=\"categorie\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\">
                                                    <label for=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "nom", [])), "html", null, true);
                echo "</label><br>
                                                    ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie2"]) {
                    // line 192
                    echo "                                                    <tiny>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\" name=\"categorie\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\">
                                                        <label for=\"";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie2"], "id", []), "html", null, true);
                    echo "\"> <span class=\"button\"></span> ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie2"], "nom", [])), "html", null, true);
                    echo "</label><br>
                                                    </tiny>
                                                        ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie2"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie3"]) {
                        // line 197
                        echo "                                                            <small>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"radio\" id=\"";
                        // line 198
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\" name=\"categorie\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["categorie3"], "id", []), "html", null, true);
                        echo "\">
                                                                <label for=\"";
                        // line 199
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
                    // line 202
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
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
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
            foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
                // line 217
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\" name=\"motif[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "libelle", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "AssetPath", []), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 221
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["motif"], "libelle", [])), "html", null, true);
                echo "
                                                </label>
                                            </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
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
            // line 239
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "34"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s_taille\" name=\"taille\" value=\"36\">
                                                <label for=\"s_taille\"> <span class=\"button\"></span> ";
            // line 243
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "36"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"m_taille\" name=\"taille\" value=\"38\">
                                                <label for=\"m_taille\"> <span class=\"button\"></span> ";
            // line 247
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "38"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"l_taille\" name=\"taille\" value=\"40\">
                                                <label for=\"l_taille\"> <span class=\"button\"></span> ";
            // line 251
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "40"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"xl_taille\" name=\"taille\" value=\"42\">
                                                <label for=\"xl_taille\"> <span class=\"button\"></span> ";
            // line 255
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "42"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"2xl_taille\" name=\"taille\" value=\"44\">
                                                <label for=\"2xl_taille\"> <span class=\"button\"></span> ";
            // line 259
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "44"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"3xl_taille\" name=\"taille\" value=\"46\">
                                                <label for=\"3xl_taille\"> <span class=\"button\"></span> ";
            // line 263
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "46"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"4xl_taille\" name=\"taille\" value=\"48\">
                                                <label for=\"4xl_taille\"> <span class=\"button\"></span> ";
            // line 267
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "48"), "html", null, true);
            echo " </label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"5xl_taille\" name=\"taille\" value=\"50\">
                                                <label for=\"5xl_taille\"> <span class=\"button\"></span> ";
            // line 271
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
            // line 288
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
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
            foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
                // line 302
                echo "                                            <li>
                                                <input type=\"checkbox\" id=\"";
                // line 303
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\" name=\"mannequin[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "id", []), "html", null, true);
                echo "\">
                                                <label for=\"";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", []), "html", null, true);
                echo "\"> <span class=\"button\"></span> 
                                                    <img src=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "AssetPath", []), "html", null, true);
                echo "\" alt=\"\">
                                                    ";
                // line 306
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
                echo "
                                                    <span class=\"count\"><br> (taille std.:";
                // line 307
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
            // line 312
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
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_taille_poids_marque", ["id" => $this->getAttribute(($context["produit2"] ?? $this->getContext($context, "produit2")), "id", [])]), "html", null, true);
            echo "\">
                        ";
            // line 328
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                        ";
            // line 329
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
            // line 342
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'row');
            echo "
                                                </div><!--/ [col] -->
                                           </li>
                                           <li class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    ";
            // line 347
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
            // line 360
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                    </form>
                    <br>
                    
                    ";
            // line 364
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenuAllProducts"), []);
            // line 365
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
            // line 386
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "mineuro", []), "html", null, true);
            echo ",
                    max: ";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["europrix"] ?? $this->getContext($context, "europrix")), 0, [], "array"), "maxeuro", []), "html", null, true);
            echo ",
                    values: [ ";
            // line 388
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
        } elseif ((twig_length_filter($this->env,         // line 397
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 398
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/cfa/marque_espaces.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 398)->display($context);
            // line 399
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 400
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/livre/marque_espaces.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 400)->display($context);
            // line 401
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 402
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/usa/marque_espaces.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 402)->display($context);
            // line 403
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 404
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/naira/marque_espaces.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 404)->display($context);
            // line 405
            echo "    ";
        } elseif ((twig_length_filter($this->env, ($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 406
            echo "        ";
            $this->loadTemplate("KountacBundle:Default:produits/all/marque_espaces.html.twig", "KountacBundle:Default:produits/marque_espaces.html.twig", 406)->display($context);
            // line 407
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/marque_espaces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 407,  825 => 406,  822 => 405,  819 => 404,  816 => 403,  813 => 402,  810 => 401,  807 => 400,  804 => 399,  801 => 398,  799 => 397,  785 => 388,  781 => 387,  777 => 386,  754 => 365,  752 => 364,  745 => 360,  729 => 347,  721 => 342,  705 => 329,  701 => 328,  697 => 327,  680 => 312,  665 => 307,  661 => 306,  657 => 305,  653 => 304,  647 => 303,  644 => 302,  640 => 301,  624 => 288,  604 => 271,  597 => 267,  590 => 263,  583 => 259,  576 => 255,  569 => 251,  562 => 247,  555 => 243,  548 => 239,  532 => 225,  522 => 221,  518 => 220,  514 => 219,  508 => 218,  505 => 217,  501 => 216,  488 => 205,  481 => 203,  475 => 202,  464 => 199,  458 => 198,  455 => 197,  451 => 196,  444 => 194,  438 => 193,  435 => 192,  431 => 191,  425 => 190,  419 => 189,  416 => 188,  412 => 187,  395 => 175,  391 => 174,  375 => 161,  367 => 156,  361 => 152,  355 => 151,  343 => 142,  339 => 141,  335 => 139,  329 => 136,  325 => 135,  322 => 134,  316 => 132,  314 => 131,  300 => 128,  294 => 124,  286 => 122,  284 => 121,  280 => 120,  276 => 119,  272 => 118,  265 => 113,  258 => 112,  254 => 111,  248 => 109,  243 => 108,  240 => 107,  234 => 104,  229 => 103,  227 => 102,  222 => 100,  217 => 99,  214 => 98,  210 => 97,  202 => 91,  199 => 90,  196 => 89,  193 => 88,  189 => 87,  185 => 85,  181 => 83,  175 => 81,  171 => 79,  169 => 78,  166 => 77,  158 => 74,  154 => 72,  152 => 71,  133 => 55,  121 => 46,  116 => 44,  90 => 20,  84 => 18,  73 => 15,  71 => 14,  67 => 13,  63 => 12,  54 => 5,  51 => 4,  45 => 3,  22 => 1,);
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
                                                                <div class=\"item active\"> <img src=\"{{ produit2.produit1.marque.image.AssetPath }}\" > </div>
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
                                                            <div class=\"pro-action\">
                                                                <a href=\"{{ path('quickViewEspaceMarque', {'id' : produit.id}) }}\">
                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"../../../{{ 'css/cart.jpg'}}\" alt=\"\"><span> Ajouter au panier</span> </button>
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
                                    <h2 class=\"saider-bar-title\" data-toggle=\"collapse\" data-target=\"#motif\"><a>Motif(s)</a></h2>
                                    <div id=\"motif\" class=\"collapse layered-content\">
                                        <ul class=\"check-box-list\">
                                            {% for motif in motifs %}
                                            <li>
                                                <input type=\"checkbox\" id=\"{{ motif.libelle }}\" name=\"motif[]\" value=\"{{ motif.id }}\">
                                                <label for=\"{{ motif.libelle }}\"> <span class=\"button\"></span> 
                                                    <img src=\"{{ motif.AssetPath }}\" alt=\"\">
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
                                                    <img src=\"{{ mannequin.AssetPath }}\" alt=\"\">
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
        {% include 'KountacBundle:Default:produits/cfa/marque_espaces.html.twig' %}
    {% elseif livre|length != 0 %}
        {% include 'KountacBundle:Default:produits/livre/marque_espaces.html.twig' %}
    {% elseif usa|length != 0 %}
        {% include 'KountacBundle:Default:produits/usa/marque_espaces.html.twig' %}
    {% elseif naira|length != 0 %}
        {% include 'KountacBundle:Default:produits/naira/marque_espaces.html.twig' %}
    {% elseif all|length != 0 %}
        {% include 'KountacBundle:Default:produits/all/marque_espaces.html.twig' %}
    {% endif %}
{% endblock %}
", "KountacBundle:Default:produits/marque_espaces.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/marque_espaces.html.twig");
    }
}
