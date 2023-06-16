<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShibeController extends Controller
{
    private $base_url = 'http://shibe.online/api/shibes?';
    public function get_shibas($count) {
//        $json = file_get_contents($this->base_url . 'count=' . $count);
//        $shiba = json_decode($json);
        return view('shiba');
    }
}
