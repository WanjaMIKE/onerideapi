<?php

// database/migrations/YYYY_MM_DD_create_trips_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('user_id');  
            $table->string('trip_id');  // Trip unique identifier
            $table->string('start_location');
            $table->string('end_location');
            $table->enum('status', ['upcoming', 'completed']);
            $table->decimal('distance', 8, 2);
            $table->integer('duration');
            $table->decimal('price', 10, 2);
            $table->decimal('pick_up_lat', 10, 6);
            $table->decimal('pick_up_lng', 10, 6);
            $table->decimal('drop_off_lat', 10, 6);
            $table->decimal('drop_off_lng', 10, 6);
            $table->string('car_type')->nullable();
            $table->string('driver_name')->nullable();
            $table->timestamps();  // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('trips');
    }
}

