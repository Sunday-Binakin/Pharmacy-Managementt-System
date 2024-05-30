<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomersModel;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CustomersController extends Controller
{
    public function customers(Request $request)
    {
        $page_title = 'Customers';
        $records = CustomersModel::get();
        return view('admin.customers.list', compact('page_title', 'records'));
    }
    public function add_customers(Request $request)
    {
        $page_title = 'Add Customer';
        return view('admin.customers.add', ['page_title' => $page_title]);
    }
    public function insert_add_customers(Request $request)
    {
        $page_title = 'Add Customer';
        $save = new CustomersModel;
        $save->name = trim($request->name);
        $save->contact_number = trim($request->contact_number);
        $save->address = trim($request->address);
        $save->doctor_name = trim($request->doctor_name);
        $save->doctor_address = trim($request->doctor_address);
        $save->save();
        return redirect('admin/customers')->with('success', 'Customer successfully created')->with('page_title', $page_title);
    }
    public function edit_customers($id, Request $request)
    {
        // echo $id;die();
        $page_title = 'Edit Customer';
        $records = CustomersModel::find($id);
        return view('admin.customers.edit', compact('records', 'page_title'));
    }

    public function update_customers($id, Request $request)
    {
        // echo $id;die();
       // $page_title = 'Edit Customer';
        $save =   CustomersModel::find($id);
        $save->name = trim($request->name);
        $save->contact_number = trim($request->contact_number);
        $save->address = trim($request->address);
        $save->doctor_name = trim($request->doctor_name);
        $save->doctor_address = trim($request->doctor_address);
        $save->save();
        return redirect('admin/customers')->with('success', 'Customer successfully updated');
    }
    public function delete_customers($id, Request $request)
    {
        //echo $id;die;
        $delete_record =CustomersModel::find($id);
        $delete_record->delete();
        return redirect('admin/customers')->with('error', 'Customer successfully deleted');
    }
}
