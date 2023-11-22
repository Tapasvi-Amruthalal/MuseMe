@extends('navbar')
@section('content')
@if(session()->missing('username'))

<script> window.location = "/login"; </script>

@endif
<h1 style="padding-left:0px; padding-top:100px; text-align:center; font-size:3em; color:white">My Liked Songs</h1>
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
      background-color: darkslategray;
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
    td {
      /* cursor: pointer;
      transition: background-color 0.3s; */
      background-color:#fff
    }

    /* td:hover {
      background-color: #f0f0f0;
    } */

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<body>

<table style="margin-top:2em;">
  <thead>
    <tr>
      <th>Name of Song</th>
      <th>Artist</th>
      <th>Genre</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($sings as $sing)
    
      
      <tr>
        {{-- <td><a href="#">{{$song->user_id}}</a></td> --}}
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