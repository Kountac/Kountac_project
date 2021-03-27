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

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8da12d0ecc7a84c9e27a47fe6afbf87c868aafdb1f8d86c7fd976c1fc2211e06 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 1
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Accueil</a><span>&raquo;</span></li>
                    <li><strong>Mon profil</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
        // line 14
        echo "<section class=\"main-container col2-right-layout\">
    <div class=\"main container\">
        <div class=\"shop-inner\">
        <div class=\"row\">
            <aside class=\"right sidebar col-sm-3 col-xs-12\">
                ";
        // line 19
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/menu.html.twig", "@FOSUser/Profile/show_content.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>

            <aside class=\"left sidebar col-sm-3 col-xs-12\">
                ";
        // line 23
        $this->loadTemplate("FOSUserBundle:Profile:Navigation/informations.html.twig", "@FOSUser/Profile/show_content.html.twig", 23)->display($context);
        // line 24
        echo "            </aside>

            
                <center>
                    <h1> Bonjour <br> 
                        <br><strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo "  </strong>
                    </h1>
                    ";
        // line 31
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "image", [])) {
            // line 32
            echo "                        <a href=\"#\" class=\"pic\">
                            <span class=\"active\"><em><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "image", []), "AssetPath", []), "photoProfil"), "html", null, true);
            echo "\" alt=\"\" width=\"195\" ></em></span>
                        </a>
                    ";
        }
        // line 35
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
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  85 => 33,  82 => 32,  80 => 31,  73 => 29,  66 => 24,  64 => 23,  59 => 20,  57 => 19,  50 => 14,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path('kountac_homepage')}}\">Accueil</a><span>&raquo;</span></li>
                    <li><strong>Mon profil</strong></li>
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
                {% include 'FOSUserBundle:Profile:Navigation/menu.html.twig' %}
            </aside>

            <aside class=\"left sidebar col-sm-3 col-xs-12\">
                {% include 'FOSUserBundle:Profile:Navigation/informations.html.twig' %}
            </aside>

            
                <center>
                    <h1> Bonjour <br> 
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

", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
