@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 50px; ">


        <form method="post" action="{{route('quizsections.store')}}">
            <div class="form-group row">
            {{csrf_field()}}
        <div class="col-lg-8">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Title:</button>
                </span>

                <input type="text" class="form-control" placeholder="Title" aria-label="Search for..." name="title" required>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Category:</button>
                </span>

                <input type="text" class="form-control" placeholder="Category" aria-label="Search for..." name="category" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Starting Time:</button>
                </span>
                <input type="date" class="form-control" placeholder="12/15/2017" aria-label="Search for..." name="start_time" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">End Time:</button>
                </span>
                <input type="time" class="form-control" placeholder="12/15/2017" aria-label="Search for..." name="end_time" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">About Your Quiz:</button>
                </span>
                <input type="text" class="form-control" placeholder="About Your Quiz" aria-label="Search for..." name="details" required>
            </div>
        </div>
        <div>
            <br>
        </div>
                <button class="btn btn-success btn-lg btn-block" style="margin-top: 20px; " type="submit">Add Question</button>
      </form>

    </div>


@endsection