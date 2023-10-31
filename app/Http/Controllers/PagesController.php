<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $data = array(
            'heading' => 'Latest Gigs',
            'listings' => Listing::all()
        );
        return view('listings')->with($data);
    }

    public function show($id) {
        $listing = Listing::find($id);
        return view('listing')->with('listing', $listing);
    }

}
