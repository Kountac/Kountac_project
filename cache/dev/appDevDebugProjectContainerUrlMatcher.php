<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/chat')) {
            // chat_homepage
            if (0 === strpos($pathinfo, '/chat/chat') && preg_match('#^/chat/chat/(?P<channel>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chat_homepage')), array (  '_controller' => 'Kountac\\ChatBundle\\Controller\\ChatController::showAction',));
            }

            // chat_form
            if (0 === strpos($pathinfo, '/chat/post') && preg_match('#^/chat/post/(?P<channel>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chat_form')), array (  '_controller' => 'Kountac\\ChatBundle\\Controller\\ChatController::postAction',));
            }

            if (0 === strpos($pathinfo, '/chat/list')) {
                // chat_list
                if (preg_match('#^/chat/list/(?P<channel>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chat_list')), array (  '_controller' => 'Kountac\\ChatBundle\\Controller\\ChatController::listAction',));
                }

                if (0 === strpos($pathinfo, '/chat/list_')) {
                    // chat_list_autor
                    if (0 === strpos($pathinfo, '/chat/list_autor') && preg_match('#^/chat/list_autor/(?P<channel>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chat_list_autor')), array (  '_controller' => 'Kountac\\ChatBundle\\Controller\\ChatController::list_autorAction',));
                    }

                    // chat_list_msg
                    if (0 === strpos($pathinfo, '/chat/list_msg') && preg_match('#^/chat/list_msg/(?P<channel>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chat_list_msg')), array (  '_controller' => 'Kountac\\ChatBundle\\Controller\\ChatController::list_msgAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/adminCommentaires')) {
            // adminCommentaires_index
            if ('/admin/adminCommentaires' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_adminCommentaires_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'adminCommentaires_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminCommentaires_index;
                }

                return array (  '_controller' => 'Kountac\\CommentairesBundle\\Controller\\CommentairesAdminController::indexAction',  '_route' => 'adminCommentaires_index',);
            }
            not_adminCommentaires_index:

            // adminCommentaires_show
            if (preg_match('#^/admin/adminCommentaires/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminCommentaires_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommentaires_show')), array (  '_controller' => 'Kountac\\CommentairesBundle\\Controller\\CommentairesAdminController::showAction',));
            }
            not_adminCommentaires_show:

            // adminCommentaires_new
            if ('/admin/adminCommentaires/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminCommentaires_new;
                }

                return array (  '_controller' => 'Kountac\\CommentairesBundle\\Controller\\CommentairesAdminController::newAction',  '_route' => 'adminCommentaires_new',);
            }
            not_adminCommentaires_new:

            // adminCommentaires_edit
            if (preg_match('#^/admin/adminCommentaires/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminCommentaires_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommentaires_edit')), array (  '_controller' => 'Kountac\\CommentairesBundle\\Controller\\CommentairesAdminController::editAction',));
            }
            not_adminCommentaires_edit:

            // adminCommentaires_delete
            if (preg_match('#^/admin/adminCommentaires/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommentaires_delete')), array (  '_controller' => 'Kountac\\CommentairesBundle\\Controller\\CommentairesAdminController::deleteAction',));
            }

        }

        // kountac_homepage
        if ('/homepage' === $pathinfo) {
            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\HomepageController::indexAction',  '_route' => 'kountac_homepage',);
        }

        // kountac_homepage_index
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_kountac_homepage_index;
            } else {
                return $this->redirect($rawPathinfo.'/', 'kountac_homepage_index');
            }

            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\HomepageController::indexAction',  '_route' => 'kountac_homepage_index',);
        }
        not_kountac_homepage_index:

        // pages
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<valeur>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::afficheAction',));
        }

        // kountac_newsletter
        if ('/newsletter_subscribe' === $pathinfo) {
            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\MenuController::newsletterFooterAction',  '_route' => 'kountac_newsletter',);
        }

        if (0 === strpos($pathinfo, '/Cart')) {
            // panier
            if ('/Cart' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_panier;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'panier');
                }

                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
            }
            not_panier:

            // ajoutpanier
            if (0 === strpos($pathinfo, '/Cart/add') && preg_match('#^/Cart/add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutpanier')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PanierController::ajoutpanierAction',));
            }

            // supprimerpanier
            if (0 === strpos($pathinfo, '/Cart/delete') && preg_match('#^/Cart/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerpanier')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PanierController::supprimerpanierAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Devise')) {
            // kountac_devise_cfa
            if ('/Devise/cfa' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::cfaDeviseAction',  '_route' => 'kountac_devise_cfa',);
            }

            // kountac_devise_euro
            if ('/Devise/euro' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::euroDeviseAction',  '_route' => 'kountac_devise_euro',);
            }

            // kountac_devise_all
            if ('/Devise/all' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::allDeviseAction',  '_route' => 'kountac_devise_all',);
            }

            // kountac_devise_livre
            if ('/Devise/livre' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::livreDeviseAction',  '_route' => 'kountac_devise_livre',);
            }

            // kountac_devise_usa
            if ('/Devise/usa' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::usaDeviseAction',  '_route' => 'kountac_devise_usa',);
            }

            // kountac_devise_naira
            if ('/Devise/naira' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DeviseController::nairaDeviseAction',  '_route' => 'kountac_devise_naira',);
            }

        }

        if (0 === strpos($pathinfo, '/Wishlist')) {
            // wishlist
            if ('/Wishlist' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_wishlist;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'wishlist');
                }

                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\WishlistController::wishlistAction',  '_route' => 'wishlist',);
            }
            not_wishlist:

            if (0 === strpos($pathinfo, '/Wishlist/add')) {
                // ajoutwishlist
                if (preg_match('#^/Wishlist/add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutwishlist')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\WishlistController::ajoutwishlistAction',));
                }

                // ajoutToutpanier
                if ('/Wishlist/add_all' === $pathinfo) {
                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\WishlistController::ajoutToutpanierAction',  '_route' => 'ajoutToutpanier',);
                }

            }

            // supprimerwishlist
            if (0 === strpos($pathinfo, '/Wishlist/delete') && preg_match('#^/Wishlist/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerwishlist')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\WishlistController::supprimerwishlistAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Compare')) {
            // compare
            if ('/Compare' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_compare;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'compare');
                }

                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CompareController::compareAction',  '_route' => 'compare',);
            }
            not_compare:

            // ajoutcompare
            if (0 === strpos($pathinfo, '/Compare/add') && preg_match('#^/Compare/add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutcompare')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CompareController::ajoutcompareAction',));
            }

            // supprimercompare
            if (0 === strpos($pathinfo, '/Compare/delete') && preg_match('#^/Compare/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimercompare')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CompareController::supprimercompareAction',));
            }

            if (0 === strpos($pathinfo, '/Compare/wishlist/delete')) {
                // supprimercompareAside
                if (preg_match('#^/Compare/wishlist/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimercompareAside')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CompareController::supprimercompareAsideAction',));
                }

                // supprimercompareAll
                if ('/Compare/wishlist/delete_all' === $pathinfo) {
                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CompareController::supprimercompareAside_allAction',  '_route' => 'supprimercompareAll',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Product')) {
            if (0 === strpos($pathinfo, '/Product/a')) {
                // all_products
                if ('/Product/all' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_all_products;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'all_products');
                    }

                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::allProductsAction',  '_route' => 'all_products',);
                }
                not_all_products:

                // recherche_avatar
                if ('/Product/avatar/find' === $pathinfo) {
                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::recherche_avatarAction',  '_route' => 'recherche_avatar',);
                }

            }

            // recherche_taille_poids
            if ('/Product/taille/find' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::recherche_taillePoidsAction',  '_route' => 'recherche_taille_poids',);
            }

            if (0 === strpos($pathinfo, '/Product/quickView')) {
                // quickViewAllProducts
                if (0 === strpos($pathinfo, '/Product/quickView_all') && preg_match('#^/Product/quickView_all/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_quickViewAllProducts;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'quickViewAllProducts');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickViewAllProducts')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::quickViewAllProductsAction',));
                }
                not_quickViewAllProducts:

                // quickView
                if (preg_match('#^/Product/quickView/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_quickView;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'quickView');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickView')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::quickVueAction',));
                }
                not_quickView:

                // quickViewEspaceMarque
                if (0 === strpos($pathinfo, '/Product/quickView_marque') && preg_match('#^/Product/quickView_marque/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_quickViewEspaceMarque;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'quickViewEspaceMarque');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickViewEspaceMarque')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::quickViewEspaceMarqueAction',));
                }
                not_quickViewEspaceMarque:

            }

            if (0 === strpos($pathinfo, '/Product/mark_space')) {
                // espace_marque
                if (preg_match('#^/Product/mark_space/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_marque')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::espace_marqueAction',));
                }

                if (0 === strpos($pathinfo, '/Product/mark_space_')) {
                    if (0 === strpos($pathinfo, '/Product/mark_space_a')) {
                        // espace_marque_all
                        if (0 === strpos($pathinfo, '/Product/mark_space_all') && preg_match('#^/Product/mark_space_all/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_marque_all')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::espace_marque_allAction',));
                        }

                        // recherche_avatar_marque
                        if (0 === strpos($pathinfo, '/Product/mark_space_avatar/find') && preg_match('#^/Product/mark_space_avatar/find_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_avatar_marque')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::recherche_avatarMarqueAction',));
                        }

                    }

                    // recherche_taille_poids_marque
                    if (0 === strpos($pathinfo, '/Product/mark_space_taille/find') && preg_match('#^/Product/mark_space_taille/find_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_taille_poids_marque')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::recherche_taillePoidsMarqueAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Product/single')) {
                // product
                if (preg_match('#^/Product/single/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_product;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'product');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::productAction',));
                }
                not_product:

                // product_mannequin
                if (0 === strpos($pathinfo, '/Product/single_mannequin') && preg_match('#^/Product/single_mannequin/(?P<id>[^/_]++)_(?P<id_image>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_product_mannequin;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'product_mannequin');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_mannequin')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::productMannequinAction',));
                }
                not_product_mannequin:

            }

            if (0 === strpos($pathinfo, '/Product/c')) {
                if (0 === strpos($pathinfo, '/Product/catalog_')) {
                    // categorie_2
                    if (0 === strpos($pathinfo, '/Product/catalog_2') && preg_match('#^/Product/catalog_2/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_categorie_2;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'categorie_2');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_2')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::categorie_2Action',));
                    }
                    not_categorie_2:

                    // categorie_1
                    if (0 === strpos($pathinfo, '/Product/catalog_1') && preg_match('#^/Product/catalog_1/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_categorie_1;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'categorie_1');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_1')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::categorie_1Action',));
                    }
                    not_categorie_1:

                    // new_categorie
                    if (0 === strpos($pathinfo, '/Product/catalog_new') && preg_match('#^/Product/catalog_new/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_new_categorie;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'new_categorie');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_categorie')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\MenuController::newAction',));
                    }
                    not_new_categorie:

                    // best_categorie
                    if (0 === strpos($pathinfo, '/Product/catalog_destockage') && preg_match('#^/Product/catalog_destockage/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_best_categorie;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'best_categorie');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'best_categorie')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\MenuController::destockageAction',));
                    }
                    not_best_categorie:

                }

                // collection
                if (0 === strpos($pathinfo, '/Product/collection') && preg_match('#^/Product/collection/(?P<collection>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_collection;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'collection');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::collectionAction',));
                }
                not_collection:

            }

            // idees_look
            if (0 === strpos($pathinfo, '/Product/idees_look') && preg_match('#^/Product/idees_look/(?P<look>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_idees_look;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'idees_look');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'idees_look')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::lookAction',));
            }
            not_idees_look:

            // precommande
            if (0 === strpos($pathinfo, '/Product/precommand') && preg_match('#^/Product/precommand/(?P<precommande>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_precommande;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'precommande');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'precommande')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PrecommandeController::precommandesAction',));
            }
            not_precommande:

            if (0 === strpos($pathinfo, '/Product/destockages')) {
                if (0 === strpos($pathinfo, '/Product/destockagesFemmes')) {
                    // femmes_destockage
                    if ('/Product/destockagesFemmes' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_femmes_destockage;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'femmes_destockage');
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::femmesAction',  '_route' => 'femmes_destockage',);
                    }
                    not_femmes_destockage:

                    if (0 === strpos($pathinfo, '/Product/destockagesFemmes_')) {
                        // femmes_destockageHauts
                        if ('/Product/destockagesFemmes_Hauts' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_femmes_destockageHauts;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'femmes_destockageHauts');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::femmesHautsAction',  '_route' => 'femmes_destockageHauts',);
                        }
                        not_femmes_destockageHauts:

                        // femmes_destockageBas
                        if ('/Product/destockagesFemmes_Bas' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_femmes_destockageBas;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'femmes_destockageBas');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::femmesBasAction',  '_route' => 'femmes_destockageBas',);
                        }
                        not_femmes_destockageBas:

                        // femmes_destockageEnsembles
                        if ('/Product/destockagesFemmes_Ensembles' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_femmes_destockageEnsembles;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'femmes_destockageEnsembles');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::femmesEnsemblesAction',  '_route' => 'femmes_destockageEnsembles',);
                        }
                        not_femmes_destockageEnsembles:

                    }

                }

                if (0 === strpos($pathinfo, '/Product/destockagesHommes')) {
                    // hommes_destockage
                    if ('/Product/destockagesHommes' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_hommes_destockage;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'hommes_destockage');
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::hommesAction',  '_route' => 'hommes_destockage',);
                    }
                    not_hommes_destockage:

                    if (0 === strpos($pathinfo, '/Product/destockagesHommes_')) {
                        // hommes_destockageHauts
                        if ('/Product/destockagesHommes_Hauts' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_hommes_destockageHauts;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'hommes_destockageHauts');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::hommesHautsAction',  '_route' => 'hommes_destockageHauts',);
                        }
                        not_hommes_destockageHauts:

                        // hommes_destockageBas
                        if ('/Product/destockagesHommes_Bas' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_hommes_destockageBas;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'hommes_destockageBas');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::hommesBasAction',  '_route' => 'hommes_destockageBas',);
                        }
                        not_hommes_destockageBas:

                        // hommes_destockageEnsembles
                        if ('/Product/destockagesHommes_Ensembles' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_hommes_destockageEnsembles;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'hommes_destockageEnsembles');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::hommesEnsemblesAction',  '_route' => 'hommes_destockageEnsembles',);
                        }
                        not_hommes_destockageEnsembles:

                    }

                }

                if (0 === strpos($pathinfo, '/Product/destockagesEnfants')) {
                    // enfants_destockage
                    if ('/Product/destockagesEnfants' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_enfants_destockage;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'enfants_destockage');
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::enfantsAction',  '_route' => 'enfants_destockage',);
                    }
                    not_enfants_destockage:

                    if (0 === strpos($pathinfo, '/Product/destockagesEnfants_')) {
                        // enfants_destockageHauts
                        if ('/Product/destockagesEnfants_Hauts' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_enfants_destockageHauts;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'enfants_destockageHauts');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::enfantsHautsAction',  '_route' => 'enfants_destockageHauts',);
                        }
                        not_enfants_destockageHauts:

                        // enfants_destockageBas
                        if ('/Product/destockagesEnfants_Bas' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_enfants_destockageBas;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'enfants_destockageBas');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::enfantsBasAction',  '_route' => 'enfants_destockageBas',);
                        }
                        not_enfants_destockageBas:

                        // enfants_destockageEnsembles
                        if ('/Product/destockagesEnfants_Ensembles' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_enfants_destockageEnsembles;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'enfants_destockageEnsembles');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\DestockageCategorieController::enfantsEnsemblesAction',  '_route' => 'enfants_destockageEnsembles',);
                        }
                        not_enfants_destockageEnsembles:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/Product/sur')) {
                if (0 === strpos($pathinfo, '/Product/surmesure')) {
                    if (0 === strpos($pathinfo, '/Product/surmesureFemmes')) {
                        // femmes_surmesure
                        if ('/Product/surmesureFemmes' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_femmes_surmesure;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'femmes_surmesure');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::femmesAction',  '_route' => 'femmes_surmesure',);
                        }
                        not_femmes_surmesure:

                        if (0 === strpos($pathinfo, '/Product/surmesureFemmes_')) {
                            // femmes_surmesureHauts
                            if ('/Product/surmesureFemmes_Hauts' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_femmes_surmesureHauts;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'femmes_surmesureHauts');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::femmesHautsAction',  '_route' => 'femmes_surmesureHauts',);
                            }
                            not_femmes_surmesureHauts:

                            // femmes_surmesureBas
                            if ('/Product/surmesureFemmes_Bas' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_femmes_surmesureBas;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'femmes_surmesureBas');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::femmesBasAction',  '_route' => 'femmes_surmesureBas',);
                            }
                            not_femmes_surmesureBas:

                            // femmes_surmesureEnsembles
                            if ('/Product/surmesureFemmes_Ensembles' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_femmes_surmesureEnsembles;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'femmes_surmesureEnsembles');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::femmesEnsemblesAction',  '_route' => 'femmes_surmesureEnsembles',);
                            }
                            not_femmes_surmesureEnsembles:

                        }

                    }

                    if (0 === strpos($pathinfo, '/Product/surmesureHommes')) {
                        // hommes_surmesure
                        if ('/Product/surmesureHommes' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_hommes_surmesure;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'hommes_surmesure');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::hommesAction',  '_route' => 'hommes_surmesure',);
                        }
                        not_hommes_surmesure:

                        if (0 === strpos($pathinfo, '/Product/surmesureHommes_')) {
                            // hommes_surmesureHauts
                            if ('/Product/surmesureHommes_Hauts' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_hommes_surmesureHauts;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'hommes_surmesureHauts');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::hommesHautsAction',  '_route' => 'hommes_surmesureHauts',);
                            }
                            not_hommes_surmesureHauts:

                            // hommes_surmesureBas
                            if ('/Product/surmesureHommes_Bas' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_hommes_surmesureBas;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'hommes_surmesureBas');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::hommesBasAction',  '_route' => 'hommes_surmesureBas',);
                            }
                            not_hommes_surmesureBas:

                            // hommes_surmesureEnsembles
                            if ('/Product/surmesureHommes_Ensembles' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_hommes_surmesureEnsembles;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'hommes_surmesureEnsembles');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::hommesEnsemblesAction',  '_route' => 'hommes_surmesureEnsembles',);
                            }
                            not_hommes_surmesureEnsembles:

                        }

                    }

                    if (0 === strpos($pathinfo, '/Product/surmesureEnfants')) {
                        // enfants_surmesure
                        if ('/Product/surmesureEnfants' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_enfants_surmesure;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'enfants_surmesure');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::enfantsAction',  '_route' => 'enfants_surmesure',);
                        }
                        not_enfants_surmesure:

                        if (0 === strpos($pathinfo, '/Product/surmesureEnfants_')) {
                            // enfants_surmesureHauts
                            if ('/Product/surmesureEnfants_Hauts' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_enfants_surmesureHauts;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'enfants_surmesureHauts');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::enfantsHautsAction',  '_route' => 'enfants_surmesureHauts',);
                            }
                            not_enfants_surmesureHauts:

                            // enfants_surmesureBas
                            if ('/Product/surmesureEnfants_Bas' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_enfants_surmesureBas;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'enfants_surmesureBas');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::enfantsBasAction',  '_route' => 'enfants_surmesureBas',);
                            }
                            not_enfants_surmesureBas:

                            // enfants_surmesureEnsembles
                            if ('/Product/surmesureEnfants_Ensembles' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_enfants_surmesureEnsembles;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'enfants_surmesureEnsembles');
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::enfantsEnsemblesAction',  '_route' => 'enfants_surmesureEnsembles',);
                            }
                            not_enfants_surmesureEnsembles:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/Product/sur_mesures')) {
                    // sur_mesures_categories
                    if (preg_match('#^/Product/sur_mesures/(?P<surmesure>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_sur_mesures_categories;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'sur_mesures_categories');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sur_mesures_categories')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::surMesuresCatAction',));
                    }
                    not_sur_mesures_categories:

                    if (0 === strpos($pathinfo, '/Product/sur_mesures_')) {
                        // new_sur_mesures_categories
                        if ('/Product/sur_mesures_news' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_new_sur_mesures_categories;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'new_sur_mesures_categories');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::newAction',  '_route' => 'new_sur_mesures_categories',);
                        }
                        not_new_sur_mesures_categories:

                        // best_sur_mesures_categories
                        if ('/Product/sur_mesures_soldes' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_best_sur_mesures_categories;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'best_sur_mesures_categories');
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\SurMesuresCategorieController::bestAction',  '_route' => 'best_sur_mesures_categories',);
                        }
                        not_best_sur_mesures_categories:

                    }

                }

            }

            // rechercheProduits
            if ('/Product/find' === $pathinfo) {
                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
            }

        }

        if (0 === strpos($pathinfo, '/Reserve')) {
            // reserve_new
            if (0 === strpos($pathinfo, '/Reserve/new') && preg_match('#^/Reserve/new_(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_reserve_new;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'reserve_new');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserve_new')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationsController::newAction',));
            }
            not_reserve_new:

            // reserve_delete
            if (0 === strpos($pathinfo, '/Reserve/delete') && preg_match('#^/Reserve/delete_(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_reserve_delete;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'reserve_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserve_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationsController::deleteAction',));
            }
            not_reserve_delete:

            // reserve_index
            if ('/Reserve' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_reserve_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'reserve_index');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationsController::indexAction',  '_route' => 'reserve_index',);
            }
            not_reserve_index:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/admin')) {
                if (0 === strpos($pathinfo, '/admin/adminC')) {
                    if (0 === strpos($pathinfo, '/admin/adminCategories')) {
                        // adminCategories_index
                        if ('/admin/adminCategories' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_adminCategories_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'adminCategories_index');
                            }

                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_adminCategories_index;
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories_index',);
                        }
                        not_adminCategories_index:

                        // adminCategories_new
                        if ('/admin/adminCategories/new' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_adminCategories_new;
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                        }
                        not_adminCategories_new:

                        // adminCategories_edit
                        if (preg_match('#^/admin/adminCategories/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_adminCategories_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CategoriesAdminController::editAction',));
                        }
                        not_adminCategories_edit:

                        // adminCategories_delete
                        if (preg_match('#^/admin/adminCategories/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CategoriesAdminController::deleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/adminCo')) {
                        if (0 === strpos($pathinfo, '/admin/adminCollections')) {
                            // adminCollections_index
                            if ('/admin/adminCollections' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_adminCollections_index;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'adminCollections_index');
                                }

                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_adminCollections_index;
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CollectionsAdminController::indexAction',  '_route' => 'adminCollections_index',);
                            }
                            not_adminCollections_index:

                            // adminCollections_new
                            if ('/admin/adminCollections/new' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminCollections_new;
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CollectionsAdminController::newAction',  '_route' => 'adminCollections_new',);
                            }
                            not_adminCollections_new:

                            // adminCollections_edit
                            if (preg_match('#^/admin/adminCollections/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminCollections_edit;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCollections_edit')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CollectionsAdminController::editAction',));
                            }
                            not_adminCollections_edit:

                            // adminCollections_delete
                            if (preg_match('#^/admin/adminCollections/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCollections_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CollectionsAdminController::deleteAction',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/adminCommandes')) {
                            // adminCommandes_index
                            if ('/admin/adminCommandes' === rtrim($pathinfo, '/')) {
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                    goto not_adminCommandes_index;
                                } else {
                                    return $this->redirect($rawPathinfo.'/', 'adminCommandes_index');
                                }

                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_adminCommandes_index;
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::indexAction',  '_route' => 'adminCommandes_index',);
                            }
                            not_adminCommandes_index:

                            // adminCommandes_show
                            if (preg_match('#^/admin/adminCommandes/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommandes_show')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::showAction',));
                            }

                            // adminCommandes_mesures_new
                            if ('/admin/adminCommandes/new_mesures' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminCommandes_mesures_new;
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::newMesuresAction',  '_route' => 'adminCommandes_mesures_new',);
                            }
                            not_adminCommandes_mesures_new:

                            // adminCommandes_mesures_validation
                            if ('/admin/adminCommandes/validation_mesures' === $pathinfo) {
                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::validationMesureAction',  '_route' => 'adminCommandes_mesures_validation',);
                            }

                            // adminCommandes_new
                            if ('/admin/adminCommandes/new' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminCommandes_new;
                                }

                                return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::newAction',  '_route' => 'adminCommandes_new',);
                            }
                            not_adminCommandes_new:

                            // adminCommandes_edit
                            if (preg_match('#^/admin/adminCommandes/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminCommandes_edit;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommandes_edit')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::editAction',));
                            }
                            not_adminCommandes_edit:

                            // adminCommandes_delete
                            if (preg_match('#^/admin/adminCommandes/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommandes_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::deleteAction',));
                            }

                            // adminCommandes_envoyer
                            if (preg_match('#^/admin/adminCommandes/(?P<id>[^/_]++)_envoyer$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommandes_envoyer')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::envoyerAction',));
                            }

                            // adminCommandes_livrer
                            if (preg_match('#^/admin/adminCommandes/(?P<id>[^/_]++)_livrer$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommandes_livrer')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\CommandesAdminController::livrerAction',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/adminProduits')) {
                    // adminProduits_index
                    if ('/admin/adminProduits' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_adminProduits_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'adminProduits_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminProduits_index;
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'adminProduits_index',);
                    }
                    not_adminProduits_index:

                    // adminProduits_show
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::showAction',));
                    }
                    not_adminProduits_show:

                    if (0 === strpos($pathinfo, '/admin/adminProduits/new')) {
                        // adminProduits_new
                        if ('/admin/adminProduits/new' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_adminProduits_new;
                            }

                            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::new1Action',  '_route' => 'adminProduits_new',);
                        }
                        not_adminProduits_new:

                        // adminProduits_new2
                        if (0 === strpos($pathinfo, '/admin/adminProduits/new2') && preg_match('#^/admin/adminProduits/new2_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_new2')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::new2Action',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/adminProduits/add_new_')) {
                        // adminProduits_new3
                        if (0 === strpos($pathinfo, '/admin/adminProduits/add_new_taille') && preg_match('#^/admin/adminProduits/add_new_taille_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_new3')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::new3Action',));
                        }

                        if (0 === strpos($pathinfo, '/admin/adminProduits/add_new_m')) {
                            // adminProduits_new_motif
                            if (0 === strpos($pathinfo, '/admin/adminProduits/add_new_motif') && preg_match('#^/admin/adminProduits/add_new_motif_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminProduits_new_motif;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_new_motif')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::addMotifAction',));
                            }
                            not_adminProduits_new_motif:

                            // adminProduits_new_mannequin
                            if (0 === strpos($pathinfo, '/admin/adminProduits/add_new_mannequin') && preg_match('#^/admin/adminProduits/add_new_mannequin_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_adminProduits_new_mannequin;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_new_mannequin')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::addMannequinAction',));
                            }
                            not_adminProduits_new_mannequin:

                        }

                    }

                    // adminProduits_new_resume
                    if (0 === strpos($pathinfo, '/admin/adminProduits/new_resume') && preg_match('#^/admin/adminProduits/new_resume_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_new_resume;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_new_resume')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::newResumeAction',));
                    }
                    not_adminProduits_new_resume:

                    // adminProduits_edit_1
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_1$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_1')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::edit_1Action',));
                    }
                    not_adminProduits_edit_1:

                    // adminProduits_edit_2
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_2$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_2')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::edit_2Action',));
                    }
                    not_adminProduits_edit_2:

                    // adminProduits_edit_21
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_21$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_21;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_21')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::edit_21Action',));
                    }
                    not_adminProduits_edit_21:

                    // adminProduits_edit_3
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_3$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_3;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_3')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::edit_3Action',));
                    }
                    not_adminProduits_edit_3:

                    // adminProduits_edit_31
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_31$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_31;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_31')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::edit_31Action',));
                    }
                    not_adminProduits_edit_31:

                    // adminProduits_edit_pays
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/edit_pays$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_edit_pays;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit_pays')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::editPaysAction',));
                    }
                    not_adminProduits_edit_pays:

                    // adminProduits_stock_epuise
                    if ('/admin/adminProduits/stock_épuisé' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_adminProduits_stock_epuise;
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::stockAction',  '_route' => 'adminProduits_stock_epuise',);
                    }
                    not_adminProduits_stock_epuise:

                    // adminProduits_add_stock
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/add_stock$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_add_stock;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_add_stock')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::addStockAction',));
                    }
                    not_adminProduits_add_stock:

                    // adminProduits_add_prix_commande_cfa
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/add_prix_commande_cfa$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_adminProduits_add_prix_commande_cfa;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_add_prix_commande_cfa')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::addprixCommandeCfaAction',));
                    }
                    not_adminProduits_add_prix_commande_cfa:

                    // adminProduits_delete
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::deleteAction',));
                    }

                    // adminProduits_deleteMotif
                    if (preg_match('#^/admin/adminProduits/(?P<id>[^/]++)/delete_Motif$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_deleteMotif')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\ProduitsAdminController::deleteMotifAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/adminAchats')) {
                    // adminAchats_index
                    if ('/admin/adminAchats' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_adminAchats_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'adminAchats_index');
                        }

                        return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\AchatsAdminController::indexAction',  '_route' => 'adminAchats_index',);
                    }
                    not_adminAchats_index:

                    // adminAchats_delete
                    if (preg_match('#^/admin/adminAchats/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAchats_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\AchatsAdminController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/Newsletters')) {
                // adminNewsletters_index
                if ('/admin/Newsletters' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_adminNewsletters_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'adminNewsletters_index');
                    }

                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\NewslettersAdminController::indexAction',  '_route' => 'adminNewsletters_index',);
                }
                not_adminNewsletters_index:

                // adminNewsletters_delete
                if (preg_match('#^/admin/Newsletters/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminNewsletters_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\NewslettersAdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/Pages')) {
                // adminPages_index
                if ('/admin/Pages' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_adminPages_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'adminPages_index');
                    }

                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages_index',);
                }
                not_adminPages_index:

                // adminPages_ajouter
                if ('/admin/Pages/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminPages_ajouter;
                    }

                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_ajouter',);
                }
                not_adminPages_ajouter:

                // adminPages_images
                if ('/admin/Pages/image' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminPages_images;
                    }

                    return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::imageAction',  '_route' => 'adminPages_images',);
                }
                not_adminPages_images:

                // adminPages_delete
                if (preg_match('#^/admin/Pages/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::deleteAction',));
                }

                // adminPages_edit
                if (preg_match('#^/admin/Pages/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminPages_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\PagesAdminController::editAction',));
                }
                not_adminPages_edit:

            }

        }

        // localisation
        if ('/localisation' === $pathinfo) {
            return array (  '_controller' => 'Kountac\\KountacBundle\\Controller\\HomepageController::localisationAction',  '_route' => 'localisation',);
        }

        // kountac_pop_up_registration
        if ('/registration_pop_up' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_kountac_pop_up_registration;
            }

            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::registerPopUPAction',  '_route' => 'kountac_pop_up_registration',);
        }
        not_kountac_pop_up_registration:

        if (0 === strpos($pathinfo, '/profile')) {
            if (0 === strpos($pathinfo, '/profile/Commande')) {
                // commande_index
                if ('/profile/Commande' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_commande_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'commande_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_commande_index;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande_index',);
                }
                not_commande_index:

                // commande_new
                if ('/profile/Commande/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_commande_new;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::newAction',  '_route' => 'commande_new',);
                }
                not_commande_new:

                // commande_show
                if (preg_match('#^/profile/Commande/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_commande_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::showAction',));
                }
                not_commande_show:

                // commande_edit
                if (preg_match('#^/profile/Commande/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_commande_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_edit')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::editAction',));
                }
                not_commande_edit:

                // commande_delete
                if (preg_match('#^/profile/Commande/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::deleteAction',));
                }

                // commande_mesures_new
                if ('/profile/Commande/new_mesures' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_commande_mesures_new;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::newMesuresAction',  '_route' => 'commande_mesures_new',);
                }
                not_commande_mesures_new:

                // commande_mesures_validation
                if ('/profile/Commande/validation_mesures' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::validationMesureAction',  '_route' => 'commande_mesures_validation',);
                }

                // commande_mesures_delete
                if (preg_match('#^/profile/Commande/(?P<id>[^/]++)/delete_mesures$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_mesures_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::deleteMesuresAction',));
                }

                // commande_livrer
                if (preg_match('#^/profile/Commande/(?P<id>[^/]++)/livrer$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_livrer')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeController::livrerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/profile/Mesures')) {
                // mesures_index
                if ('/profile/Mesures' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_mesures_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'mesures_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mesures_index;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MesuresController::indexAction',  '_route' => 'mesures_index',);
                }
                not_mesures_index:

                // mesures_new
                if ('/profile/Mesures/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mesures_new;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MesuresController::newAction',  '_route' => 'mesures_new',);
                }
                not_mesures_new:

                // mesures_edit
                if (preg_match('#^/profile/Mesures/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mesures_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesures_edit')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MesuresController::editAction',));
                }
                not_mesures_edit:

                // mesures_delete
                if (preg_match('#^/profile/Mesures/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesures_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MesuresController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/profile/achat')) {
                // resume_achat
                if ('/profile/achat/resume' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\AchatController::resumeAchatAction',  '_route' => 'resume_achat',);
                }

                // validation_achat_final
                if (0 === strpos($pathinfo, '/profile/achat/api/banque') && preg_match('#^/profile/achat/api/banque_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_achat_final')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\AchatController::validationAchatFinalAction',));
                }

                // achat_index
                if ('/profile/achat/mes_achats' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\AchatController::achatIndexAction',  '_route' => 'achat_index',);
                }

                // achat_delete
                if (0 === strpos($pathinfo, '/profile/achat/supprimer') && preg_match('#^/profile/achat/supprimer_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'achat_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\AchatController::achatDeleteAction',));
                }

                // facture_PDF
                if (0 === strpos($pathinfo, '/profile/achat/facture_pdf') && preg_match('#^/profile/achat/facture_pdf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_PDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\AchatController::facturePDFAction',));
                }

            }

            if (0 === strpos($pathinfo, '/profile/Command_item')) {
                if (0 === strpos($pathinfo, '/profile/Command_item/new_')) {
                    // commande_new_item
                    if (0 === strpos($pathinfo, '/profile/Command_item/new_item') && preg_match('#^/profile/Command_item/new_item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_commande_new_item;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_new_item')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeItemController::newAction',));
                    }
                    not_commande_new_item:

                    // commande_mesures_new_item
                    if (0 === strpos($pathinfo, '/profile/Command_item/new_mesures_item') && preg_match('#^/profile/Command_item/new_mesures_item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_commande_mesures_new_item;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_mesures_new_item')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeItemController::newMesuresAction',));
                    }
                    not_commande_mesures_new_item:

                }

                // commande_mesures_validation_item
                if (0 === strpos($pathinfo, '/profile/Command_item/validation_mesures_item') && preg_match('#^/profile/Command_item/validation_mesures_item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_mesures_validation_item')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeItemController::validationMesureAction',));
                }

                // commande_mesures_delete_item
                if (preg_match('#^/profile/Command_item/(?P<id>[^/_]++)_(?P<idMesure>[^/]++)/delete_mesures_item$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_mesures_delete_item')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeItemController::deleteMesuresAction',));
                }

                // commande_delete_item
                if (preg_match('#^/profile/Command_item/(?P<id>[^/]++)/delete_item$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete_item')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeItemController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/profile_pro')) {
                if (0 === strpos($pathinfo, '/profile_pro/Command')) {
                    // commande_pro_index
                    if ('/profile_pro/Command' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_commande_pro_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'commande_pro_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_commande_pro_index;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::indexAction',  '_route' => 'commande_pro_index',);
                    }
                    not_commande_pro_index:

                    if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance')) {
                        // sous_achat_pro_index
                        if ('/profile_pro/Command/achat-en-instance' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_sous_achat_pro_index;
                            }

                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::sousAchatAction',  '_route' => 'sous_achat_pro_index',);
                        }
                        not_sous_achat_pro_index:

                        // details_sous_achat
                        if (preg_match('#^/profile_pro/Command/achat\\-en\\-instance/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_details_sous_achat;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::sousAchatByIdAction',));
                        }
                        not_details_sous_achat:

                        // accepter_sous_achat
                        if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/accepter') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/accepter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_accepter_sous_achat;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepter_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::accepterSousAchatAction',));
                        }
                        not_accepter_sous_achat:

                        // livraison_sous_achat
                        if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/livraison') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/livraison/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_livraison_sous_achat;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::livraisonSousAchatAction',));
                        }
                        not_livraison_sous_achat:

                        // compteRebours
                        if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/compteRebours') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/compteRebours/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_compteRebours;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'compteRebours')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::echeanceSousAchatAction',));
                        }
                        not_compteRebours:

                        if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/d')) {
                            // disable_livraison_sous_achat
                            if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/disable_livraison') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/disable_livraison/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_disable_livraison_sous_achat;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_livraison_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::disableLivraisonSousAchatAction',));
                            }
                            not_disable_livraison_sous_achat:

                            // delai_sous_achat
                            if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/delai_livraison') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/delai_livraison/(?P<nbr>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_delai_sous_achat;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delai_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::delaiLivraisonSousAchatAction',));
                            }
                            not_delai_sous_achat:

                        }

                        // expedier_sous_achat
                        if (0 === strpos($pathinfo, '/profile_pro/Command/achat-en-instance/expedier_livraison') && preg_match('#^/profile_pro/Command/achat\\-en\\-instance/expedier_livraison/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_expedier_sous_achat;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'expedier_sous_achat')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::expedierLivraisonSousAchatAction',));
                        }
                        not_expedier_sous_achat:

                    }

                    // commande_pro_show
                    if (preg_match('#^/profile_pro/Command/(?P<id>[^/_]++)_show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_commande_pro_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_pro_show')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::showAction',));
                    }
                    not_commande_pro_show:

                    // commande_pro_delete
                    if (preg_match('#^/profile_pro/Command/(?P<id>[^/_]++)_delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_pro_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::deleteAction',));
                    }

                    // commande_pro_envoyer
                    if (preg_match('#^/profile_pro/Command/(?P<id>[^/_]++)_envoyer$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_pro_envoyer')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommandeProController::envoyerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/profile_pro/Product')) {
                    // produit_pro_index
                    if ('/profile_pro/Product' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_produit_pro_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'produit_pro_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_pro_index;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::indexAction',  '_route' => 'produit_pro_index',);
                    }
                    not_produit_pro_index:

                    if (0 === strpos($pathinfo, '/profile_pro/Product/new_')) {
                        // produit_pro_new_1
                        if ('/profile_pro/Product/new_1' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_1;
                            }

                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new1Action',  '_route' => 'produit_pro_new_1',);
                        }
                        not_produit_pro_new_1:

                        // produit_pro_new_edit1
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_edit_1') && preg_match('#^/profile_pro/Product/new_edit_1(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_edit1;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_edit1')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new_edit1Action',));
                        }
                        not_produit_pro_new_edit1:

                        // produit_pro_new_2
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_2') && preg_match('#^/profile_pro/Product/new_2_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_2;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_2')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new2Action',));
                        }
                        not_produit_pro_new_2:

                        // produit_pro_new_edit2
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_edit_2') && preg_match('#^/profile_pro/Product/new_edit_2(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_edit2;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_edit2')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new_edit2Action',));
                        }
                        not_produit_pro_new_edit2:

                        // produit_pro_new_mannequin
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_mannequin') && preg_match('#^/profile_pro/Product/new_mannequin_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_mannequin;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_mannequin')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::addMannequinAction',));
                        }
                        not_produit_pro_new_mannequin:

                        // produit_pro_new_images_mannequin
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_images_mannequin') && preg_match('#^/profile_pro/Product/new_images_mannequin_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_images_mannequin;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_images_mannequin')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::addImagesMannequinAction',));
                        }
                        not_produit_pro_new_images_mannequin:

                    }

                    // produit_pro_edit_images_mannequin
                    if (0 === strpos($pathinfo, '/profile_pro/Product/edit_images_mannequin') && preg_match('#^/profile_pro/Product/edit_images_mannequin_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_images_mannequin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_images_mannequin')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\FormulairesController::addImagesMannequinAction',));
                    }
                    not_produit_pro_edit_images_mannequin:

                    if (0 === strpos($pathinfo, '/profile_pro/Product/set_images_mannequin_')) {
                        // produit_pro_set_images_top_new
                        if (0 === strpos($pathinfo, '/profile_pro/Product/set_images_mannequin_Newtop') && preg_match('#^/profile_pro/Product/set_images_mannequin_Newtop(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_set_images_top_new;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_set_images_top_new')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::setTopMannequinNewProduitAction',));
                        }
                        not_produit_pro_set_images_top_new:

                        // produit_pro_set_images_top
                        if (0 === strpos($pathinfo, '/profile_pro/Product/set_images_mannequin_top') && preg_match('#^/profile_pro/Product/set_images_mannequin_top(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_set_images_top;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_set_images_top')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::setTopMannequinAction',));
                        }
                        not_produit_pro_set_images_top:

                    }

                    if (0 === strpos($pathinfo, '/profile_pro/Product/new')) {
                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_')) {
                            // produit_pro_new_motif
                            if ('/profile_pro/Product/new_pro_motif' === $pathinfo) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_produit_pro_new_motif;
                                }

                                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::addNewMotifAction',  '_route' => 'produit_pro_new_motif',);
                            }
                            not_produit_pro_new_motif:

                            // produit_pro_new_3
                            if (0 === strpos($pathinfo, '/profile_pro/Product/new_3') && preg_match('#^/profile_pro/Product/new_3_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_produit_pro_new_3;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_3')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new3Action',));
                            }
                            not_produit_pro_new_3:

                            // produit_pro_new_edit3
                            if (0 === strpos($pathinfo, '/profile_pro/Product/new_edit_3') && preg_match('#^/profile_pro/Product/new_edit_3(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_produit_pro_new_edit3;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_edit3')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new_edit3Action',));
                            }
                            not_produit_pro_new_edit3:

                        }

                        // produit_pro_new_delete_image
                        if (0 === strpos($pathinfo, '/profile_pro/Product/newDelete_image') && preg_match('#^/profile_pro/Product/newDelete_image(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_produit_pro_new_delete_image;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_delete_image')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::deleteNewImagesAction',));
                        }
                        not_produit_pro_new_delete_image:

                        if (0 === strpos($pathinfo, '/profile_pro/Product/new_')) {
                            // produit_pro_new_4
                            if (0 === strpos($pathinfo, '/profile_pro/Product/new_4') && preg_match('#^/profile_pro/Product/new_4_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_produit_pro_new_4;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_4')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::new4Action',));
                            }
                            not_produit_pro_new_4:

                            // produit_pro_new_resume
                            if (0 === strpos($pathinfo, '/profile_pro/Product/new_resume') && preg_match('#^/profile_pro/Product/new_resume_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_produit_pro_new_resume;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_new_resume')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::newResumeAction',));
                            }
                            not_produit_pro_new_resume:

                        }

                    }

                    // produit_pro_show
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_show')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::showAction',));
                    }
                    not_produit_pro_show:

                    // produit_pro_edit_1
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_1$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_1')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::edit_1Action',));
                    }
                    not_produit_pro_edit_1:

                    // produit_pro_edit_2
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_2$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_2;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_2')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::edit_2Action',));
                    }
                    not_produit_pro_edit_2:

                    // produit_pro_edit_21
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_21$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_21;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_21')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::edit_21Action',));
                    }
                    not_produit_pro_edit_21:

                    // produit_pro_edit_3
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_3$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_3;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_3')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::edit_3Action',));
                    }
                    not_produit_pro_edit_3:

                    // produit_pro_edit_31
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_31$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_31;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_31')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::edit_31Action',));
                    }
                    not_produit_pro_edit_31:

                    // produit_pro_edit_pays
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/edit_pays$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_pro_edit_pays;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_edit_pays')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::editPaysAction',));
                    }
                    not_produit_pro_edit_pays:

                    // produit_pro_delete
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::deleteAction',));
                    }

                    // produit_pro_delete_motif
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/delete_motif$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_delete_motif')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::deleteMotifAction',));
                    }

                    // produit_pro_delete_images
                    if (preg_match('#^/profile_pro/Product/(?P<id>[^/]++)/delete_images$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_pro_delete_images')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::deleteImagesAction',));
                    }

                    // produit_pro_stock_epuise
                    if ('/profile_pro/Product/stock_épuisé' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_pro_stock_epuise;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::stockAction',  '_route' => 'produit_pro_stock_epuise',);
                    }
                    not_produit_pro_stock_epuise:

                    if (0 === strpos($pathinfo, '/profile_pro/Product/product_')) {
                        // produit_pro_sale
                        if ('/profile_pro/Product/product_sales' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_pro_sale;
                            }

                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::saleAction',  '_route' => 'produit_pro_sale',);
                        }
                        not_produit_pro_sale:

                        // produit_pro_image
                        if ('/profile_pro/Product/product_images' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_produit_pro_image;
                            }

                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProduitProController::imageAction',  '_route' => 'produit_pro_image',);
                        }
                        not_produit_pro_image:

                    }

                }

                if (0 === strpos($pathinfo, '/profile_pro/Reservations')) {
                    // reservation_pro_all
                    if ('/profile_pro/Reservations/all' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_reservation_pro_all;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationsProController::allAction',  '_route' => 'reservation_pro_all',);
                    }
                    not_reservation_pro_all:

                    // reservation_pro_index
                    if ('/profile_pro/Reservations' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_reservation_pro_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'reservation_pro_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_reservation_pro_index;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationsProController::indexAction',  '_route' => 'reservation_pro_index',);
                    }
                    not_reservation_pro_index:

                }

                if (0 === strpos($pathinfo, '/profile_pro/Mannequins')) {
                    // mannequin_pro_index
                    if ('/profile_pro/Mannequins' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_mannequin_pro_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'mannequin_pro_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mannequin_pro_index;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MannequinsProController::indexAction',  '_route' => 'mannequin_pro_index',);
                    }
                    not_mannequin_pro_index:

                    // mannequin_pro_new
                    if ('/profile_pro/Mannequins/add' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mannequin_pro_new;
                        }

                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MannequinsProController::newAction',  '_route' => 'mannequin_pro_new',);
                    }
                    not_mannequin_pro_new:

                    // mannequin_pro_edit
                    if (0 === strpos($pathinfo, '/profile_pro/Mannequins/edit') && preg_match('#^/profile_pro/Mannequins/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mannequin_pro_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mannequin_pro_edit')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MannequinsProController::editAction',));
                    }
                    not_mannequin_pro_edit:

                    // mannequin_pro_delete
                    if (preg_match('#^/profile_pro/Mannequins/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mannequin_pro_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MannequinsProController::deleteAction',));
                    }

                    // mannequin_pro_produitNew
                    if (0 === strpos($pathinfo, '/profile_pro/Mannequins/new_produit') && preg_match('#^/profile_pro/Mannequins/new_produit_(?P<id>[^/]+)(?P<id_motif>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mannequin_pro_produitNew;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mannequin_pro_produitNew')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\MannequinsProController::new_produit_mannequinAction',));
                    }
                    not_mannequin_pro_produitNew:

                }

            }

            if (0 === strpos($pathinfo, '/profile/checkout')) {
                // Checkout_index1
                if ('/profile/checkout/1' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CheckoutController::indexAction',  '_route' => 'Checkout_index1',);
                }

                // Checkout_index2
                if ('/profile/checkout/2' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CheckoutController::index2Action',  '_route' => 'Checkout_index2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/adminUtilisateurs')) {
            // adminUtilisateurs_index
            if ('/admin/adminUtilisateurs' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_adminUtilisateurs_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'adminUtilisateurs_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminUtilisateurs_index;
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'adminUtilisateurs_index',);
            }
            not_adminUtilisateurs_index:

            // adminUtilisateurs_enabled
            if (0 === strpos($pathinfo, '/admin/adminUtilisateurs/enabled') && preg_match('#^/admin/adminUtilisateurs/enabled_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_enabled')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::enabledAction',));
            }

            // adminUtilisateurs_disabled
            if (0 === strpos($pathinfo, '/admin/adminUtilisateurs/disabled') && preg_match('#^/admin/adminUtilisateurs/disabled_(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_disabled')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::disabledAction',));
            }

            // adminUtilisateurs_verify
            if (0 === strpos($pathinfo, '/admin/adminUtilisateurs/verify') && preg_match('#^/admin/adminUtilisateurs/verify/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_verify')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::verifyAction',));
            }

            // adminUtilisateurs_unverify
            if (0 === strpos($pathinfo, '/admin/adminUtilisateurs/unverify') && preg_match('#^/admin/adminUtilisateurs/unverify/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_unverify')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::unverifyAction',));
            }

            // adminUtilisateurs_show
            if (preg_match('#^/admin/adminUtilisateurs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminUtilisateurs_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_show')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::showAction',));
            }
            not_adminUtilisateurs_show:

            // adminUtilisateurs_delete
            if (preg_match('#^/admin/adminUtilisateurs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::deleteAction',));
            }

            // admin_profile_show
            if ('/admin/adminUtilisateurs/main' === $pathinfo) {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::profileAction',  '_route' => 'admin_profile_show',);
            }

        }

        if (0 === strpos($pathinfo, '/register/pro')) {
            // pro_user_register
            if ('/register/pro' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_pro_user_register;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'pro_user_register');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pro_user_register;
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::registerProAction',  '_route' => 'pro_user_register',);
            }
            not_pro_user_register:

            if (0 === strpos($pathinfo, '/register/pro/pro')) {
                // pro_user_profile_show
                if ('/register/pro/pro' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pro_user_profile_show;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProfileController::showProAction',  '_route' => 'pro_user_profile_show',);
                }
                not_pro_user_profile_show:

                // pro_user_profile_edit
                if ('/register/pro/pro/edit' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pro_user_profile_edit;
                    }

                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ProfileController::editProAction',  '_route' => 'pro_user_profile_edit',);
                }
                not_pro_user_profile_edit:

            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
