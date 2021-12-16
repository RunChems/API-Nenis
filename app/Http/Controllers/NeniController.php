<?php

namespace App\Http\Controllers;

use App\Http\Resources\{NeniCollection, NeniResource};
use App\Models\Neni;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class NeniController extends Controller
{

    public function index(): NeniCollection
    {
        return new NeniCollection(Neni::all());
    }


    public function store(Request $request): NeniResource
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'neni_day' => 'required|date',
            'main_activity' => 'required',
        ]);
        $nenis = Neni::create($request->all());
        return new NeniResource($nenis);
    }


    public function show($id): NeniResource
    {
        return new NeniResource(Neni::find($id));

    }


    public function update(Request $request, $id): JsonResponse
    {


        $neni = Neni::where('id', $id)->first()->update($request);
        return response()->json(["Neni actualizada" => $neni, "Mensaje" => "Neni actualizada"]);
    }


    public function destroy($id)
    {
        $neni = Neni::find($id);
        $neni->delete();
    }
}
