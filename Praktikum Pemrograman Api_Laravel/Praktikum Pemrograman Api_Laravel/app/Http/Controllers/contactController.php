<?php

namespace App\Http\Controllers;

// Import model Contact
use App\Models\Contact; 

// Import return type View
use Illuminate\View\View;

// Import return type RedirectResponse
use Illuminate\Http\RedirectResponse;

// Import HTTP Request
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Get all contacts
        $contacts = Contact::latest()->paginate(10);

        // Render view with contacts
        return view('contacts.index', compact('contacts'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('contacts.create');
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
            'first_name'    => 'required|min:2',
            'last_name'     => 'required|min:2',
            'email'         => 'required|email|unique:contacts,email',
            'phone'         => 'required'
        ]);

        // Create contact
        Contact::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'phone'         => $request->phone
        ]);

        // Redirect to index
        return redirect()->route('contacts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
