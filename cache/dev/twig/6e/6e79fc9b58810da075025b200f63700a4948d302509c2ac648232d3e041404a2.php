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

/* ChatBundle:Chat:list_chat.html.twig */
class __TwigTemplate_bacc421bbda6ce3134f41ba095adce6ae5507f059386ee56981b282dba2ae7c5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ChatBundle:Chat:list_chat.html.twig"));

        // line 1
        echo "<div class=\"msg_box1\" style=\"display: none;\">
\t<div class=\"chat_head\">Liste des contacts
\t</div>
\t
\t\t<div class=\"chat_body\" id=\"msg_body1\">
\t\t
\t\t</div>
\t
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ChatBundle:Chat:list_chat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"msg_box1\" style=\"display: none;\">
\t<div class=\"chat_head\">Liste des contacts
\t</div>
\t
\t\t<div class=\"chat_body\" id=\"msg_body1\">
\t\t
\t\t</div>
\t
</div>", "ChatBundle:Chat:list_chat.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\ChatBundle/Resources/views/Chat/list_chat.html.twig");
    }
}
