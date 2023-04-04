
<!DOCTYPE html>
<html>
<head>
    <title>Employee Application </title>
</head>
<body>
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<div class="container">

    <header class="row">
       @include('users.header')
    </header>

    <div class= "content">
        @yield('content')
    </div>

    <footer class="row">
       @include('users.footer')
    </footer>
</div>
   
</body>
</html>