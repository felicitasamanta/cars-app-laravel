@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Owners</div>
                    <div class="card-body">
                        <a href="{{route('owners.create')}}" class="btn btn-primary float-end">Add new owner</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{$owner-> name}}</td>
                                    <td> {{$owner->surname}}</td>
                                    <td style="width: 200px;" >
                                        <a href="{{route('owners.update', $owner->id)}}" class="btn btn-info">Update</a>
                                        <a href="{{route('owners.delete', $owner->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


