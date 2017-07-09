@extends('template.vue')

@section('title', 'User Interace | Gkiokan.NET')
@section('meta.title', 'User Interface | Gkiokan.NET')
@section('meta.image', '/images/ytc/preview.jpg')
@section('meta.site_name', 'User Interface | Gkiokan.NET')
@section('meta.description', 'Your Profile User Interface on Gkiokan.NET')
@section('meta.keywords', 'Gkiokan, Network, YouTube, Thumbnail, Gallery, Download')

{{-- @section('meta.og.twitter.image', '/images/ytc/preview.jpg') --}}
{{-- @section('meta.og.twitter.image', '/images/ytc/twitter.jpg') --}}

{{-- @section('meta.og.before')
  <meta property='og:image' content='/images/ytc/found1.jpg'>
  <meta property='og:image' content='/images/ytc/found2.jpg'>
  <meta property='og:image' content='/images/ytc/found3.jpg'>
  <meta property='og:image' content='/images/ytc/found4.jpg'>
@stop --}}

@push('body.class', 'white ytc ')

@section('content')

    <div class='container'>
    LOADING ....
    </div>
@stop

@push('footer')
  <script src="{{ asset('/js/ui/app.js') }}"></script>

  <script type="text/javascript">
      console.log('Running UI Controller')
  </script>
@endpush
