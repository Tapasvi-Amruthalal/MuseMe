@extends('navbar')
@section('content')
<style>
    .search{
        width: 90vw;
    }
    .searchbar{
        width:100%;
        margin-left:3em;
        border-radius: 10px;
        height: 30px;
        padding: 2em;
        font-size: 15px
    }
</style>
<h1 style="padding:100px">HOME PAGE</h1>

{{-- <form action="{{route('searchquery')}}" method="POST" name="search">
    <div class="search">
        <input class="searchbar" type="text" name="" id="" class="form-control" palceholder="Search Song or Artist">
    </div> --}}

    {{-- <h5>Results</h5>
    @foreach ($search as $sing)

      <tr> --}}
        {{-- <td><a href="#">{{$song->user_id}}</a></td> --}}
        {{-- <td><a href="#">{{$sing->song_id}}</a></td>
        <td><a href="#">{{$sing->title}}</a></td>
        <td><a href="#">{{$sing->artist}}</a></td>
        <td><a href="#">{{$sing->genre}}</a></td>
      </tr> --}}

    {{-- @endforeach    
</form>  --}}
@stop