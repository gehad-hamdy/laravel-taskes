<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ConfiguratorController extends Controller
{
    public function order(){
        $categories = Categories::all();

        return view('component', ['categories' => $categories]);
    }

}
