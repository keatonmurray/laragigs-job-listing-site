<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $data = [
            'heading' => 'Latest Gigs',
            'listings' => [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'This is a dummy description for listing one'
                ],

                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'This is a dummy description for listing two'
                ]
            ]
        ];
        return view('listings')->with($data);
    }
}
