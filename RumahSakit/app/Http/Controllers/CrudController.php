<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $data = Crud::all();
        //dd($data);
        return view('crud', compact('data'));
    }
}
