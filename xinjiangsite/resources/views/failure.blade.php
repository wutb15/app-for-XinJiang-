@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <p class="text-center">
                操作失败
            </p>
            <div class="col-md-2 col-md-offset-5">
            <button class="btn btn-info center-block" onclick="window.history.back()" role="button">返回上页</button>
            </div>
        </div>
    </div>
@endsection