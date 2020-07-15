<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;

use App\Room;

class PropertyController extends Controller
{
    public function index(){

        $properties = Property::all();

        $rooms = Room::all()->sortBy('roomAPrice');

        $resultCount = Property::count();

        return view('search-result')->with('properties', $properties)->with('rooms', $rooms)->with('resultCount' , $resultCount);
    }

    public function roomView($pId){

        $property = Property::where('id' , $pId)->first();

        $rooms = Room::where('pId' , $pId)->get()->sortBy('roomAPrice');

        //dd($property);

        return view('room')->with('property' , $property)->with('rooms', $rooms);
    }

    



}
