{{-- 'parent.blade.php' --}}<!doctype html> 
<html>
  <head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
  </head>
  <body>
        @include('main.header')

        <div class="row" style="height: 80vh" >
            <div class="col-md-4 border" style="height: 80vh">
                @include('main.nav')
            </div>
            <div class="col-md-4 border" style="height: 80vh" >
                <!-- INI KOTEN -->
                @yield('artikel')
            </div>
            <div class="col-md-4 border" style="height: 80vh">
                @include('main.nav')
            </div>
        </div>

        <div class='row'>
            <div class="col-md-12 border vh-10">
                @include('main.footer')
            </div>
        </div>
    
  </body>
</html>
