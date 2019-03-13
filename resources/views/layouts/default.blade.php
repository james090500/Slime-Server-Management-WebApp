<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('include.header')
  </head>
  <body>
    <div class="container-fluid content">
      <div class="row justify-content-center">
        <div class="col-lg-3 menu">
          @include('include.menu')
        </div>
        <div class="col-lg-6">
          @yield('content')
        </div>
      </div>
    </div>
    @include('include.footer')
  </body>
</html>
