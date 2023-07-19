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

Route::get('/', function () {
   
$data = [
    'links' =>[

            [
                'url'=> '#',
                'title'=> 'CHARACTERS',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'COMICS',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'MOVIES',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'TV',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'GAMES',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'COLLECTIBLES',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'VIDEOS',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'FANS',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'NEWS',
                'active'=> false 
            ],
            [
                'url'=> '#',
                'title'=> 'SHOP',
                'active'=> false 
            ],
    ]  
];
return view('homepage', $data);
})->name('homepage');