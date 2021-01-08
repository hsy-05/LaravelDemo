<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <!-- Custom styles for backend -->
  {{-- <link href="{{ asset('public/css/backend.css') }}" rel="stylesheet"> --}}
  <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
  <script>
    tinymce.init({ selector:'textarea' });
  </script>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/jquery-migrate.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<style>
.b{
    width: 300px;
}
</style>


</head>
<body>
    @include('admin.layouts.navbar')
    <div class="container">
        <div class="text-center">
            @yield('content')
        </div>
    </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
