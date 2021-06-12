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

/* FOSUserBundle:Profile:Navigation/informations.html.twig */
class __TwigTemplate_76e7d8f2bd888a3d4e00e2040d5dc7ad8f27b4385306aefc55be6c2f0054b3ac extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/informations.html.twig"));

        // line 1
        echo "<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>MES INFORMATIONS</h3> &nbsp;&nbsp; <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"icon-pencil\"></a>
    </div>
    <div class=\"block-content\">

      <div class=\"manufacturer-area\">
        <div class=\"saide-bar-menu\">
          <ul>
            <li><u>Nom(s):</u> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo "</li>
            <li><u>Adresse:</u> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "</li>
            <li><u>Code postal:</u> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "cp", []), "html", null, true);
        echo "</li>
            <li><u>Rue:</u> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "rue", []), "html", null, true);
        echo "</li>
            <li><u>Ville:</u> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ville", []), "html", null, true);
        echo "</li>
            <li><u>Pays:</u> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "pays", []), "html", null, true);
        echo "</li>
            <li><u>Mobile:</u> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephone", []), "html", null, true);
        echo "</li>
            ";
        // line 17
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefix", [])) {
            // line 18
            echo "                <li><u>Fixe:</u> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefix", []), "html", null, true);
            echo "</li>
            ";
        }
        // line 20
        echo "            <li><u>Code de parrainage:</u> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "code", []), "html", null, true);
        echo "</li>
            <li><u>Points:</u> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "points", []), "html", null, true);
        echo "</li>
           </ul>
        </div>
      </div>
          
      ";
        // line 26
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", [])) {
            echo "     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Service de livraison</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", []), "nom", [])), "html", null, true);
            echo "\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", []), "nom", []), "html", null, true);
            echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        }
        // line 36
        echo "      
      ";
        // line 37
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", [])) {
            echo "     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Mode de paiement</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"Carte : ";
            // line 42
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", []), "nom", [])), "html", null, true);
            echo "\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", []), "nom", []), "html", null, true);
            echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        }
        // line 47
        echo "      
      ";
        // line 48
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:menuPanier"), []);
        // line 49
        echo "      
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:Navigation/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  140 => 48,  137 => 47,  127 => 42,  119 => 37,  116 => 36,  106 => 31,  98 => 26,  90 => 21,  85 => 20,  79 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  47 => 10,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>MES INFORMATIONS</h3> &nbsp;&nbsp; <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"icon-pencil\"></a>
    </div>
    <div class=\"block-content\">

      <div class=\"manufacturer-area\">
        <div class=\"saide-bar-menu\">
          <ul>
            <li><u>Nom(s):</u> {{ user.prenom }} {{ user.nom }}</li>
            <li><u>Adresse:</u> {{ user.adresse }}</li>
            <li><u>Code postal:</u> {{ user.cp }}</li>
            <li><u>Rue:</u> {{ user.rue }}</li>
            <li><u>Ville:</u> {{ user.ville }}</li>
            <li><u>Pays:</u> {{ user.pays }}</li>
            <li><u>Mobile:</u> {{ user.telephone }}</li>
            {% if user.telephonefix %}
                <li><u>Fixe:</u> {{ user.telephonefix }}</li>
            {% endif %}
            <li><u>Code de parrainage:</u> {{ user.code }}</li>
            <li><u>Points:</u> {{ user.points }}</li>
           </ul>
        </div>
      </div>
          
      {% if user.servicelivraison %}     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Service de livraison</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"{{ user.servicelivraison.nom|capitalize }}\"><i class=\"fa fa-angle-right\"></i> {{ user.servicelivraison.nom }}</a></li>
          </ul>
        </div>
      </div>
      {% endif %}
      
      {% if user.servicepaiement %}     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Mode de paiement</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"Carte : {{ user.servicepaiement.nom|capitalize }}\"><i class=\"fa fa-angle-right\"></i> {{ user.servicepaiement.nom }}</a></li>
          </ul>
        </div>
      </div>
      {% endif %}
      
      {% render(controller('KountacBundle:Menu:menuPanier')) %}
      
</div>
</div>
", "FOSUserBundle:Profile:Navigation/informations.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/informations.html.twig");
    }
}
