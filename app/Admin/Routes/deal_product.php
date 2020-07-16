<?php
$router->group(['prefix' => 'deal_product'], function ($router) {
    $router->get('/', 'DealProductController@index')->name('deal_product.index');
    $router->get('create', 'DealProductController@create')->name('deal_product.create');
    $router->post('/create', 'DealProductController@postCreate')->name('deal_product.create');
    $router->get('/edit/{id}', 'DealProductController@edit')->name('deal_product.edit');
    $router->post('/edit/{id}', 'DealProductController@postEdit')->name('deal_product.edit');
    $router->post('/delete', 'DealProductController@deleteList')->name('deal_product.delete');
});
