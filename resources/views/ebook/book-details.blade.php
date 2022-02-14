@extends('main')

@section('title', 'Detail Ebook')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header pl-4">
                  <h4 class="ml-2">{{__('detail_book.title')}} </h4> 
                </div>
                <div class="card-body shadow">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <h5>Judul Buku</h5>
                                <h5>Penulis </h5>
                                <h5 class="mt-3">Deskripsi</h5>
                            </div>
                            <div class="col-md-7">
                                <h5 class="card-title">: {{ $ebook->title}} </h5>
                                <h5 class="card-title">: {{ $ebook->author}} </h5>
                                <div class="card p-2 mb-4 mt-3 ml-2 bg-light shadow-sm">
                                    <h5> {{$ebook->description}}</h5>
                                </div>
                               
                                    
                            </div>
                        </div>
                    </div>
                   

                    <a href="{{route('ebook.addToCart',$ebook->ebook_id)}}" class="btn btn-primary w-25 ml-3">{{__('detail_book.button.rent')}}</a>
                </div>
                
            </div>
        </div>
     
    </div>


@endsection