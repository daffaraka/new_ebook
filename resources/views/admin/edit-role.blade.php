@extends('main')

@section('title', 'Detail Ebook')

@section('content')
    <div class="row">
        <div class="card w-50">
            <div class="card-body rounded">
                <div class="card-header bg-dark text-light">
                    <div class="card-title">
                        <h3> Update Role </h3>
                    </div>
                </div>

              
                <form class="bg-light p-4 rounded" action="{{route('admin.updateRole',$user->account_id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control type="text" value="{{$user->first_name}} {{$user->middle_name}}">
                    </div>
                    <div class="form-group">
                        <label>Role Now</label>
                        <input class="form-control type="text" value="{{$roleName}} ">
                    </div>
                    <div class="form-group">
                         <label>Role</label>
                         <select id="role_id" type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id" autofocus>
                            <option value="#" selected disabled>Select role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection