<!DOCTYPE html>
<html lang="en">

  <head>
    @include('user/layouts/head')
  </head>

  <body>

    @include('user/layouts/header')

      <!-- Main Content -->
      @section('main-content')
        @show

    <hr>

    <!-- Footer -->
    @include('user/layouts/footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{  asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{  asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{  asset('user/js/clean-blog.min.js') }}"></script>

  </body>

</html>
