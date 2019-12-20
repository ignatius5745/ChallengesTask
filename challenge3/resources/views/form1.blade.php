@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Version 1</div>

                <div class="card-body">
                   
                    <form action="/form1" method="POST">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <fieldset>
                        <legend>Version 1</legend>
                            <input type="text" name="version" id="version" value="1" hidden>
                            <label for="full_name">Name:</label>
                            <input type="text" name="full_name" id="full name">
                            <label for="gender">Gender:</label>
                            <input type="radio" name="gender" id="gender" value="male">M
                            <input type="radio" name="gender" id="gender" value="female">F<br>
                            <label for="dob">Date of Birth:</label>
                            <input type ="date" name="dob" id="dob"><br>
                            <label for="address">Address:</label>
                            <textarea name="address" id="address"></textarea>
                        </fieldset>
                        <button type="submit" name="submit">Submit</button>
                    </form>
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
