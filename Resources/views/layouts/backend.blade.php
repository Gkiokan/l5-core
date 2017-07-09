@extends('core::template.container')

@push('body.class', 'backend')

@push('head.style')
  body { background: #eee; color: #222; }
@endpush

@push('menu.left')
  <div class="panel panel-default">
    <div class="panel-heading">
        Navigation
    </div>
    <div class="panel-body">
        @include('core::navigation.items-backend-left')
    </div>
  </div>
@endpush
