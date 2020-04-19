<?php
use\App\Product;
use\App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    
    /*$prod = new Product();

    $prod->nombre = 'Producto 7';
    $prod->slug = 'Producto 7';
    $prod->category_id = '1';
    $prod->descripcion_corta = 'Producto 7';
    $prod->descripcion_larga = 'Producto 7';
    $prod->especificaciones = 'Producto 7';
    $prod->datos_de_interes = 'Producto 7';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No';
    $prod->save();
    return $prod;
*/

//return view('welcome');
/*
    $prod = Category::find(2)->products;
    return $prod;
*/

    return view('tienda.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
