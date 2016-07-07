@extends('layouts.app')

@section('content')
    <div class="container">
        <form role="form" method="post" action="{{url('family/add')}}">
            {!! csrf_field()!!}
            <div class="row">
                <div class="col-md-6">
                    <label for="family_name">家庭名称</label>
                    <input type="text" id="family_name" name="family_name" value="" class="form-control" placeholder="在此输入家庭名称">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="family_location">家庭住址</label>
                    <input type="text" id="family_location" name="family_location" value="" class="form-control" placeholder="在此输入家庭住址">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" id="submit" name="submit" value="创建" class="btn-primary form-control">
                </div>
            </div>
        </form>
    </div>
@endsection