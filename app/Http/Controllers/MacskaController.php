<?php

namespace App\Http\Controllers;

use App\Models\Macska;
use Illuminate\Http\Request;

class MacskaController extends Controller
{
    public function index()
    {
        return response()->json(Macska::all());
    }

    public function show($id)
    {
        return Macska::find($id);
    }

    public function store(Request $request)
    {
        $macska = new Macska();
        $macska->nev = $request->nev;
        $macska->szul = $request->szul;
        $macska->sus_id = $request->sus_id;
        $macska->save();
    }

    public function update(Request $request, $id)
    {
        $macska = Macska::find($id);
        $macska->nev = $request->nev;
        $macska->szul = $request->szul;
        $macska->sus_id = $request->sus_id;
        $macska->save();
    }

    public function destroy($id)
    {
        Macska::find($id)->delete();
    }

    public function kivalasztott($ids)
    {
        return Macska::find( explode(",", $ids));
    }
}
