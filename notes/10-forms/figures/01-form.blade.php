@extends("app")

@section("content")
    <form class="form card">
        <h2 class="card-header">Create Article</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
