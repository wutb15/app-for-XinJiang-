<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FamilyController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create(Request $request){}
    
    
    public function delete($id){}
    
    
    public function edit(Request $request){}
    
    
    public function show($id){}//一个家庭信息，外加成员简略信息如身份证号
    public function  search()
    {
        return view('family.search');
    }

    //
}
