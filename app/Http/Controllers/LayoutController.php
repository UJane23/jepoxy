<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function index() {
        return \View::make('pages.index');
    }
}