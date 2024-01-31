<form method="POST" action="/posts/{{ $post->id }}/comments/{{ $comment->user_id }}" class="rounded-lg">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-2 md:text-sm text-slate-100 bg-red-500 hover:bg-red-700 rounded-xl">Cancella</button>
</form>
