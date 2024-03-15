<?php

namespace App\Http\Controllers;

// Import model user
use App\Models\User; 

// Import return type View
use Illuminate\View\View;

// Import return type RedirectResponse
use Illuminate\Http\RedirectResponse;

// Import HTTP Request
use Illuminate\Http\Request;

class userControllers extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        // Get all users
        $users = User::latest()->paginate(10);

        // Render view with users
        return view('users.index', compact('users'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
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
            'username'      => 'required|min:5',
            'name'          => 'required|min:5'
        ]);

        // Create user
        User::create([
            'username'      => $request->username,
            'name'          => $request->name
        ]);

        // Redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}

