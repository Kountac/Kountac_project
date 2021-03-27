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

/* KountacBundle:Menu:deviseHeader.html.twig */
class __TwigTemplate_63883cf7ecda2c709fc475e6b05c0dc7ae515f881be003fa1b2b960c1ffab967 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:deviseHeader.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["euro"] ?? $this->getContext($context, "euro"))) != 0)) {
            // line 2
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">€</span> FR <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_all");
            echo "\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_naira");
            echo "\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_livre");
            echo "\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_usa");
            echo "\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>        
    </ul-->
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 12
($context["all"] ?? $this->getContext($context, "all"))) != 0)) {
            // line 13
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">€</span> DE <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_naira");
            echo "\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_livre");
            echo "\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_usa");
            echo "\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>        
    </ul-->
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 23
($context["cfa"] ?? $this->getContext($context, "cfa"))) != 0)) {
            // line 24
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">F CFA</span> CM <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_all");
            echo "\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_naira");
            echo "\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_livre");
            echo "\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_usa");
            echo "\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
    </ul-->
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 34
($context["naira"] ?? $this->getContext($context, "naira"))) != 0)) {
            // line 35
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">₦</span> NG <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_all");
            echo "\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_livre");
            echo "\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_usa");
            echo "\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
    </ul-->
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 45
($context["usa"] ?? $this->getContext($context, "usa"))) != 0)) {
            // line 46
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">\$</span> US <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_all");
            echo "\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_livre");
            echo "\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_naira");
            echo "\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
    </ul-->
</div>
";
        } elseif ((twig_length_filter($this->env,         // line 56
($context["livre"] ?? $this->getContext($context, "livre"))) != 0)) {
            // line 57
            echo "<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">£</span> GB <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_euro");
            echo "\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_all");
            echo "\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_cfa");
            echo "\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_usa");
            echo "\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
        <li> <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_devise_naira");
            echo "\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
    </ul-->
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:deviseHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  180 => 57,  178 => 56,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  151 => 46,  149 => 45,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  122 => 35,  120 => 34,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  93 => 24,  91 => 23,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  64 => 13,  62 => 12,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if euro|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">€</span> FR <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_all') }}\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"{{ path('kountac_devise_naira') }}\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"{{ path('kountac_devise_livre') }}\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"{{ path('kountac_devise_usa') }}\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>        
    </ul-->
</div>
{% elseif all|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">€</span> DE <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"{{ path('kountac_devise_naira') }}\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"{{ path('kountac_devise_livre') }}\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"{{ path('kountac_devise_usa') }}\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>        
    </ul-->
</div>
{% elseif cfa|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">F CFA</span> CM <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"{{ path('kountac_devise_all') }}\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"{{ path('kountac_devise_naira') }}\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
        <li> <a href=\"{{ path('kountac_devise_livre') }}\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"{{ path('kountac_devise_usa') }}\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
    </ul-->
</div>
{% elseif naira|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">₦</span> NG <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"{{ path('kountac_devise_all') }}\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"{{ path('kountac_devise_livre') }}\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"{{ path('kountac_devise_usa') }}\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
    </ul-->
</div>
{% elseif usa|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">\$</span> US <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"{{ path('kountac_devise_all') }}\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"{{ path('kountac_devise_livre') }}\"><span class=\"cur_icon\">£</span> Angleterre</a> </li>
        <li> <a href=\"{{ path('kountac_devise_naira') }}\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
    </ul-->
</div>
{% elseif livre|length != 0 %}
<div class=\"block block-currency\">
    <div class=\"item-cur\"><span class=\"cur_icon\">£</span> GB <!--i class=\"fa fa-angle-down\"></i--></div>
    <!--ul>
        <li> <a href=\"{{ path('kountac_devise_euro') }}\"><span class=\"cur_icon\">€</span> France</a> </li>
        <li> <a href=\"{{ path('kountac_devise_all') }}\"><span class=\"cur_icon\">€</span> Allemagne</a> </li>
        <li> <a href=\"{{ path('kountac_devise_cfa') }}\"><span class=\"cur_icon\">FCFA</span> Cameroun</a> </li>
        <li> <a href=\"{{ path('kountac_devise_usa') }}\"><span class=\"cur_icon\">\$</span> Etats-unis</a> </li>
        <li> <a href=\"{{ path('kountac_devise_naira') }}\"><span class=\"cur_icon\">₦</span> Nigeria</a> </li>
    </ul-->
</div>
{% endif %}", "KountacBundle:Menu:deviseHeader.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/deviseHeader.html.twig");
    }
}
