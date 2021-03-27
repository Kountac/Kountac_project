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

/* KountacBundle:Menu:deviseHeaderAdmin.html.twig */
class __TwigTemplate_da175e49e61b9b297d27dd6ed9a73e48069f24fad8d966939064991865882ac6 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:deviseHeaderAdmin.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["cfa"] ?? $this->getContext($context, "cfa"))) == 0)) {
            // line 2
            echo "    <div class=\"col-md-6 col-sm-5 col-xs-6\"> 
        <!-- Default Welcome Message --> 
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"lg-cur\"> <span> <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/flag-default.jpg"), "html", null, true);
            echo "\" alt=\"French\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
                    <ul>
                        <li> <a class=\"selected\" href=\"#\"> <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/flag-english.jpg"), "html", null, true);
            echo "\" alt=\"flag\"> <span>English</span> </a> </li>
                    </ul>
                </div>
                <div class=\"block block-currency\">
                    <div class=\"item-cur\"> <span class=\"cur_icon\"><span class=\"cur_icon\">€</span> EUR </span> <i class=\"fa fa-angle-down\"></i></div>
                    <ul>
                        <li> <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">F</span>CFA</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 22
            echo "    <div class=\"col-md-6 col-sm-5 col-xs-6\"> 
        <!-- Default Welcome Message --> 
        <div class=\"welcome-msg hidden-xs\">Bienvenue sur kountac !</div>
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"lg-cur\"> <span> <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/flag-default.jpg"), "html", null, true);
            echo "\" alt=\"French\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
                    <ul>
                        <li> <a class=\"selected\" href=\"#\"> <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/flag-english.jpg"), "html", null, true);
            echo "\" alt=\"flag\"> <span>English</span> </a> </li>
                    </ul>
                </div>
                <div class=\"block block-currency\">
                    <div class=\"item-cur\"> <span class=\"cur_icon\"><span class=\"cur_icon\">F</span>CFA</span> <i class=\"fa fa-angle-down\"></i></div>
                    <ul>
                        <li> <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span>EUR</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 42
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:deviseHeaderAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  88 => 36,  79 => 30,  74 => 28,  66 => 22,  56 => 15,  47 => 9,  42 => 7,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if cfa|length == 0%}
    <div class=\"col-md-6 col-sm-5 col-xs-6\"> 
        <!-- Default Welcome Message --> 
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"lg-cur\"> <span> <img src=\"{{ asset('admin/images/flag-default.jpg') }}\" alt=\"French\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
                    <ul>
                        <li> <a class=\"selected\" href=\"#\"> <img src=\"{{ asset('images/flag-english.jpg') }}\" alt=\"flag\"> <span>English</span> </a> </li>
                    </ul>
                </div>
                <div class=\"block block-currency\">
                    <div class=\"item-cur\"> <span class=\"cur_icon\"><span class=\"cur_icon\">€</span> EUR </span> <i class=\"fa fa-angle-down\"></i></div>
                    <ul>
                        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">F</span>CFA</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"col-md-6 col-sm-5 col-xs-6\"> 
        <!-- Default Welcome Message --> 
        <div class=\"welcome-msg hidden-xs\">Bienvenue sur kountac !</div>
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"lg-cur\"> <span> <img src=\"{{ asset('admin/images/flag-default.jpg') }}\" alt=\"French\"> <span class=\"lg-fr\">Français</span> <i class=\"fa fa-angle-down\"></i> </span> </div>
                    <ul>
                        <li> <a class=\"selected\" href=\"#\"> <img src=\"{{ asset('images/flag-english.jpg') }}\" alt=\"flag\"> <span>English</span> </a> </li>
                    </ul>
                </div>
                <div class=\"block block-currency\">
                    <div class=\"item-cur\"> <span class=\"cur_icon\"><span class=\"cur_icon\">F</span>CFA</span> <i class=\"fa fa-angle-down\"></i></div>
                    <ul>
                        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span>EUR</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endif %} ", "KountacBundle:Menu:deviseHeaderAdmin.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/deviseHeaderAdmin.html.twig");
    }
}
