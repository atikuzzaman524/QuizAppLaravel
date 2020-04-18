@extends('layouts.app')

@section('content')

<div class="container align-self-center">
    <form method="post" action="{{route('users.update',[$user->id])}}" class="container" id="needs-validation" novalidate>
        {{csrf_field()}}

        <input type="hidden" name="_method" value="put" >
        <div class="row">
            <div class="col-md-8 mb-8">
                <label for="validationCustom01">Name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Name" value="{{ $user->name }}" name="name" required>
            </div>
            <div class="col-md-8 mb-8">
                <label for="validationCustom02">Email</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Email" value="{{ $user->email }}" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mb-8">
                <label for="validationCustom03">Phone</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="phone Number" value="{{ $user->phone }}" name="phone" required>
                <div class="invalid-feedback">
                    Please provide a valid Phone.
                </div>
            </div>
            <div class="col-md-8 mb-8">
                <label for="validationCustom04">Birthday</label>
                <input type="date" class="form-control" id="validationCustom04" placeholder="Date Of Birth" value="{{ $user->birthday}}" name="birthday" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-8 mb-8">
                <label for="validationCustom05">Occupation</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Occupation" value="{{ $user->occupation}}" name="occupation" required>
                <div class="invalid-feedback">
                    Please provide a valid Occupation.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                var form = document.getElementById('needs-validation');
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            }, false);
        })();
    </script>
</div>


@endsection