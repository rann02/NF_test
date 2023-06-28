<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
use App\Http\Requests\CustomerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $query = Customer::all();
        return CustomerResource::collection($query);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CustomerRequest $request)
    {
        //
        $data = $request->validated();
        $customer = Customer::create($data);
        return new CustomerResource($customer);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showById(Request $request)
    {
        //
        $id = $request->route('id');
        $customer = Customer::find($id);
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, CustomerRequest $customer)
    {
        //
        $id = $request->route('id');
        Customer::where('id', $id)
            ->update([
                'name' => $customer->name,
                'email' => $customer->email,
                'image' => $customer->image,
                'phone_number' => $customer->phone_number,
                'birth' => $customer->birth
            ]);
        return 'updated';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->route('id');
        $res = Customer::where('id', $id)->delete();
        return $res;
    }
}