<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isFalse;

class OwnerController extends Controller
{
    public function owners() {
        $owners = Owner::all();
        return view('owners.list',
        [
            "owners" => $owners
        ]);
    }

    public function create() {
        return view('owners.create');
    }

    //1:38:00
    public function store(Request $request) {
        $owner = new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route('owners.list');
    }
    public function update($id) {
        $owner=Owner::find($id);
       // dd($owner);
        return view('owners.update', [
            "owner"=>$owner
        ]);
    }
    public function save(Request $request, $id){
        $owner=Owner::find($id);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route('owners.list');
    }
    public function delete($id){
        Owner::destroy($id);
        return redirect()->route("owners.list");
    }
}
