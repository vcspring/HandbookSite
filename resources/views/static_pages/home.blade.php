@extends('layouts.default')
@section('content')
  <!-- 首页轮播 -->
  <div id="carousel-home" class="carousel slide" data-ride="carousel" data-interval="2500">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-home" data-slide-to="1"></li>
      <li data-target="#carousel-home" data-slide-to="2"></li>
      <li data-target="#carousel-home" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive"  src="/img/home_carousel/p1.jpeg" alt="nature">
        <div class="carousel-caption">
          <h3>自然环境模仿</h3>
          <p>自然 真实</p>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive" src="/img/home_carousel/p2.jpeg" alt="second item">
        <div class="carousel-caption">
          <h3>建筑场景</h3>
          <p>宏伟 再现</p>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive"  src="/img/home_carousel/p3.jpeg" alt="third item">
        <div class="carousel-caption">
          <h3>游戏开发</h3>
          <p>角色设计</p>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive" src="/img/home_carousel/p4.jpeg" alt="foruth item">
        <div class="carousel-caption">
          <h3>室内设计</h3>
          <p>效果展示</p>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive" src="/img/home_carousel/p5.jpeg" alt="fifth item">
        <div class="carousel-caption">
          <h3>工业设计</h3>
          <p>实时 快速开发</p>
        </div>
      </div>
    </div>
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- 注册提示页 -->
  <div class="jumbotron">
    <h1>Hello Unreal man</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Unreal 入门教程</a> 的示例项目主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop