<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('user', ['only' => ['create', 'store', 'edit', 'delete']]);
        // Alternativly
        $this->middleware('user', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index',
            [
                "cars" => $cars
            ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.create",[
            "owners"=>Owner::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    Car::create($request->all());
    return redirect()->route("cars.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view("cars.edit", [
            "car"=>$car,
            "owners"=>Owner::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->fill($request->all());
        $car->save();
        return redirect(route("cars.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect(route("cars.index"));
    }
}
