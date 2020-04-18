@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card ">
            <div class="card-header panel-heading  bg-primary ">
                All Users
            </div>
            </div>
            <ul class="list-group list-group-flush">
                @foreach( $users as $user)
                <li class="list-group-item">   <a href="/users/{{$user->id}} "> {{ $user->name }} </a> </li>
                @endforeach
                <button type="button" class="btn btn-default btn-lg bg-primary " >  <a href="users/create">Add New User</a> </button>
            </ul>

        </div>
    </div>
@endsection