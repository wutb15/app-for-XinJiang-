
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-default">
                <div class="panel-heading">
                    请在此使用身份证号进行搜索
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{url('individual/search')}}">
                        {!!csrf_field() !!}
                        <div class="form-group {{$errors->has('Idcardid') ? 'has-error':''}}">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type=submit class="btn btn-default">搜索</button>
                                    </span>
                                    <input type="text" class="form-control"  name="Idcardid" id="id"  placeholder="请在此输入身份证号码">

                                </div>
                            </div>
                            @if($errors->has('Idcardid'))
                                <strong>
                                    {{$errors->first('Idcardid')}}
                                </strong>
                            @endif
                        </div>



                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection

