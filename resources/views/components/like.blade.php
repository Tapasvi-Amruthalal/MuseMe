<div class="like-container">
    {{-- @if(Auth::user()->likesong($song)) --}}
    <form action="{{route('liked', $song)}}" method="POST">
        @csrf
        <button type="submit" class="like">Like</button>
    </form>
    {{-- @else --}}
    <form action="{{route('unliked', $song)}}" method="POST">
        @csrf
        <button type="submit" class="like">Unlike</button>
    </form>
    {{-- @endif --}}
</div>
