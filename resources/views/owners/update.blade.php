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

                            @if($owner->cars->count() > 0)
                                <div class="mb-3">
                                    <label class="form-label">Cars</label>
                                    <td>
                                        <ul>
                                            @foreach($owner->cars as $car)
                                                <li> {{$car->brand}} {{$car->model}}
                                                    <form method="post" action="{{route("cars.destroy", $car->id)}}">
                                                        @csrf
                                                        @method("delete")
                                                       <button class="">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                               <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                           </svg>
                                                       </button>
                                                    </form>
                                                    </li>
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


