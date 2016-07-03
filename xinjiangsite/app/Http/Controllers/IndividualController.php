<?php

namespace App\Http\Controllers;

use App\Individualcondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndividualController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create(Request $request){}
    
    public function edit(Request $request){}//不可以变动家庭
    
    public function delete($id){}
    
    public function move(Request $request){}//唯一作用是移动,迁户口
    
    public function show($id){
        return view('individual.show')->with('indiviudal',Individualcondition::find($id));//这是一个示例
    }//个人精确信息
    
    public function search(Request $request){}
    //
}
