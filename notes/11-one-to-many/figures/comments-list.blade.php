<article class="card">
  {{ /* article code */ }}
</article>

<hr />

<h3>Comments</h3>

{{ /* if an article has comments list them */ }}
@if($article->comments->isNotEmpty())
  <div class="list-group">
    @foreach ($comments as $comment)
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $comment->email }}</h5>
      </div>

      <p class="mb-1">{{ $comment->comment }}</p>
    @endforeach
  </div>
@else
  <p class="alert alert-secondary">No comments found</p>
@endif

@include("articles/comments/form")
