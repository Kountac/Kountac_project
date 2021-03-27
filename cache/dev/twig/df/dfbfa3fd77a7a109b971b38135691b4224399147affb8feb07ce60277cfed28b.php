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

/* ChatBundle:Chat:chat2.html.twig */
class __TwigTemplate_212493545899c744c6e0bfcd4de1146188da4cd17dbe21a2b4cfb1eec6dfbb0d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ChatBundle:Chat:chat2.html.twig"));

        // line 1
        echo "<div class=\"msg_box2\" style=\"display: none;\">
\t<div class=\"msg_head2\">
\t\t<div class=\"close2\">x</div>
\t</div>
\t<div class=\"msg_wrap2\" style=\"display: none;\">
\t\t<div class=\"msg_body\" id=\"msg_body\">
\t\t<div class=\"msg_a\">chargement en cours...</div>
\t\t\t<div class=\"msg_push\"></div>
\t\t</div>
\t\t<form method='post' action=\"#\" id=\"my_form\" name=\"my_form\">
\t\t<input type=\"text\" style=\"display:none\" id=\"idmarq\" value=\"\">
\t\t<div class=\"msg_footer\"><textarea class=\"msg_input\" rows=\"10\" id=\"chatMessage\"></textarea></div>
\t\t</form>
\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ChatBundle:Chat:chat2.html.twig";
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
        return new Source("<div class=\"msg_box2\" style=\"display: none;\">
\t<div class=\"msg_head2\">
\t\t<div class=\"close2\">x</div>
\t</div>
\t<div class=\"msg_wrap2\" style=\"display: none;\">
\t\t<div class=\"msg_body\" id=\"msg_body\">
\t\t<div class=\"msg_a\">chargement en cours...</div>
\t\t\t<div class=\"msg_push\"></div>
\t\t</div>
\t\t<form method='post' action=\"#\" id=\"my_form\" name=\"my_form\">
\t\t<input type=\"text\" style=\"display:none\" id=\"idmarq\" value=\"\">
\t\t<div class=\"msg_footer\"><textarea class=\"msg_input\" rows=\"10\" id=\"chatMessage\"></textarea></div>
\t\t</form>
\t</div>
</div>", "ChatBundle:Chat:chat2.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\ChatBundle/Resources/views/Chat/chat2.html.twig");
    }
}
