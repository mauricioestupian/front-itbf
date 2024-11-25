<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{

    public function index()
    {
        $hoteles = Hotel::all();
        return response()->json($hoteles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotel = new Hotel;
        $hotel->id_nit=$request->id_nit;
        $hotel->nom=$request->nom;
        $hotel->dir=$request->dir;
        $hotel->num_hab=$request->num_hab;
        $hotel->ciu_id=$request->ciu_id;
        $hotel->save();
        $data = [
            'mensaje'=>'Hotel creado correctamente',
            'hotel'=>$hotel
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        return response()->json($hotel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->id_nit=$request->id_nit;
        $hotel->nom=$request->nom;
        $hotel->dir=$request->dir;
        $hotel->num_hab=$request->num_hab;
        $hotel->ciu_id=$request->ciu_id;
        $hotel->save();
        $data = [
            'mensaje'=>'Hotel actualizado correctamente',
            'hotel'=>$hotel
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        $data = [
            'mensaje'=>'Hotel eliminado correctamente',
            'hotel'=>$hotel
        ];
        return response()->json($data);
    }

    /*public function attach(Request ){

    }*/
}
