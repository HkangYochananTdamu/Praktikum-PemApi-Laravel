<?php

namespace App\Http\Controllers;

// Import model Address
use App\Models\Address; 

// Import return type View
use Illuminate\View\View;

// Import return type RedirectResponse
use Illuminate\Http\RedirectResponse;

// Import HTTP Request
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Get all addresses
        $addresses = Address::latest()->paginate(10);

        // Render view with addresses
        return view('addresses.index', compact('addresses'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('addresses.create');
    }

    /**
     * store
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'street'        => 'required',
            'city'          => 'required',
            'province'      => 'required',
            'country'       => 'required',
            'postal_code'   => 'required',
        ]);

        // Create address
        Address::create([
            'street'        => $request->street,
            'city'          => $request->city,
            'province'      => $request->province,
            'country'       => $request->country,
            'postal_code'   => $request->postal_code,
        ]);

        // Redirect to index
        return redirect()->route('addresses.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
