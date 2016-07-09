
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-bottom: 60px">
                <div class="panel-heading">精确搜索</div>
                <div class="panel-body">
                    <form role="form" action="{{url('family/search')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group{{$errors->has('family_id') ? 'has-error':''}}">
                                <label for="family_id" class="col-md-4 control-label">家庭编号</label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control"  id="family_id"  name="family_id" style="margin-bottom: 30px">


                                @if ($errors->has('family_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_id')}}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" id="submit_id"  value="搜索">
                            </div>

                        </div>


                     </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-bottom: 60px">
                <div class="panel-heading">范围搜索</div>
                <div class="panel-body">
                    <form role="form" action="{{url('family/income_search')}}" method="post">
                        {!!csrf_field()!!}
                        <div class="form-group {{$errors->has('max_income') ? 'has-error':''}}">
                            <label for="max_income" class="col-md-4 control-label">上限年收入(整数)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="max_income"  name="max_income" style=" margin-bottom: 30px">
                             </div>
                            @if ($errors->has('max_income'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('max_income') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('min_income') ? 'has-error':''}}">
                            <label for="min_income" class="col-md-4 control-label">下限年收入（整数）</label>
                            <div class="col-md-6">

                                <input type="text" class="form-control" id="min_income" name="min_income" style="margin-bottom: 30px">
                            </div>
                            @if ($errors->has('min_income'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('min_income') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" id="submit_id" value="搜索">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection