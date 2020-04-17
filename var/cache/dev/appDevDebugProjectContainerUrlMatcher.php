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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/css')) {
            // _assetic_07ae453
            if ('/css/07ae453.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_07ae453',);
            }

            if (0 === strpos($pathinfo, '/css/07ae453_')) {
                // _assetic_07ae453_0
                if ('/css/07ae453_jquery-ui.custom.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_07ae453_0',);
                }

                // _assetic_07ae453_3
                if ('/css/07ae453_jquery.contextMenu_4.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_07ae453_3',);
                }

                // _assetic_07ae453_1
                if ('/css/07ae453_bootstrap.min_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_07ae453_1',);
                }

                // _assetic_07ae453_2
                if ('/css/07ae453_font-awesome.min_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_07ae453_2',);
                }

                // _assetic_07ae453_4
                if ('/css/07ae453_file_manager_list_5.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '07ae453',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_07ae453_4',);
                }

            }

            elseif (0 === strpos($pathinfo, '/css/f347968')) {
                // _assetic_f347968
                if ('/css/f347968.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f347968',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f347968',);
                }

                if (0 === strpos($pathinfo, '/css/f347968_part_')) {
                    // _assetic_f347968_0
                    if ('/css/f347968_part_1_bootstrap-responsive_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f347968',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f347968_0',);
                    }

                    // _assetic_f347968_1
                    if ('/css/f347968_part_1_bootstrap_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f347968',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f347968_1',);
                    }

                    // _assetic_f347968_3
                    if ('/css/f347968_part_3_jquery-ui-1.9.0.custom_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f347968',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f347968_3',);
                    }

                }

                // _assetic_f347968_2
                if ('/css/f347968_multi-select_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f347968',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f347968_2',);
                }

            }

            // _assetic_a5fc683
            if ('/css/a5fc683.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5fc683',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a5fc683',);
            }

            if (0 === strpos($pathinfo, '/css/a5fc683_part_1_')) {
                // _assetic_a5fc683_0
                if ('/css/a5fc683_part_1_base-layout_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5fc683',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a5fc683_0',);
                }

                // _assetic_a5fc683_1
                if ('/css/a5fc683_part_1_layout_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5fc683',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a5fc683_1',);
                }

                // _assetic_a5fc683_2
                if ('/css/a5fc683_part_1_wizard_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a5fc683',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a5fc683_2',);
                }

            }

        }

        // fr__RG__conditions
        if ('/conditions' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::conditionsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__conditions',);
        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/5')) {
                // _assetic_5aae769
                if ('/js/5aae769.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5aae769',);
                }

                if (0 === strpos($pathinfo, '/js/5aae769_')) {
                    if (0 === strpos($pathinfo, '/js/5aae769_jquery')) {
                        // _assetic_5aae769_0
                        if ('/js/5aae769_jquery_1.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5aae769_0',);
                        }

                        // _assetic_5aae769_1
                        if ('/js/5aae769_jquery-ui.custom.min_2.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5aae769_1',);
                        }

                        // _assetic_5aae769_4
                        if ('/js/5aae769_jquery.contextMenu_5.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5aae769_4',);
                        }

                    }

                    // _assetic_5aae769_2
                    if ('/js/5aae769_bootstrap.min_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5aae769_2',);
                    }

                    // _assetic_5aae769_3
                    if ('/js/5aae769_dropzone_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5aae769_3',);
                    }

                    // _assetic_5aae769_5
                    if ('/js/5aae769_file_manager_list_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5aae769',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5aae769_5',);
                    }

                }

                // _assetic_5604437
                if ('/js/5604437.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5604437',);
                }

                if (0 === strpos($pathinfo, '/js/5604437_part_')) {
                    // _assetic_5604437_0
                    if ('/js/5604437_part_1_bootstrap_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5604437_0',);
                    }

                    // _assetic_5604437_1
                    if ('/js/5604437_part_3_jquery-1.8.2_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5604437_1',);
                    }

                    // _assetic_5604437_2
                    if ('/js/5604437_part_3_jquery-ui-1.9.0.custom_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5604437_2',);
                    }

                    // _assetic_5604437_3
                    if ('/js/5604437_part_4_jquery.iframeautoheight.1.8.0_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5604437_3',);
                    }

                    // _assetic_5604437_4
                    if ('/js/5604437_part_4_jquery.multi-select_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5604437,  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5604437_4',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/js/0dfa71b')) {
                // _assetic_0dfa71b
                if ('/js/0dfa71b.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0dfa71b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0dfa71b',);
                }

                // _assetic_0dfa71b_0
                if ('/js/0dfa71b_part_1_jquery-1.8.2_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0dfa71b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0dfa71b_0',);
                }

                // _assetic_0dfa71b_1
                if ('/js/0dfa71b_part_1_jquery-ui-1.9.0.custom_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0dfa71b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0dfa71b_1',);
                }

            }

            // _assetic_8f0c300
            if ('/js/8f0c300.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8f0c300',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8f0c300',);
            }

            if (0 === strpos($pathinfo, '/js/8f0c300_part_1_')) {
                // _assetic_8f0c300_0
                if ('/js/8f0c300_part_1_main_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f0c300',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8f0c300_0',);
                }

                // _assetic_8f0c300_1
                if ('/js/8f0c300_part_1_newsletter.edit_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f0c300',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8f0c300_1',);
                }

                // _assetic_8f0c300_2
                if ('/js/8f0c300_part_1_newsletter_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f0c300',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8f0c300_2',);
                }

                // _assetic_8f0c300_3
                if ('/js/8f0c300_part_1_statistic_4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f0c300',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_8f0c300_3',);
                }

            }

            // fr__RG__fos_js_routing_js
            if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__fos_js_routing_js;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',  '_locale' => 'fr',));
            }
            not_fr__RG__fos_js_routing_js:

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _uploader_upload_gallery
            if ('/_uploader/gallery/upload' === $pathinfo) {
                if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_gallery;
                }

                return array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
            }
            not__uploader_upload_gallery:

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // fr__RG__admin_dashboard
                if ('/admin/dashboard' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fr__RG__admin_dashboard');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\DashboardController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/tools')) {
                    // fr__RG__admin_tools_cc
                    if ('/admin/tools/clearcache' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::clearCacheAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_tools_cc',);
                    }

                    // fr__RG__admin_tools_checkdatabase
                    if ('/admin/tools/checkdatabase' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::checkDatabaseAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_tools_checkdatabase',);
                    }

                    // fr__RG__admin_tools_manager
                    if ('/admin/tools/manager' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::managerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_tools_manager',);
                    }

                    // fr__RG__admin_tools_newsletters
                    if ('/admin/tools/newsletters' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::newslettersAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_tools_newsletters',);
                    }

                }

                // admin_move_up
                if ('/admin/admin/moveUp' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::moveUpAction',  '_route' => 'admin_move_up',);
                }

                // admin_move_down
                if ('/admin/admin/moveDown' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::moveDownAction',  '_route' => 'admin_move_down',);
                }

                // easyadmin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'admin',);
                }

                if (0 === strpos($pathinfo, '/admin/tools')) {
                    // fr__RG__file_manager
                    if ('/admin/tools' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'fr__RG__file_manager');
                        }

                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__file_manager',);
                    }

                    // fr__RG__front_bundle_file_manager
                    if ('/admin/tools/manager' === $pathinfo) {
                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__front_bundle_file_manager',);
                    }

                    // fr__RG__newsletters_admin
                    if ('/admin/tools/newsletters' === $pathinfo) {
                        return array (  '_controller' => 'NewslettersBundle\\Controller\\NewsletterController::listAction',  '_locale' => 'fr',  '_route' => 'fr__RG__newsletters_admin',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/_trans')) {
                    // jms_translation_update_message
                    if (0 === strpos($pathinfo, '/admin/_trans/api/configs') && preg_match('#^/admin/_trans/api/configs/(?P<config>[^/]++)/domains/(?P<domain>[^/]++)/locales/(?P<locale>[^/]++)/messages$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_jms_translation_update_message;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_translation_update_message')), array (  'id' => NULL,  '_controller' => 'jms_translation.controller.api_controller:updateMessageAction',));
                    }
                    not_jms_translation_update_message:

                    // jms_translation_index
                    if ('/admin/_trans' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'jms_translation_index');
                        }

                        return array (  '_controller' => 'jms_translation.controller.translate_controller:indexAction',  '_route' => 'jms_translation_index',);
                    }

                }

            }

            // fr__RG__appmobileregister
            if ('/appmobileregister' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AppMobileRegisterController::appmobileregisterAction',  '_locale' => 'fr',  '_route' => 'fr__RG__appmobileregister',);
            }

            // fr__RG__admin_ajax_icon
            if ('/ajax-icon' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fr__RG__admin_ajax_icon');
                }

                return array (  'filename' => NULL,  '_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxIcon',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_ajax_icon',);
            }

            // fr__RG__arkounay_pageblocks_ajax
            if ('/arkounay-ajax-edit-pageblocks' === $pathinfo) {
                return array (  '_controller' => 'Arkounay\\BlockI18nBundle\\Controller\\AjaxController::ajaxEditAction',  '_locale' => 'fr',  '_route' => 'fr__RG__arkounay_pageblocks_ajax',);
            }

        }

        elseif (0 === strpos($pathinfo, '/en')) {
            // en__RG__admin_dashboard
            if ('/en/admin/dashboard' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'en__RG__admin_dashboard');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\DashboardController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/en/admin/tools')) {
                // en__RG__admin_tools_cc
                if ('/en/admin/tools/clearcache' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::clearCacheAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_tools_cc',);
                }

                // en__RG__admin_tools_checkdatabase
                if ('/en/admin/tools/checkdatabase' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::checkDatabaseAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_tools_checkdatabase',);
                }

                // en__RG__admin_tools_manager
                if ('/en/admin/tools/manager' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::managerAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_tools_manager',);
                }

                // en__RG__admin_tools_newsletters
                if ('/en/admin/tools/newsletters' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ToolsController::newslettersAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_tools_newsletters',);
                }

            }

            // en__RG__main_homepage
            if ('/en' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'en__RG__main_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Main\\MainController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__main_homepage',);
            }

            if (0 === strpos($pathinfo, '/en/a')) {
                if (0 === strpos($pathinfo, '/en/admin/tools')) {
                    // en__RG__file_manager
                    if ('/en/admin/tools' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'en__RG__file_manager');
                        }

                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__file_manager',);
                    }

                    // en__RG__front_bundle_file_manager
                    if ('/en/admin/tools/manager' === $pathinfo) {
                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__front_bundle_file_manager',);
                    }

                    // en__RG__newsletters_admin
                    if ('/en/admin/tools/newsletters' === $pathinfo) {
                        return array (  '_controller' => 'NewslettersBundle\\Controller\\NewsletterController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__newsletters_admin',);
                    }

                }

                // en__RG__appmobileregister
                if ('/en/appmobileregister' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AppMobileRegisterController::appmobileregisterAction',  '_locale' => 'en',  '_route' => 'en__RG__appmobileregister',);
                }

                // en__RG__admin_ajax_icon
                if ('/en/ajax-icon' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'en__RG__admin_ajax_icon');
                    }

                    return array (  'filename' => NULL,  '_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxIcon',  '_locale' => 'en',  '_route' => 'en__RG__admin_ajax_icon',);
                }

                // en__RG__arkounay_pageblocks_ajax
                if ('/en/arkounay-ajax-edit-pageblocks' === $pathinfo) {
                    return array (  '_controller' => 'Arkounay\\BlockI18nBundle\\Controller\\AjaxController::ajaxEditAction',  '_locale' => 'en',  '_route' => 'en__RG__arkounay_pageblocks_ajax',);
                }

            }

            elseif (0 === strpos($pathinfo, '/en/f')) {
                if (0 === strpos($pathinfo, '/en/front_file_manager')) {
                    // en__RG__file_manager2
                    if ('/en/front_file_manager' === $pathinfo) {
                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::index2Action',  '_locale' => 'en',  '_route' => 'en__RG__file_manager2',);
                    }

                    // en__RG__index
                    if ('/en/front_file_manager' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'en__RG__index');
                        }

                        return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::index2Action',  '_locale' => 'en',  '_route' => 'en__RG__index',);
                    }

                }

                // en__RG__file_manager_file
                if (0 === strpos($pathinfo, '/en/file') && preg_match('#^/en/file/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__file_manager_file')), array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction',  '_locale' => 'en',));
                }

                if (0 === strpos($pathinfo, '/en/filemanager')) {
                    // en__RG__youwe_file_manager_list
                    if (0 === strpos($pathinfo, '/en/filemanager/list') && preg_match('#^/en/filemanager/list(?:/(?P<dir_path>.+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__youwe_file_manager_list')), array (  'dir_path' => NULL,  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::listFilesAction',  '_locale' => 'en',));
                    }

                    if (0 === strpos($pathinfo, '/en/filemanager/upload')) {
                        // en__RG__youwe_file_manager_upload
                        if (preg_match('#^/en/filemanager/upload/(?P<dir_path>.+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__youwe_file_manager_upload')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::uploadFileAction',  '_locale' => 'en',));
                        }

                        // en__RG__youwe_file_manager_upload_root
                        if ('/en/filemanager/upload' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($rawPathinfo.'/', 'en__RG__youwe_file_manager_upload_root');
                            }

                            return array (  'dir_path' => '',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::uploadFileAction',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_upload_root',);
                        }

                    }

                    // en__RG__youwe_file_manager_delete
                    if ('/en/filemanager/delete' === $pathinfo) {
                        return array (  'action' => 'action-file-delete',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_delete',);
                    }

                    // en__RG__youwe_file_manager_download
                    if (0 === strpos($pathinfo, '/en/filemanager/download') && preg_match('#^/en/filemanager/download/(?P<token>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__youwe_file_manager_download')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::DownloadAction',  '_locale' => 'en',));
                    }

                    // en__RG__youwe_file_manager_move
                    if ('/en/filemanager/move' === $pathinfo) {
                        return array (  'action' => 'action-file-move',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_move',);
                    }

                    // en__RG__youwe_file_manager_extract
                    if ('/en/filemanager/extract' === $pathinfo) {
                        return array (  'action' => 'action-file-extract',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_extract',);
                    }

                    // en__RG__youwe_file_manager_rename
                    if ('/en/filemanager/rename' === $pathinfo) {
                        return array (  'action' => 'action-file-rename',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_rename',);
                    }

                    // en__RG__youwe_file_manager_new_dir
                    if ('/en/filemanager/new-dir' === $pathinfo) {
                        return array (  'action' => 'action-file-new-dir',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_new_dir',);
                    }

                    // en__RG__youwe_file_manager_copy
                    if ('/en/filemanager/copy' === $pathinfo) {
                        return array (  'action' => 'action-file-copy',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_copy',);
                    }

                    // en__RG__youwe_file_manager_cut
                    if ('/en/filemanager/cut' === $pathinfo) {
                        return array (  'action' => 'action-file-cut',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_cut',);
                    }

                    // en__RG__youwe_file_manager_paste
                    if ('/en/filemanager/paste' === $pathinfo) {
                        return array (  'action' => 'action-file-paste',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_paste',);
                    }

                    // en__RG__youwe_file_manager_fileinfo
                    if ('/en/filemanager/fileinfo' === $pathinfo) {
                        return array (  'action' => 'action-file-info',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'en',  '_route' => 'en__RG__youwe_file_manager_fileinfo',);
                    }

                }

                // en__RG__feed
                if ('/en/flux_rss_vertin_go_prod' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\VertinGoFeedControllerController::feedAction',  '_locale' => 'en',  '_route' => 'en__RG__feed',);
                }

            }

            elseif (0 === strpos($pathinfo, '/en/re')) {
                // en__RG__file_manager_rename
                if (0 === strpos($pathinfo, '/en/rename') && preg_match('#^/en/rename/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__file_manager_rename')), array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::renameFileAction',  '_locale' => 'en',));
                }

                // en__RG__renderpdf
                if ('/en/renderpdf' === $pathinfo) {
                    return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::renderpdfAction',  '_locale' => 'en',  '_route' => 'en__RG__renderpdf',);
                }

                if (0 === strpos($pathinfo, '/en/register')) {
                    // en__RG__fos_user_registration_register
                    if ('/en/register' === $trimmedPathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__fos_user_registration_register;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'en__RG__fos_user_registration_register');
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
                    }
                    not_en__RG__fos_user_registration_register:

                    // en__RG__fos_user_registration_check_email
                    if ('/en/register/check-email' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
                    }
                    not_en__RG__fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/en/register/confirm')) {
                        // en__RG__fos_user_registration_confirm
                        if (preg_match('#^/en/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',  '_locale' => 'en',));
                        }
                        not_en__RG__fos_user_registration_confirm:

                        // en__RG__fos_user_registration_confirmed
                        if ('/en/register/confirmed' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
                        }
                        not_en__RG__fos_user_registration_confirmed:

                    }

                    // en__RG__register
                    if ('/en/register_app_mobile' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__register',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/en/resetting')) {
                    // en__RG__fos_user_resetting_request
                    if ('/en/resetting/request' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
                    }
                    not_en__RG__fos_user_resetting_request:

                    // en__RG__fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/en/resetting/reset') && preg_match('#^/en/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',  '_locale' => 'en',));
                    }
                    not_en__RG__fos_user_resetting_reset:

                    // en__RG__fos_user_resetting_send_email
                    if ('/en/resetting/send-email' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_en__RG__fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
                    }
                    not_en__RG__fos_user_resetting_send_email:

                    // en__RG__fos_user_resetting_check_email
                    if ('/en/resetting/check-email' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
                    }
                    not_en__RG__fos_user_resetting_check_email:

                }

            }

            elseif (0 === strpos($pathinfo, '/en/upload')) {
                // en__RG__file_manager_upload
                if ('/en/upload' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'en__RG__file_manager_upload');
                    }

                    return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::uploadFileAction',  '_locale' => 'en',  '_route' => 'en__RG__file_manager_upload',);
                }

                // en__RG__upload_file
                if ('/en/upload' === $pathinfo) {
                    return array (  '_controller' => 'FileManagerBundle:ManagerController:uploadFile',  '_locale' => 'en',  '_route' => 'en__RG__upload_file',);
                }

                // en__RG__youwe_uploads
                if (0 === strpos($pathinfo, '/en/uploads') && preg_match('#^/en/uploads/(?P<name>.+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__youwe_uploads')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\SecurityController::securityAction',  '_locale' => 'en',));
                }

            }

            // en__RG__file_manager_delete
            if ('/en/delete/' === $pathinfo) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_en__RG__file_manager_delete;
                }

                return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::deleteAction',  '_locale' => 'en',  '_route' => 'en__RG__file_manager_delete',);
            }
            not_en__RG__file_manager_delete:

            // en__RG__download-and-install-locally
            if ('/en/download-and-install-locally' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::downloadandinstalllocallyAction',  '_locale' => 'en',  '_route' => 'en__RG__download-and-install-locally',);
            }

            if (0 === strpos($pathinfo, '/en/b')) {
                // en__RG__binary_file_response
                if ('/en/binaryFileResponse' === $pathinfo) {
                    return array (  '_controller' => 'FileManagerBundle:ManagerController:binaryFileResponse',  '_locale' => 'en',  '_route' => 'en__RG__binary_file_response',);
                }

                // en__RG__build-my-own-chatbot
                if ('/en/build-my-own-chatbot' === $pathinfo) {
                    return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::buildmyownchatbotAction',  '_locale' => 'en',  '_route' => 'en__RG__build-my-own-chatbot',);
                }

                // en__RG__build-my-own-vertingo-website
                if ('/en/build-my-own-vertingo-website' === $pathinfo) {
                    return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::buildmyownvertingowebsiteAction',  '_locale' => 'en',  '_route' => 'en__RG__build-my-own-vertingo-website',);
                }

            }

            elseif (0 === strpos($pathinfo, '/en/sitemap.')) {
                // en__RG__PrestaSitemapBundle_index
                if (preg_match('#^/en/sitemap\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__PrestaSitemapBundle_index')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::indexAction',  '_locale' => 'en',));
                }

                // en__RG__PrestaSitemapBundle_section
                if (preg_match('#^/en/sitemap\\.(?P<name>[^/\\.]++)\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__PrestaSitemapBundle_section')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::sectionAction',  '_locale' => 'en',));
                }

            }

            // en__RG__social-blocks
            if ('/en/social-blocks' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::socialblocksAction',  '_locale' => 'en',  '_route' => 'en__RG__social-blocks',);
            }

            if (0 === strpos($pathinfo, '/en/l')) {
                if (0 === strpos($pathinfo, '/en/login')) {
                    // en__RG__fos_user_security_login
                    if ('/en/login' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__fos_user_security_login;
                        }

                        return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
                    }
                    not_en__RG__fos_user_security_login:

                    // en__RG__fos_user_security_check
                    if ('/en/login_check' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_en__RG__fos_user_security_check;
                        }

                        return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
                    }
                    not_en__RG__fos_user_security_check:

                }

                // en__RG__fos_user_security_logout
                if ('/en/logout' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__fos_user_security_logout;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
                }
                not_en__RG__fos_user_security_logout:

                // en__RG__learn-symfony-framework
                if ('/en/learn-symfony-framework' === $pathinfo) {
                    return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::learnsymfonyframeworkAction',  '_locale' => 'en',  '_route' => 'en__RG__learn-symfony-framework',);
                }

                // en__RG__learn-android-studio-development-and-google-play-deployment
                if ('/en/learn-android-studio-development-and-google-play-deployment' === $pathinfo) {
                    return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::learnandroidstudiodevelopmentandgoogleplaydeploymentAction',  '_locale' => 'en',  '_route' => 'en__RG__learn-android-studio-development-and-google-play-deployment',);
                }

                if (0 === strpos($pathinfo, '/en/liste_medias')) {
                    // en__RG__liste_medias
                    if ('/en/liste_medias' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'en__RG__liste_medias');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ExempleController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__liste_medias',);
                    }

                    // en__RG__liste_medias_show
                    if (preg_match('#^/en/liste_medias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__liste_medias_show')), array (  '_controller' => 'AppBundle\\Controller\\ExempleController::showAction',  '_locale' => 'en',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/en/profile')) {
                // en__RG__fos_user_profile_show
                if ('/en/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'en__RG__fos_user_profile_show');
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
                }
                not_en__RG__fos_user_profile_show:

                // en__RG__fos_user_profile_edit
                if ('/en/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
                }
                not_en__RG__fos_user_profile_edit:

                // en__RG__fos_user_change_password
                if ('/en/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__fos_user_change_password;
                    }

                    return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
                }
                not_en__RG__fos_user_change_password:

            }

            // en__RG__my-youtube-list-playlist
            if ('/en/my-youtube-list-playlist' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::myyoutubelistplaylistAction',  '_locale' => 'en',  '_route' => 'en__RG__my-youtube-list-playlist',);
            }

            if (0 === strpos($pathinfo, '/en/media')) {
                if (0 === strpos($pathinfo, '/en/media/gallery')) {
                    // en__RG__sonata_media_gallery_index
                    if ('/en/media/gallery' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'en__RG__sonata_media_gallery_index');
                        }

                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_media_gallery_index',);
                    }

                    // en__RG__sonata_media_gallery_view
                    if (0 === strpos($pathinfo, '/en/media/gallery/view') && preg_match('#^/en/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',  '_locale' => 'en',));
                    }

                }

                // en__RG__sonata_media_view
                if (0 === strpos($pathinfo, '/en/media/view') && preg_match('#^/en/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',  '_locale' => 'en',));
                }

                // en__RG__sonata_media_download
                if (0 === strpos($pathinfo, '/en/media/download') && preg_match('#^/en/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',  '_locale' => 'en',));
                }

            }

            // en__RG__glossary-informatics-block
            if ('/en/glossary-informatics-block' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::glossaryinformaticsblockAction',  '_locale' => 'en',  '_route' => 'en__RG__glossary-informatics-block',);
            }

            // en__RG__vertingo-website-introduction
            if ('/en/vertingo-website-introduction' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::vertingowebsiteintroductionAction',  '_locale' => 'en',  '_route' => 'en__RG__vertingo-website-introduction',);
            }

            // en__RG__try-my-own-google-spreadsheet
            if ('/en/try-my-own-google-spreadsheet' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::trymyowngooglespreadsheetAction',  '_locale' => 'en',  '_route' => 'en__RG__try-my-own-google-spreadsheet',);
            }

            // en__RG__testimonials
            if ('/en/testimonials' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::testimonialsAction',  '_locale' => 'en',  '_route' => 'en__RG__testimonials',);
            }

            // en__RG__index-your-website-and-learn-how-to-become-well-ranked-in-search-engine
            if ('/en/index-your-website-and-learn-how-to-become-well-ranked-in-search-engine' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::indexyourwebsiteandlearnhowtobecomewellrankedinsearchengineAction',  '_locale' => 'en',  '_route' => 'en__RG__index-your-website-and-learn-how-to-become-well-ranked-in-search-engine',);
            }

            if (0 === strpos($pathinfo, '/en/insertyoutube')) {
                // en__RG__insertid
                if ('/en/insertyoutube' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InsertYouTubeController::insertidAction',  '_locale' => 'en',  '_route' => 'en__RG__insertid',);
                }

                // en__RG__insertanalytics
                if ('/en/insertyoutubeanalytics' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\InsertYouTubeController::insertanalyticsAction',  '_locale' => 'en',  '_route' => 'en__RG__insertanalytics',);
                }

            }

            // en__RG__conditions
            if ('/en/conditions' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::conditionsAction',  '_locale' => 'en',  '_route' => 'en__RG__conditions',);
            }

            // en__RG__how-to-integrate-google-data-analytics
            if ('/en/how-to-integrate-google-data-analytics' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::howtointegrategoogledataanalyticsAction',  '_locale' => 'en',  '_route' => 'en__RG__how-to-integrate-google-data-analytics',);
            }

            // en__RG__how-to-integrate-youtube-data-analytics
            if ('/en/how-to-integrate-youtube-data-analytics' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::howtointegrateyoutubedataanalyticsAction',  '_locale' => 'en',  '_route' => 'en__RG__how-to-integrate-youtube-data-analytics',);
            }

            // en__RG__fos_js_routing_js
            if (0 === strpos($pathinfo, '/en/js/routing') && preg_match('#^/en/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__fos_js_routing_js;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',  '_locale' => 'en',));
            }
            not_en__RG__fos_js_routing_js:

            if (0 === strpos($pathinfo, '/en/newsletter')) {
                // en__RG__usn_newsletter_subscribe
                if ('/en/newsletter/subscribe' === $pathinfo) {
                    return array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::subscribeAction',  '_locale' => 'en',  '_route' => 'en__RG__usn_newsletter_subscribe',);
                }

                // en__RG__usn_newsletter_complete
                if ('/en/newsletter/complete' === $pathinfo) {
                    return array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::completeAction',  '_locale' => 'en',  '_route' => 'en__RG__usn_newsletter_complete',);
                }

                if (0 === strpos($pathinfo, '/en/newsletter/unsubscribe')) {
                    // en__RG__usn_newsletter_unsubscribe
                    if (preg_match('#^/en/newsletter/unsubscribe/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__usn_newsletter_unsubscribe')), array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::unsubscribeAction',  '_locale' => 'en',));
                    }

                    // en__RG__usn_newsletter_unsubscribe_complete
                    if (0 === strpos($pathinfo, '/en/newsletter/unsubscribe_complete') && preg_match('#^/en/newsletter/unsubscribe_complete/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__usn_newsletter_unsubscribe_complete')), array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::unsubscribeCompleteAction',  '_locale' => 'en',));
                    }

                }

                // en__RG__newsletters_admin2
                if ('/en/newsletters' === $pathinfo) {
                    return array (  '_controller' => 'NewslettersBundle\\Controller\\NewsletterController::listAction',  '_locale' => 'en',  '_route' => 'en__RG__newsletters_admin2',);
                }

            }

        }

        // fr__RG__main_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'fr__RG__main_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\Main\\MainController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__main_homepage',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/front_file_manager')) {
                // fr__RG__file_manager2
                if ('/front_file_manager' === $pathinfo) {
                    return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::index2Action',  '_locale' => 'fr',  '_route' => 'fr__RG__file_manager2',);
                }

                // fr__RG__index
                if ('/front_file_manager' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fr__RG__index');
                    }

                    return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::index2Action',  '_locale' => 'fr',  '_route' => 'fr__RG__index',);
                }

            }

            // fr__RG__file_manager_file
            if (0 === strpos($pathinfo, '/file') && preg_match('#^/file/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__file_manager_file')), array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction',  '_locale' => 'fr',));
            }

            if (0 === strpos($pathinfo, '/filemanager')) {
                // fr__RG__youwe_file_manager_list
                if (0 === strpos($pathinfo, '/filemanager/list') && preg_match('#^/filemanager/list(?:/(?P<dir_path>.+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__youwe_file_manager_list')), array (  'dir_path' => NULL,  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::listFilesAction',  '_locale' => 'fr',));
                }

                if (0 === strpos($pathinfo, '/filemanager/upload')) {
                    // fr__RG__youwe_file_manager_upload
                    if (preg_match('#^/filemanager/upload/(?P<dir_path>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__youwe_file_manager_upload')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::uploadFileAction',  '_locale' => 'fr',));
                    }

                    // fr__RG__youwe_file_manager_upload_root
                    if ('/filemanager/upload' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'fr__RG__youwe_file_manager_upload_root');
                        }

                        return array (  'dir_path' => '',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::uploadFileAction',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_upload_root',);
                    }

                }

                // fr__RG__youwe_file_manager_delete
                if ('/filemanager/delete' === $pathinfo) {
                    return array (  'action' => 'action-file-delete',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_delete',);
                }

                // fr__RG__youwe_file_manager_download
                if (0 === strpos($pathinfo, '/filemanager/download') && preg_match('#^/filemanager/download/(?P<token>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__youwe_file_manager_download')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::DownloadAction',  '_locale' => 'fr',));
                }

                // fr__RG__youwe_file_manager_move
                if ('/filemanager/move' === $pathinfo) {
                    return array (  'action' => 'action-file-move',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_move',);
                }

                // fr__RG__youwe_file_manager_extract
                if ('/filemanager/extract' === $pathinfo) {
                    return array (  'action' => 'action-file-extract',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_extract',);
                }

                // fr__RG__youwe_file_manager_rename
                if ('/filemanager/rename' === $pathinfo) {
                    return array (  'action' => 'action-file-rename',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_rename',);
                }

                // fr__RG__youwe_file_manager_new_dir
                if ('/filemanager/new-dir' === $pathinfo) {
                    return array (  'action' => 'action-file-new-dir',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_new_dir',);
                }

                // fr__RG__youwe_file_manager_copy
                if ('/filemanager/copy' === $pathinfo) {
                    return array (  'action' => 'action-file-copy',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_copy',);
                }

                // fr__RG__youwe_file_manager_cut
                if ('/filemanager/cut' === $pathinfo) {
                    return array (  'action' => 'action-file-cut',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_cut',);
                }

                // fr__RG__youwe_file_manager_paste
                if ('/filemanager/paste' === $pathinfo) {
                    return array (  'action' => 'action-file-paste',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_paste',);
                }

                // fr__RG__youwe_file_manager_fileinfo
                if ('/filemanager/fileinfo' === $pathinfo) {
                    return array (  'action' => 'action-file-info',  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\FileManagerController::fileActions',  '_locale' => 'fr',  '_route' => 'fr__RG__youwe_file_manager_fileinfo',);
                }

            }

            // fr__RG__feed
            if ('/flux_rss_vertin_go_prod' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VertinGoFeedControllerController::feedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__feed',);
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // fr__RG__file_manager_rename
            if (0 === strpos($pathinfo, '/rename') && preg_match('#^/rename/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__file_manager_rename')), array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::renameFileAction',  '_locale' => 'fr',));
            }

            // fr__RG__renderpdf
            if ('/renderpdf' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::renderpdfAction',  '_locale' => 'fr',  '_route' => 'fr__RG__renderpdf',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fr__RG__fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fr__RG__fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_register',);
                }
                not_fr__RG__fos_user_registration_register:

                // fr__RG__fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_check_email',);
                }
                not_fr__RG__fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fr__RG__fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__fos_user_registration_confirm:

                    // fr__RG__fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_confirmed',);
                    }
                    not_fr__RG__fos_user_registration_confirmed:

                }

                // fr__RG__register
                if ('/register_app_mobile' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__register',);
                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fr__RG__fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_request',);
                }
                not_fr__RG__fos_user_resetting_request:

                // fr__RG__fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',  '_locale' => 'fr',));
                }
                not_fr__RG__fos_user_resetting_reset:

                // fr__RG__fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_send_email',);
                }
                not_fr__RG__fos_user_resetting_send_email:

                // fr__RG__fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_check_email',);
                }
                not_fr__RG__fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/upload')) {
            // fr__RG__file_manager_upload
            if ('/upload' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fr__RG__file_manager_upload');
                }

                return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::uploadFileAction',  '_locale' => 'fr',  '_route' => 'fr__RG__file_manager_upload',);
            }

            // fr__RG__upload_file
            if ('/upload' === $pathinfo) {
                return array (  '_controller' => 'FileManagerBundle:ManagerController:uploadFile',  '_locale' => 'fr',  '_route' => 'fr__RG__upload_file',);
            }

            // fr__RG__youwe_uploads
            if (0 === strpos($pathinfo, '/uploads') && preg_match('#^/uploads/(?P<name>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__youwe_uploads')), array (  '_controller' => 'Youwe\\FileManagerBundle\\Controller\\SecurityController::securityAction',  '_locale' => 'fr',));
            }

        }

        // fr__RG__file_manager_delete
        if ('/delete/' === $pathinfo) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_fr__RG__file_manager_delete;
            }

            return array (  '_controller' => 'FileManagerBundle\\Controller\\ManagerController::deleteAction',  '_locale' => 'fr',  '_route' => 'fr__RG__file_manager_delete',);
        }
        not_fr__RG__file_manager_delete:

        // fr__RG__download-and-install-locally
        if ('/download-and-install-locally' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::downloadandinstalllocallyAction',  '_locale' => 'fr',  '_route' => 'fr__RG__download-and-install-locally',);
        }

        if (0 === strpos($pathinfo, '/b')) {
            // fr__RG__binary_file_response
            if ('/binaryFileResponse' === $pathinfo) {
                return array (  '_controller' => 'FileManagerBundle:ManagerController:binaryFileResponse',  '_locale' => 'fr',  '_route' => 'fr__RG__binary_file_response',);
            }

            // fr__RG__build-my-own-chatbot
            if ('/build-my-own-chatbot' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::buildmyownchatbotAction',  '_locale' => 'fr',  '_route' => 'fr__RG__build-my-own-chatbot',);
            }

            // fr__RG__build-my-own-vertingo-website
            if ('/build-my-own-vertingo-website' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::buildmyownvertingowebsiteAction',  '_locale' => 'fr',  '_route' => 'fr__RG__build-my-own-vertingo-website',);
            }

        }

        elseif (0 === strpos($pathinfo, '/sitemap.')) {
            // fr__RG__PrestaSitemapBundle_index
            if (preg_match('#^/sitemap\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__PrestaSitemapBundle_index')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::indexAction',  '_locale' => 'fr',));
            }

            // fr__RG__PrestaSitemapBundle_section
            if (preg_match('#^/sitemap\\.(?P<name>[^/\\.]++)\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__PrestaSitemapBundle_section')), array (  '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::sectionAction',  '_locale' => 'fr',));
            }

        }

        // fr__RG__social-blocks
        if ('/social-blocks' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::socialblocksAction',  '_locale' => 'fr',  '_route' => 'fr__RG__social-blocks',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fr__RG__fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_login',);
                }
                not_fr__RG__fos_user_security_login:

                // fr__RG__fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_check',);
                }
                not_fr__RG__fos_user_security_check:

            }

            // fr__RG__fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_logout',);
            }
            not_fr__RG__fos_user_security_logout:

            // fr__RG__learn-symfony-framework
            if ('/learn-symfony-framework' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::learnsymfonyframeworkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__learn-symfony-framework',);
            }

            // fr__RG__learn-android-studio-development-and-google-play-deployment
            if ('/learn-android-studio-development-and-google-play-deployment' === $pathinfo) {
                return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::learnandroidstudiodevelopmentandgoogleplaydeploymentAction',  '_locale' => 'fr',  '_route' => 'fr__RG__learn-android-studio-development-and-google-play-deployment',);
            }

            if (0 === strpos($pathinfo, '/liste_medias')) {
                // fr__RG__liste_medias
                if ('/liste_medias' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fr__RG__liste_medias');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ExempleController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__liste_medias',);
                }

                // fr__RG__liste_medias_show
                if (preg_match('#^/liste_medias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__liste_medias_show')), array (  '_controller' => 'AppBundle\\Controller\\ExempleController::showAction',  '_locale' => 'fr',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fr__RG__fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fr__RG__fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_show',);
            }
            not_fr__RG__fos_user_profile_show:

            // fr__RG__fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_edit',);
            }
            not_fr__RG__fos_user_profile_edit:

            // fr__RG__fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_change_password',);
            }
            not_fr__RG__fos_user_change_password:

        }

        // fr__RG__my-youtube-list-playlist
        if ('/my-youtube-list-playlist' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::myyoutubelistplaylistAction',  '_locale' => 'fr',  '_route' => 'fr__RG__my-youtube-list-playlist',);
        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // fr__RG__sonata_media_gallery_index
                if ('/media/gallery' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fr__RG__sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_media_gallery_index',);
                }

                // fr__RG__sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',  '_locale' => 'fr',));
                }

            }

            // fr__RG__sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',  '_locale' => 'fr',));
            }

            // fr__RG__sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',  '_locale' => 'fr',));
            }

        }

        // fr__RG__glossary-informatics-block
        if ('/glossary-informatics-block' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::glossaryinformaticsblockAction',  '_locale' => 'fr',  '_route' => 'fr__RG__glossary-informatics-block',);
        }

        // fr__RG__vertingo-website-introduction
        if ('/vertingo-website-introduction' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::vertingowebsiteintroductionAction',  '_locale' => 'fr',  '_route' => 'fr__RG__vertingo-website-introduction',);
        }

        // fr__RG__try-my-own-google-spreadsheet
        if ('/try-my-own-google-spreadsheet' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::trymyowngooglespreadsheetAction',  '_locale' => 'fr',  '_route' => 'fr__RG__try-my-own-google-spreadsheet',);
        }

        // fr__RG__testimonials
        if ('/testimonials' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::testimonialsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__testimonials',);
        }

        // fr__RG__index-your-website-and-learn-how-to-become-well-ranked-in-search-engine
        if ('/index-your-website-and-learn-how-to-become-well-ranked-in-search-engine' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::indexyourwebsiteandlearnhowtobecomewellrankedinsearchengineAction',  '_locale' => 'fr',  '_route' => 'fr__RG__index-your-website-and-learn-how-to-become-well-ranked-in-search-engine',);
        }

        if (0 === strpos($pathinfo, '/insertyoutube')) {
            // fr__RG__insertid
            if ('/insertyoutube' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InsertYouTubeController::insertidAction',  '_locale' => 'fr',  '_route' => 'fr__RG__insertid',);
            }

            // fr__RG__insertanalytics
            if ('/insertyoutubeanalytics' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InsertYouTubeController::insertanalyticsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__insertanalytics',);
            }

        }

        // fr__RG__how-to-integrate-google-data-analytics
        if ('/how-to-integrate-google-data-analytics' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::howtointegrategoogledataanalyticsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__how-to-integrate-google-data-analytics',);
        }

        // fr__RG__how-to-integrate-youtube-data-analytics
        if ('/how-to-integrate-youtube-data-analytics' === $pathinfo) {
            return array (  '_controller' => 'VideoPlayerBundle\\Controller\\VideoPlayerController::howtointegrateyoutubedataanalyticsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__how-to-integrate-youtube-data-analytics',);
        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // fr__RG__usn_newsletter_subscribe
            if ('/newsletter/subscribe' === $pathinfo) {
                return array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::subscribeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__usn_newsletter_subscribe',);
            }

            // fr__RG__usn_newsletter_complete
            if ('/newsletter/complete' === $pathinfo) {
                return array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::completeAction',  '_locale' => 'fr',  '_route' => 'fr__RG__usn_newsletter_complete',);
            }

            if (0 === strpos($pathinfo, '/newsletter/unsubscribe')) {
                // fr__RG__usn_newsletter_unsubscribe
                if (preg_match('#^/newsletter/unsubscribe/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__usn_newsletter_unsubscribe')), array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::unsubscribeAction',  '_locale' => 'fr',));
                }

                // fr__RG__usn_newsletter_unsubscribe_complete
                if (0 === strpos($pathinfo, '/newsletter/unsubscribe_complete') && preg_match('#^/newsletter/unsubscribe_complete/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__usn_newsletter_unsubscribe_complete')), array (  '_controller' => 'NewsletterBundle\\Controller\\DefaultController::unsubscribeCompleteAction',  '_locale' => 'fr',));
                }

            }

            // fr__RG__newsletters_admin2
            if ('/newsletters' === $pathinfo) {
                return array (  '_controller' => 'NewslettersBundle\\Controller\\NewsletterController::listAction',  '_locale' => 'fr',  '_route' => 'fr__RG__newsletters_admin2',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
