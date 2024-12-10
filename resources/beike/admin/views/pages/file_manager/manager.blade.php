@extends('admin::layouts.master')

@section('title', __('admin/file_manager.index'))
@section('content')
  <div style="height: calc(100vh - 160px);">
    <iframe src="{{ admin_route('file_manager.index') }}?manager_type=plain" frameborder="0" id="preview-iframe" width="100%" height="100%"></iframe>
  </div>
@endsection
