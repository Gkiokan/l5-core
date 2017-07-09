@extends('core::template.html')

@section('content.main')

      <div class='container message-area'>
          @include('core::partials.header')
      </div>

      @yield('content.head')

      <div class='container'>
      <div class='row'>
          <div class='col-xs-12 col-md-3'>
              <div class='navigation left'>
                  @stack('menu.left')
              </div>
          </div>
          <div class='col-xs-12 col-md-9'>
              <div class='content'>
                  @yield('content.before')
                  @section('content')
                      ANY Example Content that may be shown if needen.

                  @show
                  @yield('content.after')
              </div>
          </div>
      </div>
      </div>

      @yield('content.footer')
@stop
