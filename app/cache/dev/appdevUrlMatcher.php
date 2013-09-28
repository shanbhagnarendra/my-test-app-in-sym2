<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/js/f07a403')) {
            // _assetic_f07a403
            if ($pathinfo === '/js/f07a403.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f07a403',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f07a403',);
            }

            if (0 === strpos($pathinfo, '/js/f07a403_part_1_')) {
                // _assetic_f07a403_0
                if ($pathinfo === '/js/f07a403_part_1_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f07a403',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f07a403_0',);
                }

                // _assetic_f07a403_1
                if ($pathinfo === '/js/f07a403_part_1_jquery.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f07a403',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f07a403_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/663a366')) {
            // _assetic_663a366
            if ($pathinfo === '/css/663a366.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_663a366',);
            }

            if (0 === strpos($pathinfo, '/css/663a366_part_1_bootstrap')) {
                if (0 === strpos($pathinfo, '/css/663a366_part_1_bootstrap-')) {
                    if (0 === strpos($pathinfo, '/css/663a366_part_1_bootstrap-responsive')) {
                        // _assetic_663a366_0
                        if ($pathinfo === '/css/663a366_part_1_bootstrap-responsive_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_663a366_0',);
                        }

                        // _assetic_663a366_1
                        if ($pathinfo === '/css/663a366_part_1_bootstrap-responsive.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_663a366_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/663a366_part_1_bootstrap-theme')) {
                        // _assetic_663a366_2
                        if ($pathinfo === '/css/663a366_part_1_bootstrap-theme_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_663a366_2',);
                        }

                        // _assetic_663a366_3
                        if ($pathinfo === '/css/663a366_part_1_bootstrap-theme.min_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_663a366_3',);
                        }

                    }

                }

                // _assetic_663a366_4
                if ($pathinfo === '/css/663a366_part_1_bootstrap_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_663a366_4',);
                }

                // _assetic_663a366_5
                if ($pathinfo === '/css/663a366_part_1_bootstrap.min_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '663a366',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_663a366_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/318a786')) {
            // _assetic_318a786
            if ($pathinfo === '/js/318a786.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '318a786',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_318a786',);
            }

            // _assetic_318a786_0
            if ($pathinfo === '/js/318a786_jquery.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '318a786',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_318a786_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/27d20bd')) {
            // _assetic_27d20bd
            if ($pathinfo === '/css/27d20bd.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_27d20bd',);
            }

            if (0 === strpos($pathinfo, '/css/27d20bd_part_1_bootstrap')) {
                if (0 === strpos($pathinfo, '/css/27d20bd_part_1_bootstrap-')) {
                    if (0 === strpos($pathinfo, '/css/27d20bd_part_1_bootstrap-responsive')) {
                        // _assetic_27d20bd_0
                        if ($pathinfo === '/css/27d20bd_part_1_bootstrap-responsive_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_27d20bd_0',);
                        }

                        // _assetic_27d20bd_1
                        if ($pathinfo === '/css/27d20bd_part_1_bootstrap-responsive.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_27d20bd_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/27d20bd_part_1_bootstrap-theme')) {
                        // _assetic_27d20bd_2
                        if ($pathinfo === '/css/27d20bd_part_1_bootstrap-theme_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_27d20bd_2',);
                        }

                        // _assetic_27d20bd_3
                        if ($pathinfo === '/css/27d20bd_part_1_bootstrap-theme.min_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_27d20bd_3',);
                        }

                    }

                }

                // _assetic_27d20bd_4
                if ($pathinfo === '/css/27d20bd_part_1_bootstrap_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_27d20bd_4',);
                }

                // _assetic_27d20bd_5
                if ($pathinfo === '/css/27d20bd_part_1_bootstrap.min_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27d20bd',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_27d20bd_5',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // hrms_employee_homepage
        if ($pathinfo === '/employee') {
            return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::indexAction',  '_route' => 'hrms_employee_homepage',);
        }

        if (0 === strpos($pathinfo, '/country')) {
            // hrmcountry
            if (rtrim($pathinfo, '/') === '/country') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmcountry');
                }

                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::indexAction',  '_route' => 'hrmcountry',);
            }

            // hrmcountry_show
            if (preg_match('#^/country/(?P<id>[^/]++)/show/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmcountry_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmcountry_show')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::showAction',));
            }

            // hrmcountry_edit
            if (preg_match('#^/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmcountry_edit')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::editAction',));
            }

            // hrmcountry_new
            if ($pathinfo === '/country/new') {
                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::newAction',  '_route' => 'hrmcountry_new',);
            }

            // hrmcountry_delete
            if (preg_match('#^/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmcountry_delete')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::deleteAction',));
            }

            // hrmcountry_update
            if (preg_match('#^/country/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmcountry_update')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmCountryController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/state')) {
            // hrmstate
            if (rtrim($pathinfo, '/') === '/state') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmstate');
                }

                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::indexAction',  '_route' => 'hrmstate',);
            }

            // hrmstate_show
            if (preg_match('#^/state/(?P<id>[^/]++)/show/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmstate_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmstate_show')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::showAction',));
            }

            // hrmstate_edit
            if (preg_match('#^/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmstate_edit')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::editAction',));
            }

            // hrmstate_new
            if ($pathinfo === '/state/new') {
                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::newAction',  '_route' => 'hrmstate_new',);
            }

            // hrmstate_delete
            if (preg_match('#^/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmstate_delete')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::deleteAction',));
            }

            // hrmstate_update
            if (preg_match('#^/state/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmstate_update')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmStateController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/roles')) {
            // hrmroles
            if (rtrim($pathinfo, '/') === '/roles') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmroles');
                }

                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::indexAction',  '_route' => 'hrmroles',);
            }

            // hrmroles_show
            if (preg_match('#^/roles/(?P<id>[^/]++)/show/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hrmroles_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmroles_show')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::showAction',));
            }

            // hrmroles_edit
            if (preg_match('#^/roles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmroles_edit')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::editAction',));
            }

            // hrmroles_new
            if ($pathinfo === '/roles/new') {
                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::newAction',  '_route' => 'hrmroles_new',);
            }

            // hrmroles_delete
            if (preg_match('#^/roles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmroles_delete')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::deleteAction',));
            }

            // hrmroles_update
            if (preg_match('#^/roles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrmroles_update')), array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::updateAction',));
            }

            // hrmroles_create
            if ($pathinfo === '/roles/create') {
                return array (  '_controller' => 'Hrms\\Bundle\\EmployeeBundle\\Controller\\HrmRolesController::createAction',  '_route' => 'hrmroles_create',);
            }

        }

        // acme_hello_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_hello_homepage')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
