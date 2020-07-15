<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;

use App\Room;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){

        $cityOproperty = $request->cityOproperty;
        $checkIn = $request->checkIn;
        $checkOut = $request->checkOut;
        $adults = $request->adults;
        $children = $request->children;
        $rooms = $request->rooms;
        $guests = $adults+$children;

        $Properties = DB::table('properties')
        ->join('rooms','properties.id','=','rooms.pId')
        ->where('roomCapacity' , '>=' , $guests)
        ->where('roomsAvailable' , '>=' , $rooms)
        ->where('propertyCity', 'like' , '%'.$cityOproperty.'%')
        ->orWhere('propertyName', 'like' , '%'.$cityOproperty.'%')
        ->get()
        ->unique('pId');

        $resultCount = $Properties->count();

        return view('search-result3')
        ->with('properties' , $Properties)
        ->with('resultCount' , $resultCount)
        ->with('cityOproperty' , $cityOproperty)
        ->with('checkIn' , $checkIn)
        ->with('checkOut' , $checkOut)
        ->with('adults' , $adults)
        ->with('children' , $children)
        ->with('rooms' , $rooms);

       



        
    }
}
