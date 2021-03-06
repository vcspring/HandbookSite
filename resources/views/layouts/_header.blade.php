
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-left" href="{{ route('home') }}"><img width="45" alt="UnrealHandbook" style="max-width:100px;margin-top:5px;margin-right:10px;" src="/img/UnrealHandbook_logo_b50.png"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="top-navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a href="{{ route('home') }}"> <i class="fa fa-home fa-lg fa-fw"></i> 社区 </a>
        </li>
        <!-- 分类 -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  data-hover="dropdown" data-delay="300" data-close-others="true" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-list-ul fa-lg fa-fw" aria-hidden="true"></i> 分类 <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="#">
                <i class="fa fa-question-circle fa-lg fa-fw"></i> 技术问答 </a>
            </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">
                <i class="fa fa-laptop fa-lg fa-fw"></i> 招聘求职 </a>
            </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">
                <i class="fa fa-link fa-lg fa-fw"></i> 链接分享 </a>
            </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">
                <i class="fa fa-language fa-lg fa-fw"></i> 外文翻译 </a>
            </li>
          </ul>
        </li>
        <!-- 教程菜单 -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  data-hover="dropdown" data-delay="300" data-close-others="true" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book fa-lg fa-fw" aria-hidden="true"></i> 教程 <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="#">引擎基础入门</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">使用C++编程</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">蓝图编程</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">进阶</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">材质</a></li>
          </ul>
        </li>
      </ul>

      <form method="GET" action="https://laravel-china.org/search" accept-charset="UTF-8" class="navbar-form navbar-left hidden-sm hidden-md">
        <div class="form-group">
          <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="">
        </div>
        <button type="submit" class="btn btn-default">提交</button>
      </form>

      <ul class="nav navbar-nav navbar-right github-login">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{ Auth::user()->name }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
              <li><a href="#">编辑资料</a></li>
              <li class="divider"></li>
              <li>
                <a id="logout" href="#">
                  <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                  </form>
                </a>
              </li>
            </ul>
          </li>
        @else

          <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-default login-btn no-pjax">
            <i class="fa fa-user"></i>登 录
          </a></li>

          <li class="nav-item"><a href="{{ route('signup') }}" class="btn btn-default login-btn no-pjax">
            <i class="fa fa-user-plus"></i>注 册
          </a></li>
        
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>