@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">贫困人口信息管理</div>

                <div class="panel-body">
                    你已登陆成功！！
                </div>
            </div>
        </div>
    </div>
</div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/1.jpg" alt="1 slide">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <img src="img/2.jpg" alt="2 slide">
            <div class="carousel-caption">
                
            </div>
        </div>
        <div class="item">
            <img src="img/3.jpg" alt="3 slide">
            <div class="carousel-caption">

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">上一页</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">下一页</span>
    </a>
</div>

<div class="container" id="summary-container">
    <div class="row">
        <div class="col-md-4">
            <img class="img-circle" src="img/4.jpg" alt="1">
            <h2>搜索家庭信息</h2>
            <p>在这里可以快速搜索到登记过的家户信息。</p>
            <p><a class="btn btn-default" href="#" role="button">点我进入</a></p>
        </div>
        <div class="col-md-4">
            <img class="img-circle" src="img/5.jpg" alt="2">
            <h2>新建家户</h2>
            <p>在这里可以新建家户，为流动人员登记信息。</p>
            <p><a class="btn btn-default" href="#" role="button">点我进入</a></p>
        </div>
        <div class="col-md-4">
            <img class="img-circle" src="img/6.jpg" alt="3">
            <h2>搜索个人信息</h2>
            <p>在这里可以根据身份证号快速搜索到登记过的个人信息。</p>
            <p><a class="btn btn-default" href="#" role="button">点我进入</a></p>
        </div>
    </div>
</div>
@endsection
