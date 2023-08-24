@extends('layouts.app')

@section('content')
<div class="container" id="projects-conteiner">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.project.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">
                    Title
                </label>
                <input type="text" class="form-control" id="title" placeholder="Insert your project title" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">
                    Image
                </label>
                <input type="text" class="form-control" id="image" placeholder="https://image.jpg" name="image">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">
                    Content
                </label>
                <textarea class="form-control" id="content" rows="7" name="content"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit">
                    Create new post
                </button>
                <button type="reset">
                    Reset
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
