<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Kepegawaian</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
    <!-- loginstyle -->
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
    <!--Boostrap-->
    {{-- <link rel="stylesheet" href="{{asset('bootstrap-5.3/css/bootstrap.min.css')}}"> --}}

   
</head>
<style>
  h1 {
    color: rgba(32, 30, 30, 0.849);
    font-family: 'Poppins', sans-serif;
    font-style: italic;
  }
  .content-wrapper {
  background-image: url("{{asset('assets/img/logopegawai.png')}}");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
}

.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
</style>

 <body class="hold-transition sidebar-mini fw-bold" >
    <div class="wrapper">
        @include('layout.navbar')

        @include('layout.sidebar')
 

  <!-- Content Wrapper. Contains page content -->
    
    
    <div class="container border mb-4 mt-4 rounded-3 shadow bg-dark-subtle">
        @yield('content')
    </div>
    
    
  <!-- /.content-wrapper -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>Title</h5>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger text-white" >Log Out</button>
          </form>
          </div>
        </aside>
            <!-- /.control-sidebar -->
    
          <!-- ./wrapper -->
          @include('layout.footer')
    
        <!-- REQUIRED SCRIPTS -->
    
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
      {{-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> --}}
      <script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
 </body>
</html>