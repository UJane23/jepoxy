<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function index() {
        return \View::make('personal');
    }

    public function wish() {
        return \View::make('personal.wishlist');
    }

    public function cart() {
        return \View::make('personal.cart');
    }
}
