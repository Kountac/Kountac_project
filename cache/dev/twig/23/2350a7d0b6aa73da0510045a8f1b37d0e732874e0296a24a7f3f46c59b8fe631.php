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

/* KountacBundle:Menu:headerLink.html.twig */
class __TwigTemplate_203038191c0675b4fdfbb6de7197bb3a93800c03f5eb7f604f1fb340d9541d30 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:headerLink.html.twig"));

        // line 1
        echo "<!-- top links -->
<div class=\"headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12\">
    <div class=\"links\">
        <div class=\"language-currency-wrapper\">
            <div class=\"wishlist\"><a title=\"Ma liste de souhaits [ ";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["souhaitProduits"] ?? $this->getContext($context, "souhaitProduits"))), "html", null, true);
        echo " produit(s) ]\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wishlist");
        echo "\"><i class=\"fa fa-heart\"></i><span class=\"hidden-xs\">Souhaits</span></a></div>
            <div class=\"blog\"><a title=\"Blog Kountac\" target = \"_blank\"  href=\"http://www.blog.kountac.fr/\"><i class=\"fa fa-rss\"></i><span class=\"hidden-xs\">Blog</span></a></div>
        </div>
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:usersHeaders"), []);
        // line 9
        echo "    </div>
    <div class=\"language-currency-wrapper\">
    <div class=\"language-currency-wrapper\">
        <div class=\"inner-cl\">
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Devise:countryFlag"), []);
        // line 14
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Devise:deviseMain"), []);
        // line 16
        echo "        </div>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:headerLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  60 => 15,  57 => 14,  55 => 13,  49 => 9,  47 => 8,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- top links -->
<div class=\"headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12\">
    <div class=\"links\">
        <div class=\"language-currency-wrapper\">
            <div class=\"wishlist\"><a title=\"Ma liste de souhaits [ {{ souhaitProduits|length }} produit(s) ]\" href=\"{{ path('wishlist') }}\"><i class=\"fa fa-heart\"></i><span class=\"hidden-xs\">Souhaits</span></a></div>
            <div class=\"blog\"><a title=\"Blog Kountac\" target = \"_blank\"  href=\"http://www.blog.kountac.fr/\"><i class=\"fa fa-rss\"></i><span class=\"hidden-xs\">Blog</span></a></div>
        </div>
        {% render(controller('KountacBundle:Menu:usersHeaders')) %}
    </div>
    <div class=\"language-currency-wrapper\">
    <div class=\"language-currency-wrapper\">
        <div class=\"inner-cl\">
            {% render(controller('KountacBundle:Devise:countryFlag')) %}

            {% render(controller('KountacBundle:Devise:deviseMain')) %}
        </div>
    </div>
    </div>
</div>
", "KountacBundle:Menu:headerLink.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/headerLink.html.twig");
    }
}
