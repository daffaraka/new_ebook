@extends('main')

@section('title', 'Home Ebook')

@section('content')

    @auth
      @if(Auth::user()->role_id == 1)
       <a href="{{route('ebook.create')}}" class="btn btn-info">Add Book</a>
      @endif
    @endauth
   
    <div class="row p-3">
       
        <table class="table table-dark">
          
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('ebook_home.author')}}</th>
                <th scope="col">{{__('ebook_home.title')}}</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $book)
              <tr>
                <th scope="row">{{$book->ebook_id}}</th>
                <td>{{$book->author}}</td>
                <td>{{$book->title}}</td>
                <td> 
                  <a href="{{route('ebook.show',$book->ebook_id)}}" class="btn btn-light">Detail</a>
                </td>
              </tr>
              @endforeach
             
             
            </tbody>
          </table>
    </div>

@endsection