<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeCrontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Shop\ShoppingCartController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Orders;
use Illuminate\Support\Facades\Route;

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

## Rutas de Shop

Route::get('/', [ShopController::class, 'index'])->name('shop.index');
Route::get('/details/{id}', [ShopController::class, 'productDetails'])->name('shop.details');
Route::get('/cart', [ShopController::class, 'cart'])->name('shop.cart');
Route::get('/shopping', [ShopController::class, 'shop'])->name('shop.shop');
// add to cart ShopCartController
Route::post('addToCart',[ShoppingCartController::class, 'addToCart'])->name('shop.addToCart');
// delete from cart ShopCartController
Route::post('cart/delete',[ShoppingCartController::class, 'deleteItem'])->name('shop.deleteItem');
// update cart ShopCartController
Route::post('updateCart',[ShoppingCartController::class, 'updateCart'])->name('shop.updateCart');
// checkout ShopppingCartController
Route::get('/checkout',[ShoppingCartController::class, 'showcheckout'])->name('shop.showcheckout');
// checkout ShoppingCartController
Route::post('/checkout',[ShoppingCartController::class, 'checkout'])->name('shop.checkout');
// cart/update/quantity
Route::post('cart/update/quantity',[ShoppingCartController::class, 'updateQuantity'])->name('shop.updateQuantity');

// shop login
Route::get('/login',[ShopController::class, 'showLogin'])->name('shop.showLogin');
Route::post('/login',[ShopController::class, 'login'])->name('shop.login');
// shop register
Route::get('/register',[ShopController::class, 'showRegister'])->name('shop.showRegister');
// shop register
Route::post('/register',[ShopController::class, 'register'])->name('shop.register');

// logout
Route::get('/logout',[ShopController::class, 'logout'])->name('shop.logout');



// Rutas de Admin


// Rutas de category
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::post('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::post('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/getsubcategory/{id}', [CategoryController::class, 'getSubCategory'])->name('category.getsubcategory');


// Rutas de subcategory
Route::get('/subcategories', [SubCategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategories/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
Route::get('/subcategories/{id}', [SubCategoryController::class, 'show'])->name('subcategory.show');
Route::get('/subcategories/{id}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('/subcategories', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::post('/subcategory/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
Route::post('/subcategories/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.delete');

// Rutas de products
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/products/{id}', [ProductController::class, 'destroy'])->name('product.delete');



// Rutas de  orders
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::post('/order/update/{id}',[OrderController::class, 'update'])->name('order.update');


// welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// home
Route::get('/home', [HomeCrontroller::class, 'index'])->name('home');

// admin login
Route::get('/admin/login',[AuthController::class, 'showLogin'])->name('admin.showLogin');
Route::post('/admin/login',[AuthController::class, 'login'])->name('admin.login');

// admin logout
Route::get('/admin/logout',[AuthController::class, 'logout'])->name('admin.logout');

// admin register
Route::get('/admin/register',[AuthController::class, 'showRegister'])->name('admin.showRegister');
Route::post('/admin/register',[AuthController::class, 'register'])->name('admin.register');


