<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // 6. Method controller untuk halaman contact
    public function contact()
    {
        $kontak = ['email' => 'emailkamu@gmail.com', 'kota' => 'Medan'];
        return view('contact', ['kontak' => $kontak]);
    }
}