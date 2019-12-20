@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Version 2</div>

                <div class="card-body">
                   
                    <form action="/form2" method="POST">
                        <fieldset>
                        <legend>Version 2</legend>
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <input type="text" name="version" id="version" value="2" hidden>
                            <label for="full_name">Name:</label>
                            <input type="text" name="full_name" id="full name">
                            <label for="gender">Gender:</label>
                            <input type="radio" name="gender" id="gender" value="Male">M
                            <input type="radio" name="gender" id="gender" value="female">F<br>
                            <label for="dob">Date of Birth:</label>
                            <input type ="date" name="dob" id="dob"><br>
                            <label for="address">Address:</label>
                            <textarea name="address" id="address"></textarea><br>
                            <label for="phone">Phone:</label>
                            <input type="phone" name="phone" id="phone">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email">
                        </fieldset>
                        <button type="submit" name="submit">Submit</button>
                    </form>
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
