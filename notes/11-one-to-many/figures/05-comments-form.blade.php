<form method="post" class="form card mt-4 mb-4">
  <h4 class="card-header">Add Comment</h4>
  <fieldset class="card-body">
    @csrf

    <div class="form-group">
      <label for="email">Email</label>
      <input
        id="email"
        name="email"
        type="email"
        class="form-control @error('email') is-invalid @enderror"
        value="{{ old("email", $article ? $article->email : "") }}"
      />

      @error('email')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="form-group">
      <label for="comment">Comment</label>
      <textarea
        id="comment"
        name="comment"
        class="form-control @error('comment') is-invalid @enderror"
      >{{
        old("comment", $article ? $article->comment : "")
      }}</textarea>

      @error('comment')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

  </fieldset>

  <div class="card-footer text-right">
    <button class="btn btn-success">Add Comment</button>
  </div>
</form>
