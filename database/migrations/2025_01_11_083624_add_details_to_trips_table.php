<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToTripsTable extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            // Add 'distance' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'distance')) {
                $table->decimal('distance', 8, 2)->nullable();
            }
            
            // Add 'duration' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'duration')) {
                $table->integer('duration')->nullable();
            }
            
            // Add 'price' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'price')) {
                $table->decimal('price', 10, 2)->nullable();
            }
            
            // Add 'pick_up_lat' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'pick_up_lat')) {
                $table->decimal('pick_up_lat', 10, 6)->nullable();
            }
            
            // Add 'pick_up_lng' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'pick_up_lng')) {
                $table->decimal('pick_up_lng', 10, 6)->nullable();
            }
            
            // Add 'drop_off_lat' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'drop_off_lat')) {
                $table->decimal('drop_off_lat', 10, 6)->nullable();
            }
            
            // Add 'drop_off_lng' column only if it doesn't exist
            if (!Schema::hasColumn('trips', 'drop_off_lng')) {
                $table->decimal('drop_off_lng', 10, 6)->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            // Drop the columns that were added
            if (Schema::hasColumn('trips', 'distance')) {
                $table->dropColumn('distance');
            }

            if (Schema::hasColumn('trips', 'duration')) {
                $table->dropColumn('duration');
            }

            if (Schema::hasColumn('trips', 'price')) {
                $table->dropColumn('price');
            }

            if (Schema::hasColumn('trips', 'pick_up_lat')) {
                $table->dropColumn('pick_up_lat');
            }

            if (Schema::hasColumn('trips', 'pick_up_lng')) {
                $table->dropColumn('pick_up_lng');
            }

            if (Schema::hasColumn('trips', 'drop_off_lat')) {
                $table->dropColumn('drop_off_lat');
            }

            if (Schema::hasColumn('trips', 'drop_off_lng')) {
                $table->dropColumn('drop_off_lng');
            }
        });
    }
}
