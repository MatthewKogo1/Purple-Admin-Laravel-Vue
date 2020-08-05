<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoldRequest;
use App\Sold;

class SoldController extends Controller
{
    public function index()
    {
        $solds = Sold::latest()->get();

        return response(['data' => $solds ], 200);
    }

    public function store(SoldRequest $request)
    {
        $sold = Sold::create($request->all());

        return response(['data' => $sold ], 201);

    }

    public function show($id)
    {
        $sold = Sold::findOrFail($id);

        return response(['data', $sold ], 200);
    }

    public function update(SoldRequest $request, $id)
    {
        $sold = Sold::findOrFail($id);
        $sold->update($request->all());

        return response(['data' => $sold ], 200);
    }

    public function destroy($id)
    {
        Sold::destroy($id);

        return response(['data' => null ], 204);
    }
}
