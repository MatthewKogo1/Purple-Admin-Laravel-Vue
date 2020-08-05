<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentTypeRequest;
use App\PaymentType;

class PaymentTypeController extends Controller
{
    public function index()
    {
        $paymenttypes = PaymentType::latest()->get();

        return response(['data' => $paymenttypes ], 200);
    }

    public function store(PaymentTypeRequest $request)
    {
        $paymenttype = PaymentType::create($request->all());

        return response(['data' => $paymenttype ], 201);

    }

    public function show($id)
    {
        $paymenttype = PaymentType::findOrFail($id);

        return response(['data', $paymenttype ], 200);
    }

    public function update(PaymentTypeRequest $request, $id)
    {
        $paymenttype = PaymentType::findOrFail($id);
        $paymenttype->update($request->all());

        return response(['data' => $paymenttype ], 200);
    }

    public function destroy($id)
    {
        PaymentType::destroy($id);

        return response(['data' => null ], 204);
    }
}
