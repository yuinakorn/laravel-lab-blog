<?php

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


### แสดงเพจกับค่า
Route::get('/contact','ProductController@contact');

### แสดงหน้าเพจธรรมดา
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/menu','menu');
// Route::view('/show','menu');
Route::view('/show/menu','menu')->name('cmail');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog/{id}/{author}', function($id,$author){
//     $nameblog = $id.'='.$author;
//     return view('blog')->with("data",$nameblog);

// });


###  array  ####
Route::get('/blog/{id}', function($id){
    $pages = [
        1 => ['title'=>'page <span style="color:red">1</span>'],
        2 => ['title'=>'page 2'],
        3 => ['title'=>'page 3'],
        4 => ['title'=> 5000 ],
    ];
    ## สำหรับแสดงผล array
    ##// dd($pages);  
    return view('blog',['data'=>$pages[$id]]);
});

// Route::get('/blog/{id}', function($id){
//     $pages = [
//         1 => ['title'=>'page <span style="color:red">1</span>'],
//         2 => ['title'=>'page 2'],
//         3 => ['title'=>'page 3'],
//         4 => ['title'=> 5000 ],
//     ];
//     ## สำหรับแสดงผล array
//     ##// dd($pages);  
//     return view('blog',['data'=>$pages[$id]]);
// })->name('blog');


Route::get('/blog', function(){
    return view('blog');
});

// Route::get('/product', function(){
//     return view('showProduct');
// });
 
// Route::get('/product', function(){
//     $price = 120;
//     $user = ['a','b','c'];
//     return view('showProduct',['users'=>$user])->with('price',$price);
// });
 
Route::get('/product','ProductController@index');
 