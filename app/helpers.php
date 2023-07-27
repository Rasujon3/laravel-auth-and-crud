<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

function sharedMethod(Request $request)
{
    // Your shared logic here
    // if ($request->ajax()) {
        
        $data = Product::select('*');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    // }
}