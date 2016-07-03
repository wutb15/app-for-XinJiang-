<?php

namespace App\Http\Controllers;

use App\Familycondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class FamilyController extends Controller
{
    protected $fields = [
        'family_id' => 0,
        'family_name' => '',
        'familylocation' => '',
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request){
        $family = new Familycondition;
        foreach (array_keys($this->fields) as $field){
            $family->$field = $request->get($field);
        }
        $family->save();
    }
    
    
    public function delete($id){
        $result=Familycondition::find($id);
        if (!$result) return redirect('/failure')->withErrors("找不到信息!");
        else{
            $result->delete();
            return redirect('/family/show/{id}');
        }   //delete,return
    }
    
    
    public function edit(Request $request){
        $fam_id =$request->input('id');
        $result=Familycondition::find($fam_id);
        if (!$result) return redirect('/failure')->withErrors("找不到信息!");
        else{
            foreach (array_keys($this->fields) as $field){
                $result->$field = $request->input($field);
            }
            $result->save();
            return redirect('/family/show/{id}');
        }
    }
    
    

    public function show($id){
        return view('family.show')->with(Familycondition::with('members'))->find($id);
    }//一个家庭信息，外加成员简略信息如身份证

    public function search(Request $request){
        $fam_id =$request->input('id');
        $result=Familycondition::find($fam_id);
        if (!$result)  return redirect('/failure')->withErrors("找不到信息!");
        else return redirect('/family/show/{id}');        //待定
    }//
}
