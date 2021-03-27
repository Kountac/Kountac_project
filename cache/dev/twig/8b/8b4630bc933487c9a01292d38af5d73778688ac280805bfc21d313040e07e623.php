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

/* KountacBundle:Menu:contactUsFooter.html.twig */
class __TwigTemplate_bce8fb3dc2b54905f2d33f22858d464cd76c535c4f8caf276f217ea864a57430 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:contactUsFooter.html.twig"));

        // line 1
        echo "<h3 class=\"links-title\">Nous contacter</h3>
<div class=\"footer-content\">
    <div class=\"email\"> <i class=\"fa fa-envelope\"></i>
        <p><a href=\"mailto:contact@kountac.fr\">contact@kountac.fr</a></p>
    </div>
    <div class=\"phone\"> <i class=\"fa fa-phone\"></i>
        <p>(+33)7 83 77 03 22</p>
    </div>
    <div class=\"address\"> <i class=\"fa fa-map-marker\"></i>
        <p>12 rue de Valois<br>91940 Les Ulis<br> France</p>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:contactUsFooter.html.twig";
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
        return new Source("<h3 class=\"links-title\">Nous contacter</h3>
<div class=\"footer-content\">
    <div class=\"email\"> <i class=\"fa fa-envelope\"></i>
        <p><a href=\"mailto:contact@kountac.fr\">contact@kountac.fr</a></p>
    </div>
    <div class=\"phone\"> <i class=\"fa fa-phone\"></i>
        <p>(+33)7 83 77 03 22</p>
    </div>
    <div class=\"address\"> <i class=\"fa fa-map-marker\"></i>
        <p>12 rue de Valois<br>91940 Les Ulis<br> France</p>
    </div>
</div>
", "KountacBundle:Menu:contactUsFooter.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/contactUsFooter.html.twig");
    }
}
