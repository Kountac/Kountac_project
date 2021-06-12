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

/* UtilisateursBundle:Default:SwiftLayout/newsletter.html.twig */
class __TwigTemplate_4edb66d75d466305666e78826eca0669cb6bf0cc6e8f6690a3cd599e147401d5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:SwiftLayout/newsletter.html.twig"));

        // line 1
        echo "Bonjour
<br />
";
        // line 3
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo ", votre demande d'inscription à la newsletter a bien été prise en compte.
<br /><br />
<br /><br />
Le groupe Ornoir-Mag (Kountac) vous remercie.
<br />
Cordialement.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:SwiftLayout/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("Bonjour
<br />
{{ email }}, votre demande d'inscription à la newsletter a bien été prise en compte.
<br /><br />
<br /><br />
Le groupe Ornoir-Mag (Kountac) vous remercie.
<br />
Cordialement.
", "UtilisateursBundle:Default:SwiftLayout/newsletter.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/SwiftLayout/newsletter.html.twig");
    }
}
