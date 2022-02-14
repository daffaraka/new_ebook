@extends('main')

@section('title', 'Cart Ebook')

@section('content')

    <div class="row">
        <div class="card w-75">
            <div class="card-body">
                <div class="card-header">
                    <h3 class="card-title"> Your Cart </h1>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($cart as $data)
                     <tr>
                        <th scope="row">{{$data->order_id}}</th>
                        <td>{{$ebookName}}</td>
                        <td>
                            <a href="{{route('cart.deleteCart',$data->order_id)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                     @endforeach
                   

                    </tbody>
                   
                  </table>
                  <a href="{{route('cart.sucess')}}" class="btn btn-primary">Submit</a>  
            </div>
        </div>
    </div>

@endsection