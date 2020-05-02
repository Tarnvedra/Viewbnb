<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwellings', function (Blueprint $table) {
            $table->primary('id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('address');
            $table->longText('about');

            // Amenities
            $table->boolean('amenity_parking')->default(false);
            $table->boolean('amenity_wifi')->default(false);
            $table->boolean('amenity_pets_allowed')->default(false);
            $table->boolean('amenity_tv')->default(false);
            $table->boolean('amenity_air_con')->default(false);
            $table->boolean('amenity_kitchen')->default(false);
            $table->boolean('amenity_shower')->default(true);
            $table->boolean('amenity_bath')->default(false);
            $table->boolean('amenity_breakfast')->default(false);
            $table->boolean('amenity_laptop')->default(false);
            $table->boolean('amenity_hairdryer')->default(false);
            $table->boolean('amenity_Washing_machine')->default(false);
            $table->boolean('amenity_hangers')->default(false);
            $table->boolean('amenity_iron')->default(false);
            $table->boolean('amenity_essentials')->default(false); //soap towels bed sheets etc
            $table->boolean('amenity_heating')->default(true);
            $table->boolean('amenity_hot_water')->default(true);
            $table->boolean('amenity_first_aid_kit')->default(false);
            $table->boolean('amenity_smoke_alarm')->default(true);
            $table->boolean('amenity_outdoor_area')->default(false);
            $table->boolean('amenity_garden')->default(false);

            // Prices
            $table->string('price_per_night')->nullable();
            $table->string('price_extra_people')->nullable();
            $table->string('price_weekly_discount')->nullable();
            $table->string('price_monthly_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dwellings');
    }
}
