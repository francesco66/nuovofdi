<ul>
    @foreach ($collection as $comment)
        {{-- <div class="flex flex-row"> --}}
            <div class="">
                @include ('comments.comment')
            </div>
        {{-- </div> --}}
    @endforeach
</ul>
