<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="/css/datatables-1.13.1/datatables.css"> --}}

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- SweetAlert2 --}}
    <link rel="stylesheet" href="sweetalert2.min.css">
    
    {{-- My Styles --}}
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    @if ($menu !== 'login')
    @include('partials.navbar')
    @elseif ($menu == 'user')
    @endif
    @yield('container')
   
  {{--Bootsrap  --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
  {{-- Jquery --}}
  <script type="text/javascript" src="{{ URL::asset ('js/global/jquery/jquery-3.6.1.js') }}"></script>

  {{-- Datatables --}}
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  {{-- Select2 --}}
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  {{-- SweetAlert2 --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  {{-- javascript for each view --}}
  @stack('script')
</body>
  
</html>