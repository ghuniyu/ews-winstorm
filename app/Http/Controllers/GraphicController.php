<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\DataAngin;
class GraphicController extends Controller
{
    public function index()
    {
    	$data= DataAngin::all();
    
    	return view('user/graphic')->with('datas', $data);

    }
}
