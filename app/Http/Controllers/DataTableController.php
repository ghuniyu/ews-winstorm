<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAngin;
class DataTableController extends Controller
{
    public function data_table()
    {
    	$data= DataAngin::all();
    	return view('admin/data_table')->with('datas',$data);


    }
}
