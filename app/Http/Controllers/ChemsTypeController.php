<?php

namespace App\Http\Controllers;

use App\Models\ChemsType;
use Illuminate\Http\Request;

class ChemsTypeController extends Controller
{

    public function index()
    {
        return ChemsType::all();
    }


    public
    function store(Request $request)
    {
        $chemsType = ChemsType::create($request->all());

        return response()->json($chemsType, 201);
    }

    public
    function show($id)
    {
        return ChemsType::find($id);
    }


    public
    function update(Request $request, ChemsTypeController $chemsTypeController)
    {
        $chemsTypeController->update($request->all());

        return response()->json($chemsTypeController, 200);
    }


    public
    function destroy(ChemsTypeController $chemsTypeController)
    {
        $chemsTypeController->delete();

        return response()->json(null, 204);
    }
}
