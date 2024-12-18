<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQsController extends Controller
{
    public function index ()
    {

        return view("faqs");
    }
}
