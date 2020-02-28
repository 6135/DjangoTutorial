<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://streamonion.com/kinnith/fontawesome/css/all.css"></link>
   <title>E-Shop</title>

  @yield('loaders')
  <style>
  body {
    overflow-x: hidden !important;
  }
</style>
</head>

<body>

  @include('layouts.navbar')
  @yield('content')
  @include('layouts.footer')  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  <script src="{{asset('resources/assets/js/card-hover.js')}}"></script>
  @yield('script')
</body>

</html>