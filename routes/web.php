<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Registeruser;
use App\Livewire\DropDown;
use App\Livewire\FileUpload;
use App\Livewire\AllUsers;
use App\Livewire\AllProducts;
use App\Livewire\Polling;
use App\Livewire\LoadingExample;
use App\Livewire\Calculator;
use App\Livewire\AllPosts;
use App\Livewire\CreatePost;
use App\Livewire\MultiStep;
use App\Livewire\JsComponent;
use App\Livewire\Transition;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter/',Counter::class);
Route::get('/register',Registeruser::class);
Route::get('/dropdown',DropDown::class);
Route::get('/fileupload',FileUpload::class);
Route::get('/users',AllUsers::class);
Route::get('/products',AllProducts::class);
Route::get('/poll',Polling::class);
Route::get('/loading',LoadingExample::class);
Route::get('/calculator',Calculator::class);
Route::get('/posts',AllPosts::class);
Route::get('/posts/create',CreatePost::class);
Route::get('/multistep',MultiStep::class);
Route::get('/js',JsComponent::class);
Route::get('/transition',Transition::class);

