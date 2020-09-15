@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
           @foreach($series as $serie)
           <div class="col-6 ">
               <div class="card-header">{{$serie->title}}</div>

               <div class="card-body">
                   {{ $serie->description }}
               </div>
           </div>
           @endforeach
       </div>
    </div>
@endsection
