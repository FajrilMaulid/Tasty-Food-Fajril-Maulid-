<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri() {
        return view('user.page.galeri');
    }
}
