<!DOCTYPE html>
<html>
  <head>
      @include('core::template.head')
  </head>
  <body class='vue @stack('body.class')' >

      <div class='main'>
          @yield('content.main')
      </div>

      @stack('footer')
  </body>
</html>
