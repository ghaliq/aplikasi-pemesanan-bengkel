<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kendaraan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    public function index(): View
    {
       $dataCustomer = Customer::latest()->paginate(10);
       return view('customer.index',compact('dataCustomer'));
    }
    public function create(): View
    {
        return view('customer.create');
    }
    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'id'                 => 'required|unique:customer,id',
            'nama_customer'      => 'required',
            'alamat'             => 'required',
            'jenis_kelamin'      => 'required'
        ]);

        Customer::create([
            'id'                    => $request->id,
            'nama_customer'         => $request->nama_customer,
            'alamat'                =>  $request->alamat,
            'jenis_kelamin'         =>  $request->jenis_kelamin
        ]);
        //redirect to index
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dataCustomer = Customer::findOrFail($id);
        return view('customer.edit', compact('dataCustomer'));
    }

    public function show(string $id): View
    {
        $customer = Customer::findOrFail($id);

        return view('customer.show', compact('customer'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'id'                 => 'required',
            'nama_customer'      => 'required',
            'alamat'             => 'required',
            'jenis_kelamin'      => 'required'
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update([
            'id'                    => $request->id,
            'nama_customer'         => $request->nama_customer,
            'alamat'                => $request->alamat,
            'jenis_kelamin'         => $request->jenis_kelamin
        ]);
        //redirect to index
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id): RedirectResponse
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

