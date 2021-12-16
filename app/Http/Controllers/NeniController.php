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
            'chems_type_id' => 'required|integer',
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


        $neni = Neni::find($id);
        $neni->name = $request->name ?? $neni->name;
        $neni->neni_day = $request->neni_day ?? $neni->neni_day;
        $neni->main_activity = $request->main_activity ?? $neni->main_activity;
        $neni->chems_type_id = $request->chems_type_id ?? $neni->chems_type_id;
        $neni->image = $request->image ?? $neni->image;

        $neni->save();
        return response()->json(["Mensaje" => "Neni actualizada", "Neni" => $neni], 200);
    }


    public function destroy($id)
    {
        $neni = Neni::find($id);
        $neni->delete();
    }
}