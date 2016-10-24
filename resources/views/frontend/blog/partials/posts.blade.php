@foreach ($posts as $post)
    <div class="post-preview">
        <h2 class="post-title">
            <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
        </h2>
        <p class="post-meta">
            {{ $post->published_at->diffForHumans() }}
            @unless ($post->tags->isEmpty())
                @lang('post.in') {!! implode(', ', $post->tagLinks()) !!}
            @endunless
            &#183; {{ $post->readingTime() }} @lang('post.min-read')
        </p>
        <p class="postSubtitle">
            {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
        </p>
        <p style="font-size: 13px"><a href="{{ $post->url($tag) }}">@lang('post.read-more')...</a></p>
    </div>
    <hr>
@endforeach
