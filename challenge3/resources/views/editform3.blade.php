@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Version 3</div>

                <div class="card-body">
                   
                    <form action="/form3" method="POST">
                        <fieldset>
                        <legend>Version 3</legend>
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <input type="text" name="version" id="version" value="3" hidden>
                            <label for="full_name">Name:</label>
                            <input type="text" name="full_name" id="full name">
                        </fieldset>
                        <fieldset>
                            <legend>Location</legend>
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
