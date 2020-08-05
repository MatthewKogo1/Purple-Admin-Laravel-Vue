<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceiptRequest;
use App\Receipt;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::latest()->get();

        return response(['data' => $receipts ], 200);
    }

    public function store(ReceiptRequest $request)
    {
        $receipt = Receipt::create($request->all());

        return response(['data' => $receipt ], 201);

    }

    public function show($id)
    {
        $receipt = Receipt::findOrFail($id);

        return response(['data', $receipt ], 200);
    }

    public function update(ReceiptRequest $request, $id)
    {
        $receipt = Receipt::findOrFail($id);
        $receipt->update($request->all());

        return response(['data' => $receipt ], 200);
    }

    public function destroy($id)
    {
        Receipt::destroy($id);

        return response(['data' => null ], 204);
    }
}
