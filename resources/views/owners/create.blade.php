@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New owner</div>
                    <div class="card-body">
                        <form method="post" action="{{route('owners.store')}}" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control" name="surname">
                            </div>
                            <button class="btn btn-success">Add new owner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


