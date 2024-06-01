<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuppliersModel;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        //
        $page_title = "Suppliers";
        $records = SuppliersModel::get();
        return view('admin.suppliers.index', compact('records', 'page_title'));
    }
    public function create(Request $request)
    {
        $page_title = "Add Suppliers";
        $records = SuppliersModel::get();
        return view('admin.suppliers.add', compact('records', 'page_title'));
    }
    public function store(Request $request)
    {
        $save = new SuppliersModel();
        $save->suppliers_name = trim($request->suppliers_name);
        $save->suppliers_email = trim($request->suppliers_email);
        $save->contact_number = trim($request->contact_number);
        $save->address = trim($request->address);
        $save->save();
        return redirect('admin/suppliers')->with('success', 'suppliers successfully saved');
    }
}
