@extends('layouts.app')

@section('content')
    <div class="container">

         <div class="row">
             <div class="panel panel-default">
             <div class="panel-heading">个人信息</div>
             <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                <form role="form" method="post" class="form-horizontal" action="{{url('individual/update')}}">
                    {!!csrf_field()!!}

                    <div class="form-group">
                        <label for="Idcardid">身份证号 </label>
                        <div class="col-md-6">
                            <input type="text" id="Idcardid" name="Idcardid" value="{{$individual->Idcardid}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <div class="col-md-6">
                        <input type="text" id="name" name="name" value="{{$individual->name}}" class="form-control" readonly>
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="income">年收入</label>
                        <div class="col-md-6">
                        <input type="text" id="income" name="income" value="{{$individual->income}}" class="form-control" readonly>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="sex">性别</label>
                        <div class="col-md-6">
                        <select class="form-control" name="sex" id="sex" disabled>
                            @if($individual->sex==0)
                                <option value="0" selected>男</option>
                                <option value="1">女</option>
                            @else
                                <option value="0" >男</option>
                                <option value="1" selected>女</option>
                            @endif

                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date">生日</label>

                        <div class="col-md-6 date">
                            <div class="input-group input-append date" id="datePicker">
                                <input type="text" class="form-control" name="birthday" id="date" value="{{$individual->birthday}}" readonly>
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                        <input type="hidden" name="family_id" value="{{$individual->family_id}}">
                        </div>

                <div class="form-group">
                        <div class="col-md-6">
                        <input type="submit" id="submit" name="submit" value="提交更改" class="btn-primary form-control">
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-6">
                        <input type="button" id="edit" name="edit" value="编辑文档" class="btn-primary form-control" onclick="enableEdit()">
                            </div>
                        </div>
                </form>
                </div>
             </div>
             </div>
                <div class="form-group">

                     <form role="form" method="post" action="{{route('individual.delete',['id'=>$individual->Idcardid])}}">
                     <div class="col-md-6">
                     <input type="submit" id="delete" name="delete" value="删除此文档" class="btn-warning form-control">
                         </div>
                     </form>
                </div>


             </div>
        </div>
    </div>
   <script>

       function enableEdit(){
           document.getElementById("Idcardid").readOnly=false;
           document.getElementById("name").readOnly=false;
           document.getElementById("income").readOnly=false;
           document.getElementById("sex").disabled=false;
           document.getElementById("date").disabled=false;
           $('#datePicker')
                   .datepicker({
                       format: 'yyyy/mm/dd'
                   });
       }

   </script>
@endsection
