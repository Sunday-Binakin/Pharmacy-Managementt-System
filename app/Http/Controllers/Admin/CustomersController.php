<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CustomersController extends Controller
{
    public function customers(Request $request)
    {
        $page_title = 'Customers';
        return view('admin.customers.list', ['page_title' => $page_title]);
    }
    public function add_customers(Request $request)
    {
        $page_title = 'Add Customer';
        return view('admin.customers.add',['page_title' => $page_title]);
    }
}
