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

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_34820939ec3c554099f32ce7d34b12bf23e8476b80d1b20b2786827937bf1027 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_text' => [$this, 'block_body_text'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", ["%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))], "FOSUserBundle");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", ["%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))], "FOSUserBundle");
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_body_html($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_html"));

        // line 19
        echo "
\t   <div style=\"height:70px; background:#f4a137; text-align:center; margin : 10px; padding : 10px;\">
    \t\t<img src=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png");
        echo "\" height=50 alt=\"Kountac\">
    \t\t<label style=\"margin-top : 10px; font-size : 20px; \">Bienvenue chez Kountac</label>
    \t</div>
    \t<div style=\"margin : 10px; padding : 10px;\">
    \t\tBonjour <span style=\"font-weight: bold;\">";
        // line 25
        echo $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []);
        echo "</span>. <br><br>
    \t\tPour valider votre compte utilisateur, cliquez sur le boutton ci-après <br>
    \t\t<a href=\"";
        // line 27
        echo ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"));
        echo "\"><input style=\"height:50px; text-align : center; background : #f4a137; border : none; color : black; width : 150px; font-weight: bold; cursor:pointer;\" type=\"button\" value=\"Cliquez ici\" name=\"\"></a> <br><br>

    \t\tCe lien ne peut être utilisé qu'une seule fois pour valider votre compte.<br><br>

\t\t\tCordialement,<br>
\t\t\tL'équipe Kountac.
    \t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  104 => 25,  97 => 21,  93 => 19,  87 => 18,  75 => 11,  72 => 10,  66 => 8,  59 => 4,  53 => 2,  46 => 18,  43 => 17,  41 => 8,  38 => 7,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}

{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}



{% endautoescape %}
{% endblock %}

{% block body_html %}

\t   <div style=\"height:70px; background:#f4a137; text-align:center; margin : 10px; padding : 10px;\">
    \t\t<img src=\"{{ asset('images/logo.png') }}\" height=50 alt=\"Kountac\">
    \t\t<label style=\"margin-top : 10px; font-size : 20px; \">Bienvenue chez Kountac</label>
    \t</div>
    \t<div style=\"margin : 10px; padding : 10px;\">
    \t\tBonjour <span style=\"font-weight: bold;\">{{ user.username }}</span>. <br><br>
    \t\tPour valider votre compte utilisateur, cliquez sur le boutton ci-après <br>
    \t\t<a href=\"{{ confirmationUrl }}\"><input style=\"height:50px; text-align : center; background : #f4a137; border : none; color : black; width : 150px; font-weight: bold; cursor:pointer;\" type=\"button\" value=\"Cliquez ici\" name=\"\"></a> <br><br>

    \t\tCe lien ne peut être utilisé qu'une seule fois pour valider votre compte.<br><br>

\t\t\tCordialement,<br>
\t\t\tL'équipe Kountac.
    \t</div>

{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
