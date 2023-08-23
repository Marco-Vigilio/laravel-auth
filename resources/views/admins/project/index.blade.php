@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th>
                                {{ $project->id}}
                            </th>
                            <td>
                                <strong>
                                {{ $project->title}}
                                </strong>
                            </td>
                            <td>
                                {{ $project->slug}}
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">
                                    View
                                </a>
                                <a href="" class="btn btn-sm btn-success">
                                    Edit
                                </a>
                                <a href="" class="btn btn-sm btn-warning">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $projects->links()}}
        </div>
    </div>
</div>
@endsection
