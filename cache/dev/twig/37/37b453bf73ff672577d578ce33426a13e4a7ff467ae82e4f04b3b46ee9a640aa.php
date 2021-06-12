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

/* KountacBundle:Menu:cfa/compareAside.html.twig */
class __TwigTemplate_b409f1e8dbfb38262baf45bb08987dbdf758c3ed30f455cc9792a29d6c6390ce extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:cfa/compareAside.html.twig"));

        // line 1
        echo "<div class=\"compare block\">
        <div class=\"sidebar-bar-title\">
            ";
        // line 3
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 4
            echo "                ";
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) > 1)) {
                // line 5
                echo "                    <h3>Produits à comparer (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                echo ")</h3>
                ";
            } elseif ((twig_length_filter($this->env,             // line 6
($context["produits"] ?? $this->getContext($context, "produits"))) == 1)) {
                // line 7
                echo "                    <h3>Produit à comparer (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                echo ")</h3>
                ";
            }
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                <h3 class=\"small\">Rien à comparer</h3>
            ";
        }
        // line 12
        echo "        </div>
        ";
        // line 13
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 14
            echo "        <div class=\"block-content\">
            <ol id=\"compare-items\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 17
                echo "                    ";
                if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "cfaprix", [])) {
                    // line 18
                    echo "                    <li class=\"item\"> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimercompareAside", ["id" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
                    echo "\" title=\"Retirez ce produit de vos comparaisons\" class=\"remove-cart\"><i class=\"icon-close\"></i></a> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product", ["id" => $this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "id", [])]), "html", null, true);
                    echo "\" class=\"product-name\"><strong>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "nom", [])), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "libelle", []), "libelle", [])), "html", null, true);
                    echo "</strong></a> <br>";
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "produit1", []), "description", [])), 50, false, " ..."), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 20
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ol>
            <div class=\"ajax-checkout\">
                <a title=\"Allez à mes comparaisons\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compare");
            echo "\">
                    <button class=\"button button-compare\"> <span><i class=\"fa fa-signal\"></i> Voir</span></button>
                </a>
                <a title=\"Supprimez tous les produits de votre comparaison\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimercompareAll");
            echo "\">
                    <button class=\"button button-clear\"> <span><i class=\"fa fa-eraser\"></i> Tout retirer</span></button>
                </a>
            </div>
        </div>
        ";
        }
        // line 32
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:cfa/compareAside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  108 => 26,  102 => 23,  98 => 21,  92 => 20,  78 => 18,  75 => 17,  71 => 16,  67 => 14,  65 => 13,  62 => 12,  58 => 10,  55 => 9,  49 => 7,  47 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"compare block\">
        <div class=\"sidebar-bar-title\">
            {% if produits|length != 0 %}
                {% if produits|length > 1 %}
                    <h3>Produits à comparer ({{ produits|length }})</h3>
                {% elseif produits|length == 1%}
                    <h3>Produit à comparer ({{ produits|length }})</h3>
                {% endif %}
            {% else %}
                <h3 class=\"small\">Rien à comparer</h3>
            {% endif %}
        </div>
        {% if produits|length != 0 %}
        <div class=\"block-content\">
            <ol id=\"compare-items\">
                {% for produit in produits %}
                    {% if produit.produit2.cfaprix %}
                    <li class=\"item\"> <a href=\"{{ path('supprimercompareAside', { 'id' : produit.id }) }}\" title=\"Retirez ce produit de vos comparaisons\" class=\"remove-cart\"><i class=\"icon-close\"></i></a> <a href=\"{{ path('product', {'id' : produit.produit2.id}) }}\" class=\"product-name\"><strong>{{ produit.produit2.produit1.nom|capitalize }} - {{ produit.produit2.libelle.libelle|capitalize }}</strong></a> <br>{{ produit.produit2.produit1.description|capitalize|truncate(50, false, ' ...') }}</li>
                    {% endif %}
                {% endfor %}
            </ol>
            <div class=\"ajax-checkout\">
                <a title=\"Allez à mes comparaisons\" href=\"{{ path('compare') }}\">
                    <button class=\"button button-compare\"> <span><i class=\"fa fa-signal\"></i> Voir</span></button>
                </a>
                <a title=\"Supprimez tous les produits de votre comparaison\" href=\"{{ path('supprimercompareAll') }}\">
                    <button class=\"button button-clear\"> <span><i class=\"fa fa-eraser\"></i> Tout retirer</span></button>
                </a>
            </div>
        </div>
        {% endif %}
    </div>
", "KountacBundle:Menu:cfa/compareAside.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/cfa/compareAside.html.twig");
    }
}
