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

/* utilisateurs/profile.html.twig */
class __TwigTemplate_7e4d40b8d0df0fb17d9447fcf3879c15df5e66b80acc3635b1b734dfad592c7e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutAdmin.html.twig", "utilisateurs/profile.html.twig", 1);
        $this->blocks = [
            'bodyAdmin' => [$this, 'block_bodyAdmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyAdmin($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyAdmin"));

        // line 4
        echo "    <div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Home</a><span>&raquo;</span></li>
                    <li><strong>Mon profil (admin)</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
        // line 17
        echo "<section class=\"main-container col2-right-layout\">
    <div class=\"main container\">
        <div class=\"shop-inner\">
        <div class=\"row\">
            <aside class=\"right sidebar col-sm-3 col-xs-12\">
                ";
        // line 22
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menuAdmin.html.twig", "utilisateurs/profile.html.twig", 22)->display($context);
        // line 23
        echo "            </aside>

            <aside class=\"left sidebar col-sm-3 col-xs-12\">
                ";
        // line 26
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informationsPro.html.twig", "utilisateurs/profile.html.twig", 26)->display($context);
        // line 27
        echo "            </aside>

            
                <center>
                    <h1> Bonjour administrateur<br> 
                        <br><strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo "  </strong>
                    </h1>
                    ";
        // line 34
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "image", [])) {
            // line 35
            echo "                        <a href=\"#\" class=\"pic\">
                            <span class=\"active\"><em><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "image", []), "AssetPath", []), "photoProfil"), "html", null, true);
            echo "\" alt=\"\" width=\"195\" ></em></span>
                        </a>
                    ";
        }
        // line 38
        echo " 
                </center>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  103 => 36,  100 => 35,  98 => 34,  91 => 32,  84 => 27,  82 => 26,  77 => 23,  75 => 22,  68 => 17,  58 => 9,  51 => 4,  45 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layoutAdmin.html.twig\" %}

{% block bodyAdmin %}
    <div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path('kountac_homepage')}}\">Home</a><span>&raquo;</span></li>
                    <li><strong>Mon profil (admin)</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% trans_default_domain 'FOSUserBundle' %}
<section class=\"main-container col2-right-layout\">
    <div class=\"main container\">
        <div class=\"shop-inner\">
        <div class=\"row\">
            <aside class=\"right sidebar col-sm-3 col-xs-12\">
                {% include 'FOSUserBundle:Profile:Navigation/menuAdmin.html.twig' %}
            </aside>

            <aside class=\"left sidebar col-sm-3 col-xs-12\">
                {% include 'FOSUserBundle:Profile:Navigation/informationsPro.html.twig' %}
            </aside>

            
                <center>
                    <h1> Bonjour administrateur<br> 
                        <br><strong> {{ user.prenom }} {{ user.nom }}  </strong>
                    </h1>
                    {% if user.image %}
                        <a href=\"#\" class=\"pic\">
                            <span class=\"active\"><em><img src=\"{{ user.image.AssetPath|imagine_filter('photoProfil') }}\" alt=\"\" width=\"195\" ></em></span>
                        </a>
                    {% endif %} 
                </center>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "utilisateurs/profile.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\views\\utilisateurs\\profile.html.twig");
    }
}
