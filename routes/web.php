<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

function getOrderCounts()
{

}

Route::get('/', function () {
    return view('index', [
        'categories' => Category::paginate(6),
        'products' => Product::paginate(30)
    ]);
});



Route::get('/dashboard', function(){


    $today = Order::whereDate('created_at', Carbon::today())->count();
    $yesterday = Order::whereDate('created_at', Carbon::yesterday())->count();
    $lastSevenDays = Order::where('created_at', '>=', Carbon::now()->subDays(7))->count();
    $thisMonth = Order::whereYear('created_at', Carbon::now()->year)
                      ->whereMonth('created_at', Carbon::now()->month)
                      ->count();


    return view('dashboard',[
        'contacts' => Contact::all(),
        'users' => User::all(),
        'orders' => Order::all(),
        'products' => Product::all(),
        'categories' => Category::all(),
        'today' => $today,
        'yesterday' => $yesterday,
        'last7Days' => $lastSevenDays,
        'thisMonth' => $thisMonth,
        "servers" => Role::where('name', 'SERVER')->first()->users
    ]);
})->name('dashboard')->middleware('auth');



Route::prefix('/product')->group(function(){
    Route::get('create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
    Route::get('list', [ProductController::class, 'list'])->name('product.list');
    Route::get('{product}', [ProductController::class, 'product'])->name('product');
    Route::get('list/admin', [ProductController::class, 'listAdmin'])->name('product.list.admin')->middleware('auth');
    Route::post('store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
    Route::get('update/{product}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');
    Route::put('update/store{product}', [ProductController::class, 'updateStore'])->name('product.update.store')->middleware('auth');
    Route::get('delete/{product}', [ProductController::class, 'delete'])->name('product.delete')->middleware('auth');
});


Route::prefix('/contact')->group(function(){
    Route::get('', [ContactController::class, 'create'])->name('contact.create');
    Route::get('list', [ContactController::class, 'list'])->name('contact.list')->middleware('auth');
    Route::post('store', [ContactController::class, 'store'])->name('contact.store')->middleware('auth');
    Route::get('show/{contact}', [ContactController::class, 'show'])->name('contact.show');
});




Route::prefix('/user')->group(function(){
    Route::get('list', [UserController::class, 'list'])->name('user.list')->middleware('auth');
    Route::get('register', [UserController::class, 'create'])->name('register');
    Route::post('store', [UserController::class, 'store'])->name('store_user')->middleware('auth');
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login-store', [UserController::class, 'loginStore'])->name('login.store');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('delete/{user}', [UserController::class, 'delete'])->name('user.delete')->middleware('auth');
});


Route::prefix('/category')->group(function(){
    Route::get('create', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::get('list', [CategoryController::class, 'list'])->name('category.list');
    Route::get('{category}', [CategoryController::class, 'category'])->name('category');
    Route::get('list/admin', [CategoryController::class, 'listAdmin'])->name('category.list.admin')->middleware('auth');
    Route::post('store', [CategoryController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('update/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::put('update/store/{category}', [CategoryController::class, 'updateStore'])->name('category.update.store')->middleware('auth');
    Route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('auth');
});


Route::prefix('/image')->group(function(){
    Route::get('delete/{image}', [ProductImagesController::class, 'delete'])->name('image.delete');
    Route::get('list', [ProductImagesController::class, 'list'])->name('image.list');
});



Route::prefix('/order')->group(function(){
    Route::post('create', [OrderController::class, 'create'])->name('order.create');
    Route::get('list', [OrderController::class, 'list'])->name('order.list')->middleware('auth');
    Route::post('valid', [OrderController::class, 'valid'])->name('order.valid')->middleware('auth');
    Route::get('{order}', [OrderController::class, 'show'])->name('order.show');
});












