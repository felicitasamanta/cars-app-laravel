@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New car</div>
                    <div class="card-body">
                        <form method="post" action="{{route('cars.store')}}" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Registration number</label>
                                <input type="text" class="form-control" name="reg_number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control" name="brand">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model</label>
                                <input type="text" class="form-control" name="model">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Owner name</label>
                                <select name="owner_id" class="form-select">
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Add new car</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


