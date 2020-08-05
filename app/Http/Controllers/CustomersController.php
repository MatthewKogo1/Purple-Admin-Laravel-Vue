<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomersRequest;
use App\Customers;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::latest()->get();

        return response(['data' => $customers ], 200);
    }

    public function store(CustomersRequest $request)
    {
        $customers = Customers::create($request->all());

        return response(['data' => $customers ], 201);

    }

    public function show($id)
    {
        $customers = Customers::findOrFail($id);

        return response(['data', $customers ], 200);
    }

    public function update(CustomersRequest $request, $id)
    {
        $customers = Customers::findOrFail($id);
        $customers->update($request->all());

        return response(['data' => $customers ], 200);
    }

    public function destroy($id)
    {
        Customers::destroy($id);

        return response(['data' => null ], 204);
    }
}
