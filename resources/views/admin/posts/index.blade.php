@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)    
                                <tr>
                                    <td>{{$post["id"]}}</td>
                                    <td>{{$post["title"]}}</td>
                                    <td>{{$post["slug"]}}</td>
                                    <td>
                                        <a href="{{route("admin.posts.show", $post["id"])}}">
                                            <button type="button" class="btn btn-primary">Visualizza</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
