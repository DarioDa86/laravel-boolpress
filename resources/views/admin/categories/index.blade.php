@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>    
						<strong>{{ $message }}</strong>
					</div>
					@endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)    
                                <tr>
                                    <td>{{$category["id"]}}</td>
                                    <td>{{$category["name"]}}</td>
                                    <td>{{$category["slug"]}}</td>
                                    <td>
                                        <a href="{{route("admin.categories.show", $category["id"])}}">
                                            <button type="button" class="btn btn-primary">Visualizza</button>
                                        </a>
                                        <a href="{{route("admin.categories.edit", $category["id"])}}">
                                            <button type="button" class="btn btn-warning">Modifica</button>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-delete" data-id="{{$category["id"]}}" data-toggle="modal" data-target="#deleteModal">
                                            Elimina
                                        </button>
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

<!-- Modal -->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Conferma cancellazione categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route("admin.categories.destroy", 'id')}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" id="delete-id" name="id">
                    <div class="modal-body">
                        Sei sicuro di voler cancellare questa categoria?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">SI</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
