<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    // This method could show a UI to input the API key if you decide to use a UI later
    public function showForm()
    {
        return view('enter-api-key');  // You can create a simple form here to enter the API key if required
    }

    // Method for manually verifying the API key (not needed for your current use case)
    public function verifyApiKey(Request $request)
    {
        $apiKey = $request->input('api_key');
        $validApiKey = env('API_KEY'); // Get valid API key from .env file

        // Check if the provided API key is correct
        if ($apiKey === $validApiKey) {
            // Store valid API key in session if valid
            session(['api_key' => $apiKey]);
            return redirect()->route('trips.api'); // Redirect to the trips API
        }

        // If invalid, redirect back with an error
        return redirect()->back()->withErrors('Invalid API Key');
    }
}
