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

/* KountacBundle:Menu:usersHeader.html.twig */
class __TwigTemplate_387f0d1d0769887e9a4884ab455130d6680280ade009677c2acd587d6a7aff02 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "KountacBundle:Menu:usersHeader.html.twig"));

        // line 1
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <div class=\"language-currency-wrapper\">
        <div class=\"login\"><a title=\"Se connecter \" href=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-unlock-alt\"></i><span class=\"hidden-xs\">Connexion</span></a></div>
    </div>        
";
        }
        // line 5
        echo " 
";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PRO")) {
                // line 8
                echo "        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    ";
                // line 11
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 12
                    echo "                        <div class=\"myaccount\"><a title=\"Compte administrateur\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">";
                    if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])) {
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
                    echo "</span></a></div>
                    ";
                } else {
                    // line 14
                    echo "                        <div class=\"myaccount\"><a title=\"Mon compte professionnel\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pro_user_profile_show");
                    echo "\"><i class=\"fa fa-user-secret\"></i><span class=\"hidden-xs\">";
                    if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])) {
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
                    echo "</span></a></div>
                    ";
                }
                // line 16
                echo "                    <ul>
                        ";
                // line 17
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 18
                    echo "                            <li>
                                <strong><a title=\"Compte administrateur\" href=\"";
                    // line 19
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile_show");
                    echo "\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">Administration</span></a></strong>
                            </li>
                            <li>
                                <a href=\"";
                    // line 22
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                    echo "\">
                                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                    echo "
                                </a>
                            </li>
                        ";
                } else {
                    // line 27
                    echo "                            ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 28
                        echo "                            <li>
                                <strong><a title=\"Mon compte professionnel\" href=\"";
                        // line 29
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pro_user_profile_show");
                        echo "\"><span class=\"hidden-xs\">Espace pro.</span></a></strong>
                            </li>
                            <li>
                                <a href=\"";
                        // line 32
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                        echo "\">
                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    // line 37
                    echo "                        
                        ";
                }
                // line 39
                echo "                    </ul>
                </div>
            </div>
        </div>
    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 44
                echo "        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"myaccount\"><a title=\"Compte administrateur\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">";
                // line 47
                if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])) {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
                echo "</span></a></div>
                    <ul>
                        ";
                // line 49
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 50
                    echo "                            <li>
                                <strong><a title=\"Compte administrateur\" href=\"";
                    // line 51
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile_show");
                    echo "\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">Administrationn</span></a></strong>
                            </li>
                            <li>
                                <a href=\"";
                    // line 54
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                    echo "\">
                                    ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                    echo "
                                </a>
                            </li>
                        ";
                }
                // line 59
                echo "                    </ul>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 64
                echo "        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"myaccount\"><a title=\"Mon compte utilisateur\"><i class=\"fa fa-user\"></i><span class=\"hidden-xs\">";
                // line 67
                if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])) {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", [])), "html", null, true);
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", []), "html", null, true);
                echo "</span></a></div>
                    <ul>
                        ";
                // line 69
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 70
                    echo "                            <li>
                                <strong><a title=\"Mon compte utilisateur\" href=\"";
                    // line 71
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                    echo "\"><i class=\"fa fa-user\"></i><span class=\"hidden-xs\">Mon Espace</span></a></strong>
                            </li>
                            <li>
                                <a href=\"";
                    // line 74
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                    echo "\">
                                    ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
                    echo "
                                </a>
                            </li>
                        ";
                }
                // line 79
                echo "                    </ul>
                </div>
            </div>
        </div>
    ";
            }
            // line 83
            echo "  
";
        }
        // line 84
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KountacBundle:Menu:usersHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 84,  226 => 83,  219 => 79,  212 => 75,  208 => 74,  202 => 71,  199 => 70,  197 => 69,  188 => 67,  183 => 64,  176 => 59,  169 => 55,  165 => 54,  159 => 51,  156 => 50,  154 => 49,  145 => 47,  140 => 44,  133 => 39,  129 => 37,  122 => 33,  118 => 32,  112 => 29,  109 => 28,  106 => 27,  99 => 23,  95 => 22,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  69 => 14,  59 => 12,  57 => 11,  52 => 8,  49 => 7,  47 => 6,  44 => 5,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <div class=\"language-currency-wrapper\">
        <div class=\"login\"><a title=\"Se connecter \" href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-unlock-alt\"></i><span class=\"hidden-xs\">Connexion</span></a></div>
    </div>        
{% endif %} 
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    {% if is_granted('ROLE_PRO') %}
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"myaccount\"><a title=\"Compte administrateur\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">{% if user.prenom %}{{ user.prenom|capitalize }}{% endif %} {{ user.nom }}</span></a></div>
                    {% else %}
                        <div class=\"myaccount\"><a title=\"Mon compte professionnel\" href=\"{{ path('pro_user_profile_show') }}\"><i class=\"fa fa-user-secret\"></i><span class=\"hidden-xs\">{% if user.prenom %}{{ user.prenom|capitalize }}{% endif %} {{ user.nom }}</span></a></div>
                    {% endif %}
                    <ul>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li>
                                <strong><a title=\"Compte administrateur\" href=\"{{ path('admin_profile_show') }}\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">Administration</span></a></strong>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% else %}
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <li>
                                <strong><a title=\"Mon compte professionnel\" href=\"{{ path('pro_user_profile_show') }}\"><span class=\"hidden-xs\">Espace pro.</span></a></strong>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% endif %}
                        
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    {% elseif is_granted('ROLE_ADMIN') %}
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"myaccount\"><a title=\"Compte administrateur\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">{% if user.prenom %}{{ user.prenom|capitalize }}{% endif %} {{ user.nom }}</span></a></div>
                    <ul>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <li>
                                <strong><a title=\"Compte administrateur\" href=\"{{ path('admin_profile_show') }}\"><i class=\"fa fa-user-md\"></i><span class=\"hidden-xs\">Administrationn</span></a></strong>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"language-currency-wrapper\">
            <div class=\"inner-cl\">
                <div class=\"block block-language form-language\">
                    <div class=\"myaccount\"><a title=\"Mon compte utilisateur\"><i class=\"fa fa-user\"></i><span class=\"hidden-xs\">{% if user.prenom %}{{ user.prenom|capitalize }}{% endif %} {{ user.nom }}</span></a></div>
                    <ul>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <li>
                                <strong><a title=\"Mon compte utilisateur\" href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa-user\"></i><span class=\"hidden-xs\">Mon Espace</span></a></strong>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}  
{% endif %}  
", "KountacBundle:Menu:usersHeader.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\src\\Kountac\\KountacBundle/Resources/views/Menu/usersHeader.html.twig");
    }
}
