<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestingModel;

class Testing extends Controller
{
    public function index(){
        return view('test', [
            "data" => TestingModel::all()
        ]);
    }
}
