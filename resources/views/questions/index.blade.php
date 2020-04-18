@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center col-lg-10 col-lg-offset-2">
            <div method="post" action="{{route('quizresults.store')}}">

                <div class="row" style="margin-top: 50px; ">
                    <div class="form-group row">
                        {{csrf_field()}}
                        @foreach( $questions as $question)
                    <div class="list-group col-lg-8 ">
                        <button type="button" class="list-group-item list-group-item-action active">
                            {{$question->question}}
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">{{$question->option1}}</button>
                        <button type="button" class="list-group-item list-group-item-action"> {{$question->option2}}</button>
                        <button type="button" class="list-group-item list-group-item-action">{{$question->option3}}</button>
                        <button type="button" class="list-group-item list-group-item-action" >{{$question->option4}}</button>

                    </div>
                        @endforeach

            <button class="btn btn-success btn-lg btn-block " style="margin-top: 20px; " type="submit">Submit</button>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection