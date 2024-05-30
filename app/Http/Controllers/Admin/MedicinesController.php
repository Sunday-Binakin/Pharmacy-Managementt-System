<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function medicines()
    {
        $page_title = "Medicines List";

        return view('admin.medicines.index', ['page_title' => $page_title]);
    }
public function add_medicines(){
    $page_title = "Medicines List";
    return view('admin.medicines.add',['page_title' => $page_title]);
}
}
