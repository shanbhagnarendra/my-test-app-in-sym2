<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('hrmcountry', new Route('/', array(
    '_controller' => 'HrmsEmployeeBundle:HrmCountry:index',
)));

$collection->add('hrmcountry_show', new Route('/{id}/show', array(
    '_controller' => 'HrmsEmployeeBundle:HrmCountry:show',
)));

$collection->add('hrmcountry_new', new Route('/new', array(
    '_controller' => 'HrmsEmployeeBundle:HrmCountry:new',
)));

$collection->add('hrmcountry_create', new Route(
    '/create',
    array('_controller' => 'HrmsEmployeeBundle:HrmCountry:create'),
    array('_method' => 'post')
));

$collection->add('hrmcountry_edit', new Route('/{id}/edit', array(
    '_controller' => 'HrmsEmployeeBundle:HrmCountry:edit',
)));

$collection->add('hrmcountry_update', new Route(
    '/{id}/update',
    array('_controller' => 'HrmsEmployeeBundle:HrmCountry:update'),
    array('_method' => 'post|put')
));

$collection->add('hrmcountry_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'HrmsEmployeeBundle:HrmCountry:delete'),
    array('_method' => 'post|delete')
));

return $collection;
