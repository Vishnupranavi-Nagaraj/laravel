
<!DOCTYPE html>
<html>
<head>
    <title>Employee Application </title>
</head>
<body>
  
<div class="container">

    <header class="row">
       @include('users.header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="row">
       @include('users.footer')
    </footer>
</div>
   
</body>
</html>