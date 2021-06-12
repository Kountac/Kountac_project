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

/* KountacBundle:Menu:collectionFooter.html.twig */
class __TwigTemplate_40ba6cbbf6e3fab6705d798038ac392d2b9639a914d612fb12eded9eacc07cf6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:collectionFooter.html.twig"));

        // line 1
        echo "<div class=\"footer-links\">
    <h3 class=\"links-title\">Collections<a class=\"expander visible-xs\" href=\"#TabBlock-4\">+</a></h3>
    <div class=\"tabBlock\" id=\"TabBlock-4\">
        <ul class=\"list-links list-unstyled\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 6
            echo "                <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection", ["collection" => $this->getAttribute($context["collection"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["collection"], "nom", [])), "html", null, true);
            echo "</a> </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:collectionFooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  43 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-links\">
    <h3 class=\"links-title\">Collections<a class=\"expander visible-xs\" href=\"#TabBlock-4\">+</a></h3>
    <div class=\"tabBlock\" id=\"TabBlock-4\">
        <ul class=\"list-links list-unstyled\">
            {% for collection in collections %}
                <li> <a href=\"{{ path('collection', { 'collection' : collection.id}) }}\">{{ collection.nom|capitalize }}</a> </li>
            {% endfor %}
        </ul>
    </div>
</div>", "KountacBundle:Menu:collectionFooter.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/collectionFooter.html.twig");
    }
}
