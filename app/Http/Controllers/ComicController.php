<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /*
    * Detail page for a comic item
    */
    public function show($id) {
        return 'Detail page for id: ' . $id;
    }
}
