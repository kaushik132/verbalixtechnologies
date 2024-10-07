<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('contacts', ContactController::class);
    $router->resource('blog-categories', BlogCategoryController::class);
    $router->resource('blogs', BlogController::class);
    $router->resource('titles', TitleController::class);
    $router->resource('service-categories', ServiceCategoryController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('home-modifies', HomeModifController::class);
    $router->resource('navbars', NavbarController::class);
    $router->resource('quotes', QuoteController::class);
    $router->resource('homefaqs', HomeFaqController::class);
    $router->resource('testimonials', TestimonialController::class);
    $router->resource('homebanners', HomebannerController::class);



});
