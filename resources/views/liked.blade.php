@extends('navbar')
@section('content')
@if(session()->missing('username'))

<script> window.location = "/login"; </script>

@endif
<h1 style="padding:100px">LIKED SONGS PAGE {{ session('name') }}</h1>
@stop