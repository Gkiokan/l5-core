@extends('core::template.html')

@section('content.main')

      <div class='container message-area'>
          @include('core::partials.header')
      </div>

      @yield('content.head')

        <div class='container-fluid'>
          <div class='content'>
              @yield('content.before')
              @section('content')
                  ANY Example Content that may be shown if needen.

              @show
              @yield('content.after')
          </div>
        </div>

      @yield('content.footer')
@stop
