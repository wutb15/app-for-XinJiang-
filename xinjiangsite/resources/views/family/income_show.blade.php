@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            @foreach($families as $family)
                <div class="panel panel-default" style="margin-bottom: 60px">
                    <div class="panel-heading">该家庭信息</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom: 30px">
                            <form>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">家庭名称为</label>
                                    <div class="col-md-6">
                                        <input type="text" value="{{$family->family_name}}" class="form-control" id="name" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Idcardid" class="col-md-4 control-label">家庭收入为</label>
                                    <div class="col-md-6">
                                        <input type="text" value="{{$family->family_income}}" class="form-control" id="Idcardid" readonly>
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="row">
                            <div class ="col-md-5 col-md-offset-5">
                                <a href="{{route('family.show',['id'=>$family->family_id])}}"  class="btn btn-primary"  role="button">详细信息</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection