
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-primary">请在此使用身份证号进行搜索</p>
            </div>
        </div>
        <div class="row">
            <form role="form" method="post" action="{{url('individual/search')}}">
                {!!csrf_field() !!}
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type=submit class="btn btn-default">搜索</button>
                        </span>
                        <input type="text" class="form-control"  name="Idcardid" id="id"  placeholder="请在此输入身份证号码">
                    </div>

                </div>
                <div class="col-md-6">
                    @if($errors->has('Idcardid'))
                        <span class="help-block">
                            <strong>
                                {{$errors->first('Idcardid')}}
                            </strong>

                        </span>
                    @endif
                </div>

            </form>
        </div>
    </div>
    {{dump($errors)}}

@endsection

