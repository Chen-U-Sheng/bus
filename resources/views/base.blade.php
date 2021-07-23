
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>公車查詢</title> 
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/> 
</head> 
<body>
    <div class="container">
    <!-- 引用其他 blade -->
        @include('nav')              
    </div> 
    <div class="container" > 
        @yield('main') 
    </div> 
    <script src="{{ asset('js/app.js') }}" type="text/js"></script> 
</body> 
</html>