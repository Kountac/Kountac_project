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

/* ::baseAdmin.html.twig */
class __TwigTemplate_f09304723dc3a016968196209a6f1b0f56e8f0359a2b79e06e4c8b6ee91591c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
<head>
<!-- Basic page needs -->
<meta charset=\"utf-8\">
<!--[if IE]>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <![endif]-->
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>Kountac administration</title>
<meta name=\"description\" content=\"\">

<!-- Mobile specific metas  -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- Favicon  -->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<!-- font-awesome & simple line icons CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.css"), "html", null, true);
        echo "\" media=\"all\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-line-icons.css"), "html", null, true);
        echo "\" media=\"all\">

<!-- owl.carousel CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/owl.theme.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/owl.transitions.css"), "html", null, true);
        echo "\">

<!-- animate CSS  -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/animate.css"), "html", null, true);
        echo "\" media=\"all\">

<!-- flexslider CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/flexslider.css"), "html", null, true);
        echo "\" >

<!-- jquery-ui.min CSS  -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/jquery-ui.css"), "html", null, true);
        echo "\">

<!-- Mean Menu CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/meanmenu.min.css"), "html", null, true);
        echo "\">

<!-- nivo-slider css -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/nivo-slider.css"), "html", null, true);
        echo "\">

<!-- style CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" media=\"all\">


<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>


</head>

<body class=\"cms-index-index cms-home-page\">


<div id=\"page\"> 
  <!-- Header -->
  <header>
    <div class=\"header-container\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
              
            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Devise:deviseMainAdmin"), []);
        echo " 
            
            <!-- top links -->
            <div class=\"headerlinkmenu col-lg-6 col-md-6 col-sm-7 col-xs-6 text-right\">
              <div class=\"links\">
                <div class=\"jtv-user-info\">
                  <div class=\"dropdown\"> <a class=\"current-open\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\"><i class=\"fa fa-user-md\"></i><span> Administrateur </span> <i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                      <br>
                      <li><a title=\"Compte administrateur\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile_show");
        echo "\">Mon compte</a></li>
                      <li class=\"divider\"></li>
                      <li><a title=\"Se déconnecter\" href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-lock\"></i> Déconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-3 col-md-3 col-xs-12\"> 
            <!-- Header Logo -->
            <div class=\"logo\"><a title=\"Kountac\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\"><img alt=\"Kountac\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=50></a> </div>
            <!-- End Header Logo --> 
          </div><br>
          <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-6\"> 
            <!-- Search -->
            
           ";
        // line 102
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Produit:recherche"), []);
        // line 103
        echo "            
            <!-- End Search --> 
          </div>
          <div class=\"col-lg-3 col-sm-4 col-xs-12 top-cart\">
           
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Start Menu Area -->
  <div class=\"menu-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 hidden-xs\">
          <div class=\"main-menu\">
            <nav>
              <ul>
                ";
        // line 123
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:categorieAdmin"), []);
        // line 124
        echo "              </ul>
            </nav>
            
            <!-- END # MODAL LOGIN --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Menu Area --> 
  
  <!-- Start Mobile Menu -->
  <div class=\"mobile-menu hidden-sm hidden-md hidden-lg\">
    <nav><span class=\"mobile-menu-title\">Catégories</span>
      <ul>
        ";
        // line 139
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:categorieMobile"), []);
        // line 140
        echo "      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu --> 
  
  <!-- main container -->
  
  <div class=\"container\">
    ";
        // line 148
        $this->displayBlock('body', $context, $blocks);
        echo " 
  </div>
  
  <!-- end main container --> 
  
  <!-- category area start -->
  <div class=\"jtv-category-area\">
    <div class=\"container\">
      
    </div>
  </div>
  <!-- category-area end --> 
  
  <!-- our clients Slider -->
  
  <div class=\"our-clients\">
    <div class=\"slider-items-products\">
      <div id=\"our-clients-slider\" class=\"product-flexslider hidden-buttons\">
        <div class=\"slider-items slider-width-col6\"> 
          
          
        </div>
      </div>
    </div>
  </div>
  <div class=\"our-clients\">
    <div class=\"slider-items-products\">
      <div id=\"our-clients-slider\" class=\"product-flexslider hidden-buttons\">
        <div class=\"slider-items slider-width-col6\"> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">


        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block\">
          ";
        // line 190
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:informationFooter"), []);
        // line 191
        echo "        </div>
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block\">
          ";
        // line 193
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:insiderFooter"), []);
        // line 194
        echo "        </div>
        <div class=\"col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block\">
          ";
        // line 196
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:menuCollectionFooter"), []);
        // line 197
        echo "        </div>
        <div class=\"col-sm-6 col-md-4 col-xs-12 col-lg-3\">
          ";
        // line 199
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:contactUsFooter"), []);
        // line 200
        echo "          <div class=\"social\">
            <ul class=\"inline-mode\">
              <li class=\"social-network fb\"><a title=\"Connect us on Facebook\" target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
              <li class=\"social-network googleplus\"><a title=\"Connect us on Google+\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li class=\"social-network tw\"><a title=\"Connect us on Twitter\" target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
              <li class=\"social-network linkedin\"><a title=\"Connect us on Linkedin\" target=\"_blank\" href=\"https://www.pinterest.com/\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li class=\"social-network rss\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-rss\"></i></a></li>
              <li class=\"social-network instagram\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-instagram\"></i></a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
    <div class=\"footer-coppyright\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-xs-12 coppyright\"> Copyright © ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\"> Kountac </a>. Tous Droits Reservés. </div>
          <div class=\"col-sm-6 col-xs-12\">
            <div class=\"payment\">
              <ul>
                <li><a href=\"#\"><img title=\"Visa\" alt=\"Visa\" src=\"images/visa.png\"></a></li>
                <li><a href=\"#\"><img title=\"Paypal\" alt=\"Paypal\" src=\"images/paypal.png\"></a></li>
                <li><a href=\"#\"><img title=\"Discover\" alt=\"Discover\" src=\"images/discover.png\"></a></li>
                <li><a href=\"#\"><img title=\"Master Card\" alt=\"Master Card\" src=\"images/master-card.png\"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href=\"#\" class=\"totop\"> </a> 
  
   <!-- End Footer --> 
 
  
  </div>


<!-- JS --> 

<!-- jquery js --> 
<script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.min.js"), "html", null, true);
        echo "\"></script> 

<!-- bootstrap js --> 
<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 

<!-- Mean Menu js --> 
<script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.meanmenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- owl.carousel.min js --> 
<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script> 

<!-- bxslider js --> 
<script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script> 

<!--jquery-ui.min js --> 
<script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-ui.js"), "html", null, true);
        echo "\"></script> 

<!-- countdown js --> 
<script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/countdown.js"), "html", null, true);
        echo "\"></script> 

<!-- wow JS --> 
<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/wow.min.js"), "html", null, true);
        echo "\"></script> 

<!-- main js --> 
<script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/main.js"), "html", null, true);
        echo "\"></script> 

<!-- nivo slider js --> 
<script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script> 

<!-- flexslider js --> 
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script> 



<script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/js/sample.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/css/samples.css"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css"), "html", null, true);
        echo "\"></script>
<script>
  initSample();
</script>


<!-- Hot Deals Timer 1--> 
<script type=\"text/javascript\">
      var dthen1 = new Date(\"12/25/16 11:59:00 PM\");
      start = \"08/04/15 03:02:11 AM\";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = \"countbox_1\";
      CountBack_slider(gsecs1,\"countbox_1\", 1);
  </script>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 148
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 148,  437 => 280,  433 => 279,  429 => 278,  425 => 277,  418 => 273,  412 => 270,  406 => 267,  400 => 264,  394 => 261,  388 => 258,  382 => 255,  376 => 252,  370 => 249,  364 => 246,  358 => 243,  329 => 217,  310 => 200,  308 => 199,  304 => 197,  302 => 196,  298 => 194,  296 => 193,  292 => 191,  290 => 190,  245 => 148,  235 => 140,  233 => 139,  216 => 124,  214 => 123,  192 => 103,  190 => 102,  179 => 96,  163 => 83,  158 => 81,  146 => 72,  123 => 52,  117 => 49,  111 => 46,  105 => 43,  99 => 40,  93 => 37,  87 => 34,  83 => 33,  79 => 32,  73 => 29,  69 => 28,  63 => 25,  52 => 17,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html lang=\"en\">
<head>
<!-- Basic page needs -->
<meta charset=\"utf-8\">
<!--[if IE]>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <![endif]-->
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>Kountac administration</title>
<meta name=\"description\" content=\"\">

<!-- Mobile specific metas  -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- Favicon  -->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/bootstrap.min.css') }}\">

<!-- font-awesome & simple line icons CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/font-awesome.css') }}\" media=\"all\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/simple-line-icons.css') }}\" media=\"all\">

<!-- owl.carousel CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/owl.carousel.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/owl.theme.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/owl.transitions.css') }}\">

<!-- animate CSS  -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/animate.css') }}\" media=\"all\">

<!-- flexslider CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/flexslider.css') }}\" >

<!-- jquery-ui.min CSS  -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/jquery-ui.css') }}\">

<!-- Mean Menu CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/meanmenu.min.css') }}\">

<!-- nivo-slider css -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/nivo-slider.css') }}\">

<!-- style CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin/css/style.css') }}\" media=\"all\">


<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>


</head>

<body class=\"cms-index-index cms-home-page\">


<div id=\"page\"> 
  <!-- Header -->
  <header>
    <div class=\"header-container\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
              
            {% render(controller('KountacBundle:Devise:deviseMainAdmin')) %} 
            
            <!-- top links -->
            <div class=\"headerlinkmenu col-lg-6 col-md-6 col-sm-7 col-xs-6 text-right\">
              <div class=\"links\">
                <div class=\"jtv-user-info\">
                  <div class=\"dropdown\"> <a class=\"current-open\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\"><i class=\"fa fa-user-md\"></i><span> Administrateur </span> <i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                      <br>
                      <li><a title=\"Compte administrateur\" href=\"{{ path('admin_profile_show') }}\">Mon compte</a></li>
                      <li class=\"divider\"></li>
                      <li><a title=\"Se déconnecter\" href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-lock\"></i> Déconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-3 col-md-3 col-xs-12\"> 
            <!-- Header Logo -->
            <div class=\"logo\"><a title=\"Kountac\" href=\"{{ path('kountac_homepage') }}\"><img alt=\"Kountac\" src=\"{{ asset('images/logo.png') }}\" height=50></a> </div>
            <!-- End Header Logo --> 
          </div><br>
          <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-6\"> 
            <!-- Search -->
            
           {% render(controller('KountacBundle:Produit:recherche')) %}
            
            <!-- End Search --> 
          </div>
          <div class=\"col-lg-3 col-sm-4 col-xs-12 top-cart\">
           
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Start Menu Area -->
  <div class=\"menu-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 hidden-xs\">
          <div class=\"main-menu\">
            <nav>
              <ul>
                {% render(controller('KountacBundle:Menu:categorieAdmin')) %}
              </ul>
            </nav>
            
            <!-- END # MODAL LOGIN --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Menu Area --> 
  
  <!-- Start Mobile Menu -->
  <div class=\"mobile-menu hidden-sm hidden-md hidden-lg\">
    <nav><span class=\"mobile-menu-title\">Catégories</span>
      <ul>
        {% render(controller('KountacBundle:Menu:categorieMobile')) %}
      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu --> 
  
  <!-- main container -->
  
  <div class=\"container\">
    {% block body %}{% endblock %} 
  </div>
  
  <!-- end main container --> 
  
  <!-- category area start -->
  <div class=\"jtv-category-area\">
    <div class=\"container\">
      
    </div>
  </div>
  <!-- category-area end --> 
  
  <!-- our clients Slider -->
  
  <div class=\"our-clients\">
    <div class=\"slider-items-products\">
      <div id=\"our-clients-slider\" class=\"product-flexslider hidden-buttons\">
        <div class=\"slider-items slider-width-col6\"> 
          
          
        </div>
      </div>
    </div>
  </div>
  <div class=\"our-clients\">
    <div class=\"slider-items-products\">
      <div id=\"our-clients-slider\" class=\"product-flexslider hidden-buttons\">
        <div class=\"slider-items slider-width-col6\"> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">


        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block\">
          {% render(controller('KountacBundle:Menu:informationFooter')) %}
        </div>
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block\">
          {% render(controller('KountacBundle:Menu:insiderFooter')) %}
        </div>
        <div class=\"col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block\">
          {% render(controller('KountacBundle:Menu:menuCollectionFooter')) %}
        </div>
        <div class=\"col-sm-6 col-md-4 col-xs-12 col-lg-3\">
          {% render(controller('KountacBundle:Menu:contactUsFooter')) %}
          <div class=\"social\">
            <ul class=\"inline-mode\">
              <li class=\"social-network fb\"><a title=\"Connect us on Facebook\" target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
              <li class=\"social-network googleplus\"><a title=\"Connect us on Google+\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li class=\"social-network tw\"><a title=\"Connect us on Twitter\" target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
              <li class=\"social-network linkedin\"><a title=\"Connect us on Linkedin\" target=\"_blank\" href=\"https://www.pinterest.com/\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li class=\"social-network rss\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-rss\"></i></a></li>
              <li class=\"social-network instagram\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-instagram\"></i></a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
    <div class=\"footer-coppyright\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-xs-12 coppyright\"> Copyright © {{ \"now\"|date('Y') }} <a href=\"#\"> Kountac </a>. Tous Droits Reservés. </div>
          <div class=\"col-sm-6 col-xs-12\">
            <div class=\"payment\">
              <ul>
                <li><a href=\"#\"><img title=\"Visa\" alt=\"Visa\" src=\"images/visa.png\"></a></li>
                <li><a href=\"#\"><img title=\"Paypal\" alt=\"Paypal\" src=\"images/paypal.png\"></a></li>
                <li><a href=\"#\"><img title=\"Discover\" alt=\"Discover\" src=\"images/discover.png\"></a></li>
                <li><a href=\"#\"><img title=\"Master Card\" alt=\"Master Card\" src=\"images/master-card.png\"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href=\"#\" class=\"totop\"> </a> 
  
   <!-- End Footer --> 
 
  
  </div>


<!-- JS --> 

<!-- jquery js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery.min.js') }}\"></script> 

<!-- bootstrap js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/bootstrap.min.js') }}\"></script> 

<!-- Mean Menu js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery.meanmenu.min.js') }}\"></script>

<!-- owl.carousel.min js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/owl.carousel.min.js') }}\"></script> 

<!-- bxslider js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery.bxslider.js') }}\"></script> 

<!--jquery-ui.min js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery-ui.js') }}\"></script> 

<!-- countdown js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/countdown.js') }}\"></script> 

<!-- wow JS --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/wow.min.js') }}\"></script> 

<!-- main js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/main.js') }}\"></script> 

<!-- nivo slider js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery.nivo.slider.js') }}\"></script> 

<!-- flexslider js --> 
<script type=\"text/javascript\" src=\"{{ asset('admin/js/jquery.flexslider.js') }}\"></script> 



<script type=\"text/javascript\" src=\"{{ asset('ckeditor/ckeditor.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/js/sample.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/css/samples.css') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}\"></script>
<script>
  initSample();
</script>


<!-- Hot Deals Timer 1--> 
<script type=\"text/javascript\">
      var dthen1 = new Date(\"12/25/16 11:59:00 PM\");
      start = \"08/04/15 03:02:11 AM\";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = \"countbox_1\";
      CountBack_slider(gsecs1,\"countbox_1\", 1);
  </script>
</body>

</html>
", "::baseAdmin.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources\\views/baseAdmin.html.twig");
    }
}
