<?php

namespace App\Http\Controllers;

use App\Individualcondition;
use App\Familycondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndividualController extends Controller
{
    protected $fields = [
        'IDcardid' => '',
        'sex enum' => '',
        'family_id' => 0,
        'birthday' => '',
        'income' => 0,
        'name' =>''
    ];
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create(Request $request){
        $individual = new IndividualController;
        $id = $request->input('family_id');
        $search = Familycondition::find($id);
        if ($search) {
            foreach (array_keys($this->fields) as $field) {
                $individual->$field = $request->input($field);
            }
            $individual->save();
            return redirect('success');
        }
        else{
            return redirect('/failure')->withErrors("找不到信息!");
        }
    }
    
    public function edit(Request $request){
        $ind_id = $request->input('IDcardid');
        $result=Individualcondition::find($ind_id);
        if (!$result)
            return redirect('/failure')->withErrors("找不到信息!");
        else
        {
            foreach (array_keys($this->fields) as $field)
            {
                if($field=='family_id')  continue;
                $result->$field = $request->input($field);
            }
            $result->save();
            return redirect()->route('individual/show',['id'=>$result->IDcardid]);
        }
    }//不可以变动家庭
    
    public function delete($id){
        $result=Individualcondition::find($id);
        if (!$result)
            return redirect('/failure')->withErrors("找不到信息!");
        else{
            $result->delete();
            return redirect('success');
        }
    }
    
    public function move(Request $request){
        $id = $request->input('family_id');
        $search = Familycondition::find($id);
        if ($search) {
            $search->family_id = $request->input('new_family_id');
            $search->save();
            return redirect('success');
        }
        else return redirect('/failure')->withErrors("找不到信息!");
    }//唯一作用是移动,迁户口
    
    public function show($id){
        return view('individual.show')->with('indiviudal',Individualcondition::find($id));//这是一个示例
    }//个人精确信息
    
    public function search(Request $request){
        $ind_id =$request->input('id');
        $result=Individualcondition::find($ind_id);
        if (!$result)
            return redirect('/failure')->withErrors("找不到信息!");
        else
            return redirect()->route('individual/show',['id'=>$result->IDcardid]);
    }
    //
}
