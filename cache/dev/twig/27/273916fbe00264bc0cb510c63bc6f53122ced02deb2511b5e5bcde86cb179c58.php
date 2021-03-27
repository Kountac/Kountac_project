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

/* emails/registration2.html.twig */
class __TwigTemplate_e136e0f81301e56e9b55aaf711d8004d46f05f432468f8d953a9e81b898b1cb0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration2.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "
        
        <h2>Bienvenue chez Kountac</h2> <br>

        <div>
            Bonjour <b>";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</b>. <br><br>
            Pour valider votre compte utilisateur, cliquez sur le lien ci-après 
            <a href=\"https://www.kountac.fr/register/confirm/";
        // line 11
        echo twig_escape_filter($this->env, ($context["confirmUrl"] ?? $this->getContext($context, "confirmUrl")), "html", null, true);
        echo "\">ICI</a> <br><br>

            Ce lien ne peut être utilisé qu'une seule fois pour valider votre compte.<br><br>
            
            Vous disposez du code promo <h5> ";
        // line 15
        echo twig_escape_filter($this->env, ($context["codePromo"] ?? $this->getContext($context, "codePromo")), "html", null, true);
        echo " </h5> de <h5>-";
        echo twig_escape_filter($this->env, ($context["reduction"] ?? $this->getContext($context, "reduction")), "html", null, true);
        echo "%</h5> valide pendant <h5>";
        echo twig_escape_filter($this->env, ($context["validite"] ?? $this->getContext($context, "validite")), "html", null, true);
        echo " jours (jusqu'au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["expirationDate"] ?? $this->getContext($context, "expirationDate")), "d/m/Y"), "html", null, true);
        echo " )</h5> sur votre premier achat. <br><br>
            
            Dépéchez vous et profitez de ce code <br><br>
            
            Cordialement,<br>
            L'équipe Kountac.
        </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/registration2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  49 => 11,  44 => 9,  37 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

{# app/Resources/views/Emails/registration.html.twig #}

        
        <h2>Bienvenue chez Kountac</h2> <br>

        <div>
            Bonjour <b>{{ name }}</b>. <br><br>
            Pour valider votre compte utilisateur, cliquez sur le lien ci-après 
            <a href=\"https://www.kountac.fr/register/confirm/{{ confirmUrl }}\">ICI</a> <br><br>

            Ce lien ne peut être utilisé qu'une seule fois pour valider votre compte.<br><br>
            
            Vous disposez du code promo <h5> {{ codePromo }} </h5> de <h5>-{{ reduction }}%</h5> valide pendant <h5>{{ validite }} jours (jusqu'au {{ expirationDate|date('d/m/Y') }} )</h5> sur votre premier achat. <br><br>
            
            Dépéchez vous et profitez de ce code <br><br>
            
            Cordialement,<br>
            L'équipe Kountac.
        </div>", "emails/registration2.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\emails\\registration2.html.twig");
    }
}
