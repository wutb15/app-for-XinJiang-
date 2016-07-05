<?php

namespace App\Http\Controllers;

use App\Familycondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class FamilyController extends Controller
{
    protected $fields = [
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
            $family->$field = $request->input($field);
        }
        if($family->save())
        {
            return redirect('success');
        }
        else
        {
            return redirect('failure');
        }
    }
    
    
    public function delete($id){
        $result=Familycondition::find($id);
        if (!$result)
            return redirect('/failure')->withErrors("找不到信息!");
        else{
            $result->delete();
            return redirect('success');
        }
    }


    public function edit(Request $request)
    {
        $fam_id =$request->input('family_id');
        $result=Familycondition::find($fam_id);
        foreach (array_keys($this->fields) as $field)
            {
                $result->$field = $request->input($field);
            }
        if ($result->save())
            {
                return redirect()->back();
            }
        else
        {
            return redirect('failure');
        }

    }
    
    

    public function show($id){
        return view('family.show')->with('family',Familycondition::find($id)->with('members'));
    }//一个家庭信息，外加成员简略信息如身份证

    public function search(Request $request){
        $fam_id =$request->input('id');
        $result=Familycondition::findOrFail($fam_id);
        return redirect()->route('family/show',['id'=>$result->family_id]);
    }//
}
