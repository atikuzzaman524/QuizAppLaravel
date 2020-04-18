@extends('layouts.app')

@section('content')
<?php
var_dump($question );

?>

    <div class="row mx-auto" style="margin-top: 50px; ">
        {{--<div>--}}
            {{--<ul>{{$quizsection ->id}}</ul>--}}
        {{--</div>--}}
        <form method="post" action="{{route('questions.store')}}">

            <div class="form-group row">
                {{csrf_field()}}
                <div class="col-lg-12">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Question:</button>
                </span>

                        <input type="text" class="form-control" placeholder="Question" aria-label="Search for..." name="question" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Option 1 :</button>
                </span>
                        <input type="text" class="form-control" placeholder="Options" aria-label="Search for..." name="option1" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Option 2 :</button>
                </span>
                        <input type="text" class="form-control" placeholder="Options" aria-label="Search for..." name="option2" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Option 3 :</button>
                </span>
                        <input type="text" class="form-control" placeholder="Options" aria-label="Search for..." name="option3" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Option 4 :</button>
                </span>
                        <input type="text" class="form-control" placeholder="Options" aria-label="Search for..." name="option4" >
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Answer :</button>
                </span>
                        <input type="text" class="form-control" placeholder="Answer" aria-label="Search for..." name="answer" required >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Points</button>
                </span>
                        <input type="number" class="form-control" placeholder="Points" aria-label="Search for..." name="points" required>
                    </div>
                </div>
                <div>
                    <br>
                </div>
                <button class="btn btn-success btn-lg btn-block" style="margin-top: 20px; " type="submit">Add Another</button>
        </form>

    </div>


@endsection