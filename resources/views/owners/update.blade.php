@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update owner</div>
                    <div class="card-body">
                        <form method="post" action="{{route('owners.save', $owner->id )}}" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{$owner->surname}}">
                            </div>
                            @if($owner->cars)
                                <div class="mb-3">
                                    <label class="form-label">Cars</label>
                                    <td>
                                        <ul>
                                            @foreach($owner->cars as $car)
                                                <li> {{$car->brand}} {{$car->model}}</li>
                                            @endforeach
                                        </ul>

                                    </td>
                                </div>
                            @endif

                            <button class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


