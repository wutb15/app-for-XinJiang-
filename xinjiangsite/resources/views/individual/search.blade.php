
@extends('layouts.app')
@section('content')
    <div id="formdiv" class="center-block" align="center">
        <div id="title" class="text-primary">
            请使用身份证号搜索居民
        </div>
        <form role="form" method="post" action="{{url('individual/search')}}">
            {!!csrf_field() !!}
            <div class="form-group">
                <label for="id">身份证号</label>
                <input type="text" name="Idcardid" id="id">
            </div>
            <div class="form-group">
                <input type="submit" class="btn-primary" name="search" id="search" value="搜索">
            </div>

        </form>
    </div>
    {{dump($errors)}}
@endsection

