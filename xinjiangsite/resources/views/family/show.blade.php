
 @extends('layouts.app')

@section('content')
 <div class="container">
     <form role="form" method="post" action="{{url('family/update')}}">
         {{csrf_field()}}
         <div class="row">
            <div class="col-md-6">
             <label for="family_id">家庭编号 </label>
             <input type="text" id="family_id" name="family_id" value="{{$family->family_id}}" class="form-control">

            </div>
             <div class="col-md-6">
                 <label for="family_name">家庭名称</label>
                 <input type="text" id="family_name" name="family_name" value="{{$family->family_name}}" class="form-control">
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <label for="family_location">家庭住址</label>
                 <input type="text" id="family_location" name="family_location" value="{{$family->family_location}}" class="form-control">
             </div>
         </div>
         <div class="row">
             <div class="col-md-6">
                 <input type="submit" id="submit" name="submit" value="提交更改" class="btn-primary form-control">
             </div>
             <div class="col-md-6">
                 <input type="button" id="edit" name="edit" value="编辑文档" class="btn-primary form-control">
             </div>
         </div>
     </form>
     <div class="row">

        <form role="form" method="post" action="{{route('family/delete',['id'=>$family->family_id])}}">
                <input type="submit" id="delete" name="delete" value="删除此文档" class="btn-warning form-control">
        </form>

     </div>
     //展示个人信息时
     @foreach($family->members as $member)
         <div class="row">
             <div class="col-md-6">
                 身份证号为 {{$member->IDcardid}}
             </div>
             <div class="col-md-6">
                 姓名为  {{$member->name}}
             </div>
         </div>
         <div class="row">
             <div class ="col-md-12">
                 <a href="{{route('indiviudal/show',['id'=>$member->IDcardid])}}" class="btn-primary">详细信息</a>
             </div>
         </div>
     @endforeach

 </div>

@endsection