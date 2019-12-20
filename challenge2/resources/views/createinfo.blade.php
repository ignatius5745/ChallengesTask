@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form">
                <div class="form-body">
                    <div class="col-md-12">
                    <form action="/createinfo" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="gender" value="Male">M
                        <input type="radio" name="gender" id="gender" value="Female">F<br>
                        <label for="address">Address:</label>
                        <textarea name="address" id="address"></textarea>
                        <label for="country">Country:</label>
                        <select name="country">
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Thailand">Thailand</option>
                        </select><br>
                        <label for="DOB">DOB:</label>
                        <input type="date" name="dob"><br>
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone">
                        <label for="email">Email:</label>
                        <input type="text" name="email"><br>
                        <label for="school">School:</label>
                        <input type="text" name="school"><br>
                        
                        <input type = 'submit' value = "Add info"/>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
