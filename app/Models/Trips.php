<?php
// app/Models/Trip.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id',
        'trip_id',
        'start_location',
        'end_location',
        'status',
        'distance',
        'duration',
        'price',
        'pick_up_lat',
        'pick_up_lng',
        'drop_off_lat',
        'drop_off_lng',
        'car_type',
        'driver_name',
    ];

    // Relationship: A trip belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
