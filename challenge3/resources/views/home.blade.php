@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <a href="{{route('create')}}">Add</a>
                <div class="card-body">
                    <table class = "col-md-12">
                    <tr class="row">
                        <th class="col-md-3">Owner</th>
                        <th class="col-md-3">Date</th>
                        <th class="col-md-3">Version</th>
                        <th class="col-md-3">Actions</th>
                    </tr>
                    
                        @foreach ($forms as $form)
                    <tr class="row">
                        <td class="col-md-3">{{ $form->full_name }}</td>
                        <td class="col-md-3">{{ $form->date }}</td>
                        <td class="col-md-3">{{ $form->version }}</td>
                        <td class="col-md-3"><a href=''>Edit</a> <a href="">delete</a></td>
                    </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
