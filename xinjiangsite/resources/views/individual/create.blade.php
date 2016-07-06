@extends('layouts.app')

@section('content')
    <div class="container">
        <form role="form" method="post" action="{{url('individual/update')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="Idcardid">身份证号 </label>
                    <input type="text" id="Idcardid" name="Idcardid" value="" class="form-control">

                </div>
                <div class="col-md-6">
                    <label for="name">姓名</label>
                    <input type="text" id="name" name="family_name" value="" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="income">年收入</label>
                    <input type="text" id="income" name="income" value="" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="sex">性别</label>
                    <select class="form-control" name="sex" id="sex">
                        <option value="0">男</option>
                        <option value="1">女</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <label class="col-xs-3 control-label" for="date">生日</label>
                <div class="col-xs-5 date">
                    <div class="input-group input-append date" id="datePicker">
                        <input type="text" class="form-control" name="birthday" id="date">
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>

            </div>
            <div class="row">
                <input type="hidden" name="family_id" value="{{$family_id}}">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" id="submit" name="submit" value="创建" class="btn-primary form-control">
                </div>
            </div>
        </form>

    </div>
    <script>
        $('#datePicker')
                .datepicker({
                    format: 'mm/dd/yyyy'
                });
    </script>
@endsection
