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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_77d35003e33be30765714747c2436aee2a9694ed15a63c99d666db31af46c8a7 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <ul>
            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">Accueilt</a><span>&raquo;</span></li>
            <li><strong>Enregistrement compte</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
 ";
        // line 15
        echo "<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
 
        
        <div class=\"page-content checkout-page\"><div class=\"page-title\">
          <h2 class=\"checkout-step\">Inscription sur Kountac</h2>
        </div>
        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
        
            <div class=\"box-border\">
                <ul>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 0, []), 'row');
        echo "</div>
                                <div class=\"col-sm-3\">";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 1, []), 'row');
        echo "</div>
                            </div>
                        </div>
                    </li>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'row');
        echo "
                        </div><!--/ [col] -->
                        <div class=\"col-sm-6\">
                            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'row');
        echo "
                        </div><!--/ [col] -->
                    </li>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            <label class=\"required\">Image de profil (facultatif)</label>
                            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "file", []), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"required\">Image de couverture (facultatif)</label>
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "file2", []), 'widget');
        echo "
                        </div><!--/ [col] -->
                    </li>
                    <li class=\"row\">

                        <div  class=\"col-sm-6\">
                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'row');
        echo "
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'row');
        echo "
                        </div>
                    </li>
                    
                    <!--li class=\"row\">

                        <div class=\"col-sm-6\">
                            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "digicode", []), 'row');
        echo "
                        </div>
                    </li-->

                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", []), 'row');
        echo "
                        </div><!--/ [col] -->
                        
                        <div class=\"col-sm-6\">
                            ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codeparrain", []), 'row');
        echo "
                        </div><!--/ [col] -->

                    </li>

                    <li class=\"row\"> 
                        <div class=\"col-xs-6\">
                            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'row');
        echo "
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                           ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rue", []), 'row');
        echo "
                        </div><!--/ [col] -->

                    </li><!-- / .row -->
                    
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), 'row');
        echo "
                        </div><!--/ [col] -->

                        <div  class=\"col-sm-6\">
                            ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephonefix", []), 'row');
        echo "
                        </div><!--/ [col] -->
                    </li>

                    <br><br>
                    <div class=\"page-title\">
                      <h2 class=\"checkout-step\">Espace Utilisateur *</h2>
                    </div>
                    
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'row');
        echo "
                        </div>

                        <div class=\"col-sm-6\">
                            ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'row');
        echo "
                        </div>
                    </li>

                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'row');
        echo "
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'row');
        echo "
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <br>
                    <li class=\"row\">
                        <div class=\"col-sm-12\">
                            <input type=\"checkbox\" id=\"condition\" required name=\"\">
                            <label for=\"condition\"> En continuant vous acceptez les politiques et <a href=\"#\">conditions d'utilisations</a>.</label>
                        </div>
                    </li>
                    <li>
                        <button class=\"button\" type=\"submit\"><i class=\"icon-login\"></i>&nbsp; <span>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</span></button>
                    </li>
                </ul>
            </div>
    ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 142
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        <div class=\"sidebar-checkout block\">
         <div class=\"sidebar-bar-title\">
              <h3>Vous êtes une marque ?</h3>
            </div>
                 <div class=\"block-content\">
            <dl>
              <h5> Créez votre compte pro en quelques minutes !<br><br> <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pro_user_register");
        echo "\"><u>Cliquez ici</u></a> </h5>
              
        </div>
            </div>
        </aside>
    </div>
  </div>
  </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 152,  246 => 142,  242 => 141,  235 => 137,  221 => 126,  214 => 122,  205 => 116,  198 => 112,  184 => 101,  177 => 97,  167 => 90,  160 => 86,  150 => 79,  143 => 75,  134 => 69,  124 => 62,  117 => 58,  108 => 52,  101 => 48,  92 => 42,  86 => 39,  77 => 33,  73 => 32,  63 => 25,  51 => 15,  40 => 6,  33 => 1,);
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
            <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"{{ path('kountac_homepage')}}\">Accueilt</a><span>&raquo;</span></li>
            <li><strong>Enregistrement compte</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
 {% trans_default_domain 'FOSUserBundle' %}
<!-- Main Container -->
<section class=\"main-container col2-right-layout\">
  <div class=\"main container\">
    <div class=\"row\">
      <div class=\"col-main col-sm-9 col-xs-12\">
 
        
        <div class=\"page-content checkout-page\"><div class=\"page-title\">
          <h2 class=\"checkout-step\">Inscription sur Kountac</h2>
        </div>
        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        
            <div class=\"box-border\">
                <ul>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">{{ form_row(form.sexe.0) }}</div>
                                <div class=\"col-sm-3\">{{ form_row(form.sexe.1) }}</div>
                            </div>
                        </div>
                    </li>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            {{ form_row(form.nom) }}
                        </div><!--/ [col] -->
                        <div class=\"col-sm-6\">
                            {{ form_row(form.prenom) }}
                        </div><!--/ [col] -->
                    </li>
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            <label class=\"required\">Image de profil (facultatif)</label>
                            {{ form_widget(form.image.file) }}
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"required\">Image de couverture (facultatif)</label>
                            {{ form_widget(form.image.file2) }}
                        </div><!--/ [col] -->
                    </li>
                    <li class=\"row\">

                        <div  class=\"col-sm-6\">
                            {{ form_row(form.pays) }}
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                            {{ form_row(form.ville) }}
                        </div>
                    </li>
                    
                    <!--li class=\"row\">

                        <div class=\"col-sm-6\">
                            {{ form_row(form.digicode) }}
                        </div>
                    </li-->

                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            {{ form_row(form.cp) }}
                        </div><!--/ [col] -->
                        
                        <div class=\"col-sm-6\">
                            {{ form_row(form.codeparrain) }}
                        </div><!--/ [col] -->

                    </li>

                    <li class=\"row\"> 
                        <div class=\"col-xs-6\">
                            {{ form_row(form.adresse) }}
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                           {{ form_row(form.rue) }}
                        </div><!--/ [col] -->

                    </li><!-- / .row -->
                    
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            {{ form_row(form.telephone) }}
                        </div><!--/ [col] -->

                        <div  class=\"col-sm-6\">
                            {{ form_row(form.telephonefix) }}
                        </div><!--/ [col] -->
                    </li>

                    <br><br>
                    <div class=\"page-title\">
                      <h2 class=\"checkout-step\">Espace Utilisateur *</h2>
                    </div>
                    
                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            {{ form_row(form.username) }}
                        </div>

                        <div class=\"col-sm-6\">
                            {{ form_row(form.email) }}
                        </div>
                    </li>

                    <li class=\"row\">
                        <div class=\"col-sm-6\">
                            {{ form_row(form.plainPassword.first) }}
                        </div><!--/ [col] -->

                        <div class=\"col-sm-6\">
                            {{ form_row(form.plainPassword.second) }}
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <br>
                    <li class=\"row\">
                        <div class=\"col-sm-12\">
                            <input type=\"checkbox\" id=\"condition\" required name=\"\">
                            <label for=\"condition\"> En continuant vous acceptez les politiques et <a href=\"#\">conditions d'utilisations</a>.</label>
                        </div>
                    </li>
                    <li>
                        <button class=\"button\" type=\"submit\"><i class=\"icon-login\"></i>&nbsp; <span>{{ 'registration.submit'|trans }}</span></button>
                    </li>
                </ul>
            </div>
    {{ form_widget(form) }}
  {{ form_end(form) }}
        </div>
      </div>
      <aside class=\"right sidebar col-sm-3 col-xs-12\">
        <div class=\"sidebar-checkout block\">
         <div class=\"sidebar-bar-title\">
              <h3>Vous êtes une marque ?</h3>
            </div>
                 <div class=\"block-content\">
            <dl>
              <h5> Créez votre compte pro en quelques minutes !<br><br> <a href=\"{{ path('pro_user_register') }}\"><u>Cliquez ici</u></a> </h5>
              
        </div>
            </div>
        </aside>
    </div>
  </div>
  </section>


", "@FOSUser/Registration/register_content.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
