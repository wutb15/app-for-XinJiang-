<?php

namespace App\Http\Controllers;

use App\Familycondition;
use Illuminate\Http\Request;

use App\Http\Requests;

class FamilyController extends Controller
{
    protected $fields = [
        'family_name' => '',
        'family_location' => '',
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request){
        $this->validate($request, [
            'family_name'=>'required',
            'family_location'=>'required',
        ]);
        $family = new Familycondition;
        foreach (array_keys($this->fields) as $field)
        {
            $family->$field = $request->input($field);
        }
        if($family->save())
        {
            return redirect('success');
        }
        else
        {
            return redirect('failure')->withErrors('创建失败');
        }
    }
    
    
    public function delete($id){
        $result=Familycondition::find($id);
        if(!$result->members->first()) {
            if ($result->delete()) {
                return redirect('success');
            } else {
                return redirect('failure')->withErrors('删除失败');
            }
        }
        else{
            return redirect('failure')->withErrors('不能删除还有家庭成员的家庭');
        }

    }


    public function edit(Request $request)
    {
        $this->validate($request, [
            'family_name'=>'required',
            'family_location'=>'required',
        ]);
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
            return redirect('failure')->withErrors('保存失败');
        }

    }
    
    

    public function show($id){
        return view('family.show')->with('family',Familycondition::find($id));
    }//一个家庭信息，外加成员简略信息如身份证
    public function search(Request $request)
    {
        if($request->input('method')=='accurate')
        {
            return $this->accurate_search($request);
        }
        else if($request->input('method')=='range_income')
        {
            return $this->income_search($request);
        }
        else
        {
            return redirect('failure')->withErrors('不存在');
        }

    }

    public function accurate_search(Request $request){
        $this->validate($request, [
            'family_id'=>'required|numeric'
        ]);
        $fam_id =$request->input('family_id');
        if(Familycondition::find($fam_id))
        {
            return redirect(route('family.show',['id'=>$fam_id]));
        }
        else
        {
            return redirect('failure')->withErrors('找不到信息');
        }
    }

    public function income_search(Request $request)
    {
       $this->validate($request, [
            'min_income'=>'required|numeric',
            'max_income'=>'required|numeric'
        ]);
        $max_income=$request->get('max_income');
        $min_income=$request->get('min_income');

        if(Familycondition::where('family_income','<',$max_income)
            ->where('family_income','>',$min_income)->count())
        {
            $families=Familycondition::where('family_income','<',$max_income)
                ->where('family_income','>',$min_income)->get();
            return view('family.income_show')->with('families',$families);
        }
        else
        {
            return redirect('failure')->withErrors('没有这样的家庭');

        }

    }
}
