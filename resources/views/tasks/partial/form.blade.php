<div class="containter">
    <div class="row py-5">
        <div class="col-sm-12 col-lg-8 offset-lg-2">
            <p>
                <a href="{{ route('tasks.index') }}"> &larr; Main page</a>
            </p>
            <form action="{{ route('tasks.store') }}" method="POST" novalidate>
                <div class="input-group mb-3">
                    <span class="input-group-text">Task title</span>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="What to do..." value="{{ old('title') }}" />
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-text">Content:</span>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="5" id="content" name="content" placeholder="Description..."
                        maxlength="1000">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br />
                <button type="submit" class="btn btn-success">Submit</button>
                <input type="hidden" name="status" value="{{ $defaultStatus }}" />

                @csrf
                @method('POST')
            </form>
        </div>
    </div>
</div>
