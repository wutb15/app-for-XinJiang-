@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">个人信息</div>
                <div class="panel-body">
                    <div class="col-md-10 col-md-offset-1">
                        <form role="form" method="post" class="form-horizontal" action="{{url('individual/add')}}">
                            {!!csrf_field()!!}

                            <div class="form-group {{$errors->has('Idcardid') ? 'has-error':''}}">
                                <label for="Idcardid" class="col-md-4 control-label">身份证号 </label>
                                <div class="col-md-6">
                                    <input type="text" id="Idcardid" name="Idcardid" value="" class="form-control">
                                    @if ($errors->has('Idcardid'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Idcardid') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('name') ? 'has-error':''}}">
                                <label for="name" class="col-md-4 control-label">姓名</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" value="" class="form-control" >
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('income') ? 'has-error':''}}">
                                <label for="income" class="col-md-4 control-label">年收入</label>
                                <div class="col-md-6">
                                    <input type="text" id="income" name="income" value="" class="form-control" >
                                    @if ($errors->has('income'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('income') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-md-4 control-label">性别</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="sex" id="sex">
                                        <option value="0" >男</option>
                                        <option value="1" selected>女</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-md-4 control-label">生日</label>

                                <div class="col-md-6 date">
                                    <div class="input-group input-append date" id="datePicker">
                                        <input type="text" class="form-control" name="birthday" id="date" value="" readonly>
                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                                <input type="hidden" name="family_id" value="{{$family_id}}">
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-5">
                                    <input type="submit" id="submit" name="submit" value="创建" class="btn btn-primary form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('#datePicker')
                .datepicker({
                    format: 'yyyy/mm/dd'
                });
    </script>
@endsection
