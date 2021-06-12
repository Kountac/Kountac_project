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

/* produits/index.html.twig */
class __TwigTemplate_41af583b809e054de4cfbedb4e1e3364cb941120ee2f13f3488e19c1f7bb2e11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutAdmin.html.twig", "produits/index.html.twig", 1);
        $this->blocks = [
            'bodyAdmin' => [$this, 'block_bodyAdmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyAdmin($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyAdmin"));

        // line 4
        echo "    ";
        $context["i"] = 1;
        // line 5
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <ul>
            <li class=\"home\"> <a title=\"Aller à mon profil administrateur\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile_show");
        echo "\">Mon profil</a><span>&raquo;</span></li>
            <li><strong>Mes produits</strong></li>
          </ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "            <div class=\"alert-box\">
                <br><br>
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                <br><br>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
";
        // line 26
        echo "<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            ";
        // line 34
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 35
            echo "                                <h2>Liste de tous vos produits &nbsp;&nbsp;";
            if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "sexe", [])) {
                echo "Mme.";
            } else {
                echo "M.";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", [])), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 37
        echo "                        </div>
                        <div class=\"order-detail-content\">
                        ";
        // line 39
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 40
            echo "                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de produits vide. Aucun produit à afficher</h1></center></td>
                                    </tr>
                                </table>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_new_1");
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajouter un nouveau produit</a> </div>
                            </div>  
                        ";
        } else {
            // line 49
            echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th class=\"\">Marque</th>
                                            <th class=\"cart_product\">Aperçu</th>
                                            <th>Description</th>
                                            <th class=\"cart_description \">Motif(s)</th>
                                            <th>Date d'ajout</th>
                                            <th>Stock</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 64
                echo "                                            <tr>
                                                <td>
                                                    ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "marque", []), "html", null, true);
                echo "
                                                </td>
                                                <td class=\"cart_product\">
                                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_show", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "nom", [])), "html", null, true);
                echo "\" class=\"product-image\">
                                                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "produit2", []));
                foreach ($context['_seq'] as $context["_key"] => $context["produit2"]) {
                    // line 71
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 72
                        echo "                                                                ";
                        if ((($this->getAttribute($context["image"], "produit2", []) == $context["produit2"]) && ($this->getAttribute($context["image"], "top", []) == 0))) {
                            // line 73
                            echo "                                                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["image"], "AssetPath", []), "cartThumbMenuItem"), "html", null, true);
                            echo "\" alt=\"\"><br><br>
                                                                ";
                        }
                        // line 75
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                                    </a>
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a>";
                // line 79
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "nom", [])), "html", null, true);
                echo " </a></p><br>
                                                    <small><a><u>Description</u> : ";
                // line 80
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "description", [])), 50, false, " ..."), "html", null, true);
                echo "</a></small><br>
                                                    <small><a><u>Catégorie</u> : ";
                // line 81
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "categorie", [])), "html", null, true);
                echo "</a></small><br>
                                                    <small><a><u>Matière</u> : ";
                // line 82
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "matiere", [])), "html", null, true);
                echo "</a></small><br><br>
                                                    <br> 
                                                </td>
                                                <td class=\"cart_description col-sm-4\">
                                                    <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\" style=\"min-height : 200px;\">
                                                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "produit2", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["produit2"]) {
                    // line 88
                    echo "                                                        ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 89
                        echo "                                                            <li class=\"active\"><a href=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "id", []), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "libelle", []), "html", null, true);
                        echo "</a> </li>
                                                        ";
                    } else {
                        // line 91
                        echo "                                                            <li><a href=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "id", []), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "libelle", []), "html", null, true);
                        echo "</a> </li>
                                                        ";
                    }
                    // line 93
                    echo "                                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                                                    </ul>
                                                    <div class=\"col-sm-12\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xs-12\">
                                                                <div id=\"productTabContent\" class=\"tab-content\">
                                                                                
                                                                    ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "produit2", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["produit2"]) {
                    // line 101
                    echo "                                                                            ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 102
                        echo "                                                                                <div class=\"tab-pane fade in active\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "id", []), "html", null, true);
                        echo "\">
                                                                                <br><label> <img src=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "AssetPath", []), "MotifThumb"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "libelle", [])), "html", null, true);
                        echo "</label>
                                                                                <p><strong>Stock motif :</strong><span class=\"regular-price\"> <span class=\"price\">";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "stock", []), "html", null, true);
                        echo " </span> </span></p>
                                                                                ";
                        // line 105
                        if ($this->getAttribute($context["produit2"], "europrix", [])) {
                            // line 106
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 107
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "europrix", []) - (($this->getAttribute($context["produit2"], "europrix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 108
                            echo "
                                                                                    ";
                            // line 109
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 110
                                echo "                                                                                        <p><strong>France (€) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 112
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>France (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 114
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 115
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "europrix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 118
                            echo "                                                                                ";
                        } else {
                            // line 119
                            echo "                                                                                    <p><strong>France (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 121
                        echo "                                                                                
                                                                                ";
                        // line 122
                        if ($this->getAttribute($context["produit2"], "allprix", [])) {
                            // line 123
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 124
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "allprix", []) - (($this->getAttribute($context["produit2"], "allprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 125
                            echo "
                                                                                    ";
                            // line 126
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 127
                                echo "                                                                                        <p><strong>Allemagne (€) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 129
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Allemagne (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 131
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 132
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "allprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 135
                            echo "                                                                                ";
                        } else {
                            // line 136
                            echo "                                                                                    <p><strong>Allemagne (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 138
                        echo "
                                                                                ";
                        // line 139
                        if ($this->getAttribute($context["produit2"], "livreprix", [])) {
                            // line 140
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 141
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "livreprix", []) - (($this->getAttribute($context["produit2"], "livreprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 142
                            echo "
                                                                                    ";
                            // line 143
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 144
                                echo "                                                                                        <p><strong>Angleterre (£) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 146
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Angleterre (£) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 148
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 149
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "livreprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 152
                            echo "                                                                                ";
                        } else {
                            // line 153
                            echo "                                                                                    <p><strong>Angleterre (£) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 155
                        echo "
                                                                                ";
                        // line 156
                        if ($this->getAttribute($context["produit2"], "usaprix", [])) {
                            // line 157
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 158
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "usaprix", []) - (($this->getAttribute($context["produit2"], "usaprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 159
                            echo "
                                                                                    ";
                            // line 160
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 161
                                echo "                                                                                        <p><strong>Etats-unis (\$) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 163
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Etats-unis (\$) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 165
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 166
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "usaprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 169
                            echo "                                                                                ";
                        } else {
                            // line 170
                            echo "                                                                                    <p><strong>Etats-unis (\$) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 172
                        echo "
                                                                                ";
                        // line 173
                        if ($this->getAttribute($context["produit2"], "cfaprix", [])) {
                            // line 174
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 175
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "cfaprix", []) - (($this->getAttribute($context["produit2"], "cfaprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 176
                            echo "
                                                                                    ";
                            // line 177
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 178
                                echo "                                                                                        <p><strong>Cameroun (F CFA) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), "html", null, true);
                                echo "</span> </span></p>
                                                                                    ";
                            } else {
                                // line 180
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Cameroun (F CFA) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 182
                                echo twig_escape_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 183
                                echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "cfaprix", []), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 186
                            echo "                                                                                ";
                        } else {
                            // line 187
                            echo "                                                                                    <p><strong>Cameroun (F CFA) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 189
                        echo "                                                                                <br>
                                                                                <label>Mannequin(s) disponible(s):</label><br>
                                                                                ";
                        // line 191
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
                        foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
                            // line 192
                            echo "                                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mannequin"], "picture", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 193
                                echo "                                                                                        ";
                                if (($this->getAttribute($context["image"], "produit2", []) == $context["produit2"])) {
                                    // line 194
                                    echo "                                                                                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "MotifThumb"), "html", null, true);
                                    echo "\" alt=\"\">&nbsp;";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
                                    echo " 
                                                                                            <small> (taille standard: ";
                                    // line 195
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleStandardMannequin", []), "html", null, true);
                                    echo ", poids: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "poidsMannequin", []), "html", null, true);
                                    echo "Kg, Taille: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleMannequin", []), "html", null, true);
                                    echo "m)</small> <br>
                                                                                        ";
                                }
                                // line 197
                                echo "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 198
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mannequin'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 199
                        echo "                                                                            </div>
                                                                        ";
                    } else {
                        // line 201
                        echo "                                                                                <div class=\"tab-pane fade\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "id", []), "html", null, true);
                        echo "\">
                                                                                <div class=\"std\">
                                                                                <br><label> <img src=\"";
                        // line 203
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "AssetPath", []), "MotifThumb"), "html", null, true);
                        echo "\" alt=\"\">&nbsp;";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["produit2"], "libelle", []), "libelle", [])), "html", null, true);
                        echo "</label>
                                                                                <p><strong>Stock motif :</strong><span class=\"regular-price\"> <span class=\"price\">";
                        // line 204
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "stock", []), "html", null, true);
                        echo " </span> </span></p>
                                                                                ";
                        // line 205
                        if ($this->getAttribute($context["produit2"], "europrix", [])) {
                            // line 206
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 207
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "europrix", []) - (($this->getAttribute($context["produit2"], "europrix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 208
                            echo "
                                                                                    ";
                            // line 209
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 210
                                echo "                                                                                        <p><strong>France (€) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 212
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>France (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 214
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 215
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "europrix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 218
                            echo "                                                                                ";
                        } else {
                            // line 219
                            echo "                                                                                    <p><strong>France (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 221
                        echo "                                                                                
                                                                                ";
                        // line 222
                        if ($this->getAttribute($context["produit2"], "allprix", [])) {
                            // line 223
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 224
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "allprix", []) - (($this->getAttribute($context["produit2"], "allprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 225
                            echo "
                                                                                    ";
                            // line 226
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 227
                                echo "                                                                                        <p><strong>Allemagne (€) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 229
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Allemagne (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 231
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 232
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "allprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 235
                            echo "                                                                                ";
                        } else {
                            // line 236
                            echo "                                                                                    <p><strong>Allemagne (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 238
                        echo "
                                                                                ";
                        // line 239
                        if ($this->getAttribute($context["produit2"], "livreprix", [])) {
                            // line 240
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 241
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "livreprix", []) - (($this->getAttribute($context["produit2"], "livreprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 242
                            echo "
                                                                                    ";
                            // line 243
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 244
                                echo "                                                                                        <p><strong>Angleterre (£) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 246
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Angleterre (£) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 248
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 249
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "livreprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 252
                            echo "                                                                                ";
                        } else {
                            // line 253
                            echo "                                                                                    <p><strong>Angleterre (£) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 255
                        echo "
                                                                                ";
                        // line 256
                        if ($this->getAttribute($context["produit2"], "usaprix", [])) {
                            // line 257
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 258
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "usaprix", []) - (($this->getAttribute($context["produit2"], "usaprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 259
                            echo "
                                                                                    ";
                            // line 260
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 261
                                echo "                                                                                        <p><strong>Etats-unis (\$) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </span></p>
                                                                                    ";
                            } else {
                                // line 263
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Etats-unis (\$) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 265
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), 2), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 266
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["produit2"], "usaprix", []), 2), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 269
                            echo "                                                                                ";
                        } else {
                            // line 270
                            echo "                                                                                    <p><strong>Etats-unis (\$) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 272
                        echo "
                                                                                ";
                        // line 273
                        if ($this->getAttribute($context["produit2"], "cfaprix", [])) {
                            // line 274
                            echo "                                                                                    ";
                            $context["prixReduction"] = 0;
                            // line 275
                            echo "                                                                                    ";
                            $context["prixReduction"] = ($this->getAttribute($context["produit2"], "cfaprix", []) - (($this->getAttribute($context["produit2"], "cfaprix", []) * $this->getAttribute($context["produit2"], "reduction", [])) / 100));
                            // line 276
                            echo "
                                                                                    ";
                            // line 277
                            if (($this->getAttribute($context["produit2"], "reduction", []) == 0)) {
                                // line 278
                                echo "                                                                                        <p><strong>Cameroun (F CFA) :</strong><span class=\"regular-price\"> <span class=\"price\">";
                                echo twig_escape_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), "html", null, true);
                                echo "</span> </span></p>
                                                                                    ";
                            } else {
                                // line 280
                                echo "                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Cameroun (F CFA) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">";
                                // line 282
                                echo twig_escape_filter($this->env, ($context["prixReduction"] ?? $this->getContext($context, "prixReduction")), "html", null, true);
                                echo " </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">";
                                // line 283
                                echo twig_escape_filter($this->env, $this->getAttribute($context["produit2"], "cfaprix", []), "html", null, true);
                                echo "</span> </p>
                                                                                    </div>
                                                                                    ";
                            }
                            // line 286
                            echo "                                                                                ";
                        } else {
                            // line 287
                            echo "                                                                                    <p><strong>Cameroun (F CFA) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                ";
                        }
                        // line 289
                        echo "                                                                                <br>
                                                                                <label>Mannequin(s) disponible(s):</label><br>
                                                                                ";
                        // line 291
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["mannequins"] ?? $this->getContext($context, "mannequins")));
                        foreach ($context['_seq'] as $context["_key"] => $context["mannequin"]) {
                            // line 292
                            echo "                                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mannequin"], "picture", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 293
                                echo "                                                                                        ";
                                if (($this->getAttribute($context["image"], "produit2", []) == $context["produit2"])) {
                                    // line 294
                                    echo "                                                                                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($context["mannequin"], "AssetPath", []), "MotifThumb"), "html", null, true);
                                    echo "\" alt=\"\">&nbsp;";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["mannequin"], "nomMannequin", [])), "html", null, true);
                                    echo " 
                                                                                            <small> (taille standard: ";
                                    // line 295
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleStandardMannequin", []), "html", null, true);
                                    echo ", poids: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "poidsMannequin", []), "html", null, true);
                                    echo "Kg, Taille: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mannequin"], "tailleMannequin", []), "html", null, true);
                                    echo "m)</small> <br>
                                                                                        ";
                                }
                                // line 297
                                echo "                                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 298
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mannequin'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 299
                        echo "                                                                                </div>
                                                                            </div>
                                                                            ";
                    }
                    // line 302
                    echo "                                                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=\"action\">
                                                    ";
                // line 309
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "dateajout", []), "d/m/Y"), "html", null, true);
                echo "
                                                </td>
                                                ";
                // line 311
                if (($this->getAttribute($context["produit"], "stock", []) <= 2)) {
                    // line 312
                    echo "                                                <td class=\"availability out-of-stock\">
                                                    <span class=\"label\">";
                    // line 313
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", []), "html", null, true);
                    echo "</span>
                                                </td>
                                                ";
                } else {
                    // line 316
                    echo "                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">";
                    // line 317
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", []), "html", null, true);
                    echo "</span>
                                                </td>
                                                ";
                }
                // line 320
                echo "                                                
                                                <td class=\"action\">
                                                    <a title=\"Regarder produit ";
                // line 322
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "nom", [])), "html", null, true);
                echo " \" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_show", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-search\"></i></a><br>
                                                    <a title=\"Modifier produit ";
                // line 323
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "nom", [])), "html", null, true);
                echo " \" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_edit_1", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a><br>
                                                    <br><br><a title=\"Retirer ";
                // line 324
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["produit"], "nom", [])), "html", null, true);
                echo " de vos produits\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_delete", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"";
            // line 331
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_pro_new_1");
            echo "\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajouter un nouveau produit</a> </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                ";
            // line 335
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["produits"] ?? $this->getContext($context, "produits")));
            echo "
                            </center>
                        ";
        }
        // line 338
        echo "                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        ";
        // line 344
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "produits/index.html.twig", 344)->display($context);
        // line 345
        echo "        <br><br>
        ";
        // line 346
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informationsPro.html.twig", "produits/index.html.twig", 346)->display($context);
        // line 347
        echo "      </aside>
  </div>
  </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  966 => 347,  964 => 346,  961 => 345,  959 => 344,  951 => 338,  945 => 335,  938 => 331,  933 => 328,  921 => 324,  915 => 323,  909 => 322,  905 => 320,  899 => 317,  896 => 316,  890 => 313,  887 => 312,  885 => 311,  880 => 309,  872 => 303,  858 => 302,  853 => 299,  847 => 298,  841 => 297,  832 => 295,  825 => 294,  822 => 293,  817 => 292,  813 => 291,  809 => 289,  805 => 287,  802 => 286,  796 => 283,  792 => 282,  788 => 280,  782 => 278,  780 => 277,  777 => 276,  774 => 275,  771 => 274,  769 => 273,  766 => 272,  762 => 270,  759 => 269,  753 => 266,  749 => 265,  745 => 263,  739 => 261,  737 => 260,  734 => 259,  731 => 258,  728 => 257,  726 => 256,  723 => 255,  719 => 253,  716 => 252,  710 => 249,  706 => 248,  702 => 246,  696 => 244,  694 => 243,  691 => 242,  688 => 241,  685 => 240,  683 => 239,  680 => 238,  676 => 236,  673 => 235,  667 => 232,  663 => 231,  659 => 229,  653 => 227,  651 => 226,  648 => 225,  645 => 224,  642 => 223,  640 => 222,  637 => 221,  633 => 219,  630 => 218,  624 => 215,  620 => 214,  616 => 212,  610 => 210,  608 => 209,  605 => 208,  602 => 207,  599 => 206,  597 => 205,  593 => 204,  587 => 203,  581 => 201,  577 => 199,  571 => 198,  565 => 197,  556 => 195,  549 => 194,  546 => 193,  541 => 192,  537 => 191,  533 => 189,  529 => 187,  526 => 186,  520 => 183,  516 => 182,  512 => 180,  506 => 178,  504 => 177,  501 => 176,  498 => 175,  495 => 174,  493 => 173,  490 => 172,  486 => 170,  483 => 169,  477 => 166,  473 => 165,  469 => 163,  463 => 161,  461 => 160,  458 => 159,  455 => 158,  452 => 157,  450 => 156,  447 => 155,  443 => 153,  440 => 152,  434 => 149,  430 => 148,  426 => 146,  420 => 144,  418 => 143,  415 => 142,  412 => 141,  409 => 140,  407 => 139,  404 => 138,  400 => 136,  397 => 135,  391 => 132,  387 => 131,  383 => 129,  377 => 127,  375 => 126,  372 => 125,  369 => 124,  366 => 123,  364 => 122,  361 => 121,  357 => 119,  354 => 118,  348 => 115,  344 => 114,  340 => 112,  334 => 110,  332 => 109,  329 => 108,  326 => 107,  323 => 106,  321 => 105,  317 => 104,  311 => 103,  306 => 102,  303 => 101,  286 => 100,  278 => 94,  264 => 93,  256 => 91,  248 => 89,  245 => 88,  228 => 87,  220 => 82,  216 => 81,  212 => 80,  208 => 79,  204 => 77,  198 => 76,  192 => 75,  186 => 73,  183 => 72,  178 => 71,  174 => 70,  168 => 69,  162 => 66,  158 => 64,  154 => 63,  138 => 49,  132 => 46,  124 => 40,  122 => 39,  118 => 37,  104 => 35,  102 => 34,  92 => 26,  85 => 20,  75 => 16,  71 => 14,  67 => 13,  61 => 10,  54 => 5,  51 => 4,  45 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layoutAdmin.html.twig\" %}

{% block bodyAdmin %}
    {% set i = 1%}
<div class=\"breadcrumbs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <ul>
            <li class=\"home\"> <a title=\"Aller à mon profil administrateur\" href=\"{{ path('admin_profile_show')}}\">Mon profil</a><span>&raquo;</span></li>
            <li><strong>Mes produits</strong></li>
          </ul>
        {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert-box\">
                <br><br>
                {{ flashMessage }}
                <br><br>
            </div>
        {% endfor %}
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
{% trans_default_domain 'FOSUserBundle' %}
<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
        <div class=\"col-main\">
                <div class=\"cart\">
                        <div class=\"page-content page-order\"><div class=\"page-title\">
                            {% if produits|length != 0 %}
                                <h2>Liste de tous vos produits &nbsp;&nbsp;{% if user.sexe %}Mme.{% else %}M.{% endif %} {{ user.prenom|capitalize }} {{ user.nom|capitalize }}</h2>
                            {% endif %}
                        </div>
                        <div class=\"order-detail-content\">
                        {% if produits|length == 0 %}
                            <div>
                                <table>
                                    <tr>
                                        <td><center><h1>Liste de produits vide. Aucun produit à afficher</h1></center></td>
                                    </tr>
                                </table>
                                <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('produit_pro_new_1') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajouter un nouveau produit</a> </div>
                            </div>  
                        {% else %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered cart_summary\">
                                    <thead>
                                        <tr>
                                            <th class=\"\">Marque</th>
                                            <th class=\"cart_product\">Aperçu</th>
                                            <th>Description</th>
                                            <th class=\"cart_description \">Motif(s)</th>
                                            <th>Date d'ajout</th>
                                            <th>Stock</th>
                                            <th  class=\"action\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for produit in produits %}
                                            <tr>
                                                <td>
                                                    {{ produit.marque }}
                                                </td>
                                                <td class=\"cart_product\">
                                                    <a href=\"{{ path('produit_pro_show', {'id' : produit.id}) }}\" title=\"{{ produit.nom|capitalize }}\" class=\"product-image\">
                                                        {% for produit2 in produit.produit2 %}
                                                            {% for image in images %}
                                                                {% if image.produit2 == produit2 and image.top == 0 %}
                                                                    <img src=\"{{ image.AssetPath|imagine_filter('cartThumbMenuItem') }}\" alt=\"\"><br><br>
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endfor %}
                                                    </a>
                                                </td>
                                                <td class=\"cart_description\"><p class=\"product-name\"><a>{{ produit.nom|capitalize }} </a></p><br>
                                                    <small><a><u>Description</u> : {{ produit.description|capitalize|truncate(50, false, ' ...') }}</a></small><br>
                                                    <small><a><u>Catégorie</u> : {{ produit.categorie|capitalize }}</a></small><br>
                                                    <small><a><u>Matière</u> : {{ produit.matiere|capitalize }}</a></small><br><br>
                                                    <br> 
                                                </td>
                                                <td class=\"cart_description col-sm-4\">
                                                    <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\" style=\"min-height : 200px;\">
                                                    {% for produit2 in produit.produit2 %}
                                                        {% if loop.first %}
                                                            <li class=\"active\"><a href=\"#{{ produit2.id }}\" data-toggle=\"tab\">{{ produit2.libelle.libelle }}</a> </li>
                                                        {% else %}
                                                            <li><a href=\"#{{ produit2.id }}\" data-toggle=\"tab\">{{ produit2.libelle.libelle }}</a> </li>
                                                        {% endif %}
                                                    {% endfor %}
                                                    </ul>
                                                    <div class=\"col-sm-12\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xs-12\">
                                                                <div id=\"productTabContent\" class=\"tab-content\">
                                                                                
                                                                    {% for produit2 in produit.produit2 %}
                                                                            {% if loop.first %}
                                                                                <div class=\"tab-pane fade in active\" id=\"{{ produit2.id }}\">
                                                                                <br><label> <img src=\"{{ produit2.libelle.AssetPath|imagine_filter('MotifThumb') }}\" alt=\"\">&nbsp;{{ produit2.libelle.libelle|upper }}</label>
                                                                                <p><strong>Stock motif :</strong><span class=\"regular-price\"> <span class=\"price\">{{ produit2.stock }} </span> </span></p>
                                                                                {% if produit2.europrix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.europrix - (produit2.europrix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>France (€) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>France (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.europrix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>France (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}
                                                                                
                                                                                {% if produit2.allprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.allprix - (produit2.allprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Allemagne (€) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Allemagne (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.allprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Allemagne (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.livreprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.livreprix - (produit2.livreprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Angleterre (£) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Angleterre (£) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.livreprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Angleterre (£) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.usaprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.usaprix - (produit2.usaprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Etats-unis (\$) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Etats-unis (\$) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.usaprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Etats-unis (\$) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.cfaprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.cfaprix - (produit2.cfaprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Cameroun (F CFA) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction }}</span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Cameroun (F CFA) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.cfaprix }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Cameroun (F CFA) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}
                                                                                <br>
                                                                                <label>Mannequin(s) disponible(s):</label><br>
                                                                                {% for mannequin in mannequins %}
                                                                                    {% for image in mannequin.picture %}
                                                                                        {% if image.produit2 == produit2 %}
                                                                                            <img src=\"{{ mannequin.AssetPath|imagine_filter('MotifThumb') }}\" alt=\"\">&nbsp;{{ mannequin.nomMannequin|capitalize }} 
                                                                                            <small> (taille standard: {{ mannequin.tailleStandardMannequin }}, poids: {{ mannequin.poidsMannequin }}Kg, Taille: {{ mannequin.tailleMannequin }}m)</small> <br>
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                {% endfor %}
                                                                            </div>
                                                                        {% else %}
                                                                                <div class=\"tab-pane fade\" id=\"{{ produit2.id }}\">
                                                                                <div class=\"std\">
                                                                                <br><label> <img src=\"{{ produit2.libelle.AssetPath|imagine_filter('MotifThumb') }}\" alt=\"\">&nbsp;{{ produit2.libelle.libelle|upper }}</label>
                                                                                <p><strong>Stock motif :</strong><span class=\"regular-price\"> <span class=\"price\">{{ produit2.stock }} </span> </span></p>
                                                                                {% if produit2.europrix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.europrix - (produit2.europrix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>France (€) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>France (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.europrix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>France (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}
                                                                                
                                                                                {% if produit2.allprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.allprix - (produit2.allprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Allemagne (€) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Allemagne (€) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.allprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Allemagne (€) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.livreprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.livreprix - (produit2.livreprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Angleterre (£) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Angleterre (£) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.livreprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Angleterre (£) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.usaprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.usaprix - (produit2.usaprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Etats-unis (\$) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Etats-unis (\$) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction|number_format(2) }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.usaprix|number_format(2) }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Etats-unis (\$) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}

                                                                                {% if produit2.cfaprix %}
                                                                                    {% set prixReduction = 0 %}
                                                                                    {% set prixReduction = produit2.cfaprix - (produit2.cfaprix * produit2.reduction/100) %}

                                                                                    {% if produit2.reduction == 0 %}
                                                                                        <p><strong>Cameroun (F CFA) :</strong><span class=\"regular-price\"> <span class=\"price\">{{ prixReduction }}</span> </span></p>
                                                                                    {% else %}
                                                                                    <div class=\"price-box\">
                                                                                        <p class=\"special-price\"><strong>Cameroun (F CFA) :</strong>
                                                                                         <span class=\"price-label\">Special Price</span> <span class=\"price\">{{ prixReduction }} </span> </p>
                                                                                        <p class=\"old-price\"> <span class=\"price-label\">Regular Price:</span> <span class=\"price\">{{ produit2.cfaprix }}</span> </p>
                                                                                    </div>
                                                                                    {% endif %}
                                                                                {% else %}
                                                                                    <p><strong>Cameroun (F CFA) : </strong><span class=\"availability out-of-stock\">Non défini</span></p>
                                                                                {% endif %}
                                                                                <br>
                                                                                <label>Mannequin(s) disponible(s):</label><br>
                                                                                {% for mannequin in mannequins %}
                                                                                    {% for image in mannequin.picture %}
                                                                                        {% if image.produit2 == produit2 %}
                                                                                            <img src=\"{{ mannequin.AssetPath|imagine_filter('MotifThumb') }}\" alt=\"\">&nbsp;{{ mannequin.nomMannequin|capitalize }} 
                                                                                            <small> (taille standard: {{ mannequin.tailleStandardMannequin }}, poids: {{ mannequin.poidsMannequin }}Kg, Taille: {{ mannequin.tailleMannequin }}m)</small> <br>
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                {% endfor %}
                                                                                </div>
                                                                            </div>
                                                                            {% endif %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=\"action\">
                                                    {{ produit.dateajout|date('d/m/Y') }}
                                                </td>
                                                {% if produit.stock <= 2 %}
                                                <td class=\"availability out-of-stock\">
                                                    <span class=\"label\">{{ produit.stock }}</span>
                                                </td>
                                                {% else %}
                                                <td class=\"availability in-stock\">
                                                    <span class=\"label\">{{ produit.stock }}</span>
                                                </td>
                                                {% endif %}
                                                
                                                <td class=\"action\">
                                                    <a title=\"Regarder produit {{ produit.nom|capitalize }} \" href=\"{{ path('produit_pro_show', {'id' : produit.id}) }}\"><i class=\"fa fa-search\"></i></a><br>
                                                    <a title=\"Modifier produit {{ produit.nom|capitalize }} \" href=\"{{ path('produit_pro_edit_1', {'id' : produit.id}) }}\"><i class=\"fa fa-pencil\"></i></a><br>
                                                    <br><br><a title=\"Retirer {{ produit.nom|capitalize }} de vos produits\" href=\"{{ path('produit_pro_delete', {'id' : produit.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"cart_navigation\"> <a class=\"continue-btn\" href=\"{{ path('produit_pro_new_1') }}\"><i class=\"fa fa-arrow-left\"> </i>&nbsp; Ajouter un nouveau produit</a> </div>
                        <div class=\"pagination-area \">
                        </div>
                            <center>
                                {{ knp_pagination_render(produits) }}
                            </center>
                        {% endif %}
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        {% include 'FOSUserBundle:Profile:Navigation/menuAdmin.html.twig' %}
        <br><br>
        {% include 'FOSUserBundle:Profile:Navigation/informationsPro.html.twig' %}
      </aside>
  </div>
  </section>

{% endblock %}
", "produits/index.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\produits\\index.html.twig");
    }
}
