<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\DataTables;

class ShareController extends Controller
{
    // public function Share($request) {
    static function Share($request) {
        
        if (!$request->ajax()) {

            $data = Product::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
    }
}
