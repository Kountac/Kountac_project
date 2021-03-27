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

/* FOSUserBundle:Profile:Navigation/menuPanier.html.twig */
class __TwigTemplate_b5c1b0a4a3b23023837c11160dbafea192af7ae856813cc78cdf1908342166bc extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/menuPanier.html.twig"));

        // line 1
        echo "<div class=\"manufacturer-area\">
    <h2 class=\"saider-bar-title\">Mon panier</h2>
    <div class=\"saide-bar-menu\">
        <ul>
            ";
        // line 5
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 6
            echo "                <li><a title=\"Voir votre panier\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\"><i class=\"fa fa-angle-right\"></i> <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
            echo " produit(s)</strong></a></li>
            ";
        } else {
            // line 8
            echo "                <li><a title=\"Vous n'avez aucun produit dans votre panier\"><i class=\"fa fa-angle-right\"></i><strong> Panier vide</strong></a></li>
            ";
        }
        // line 10
        echo "        </ul>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:Navigation/menuPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 8,  41 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"manufacturer-area\">
    <h2 class=\"saider-bar-title\">Mon panier</h2>
    <div class=\"saide-bar-menu\">
        <ul>
            {% if produits|length != 0 %}
                <li><a title=\"Voir votre panier\" href=\"{{ path('panier')}}\"><i class=\"fa fa-angle-right\"></i> <strong>{{ produits|length }} produit(s)</strong></a></li>
            {% else %}
                <li><a title=\"Vous n'avez aucun produit dans votre panier\"><i class=\"fa fa-angle-right\"></i><strong> Panier vide</strong></a></li>
            {% endif %}
        </ul>
    </div>
</div>", "FOSUserBundle:Profile:Navigation/menuPanier.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/menuPanier.html.twig");
    }
}
