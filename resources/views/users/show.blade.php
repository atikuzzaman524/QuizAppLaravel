@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card ">
            <div class="card-header panel-heading  bg-primary  ">
               {{ $user->name }}<button type="button" class="btn btn-success btn-sm float-left"  > <a href="/users/{{$user->id}}/edit">Edit</a> </button>
                <button type="button" class="btn btn-danger btn-sm float-left"  > <a
                            href="#"
                            onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                    >
                        Delete
                    </a>

                    <form id="delete-form" action="{{ route('users.destroy',[$user->id]) }}"
                          method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                    </form> </button>
            </div>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item">  {{ $user->email }}  </li>
            <li class="list-group-item">  {{ $user->phone }}  </li>
            <li class="list-group-item">  {{ $user->address }}  </li>
        </ul>
    </div>
    </div>

@endsection