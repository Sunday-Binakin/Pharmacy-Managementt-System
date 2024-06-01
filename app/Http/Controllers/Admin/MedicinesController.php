<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicinesModel;
use App\Models\MedicinesStockModel;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function medicines(Request $request)
    {
        $page_title = "Medicines";
        $records = MedicinesModel::where('isDeleted', '=', '0')->get();
        return view('admin.medicines.index', compact('records', 'page_title'));
    }
    public function add_medicines()
    {
        $page_title = "Add Medicines ";
        return view('admin.medicines.add', ['page_title' => $page_title]);
    }

    public function add_update($id = '', Request $request)
    {
        // dd($request->all());
        if (!empty($id)) {
            $Save_update = MedicinesModel::find($id);
        } else {
            $Save_update = new MedicinesModel;
        }
        // $Save_update = new MedicinesModel;
        $Save_update->name = $request->name;
        $Save_update->packing = $request->packing;
        $Save_update->generic_name = $request->generic_name;
        $Save_update->supplier_name = $request->supplier_name;
        $Save_update->save();
        return redirect('admin/medicines')->with('success', 'Medicine Successfully saved');
    }
    public function edit_medicines($id, Request $request)
    {
        // echo $id;die();
        $page_title = 'Edit Medicines';
        $records = MedicinesModel::find($id);
        return view('admin.medicines.edit', compact('records', 'page_title'));
    }

    public function update_medicines($id, Request $request)
    {
        // echo $id;die();
        // $page_title = 'Edit Customer';
        $Save_update =   MedicinesModel::find($id);
        $Save_update->name = $request->name;
        $Save_update->packing = $request->packing;
        $Save_update->generic_name = $request->generic_name;
        $Save_update->supplier_name = $request->supplier_name;
        $Save_update->save();
        return redirect('admin/medicines')->with('success', 'medicines successfully updated');
    }
    public function delete_medicines($id, Request $request)
    {
        //echo $id;die;
        $delete_record = MedicinesModel::find($id);
        $delete_record->isDeleted = 1;
        $delete_record->save();
        // $delete_record->delete();
        return redirect('admin/medicines')->with('error', 'medicines successfully deleted');
    }
    public function medicine_stock_list()
    {
        $page_title = "Add Medicine Stock";
        return view('admin.medicines_stock.index', ['page_title' => $page_title]);
    }
    public function medicine_stock_add()
    {
        $page_title = "Add Medicine Stock";
        $records = MedicinesModel::where('isDeleted', '=', 0)->get();
        return view('admin.medicines_stock.add', compact('records', 'page_title'));
    }
    public function medicine_stock_store(Request $request)
    {
        $Save_update =  new  MedicinesStockModel;
        $Save_update->medicine_id = $request->medicine_id;
        $Save_update->batch_id = $request->batch_id;
        $Save_update->expiry_date = $request->expiry_date;
        $Save_update->mrp = $request->mrp;
        $Save_update->rate = $request->rate;
        $Save_update->save();
        return redirect('admin/medicines_stock')->with('success', 'medicines Stock  successfully Saved');
    }
}
