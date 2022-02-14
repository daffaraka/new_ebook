@extends('main')

@section('title', 'Cart Ebook')

@section('content')

  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<div class="container">
    <div class="row">
       <div class="col-md-6 mx-auto mt-5">
          <div class="payment">
             <div class="payment_header">
                <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
             </div>
             <div class="content">
                <h1>Payment Success !</h1>
                <p>Transaksi telah selesai. </p>
                <a href="{{route('home')}}" class="btn">Go to Home</a>
             </div>
             
          </div>
       </div>
    </div>
 </div>

 @endsection