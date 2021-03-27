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

/* KountacBundle:Menu:compareAside.html.twig */
class __TwigTemplate_943e621738eedbe75307e433c35e24619f99a9d0aa4a804e2f8bc50fadf2071b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:compareAside.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 2
            echo "    <div class=\"compare block\">
        <div class=\"sidebar-bar-title\">
            ";
            // line 4
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
                // line 5
                echo "                ";
                if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) > 1)) {
                    // line 6
                    echo "                    <h3>Produits à comparer (";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                    echo ")</h3>
                ";
                } elseif ((twig_length_filter($this->env,                 // line 7
($context["produits"] ?? $this->getContext($context, "produits"))) == 1)) {
                    // line 8
                    echo "                    <h3>Produit à comparer (";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
                    echo ")</h3>
                ";
                }
                // line 10
                echo "            ";
            } else {
                // line 11
                echo "                <h3 class=\"small\">Rien à comparer</h3>
            ";
            }
            // line 13
            echo "        </div>
        ";
            // line 14
            if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
                // line 15
                echo "        <div class=\"block-content\">
            <ol id=\"compare-items\">
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 18
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($context["produit"], "produit2", []), "europrix", [])) {
                        // line 19
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
                    // line 21
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            </ol>
            <div class=\"ajax-checkout\">
                <a title=\"Allez à mes comparaisons\" href=\"";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compare");
                echo "\">
                    <button class=\"button button-compare\"> <span><i class=\"fa fa-signal\"></i> Voir</span></button>
                </a>
                <a title=\"Supprimez tous les produits de votre comparaison\" href=\"";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimercompareAll");
                echo "\">
                    <button class=\"button button-clear\"> <span><i class=\"fa fa-eraser\"></i> Tout retirer</span></button>
                </a>
            </div>
        </div>
        ";
            }
            // line 33
            echo "    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 34
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 35
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:cfa/compareAside.html.twig", "KountacBundle:Menu:compareAside.html.twig", 35)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 36
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 37
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:livre/compareAside.html.twig", "KountacBundle:Menu:compareAside.html.twig", 37)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 38
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 39
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:usa/compareAside.html.twig", "KountacBundle:Menu:compareAside.html.twig", 39)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 40
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 41
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:naira/compareAside.html.twig", "KountacBundle:Menu:compareAside.html.twig", 41)->display($context);
        } elseif ((twig_length_filter($this->env,         // line 42
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 43
            echo "    ";
            $this->loadTemplate("KountacBundle:Menu:all/compareAside.html.twig", "KountacBundle:Menu:compareAside.html.twig", 43)->display($context);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:compareAside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  142 => 42,  139 => 41,  137 => 40,  134 => 39,  132 => 38,  129 => 37,  127 => 36,  124 => 35,  122 => 34,  119 => 33,  110 => 27,  104 => 24,  100 => 22,  94 => 21,  80 => 19,  77 => 18,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  60 => 11,  57 => 10,  51 => 8,  49 => 7,  44 => 6,  41 => 5,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if euro|length != 0 %}
    <div class=\"compare block\">
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
                    {% if produit.produit2.europrix %}
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
{% elseif cfa|length != 0 %}
    {% include 'KountacBundle:Menu:cfa/compareAside.html.twig' %}
{% elseif livre|length != 0 %}
    {% include 'KountacBundle:Menu:livre/compareAside.html.twig' %}
{% elseif usa|length != 0 %}
    {% include 'KountacBundle:Menu:usa/compareAside.html.twig' %}
{% elseif naira|length != 0 %}
    {% include 'KountacBundle:Menu:naira/compareAside.html.twig' %}
{% elseif all|length != 0 %}
    {% include 'KountacBundle:Menu:all/compareAside.html.twig' %}
{% endif %}", "KountacBundle:Menu:compareAside.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/compareAside.html.twig");
    }
}
