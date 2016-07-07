
@extends('layouts.app')

@section('content')

<form role="form" action="{{url('family/search')}}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="family_id">家庭编号</label>
        <input type="text"  class="form-control"  id="family_id"  name="family_id">

    </div>
    <div class="form-group">
        <input type="submit" class="form-control"  id="submit_id" value="搜索">
    </div>


</form>


<form role="form" action="{{url('family/search')}}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="max_income">上限年收入(整数)</label>
        <input type="text" class="form-control" id="max_income"  name="max_income">
    </div>
    <div class="form-group">
        <label for="min_income">下限年收入（整数）</label>
        <input type="text" class="form-control" id="min_income" name="min_income">
    </div>
    <div class="form-group">
        <input type="submit" class="form-control"  id="submit_id" value="搜索">
    </div>

</form>
@endsection