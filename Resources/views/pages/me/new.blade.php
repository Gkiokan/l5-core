@extends('template.vue')

@section('title', 'About Me | Gkiokan.NET')

@push('body.class', 'white ')

@section('content')

    <div class='container'>
    LOADING ....
    </div>
@stop

@push('footer')
  <script src="{{ asset('/js/me/app.js') }}"></script>

  <script type="text/javascript">
      console.log('Running Me Controller')
  </script>
@endpush
