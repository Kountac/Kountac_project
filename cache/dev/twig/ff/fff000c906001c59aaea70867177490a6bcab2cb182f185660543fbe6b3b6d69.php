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

/* ChatBundle:Chat:chat.html.twig */
class __TwigTemplate_28135952a661edca59cb93997822679ae65df00c03d9b989d65306fdf16b4ff0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ChatBundle:Chat:chat.html.twig"));

        // line 1
        echo "<div class=\"msg_box\" style=\"display: none;\">
\t<div class=\"msg_head\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["marque"] ?? $this->getContext($context, "marque")), "marque", []), "html", null, true);
        echo "
\t\t<div class=\"close\">x</div>
\t</div>
\t<div class=\"msg_wrap\" style=\"display: none;\">
\t\t<div class=\"msg_body\" id=\"msg_body\">
\t\t<div class=\"msg_a\">chargement en cours...</div>
\t\t\t<div class=\"msg_push\"></div>
\t\t</div>
\t\t<form method='post' action=\"#\" id=\"my_form\" name=\"my_form\">
\t\t<input type=\"text\" style=\"display:none\" id=\"idmarq\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["marque"] ?? $this->getContext($context, "marque")), "id", []), "html", null, true);
        echo "\">
\t\t<div class=\"msg_footer\"><textarea class=\"msg_input\" rows=\"10\" id=\"chatMessage\"></textarea></div>
\t\t</form>
\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ChatBundle:Chat:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"msg_box\" style=\"display: none;\">
\t<div class=\"msg_head\">{{marque.marque}}
\t\t<div class=\"close\">x</div>
\t</div>
\t<div class=\"msg_wrap\" style=\"display: none;\">
\t\t<div class=\"msg_body\" id=\"msg_body\">
\t\t<div class=\"msg_a\">chargement en cours...</div>
\t\t\t<div class=\"msg_push\"></div>
\t\t</div>
\t\t<form method='post' action=\"#\" id=\"my_form\" name=\"my_form\">
\t\t<input type=\"text\" style=\"display:none\" id=\"idmarq\" value=\"{{marque.id}}\">
\t\t<div class=\"msg_footer\"><textarea class=\"msg_input\" rows=\"10\" id=\"chatMessage\"></textarea></div>
\t\t</form>
\t</div>
</div>", "ChatBundle:Chat:chat.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\ChatBundle/Resources/views/Chat/chat.html.twig");
    }
}
