<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('state', new Route('/', array(
    '_controller' => 'HrmsEmployeeBundle:HrmState:index',
)));

$collection->add('state_show', new Route('/{id}/show', array(
    '_controller' => 'HrmsEmployeeBundle:HrmState:show',
)));

$collection->add('state_new', new Route('/new', array(
    '_controller' => 'HrmsEmployeeBundle:HrmState:new',
)));

$collection->add('state_create', new Route(
    '/create',
    array('_controller' => 'HrmsEmployeeBundle:HrmState:create'),
    array('_method' => 'post')
));

$collection->add('state_edit', new Route('/{id}/edit', array(
    '_controller' => 'HrmsEmployeeBundle:HrmState:edit',
)));

$collection->add('state_update', new Route(
    '/{id}/update',
    array('_controller' => 'HrmsEmployeeBundle:HrmState:update'),
    array('_method' => 'post|put')
));

$collection->add('state_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'HrmsEmployeeBundle:HrmState:delete'),
    array('_method' => 'post|delete')
));

return $collection;
