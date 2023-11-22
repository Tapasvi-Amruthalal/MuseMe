@extends('navbar')
@section('content')
<h1 style="padding-left:0px; padding-top:100px; text-align:center; font-size:3em;color:white">SONG LIST</h1>

<title>Songs</title>
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
      /* margin:10px; */
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
    .searchbar{
      width: 90vw;
    }
    .form-group{
      text-align: center;
      padding:4em;
      display: flex;
    }
    .form-control{
      width:100vw;
      text-align: center;
      border-radius:50px;
      height: 40px;
      padding:1em;
    }
    .search{
      /* margin: 10px 10px; */
      margin-left:10px;
      padding: 10px;
      background-color: fff;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius:1005px;
    }
  </style>
</head>
<body>
  <div class="searchbar">

    <form action="" method="GET">
      <div class="form-group">
        @csrf
        <input type="search" name="search" id="" class="form-control" placeholder="Search for your song here.." >
        <button class="search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
      </div>
    </form>
  </div>
<table>
  <thead>
    <tr>
      <th>Name of Song</th>
      <th>Artist</th>
      <th>Genre</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($songs as $sing)
    
      
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
@stop