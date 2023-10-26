<?php

use Illuminate\Support\Facades\Route;

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

    $comics = config('comics.comics');
    //dd($comics);

    $merchandises = config('merch.images');
    //dd($merch);

    $listComics = config('footer-nav.listComics');
    $listShop = config('footer-nav.listShop');
    $listDc = config('footer-nav.listDc');
    $listSites = config('footer-nav.listSites');
    //dd($listComics, $listShop, $listDc, $listSites);

    $socials = config('footer-nav.socials');
    //dd($socials);

    $menu = config('header-nav.menu');
    //dd($menu);

    return view('home', compact('comics', 'merchandises', 'listComics', 'listShop', 'listDc', 'listSites', 'socials', 'menu'));
})->name('comics', 'merchandises', 'listComics', 'listShop', 'listDc', 'listSites', 'socials', 'menu');
