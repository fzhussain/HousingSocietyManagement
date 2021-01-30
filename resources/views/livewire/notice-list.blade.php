<div>
    @if($notices->count() > 0)
        @foreach($notices as $notice)
            <p class="card-text"><ul><li>{{ $notice->notice }}</li></ul></p>
        @endforeach
    @else
        <p class="card-text"><ul><li>Now new notice yet!</li></ul></p>
    @endif
</div>
