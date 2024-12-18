<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Create;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShoppingCartController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/product', [ProductController::class, 'index'])->name('product');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('productdetail');


Route::get('/productdetail', [ProductDetailController::class, 'index'])->name('productdetail');


Route::get('/shoppingcart', [ShoppingCartController::class, 'index'])->name('shoppingcart');



Route::middleware('web')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});



Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/faqs', [FAQsController::class, 'index'])->name('faqs');


Route::get('/create', [Create::class, 'index'])->name('create');

// Route pour afficher le formulaire d'ajout de produit
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Route pour stocker un nouveau produit
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
