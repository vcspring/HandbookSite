@extends('layouts.default')

@section('content')
  <!-- 分栏 左右 -->
  <div class="row">
    <div class="col-md-9 topics-index main-col">
      <div class="panel panel-default">
        <div class="panel-heading">
          <ul class="list-inline topic-filter">
            <li data-toggle="tooltip" data-placement="top" title="最后回复排序">
              <a href="#" class="active">活跃</a>
            </li>
            <li data-toggle="tooltip" data-placement="top" title="只看加精的话题">
              <a href="#">精华</a>
            </li>
            <li data-toggle="tooltip" data-placement="top" title="点赞数排序">
              <a href="#">投票</a>
            </li>
            <li data-toggle="tooltip" data-placement="top" title="发布时间排序">
              <a href="#">最近</a>
            </li>
            <li data-toggle="tooltip" data-placement="top" title="无人问津的话题">
              <a href="#">零回复</a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-3 side-col">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">公告</div>
        <div class="panel-body">
          <p>这里是公告</p>
        </div>
      </div>
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">常用站点</div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="http://api.unrealengine.com/CHN/index.html">UE4 文档</a>
            </li>
            <li><a href="https://answers.unrealengine.com/index.html">UE4 AnswerHub</a>
            </li>
            <li><a href="https://stackoverflow.com/">StackOverFlow</a>
            </li>
          </ul>
        </div>
      </div>
      <div>
        <!-- 首页轮播 -->
        <div id="carousel-home" class="carousel slide" data-ride="carousel" data-interval="4500">
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
      </div>
    </div>
  </div>
@stop