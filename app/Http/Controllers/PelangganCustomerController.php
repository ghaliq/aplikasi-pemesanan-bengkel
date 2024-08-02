<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PelangganCustomerController extends Controller
{
    public function index(): View
    {
        $dataCustomer = Customer::latest()->paginate(10);
        return view('levelPelanggan/customer.index', compact('dataCustomer'));
    }

    public function create(): View
    {
        return view('levelPelanggan/customer.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form input
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        // Create new Customer record
        Customer::create([
            'customer_id'=>$request->customer_id,
            'nama_customer' => $request->nama_customer,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // Redirect back to index with success message
        return redirect()->route('customer.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit(string $id): View
    {
        $dataCustomer = Customer::findOrFail($id);
        return view('levelPelanggan/customer.edit', compact('dataCustomer'));
    }

    public function show(string $id): View
    {
        $customer = Customer::findOrFail($id);
        return view('levelPelanggan/customer.show', compact('customer'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate form input
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        // Find the Customer record
        $customer = Customer::findOrFail($id);

        // Update the Customer record
        $customer->update([
            
            'nama_customer' => $request->nama_customer,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // Redirect back to index with success message
        return redirect()->route('customer.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function destroy(string $id): RedirectResponse
    {
        // Find the Customer record
        $customer = Customer::findOrFail($id);

        // Delete the Customer record
        $customer->delete();

        // Redirect back to index with success message
        return redirect()->route('customer.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
