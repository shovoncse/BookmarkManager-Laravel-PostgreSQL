@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('inc.messages')
                    <button class="btn btn-primary btn-lg"
                    data-toggle="modal"
                    data-target="#addModal"
                    type="button"
                    >Add Bookmark</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add New Bookmark</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          
        </div>
        <div class="modal-body">
        <form action="{{route('bookmarks.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label class="form-controle-label">Bookmark Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label class="form-controle-label">Bookmark Url</label>
                <input type="text" class="form-control" name="url">
            </div>
            <div class="form-group">
                <label class="form-controle-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-success">
         </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection
