@extends('layouts.app')

@section('content')
<div class="container" id="projects-conteiner">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"> ID: {{ $project->id }} ---- {{ $project->slug }}</h5>
                <img src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>
                    <p class="card-text">
                        {{ $project->content }}
                    </p>
                    <a href="" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    <form class="d-inline-block" action="" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-warning">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
