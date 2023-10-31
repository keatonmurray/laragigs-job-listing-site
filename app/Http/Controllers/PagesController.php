<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $data = Listing::all();
        return view('listings')->with($data);
    }
}
