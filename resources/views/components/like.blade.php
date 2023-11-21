<div class="like-container">

    @if(\App\Models\liked_song::where(['user_id' => Auth::id(), 'song_id' => $song])->exists())
    
    <form action="{{ route('unliked', $song) }}" method="POST" onsubmit="disableSubmitButton(this)">
        @csrf
        <button type="submit" class="like" id="unlikeButton">Unlike</button>
    </form>
    @else
    <form action="{{ route('liked', $song) }}" method="POST" onsubmit="disableSubmitButton(this)" >
        @csrf
        <button type="submit" class="like" id="likeButton">Like</button>
    </form>
   @endif
</div>

<script>
    function disableSubmitButton(form) {
        var button = form.querySelector('button[type="submit"]');
        button.disabled = true;
    }
</script>
