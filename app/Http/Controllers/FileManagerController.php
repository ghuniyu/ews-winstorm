<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAngin;
class FileManagerController extends Controller
{
   public function file_manager()
   {
   	    	$data= DataAngin::all();
    	   	return view('admin.file_manager')->with('datas',$data);


   }
}
