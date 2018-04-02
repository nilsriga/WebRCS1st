

@extends('layout')

@section('content')



<main>
        <div class="container-fluid">
            <div class="row">
                <div>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <span class="breadcrumb-item active">Register</span>
                    </nav>
                </div>
            </div>
            <div class="row page_title col-md-offset-1 col-md-10">
                <p>
                    <h1>Register</h1>
                </p>
            </div>
            <form id="reg-form" method="post">
            @csrf
            <div class="errors">
            @foreach ($errors->all() as $error)
                <ul><li>{{ $error }}</li></ul>
            @endforeach
            </div>

            <div class="success">
            <ul>
            @if(Session::has('success'))
                <li>{{session::get('success') }}</li>
            @endif
            </ul>
            </div>



            <div class="row col-md-offset-1 col-md-10 form_input">
                <input type="text" placeholder="Username*" name="username">
            </div>
            <div class="row col-md-offset-1 col-md-10 form_input">
                <input type="password" placeholder="Password*" name="password">
            </div>
            <div class="row col-md-offset-1 col-md-10 form_input">
                <input type="password" placeholder="Retype Password*" name="password2">
            </div>
            <div class="row col-md-offset-1 col-md-10 form_input">
                <input type="text" placeholder="First Name*" name="first_name">
            </div>
            <div class="row col-md-offset-1 col-md-10 form_input">
                <input type="text" placeholder="Last Name*" name="last_name">
            </div>
            <div class="row col-md-offset-1 col-md-10 form_input">
                <button type="submit" value="Register">Submit</button>
            </form>
                        <br>
                        <br>

            </div>

        </div>
        </div>
    </main>

 <script>
        $('#reg-form').submit(function(){
            var errors = [];
            $('.errors ul').html('');
            $('.has-error').removeClass('has-error');
            if ($('input[name="username"]').val() == '') {
                errors.push('Please enter username');
                $('input[name="username"]').addClass('has-error');
            }
            if ($('input[name="password"]').val() == '') {
                errors.push('Please enter password');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password"]').val().length < 8) {
                errors.push('Password must be at least 8 symold');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() == '') {
                errors.push('Please retype the password');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
                errors.push('Passwords must match');
                $('input[name="password"]').addClass('has-error');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="first_name"]').val() == '') {
                errors.push('Please enter first name');
                $('input[name="first_name"]').addClass('has-error');
            }
            if ($('select[name="country"]').val() == 0) {
                errors.push('Please select coutnry');
                $('select[name="country"]').addClass('has-error');
            }
            if ($('input[name="agree"]').is(":checked") == false) {
                errors.push('Please agree with this amazng stuff');
                $('input[name="agree"]').addClass('has-error');
            }
            if (errors.length > 0) {
                // handle errors
                for (var index = 0; index < errors.length; index++) {
                    var element = errors[index];
                    $('.errors ul').append('<li>' + element + '</li>');
                }
                $('.errors').show();
                return false;
            }
        });
    </script>


     @endsection