@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center col-lg-offset-3">
            @foreach( $quizsections as $quizsection)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="margin-top: 20px; margin-bottom:10px; ">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1485322551133-3a4c27a9d925?auto=format&fit=crop&w=1500&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="http://placehold.it/500x325">

                        <div class="card-header">{{ $quizsection->title }} </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $quizsection->category }}</h4>
                            <p class="card-text">{{ $quizsection->details }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$quizsection->start_time }}</li>

                        </ul>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Start Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection