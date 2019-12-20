@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Form Version</div>
                <div class="card-body">
                    <a href="{{route('home')}}">Add</a>
                    <form >
                    <label for="version">Version:</label>
                    <select id="formVersion" onchange="top.location.href = this.options[this.selectedIndex].value">
                        
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br>
                        <button onclick="myFunction()">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
