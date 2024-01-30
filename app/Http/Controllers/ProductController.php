<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {

        return  view('product.index');
    }
    public function create()
    {

        return  view('product.add');
    }
}
