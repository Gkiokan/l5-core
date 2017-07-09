
@yield('head.before')

      <meta name='serial' content='NOSERIAL'>
      <meta name="csrf-token" content="{{ csrf_token() }}">

      @include('core::template.meta')
      {{-- @include('template.google') --}}

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <style data-name='style.inline'>
          @stack('head.style')
      </style>
      <script data-name='script.inline'>
          @stack('head.script')
      </script>

@yield('head.after')
