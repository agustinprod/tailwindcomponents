<?php

$router->get('components', 'ComponentsController@index');
$router->post('components', 'ComponentsController@store');

$router->get('components/{component}', 'ComponentsController@show');

$router->get('tags', 'TagsController@index');
