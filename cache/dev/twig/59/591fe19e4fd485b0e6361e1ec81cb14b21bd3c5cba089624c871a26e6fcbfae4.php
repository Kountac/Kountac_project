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

/* KountacBundle:Default:produits/single_product.html.twig */
class __TwigTemplate_7a1e0ef2cbea00a53d64e5c09cd933dc5d0f4a426d8017439846aabf5ae217ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Default:produits/single_product.html.twig"));

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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "libelle", []), "libelle", [])), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "description", [])), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", [])), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "description", [])), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
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
        echo "
";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            $this->loadTemplate("ChatBundle:Chat:chat.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 14)->display($context);
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 18
            echo "        ";
            if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", [])) {
                // line 19
                echo "        <div>
            <div class=\"breadcrumbs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <ul>
                                ";
                // line 25
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 26
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
                    echo " |
                                    <a href=\"";
                    // line 27
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                    echo "\">
                                        ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                    echo "
                                    </a>
                                ";
                }
                // line 30
                echo " 
                            </ul>
                            <ul>
                                ";
                // line 33
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                    // line 34
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                    foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                        // line 35
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 36
                            echo "                                            <div class=\"flash-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">
                                                ";
                            // line 37
                            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                            echo "
                                            </div>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                                ";
                }
                // line 42
                echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        ";
                // line 50
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
                    // line 51
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
                    foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                        // line 52
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 53
                            echo "                    <div class=\"flash-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">
                        ";
                            // line 54
                            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                            echo "
                    </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "        ";
                }
                // line 59
                echo "
        <!-- Breadcrumbs -->

        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
                echo "\">Accueil</a><span>&raquo;</span></li>
                            <li class=\"home\"> <a title=\"Voir produits de la catégorie ";
                // line 68
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", [])), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_2", ["categorie" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", []), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "categorie", [])), "html", null, true);
                echo "</a><span>&raquo;</span></li>
                            <li><strong>";
                // line 69
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "libelle", []), "libelle", [])), "html", null, true);
                echo "</strong></li>
                        </ul>
                        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 72
                    echo "                            <div class=\"alert-box\">
                                <br>
                                ";
                    // line 74
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End --> 
        <!-- Main Container -->
        <div class=\"main-container col1-layout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-main\">
                        <div class=\"product-view-area\">
                            ";
                // line 88
                $context["prixReduction"] = 0;
                // line 89
                echo "                            ";
                $context["prixReduction"] = ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", []) - (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", []) * $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", [])) / 100));
                // line 90
                echo "
                            <div class=\"product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5\">
                                <div class=\"slider-items-products\">
                                    <div id=\"upsell-product-slider\" class=\"product-flexslider hidden-buttons\">
                                        <div class=\"large-image slides\"> 
                                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 96
                    echo "                                               <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath", [])), "html", null, true);
                    echo "\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> 
                                                    <li><figure><img class=\"zoom-img\" src=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath", [])), "html", null, true);
                    echo "\"> </figure></li>
                                                </a> 
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                                        </div>
                                    </div>
                                </div>

                                <div class=\"flexslider flexslider-thumb\">
                                    <ul class=\"previews-list slides\">
                                        ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 107
                    echo "                                            <li><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath", [])), "html", null, true);
                    echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath", [])), "html", null, true);
                    echo "' \"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath", [])), "html", null, true);
                    echo "\" alt = \"\"/></a></li>
                                                ";
                    // line 108
                    if ($this->getAttribute($context["image"], "path2", [])) {
                        // line 109
                        echo "                                            <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath2", [])), "html", null, true);
                        echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath2", [])), "html", null, true);
                        echo "' \"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath2", [])), "html", null, true);
                        echo "\" alt = \"\"/></a></li>
                                                ";
                    }
                    // line 111
                    echo "                                                ";
                    if ($this->getAttribute($context["image"], "path3", [])) {
                        // line 112
                        echo "                                            <li><a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath3", [])), "html", null, true);
                        echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath3", [])), "html", null, true);
                        echo "' \"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["image"], "AssetPath3", [])), "html", null, true);
                        echo "\" alt = \"\"/></a></li>
                                                ";
                    }
                    // line 114
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                                    </ul>
                                </div>
                                <!-- end: more-images --> 

                            </div>
                            <div class=\"col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area\">
                                <div class=\"product-name\">
                                    <h1>";
                // line 122
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "libelle", []), "libelle", [])), "html", null, true);
                echo "</h1>
                                </div>
                                ";
                // line 124
                if (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", []) == 0)) {
                    // line 125
                    echo "                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " €</span> </span> </div>
                                ";
                } else {
                    // line 127
                    echo "                                    <div class=\"price-box\">
                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                    // line 128
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                    echo " €</span> </p>
                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                    // line 129
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", []), 2), "html", null, true);
                    echo " €</span> </p>
                                    </div>
                                ";
                }
                // line 132
                echo "
                                <div class=\"short-description\">
                                    ";
                // line 134
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "produit2", [])) > 1)) {
                    // line 135
                    echo "                                        &nbsp;&nbsp;<label>Autre(s) motif(s) : </label> 
                                        ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "produit2", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
                        // line 137
                        echo "                                            ";
                        if (($context["motif"] != ($context["produit"] ?? $this->getContext($context, "produit")))) {
                            // line 138
                            echo "                                                <a title=\"Motif ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["motif"], "libelle", []), "libelle", [])), "html", null, true);
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["motif"], "id", [])]), "html", null, true);
                            echo "\">
                                                    <img src=\"";
                            // line 139
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["motif"], "libelle", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                            echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            ";
                        }
                        // line 142
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                    ";
                }
                // line 144
                echo "                                </div>
                                
                                <div class=\"short-description\">
                                    ";
                // line 147
                if ((twig_length_filter($this->env, ($context["produit"] ?? $this->getContext($context, "produit"))) > 1)) {
                    // line 148
                    echo "                                        &nbsp;&nbsp;<label>Autre(s) mannequin(s) : </label> 
                                        ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images_autres"] ?? $this->getContext($context, "images_autres")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 150
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_mannequin", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", []), "id_image" => $this->getAttribute($context["image"], "id", [])]), "html", null, true);
                        echo "\" title=\"(taille standard: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo ", poids: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "poidsMannequin", []), "html", null, true);
                        echo "Kg, Taille:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleMannequin", []), "html", null, true);
                        echo "m)\">
                                                <img src=\"";
                        // line 151
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;
                                                ";
                        // line 152
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "nomMannequin", [])), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "mannequin", []), "tailleStandardMannequin", []), "html", null, true);
                        echo "&nbsp;&nbsp;&nbsp;
                                            </a>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "                                    ";
                }
                // line 156
                echo "                                </div>
                                
                                <div class=\"short-description\">
                                </div>
                                

                                <ul id=\"product-detail-tab\" class=\"nav-tabs product-tabs cart_product center\">
                                    ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit3", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["produit3"]) {
                    // line 164
                    echo "                                        ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 165
                        echo "                                            <li class=\"active\"> <a href=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                        echo "</a> </li>
                                            ";
                    } else {
                        // line 167
                        echo "                                            <li> <a href=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                        echo "</a> </li>
                                            ";
                    }
                    // line 168
                    echo "    
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                                </ul>
                                <br>
                                <div id=\"productTabContent\" class=\"tab-content\">
                                    ";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit3", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["produit3"]) {
                    // line 174
                    echo "                                        ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 175
                        echo "                                            <div class=\"tab-pane fade in active\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                        echo "\">
                                            ";
                    } else {
                        // line 177
                        echo "                                                <div class=\"tab-pane fade\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "id", []), "html", null, true);
                        echo "\">
                                                ";
                    }
                    // line 179
                    echo "                                                <div class=\"product-color-size-area\">

                                                    <div class=\"color-area\">
                                                        <h2 class=\"saider-bar-title\">Matière</h2>
                                                        <div class=\"color\">
                                                            <ul>
                                                                ";
                    // line 185
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "matiere", [])), "html", null, true);
                    echo "
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class=\"size-area\">
                                                        <h2 class=\"saider-bar-title\">Taille</h2>
                                                        <div class=\"size\">
                                                            <ul>
                                                                <li><a>";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit3"], "taille", []), "html", null, true);
                    echo "</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"product-variation\">
                                                    <form action=\"";
                    // line 200
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpanier", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                    echo "\" method=\"get\">
                                                        <div class=\"cart-plus-minus\">
                                                            <label for=\"qty\">Quantité:</label>
                                                            <div class=\"numbers-row\">
                                                                <select name=\"qte\" class=\"select form-control\">
                                                                    ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, abs($this->getAttribute($context["produit3"], "stock", []))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 206
                        echo "                                                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class=\"button pro-add-to-cart\" type=\"submit\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</span></button>
                                                    </form>
                                                </div>
                                                <div class=\"product-cart-option\">
                                                    <ul>
                                                        <li><a title=\"Réserver ce produit\" href=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserve_new", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-save\"></i><span>Reservation</span></a></li>
                                                        <li><a title=\"Ajouter à vos souhaits\" href=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutwishlist", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-heart\"></i><span>Souhait</span></a></li>
                                                        <li><a title=\"Comparer ce produit\" href=\"";
                    // line 218
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutcompare", ["id" => $this->getAttribute($context["produit3"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-exchange\"></i><span>comparaison</span></a></li>
                                                        ";
                    // line 219
                    if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrixCommande", [])) {
                        // line 220
                        echo "                                                            <li><a title=\"Commander sur mesure ce produit, prix commande: ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrixCommande", []), 2), "html", null, true);
                        echo "€\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($this->getAttribute($context["produit3"], "produit2", []), "id", [])]), "html", null, true);
                        echo "\"><i class=\"fa fa-pencil\"></i><span>Commande sur mesure</span></a></li>
                                                        ";
                    }
                    // line 222
                    echo "                                                        ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 223
                        echo "                                                        <li><a title=\"Contactez le vendeur\"><i class=\"fa fa-envelope\"></i><span class=\"user\">Contacter le vendeur</span></a></li>
                                                        ";
                    }
                    // line 225
                    echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-overview-tab\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"product-tab-inner\">
                                            <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\">
                                                <li class=\"active\"> <a href=\"#description\" data-toggle=\"tab\">Description</a> </li>
                                                <li> <a href=\"#utilisation\" data-toggle=\"tab\">Conditions d'utilisation</a> </li>
                                                <li> <a href=\"#reviews\" data-toggle=\"tab\">Avis</a> </li>
                                            </ul>
                                            <div id=\"productTabContent\" class=\"tab-content\">
                                                <div id=\"description\" class=\"tab-pane fade in active\">
                                                        <center><h3> \"";
                // line 245
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
                echo "\" </h3></center>
                                                                 <div class=\"review-ratting\">
                                                                    <span>
                                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
                // line 248
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "description", [])), "html", null, true);
                echo "</a> 
                                                                    </span>
                                                                    <br><br><br>
                                                                    A propos de <a href=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                echo "\" title=\"Voir les informations sur la marque ''";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo "''\"> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "marque", [])), "html", null, true);
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "marque", []), "image", []), "AssetPath", []), "rechercheThumbItem"), "html", null, true);
                echo "\" alt=\"\"></a>
                                                                </div> 
                                                            <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                                
                                                <div id=\"utilisation\" class=\"tab-pane fade\">
                                                    <div class=\"review-ratting\">
                                                        ";
                // line 259
                if ($this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "conditionsUtilisation", [])) {
                    // line 260
                    echo "                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "conditionsUtilisation", [])), "html", null, true);
                    echo "</a> 
                                                        ";
                } else {
                    // line 262
                    echo "                                                        <span>
                                                            <h4>";
                    // line 263
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Aucune conditions d'utilisation pour ce produit"), "html", null, true);
                    echo "</h4></span>
                                                        ";
                }
                // line 265
                echo "                                                    </div> 
                                                    <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                        
                                                <div id=\"reviews\" class=\"tab-pane fade\">
                                                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                                                        ";
                // line 272
                if ((twig_length_filter($this->env, ($context["commentaires"] ?? $this->getContext($context, "commentaires"))) != 0)) {
                    // line 273
                    echo "                                                            <h4>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Avis des utilisateurs"), "html", null, true);
                    echo "</h4>
                                                        ";
                } else {
                    // line 275
                    echo "                                                            <h4>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Aucun commentaire sur le produit"), "html", null, true);
                    echo "</h4><h3> <br> <strong> \"";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "produit1", []), "nom", [])), "html", null, true);
                    echo "\" </strong></h3>
                                                            ";
                }
                // line 277
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    echo "  
                                                            <div class=\"reviews-content-left\">
                                                                <div class=\"review-ratting\">
                                                                    <p>
                                                                        <a>";
                    // line 281
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "titre", [])), "html", null, true);
                    echo "</a> 
                                                                        ";
                    // line 282
                    $this->loadTemplate("KountacBundle:Default:produits/rating/rating.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 282)->display($context);
                    // line 283
                    echo "                                                                    </p>
                                                                    <span>";
                    // line 284
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", [])), "html", null, true);
                    echo "</span>
                                                                    <p class=\"author\"> ";
                    // line 285
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["commentaire"], "pseudo", [])), "html", null, true);
                    echo "<small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Ajouté le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", []), "d/M/Y"), "html", null, true);
                    echo ")</small> </p>
                                                                </div> 
                                                            </div>
                                                            <div class=\"buttons-set\"></div>
                                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                echo "
                                                    </div>

                                                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                                                        <div class=\"reviews-content-right\">
                                                            ";
                // line 295
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo " 
                                                                <h2>Donnez votre avis</h2>
                                                                <br>
                                                                <form action=\"";
                    // line 298
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", [])]), "html", null, true);
                    echo "\" method=\"POST\">
                                                                    ";
                    // line 299
                    echo                     $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                    echo "
                                                                    ";
                    // line 300
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
                    echo "
                                                                    <div class=\"form-area\">
                                                                        <div class=\"page-content checkout-page\">
                                                                         <div class=\"box-border\">
                                                                        <ul>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                <div class=\"rating\">
                                                                                     Votre avis
                                                                                        <input type=\"radio\" name=\"note\" id=\"excellent\" value=\"excellent\">
                                                                                        <label for=\"excellent\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_bien\" value=\"tres_bien\">
                                                                                        <label for=\"tres_bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"bien\" value=\"bien\">
                                                                                        <label for=\"bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"moyen\" value=\"moyen\">
                                                                                        <label for=\"moyen\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"mauvais\" value=\"mauvais\">
                                                                                        <label for=\"mauvais\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_mauvais\" value=\"tres_mauvais\">
                                                                                        <label for=\"tres_mauvais\"><i class=\"icon-star\"></i></label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                ";
                    // line 326
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", []), 'row');
                    echo "
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                ";
                    // line 331
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenu", []), 'row');
                    echo "
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                <div class=\"buttons-set\">
                                                                                    <button class=\"button submit\" title=\"Submit\" type=\"submit\"><span><i class=\"fa fa-thumbs-up\"></i> &nbsp;Commenter</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                     </ul>  
                                                                             </div></div>
                                                                    </div>
                                                                    ";
                    // line 345
                    echo                     $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                    echo "
                                                                </form>
                                                            ";
                } else {
                    // line 348
                    echo "                                                                <a title=\"Pour ajouter votre avis, vous devez avoir un compte kountac\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                    echo "\"><h2>Donnez votre avis</h2></a><br>
                                                            ";
                }
                // line 350
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Container End --> 

            <!-- Related Product Slider -->
            ";
                // line 366
                if ((twig_length_filter($this->env, ($context["categorieProduits"] ?? $this->getContext($context, "categorieProduits"))) != 0)) {
                    // line 367
                    echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"related-product-area\">
                                <div class=\"page-header\">
                                    <h2>Vous aimerez</h2>
                                </div>
                                <div class=\"related-products-pro\">
                                    <div class=\"slider-items-products\">
                                        <div id=\"related-product-slider\" class=\"product-flexslider hidden-buttons\">
                                            <div class=\"slider-items slider-width-col4\">

                                                ";
                    // line 379
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categorieProduits"] ?? $this->getContext($context, "categorieProduits")));
                    foreach ($context['_seq'] as $context["_key"] => $context["produit1"]) {
                        // line 380
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit1"], "produit2", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["produit_autre"]) {
                            // line 381
                            echo "                                                        ";
                            if (($this->getAttribute($context["produit_autre"], "europrix", []) && (($context["produit"] ?? $this->getContext($context, "produit")) != $context["produit_autre"]))) {
                                // line 382
                                echo "                                                        ";
                                $context["prixReduction"] = 0;
                                // line 383
                                echo "                                                        ";
                                $context["prixReduction"] = ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", []) - (($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "europrix", []) * $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "reduction", [])) / 100));
                                // line 384
                                echo "                                                        <!-- Début Portion de Code à PB -->
                                                        ";
                                // line 385
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["images_rest"] ?? $this->getContext($context, "images_rest")));
                                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                    // line 386
                                    echo "                                                        ";
                                    if (($this->getAttribute($context["image"], "produit2", []) == $context["produit_autre"])) {
                                        // line 387
                                        echo "                                                        <div class=\"product-item\">
                                                            <div class=\"item-inner\">
                                                                <div class=\"product-thumb has-hover-img\">
                                                                    <figure> 
                                                                        <center> 
                                                                                <a href=\"";
                                        // line 392
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\">
                                                                                    <img src=\"";
                                        // line 393
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "resizeThumb"), "html", null, true);
                                        echo "\" alt=\"\">
                                                                                </a>
                                                                                ";
                                        // line 395
                                        if ($this->getAttribute($context["image"], "path2", [])) {
                                            // line 396
                                            echo "                                                                                <a class=\"hover-img\" href=\"";
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                            echo "\">
                                                                                    <img src=\"";
                                            // line 397
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath2", []), "resizeThumb"), "html", null, true);
                                            echo "\" alt=\"\">
                                                                                </a>
                                                                                ";
                                        }
                                        // line 400
                                        echo "                                                                                ";
                                        if ($this->getAttribute($context["image"], "path3", [])) {
                                            // line 401
                                            echo "                                                                                <a class=\"hover-img\" href=\"";
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                            echo "\">
                                                                                    <img src=\"";
                                            // line 402
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath3", []), "resizeThumb"), "html", null, true);
                                            echo "\" alt=\"\">
                                                                                </a>
                                                                                ";
                                        }
                                        // line 405
                                        echo "                                                                                
                                                                        </center>
                                                                    </figure>
                                                                    <div class=\"pr-info-area animated animate4\">
                                                                        <a title=\"Reserver ce produit\" href=\"";
                                        // line 409
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                                        <a title=\"Ajouter à vos souhaits\" href=\"";
                                        // line 410
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                                        <a title=\"Comparer ce produit\" href=\"";
                                        // line 411
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                                        ";
                                        // line 412
                                        if ($this->getAttribute($context["produit_autre"], "europrixCommande", [])) {
                                            // line 413
                                            echo "                                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : ";
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit_autre"], "europrixCommande", []), 2), "html", null, true);
                                            echo " €\" href=\"";
                                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new_item", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                            echo "\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                                        ";
                                        }
                                        // line 415
                                        echo "                                                                    </div>
                                                                </div>
                                                                <div class=\"item-info\">
                                                                    <div class=\"info-inner\">
                                                                        <div class=\"item-title\"> <a title=\"";
                                        // line 419
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "nom", [])), "html", null, true);
                                        echo "\" href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "nom", [])), "html", null, true);
                                        echo "-";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["produit_autre"], "libelle", []), "libelle", [])), "html", null, true);
                                        echo "</a> </div>
                                                                        <div class=\"item-content\">
                                                                            <div class=\"item-price\">
                                                                                ";
                                        // line 422
                                        if (($this->getAttribute($context["produit_autre"], "reduction", []) == 0)) {
                                            // line 423
                                            echo "                                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">";
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                            echo " €</span> </span> </div>
                                                                                ";
                                        } else {
                                            // line 425
                                            echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                            // line 426
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit_autre"], "europrix", []), 2), "html", null, true);
                                            echo " €</span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                            // line 427
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit_autre"], "europrix", []), 2), "html", null, true);
                                            echo " €</span> </p>
                                                                                    </div>
                                                                                ";
                                        }
                                        // line 430
                                        echo "                                                                            </div>
                                                                            <center>
                                                                                <div class=\"language-currency-wrapper left\">
                                                                                    <div class=\"inner-cl\">
                                                                                        <div class=\"block block-language form-language \">
                                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"";
                                        // line 435
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\" title=\"Aller à la marque ";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                        echo "\"><img src=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "image", []), "AssetPath", []), "marqueLogoThumb"), "html", null, true);
                                        echo "\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> ";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                        echo "</span></a></div>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <strong><a title=\"Voir tous les produits de la marque ";
                                        // line 438
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                        echo "\" href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_marque", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\"><span class=\"hidden-xs\">";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit_autre"], "produit1", []), "marque", []), "marque", [])), "html", null, true);
                                        echo "</span></a></strong>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </center>
                                                                            <div class=\"pro-action\">
                                                                                <a href=\"";
                                        // line 446
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quickView", ["id" => $this->getAttribute($context["produit_autre"], "id", [])]), "html", null, true);
                                        echo "\">
                                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"";
                                        // line 447
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter("css/cart.jpg", "rechercheThumbItem"), "html", null, true);
                                        echo "\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                                </a>                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                ";
                                    }
                                    // line 455
                                    echo "                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 456
                                echo "                                                        ";
                            }
                            // line 457
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit_autre'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "  
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 458
                    echo " 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                }
                // line 468
                echo "        ";
            }
            // line 469
            echo "        ";
        } elseif ((twig_length_filter($this->env, ($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 470
            echo "            ";
            $this->loadTemplate("KountacBundle:Default:produits/cfa/single_product.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 470)->display($context);
            // line 471
            echo "        ";
        } elseif ((twig_length_filter($this->env, ($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 472
            echo "            ";
            $this->loadTemplate("KountacBundle:Default:produits/livre/single_product.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 472)->display($context);
            // line 473
            echo "        ";
        } elseif ((twig_length_filter($this->env, ($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 474
            echo "            ";
            $this->loadTemplate("KountacBundle:Default:produits/usa/single_product.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 474)->display($context);
            // line 475
            echo "        ";
        } elseif ((twig_length_filter($this->env, ($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 476
            echo "            ";
            $this->loadTemplate("KountacBundle:Default:produits/naira/single_product.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 476)->display($context);
            // line 477
            echo "        ";
        } elseif ((twig_length_filter($this->env, ($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 478
            echo "            ";
            $this->loadTemplate("KountacBundle:Default:produits/all/single_product.html.twig", "KountacBundle:Default:produits/single_product.html.twig", 478)->display($context);
            // line 479
            echo "        ";
        }
        // line 480
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Default:produits/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1207 => 480,  1204 => 479,  1201 => 478,  1198 => 477,  1195 => 476,  1192 => 475,  1189 => 474,  1186 => 473,  1183 => 472,  1180 => 471,  1177 => 470,  1174 => 469,  1171 => 468,  1159 => 458,  1147 => 457,  1144 => 456,  1138 => 455,  1127 => 447,  1123 => 446,  1108 => 438,  1096 => 435,  1089 => 430,  1083 => 427,  1079 => 426,  1076 => 425,  1070 => 423,  1068 => 422,  1056 => 419,  1050 => 415,  1042 => 413,  1040 => 412,  1036 => 411,  1032 => 410,  1028 => 409,  1022 => 405,  1016 => 402,  1011 => 401,  1008 => 400,  1002 => 397,  997 => 396,  995 => 395,  990 => 393,  986 => 392,  979 => 387,  976 => 386,  972 => 385,  969 => 384,  966 => 383,  963 => 382,  960 => 381,  955 => 380,  951 => 379,  937 => 367,  935 => 366,  917 => 350,  911 => 348,  905 => 345,  888 => 331,  880 => 326,  851 => 300,  847 => 299,  843 => 298,  837 => 295,  830 => 290,  809 => 285,  805 => 284,  802 => 283,  800 => 282,  796 => 281,  773 => 277,  765 => 275,  759 => 273,  757 => 272,  748 => 265,  743 => 263,  740 => 262,  734 => 260,  732 => 259,  715 => 251,  709 => 248,  703 => 245,  685 => 229,  668 => 225,  664 => 223,  661 => 222,  653 => 220,  651 => 219,  647 => 218,  643 => 217,  639 => 216,  629 => 208,  618 => 206,  614 => 205,  606 => 200,  597 => 194,  585 => 185,  577 => 179,  571 => 177,  565 => 175,  562 => 174,  545 => 173,  540 => 170,  525 => 168,  517 => 167,  509 => 165,  506 => 164,  489 => 163,  480 => 156,  477 => 155,  466 => 152,  462 => 151,  451 => 150,  447 => 149,  444 => 148,  442 => 147,  437 => 144,  434 => 143,  428 => 142,  422 => 139,  415 => 138,  412 => 137,  408 => 136,  405 => 135,  403 => 134,  399 => 132,  393 => 129,  389 => 128,  386 => 127,  380 => 125,  378 => 124,  371 => 122,  362 => 115,  356 => 114,  346 => 112,  343 => 111,  333 => 109,  331 => 108,  322 => 107,  318 => 106,  310 => 100,  301 => 97,  296 => 96,  292 => 95,  285 => 90,  282 => 89,  280 => 88,  267 => 77,  258 => 74,  254 => 72,  250 => 71,  243 => 69,  235 => 68,  231 => 67,  221 => 59,  218 => 58,  212 => 57,  203 => 54,  198 => 53,  193 => 52,  188 => 51,  186 => 50,  176 => 42,  173 => 41,  167 => 40,  158 => 37,  153 => 36,  148 => 35,  143 => 34,  141 => 33,  136 => 30,  130 => 28,  126 => 27,  121 => 26,  119 => 25,  111 => 19,  108 => 18,  106 => 17,  103 => 16,  100 => 14,  98 => 13,  95 => 12,  89 => 11,  71 => 8,  65 => 7,  53 => 4,  47 => 3,  22 => 1,);
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

{% block title %}
  {{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}
{% endblock %}
 
{% block meta %}
  <meta name=\"description\" content=\"{{ produit.produit1.description|capitalize }}, {{ produit.produit1.categorie|trans}}, {{ produit.produit1.nom }}, {{ produit.produit1.description|capitalize }}, {{ produit.produit1.marque.marque|capitalize }} -  Achetez le nouveau prêt à porter africain -  Les dernières tendances modes Africaine en un clic -  The new made in Africa, la qualité africaine livrée chez vous -  Originalité et authenticité, la mode africaine chez vous\" />
{% endblock %}

{% block body %}

{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
{% include 'ChatBundle:Chat:chat.html.twig' %}
{% endif %}

    {% if euro|length != 0 %}
        {% if produit.europrix %}
        <div>
            <div class=\"breadcrumbs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <ul>
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                    <a href=\"{{ path('fos_user_security_logout') }}\">
                                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                    </a>
                                {% endif %} 
                            </ul>
                            <ul>
                                {% if app.request.hasPreviousSession %}
                                    {% for type, messages in app.session.flashbag.all() %}
                                        {% for message in messages %}
                                            <div class=\"flash-{{ type }}\">
                                                {{ message }}
                                            </div>
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <!-- Breadcrumbs -->

        <div class=\"breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <ul>
                            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path ('kountac_homepage')}}\">Accueil</a><span>&raquo;</span></li>
                            <li class=\"home\"> <a title=\"Voir produits de la catégorie {{ produit.produit1.categorie|capitalize }}\" href=\"{{ path('categorie_2', { 'categorie' : produit.produit1.categorie.id}) }}\">{{ produit.produit1.categorie|capitalize }}</a><span>&raquo;</span></li>
                            <li><strong>{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</strong></li>
                        </ul>
                        {% for flashMessage in app.session.flashbag.get('success') %}
                            <div class=\"alert-box\">
                                <br>
                                {{ flashMessage }}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End --> 
        <!-- Main Container -->
        <div class=\"main-container col1-layout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-main\">
                        <div class=\"product-view-area\">
                            {% set prixReduction = 0 %}
                            {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}

                            <div class=\"product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5\">
                                <div class=\"slider-items-products\">
                                    <div id=\"upsell-product-slider\" class=\"product-flexslider hidden-buttons\">
                                        <div class=\"large-image slides\"> 
                                            {% for image in images %}
                                               <a href=\"{{ asset(image.AssetPath) }}\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> 
                                                    <li><figure><img class=\"zoom-img\" src=\"{{ asset(image.AssetPath) }}\"> </figure></li>
                                                </a> 
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"flexslider flexslider-thumb\">
                                    <ul class=\"previews-list slides\">
                                        {% for image in images %}
                                            <li><a href='{{ asset(image.AssetPath) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath) }}' \"><img src=\"{{ asset(image.AssetPath) }}\" alt = \"\"/></a></li>
                                                {% if image.path2%}
                                            <li><a href='{{ asset(image.AssetPath2) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath2) }}' \"><img src=\"{{ asset(image.AssetPath2) }}\" alt = \"\"/></a></li>
                                                {% endif %}
                                                {% if image.path3%}
                                            <li><a href='{{ asset(image.AssetPath3) }}' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{ asset(image.AssetPath3) }}' \"><img src=\"{{ asset(image.AssetPath3) }}\" alt = \"\"/></a></li>
                                                {% endif %}
                                        {% endfor %}
                                    </ul>
                                </div>
                                <!-- end: more-images --> 

                            </div>
                            <div class=\"col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area\">
                                <div class=\"product-name\">
                                    <h1>{{ produit.produit1.nom|capitalize }} - {{ produit.libelle.libelle|capitalize }}</h1>
                                </div>
                                {% if produit.reduction == 0 %}
                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </span> </div>
                                {% else %}
                                    <div class=\"price-box\">
                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </p>
                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit.europrix|number_format(2) }} €</span> </p>
                                    </div>
                                {% endif %}

                                <div class=\"short-description\">
                                    {% if produit.produit1.produit2|length > 1 %}
                                        &nbsp;&nbsp;<label>Autre(s) motif(s) : </label> 
                                        {% for motif in produit.produit1.produit2 %}
                                            {% if motif != produit %}
                                                <a title=\"Motif {{ motif.libelle.libelle|capitalize }}\" href=\"{{ path('product', {'id' : motif.id}) }}\">
                                                    <img src=\"{{ motif.libelle.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                                
                                <div class=\"short-description\">
                                    {% if produit|length > 1 %}
                                        &nbsp;&nbsp;<label>Autre(s) mannequin(s) : </label> 
                                        {% for image in images_autres %}
                                            <a href=\"{{ path('product_mannequin', {'id': produit.id, 'id_image': image.id}) }}\" title=\"(taille standard: {{ image.mannequin.tailleStandardMannequin }}, poids: {{ image.mannequin.poidsMannequin }}Kg, Taille:{{ image.mannequin.tailleMannequin }}m)\">
                                                <img src=\"{{ image.mannequin.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\">&nbsp;
                                                {{ image.mannequin.nomMannequin|capitalize }} - {{ image.mannequin.tailleStandardMannequin }}&nbsp;&nbsp;&nbsp;
                                            </a>
                                        {% endfor %}
                                    {% endif %}
                                </div>
                                
                                <div class=\"short-description\">
                                </div>
                                

                                <ul id=\"product-detail-tab\" class=\"nav-tabs product-tabs cart_product center\">
                                    {% for produit3 in produit.produit3 %}
                                        {% if loop.first %}
                                            <li class=\"active\"> <a href=\"#{{ produit3.id }}\" data-toggle=\"tab\">{{ produit3.taille }}</a> </li>
                                            {% else %}
                                            <li> <a href=\"#{{ produit3.id }}\" data-toggle=\"tab\">{{ produit3.taille }}</a> </li>
                                            {% endif %}    
                                        {% endfor %}
                                </ul>
                                <br>
                                <div id=\"productTabContent\" class=\"tab-content\">
                                    {% for produit3 in produit.produit3 %}
                                        {% if loop.first %}
                                            <div class=\"tab-pane fade in active\" id=\"{{ produit3.id }}\">
                                            {% else %}
                                                <div class=\"tab-pane fade\" id=\"{{ produit3.id }}\">
                                                {% endif %}
                                                <div class=\"product-color-size-area\">

                                                    <div class=\"color-area\">
                                                        <h2 class=\"saider-bar-title\">Matière</h2>
                                                        <div class=\"color\">
                                                            <ul>
                                                                {{ produit.produit1.matiere|capitalize }}
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class=\"size-area\">
                                                        <h2 class=\"saider-bar-title\">Taille</h2>
                                                        <div class=\"size\">
                                                            <ul>
                                                                <li><a>{{ produit3.taille }}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"product-variation\">
                                                    <form action=\"{{ path('ajoutpanier', {'id' : produit3.id}) }}\" method=\"get\">
                                                        <div class=\"cart-plus-minus\">
                                                            <label for=\"qty\">Quantité:</label>
                                                            <div class=\"numbers-row\">
                                                                <select name=\"qte\" class=\"select form-control\">
                                                                    {% for i in 1 .. produit3.stock|abs %}
                                                                        <option value=\"{{ i }}\">{{ i }}</option>
                                                                    {% endfor %}
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class=\"button pro-add-to-cart\" type=\"submit\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</span></button>
                                                    </form>
                                                </div>
                                                <div class=\"product-cart-option\">
                                                    <ul>
                                                        <li><a title=\"Réserver ce produit\" href=\"{{ path('reserve_new', {'id' : produit3.id}) }}\"><i class=\"fa fa-save\"></i><span>Reservation</span></a></li>
                                                        <li><a title=\"Ajouter à vos souhaits\" href=\"{{ path('ajoutwishlist', {'id' : produit3.id}) }}\"><i class=\"fa fa-heart\"></i><span>Souhait</span></a></li>
                                                        <li><a title=\"Comparer ce produit\" href=\"{{ path('ajoutcompare', {'id' : produit3.id}) }}\"><i class=\"fa fa-exchange\"></i><span>comparaison</span></a></li>
                                                        {% if produit.europrixCommande %}
                                                            <li><a title=\"Commander sur mesure ce produit, prix commande: {{ produit.europrixCommande|number_format(2) }}€\" href=\"{{ path('commande_mesures_new_item', {'id' : produit3.produit2.id}) }}\"><i class=\"fa fa-pencil\"></i><span>Commande sur mesure</span></a></li>
                                                        {% endif %}
                                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                        <li><a title=\"Contactez le vendeur\"><i class=\"fa fa-envelope\"></i><span class=\"user\">Contacter le vendeur</span></a></li>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"product-overview-tab\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"product-tab-inner\">
                                            <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\">
                                                <li class=\"active\"> <a href=\"#description\" data-toggle=\"tab\">Description</a> </li>
                                                <li> <a href=\"#utilisation\" data-toggle=\"tab\">Conditions d'utilisation</a> </li>
                                                <li> <a href=\"#reviews\" data-toggle=\"tab\">Avis</a> </li>
                                            </ul>
                                            <div id=\"productTabContent\" class=\"tab-content\">
                                                <div id=\"description\" class=\"tab-pane fade in active\">
                                                        <center><h3> \"{{ produit.produit1.nom|upper }}\" </h3></center>
                                                                 <div class=\"review-ratting\">
                                                                    <span>
                                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ produit.produit1.description|capitalize }}</a> 
                                                                    </span>
                                                                    <br><br><br>
                                                                    A propos de <a href=\"{{ path('espace_marque', {'id' : produit.id})}}\" title=\"Voir les informations sur la marque ''{{ produit.produit1.marque.marque|capitalize }}''\"> {{ produit.produit1.marque.marque|capitalize }} <img src=\"{{ produit.produit1.marque.image.AssetPath|imagine_filter('rechercheThumbItem') }}\" alt=\"\"></a>
                                                                </div> 
                                                            <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                                
                                                <div id=\"utilisation\" class=\"tab-pane fade\">
                                                    <div class=\"review-ratting\">
                                                        {% if produit.produit1.conditionsUtilisation %}
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ produit.produit1.conditionsUtilisation|capitalize }}</a> 
                                                        {% else %}
                                                        <span>
                                                            <h4>{{ (\"Aucune conditions d\\'utilisation pour ce produit\")|upper }}</h4></span>
                                                        {% endif %}
                                                    </div> 
                                                    <div class=\"buttons-set\"></div>
                                                    
                                                </div>
                                                        
                                                <div id=\"reviews\" class=\"tab-pane fade\">
                                                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                                                        {% if commentaires|length != 0%}
                                                            <h4>{{ ('Avis des utilisateurs')|upper }}</h4>
                                                        {% else %}
                                                            <h4>{{ ('Aucun commentaire sur le produit')|upper }}</h4><h3> <br> <strong> \"{{ produit.produit1.nom|upper }}\" </strong></h3>
                                                            {% endif %}
                                                            {% for commentaire in commentaires %}  
                                                            <div class=\"reviews-content-left\">
                                                                <div class=\"review-ratting\">
                                                                    <p>
                                                                        <a>{{ commentaire.titre|capitalize }}</a> 
                                                                        {% include 'KountacBundle:Default:produits/rating/rating.html.twig' %}
                                                                    </p>
                                                                    <span>{{ commentaire.contenu|capitalize }}</span>
                                                                    <p class=\"author\"> {{ commentaire.pseudo|capitalize }}<small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Ajouté le {{ commentaire.date|date(\"d/M/Y\") }})</small> </p>
                                                                </div> 
                                                            </div>
                                                            <div class=\"buttons-set\"></div>
                                                        {% endfor %}

                                                    </div>

                                                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                                                        <div class=\"reviews-content-right\">
                                                            {% if is_granted('IS_AUTHENTICATED_FULLY') %} 
                                                                <h2>Donnez votre avis</h2>
                                                                <br>
                                                                <form action=\"{{ path('product', {'id' : produit.id}) }}\" method=\"POST\">
                                                                    {{ form_start(form) }}
                                                                    {{ form_errors(form) }}
                                                                    <div class=\"form-area\">
                                                                        <div class=\"page-content checkout-page\">
                                                                         <div class=\"box-border\">
                                                                        <ul>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                <div class=\"rating\">
                                                                                     Votre avis
                                                                                        <input type=\"radio\" name=\"note\" id=\"excellent\" value=\"excellent\">
                                                                                        <label for=\"excellent\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_bien\" value=\"tres_bien\">
                                                                                        <label for=\"tres_bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"bien\" value=\"bien\">
                                                                                        <label for=\"bien\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"moyen\" value=\"moyen\">
                                                                                        <label for=\"moyen\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"mauvais\" value=\"mauvais\">
                                                                                        <label for=\"mauvais\"><i class=\"icon-star\"></i></label>
                                                                                        <input type=\"radio\" name=\"note\" id=\"tres_mauvais\" value=\"tres_mauvais\">
                                                                                        <label for=\"tres_mauvais\"><i class=\"icon-star\"></i></label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\">
                                                                            <div class=\"col-sm-6\">
                                                                                {{ form_row(form.pseudo) }}
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                {{ form_row(form.contenu) }}
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"row\"> 
                                                                            <div class=\"col-sm-10\">
                                                                                <div class=\"buttons-set\">
                                                                                    <button class=\"button submit\" title=\"Submit\" type=\"submit\"><span><i class=\"fa fa-thumbs-up\"></i> &nbsp;Commenter</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                     </ul>  
                                                                             </div></div>
                                                                    </div>
                                                                    {{ form_end(form) }}
                                                                </form>
                                                            {% else %}
                                                                <a title=\"Pour ajouter votre avis, vous devez avoir un compte kountac\" href=\"{{ path('fos_user_security_login') }}\"><h2>Donnez votre avis</h2></a><br>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Container End --> 

            <!-- Related Product Slider -->
            {% if categorieProduits|length != 0%}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"related-product-area\">
                                <div class=\"page-header\">
                                    <h2>Vous aimerez</h2>
                                </div>
                                <div class=\"related-products-pro\">
                                    <div class=\"slider-items-products\">
                                        <div id=\"related-product-slider\" class=\"product-flexslider hidden-buttons\">
                                            <div class=\"slider-items slider-width-col4\">

                                                {% for produit1 in categorieProduits %}
                                                    {% for produit_autre in produit1.produit2 %}
                                                        {% if produit_autre.europrix and produit != produit_autre %}
                                                        {% set prixReduction = 0 %}
                                                        {% set prixReduction = produit.europrix - (produit.europrix * produit.reduction/100) %}
                                                        <!-- Début Portion de Code à PB -->
                                                        {% for image in images_rest %}
                                                        {% if image.produit2 == produit_autre %}
                                                        <div class=\"product-item\">
                                                            <div class=\"item-inner\">
                                                                <div class=\"product-thumb has-hover-img\">
                                                                    <figure> 
                                                                        <center> 
                                                                                <a href=\"{{ path('product', {'id' : produit_autre.id}) }}\">
                                                                                    <img src=\"{{ image.AssetPath|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                                </a>
                                                                                {% if image.path2 %}
                                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit_autre.id}) }}\">
                                                                                    <img src=\"{{ image.AssetPath2|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                                </a>
                                                                                {% endif %}
                                                                                {% if image.path3 %}
                                                                                <a class=\"hover-img\" href=\"{{ path('product', {'id' : produit_autre.id}) }}\">
                                                                                    <img src=\"{{ image.AssetPath3|imagine_filter('resizeThumb') }}\" alt=\"\">
                                                                                </a>
                                                                                {% endif %}
                                                                                
                                                                        </center>
                                                                    </figure>
                                                                    <div class=\"pr-info-area animated animate4\">
                                                                        <a title=\"Reserver ce produit\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"quick-view\"><i class=\"fa fa-save\"><span>Reserver</span></i></a> 
                                                                        <a title=\"Ajouter à vos souhaits\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"wishlist\"><i class=\"fa fa-heart\"><span>Wishlist</span></i></a> 
                                                                        <a title=\"Comparer ce produit\" href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\" class=\"compare\"><i class=\"fa fa-exchange\"><span>Compare</span></i></a> 
                                                                        {% if produit_autre.europrixCommande %}
                                                                            <a title=\"Commander sur mesure, prix pour une commande sur mesure : {{ produit_autre.europrixCommande|number_format(2) }} €\" href=\"{{ path('commande_mesures_new_item', {'id' : produit_autre.id}) }}\" class=\"wishlist\"><i class=\"fa fa-pencil\"><span>Commander sur mesure</span></i></a> 
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                                <div class=\"item-info\">
                                                                    <div class=\"info-inner\">
                                                                        <div class=\"item-title\"> <a title=\"{{ produit_autre.produit1.nom|capitalize }}\" href=\"{{ path('product', {'id' : produit_autre.id}) }}\">{{ produit_autre.produit1.nom|capitalize }}-{{ produit_autre.libelle.libelle|capitalize }}</a> </div>
                                                                        <div class=\"item-content\">
                                                                            <div class=\"item-price\">
                                                                                {% if produit_autre.reduction == 0 %}
                                                                                    <div class=\"price-box\"> <span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} €</span> </span> </div>
                                                                                {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ produit_autre.europrix|number_format(2) }} €</span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit_autre.europrix|number_format(2) }} €</span> </p>
                                                                                    </div>
                                                                                {% endif %}
                                                                            </div>
                                                                            <center>
                                                                                <div class=\"language-currency-wrapper left\">
                                                                                    <div class=\"inner-cl\">
                                                                                        <div class=\"block block-language form-language \">
                                                                                          <div class=\"myaccount\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"{{ path('espace_marque', {'id' : produit_autre.id}) }}\" title=\"Aller à la marque {{ produit_autre.produit1.marque.marque|capitalize }}\"><img src=\"{{ produit_autre.produit1.marque.image.AssetPath|imagine_filter('marqueLogoThumb') }}\" alt=\"\">&nbsp;&nbsp;&nbsp;<span class=\"hidden-xs\"> {{ produit_autre.produit1.marque.marque|capitalize }}</span></a></div>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <strong><a title=\"Voir tous les produits de la marque {{ produit_autre.produit1.marque.marque|capitalize }}\" href=\"{{ path('espace_marque', {'id' : produit_autre.id}) }}\"><span class=\"hidden-xs\">{{ produit_autre.produit1.marque.marque|capitalize }}</span></a></strong>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </center>
                                                                            <div class=\"pro-action\">
                                                                                <a href=\"{{ path('quickView', {'id' : produit_autre.id}) }}\">
                                                                                    <button type=\"button\" class=\"add-to-cart-mt\"> <img src=\"{{ 'css/cart.jpg'|imagine_filter('rechercheThumbItem') }}\" alt=\"\"><span> Ajouter au panier</span> </button>
                                                                                </a>                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                {% endif %}
                                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}  
                                                {% endfor %} 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endif %}
        {% elseif cfa|length != 0 %}
            {% include 'KountacBundle:Default:produits/cfa/single_product.html.twig' %}
        {% elseif livre|length != 0 %}
            {% include 'KountacBundle:Default:produits/livre/single_product.html.twig' %}
        {% elseif usa|length != 0 %}
            {% include 'KountacBundle:Default:produits/usa/single_product.html.twig' %}
        {% elseif naira|length != 0 %}
            {% include 'KountacBundle:Default:produits/naira/single_product.html.twig' %}
        {% elseif all|length != 0 %}
            {% include 'KountacBundle:Default:produits/all/single_product.html.twig' %}
        {% endif %}
    {% endblock %}
", "KountacBundle:Default:produits/single_product.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Default/produits/single_product.html.twig");
    }
}
