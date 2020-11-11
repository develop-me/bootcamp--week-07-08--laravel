@extends("app")

@section("content")
  <div class="list-group">

    {{-- loop over all of the articles --}}
    {{-- each article object goes into $article --}}
    @foreach (App\Models\Article::all() as $article)
      <a href="/articles/{{ $article->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">

          {{-- output the article title --}}
          <h5 class="mb-1">{{ $article->title }}</h5>

          {{-- use the relativeDate() method --}}
          <small>{{ $article->relativeDate() }}</small>
        </div>

        {{-- output the truncated content --}}
        <p class="mb-1">{{ $article->truncate() }}</p>
      </a>
    @endforeach
  </div>
@endsection
