@extends('layouts.base')

@section('styles')
@parent
{{ HTML::style( App\Libraries\Helper::asset('css/sb-admin.css') ) }}
{{ HTML::style( App\Libraries\Helper::asset('css/app.css') ) }}
@stop

@section('sidebar')
@include('includes.sidebar')
@stop

@section('main')
<div class="container-fluid">
    <div id="page-wrapper">
        @yield('content')
    </div>
</div>
@stop