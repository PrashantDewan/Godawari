@extends('admin.layouts.master')
@section('title', 'Change Password')
@section('content')
<div class="container">
    <div class="row justify-content-center m-5 p-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.password.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="old" class="col-md-4 col-form-label text-md-end">Old Password</label>

                            <div class="col-md-6">
                                <input type="password" name="old_password" required>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="new" class="col-md-4 col-form-label text-md-end">New Password</label>

                            <div class="col-md-6">
                                <input type="password" name="new_password" id="pwd1" onkeyup="changePassword()" required>
                            </div>
                            <span class="text text-danger" id="message1"></span>
                            <div class="container"></div>

                        </div>
                        <div class="row mb-3">
                            <label for="confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" name="confirm_password" id="pwd2" onkeyup="changePassword()" required>


                            </div>
                            <div class="container">
                                <span class="text text-danger" id="message2"></span>

                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="button" type="submit" class="btn btn-primary">
                                    Change Password
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changePassword() {

        var pw1 = document.getElementById('pwd1').value;

        var pw2 = document.getElementById('pwd2').value;

        document.getElementById('message2').innerHTML = '';

        console.log(pw1.length)

        if (pw1.length <= 8)

        {

            document.getElementById('message1').innerHTML = "Password length must be 8 letters long";

        } else {

            document.getElementById('message1').innerHTML = '';

        }

        if (pw1.length == 0)

        {

            document.getElementById('message1').innerHTML = '';

        }

        // check if passowrd matches to confirm password

        if (pw1 != pw2) {

            document.getElementById('message2').innerHTML = "Password didn't match";

            document.getElementById('button').setAttribute("disabled", "");

        } else {

            document.getElementById('message2').innerHTML = '';

            document.getElementById('button').removeAttribute("disabled");

        }

        // check if confirm password is empty

        if (pw2 === '') {

            document.getElementById('message2').innerHTML = '';

        }

    }
</script>


@endsection