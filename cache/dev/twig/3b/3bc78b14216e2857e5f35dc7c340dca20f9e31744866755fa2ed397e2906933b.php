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

/* KountacBundle:Menu:countryFlag.html.twig */
class __TwigTemplate_9557a1bc973cef94831ab99f4201df611afde588c0e5d2c19697c04120c11c63 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:countryFlag.html.twig"));

        // line 1
        echo "<div class=\"block block-language form-language\">
    <div class=\"lg-cur\"> <span> <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/flag-default.jpg"), "html", null, true);
        echo "\" alt=\"français\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
    <ul>
        <li> <a class=\"selected\" href=\"#\"> <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/flag-english.jpg"), "html", null, true);
        echo "\" alt=\"english\"> <span>English</span> </a> </li>
    </ul>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:countryFlag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block block-language form-language\">
    <div class=\"lg-cur\"> <span> <img src=\"{{ asset('images/flag-default.jpg') }}\" alt=\"français\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
    <ul>
        <li> <a class=\"selected\" href=\"#\"> <img src=\"{{ asset('images/flag-english.jpg') }}\" alt=\"english\"> <span>English</span> </a> </li>
    </ul>
</div>", "KountacBundle:Menu:countryFlag.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/countryFlag.html.twig");
    }
}
