@extends('layouts.app')

@section('content')
    <div class="container">
        <form role="form" method="post" action="{{url('individual/update')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="Idcardid">身份证号 </label>
                    <input type="text" id="Idcardid" name="Idcardid" value="{{$individual->Idcardid}}" class="form-control">

                </div>
                <div class="col-md-6">
                    <label for="name">姓名</label>
                    <input type="text" id="name" name="family_name" value="{{$indivdual->name}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="income">年收入</label>
                    <input type="text" id="income" name="income" value="{{$individual->income}}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="sex">性别</label>
                    <select class="form-control" name="sex" id="sex">
                        <option>男</option>
                        <option>女</option>
                    </select>
                </div>

            </div>
            <div class="row">
              //TODO date

            </div>
            <div class="row">

            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" id="submit" name="submit" value="提交更改" class="btn-primary form-control">
                </div>
                <div class="col-md-6">
                    <input type="button" id="edit" name="edit" value="编辑文档" class="btn-primary form-control">
                </div>
            </div>
        </form>
        <div class="row">

            <form role="form" method="post" action="{{route('family/delete',['id'=>$family->family_id])}}">
                <input type="submit" id="delete" name="delete" value="删除此文档" class="btn-warning form-control">
            </form>

        </div>
        //展示个人信息时
        @foreach($family->members as $member)
            <div class="row">
                <div class="col-md-6">
                    身份证号为 {{$member->IDcardid}}
                </div>
                <div class="col-md-6">
                    姓名为  {{$member->name}}
                </div>
            </div>
            <div class="row">
                <div class ="col-md-12">
                    <a href="{{route('indiviudal/show',['id'=>$member->IDcardid])}}" class="btn-primary">详细信息</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
