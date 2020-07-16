<?php
$router->group(['prefix' => 'instagram_photo'], function ($router) {
    $router->get('/', 'InstagramPhotoController@index')->name('instagram_photo.index');
    $router->get('create', 'InstagramPhotoController@create')->name('instagram_photo.create');
    $router->post('/create', 'InstagramPhotoController@postCreate')->name('instagram_photo.create');
    $router->get('/edit/{id}', 'InstagramPhotoController@edit')->name('instagram_photo.edit');
    $router->post('/edit/{id}', 'InstagramPhotoController@postEdit')->name('instagram_photo.edit');
    $router->post('/delete', 'InstagramPhotoController@deleteList')->name('instagram_photo.delete');
});