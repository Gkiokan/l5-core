<!DOCTYPE html>
<html>
  <head>
      @include('core::template.head')
  </head>
  <body class='@stack('body.class')' >

      @include('core::navigation.full')

      @yield('content.main')

      @include('core::template.footer')

  </body>
</html>
