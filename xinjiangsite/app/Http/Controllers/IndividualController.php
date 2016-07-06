<?php

namespace App\Http\Controllers;

use App\Individualcondition;
use App\Familycondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndividualController extends Controller
{
    protected $fields = [
        'Idcardid' => '',
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
        $this->validate($request, [
            'Idcardid' => 'required|numeric|unique:individualconditions|size:18',
            'income'=>'required|numeric',
            'family_id'=>'required|numeric',
            'birthday'=>'required',
        ]);
        $individual = new IndividualController;
        $id = $request->input('family_id');
        $search = Familycondition::find($id);
        if ($search)
        {
            foreach (array_keys($this->fields) as $field) {
                $individual->$field = $request->input($field);
            }
            $individual->save();
            return redirect('success');
        }
        else
        {
            return redirect('/failure')->withErrors("找不到信息!");
        }
    }
    
    public function edit(Request $request){
        $this->validate($request, [
            'Idcardid' => 'required|numeric|unique:individualconditions|size:18',
            'income'=>'required|numeric',
            'family_id'=>'required|numeric',
            'birthday'=>'required',
        ]);
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
        if($result->delete())
        {
            return redirect('success');
        }
        else
        {
            return redirect('failure')->withErrors('删除失败');
        }
    }
    
    public function move(Request $request){
        $this->validate($request, [
            'family_id'=>'required|numeric',
        ]);
        $search=Individualcondition::find($request->input('Idcardid'));
        $target=Familycondition::findOrFail($request->input('family_id'));
        $search->family_id = $request->input('family_id');
        if($search->save())
        {
            return redirect('success');
        }
        else
        {
            return redirect('failure')->withErrors('保存失败');
        }
    }//唯一作用是移动,迁户口
    
    public function show($id){
        return view('individual.show')->with('indiviudal',Individualcondition::find($id));
    }//个人精确信息
    
    public function search(Request $request){
        $this->validate($request, [
            'Idcardid' => 'required|numeric|unique:individualconditions|size:18',
        ]);
        $ind_id =$request->input('id');
        $result=Individualcondition::findOrFail($ind_id);
        return redirect()->route('individual/show',['id'=>$result->IDcardid]);
    }
    //
}
