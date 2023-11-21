@extends('navbar')
@section('content')
@if(session()->missing('username'))

<script> window.location = "/login"; </script>

@endif
<h1 style="padding:100px">LIKED SONGS PAGE {{ session('name') }}</h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Song Table</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f8f8;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      max-width: 800px;
      margin: auto;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px;
      text-align: left;
      border: 0; /* No border */
    }

    th {
      background-color: #333;
      color: white;
    }

    tr {
      cursor: pointer;
      transition: background-color 0.3s;
    }

    tr:hover {
      background-color: #f0f0f0;
    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Name of Song</th>
      <th>Artist</th>
      <th>Release Year</th>
      <th>Genre</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($sings as $sing)
    
      
      <tr>
        {{-- <td><a href="#">{{$song->user_id}}</a></td> --}}
        <td><a href="{{$sing->link}}">{{$sing->song_id}}</a></td>
        <td><a href="{{$sing->link}}">{{$sing->title}}</a></td>
        <td><a href="{{$sing->link}}">{{$sing->artist}}</a></td>
        <td><a href="{{$sing->link}}">{{$sing->genre}}</a></td>
      </tr>
    
    
    @endforeach
  </tbody>
</table>

</body>
</html>

@stop