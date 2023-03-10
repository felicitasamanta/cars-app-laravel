@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Owners</div>
                    <div class="card-body">
                        <a href="{{route('owners.create')}}" class="btn btn-primary float-end">Add new owner</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Cars</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{$owner-> name}}</td>
                                    <td> {{$owner->surname}}</td>
                                    <td>
                                        <ul>
                                            @foreach($owner->cars as $car)
                                               <li> {{$car->brand}} {{$car->model}}</li>
                                            @endforeach
                                        </ul>

                                    </td>
                                    <td style="width: 200px;" >
                                        <a href="{{route('owners.update', $owner->id)}}" class="btn btn-info">Update</a>
                                        @if($owner->cars->count()==0)
                                            <a href="{{route('owners.delete', $owner->id)}}" class="btn btn-danger">Delete</a>
                                        @endif

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


