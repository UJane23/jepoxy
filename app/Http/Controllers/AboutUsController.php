<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index() {
        return \View::make('pages.about_us');
    }
}
