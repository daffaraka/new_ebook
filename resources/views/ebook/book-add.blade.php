@extends('main')

@section('title', 'Home Ebook')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="bg-light p-4 rounded" action="{{route('ebook.store')}}" method="POST">
                @csrf
                <div class="form-group">
                     <label>Title</label>
                     <input type="text" class="form-control" name="title">
                     <small id="emailHelp" class="form-text text-muted">Enter title books name.</small>
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">Author</label>
                    <input type="text" class="form-control" name="author">
                    <small id="emailHelp" class="form-text text-muted">Enter author books name.</small>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description">
                    <small id="emailHelp" class="form-text text-muted" name="description">Enter book description.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
   
        
    </div>

@endsection