
 @extends('layouts.app')

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-default" style="margin-bottom: 60px">
                 <div class="panel-heading">家庭信息</div>
                 <div class="panel-body">
                    <form role="form" method="post" action="{{url('family/update')}}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('family_id') ?  'has-error' : '' }}" >
                            <label for="family_id" class="col-md-4 control-label">家庭编号</label>

                            <div class="col-md-6">
                                <input id="family_id" type="text" class="form-control" name="family_id" value="{{$family->family_id}}" style="margin-bottom: 30px" readonly>

                                @if ($errors->has('family_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('family_name') ?  'has-error' : '' }}" >
                            <label for="family_name" class="col-md-4 control-label">家庭名称</label>

                            <div class="col-md-6">
                                <input id="family_name" type="text" class="form-control" name="family_name" value="{{ $family->family_name}}" style="margin-bottom: 30px" readonly>

                                @if ($errors->has('family_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('family_location') ? ' has-error' : '' }}" >
                            <label for="family_location" class="col-md-4 control-label">家庭住址</label>

                            <div class="col-md-6">
                                <input id="family_location" type="text" class="form-control" name="family_location" value="{{ $family->family_location }}"  style="margin-bottom: 30px" readonly>

                                @if ($errors->has('family_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" id="submit" name="submit" value="提交更改" class="btn-primary form-control"  style="margin-bottom: 30px">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" >
                                <input type="button" id="edit" name="edit" value="编辑文档" class="btn-primary form-control"  onclick="Edit()"  style="margin-bottom: 30px" >
                            </div>
                        </div>



                    </form>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <form role="form" method="post" action="{{route('family.delete',['id'=>$family->family_id])}}" style="margin-bottom: 60px">
             <input type="submit" value="删除此文档" name="delete" class="btn btn-danger">
         </form>
     </div>
     <div class="col-md-6 col-md-offset-3">
        @foreach($family->members as $member)
            <div class="panel panel-default" style="margin-bottom: 60px">
                <div class="panel-heading">家庭成员信息</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom: 30px">
                        <form>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">姓名为</label>
                                <div class="col-md-6">
                                    <input type="text" value="{{$member->name}}" class="form-control" id="name" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Idcardid" class="col-md-4 control-label">身份证号为</label>
                                <div class="col-md-6">
                                     <input type="text" value="{{$member->Idcardid}}" class="form-control" id="Idcardid" readonly>
                                </div>
                            </div>


                        </form>
                    </div>

                    <div class="row">
                        <div class ="col-md-5 col-md-offset-5">
                             <a href="{{route('individual.show',['id'=>$member->Idcardid])}}"  class="btn btn-primary"  role="button">详细信息</a>
                        </div>
                    </div>
                 </div>
             </div>
         @endforeach
     </div>
     <div class="row">
         <div class="col-md-6">
             <a href="{{route('individual.add',['id'=>$family->family_id])}}" class="btn btn-primary"  role="button">新建家庭成员</a>
         </div>
     </div>

 </div>
    <script type="text/javascript">
         function Edit()
         {
            document.getElementById("family_name").readOnly=false;
            document.getElementById("family_location").readOnly=false;
         }
    </script>

@endsection