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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0b4f033ff0398f59135a3587509dd09a98e60acd674503e46f21c0b40f33db7d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
                    <li><strong>Connexion</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class=\"main-container col1-layout\">
    <div class=\"main container\">
        ";
        // line 16
        echo "
        ";
        // line 17
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 18
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 20
        echo "        <div class=\"page-content\">

            <div class=\"account-login\">



                <div class=\"box-authentication\">
                    <h3>Connexion</h3>
                    <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 29
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 30
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                        ";
        }
        // line 32
        echo "
                        <label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "<span class=\"required\">*</span></label>
                        <input class=\"input form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                        <br>
                        <label for=\"password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "<span class=\"required\">*</span></label>
                        <input class=\"input form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        <br>
                        <button class=\"button\" type=\"submit\" id=\"_submit\" name=\"_submit\"><i class=\"fa fa-lock\"></i>&nbsp; <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</span></button>
                        <label class=\"inline\" for=\"remember_me\">&nbsp; &nbsp; 
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </form>
                        
                              <br><br>
                        <h5><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a></h5>
                   
                    
                </div>
                <div class=\"box-authentication\">
                    <h2>Pas encore inscrit ?</h2>
                    <p>Créez votre compte en 1 minute <br> et découvrez la beauté du pagne <br> africain !</p> \t\t\t\t\t\t\t\t\t\t\t
                    <br><br>
                    <div class=\"register-benefits\">
                        <h3><u><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></u></h3>
                   </div>
                   
                </div>


            </div>
        </div>


    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  116 => 46,  108 => 41,  103 => 39,  97 => 36,  92 => 34,  88 => 33,  85 => 32,  79 => 30,  77 => 29,  73 => 28,  63 => 20,  57 => 18,  55 => 17,  52 => 16,  40 => 6,  33 => 1,);
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
                    <li><strong>Connexion</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class=\"main-container col1-layout\">
    <div class=\"main container\">
        {% trans_default_domain 'FOSUserBundle' %}

        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <div class=\"page-content\">

            <div class=\"account-login\">



                <div class=\"box-authentication\">
                    <h3>Connexion</h3>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}

                        <label for=\"username\">{{ 'security.login.username'|trans }}<span class=\"required\">*</span></label>
                        <input class=\"input form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                        <br>
                        <label for=\"password\">{{ 'security.login.password'|trans }}<span class=\"required\">*</span></label>
                        <input class=\"input form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        <br>
                        <button class=\"button\" type=\"submit\" id=\"_submit\" name=\"_submit\"><i class=\"fa fa-lock\"></i>&nbsp; <span>{{ 'security.login.submit'|trans }}</span></button>
                        <label class=\"inline\" for=\"remember_me\">&nbsp; &nbsp; 
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans }}
                        </label>
                    </form>
                        
                              <br><br>
                        <h5><a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a></h5>
                   
                    
                </div>
                <div class=\"box-authentication\">
                    <h2>Pas encore inscrit ?</h2>
                    <p>Créez votre compte en 1 minute <br> et découvrez la beauté du pagne <br> africain !</p> \t\t\t\t\t\t\t\t\t\t\t
                    <br><br>
                    <div class=\"register-benefits\">
                        <h3><u><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></u></h3>
                   </div>
                   
                </div>


            </div>
        </div>


    </div>
</section>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
