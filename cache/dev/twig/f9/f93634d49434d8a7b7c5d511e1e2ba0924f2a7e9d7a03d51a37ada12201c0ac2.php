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

/* KountacBundle:Default:index2.html.twig */
class __TwigTemplate_2607c6ffcf0a402eea4dcb2dad25913695de5aecd01bfb0d9ef1b5d11ed6f822 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KountacBundle:Default:index2.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
  ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "   

<!-- Home Slider Start -->
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "<div class=\"alert-box\">
  <br>
  ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<div id=\"home-section\" class=\"slider1\">
  <div class=\"tp-banner-container\">
    <div class=\"tp-banner\" >
      <ul>
        <!-- SLIDE  -->
        ";
        // line 28
        $this->loadTemplate("KountacBundle:Default:pages/slider/slider.html.twig", "KountacBundle:Default:index2.html.twig", 28)->display($context);
        // line 29
        echo "      </ul>
      <div class=\"tp-bannertimer\"></div>
    </div>
  </div>
</div>
<!-- End home section -->

";
        // line 36
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 37
            echo "



    <!-- Code by ChrisME-->

    <div class=\"container new-layout\" style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#featured\" data-toggle=\"tab\" aria-expanded=\"false\">Meilleures ventes </a></li>
                    <li> <a href=\"#top-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Bon plans</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"featured\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">

                                ";
            // line 55
            $context["nbr"] = 0;
            // line 56
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["populaires"] ?? $this->getContext($context, "populaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 57
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 58
                    echo "                                        ";
                    if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                        // line 59
                        echo "                                            ";
                        $context["prixReduction"] = 0;
                        // line 60
                        echo "                                            ";
                        $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                        // line 61
                        echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 68
                            echo "                                                                    ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 69
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 70
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                // line 72
                                if ($this->getAttribute($context["image"], "path2", [])) {
                                    // line 73
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 74
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 77
                                echo "                                                                        ";
                                if ($this->getAttribute($context["image"], "path3", [])) {
                                    // line 78
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 79
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 82
                                echo "                                                                    ";
                            }
                            // line 83
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                        // line 87
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                        // line 89
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                        // line 90
                        if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                            // line 91
                            echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                            echo " €\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                        }
                        // line 93
                        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                        // line 97
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
                        // line 100
                        if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                            // line 101
                            echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </span> </div>
                                                                    ";
                        } else {
                            // line 103
                            echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                            // line 104
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                            // line 105
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                            echo " €</span> </p>
                                                                    </div>
                                                                    ";
                        }
                        // line 108
                        echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                        // line 113
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
                        // line 116
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
                        // line 124
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                        // line 125
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
                        // line 133
                        $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                        // line 134
                        echo "                                        ";
                    }
                    // line 135
                    echo "                                    ";
                }
                // line 136
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"top-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">
                                ";
            // line 143
            $context["nbr"] = 0;
            // line 144
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reductions"] ?? $this->getContext($context, "reductions")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 145
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 146
                    echo "                                        ";
                    if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                        // line 147
                        echo "                                            ";
                        $context["prixReduction"] = 0;
                        // line 148
                        echo "                                            ";
                        $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                        // line 149
                        echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 156
                            echo "                                                                    ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 157
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 158
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                // line 160
                                if ($this->getAttribute($context["image"], "path2", [])) {
                                    // line 161
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 162
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 165
                                echo "                                                                        ";
                                if ($this->getAttribute($context["image"], "path3", [])) {
                                    // line 166
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 167
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 170
                                echo "                                                                    ";
                            }
                            // line 171
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 172
                        echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                        // line 175
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                        // line 176
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                        // line 178
                        if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                            // line 179
                            echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                            echo " €\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                        }
                        // line 181
                        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                        // line 185
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
                        // line 188
                        if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                            // line 189
                            echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </span> </div>
                                                                    ";
                        } else {
                            // line 191
                            echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                            // line 192
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                            // line 193
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                            echo " €</span> </p>
                                                                    </div>
                                                                    ";
                        }
                        // line 196
                        echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                        // line 201
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
                        // line 204
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
                        // line 212
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                        // line 213
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
                        // line 221
                        $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                        // line 222
                        echo "                                        ";
                    }
                    // line 223
                    echo "                                    ";
                }
                // line 224
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                            ";
            // line 233
            if ((twig_length_filter($this->env, ($context["popup"] ?? $this->getContext($context, "popup"))) == 0)) {
                // line 234
                echo "     <!-- Beginning of the popup -->
     <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

          <!-- Modal content-->
          <div class=\"modal-content\" style=\"background-image: url('";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/newsletter.jpg"), "html", null, true);
                echo "'); background-repeat : no-repeat; background-size: 100% 100%;\">
            <div class=\"modal-header\">
                <div class=\"col-sm-11\"><center><h4><label>Inscrivez vous et gagnez une réduction de 15% sur votre premier achat </label></h4> </center></div>
                <div class=\"col-sm-1\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button></div>
            </div>
            <div class=\"modal-body\">
            <form action=\"";
                // line 246
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_pop_up_registration");
                echo "\" method=\"post\">
              ";
                // line 247
                echo                 $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo " 
              ";
                // line 248
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
                echo "
                <div class=\"col-sm-5\">
                    <label>Votre identifiant</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
                // line 253
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget');
                echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Adresse email</label><span class=\"required\">*</span>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
                // line 260
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
                echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    <label>Code Parrain</label>
                </div><!--/ [col] -->
                <div class=\"col-sm-7\">
                    ";
                // line 267
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codeparrain", []), 'widget');
                echo "
                </div><!--/ [col] -->
                <br><br>
                <div class=\"col-sm-5\">
                    ";
                // line 271
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'label');
                echo "<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    ";
                // line 274
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget');
                echo "
                </div>
                <br><br>
                <div class=\"col-sm-5\">
                    ";
                // line 278
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'label');
                echo "<span class=\"required\">*</span>
                </div>
                <div class=\"col-sm-7\">
                    ";
                // line 281
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget');
                echo "
                </div>
                <br><br><br>
                <div class=\"col-sm-12\">
                    <label class=\"inline\" for=\"newsletter\">
                        ";
                // line 286
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
                // line 298
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
            // line 308
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
            // line 337
            $context["nbr"] = 0;
            // line 338
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nouveaux"] ?? $this->getContext($context, "nouveaux")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 339
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 340
                    echo "                                        ";
                    if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                        // line 341
                        echo "                                            ";
                        $context["prixReduction"] = 0;
                        // line 342
                        echo "                                            ";
                        $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                        // line 343
                        echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                        // line 349
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 350
                            echo "                                                                    ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 351
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 352
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                // line 354
                                if ($this->getAttribute($context["image"], "path2", [])) {
                                    // line 355
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 356
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 359
                                echo "                                                                        ";
                                if ($this->getAttribute($context["image"], "path3", [])) {
                                    // line 360
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 361
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 364
                                echo "                                                                    ";
                            }
                            // line 365
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 366
                        echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                        // line 369
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                        // line 370
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                        // line 371
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                        // line 372
                        if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                            // line 373
                            echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                            echo " €\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                        }
                        // line 375
                        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                        // line 379
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
                        // line 382
                        if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                            // line 383
                            echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </span> </div>
                                                                    ";
                        } else {
                            // line 385
                            echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                            // line 386
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                            // line 387
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                            echo " €</span> </p>
                                                                    </div>
                                                                    ";
                        }
                        // line 390
                        echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                        // line 395
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
                        // line 398
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
                        // line 406
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                        // line 407
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
                        // line 415
                        $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                        // line 416
                        echo "                                        ";
                    }
                    // line 417
                    echo "                                    ";
                }
                // line 418
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"slider-items-products tab-pane fade\" id=\"last-sellers\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">

                                ";
            // line 426
            $context["nbr"] = 0;
            // line 427
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dernieresVentes"] ?? $this->getContext($context, "dernieresVentes")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 428
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 429
                    echo "                                        ";
                    if ((($context["nbr"] ?? $this->getContext($context, "nbr")) < 12)) {
                        // line 430
                        echo "                                            ";
                        $context["prixReduction"] = 0;
                        // line 431
                        echo "                                            ";
                        $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                        // line 432
                        echo "
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        <figure>
                                                            <center>
                                                                ";
                        // line 438
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 439
                            echo "                                                                    ";
                            if ((($this->getAttribute($context["image"], "produit2", []) == $this->getAttribute($context["produit"], "prod", [])) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                                // line 440
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                            <img src=\"";
                                // line 441
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                // line 443
                                if ($this->getAttribute($context["image"], "path2", [])) {
                                    // line 444
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 445
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 448
                                echo "                                                                        ";
                                if ($this->getAttribute($context["image"], "path3", [])) {
                                    // line 449
                                    echo "                                                                        <a class=\"hover-img\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                    echo "\">
                                                                            <img src=\"";
                                    // line 450
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                    echo "\" alt=\"\">
                                                                        </a>
                                                                        ";
                                }
                                // line 453
                                echo "                                                                    ";
                            }
                            // line 454
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 455
                        echo "                                                            </center>
                                                        </figure>
                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                        // line 458
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                        // line 459
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                        // line 460
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                        // line 461
                        if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                            // line 462
                            echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                            echo " €\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                        }
                        // line 464
                        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                        // line 468
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
                        // line 471
                        if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                            // line 472
                            echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </span> </div>
                                                                    ";
                        } else {
                            // line 474
                            echo "                                                                    <div class=\"price-box\">
                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                            // line 475
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                            echo " €</span> </p>
                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                            // line 476
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                            echo " €</span> </p>
                                                                    </div>
                                                                    ";
                        }
                        // line 479
                        echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                                <div class=\"myaccount\"><a href=\"";
                        // line 484
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
                        // line 487
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
                        // line 495
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                        // line 496
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
                        // line 504
                        $context["nbr"] = (($context["nbr"] ?? $this->getContext($context, "nbr")) + 1);
                        // line 505
                        echo "                                        ";
                    }
                    // line 506
                    echo "                                    ";
                }
                // line 507
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
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
                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                ";
            // line 533
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 534
                echo "                                    ";
                if ($this->getAttribute($context["produit"], "europrix", [])) {
                    // line 535
                    echo "                                        ";
                    $context["prixReduction"] = 0;
                    // line 536
                    echo "                                        ";
                    $context["prixReduction"] = ($this->getAttribute($context["produit"], "europrix", []) - (($this->getAttribute($context["produit"], "europrix", []) * $this->getAttribute($context["produit"], "reduction", [])) / 100));
                    // line 537
                    echo "                                        <li class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-6  \">
                                            <div class=\"product-item\">
                                                <div class=\"item-inner\">
                                                    <div class=\"product-thumb has-hover-img\">
                                                        

                                                    <figure>
                                                        <center>
                                                            ";
                    // line 545
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 546
                        echo "                                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 547
                            echo "                                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                            echo "\">
                                                                    <img src=\"";
                            // line 548
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                            echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            // line 550
                            if ($this->getAttribute($context["image"], "path2", [])) {
                                // line 551
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 552
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 555
                            echo "                                                                ";
                            if ($this->getAttribute($context["image"], "path3", [])) {
                                // line 556
                                echo "                                                                <a class=\"hover-img\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                                echo "\">
                                                                    <img src=\"";
                                // line 557
                                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                echo "\" alt=\"\">
                                                                </a>
                                                                ";
                            }
                            // line 560
                            echo "                                                                ";
                        }
                        // line 561
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 562
                    echo "                                                        </center>
                                                    </figure>

                                                        <div class=\"pr-info-area animated animate4\">
                                                            <a title=\"Réserver ce produit\" href=\"";
                    // line 566
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a>
                                                            <a title=\"Ajouter aux souhaits\" href=\"";
                    // line 567
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a>
                                                            <a title=\"Comparer ce produit\" href=\"";
                    // line 568
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a>
                                                            ";
                    // line 569
                    if ($this->getAttribute($context["produit"], "europrixCommande", [])) {
                        // line 570
                        echo "                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrixCommande", []), 2), "html", null, true);
                        echo " €\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                        echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            ";
                    }
                    // line 572
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"";
                    // line 576
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
                    // line 579
                    if (($this->getAttribute($context["produit"], "reduction", []) == 0)) {
                        // line 580
                        echo "                                                                        <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </span> </div>
                                                                    ";
                    } else {
                        // line 582
                        echo "                                                                        <div class=\"price-box\">
                                                                            <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                        // line 583
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                        echo " €</span> </p>
                                                                            <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                        // line 584
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit"], "europrix", []), 2), "html", null, true);
                        echo " €</span> </p>
                                                                        </div>
                                                                    ";
                    }
                    // line 587
                    echo "                                                                </div>
                                                                <center>
                                                                    <div class=\"language-currency-wrapper left\">
                                                                        <div class=\"inner-cl\">
                                                                            <div class=\"block block-language form-language \">
                                                                            <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                    // line 592
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
                    // line 595
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
                    // line 603
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickViewAllProducts", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\">
                                                                        <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                    // line 604
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
                // line 613
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 614
            echo "                            </ul>
                        </div>
                        <div class=\"col-lg-6 col-lg-offset-3 navigation\">
                            ";
            // line 617
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
            echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class=\"container\">
    </div>

</div>
";
        } elseif ((twig_length_filter($this->env,         // line 630
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 631
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:index_cfa.html.twig", "KountacBundle:Default:index2.html.twig", 631)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 632
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 633
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:index_livre.html.twig", "KountacBundle:Default:index2.html.twig", 633)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 634
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 635
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:index_all.html.twig", "KountacBundle:Default:index2.html.twig", 635)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 636
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 637
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:index_usa.html.twig", "KountacBundle:Default:index2.html.twig", 637)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 638
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 639
            echo "    ";
            $this->loadTemplate("KountacBundle:Default:index_naira.html.twig", "KountacBundle:Default:index2.html.twig", 639)->display($context);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1434 => 639,  1432 => 638,  1429 => 637,  1427 => 636,  1424 => 635,  1422 => 634,  1419 => 633,  1417 => 632,  1414 => 631,  1412 => 630,  1396 => 617,  1391 => 614,  1385 => 613,  1373 => 604,  1369 => 603,  1354 => 595,  1342 => 592,  1335 => 587,  1329 => 584,  1325 => 583,  1322 => 582,  1316 => 580,  1314 => 579,  1300 => 576,  1294 => 572,  1286 => 570,  1284 => 569,  1280 => 568,  1276 => 567,  1272 => 566,  1266 => 562,  1260 => 561,  1257 => 560,  1251 => 557,  1246 => 556,  1243 => 555,  1237 => 552,  1232 => 551,  1230 => 550,  1225 => 548,  1220 => 547,  1217 => 546,  1213 => 545,  1203 => 537,  1200 => 536,  1197 => 535,  1194 => 534,  1190 => 533,  1163 => 508,  1157 => 507,  1154 => 506,  1151 => 505,  1149 => 504,  1138 => 496,  1134 => 495,  1119 => 487,  1107 => 484,  1100 => 479,  1094 => 476,  1090 => 475,  1087 => 474,  1081 => 472,  1079 => 471,  1065 => 468,  1059 => 464,  1051 => 462,  1049 => 461,  1045 => 460,  1041 => 459,  1037 => 458,  1032 => 455,  1026 => 454,  1023 => 453,  1017 => 450,  1012 => 449,  1009 => 448,  1003 => 445,  998 => 444,  996 => 443,  991 => 441,  986 => 440,  983 => 439,  979 => 438,  971 => 432,  968 => 431,  965 => 430,  962 => 429,  959 => 428,  954 => 427,  952 => 426,  943 => 419,  937 => 418,  934 => 417,  931 => 416,  929 => 415,  918 => 407,  914 => 406,  899 => 398,  887 => 395,  880 => 390,  874 => 387,  870 => 386,  867 => 385,  861 => 383,  859 => 382,  845 => 379,  839 => 375,  831 => 373,  829 => 372,  825 => 371,  821 => 370,  817 => 369,  812 => 366,  806 => 365,  803 => 364,  797 => 361,  792 => 360,  789 => 359,  783 => 356,  778 => 355,  776 => 354,  771 => 352,  766 => 351,  763 => 350,  759 => 349,  751 => 343,  748 => 342,  745 => 341,  742 => 340,  739 => 339,  734 => 338,  732 => 337,  701 => 308,  688 => 298,  671 => 286,  663 => 281,  657 => 278,  650 => 274,  644 => 271,  637 => 267,  627 => 260,  617 => 253,  609 => 248,  605 => 247,  601 => 246,  592 => 240,  584 => 234,  582 => 233,  572 => 225,  566 => 224,  563 => 223,  560 => 222,  558 => 221,  547 => 213,  543 => 212,  528 => 204,  516 => 201,  509 => 196,  503 => 193,  499 => 192,  496 => 191,  490 => 189,  488 => 188,  474 => 185,  468 => 181,  460 => 179,  458 => 178,  454 => 177,  450 => 176,  446 => 175,  441 => 172,  435 => 171,  432 => 170,  426 => 167,  421 => 166,  418 => 165,  412 => 162,  407 => 161,  405 => 160,  400 => 158,  395 => 157,  392 => 156,  388 => 155,  380 => 149,  377 => 148,  374 => 147,  371 => 146,  368 => 145,  363 => 144,  361 => 143,  353 => 137,  347 => 136,  344 => 135,  341 => 134,  339 => 133,  328 => 125,  324 => 124,  309 => 116,  297 => 113,  290 => 108,  284 => 105,  280 => 104,  277 => 103,  271 => 101,  269 => 100,  255 => 97,  249 => 93,  241 => 91,  239 => 90,  235 => 89,  231 => 88,  227 => 87,  222 => 84,  216 => 83,  213 => 82,  207 => 79,  202 => 78,  199 => 77,  193 => 74,  188 => 73,  186 => 72,  181 => 70,  176 => 69,  173 => 68,  169 => 67,  161 => 61,  158 => 60,  155 => 59,  152 => 58,  149 => 57,  144 => 56,  142 => 55,  122 => 37,  120 => 36,  111 => 29,  109 => 28,  102 => 23,  93 => 20,  89 => 18,  85 => 17,  80 => 14,  66 => 9,  61 => 8,  57 => 7,  53 => 6,  51 => 5,  45 => 4,  22 => 1,);
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
{% if app.request.hasPreviousSession %}
{% for type, messages in app.session.flashbag.all() %}
{% for message in messages %}
<div class=\"flash-{{ type }}\">
  {{ message }}
</div>
{% endfor %}
{% endfor %}
{% endif %}
   

<!-- Home Slider Start -->
{% for flashMessage in app.session.flashbag.get('success') %}
<div class=\"alert-box\">
  <br>
  {{ flashMessage }}
</div>
{% endfor %}
<div id=\"home-section\" class=\"slider1\">
  <div class=\"tp-banner-container\">
    <div class=\"tp-banner\" >
      <ul>
        <!-- SLIDE  -->
        {% include 'KountacBundle:Default:pages/slider/slider.html.twig' %}
      </ul>
      <div class=\"tp-bannertimer\"></div>
    </div>
  </div>
</div>
<!-- End home section -->

{% if euro|length != 0 %}




    <!-- Code by ChrisME-->

    <div class=\"container new-layout\" style=\"margin-top: 30px;\">
        <div class=\"special-products\">
            <div class=\"home-tab\">
                <ul class=\"nav home-nav-tabs home-product-tabs\">
                    <li class=\"active\"><a href=\"#featured\" data-toggle=\"tab\" aria-expanded=\"false\">Meilleures ventes </a></li>
                    <li> <a href=\"#top-sellers\" data-toggle=\"tab\" aria-expanded=\"false\">Bon plans</a> </li>
                </ul>
                <div class=\"special-products-pro tab-content\">
                    <div class=\"slider-items-products tab-pane active in\" id=\"featured\">
                        <div id=\"special-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\">

                                {% set nbr = 0 %}
                                {% for produit in populaires %}
                                    {% if produit.europrix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}

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
                                                            {% if produit.europrixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
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
                                    {% if produit.europrix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}

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
                                                            {% if produit.europrixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
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
                                    {% if produit.europrix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}

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
                                                            {% if produit.europrixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
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
                                    {% if produit.europrix %}
                                        {% if nbr < 12 %}
                                            {% set prixReduction = 0 %}
                                            {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}

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
                                                            {% if produit.europrixCommande %}
                                                                <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"item-info\">
                                                        <div class=\"info-inner\">
                                                            <div class=\"item-title\"> <a title=\"{{ produit.produit1Nom|capitalize }} - {{ produit.libelle|capitalize }}\" href=\"{{ path('product', {'id' : produit.id}) }}\">{{ produit.produit1Nom|capitalize }}-{{ produit.libelle|capitalize }}</a> </div>
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
                        <div class=\"product-grid-area\">
                            <ul class=\"products-grid\">
                                {% for produit in pagination %}
                                    {% if produit.europrix %}
                                        {% set prixReduction = 0 %}
                                        {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}
                                        <li class=\"item col-lg-3 col-md-4 col-sm-6 col-xs-6  \">
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
                        <div class=\"col-lg-6 col-lg-offset-3 navigation\">
                            {{ knp_pagination_render(pagination) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class=\"container\">
    </div>

</div>
{% elseif cfa|length != 0 %}
    {% include 'KountacBundle:Default:index_cfa.html.twig' %}
{% elseif livre|length != 0 %}
    {% include 'KountacBundle:Default:index_livre.html.twig' %}
{% elseif all|length != 0 %}
    {% include 'KountacBundle:Default:index_all.html.twig' %}
{% elseif usa|length != 0 %}
    {% include 'KountacBundle:Default:index_usa.html.twig' %}
{% elseif naira|length != 0 %}
    {% include 'KountacBundle:Default:index_naira.html.twig' %}
{% endif %}
{% endblock %}


", "KountacBundle:Default:index2.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/index2.html.twig");
    }
}
