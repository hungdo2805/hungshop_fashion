<?php
$router->group(['prefix' => 'partner'], function ($router) {
    $router->get('/', 'ShopPartnerController@index')->name('admin_partner.index');
    $router->get('create', 'ShopPartnerController@create')->name('admin_partner.create');
    $router->post('/create', 'ShopPartnerController@postCreate')->name('admin_partner.create');
    $router->get('/edit/{id}', 'ShopPartnerController@edit')->name('admin_partner.edit');
    $router->post('/edit/{id}', 'ShopPartnerController@postEdit')->name('admin_partner.edit');
    $router->post('/delete', 'ShopPartnerController@deleteList')->name('admin_partner.delete');
});