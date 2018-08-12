<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Unreal Engine学习、开发者社区，致力于unreal引擎学习交流平台。"/>
    <meta name="keywords" content="unreal,蓝图,3D游戏引擎,unreal社区,unreal教程,unreal视频,unreal新手,UE4"/>
    
    <!-- Bootstrap CSS 自定义样式 -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Font Awesome 字体 -->
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>@yield('title', 'Unreal驿站') - Unreal驿站</title>
    
  </head>
  <body>
    <noscript>
      <h1>这个页面需要浏览器支持（启用）JavaScript</h1>
    </noscript>

    <div id="container">
      <header id="header">
        @include('layouts._header')
      </header>

      <div id="page" class="container-fluid">
        @include('shared._messages')      
        @yield('content')
      </div>

      <footer id="footer" class="footer">
        @include('layouts._footer')
      </footer>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- 用于支持手势滑动 -->
    <script src="/plugins/jquery.hammer.js-master/jquery.hammer.js"></script>

    <script>
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
    </script>

    <script>
    $(function (){
        $("[data-toggle='popover']").popover();
    });
    </script>

  </body>
  <script type="text/javascript">
    $('#carousel-generic').hammer().on('swipeleft', function(){  
    $(this).carousel('next');});  
  
    $('#carousel-generic').hammer().on('swiperight', function(){  
    $(this).carousel('prev');});
  </script>
</html>