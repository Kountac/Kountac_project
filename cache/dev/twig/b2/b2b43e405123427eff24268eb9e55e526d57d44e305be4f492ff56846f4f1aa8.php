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

/* ::baseAllProduct.html.twig */
class __TwigTemplate_116ab1d251a9bd045a134f77664786a7cb903b1c9935df8a749d3ebcfd1dadaf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::baseAllProduct.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 63
        echo "  <style type=\"text/css\">
    #WCUpaymentButton{
      margin-left: 300px !important;
    }
  </style>



<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1163117170686264');
  fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
  src=\"https://www.facebook.com/tr?id=1163117170686264&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->


<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>

  
</head>

<body class=\"cms-index-index cms-home-page\">
<!-- mobile menu -->
<div id=\"mobile-menu\">
  
  ";
        // line 100
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Produit:rechercheMobile"), []);
        // line 101
        echo "  <ul>
    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:categorieMobile"), []);
        // line 103
        echo "  </ul>
</div>
<!-- end mobile menu -->
<div id=\"page\"> 
  
  <!-- Header -->
  <header>
    <div class=\"header-container\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
            <!-- top links -->
            ";
        // line 115
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:headerLink"), []);
        // line 116
        echo "          </div>
        </div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-1 col-md-1 col-xs-11\"> 
            <div class=\"logo\"><a title=\"Bienvenue sur kountac\" href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kountac_homepage");
        echo "\">
                <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=50 alt=\"Kountac\"></a>
            </div>
          </div>
          <div class=\"col-md-11 col-sm-11 hidden-xs\">
            <div class=\"mtmegamenu\">
              <ul>
                   ";
        // line 129
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:categorie"), []);
        // line 130
        echo "                    
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-4 col-xs-3\">
          <div class=\"mm-toggle-wrap\">
            <div class=\"mm-toggle\"> <i class=\"fa fa-align-justify\"></i> </div>
            <span class=\"mm-label hidden-xs\">Catégories</span> </div>
          <div class=\"mega-container visible-lg visible-md visible-sm\">
            <div class=\"navleft-container\">
              <div class=\"mega-menu-title\">
              </div>
              <div class=\"mega-menu-category\">
                <ul class=\"nav\">
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xs-9 col-sm-6 col-md-6 hidden-xs\"> 
          <!-- Search -->
          
          ";
        // line 162
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Produit:recherche"), []);
        // line 163
        echo "          
          <!-- End Search --> 
        </div>
        <!-- top cart -->
        <div class=\"col-md-3 col-xs-9 col-sm-2 top-cart\">
           ";
        // line 168
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Panier:panierMenu"), []);
        echo " 
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  
        ";
        // line 175
        $this->displayBlock('body', $context, $blocks);
        // line 176
        echo "        
<!-- Footer -->
<!-- service section -->
  
  <div class=\"jtv-service-area\">
    <div class=\"container\">
      </div>
    </div>
  </div>
  <footer> 
    
    <!-- our clients Slider -->
    <div class=\"our-clients\">
      <div class=\"container\">
        <div class=\"col-md-12\">
          
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block\">
          
            ";
        // line 199
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:informationFooter"), []);
        // line 200
        echo "            
        </div>
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block\">
          
            ";
        // line 204
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:insiderFooter"), []);
        // line 205
        echo "            
        </div>
        <div class=\"col-sm-6 col-md-2 col-xs-12 col-lg-2 collapsed-block\">
          
           ";
        // line 209
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:menuCollectionFooter"), []);
        echo " 
            
        </div>
        <div class=\"col-sm-6 col-md-4 col-xs-12 col-lg-3\">
          
            ";
        // line 214
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:contactUsFooter"), []);
        // line 215
        echo "            
        </div>
        <div class=\"col-sm-12 col-md-12 col-xs-12 col-lg-3\">
          <div class=\"footer-links\">
            <div class=\"footer-newsletter\">
                
              ";
        // line 221
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KountacBundle:Menu:newsletterFooter"), []);
        // line 222
        echo "              
            </div>
            <div class=\"social\">
              <ul class=\"inline-mode\">
                <li class=\"social-network fb\"><a title=\"Connect us on Facebook\" target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                <li class=\"social-network googleplus\"><a title=\"Connect us on Google+\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li class=\"social-network tw\"><a title=\"Connect us on Twitter\" target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                <li class=\"social-network linkedin\"><a title=\"Connect us on Linkedin\" target=\"_blank\" href=\"https://www.pinterest.com/\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li class=\"social-network rss\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-rss\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-coppyright\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-xs-12 coppyright\"> Copyright © ";
        // line 240
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\"> Kountac </a>. Tous Droits Reservés. </div>
          <div class=\"col-sm-6 col-xs-12\">
            <div class=\"payment\">
              <ul>
                <li><a href=\"#\"><img title=\"Visa\" alt=\"Visa\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/visa.png"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"#\"><img title=\"Paypal\" alt=\"Paypal\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paypal.png"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"#\"><img title=\"Discover\" alt=\"Discover\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/discover.png"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"#\"><img title=\"Master Card\" alt=\"Master Card\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/master-card.png"), "html", null, true);
        echo "\"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


  </footer>
  <a href=\"#\" class=\"totop\"><i class=\"fa fa-arrow-up\"></i></a> 
  <!-- End Footer --> 
 
        ";
        // line 260
        $this->displayBlock('javascripts', $context, $blocks);
        // line 424
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "  <!-- Basic page needs -->
  <meta charset=\"utf-8\">
  <!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Kountac | The new made in Africa | Mode, Art, Déco d'Afrique | ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 12
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "  <meta name=\"keywords\" content=\"Kountac, Afrique, Tendances, Achats, Originalité, prêt à porter, qualité, livraison, Chemises, Blazers, Pulls et Gillets, vêtements, Bagages, Ballerines, Jeans, Pantalons, Baskets, Chaussures, Boucles, Bracelet, Cartable, sacs...\" />
  <meta name=\"robots\" content=\"index,follow\" />

  <!-- Mobile specific metas  -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Favicon  -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

  <!-- Google Fonts -->
  <!--link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'-->


  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

  <!-- font-awesome & simple line icons CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" media=\"all\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-line-icons.css"), "html", null, true);
        echo "\" media=\"all\">

  <!-- owl.carousel CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\">

  <!-- animate CSS  -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" media=\"all\">

  <!-- flexslider CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" >

  <!-- jquery-ui.min CSS  -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">

  <!-- Revolution Slider CSS -->
  <link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/revolution-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- style CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"all\">

  <!-- quick_view_popup CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/quick_view_popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
  <!-- chat CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chat/chat.css"), "html", null, true);
        echo "\" type=\"text/css\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_meta($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 13
        echo "  <meta name=\"description\" content=\"Achetez - le nouveau prêt à porter africain -  Les dernières tendances modes Africaine en un clic -  The new made in Africa, la qualité africaine livrée chez vous -  Originalité et authenticité, la mode africaine chez vous. Chemises, Blazers, Pulls et Gillets, vêtements, Bagages, Ballerines, Jeans, Pantalons, Baskets, Chaussures, Boucles, Bracelet, Cartable, sacs...\" />
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 175
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 260
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 261
        echo "            <!-- JS --> 

<!-- jquery js --> 
<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
<!--chat js -->  
<script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chat/jquery-ajax.js"), "html", null, true);
        echo "\"></script>

<!-- bootstrap js --> 
<script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 

<!-- Slider Js --> 
<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/revolution-slider.js"), "html", null, true);
        echo "\"></script> 

<!-- owl.carousel.min js --> 
<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script> 

<!-- bxslider js --> 
<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script> 

<!-- flexslider js --> 
<script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script> 

<!-- megamenu js --> 
<script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/megamenu.js"), "html", null, true);
        echo "\"></script> 



<script type=\"text/javascript\">
  /* <![CDATA[ */   
  var mega_menu = '0';
  /* ]]> */
</script> 

<!-- jquery.mobile-menu js --> 
<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mobile-menu.js"), "html", null, true);
        echo "\"></script> 

<!--jquery-ui.min js --> 
<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script> 

<!-- main js --> 
<script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script> 

<!-- countdown js --> 
<script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script> 

<!--cloud-zoom js --> 
<script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cloud-zoom.js"), "html", null, true);
        echo "\"></script>

<!--chat js -->  
<script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("chat/script.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/js/sample.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/css/samples.css"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css"), "html", null, true);
        echo "\"></script>
<script>
  initSample();
</script>
<!-- Revolution slider --> 
<script type=\"text/javascript\">

\t\tjQuery(document).ready(function() {
\t\t\t\t\t\t
\t\t\tjQuery('.tp-banner').show().revolution(
\t\t\t{
\t\t\t\tdottedOverlay:\"none\",
\t\t\t\tdelay:10000,
\t\t\t\tstartwidth:960,
\t\t\t\tstartheight:715,
\t\t\t\thideThumbs:200,
\t\t\t\t
\t\t\t\tthumbWidth:100,
\t\t\t\tthumbHeight:50,
\t\t\t\tthumbAmount:5,
\t\t\t\t
\t\t\t\tnavigationType:\"bullet\",
\t\t\t\tnavigationArrows:\"on\",
\t\t\t\t
\t\t\t\ttouchenabled:\"on\",
\t\t\t\tonHoverStop:\"off\",
\t\t\t\t
\t\t\t\tswipe_velocity: 0.7,
\t\t\t\tswipe_min_touches: 1,
\t\t\t\tswipe_max_touches: 1,
\t\t\t\tdrag_block_vertical: false,
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tparallax:\"mouse\",
\t\t\t\tparallaxBgFreeze:\"on\",
\t\t\t\tparallaxLevels:[7,4,3,2,5,4,3,2,1,0],
\t\t\t\t\t\t\t\t\t\t
\t\t\t\tkeyboardNavigation:\"off\",
\t\t\t\t
\t\t\t\tnavigationHAlign:\"center\",
\t\t\t\tnavigationVAlign:\"bottom\",
\t\t\t\tnavigationHOffset:0,
\t\t\t\tnavigationVOffset:60,
\t\t\t\t\t\t
\t\t\t\tshadow:0,

\t\t\t\tspinner:\"spinner4\",
\t\t\t\t
\t\t\t\tstopLoop:\"off\",
\t\t\t\tstopAfterLoops:-1,
\t\t\t\tstopAtSlide:-1,

\t\t\t\tshuffle:\"off\",
\t\t\t\t
\t\t\t\tautoHeight:\"off\",\t\t\t\t\t\t
\t\t\t\tforceFullWidth:\"off\",\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\thideThumbsOnMobile:\"off\",
\t\t\t\thideNavDelayOnMobile:1500,\t\t\t\t\t\t
\t\t\t\thideBulletsOnMobile:\"off\",
\t\t\t\thideArrowsOnMobile:\"off\",
\t\t\t\thideThumbsUnderResolution:0,
\t\t\t\t
\t\t\t\thideSliderAtLimit:0,
\t\t\t\thideCaptionAtLimit:0,
\t\t\t\thideAllCaptionAtLilmit:0,
\t\t\t\tstartWithSlide:0,
\t\t\t\tfullScreenOffsetContainer: \".header\"\t
\t\t\t});
\t\t\t\t\t\t\t
\t\t});\t//ready

\t
\t\t
\t</script>
        
        <script type=\"text/javascript\">
        

          function \$_GET(param) {
            var vars = {};
            window.location.href.replace( location.hash, '' ).replace( 
              /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
              function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
              }
            );

            if ( param ) {
              return vars[param] ? vars[param] : null;  
            }
            return vars;
          }

          var \$_GET = \$_GET();
          var page = \$_GET['page'];
          if (typeof page != \"undefined\") {
            \$('html, body').animate({scrollTop:700},500);
          }

        </script>

        <script>
          \$(function() {
            \$('#toggle-one').bootstrapToggle();
          });
        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::baseAllProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 315,  573 => 314,  569 => 313,  565 => 312,  560 => 310,  554 => 307,  548 => 304,  542 => 301,  536 => 298,  530 => 295,  516 => 284,  510 => 281,  504 => 278,  498 => 275,  492 => 272,  486 => 269,  480 => 266,  475 => 264,  470 => 261,  464 => 260,  453 => 175,  445 => 13,  439 => 12,  428 => 11,  419 => 61,  414 => 59,  408 => 56,  402 => 53,  396 => 50,  390 => 47,  384 => 44,  378 => 41,  374 => 40,  370 => 39,  364 => 36,  360 => 35,  354 => 32,  341 => 22,  332 => 15,  330 => 12,  326 => 11,  318 => 5,  312 => 4,  303 => 424,  301 => 260,  285 => 247,  281 => 246,  277 => 245,  273 => 244,  266 => 240,  246 => 222,  244 => 221,  236 => 215,  234 => 214,  226 => 209,  220 => 205,  218 => 204,  212 => 200,  210 => 199,  185 => 176,  183 => 175,  173 => 168,  166 => 163,  164 => 162,  130 => 130,  128 => 129,  119 => 123,  115 => 122,  107 => 116,  105 => 115,  91 => 103,  89 => 102,  86 => 101,  84 => 100,  45 => 63,  43 => 4,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  {% block head %}
  <!-- Basic page needs -->
  <meta charset=\"utf-8\">
  <!--[if IE]>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <![endif]-->
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Kountac | The new made in Africa | Mode, Art, Déco d'Afrique | {% block title %}{% endblock %}</title>
  {% block meta %}
  <meta name=\"description\" content=\"Achetez - le nouveau prêt à porter africain -  Les dernières tendances modes Africaine en un clic -  The new made in Africa, la qualité africaine livrée chez vous -  Originalité et authenticité, la mode africaine chez vous. Chemises, Blazers, Pulls et Gillets, vêtements, Bagages, Ballerines, Jeans, Pantalons, Baskets, Chaussures, Boucles, Bracelet, Cartable, sacs...\" />
  {% endblock %}
  <meta name=\"keywords\" content=\"Kountac, Afrique, Tendances, Achats, Originalité, prêt à porter, qualité, livraison, Chemises, Blazers, Pulls et Gillets, vêtements, Bagages, Ballerines, Jeans, Pantalons, Baskets, Chaussures, Boucles, Bracelet, Cartable, sacs...\" />
  <meta name=\"robots\" content=\"index,follow\" />

  <!-- Mobile specific metas  -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Favicon  -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">

  <!-- Google Fonts -->
  <!--link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'-->


  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\">

  <!-- font-awesome & simple line icons CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/font-awesome.css') }}\" media=\"all\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/simple-line-icons.css') }}\" media=\"all\">

  <!-- owl.carousel CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/owl.carousel.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/owl.theme.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/owl.transitions.css') }}\">

  <!-- animate CSS  -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/animate.css') }}\" media=\"all\">

  <!-- flexslider CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/flexslider.css') }}\" >

  <!-- jquery-ui.min CSS  -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/jquery-ui.css') }}\">

  <!-- Revolution Slider CSS -->
  <link href=\"{{ asset('css/revolution-slider.css') }}\" rel=\"stylesheet\">

  <!-- style CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\" media=\"all\">

  <!-- quick_view_popup CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/quick_view_popup.css') }}\" type=\"text/css\">
  <!-- chat CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('chat/chat.css') }}\" type=\"text/css\">
  {% endblock %}
  <style type=\"text/css\">
    #WCUpaymentButton{
      margin-left: 300px !important;
    }
  </style>



<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1163117170686264');
  fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
  src=\"https://www.facebook.com/tr?id=1163117170686264&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->


<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>

  
</head>

<body class=\"cms-index-index cms-home-page\">
<!-- mobile menu -->
<div id=\"mobile-menu\">
  
  {% render(controller('KountacBundle:Produit:rechercheMobile')) %}
  <ul>
    {% render(controller('KountacBundle:Menu:categorieMobile')) %}
  </ul>
</div>
<!-- end mobile menu -->
<div id=\"page\"> 
  
  <!-- Header -->
  <header>
    <div class=\"header-container\">
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row\">
            <!-- top links -->
            {% render(controller('KountacBundle:Menu:headerLink')) %}
          </div>
        </div>
      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-1 col-md-1 col-xs-11\"> 
            <div class=\"logo\"><a title=\"Bienvenue sur kountac\" href=\"{{ path('kountac_homepage') }}\">
                <img src=\"{{ asset('images/logo.png') }}\" height=50 alt=\"Kountac\"></a>
            </div>
          </div>
          <div class=\"col-md-11 col-sm-11 hidden-xs\">
            <div class=\"mtmegamenu\">
              <ul>
                   {% render(controller('KountacBundle:Menu:categorie')) %}
                    
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-4 col-xs-3\">
          <div class=\"mm-toggle-wrap\">
            <div class=\"mm-toggle\"> <i class=\"fa fa-align-justify\"></i> </div>
            <span class=\"mm-label hidden-xs\">Catégories</span> </div>
          <div class=\"mega-container visible-lg visible-md visible-sm\">
            <div class=\"navleft-container\">
              <div class=\"mega-menu-title\">
              </div>
              <div class=\"mega-menu-category\">
                <ul class=\"nav\">
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xs-9 col-sm-6 col-md-6 hidden-xs\"> 
          <!-- Search -->
          
          {% render(controller('KountacBundle:Produit:recherche')) %}
          
          <!-- End Search --> 
        </div>
        <!-- top cart -->
        <div class=\"col-md-3 col-xs-9 col-sm-2 top-cart\">
           {% render(controller('KountacBundle:Panier:panierMenu')) %} 
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  
        {% block body %}{% endblock %}
        
<!-- Footer -->
<!-- service section -->
  
  <div class=\"jtv-service-area\">
    <div class=\"container\">
      </div>
    </div>
  </div>
  <footer> 
    
    <!-- our clients Slider -->
    <div class=\"our-clients\">
      <div class=\"container\">
        <div class=\"col-md-12\">
          
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block\">
          
            {% render(controller('KountacBundle:Menu:informationFooter')) %}
            
        </div>
        <div class=\"col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block\">
          
            {% render(controller('KountacBundle:Menu:insiderFooter')) %}
            
        </div>
        <div class=\"col-sm-6 col-md-2 col-xs-12 col-lg-2 collapsed-block\">
          
           {% render(controller('KountacBundle:Menu:menuCollectionFooter')) %} 
            
        </div>
        <div class=\"col-sm-6 col-md-4 col-xs-12 col-lg-3\">
          
            {% render(controller('KountacBundle:Menu:contactUsFooter')) %}
            
        </div>
        <div class=\"col-sm-12 col-md-12 col-xs-12 col-lg-3\">
          <div class=\"footer-links\">
            <div class=\"footer-newsletter\">
                
              {% render(controller('KountacBundle:Menu:newsletterFooter')) %}
              
            </div>
            <div class=\"social\">
              <ul class=\"inline-mode\">
                <li class=\"social-network fb\"><a title=\"Connect us on Facebook\" target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                <li class=\"social-network googleplus\"><a title=\"Connect us on Google+\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li class=\"social-network tw\"><a title=\"Connect us on Twitter\" target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                <li class=\"social-network linkedin\"><a title=\"Connect us on Linkedin\" target=\"_blank\" href=\"https://www.pinterest.com/\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li class=\"social-network rss\"><a title=\"Connect us on Instagram\" target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fa fa-rss\"></i></a></li>
              </ul>
            </div>
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
                <li><a href=\"#\"><img title=\"Visa\" alt=\"Visa\" src=\"{{ asset('images/visa.png') }}\"></a></li>
                <li><a href=\"#\"><img title=\"Paypal\" alt=\"Paypal\" src=\"{{ asset('images/paypal.png') }}\"></a></li>
                <li><a href=\"#\"><img title=\"Discover\" alt=\"Discover\" src=\"{{ asset('images/discover.png') }}\"></a></li>
                <li><a href=\"#\"><img title=\"Master Card\" alt=\"Master Card\" src=\"{{ asset('images/master-card.png') }}\"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


  </footer>
  <a href=\"#\" class=\"totop\"><i class=\"fa fa-arrow-up\"></i></a> 
  <!-- End Footer --> 
 
        {% block javascripts %}
            <!-- JS --> 

<!-- jquery js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script> 
<!--chat js -->  
<script type=\"text/javascript\" src=\"{{ asset('chat/jquery-ajax.js') }}\"></script>

<!-- bootstrap js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script> 

<!-- Slider Js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/revolution-slider.js') }}\"></script> 

<!-- owl.carousel.min js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/owl.carousel.min.js') }}\"></script> 

<!-- bxslider js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.bxslider.js') }}\"></script> 

<!-- flexslider js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.flexslider.js') }}\"></script> 

<!-- megamenu js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/megamenu.js') }}\"></script> 



<script type=\"text/javascript\">
  /* <![CDATA[ */   
  var mega_menu = '0';
  /* ]]> */
</script> 

<!-- jquery.mobile-menu js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/mobile-menu.js') }}\"></script> 

<!--jquery-ui.min js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-ui.js') }}\"></script> 

<!-- main js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script> 

<!-- countdown js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/countdown.js') }}\"></script> 

<!--cloud-zoom js --> 
<script type=\"text/javascript\" src=\"{{ asset('js/cloud-zoom.js') }}\"></script>

<!--chat js -->  
<script type=\"text/javascript\" src=\"{{ asset('chat/script.js') }}\"></script>

<script type=\"text/javascript\" src=\"{{ asset('ckeditor/ckeditor.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/js/sample.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/css/samples.css') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}\"></script>
<script>
  initSample();
</script>
<!-- Revolution slider --> 
<script type=\"text/javascript\">

\t\tjQuery(document).ready(function() {
\t\t\t\t\t\t
\t\t\tjQuery('.tp-banner').show().revolution(
\t\t\t{
\t\t\t\tdottedOverlay:\"none\",
\t\t\t\tdelay:10000,
\t\t\t\tstartwidth:960,
\t\t\t\tstartheight:715,
\t\t\t\thideThumbs:200,
\t\t\t\t
\t\t\t\tthumbWidth:100,
\t\t\t\tthumbHeight:50,
\t\t\t\tthumbAmount:5,
\t\t\t\t
\t\t\t\tnavigationType:\"bullet\",
\t\t\t\tnavigationArrows:\"on\",
\t\t\t\t
\t\t\t\ttouchenabled:\"on\",
\t\t\t\tonHoverStop:\"off\",
\t\t\t\t
\t\t\t\tswipe_velocity: 0.7,
\t\t\t\tswipe_min_touches: 1,
\t\t\t\tswipe_max_touches: 1,
\t\t\t\tdrag_block_vertical: false,
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tparallax:\"mouse\",
\t\t\t\tparallaxBgFreeze:\"on\",
\t\t\t\tparallaxLevels:[7,4,3,2,5,4,3,2,1,0],
\t\t\t\t\t\t\t\t\t\t
\t\t\t\tkeyboardNavigation:\"off\",
\t\t\t\t
\t\t\t\tnavigationHAlign:\"center\",
\t\t\t\tnavigationVAlign:\"bottom\",
\t\t\t\tnavigationHOffset:0,
\t\t\t\tnavigationVOffset:60,
\t\t\t\t\t\t
\t\t\t\tshadow:0,

\t\t\t\tspinner:\"spinner4\",
\t\t\t\t
\t\t\t\tstopLoop:\"off\",
\t\t\t\tstopAfterLoops:-1,
\t\t\t\tstopAtSlide:-1,

\t\t\t\tshuffle:\"off\",
\t\t\t\t
\t\t\t\tautoHeight:\"off\",\t\t\t\t\t\t
\t\t\t\tforceFullWidth:\"off\",\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\thideThumbsOnMobile:\"off\",
\t\t\t\thideNavDelayOnMobile:1500,\t\t\t\t\t\t
\t\t\t\thideBulletsOnMobile:\"off\",
\t\t\t\thideArrowsOnMobile:\"off\",
\t\t\t\thideThumbsUnderResolution:0,
\t\t\t\t
\t\t\t\thideSliderAtLimit:0,
\t\t\t\thideCaptionAtLimit:0,
\t\t\t\thideAllCaptionAtLilmit:0,
\t\t\t\tstartWithSlide:0,
\t\t\t\tfullScreenOffsetContainer: \".header\"\t
\t\t\t});
\t\t\t\t\t\t\t
\t\t});\t//ready

\t
\t\t
\t</script>
        
        <script type=\"text/javascript\">
        

          function \$_GET(param) {
            var vars = {};
            window.location.href.replace( location.hash, '' ).replace( 
              /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
              function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
              }
            );

            if ( param ) {
              return vars[param] ? vars[param] : null;  
            }
            return vars;
          }

          var \$_GET = \$_GET();
          var page = \$_GET['page'];
          if (typeof page != \"undefined\") {
            \$('html, body').animate({scrollTop:700},500);
          }

        </script>

        <script>
          \$(function() {
            \$('#toggle-one').bootstrapToggle();
          });
        </script>
        {% endblock %}
    </body>
</html>
", "::baseAllProduct.html.twig", "C:\\xampp\\htdocs\\Projet test\\Kountac_project\\app/Resources\\views/baseAllProduct.html.twig");
    }
}
