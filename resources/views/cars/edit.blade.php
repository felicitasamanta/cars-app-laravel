@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update car</div>
                    <div class="card-body">
                        <form method="post" action="{{route('cars.update', $car->id)}}" >
                            @csrf
                            @method("put")
                            <div class="mb-3">
                                <label class="form-label">Registration number</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model</label>
                                <input type="text" class="form-control" name="model" value="{{$car->model}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Owner name</label>

                                <select class="form-select" name="owner_id">
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}" {{($owner->id==$car->owner_id)?"selected":""}}>{{$owner->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


