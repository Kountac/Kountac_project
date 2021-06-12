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

/* FOSUserBundle:Profile:Navigation/menu.html.twig */
class __TwigTemplate_ca446bc1ecf321b9c2414880ea5fd1c2e690ca35f08f928fcfa1a82468ab6972 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/menu.html.twig"));

        // line 1
        echo "<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>MENU</h3>
    </div><br>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Réservations</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserve_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Toutes mes réservations</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_products");
        echo "\"><i class=\"fa fa-angle-right\"></i> Réserver nouveau </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Mesures</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesures_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Toutes mes mesures</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesures_new");
        echo "\"><i class=\"fa fa-angle-right\"></i> Ajouter nouvelle mesure </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Commandes</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Toutes mes commandes</a></li>
            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_mesures_new");
        echo "\"><i class=\"fa fa-angle-right\"></i> Commander </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Achats</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:menuPendingAchat"), []);
        // line 37
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("achat_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Tous mes achats</a></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\"><i class=\"fa fa-angle-right\"></i> Acheter </a></li>
          </ul>
        </div>
      </div>
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Messages</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"liser tous vos messages ici !\"><i class=\"fa fa-envelope\"></i><span class=\"user1\"> Tous mes messages <div class=\"msg\"></div></span></a></li>
          </ul>
        </div>
      </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:Navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  90 => 37,  88 => 36,  77 => 28,  73 => 27,  62 => 19,  58 => 18,  47 => 10,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>MENU</h3>
    </div><br>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Réservations</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('reserve_index') }}\"><i class=\"fa fa-angle-right\"></i> Toutes mes réservations</a></li>
            <li><a href=\"{{ path('all_products') }}\"><i class=\"fa fa-angle-right\"></i> Réserver nouveau </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Mesures</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('mesures_index') }}\"><i class=\"fa fa-angle-right\"></i> Toutes mes mesures</a></li>
            <li><a href=\"{{ path('mesures_new') }}\"><i class=\"fa fa-angle-right\"></i> Ajouter nouvelle mesure </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Commandes</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('commande_index') }}\"><i class=\"fa fa-angle-right\"></i> Toutes mes commandes</a></li>
            <li><a href=\"{{ path('commande_mesures_new') }}\"><i class=\"fa fa-angle-right\"></i> Commander </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Achats</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            {% render(controller('KountacBundle:Menu:menuPendingAchat')) %}
            <li><a href=\"{{ path('achat_index') }}\"><i class=\"fa fa-angle-right\"></i> Tous mes achats</a></li>
            <li><a href=\"{{ path('kountac_homepage') }}\"><i class=\"fa fa-angle-right\"></i> Acheter </a></li>
          </ul>
        </div>
      </div>
      <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Messages</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"liser tous vos messages ici !\"><i class=\"fa fa-envelope\"></i><span class=\"user1\"> Tous mes messages <div class=\"msg\"></div></span></a></li>
          </ul>
        </div>
      </div>
</div>", "FOSUserBundle:Profile:Navigation/menu.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/menu.html.twig");
    }
}
