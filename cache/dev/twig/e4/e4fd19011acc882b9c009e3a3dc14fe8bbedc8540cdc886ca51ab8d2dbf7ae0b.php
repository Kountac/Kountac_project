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

/* FOSUserBundle:Profile:Navigation/menuAdmin.html.twig */
class __TwigTemplate_3db80a4281e256d97ca563ec1043e0304f3b1ea79d83b39329a17435251cf968 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:Navigation/menuAdmin.html.twig"));

        // line 1
        echo "<div class=\"sidebar-checkout block\">
    <div class=\"sidebar-bar-title\">
        &nbsp;&nbsp;<h3>MENU</h3>
    </div><br>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Produits</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_stock_epuise");
        echo "\" class=\"alert-danger\"><i class=\"icon-info\"></i> Stock épuisé </a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Tous les produits</a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminAchats_index");
        echo "\"><i class=\"fa fa-angle-right\"></i> Produits achetés</a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_new");
        echo "\"><i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Commandes</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommandes_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les commandes</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommandes_mesures_new");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Catégories</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les catégories</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories_new");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Collection</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCollections_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les collections</a></li>
            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCollections_new");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Commentaires</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les commentaires</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommentaires_new");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Utilisateurs</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les utilisateurs</a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Newsletters</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminNewsletters_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les abonnements</a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Gestion des page d'en queue</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminPages_index");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les pages d'en queue</a></li>
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminPages_ajouter");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter une page d'en queue</a></li>
            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminPages_images");
        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter des images d'en queue</a></li>
          </ul>
        </div>
      </div>
\t<div class=\"manufacturer-area\">
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
        return "FOSUserBundle:Profile:Navigation/menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 74,  152 => 73,  148 => 72,  137 => 64,  126 => 56,  115 => 48,  111 => 47,  100 => 39,  96 => 38,  85 => 30,  81 => 29,  70 => 21,  66 => 20,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  33 => 1,);
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
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Produits</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"{{ path('adminProduits_stock_epuise') }}\" class=\"alert-danger\"><i class=\"icon-info\"></i> Stock épuisé </a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"{{ path('adminProduits_index') }}\"><i class=\"fa fa-angle-right\"></i> Tous les produits</a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"{{ path('adminAchats_index') }}\"><i class=\"fa fa-angle-right\"></i> Produits achetés</a></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"{{ path('adminProduits_new') }}\"><i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Commandes</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminCommandes_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les commandes</a></li>
            <li><a href=\"{{ path('adminCommandes_mesures_new') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Catégories</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminCategories_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les catégories</a></li>
            <li><a href=\"{{ path('adminCategories_new')}}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Collection</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminCollections_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Toutes les collections</a></li>
            <li><a href=\"{{ path('adminCollections_new')}}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Commentaires</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminCommentaires_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les commentaires</a></li>
            <li><a href=\"{{ path('adminCommentaires_new') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter </a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Utilisateurs</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminUtilisateurs_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les utilisateurs</a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Newsletters</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminNewsletters_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les abonnements</a></li>
          </ul>
        </div>
      </div>
    <div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">&nbsp;&nbsp;&nbsp;&nbsp;Gestion des page d'en queue</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a href=\"{{ path('adminPages_index') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Tous les pages d'en queue</a></li>
            <li><a href=\"{{ path('adminPages_ajouter') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter une page d'en queue</a></li>
            <li><a href=\"{{ path('adminPages_images') }}\">&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i> Ajouter des images d'en queue</a></li>
          </ul>
        </div>
      </div>
\t<div class=\"manufacturer-area\">
        <h2 class=\"saider-bar-title\">Messages</h2>
        <div class=\"saide-bar-menu\">
          <ul>
            <li><a title=\"liser tous vos messages ici !\"><i class=\"fa fa-envelope\"></i><span class=\"user1\"> Tous mes messages <div class=\"msg\"></div></span></a></li>
          </ul>
        </div>
      </div>
</div>", "FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources/FOSUserBundle/views/Profile/Navigation/menuAdmin.html.twig");
    }
}
