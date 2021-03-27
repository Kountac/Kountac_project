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

/* FOSUserBundle:Profile:Navigation/menuPendingAchat.html.twig */
class __TwigTemplate_9102428977f4ad5462d732392b241bf15997ef9635ba556b0e56aefb210e5795 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/menuPendingAchat.html.twig"));

        // line 1
        if (($context["achat"] ?? $this->getContext($context, "achat"))) {
            // line 2
            echo "    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resume_achat");
            echo "\"><i class=\"fa fa-angle-right\"></i><strong> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["achat"] ?? $this->getContext($context, "achat"))), "html", null, true);
            echo " Achat(s) en attente </strong></a></li>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:Navigation/menuPendingAchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if achat  %}
    <li><a href=\"{{ path('resume_achat') }}\"><i class=\"fa fa-angle-right\"></i><strong> {{ achat|length}} Achat(s) en attente </strong></a></li>
{% endif %}", "FOSUserBundle:Profile:Navigation/menuPendingAchat.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/menuPendingAchat.html.twig");
    }
}
