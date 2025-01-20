<?php
// app/Http/Controllers/TripsController.php
namespace App\Http\Controllers;

use App\Models\Trips;
use App\Models\User;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    // Get all trips
    public function index()
    {
       

        // If the API key is valid, fetch and return the trips
        $trips = Trips::all();
        return response()->json($trips);
    }

    

    // Get trips by user ID
    public function userTrips($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }
        return response()->json($user->trips);
    }

    // Get a specific trip by ID
    public function show($id)
    {
        $trip = Trips::find($id);
        if (!$trip) {
            return response()->json(['message' => 'Trip not found.'], 404);
        }
        return response()->json($trip);
    }

    // Create a new trip
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string',
            'trip_id' => 'required|string',
            'start_location' => 'required|string',
            'end_location' => 'required|string',
            'status' => 'required|string',
            'distance' => 'required|numeric',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
            'pick_up_lat' => 'required|numeric',
            'pick_up_lng' => 'required|numeric',
            'drop_off_lat' => 'required|numeric',
            'drop_off_lng' => 'required|numeric',
            'car_type' => 'nullable|string',
            'driver_name' => 'nullable|string',
        ]);

        $trip = Trips::create($request->all());

        return response()->json($trip, 201);
    }

    // Update an existing trip
    public function update(Request $request, $id)
    {
        $trip = Trips::find($id);
        if (!$trip) {
            return response()->json(['message' => 'Trip not found.'], 404);
        }

        $trip->update($request->all());

        return response()->json($trip);
    }

    // Delete a trip
    public function destroy($id)
    {
        $trip = Trips::find($id);
        if (!$trip) {
            return response()->json(['message' => 'Trip not found.'], 404);
        }

        $trip->delete();

        return response()->json(['message' => 'Trip deleted successfully.']);
    }
}
