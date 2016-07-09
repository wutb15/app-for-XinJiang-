@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <p class="text-center">
                操作成功
            </p>
            <div class="col-md-2 col-md-offset-5">
            <a  href="{{url('home')}}"  class="btn btn-info center-block" role="button">
                返回主页
            </a>
            </div>
@endsection
