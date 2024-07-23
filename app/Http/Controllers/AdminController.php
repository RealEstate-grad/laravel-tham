<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch any necessary data for the admin dashboard here
        // For example, statistics, user counts, etc.
        
        return view('admin.dashboard'); // Return the admin dashboard view
    }

    // Additional methods for admin functionality can be added here
}