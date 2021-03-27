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

/* FOSUserBundle:Profile:Navigation/informationsPro.html.twig */
class __TwigTemplate_1f56105350c63116caf39ac798344965242808a8f4973324555380c2312880c2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/informationsPro.html.twig"));

        // line 1
        echo "<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>INFORMATIONS</h3> &nbsp;&nbsp; 
    </div>
    <div class=\"block-content\">

      <div class=\"manufacturer-area\">
          <h2 class=\"saider-bar-title\">Responsable</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><u>Nom(s):</u> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo "</li>
            <li><u>Adresse:</u> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "</li>
            <li><u>Code postal:</u> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "cp", []), "html", null, true);
        echo "</li>
            <li><u>Rue:</u> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "rue", []), "html", null, true);
        echo "</li>
            <li><u>Ville:</u> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ville", []), "html", null, true);
        echo "</li>
            <li><u>Pays:</u> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "pays", []), "html", null, true);
        echo "</li>
            <li><u>Mobile:</u> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephone", []), "html", null, true);
        echo "</li>
            ";
        // line 18
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefix", [])) {
            // line 19
            echo "                <li><u>Fixe:</u> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefix", []), "html", null, true);
            echo "</li>
            ";
        }
        // line 21
        echo "            <li><u>Code de parrainage:</u> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "code", []), "html", null, true);
        echo "</li>
            <li><u>Points:</u> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "points", []), "html", null, true);
        echo "</li>
           </ul>
        </div>
      </div>
      <br>    
      <div class=\"manufacturer-area\">
          <h2 class=\"saider-bar-title\">Marque</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><u>Nom:</u> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "marque", []), "html", null, true);
        echo "</li>
            <li><u>Adresse:</u> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresseentreprise", []), "html", null, true);
        echo "</li>
            <li><u>Code postal:</u> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "cpentreprise", []), "html", null, true);
        echo "</li>
            <li><u>Rue:</u> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "rueentreprise", []), "html", null, true);
        echo "</li>
            <li><u>Ville:</u> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "villeentreprise", []), "html", null, true);
        echo "</li>
            <li><u>Pays:</u> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "paysentreprise", []), "html", null, true);
        echo "</li>
            <li><u>Mobile:</u> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephoneentreprise", []), "html", null, true);
        echo "</li>
            ";
        // line 38
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefixentreprise", [])) {
            // line 39
            echo "                <li><u>Fixe:</u> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephonefixentreprise", []), "html", null, true);
            echo "</li>
            ";
        }
        // line 41
        echo "           </ul>
        </div>
      </div>
            
      ";
        // line 45
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", [])) {
            echo "     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Service de livraison</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", []), "nom", [])), "html", null, true);
            echo "\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicelivraison", []), "nom", []), "html", null, true);
            echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        }
        // line 55
        echo "      
      ";
        // line 56
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", [])) {
            echo "     
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Mode de paiement</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"Carte : ";
            // line 61
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", []), "nom", [])), "html", null, true);
            echo "\"><i class=\"fa fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "servicepaiement", []), "nom", []), "html", null, true);
            echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        }
        // line 66
        echo "      
      ";
        // line 67
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:menuPanier"), []);
        // line 68
        echo "</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:Navigation/informationsPro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 68,  184 => 67,  181 => 66,  171 => 61,  163 => 56,  160 => 55,  150 => 50,  142 => 45,  136 => 41,  130 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  88 => 22,  83 => 21,  77 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  45 => 11,  33 => 1,);
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
        &nbsp;&nbsp;<h3>INFORMATIONS</h3> &nbsp;&nbsp; 
    </div>
    <div class=\"block-content\">

      <div class=\"manufacturer-area\">
          <h2 class=\"saider-bar-title\">Responsable</h2>
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
      <br>    
      <div class=\"manufacturer-area\">
          <h2 class=\"saider-bar-title\">Marque</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><u>Nom:</u> {{ user.marque }}</li>
            <li><u>Adresse:</u> {{ user.adresseentreprise }}</li>
            <li><u>Code postal:</u> {{ user.cpentreprise }}</li>
            <li><u>Rue:</u> {{ user.rueentreprise }}</li>
            <li><u>Ville:</u> {{ user.villeentreprise }}</li>
            <li><u>Pays:</u> {{ user.paysentreprise }}</li>
            <li><u>Mobile:</u> {{ user.telephoneentreprise }}</li>
            {% if user.telephonefixentreprise %}
                <li><u>Fixe:</u> {{ user.telephonefixentreprise }}</li>
            {% endif %}
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
", "FOSUserBundle:Profile:Navigation/informationsPro.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/informationsPro.html.twig");
    }
}
