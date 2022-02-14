@extends('main')

@section('title', 'Detail Ebook')

@section('content')

<div class="card">
    <div class="card-body bg-light">
          <div class="card-header">
              <h3 class="card-title"> {{__('role_management.title_role')}} </h1>
          </div>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">{{__('role_management.user_info')}}</th>
                  <th> {{__('role_management.user_role')}}</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($user as $data)
              <tr>
                  <th scope="row">
                    {{ $data->account_id}} </th>
                  <td>  {{$data->first_name}} </td>
                  <td> 
                   <label for="" class="btn btn-info">  {{$data->Role->role_desc}} </label> 
                  
                 </td>
                  <td>
                      <a href="{{route('admin.editRole', $data->account_id)}}" class="btn btn-warning">{{__('role_management.button.update_role')}}</a>
                      <a href="" class="btn btn-danger">{{__('role_management.button.delete_user')}}</a>
                  </td>
                </tr>
              @endforeach
            

              </tbody>
            
          </table>
        
      </div>
</div>



@endsection