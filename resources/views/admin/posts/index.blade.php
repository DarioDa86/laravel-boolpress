@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
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
                                <td>{{$posts["id"]}}</td>
                                <td>{{$posts["title"]}}</td>
                                <td>{{$posts["slug"]}}</td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-primary">Visualizza</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
