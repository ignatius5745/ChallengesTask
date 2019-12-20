@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="table">
                <div class="table-header">Personal Information</div>

                <div class="table-body">
                    <table>

                        <tr>
                            <th>
                                Personal Info
                            </th>
                        </tr>
                        <tr>
                            <a href="editprofile.html"><span>Edit</span></a>
                        </tr>
                        <tr>
                            <td>Name :{{$personalinfo->name}}</td>
                            <td>Gender:{{$personalinfo->Gender}}</td>
                        </tr>

                        <tr>
                            <td>Address :</td>
                            <td>Country:</td>
                        </tr>

                        <tr>
                            <td>DOB:</td>
                        </tr>

                        <tr>
                            <td>Phone:</td>
                            <td>Email:</td>
                        </tr>

                        <tr>
                            <td>School:</td>
                        </tr>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
