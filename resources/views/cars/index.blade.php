@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cars</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            @if(\Illuminate\Support\Facades\Auth::user()->rights !== null && \Illuminate\Support\Facades\Auth::user()->rights === 'admin' )
                                <a href="{{route('cars.create')}}" class="btn btn-primary float-end">Add new car</a>
                            @endif
                            <tr>
                                <th>Registration number</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Owner name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{$car->reg_number}}</td>
                                    <td> {{$car->brand}}</td>
                                    <td> {{$car->model}}</td>
                                    <td> {{$car->owner->name}} {{$car->owner->surname}}</td>
                                    <td >
                                        <a href="{{route('cars.edit', $car->id)}}" class="btn btn-info">Update</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route("cars.destroy", $car->id)}}">
                                               @csrf
                                            @method("delete")
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
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


